<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "ElGato",
            'email' => 'davemmgarcia@gmail.com',
            'password' => Hash::make('davemmgarcia@gmail.com'),
            'status' => "active",
            'role' => "admin"
        ]);
    }
}
