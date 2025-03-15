<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'test',
                    'email' => 'test@test.com',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'test2',
                    'email' => 'test2@test.com',
                    'password' => Hash::make('password'),
                ],
            ]
        );
    }
}
