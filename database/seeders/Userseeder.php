<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            User::factory(6)->create([
                'email' => 'admin@admin.com',
                'password' => Hash::make('123'),
                'is_admin' => false,
            ]);
        }catch (\Exception $exception){
            log::info($exception);
        }
    }
}
