<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Детектив',
                'slug' => 'detectiv',
            ],
            [
                'name' => 'Фэнтези',
                'slug' => 'fantasy',
            ],
        ];

        foreach ($genres as $genre) {
            Genre::factory()->create($genre);
        }
    }
}
