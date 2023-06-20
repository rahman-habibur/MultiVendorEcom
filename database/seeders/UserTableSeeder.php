<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*for single data 
        $user = new User();
        $user->name = "Admin";
        $user->username = "Admin";
        $user->email  = "admin@admin.com";
        $user->password  = "123";
        $user->save();
        */


        DB::table('users')->insert([


            // static seed sending 
            
            // Admin 
            [
                "name" => 'Admin',
                "username" => 'admin',
                "email" => 'admin@gmail.com',
                "role" => 'admin',
                "password" => Hash::make('123'),
            ],

            // Vendor 
            [
                "name" => 'Vendor',
                "username" => 'vendor',
                "email" => 'vendor@gmail.com',
                "role" => 'vendor',
                "password" => Hash::make('123'),
            ],

            // User 
            [
                "name" => 'User',
                "username" => 'user',
                "email" => 'user@gmail.com',
                "role" => 'user',
                "password" => Hash::make('123'),
            ]
        ]);
    }
}
