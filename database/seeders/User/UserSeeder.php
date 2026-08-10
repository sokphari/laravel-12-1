<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'name'       => 'Admin',
                'email'      => 'admin@gmail.com',
                'password'   => Hash::make('password'),
                'role'       => 'admin',
                'department' => 'IT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Manage',
                'email'      => 'manage@gmail.com',
                'password'   => Hash::make('password'),
                'role'       => 'manage',
                'department' => 'HR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Client',
                'email'      => 'client@gmail.com',
                'password'   => Hash::make('password'),
                'role'       => 'user',
                'department' => 'Sales',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
