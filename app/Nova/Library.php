<?php

namespace App\Nova;

use App\Enum\BookFormatEnum;
use App\Enum\BookStatusEnum;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Library extends Resource
{
    /**
     * @var class-string<\App\Models\Library>
     */
    public static $model = \App\Models\Library::class;

    /**
     * @var string
     */
    public static $title = 'id';

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

            BelongsTo::make('User', 'user', User::class),
            BelongsTo::make('Book', 'book', Book::class),

            Number::make('Price', 'price'),
            Number::make('Rating', 'rating'),

            Select::make('Формат', 'format')
                ->displayUsing(function ($value) {
                    return BookFormatEnum::from($value)->title();
                })
                ->options(BookFormatEnum::values()),

            Select::make('Status', 'status')
                ->displayUsing(function ($value) {
                    return BookStatusEnum::from($value)->title();
                })
                ->options(BookStatusEnum::values()),

            DateTime::make('Buyed at', 'buyed_at'),
            DateTime::make('Started read', 'started_at'),
            DateTime::make('Ended read', 'ended_at'),
        ];
    }
}
