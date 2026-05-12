<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('telefonos')->insert([
            [
                'marca' => 'Samsung',
                'modelo' => 'Galaxy S25 Ultra',
                'precio' => 1150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'IPhone',
                'modelo' => 'Pro Max 17',
                'precio' => 1700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Samsung',
                'modelo' => 'Galaxy S25 Ultra',
                'precio' => 1150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'IPhone',
                'modelo' => 'Pro Max 17',
                'precio' => 1700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Samsung',
                'modelo' => 'Galaxy S25 Ultra',
                'precio' => 1150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
