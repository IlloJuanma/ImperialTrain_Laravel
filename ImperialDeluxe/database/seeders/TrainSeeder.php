<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Ave',
                'passengers' => 150,
                'year' => 2002,
                'train_type_id' => 3
            ],
            [
                'name' => 'Avant',
                'passengers' => 180,
                'year' => 2004,
                'train_type_id' => 3
            ],
            [
                'name' => 'Alvia',
                'passengers' => 100,
                'year' => 2003,
                'train_type_id' => 2
            ],
            [
                'name' => 'Talgo',
                'passengers' => 210,
                'year' => 2006,
                'train_type_id' => 3
            ]
            ]);
    }
}
