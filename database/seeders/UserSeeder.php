<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Log::info('entering admin seeder');
        try {
            Log::info('entering admin seeder try');
            User::factory(6)->create([
                'password' => Hash::make('567'),
                'role'=> 'user'
            ]);
            Log::info('user seed : OK');
        }catch (\Exception $exception){
            Log::info($exception);
        }
    }
}
