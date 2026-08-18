<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Nike',
                'image'=> 'image.png',
                'description'=>'best brands in world',
                'status'=>true
            ],
            [
                'name' => 'Mc Dunal',
                'image'=> 'image.png',
                'description'=>'best brands in world',
                'status'=>true
            ],
            [
                'name' => 'Coca_COla',
                'image'=> 'image.png',
                'description'=>'best brands in world',
                'status'=>true
            ],
            [
                'name' => 'amazon',
                'image'=> 'image.png',
                'description'=>'best brands in world',
                'status'=>true
            ],
            [
                'name' => 'tube',
                'image'=> 'image.png',
                'description'=>'best brands in world',
                'status'=>true
            ]
        ]);
    }
}
