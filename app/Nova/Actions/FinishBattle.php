<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class FinishBattle extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Закончить кодобатл';

    public function handle(ActionFields $fields, Collection $models): void
    {
        foreach($models as $model) {
            $model->update([
                'closed' => true,
            ]);
        }
    }

    public function fields(NovaRequest $request): array
    {
        return [];
    }
}
