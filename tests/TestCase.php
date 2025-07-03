<?php

namespace Tests;

use App\Http\Middleware\VerifyApiClientToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Mockery\MockInterface;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake();
        Bus::fake();
        Queue::fake();
        Notification::fake();
        Mail::fake();

        $this->withoutMiddleware(VerifyApiClientToken::class);

        $this->createMockScoutObserver();
    }

    protected function floatValueToResponseValue(float $value): float|int
    {
        $jsonValue = json_encode($value);

        return floor($jsonValue) == $value ? intval($value) : $value;
    }

    protected function createMockScoutObserver(): void
    {
        $this->mock(\Laravel\Scout\ModelObserver::class, function(MockInterface $mock) {
            $mock->shouldReceive('saved')
                ->andReturnUsing(function($model) {});
        });
    }
}
