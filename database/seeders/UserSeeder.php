<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'vlad',
                'email' => 'chaly95@gmail.com',
                'password' => Hash::make('1Qwerty@'),
                'related_id' => '1',
                'status' => true,
                'role_id' => 1
            ]
        );
    }
}
