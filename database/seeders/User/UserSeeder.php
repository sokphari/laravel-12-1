<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // $users = User::created();
        // foreach($users as $user){
        //     DB::table('users')->insert([
        //         [
        //             'name' => $user->name,
        //             'email' => $user->email,
        //             'password' => Hash::make('11223344'), // Always hash passwords
        //             'role' => 'admin',
        //             'department' => 'IT',
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ],
        //     ]);
        // }
        
    }
}
