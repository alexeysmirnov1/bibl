<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const TABLE = 'libraries';

    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('book_id')->constrained();

            $table->integer('price')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('format');
            $table->integer('status');

            $table->timestamp('buyed_at');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
