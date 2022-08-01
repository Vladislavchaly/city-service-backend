<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'key' => 'owner',
                'title' => 'Owner',
                'not_remove' => 1,
                'access_admin' => 1,
                'access_create' => 1,
                'registry' => 0
            ],
            [
                'key' => 'super_admin',
                'title' => 'Super Admin',
                'not_remove' => 0,
                'access_admin' => 1,
                'access_create' => 1,
                'registry' => 0
            ],
            [
                'key' => 'manager',
                'title' => 'Manager',
                'not_remove' => 0,
                'access_admin' => 1,
                'access_create' => 0,
                'registry' => 0
            ],
            [
                'key' => 'school',
                'title' => 'School',
                'not_remove' => 1,
                'access_admin' => 0,
                'access_create' => 0,
                'registry' => 1
            ],
            [
                'key' => 'student',
                'title' => 'Student',
                'not_remove' => 1,
                'access_admin' => 0,
                'access_create' => 0,
                'registry' => 1
            ],
            [
                'key' => 'recruiter',
                'title' => 'Recruiter',
                'not_remove' => 1,
                'access_admin' => 0,
                'access_create' => 0,
                'registry' => 1
            ],
            [
                'key' => 'manager',
                'title' => 'Manager',
                'not_remove' => 1,
                'access_admin' => 1,
                'access_create' => 0,
                'registry' => 0
            ]
        ]);
    }
}
