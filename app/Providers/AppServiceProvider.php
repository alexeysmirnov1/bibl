<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        \URL::forceScheme('https');

        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }
}
