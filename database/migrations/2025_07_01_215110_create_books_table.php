<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const TABLE = 'books';

    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();

            $table->foreignId('publisher_id')->constrained();
            $table->foreignId('genre_id')->constrained();

            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('pages');
            $table->integer('format');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
