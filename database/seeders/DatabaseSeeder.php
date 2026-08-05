<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Category\CategorySeeder;
<<<<<<< HEAD
use Database\Seeders\User\UserSeeder;
=======
use Database\Seeders\product\ProductSeeder;
>>>>>>> e5f71bb7cf80c5819b1439b8ec52ff886c8e4e0c
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        $this->call(
            [CategorySeeder::class],
            [UserSeeder::class]
            );

=======
        $this->call([CategorySeeder::class]);
        $this->call([ProductSeeder::class]);
>>>>>>> e5f71bb7cf80c5819b1439b8ec52ff886c8e4e0c
    }
}
