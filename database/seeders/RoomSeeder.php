<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'temperature' => -2,
                'locations_id' => 1
            ],
            [
                'temperature' => -1,
                'locations_id' => 2
            ],
            [
                'temperature' => -2,
                'locations_id' => 3
            ],
            [
                'temperature' => -2,
                'locations_id' => 4
            ],
            [
                'temperature' => -1,
                'locations_id' => 5
            ],
            [
                'temperature' => -2,
                'locations_id' => 6
            ],
            [
                'temperature' => -1,
                'locations_id' => 1
            ],
            [
                'temperature' => -1,
                'locations_id' => 2
            ],
            [
                'temperature' => -1,
                'locations_id' => 3
            ],
            [
                'temperature' => -2,
                'locations_id' => 4
            ],
            [
                'temperature' => -2,
                'locations_id' => 5
            ],
            [
                'temperature' => -1,
                'locations_id' => 6
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }
}
