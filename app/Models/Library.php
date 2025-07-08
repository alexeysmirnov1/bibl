<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\BookFormatEnum;
use App\Enum\BookStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Library extends Model
{
    use HasFactory;

    protected $casts = [
        'buyed_at' => 'datetime',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'status' => BookStatusEnum::class,
        'format' => BookFormatEnum::class,
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
