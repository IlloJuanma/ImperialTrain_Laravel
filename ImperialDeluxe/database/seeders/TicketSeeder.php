<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2020-05-01',
                'price' => 68,
                'train_id' => 2,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2018-11-06',
                'price' => 30,
                'train_id' => 1,
                'ticket_type_id' => 3
            ],
            [
                'date' => '2022-02-11',
                'price' => 100,
                'train_id' => 1,
                'ticket_type_id' => 2
            ],
            [
                'date' => '2020-08-20',
                'price' => 120,
                'train_id' => 3,
                'ticket_type_id' => 3
            ],
            [
                'date' => '2004-09-15',
                'price' => 200,
                'train_id' => 4,
                'ticket_type_id' => 1
            ]
            ]);
    }
}
