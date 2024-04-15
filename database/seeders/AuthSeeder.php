<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rabin Dhakal',
            'email' => 'rabin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'amit Dhakal',
            'email' => 'amit@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
