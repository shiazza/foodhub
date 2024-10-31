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
        DB::table('user')->insert([
            'role' => 0, /*It's mean Admins!*/
            'username' => 'bubukmesiu',
            'email' => 'admin@fd.com',
            'pass' => Hash::make('adminpassword'),
            'name' => 'Admin',
            'bio' => 'Kang Banned',
            'rating' => 5,
            'co_following' => 0,
            'co_followers' => 0,
        ]);
    }
}
