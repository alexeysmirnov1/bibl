<?php

namespace App\Nova;

use App\Enum\BookFormatEnum;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Book extends Resource
{
    /**
     * @var class-string<\App\Models\Book>
     */
    public static $model = \App\Models\Book::class;

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

            Text::make('Название', 'name'),

            Slug::make('Slug', 'slug')->from('name'),

            Number::make('Количество страниц', 'pages'),

            Select::make('Формат', 'format')
                ->displayUsing(function ($value) {
                    return BookFormatEnum::from($value)->title();
                })
                ->options(BookFormatEnum::values()),

            BelongsTo::make('Жанр', 'genre', Genre::class),

            BelongsTo::make('Издатель', 'publisher', Publisher::class),
        ];
    }
}
