<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electronice',
                'description' => 'Testing Pro',
                'status' => 'active'
            ],
            [
                'name' => 'Medical Tech',
                'description' => 'Diagnostic tests, vaccines, and support systems',
                'status' => 'active'
            ],
            [
                'name' => 'Mechanical Tech',
                'description' => 'Engines, gears, levers, and basic tools',
                'status' => 'active'
            ]
        ]);
    }
}
