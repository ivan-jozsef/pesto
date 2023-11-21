<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pestos')->insert([
            ['name' => 'Mediterrán pesto', 'minutes' => 15],
            ['name' => 'Paradicsomos pesto', 'munites' => 15],
            ['name' => 'Paprika pesto', 'munites' => 25],
            ['name' => 'Tökmagos pesto', 'munites' => 15],
        ]);
    }
}
