<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Publisher extends Resource
{
    /**
     * @var class-string<\App\Models\Publisher>
     */
    public static $model = \App\Models\Publisher::class;

    /**
     * @var string
     */
    public static $title = 'name';

    /**
     * @var array
     */
    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Название', 'name')->sortable(),
            Slug::make('Name')->from('name')->sortable(),
        ];
    }
}
