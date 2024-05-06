<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // try and catch exception handle errors in a program
        Log::info('entering admin seeder');
        try {
            User::create([
                'name' => 'Johan Dex',
                'email' => 'John@example.com',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ]);
            Log::info('admin seed : OK');
        } catch (\Throwable $th) {
            Log::error($th);
        }


    }
}

