<?php

declare(strict_types=1);

namespace App\Nova\Filters;

use Laravel\Nova\Filters\BooleanFilter;
use Laravel\Nova\Http\Requests\NovaRequest;

class PublishedAtFilter extends BooleanFilter
{
    public $name = 'Публикация';

    /**
     * Apply the filter to the given query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        return $query
            ->when($value['is_published'], fn($query) => $query->whereDate('published_at', '<=', now()))
            ->when($value['is_not_published'], fn($query) => $query->whereDate('published_at', '>', now()));
    }

    /**
     * Get the filter's available options.
     *
     * @return array
     */
    public function options(NovaRequest $request)
    {
        return [
            'Опубликован' => 'is_published',
            'Не опубликовано' => 'is_not_published',
        ];
    }
}
