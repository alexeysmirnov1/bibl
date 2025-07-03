<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class StartVote extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Начать голосование';

    public function handle(ActionFields $fields, Collection $models): void
    {
        foreach($models as $model) {
            $model->update([
                'vote_opened' => true,
            ]);
        }
    }

    public function fields(NovaRequest $request): array
    {
        return [];
    }
}
