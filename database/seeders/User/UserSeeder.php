<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'password',
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => 'password',
                'role' => 'user',
                'status' => 'active',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => 'password',
                'role' => 'user',
                'status' => 'active',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'password' => 'password',
                'role' => 'editor',
                'status' => 'inactive',
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'password' => 'password',
                'role' => 'user',
                'status' => 'active',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
