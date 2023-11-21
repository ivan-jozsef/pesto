<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            ['pesto_id' => 1, 'filename' => 'mediterran.jpg', 'main' => true],
            ['pesto_id' => 2, 'filename' => 'paradicsomos.jpg', 'main' => true],
            ['pesto_id' => 3, 'filename' => 'paprika.webp', 'main' => true],
            ['pesto_id' => 4, 'filename' => 'tokmagos.jpg', 'main' => true],
        ]);
    }
}
