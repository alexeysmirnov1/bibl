<?php

namespace App\Nova\Actions;

use App\Models\Vote;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class CreateVote extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Создать голосование';

    public function handle(ActionFields $fields, Collection $models): void
    {
        Vote::create([
            'task_id' => $models->first()->id,
        ]);
    }
}
