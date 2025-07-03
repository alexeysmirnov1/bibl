<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        $publishers = [
            [
                'name' => 'Миф',
                'slug' => 'mif',
            ],
            [
                'name' => 'АСТ',
                'slug' => 'ast',
            ],
        ];

        foreach ($publishers as $publisher) {
            Publisher::factory()->create($publisher);
        }
    }
}
