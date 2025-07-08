<?php

namespace App\Enum;

enum BookStatusEnum: int
{
    case NOT_STARTED = 1;
    case IN_PROGRESS = 2;
    case DONE = 3;

    public function title(): string
    {
        return match ($this) {
            self::NOT_STARTED => 'Не начато',
            self::IN_PROGRESS => 'Читаю',
            self::DONE => 'Прочитано',
        };
    }

    public static function values(): array
    {
        return [
            self::NOT_STARTED->value => 'Не начато',
            self::IN_PROGRESS->value => 'Читаю',
            self::DONE->value => 'Прочитано',
        ];
    }
}
