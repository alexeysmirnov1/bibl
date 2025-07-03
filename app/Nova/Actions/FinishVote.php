<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class FinishVote extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Закончить голосование';

    public function handle(ActionFields $fields, Collection $models): void
    {
        foreach($models as $model) {
            //            try {
            DB::beginTransaction();
            $model->update([
                'vote_closed' => true,
            ]);

            $solutions = $model->solutions;
            $solutions->loadCount('votes');
            $best = $solutions->sortBy([['votes_count', 'desc']])->first();
            $best->update([
                'the_best' => true,
            ]);
            DB::commit();
            //            } catch (\Exception) {
            //                DB::rollBack();
            //            }
        }
    }

    public function fields(NovaRequest $request): array
    {
        return [];
    }
}
