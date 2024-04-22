<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false); // function to determine either it is an admin or not using the function boolean( true or false)
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('userstable', function (Blueprint $table) {
            //
        });
    }
};
