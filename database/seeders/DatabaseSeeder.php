<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(AdminSeeder::class); //from line 17-19 calling both the users and admin data directly to the seeder  database
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
