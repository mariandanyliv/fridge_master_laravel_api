<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocks = [
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
            [
                'rooms_id' => rand(1,12),
                'location_id' => rand(1,6),
            ],
        ];

        DB::table('blocks')->insert($blocks);
    }
}
