<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            ['pesto_id' => 1, 'name' => 'fűszernövény', 'quantity' => '8.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 1, 'name' => 'fokhagyma', 'quantity' => '2.00', 'unit' => 'gerezd'],
            ['pesto_id' => 1, 'name' => 'parmezán', 'quantity' => '6.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 1, 'name' => 'fenyőmag', 'quantity' => '2.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 1, 'name' => 'olívaolaj', 'quantity' => '8.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 1, 'name' => 'só', 'quantity' => null, 'unit' => 'tetszés szerint'],
            ['pesto_id' => 1, 'name' => 'bors', 'quantity' => null, 'unit' => 'tetszés szerint'],
            ['pesto_id' => 2, 'name' => 'fokhagyma', 'quantity' => '1.00', 'unit' => 'gerezd'],
            ['pesto_id' => 2, 'name' => 'olívaolaj', 'quantity' => '2.00', 'unit' => 'dl'],
            ['pesto_id' => 2, 'name' => 'szárított paradicsom', 'quantity' => '10.00', 'unit' => 'dkg'],
            ['pesto_id' => 2, 'name' => 'paradicsompüré', 'quantity' => '2.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 2, 'name' => 'só', 'quantity' => null, 'unit' => 'tetszés szerint'],
            ['pesto_id' => 2, 'name' => 'bors', 'quantity' => null, 'unit' => 'tetszés szerint'],
            ['pesto_id' => 2, 'name' => 'cukor', 'quantity' => null, 'unit' => 'tetszés szerint'],
            ['pesto_id' => 2, 'name' => 'kezeletlen citrom héja', 'quantity' => '1.00', 'unit' => 'db'],
            ['pesto_id' => 2, 'name' => 'reszelt parmezán sajt', 'quantity' => '5.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 3, 'name' => 'érett kápia paprika', 'quantity' => '70.00', 'unit' => 'dkg'],
            ['pesto_id' => 3, 'name' => 'tökmagolaj', 'quantity' => '1.00', 'unit' => 'dl'],
            ['pesto_id' => 3, 'name' => 'vörösborecet', 'quantity' => '1.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 3, 'name' => 'frissen darált, enyhén pirított dió', 'quantity' => '5.00', 'unit' => 'dkg'],
            ['pesto_id' => 3, 'name' => 'frissen reszelt kemény sajt', 'quantity' => '5.00', 'unit' => 'dkg'],
            ['pesto_id' => 3, 'name' => 'tengeri só', 'quantity' => '0.50', 'unit' => 'teáskanál'],
            ['pesto_id' => 3, 'name' => 'fokhagyma', 'quantity' => '2.00', 'unit' => 'gerezd'],
            ['pesto_id' => 3, 'name' => 'zsályalevél felaprítva', 'quantity' => '5.00', 'unit' => 'db'],
            ['pesto_id' => 3, 'name' => 'chili', 'quantity' => '0.50', 'unit' => 'kávéskanál'],
            ['pesto_id' => 4, 'name' => 'héj nélküli tökmag', 'quantity' => '10.00', 'unit' => 'dkg'],
            ['pesto_id' => 4, 'name' => 'fokhagyma', 'quantity' => '4.00', 'unit' => 'gerezd'],
            ['pesto_id' => 4, 'name' => 'olaj', 'quantity' => '1.00', 'unit' => 'dl'],
            ['pesto_id' => 4, 'name' => 'tökmagolaj', 'quantity' => '2.00', 'unit' => 'teáskanál'],
            ['pesto_id' => 4, 'name' => 'reszelt parmezán sajt', 'quantity' => '5.00', 'unit' => 'evőkanál'],
            ['pesto_id' => 4, 'name' => 'bazsalikom', 'quantity' => '1.00', 'unit' => 'csokor'],
            ['pesto_id' => 4, 'name' => 'petrezselyemzöld', 'quantity' => '1.00', 'unit' => 'csokor'],
            ['pesto_id' => 4, 'name' => 'só', 'quantity' => null, 'unit' => 'tetszés szerint'],

        ]);
    }
}
