<?php

namespace Database\Seeders;

use App\Models\Komputer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komputer::factory()->count(20)->create();
    }
}