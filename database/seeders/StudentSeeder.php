<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'gender' => 'male',
                'phone' => '1234567890',
                'address' => '123 Main St',
                'image' => 'john_doe.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'gender' => 'female',
                'phone' => '9876543210',
                'address' => '456 Elm St',
                'image' => 'jane_smith.jpg',
            ]
        ]);
    }
}
