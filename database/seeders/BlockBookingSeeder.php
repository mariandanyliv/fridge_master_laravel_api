<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocksBookings = [
            [
                'blocks_id' => rand(1,3),
                'bookings_id' => rand(1,3),
            ],
            [
                'blocks_id' => rand(1,3),
                'bookings_id' => rand(1,3),
            ],
            [
                'blocks_id' => rand(1,3),
                'bookings_id' => rand(1,3),
            ]
        ];

        DB::table('blocks_bookings')->insert($blocksBookings);
    }
}
