<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'location' => 'Wilmington (North Carolina)'
            ],
            [
                'location' => 'Portland  (Oregon)'
            ],
            [
                'location' => 'Toronto'
            ],
            [
                'location' => 'Warsaw'
            ],
            [
                'location' => 'Valencia'
            ],
            [
                'location' => 'Shanghai'
            ],

        ];

        DB::table('locations')->insert($locations);
    }
}
