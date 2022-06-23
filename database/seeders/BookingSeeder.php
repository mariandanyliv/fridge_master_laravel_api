<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
          [
              'user_id' =>  rand(1,10),
              'amount' => 200,
              'code' => Str::random(12),
              'date_from' => date('Y-m-d'),
              'date_to' =>  date('Y-m-d'),
          ],
          [
              'user_id' => rand(1,10),
              'amount' => 500,
              'code' => Str::random(12),
              'date_from' =>  date('Y-m-d'),
              'date_to' =>  date('Y-m-d'),
          ],
          [
              'user_id' => rand(1,10),
              'amount' => 300,
              'code' => Str::random(12),
              'date_from' =>  date('Y-m-d'),
              'date_to' =>  date('Y-m-d'),

          ]
        ];

        DB::table('bookings')->insert($bookings);
    }
}
