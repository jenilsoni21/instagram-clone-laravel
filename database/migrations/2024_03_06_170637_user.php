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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('password');
            $table->date('date_of_birth');
            $table->text('bio');
            $table->string('gender');
            $table->string('profile_image');
            $table->boolean('status');
            $table->timestamps();
        });   
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
