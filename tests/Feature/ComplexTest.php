<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Building;
use App\Models\Complex;
use App\Models\SaleFlat;
use Domoteka\Flat\Domain\Values\Enums\FlatStatusEnum;
use Tests\TestCase;

class ComplexTest extends TestCase
{
    public function testActiveSaleFlatsForSelection(): void
    {
        $complex = Complex::factory()->city()->create();

        $building = Building::factory()->complex($complex)->create();

        $cheapStudioFlat = SaleFlat::factory()->for($building)->create([
            'rooms' => 0,
            'price' => 1_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        SaleFlat::factory()->for($building)->create([
            'rooms' => 0,
            'price' => 2_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        $cheapOneRoomFlat = SaleFlat::factory()->for($building)->create([
            'rooms' => 1,
            'price' => 3_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        SaleFlat::factory()->for($building)->create([
            'rooms' => 1,
            'price' => 4_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        SaleFlat::factory()->for($building)->create([
            'rooms' => 2,
            'price' => 5_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        $saleFlatForSelection = $complex->activeSaleFlatsForSelection()->get();

        $this->assertCount(3, $saleFlatForSelection);

        $this->assertEquals(
            $saleFlatForSelection->get(0)->getKey(),
            $cheapStudioFlat->getKey()
        );

        $this->assertEquals(
            $saleFlatForSelection->get(1)->getKey(),
            $cheapOneRoomFlat->getKey(),
        );
    }

    public function testDoubleFlatsOnComplex()
    {
        $complex = Complex::factory()->city()->create();

        $building = Building::factory()->complex($complex)->create();

        SaleFlat::factory(10)->for($building)->create([
            'rooms' => 2,
            'price' => 2_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        SaleFlat::factory(10)->for($building)->create([
            'rooms' => 3,
            'price' => 3_000_000,
            'status' => FlatStatusEnum::ACTIVE,
        ]);

        $this->assertCount(2, $complex->activeSaleFlatsForSelection()->get());
    }
}
