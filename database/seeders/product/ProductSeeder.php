<?php

namespace Database\Seeders\product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Laptop Dell Inspiron',
                'sku' => 'DEL001',
                'quantity' => 10,
                'price' => 850.00,
                'description' => '15.6-inch Intel Core i5 Laptop'
            ],
            [
                'category_id' => 1,
                'name' => 'Wireless Mouse',
                'sku' => 'MOU002',
                'quantity' => 50,
                'price' => 18.50,
                'description' => '2.4GHz USB Wireless Mouse'
            ],
            [
                'category_id' => 1,
                'name' => 'Mechanical Keyboard',
                'sku' => 'KEY003',
                'quantity' => 25,
                'price' => 65.00,
                'description' => 'RGB Mechanical Gaming Keyboard'
            ],
            [
                'category_id' => 2,
                'name' => 'Digital Thermometer',
                'sku' => 'MED004',
                'quantity' => 40,
                'price' => 12.99,
                'description' => 'Medical digital thermometer'
            ],
            [
                'category_id' => 2,
                'name' => 'Blood Pressure Monitor',
                'sku' => 'MED005',
                'quantity' => 15,
                'price' => 45.50,
                'description' => 'Automatic blood pressure monitor'
            ],
            [
                'category_id' => 2,
                'name' => 'Pulse Oximeter',
                'sku' => 'MED006',
                'quantity' => 20,
                'price' => 29.99,
                'description' => 'Finger pulse oximeter'
            ],
            [
                'category_id' => 3,
                'name' => 'Electric Drill',
                'sku' => 'MEC007',
                'quantity' => 12,
                'price' => 95.00,
                'description' => '650W electric drill machine'
            ],
            [
                'category_id' => 3,
                'name' => 'Angle Grinder',
                'sku' => 'MEC008',
                'quantity' => 18,
                'price' => 70.00,
                'description' => 'Heavy-duty angle grinder'
            ],
            [
                'category_id' => 3,
                'name' => 'Tool Box',
                'sku' => 'MEC009',
                'quantity' => 30,
                'price' => 40.00,
                'description' => 'Portable steel toolbox'
            ],
            [
                'category_id' => 1,
                'name' => 'USB Flash Drive 64GB',
                'sku' => 'USB010',
                'quantity' => 100,
                'price' => 15.99,
                'description' => '64GB USB 3.0 Flash Drive'
            ]
        ]);
    }
}
