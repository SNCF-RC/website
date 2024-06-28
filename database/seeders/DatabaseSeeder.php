<?php

namespace Database\Seeders;

use App\Models\Assurance;
use App\Models\Bank;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Assurance::factory(10)->create();
    }
}
