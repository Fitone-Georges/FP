<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {   // try and catch exception handle errors in a program

            User::create([     //from line 20-28 creating admin data manually to seed in the program
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'is_admin'=> true,
            ]);
        }catch (\Exception $exception){
            log::info($exception);
        }
    }
}
