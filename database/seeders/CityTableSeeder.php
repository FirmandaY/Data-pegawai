<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'city_name' => 'Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_name' => 'Solo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_name' => 'Sragen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_name' => 'Ngawi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_name' => 'Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
