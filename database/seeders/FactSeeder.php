<?php

namespace Database\Seeders;

use App\Models\Fact;
use App\Models\Source;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fact::factory(20)
            ->has(
                Source::factory(10)
            )
            ->create();
    }
}
