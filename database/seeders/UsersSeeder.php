<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
        
    }
}
