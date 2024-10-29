<?php

namespace Database\Seeders;

use App\Models\TestData;
use App\Models\TestDataRelation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        TestData::factory(20)->create();

        TestData::all()->each(function (TestData $testData): void {
            $relation = TestDataRelation::factory(1)->make()->first();
            $testData->relation()->save($relation);
        });
    }
}
