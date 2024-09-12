<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Price',
                'email' => 'johnice@example.com',
                'position' => 'Lead Engineer',
                'address' => 'Yogyakarta',
                'start_date' => now(),
                'photo' => 'default.png',
                'report' => 'default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John McTavish',
                'email' => 'johnsoap@example.com',
                'position' => 'Senior Engineer',
                'address' => 'Solo',
                'start_date' => now(),
                'photo' => 'default.png',
                'report' => 'default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'position' => 'Junior Engineer',
                'address' => 'Sragen',
                'start_date' => now(),
                'photo' => 'default.png',
                'report' => 'default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
