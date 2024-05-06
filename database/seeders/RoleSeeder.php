<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            ([
                'email'=> 'buzzy@gmail.com',
                'role'=>'admin',
               'password'=> Hash::make('000')]);

        }catch (\Exception $exception){Log::info($exception->getMessage());}
    }
}
