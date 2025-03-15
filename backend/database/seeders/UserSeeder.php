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
                    'first_name' => 'test_first_name',
                    'last_name' => 'test_last_name',
                    'email' => 'test@test.com',
                    'password' => Hash::make('password'),
                ],
                [
                    'first_name' => 'test_first_name2',
                    'last_name' => 'test_last_name2',
                    'email' => 'test2@test.com',
                    'password' => Hash::make('password'),
                ],
            ]
        );
    }
}
