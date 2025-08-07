<?php

namespace App\Enum;

enum BookFormatEnum: int
{
    case AUDIO = 1;
    case EBOOK = 2;
    case BOOK = 3;
    case SOFT = 4;

    public function title(): string
    {
        return match ($this) {
            self::AUDIO => 'Аудио книга',
            self::EBOOK => 'Электронная книга',
            self::BOOK => 'Твёрдая обложка',
            self::SOFT => 'Мягкая обложка',
        };
    }

    public static function values(): array
    {
        return [
            self::AUDIO->value => 'Аудио книга',
            self::EBOOK->value => 'Электронная книга',
            self::BOOK->value => 'Твёрдая обложка',
            self::SOFT->value => 'Мягкая обложка',
        ];
    }
}
