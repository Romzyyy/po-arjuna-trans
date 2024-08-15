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
        Schema::create('Trans_Users', function(Blueprint $table){
            $table->id();
            $table->string('Email')->uniqid();
            $table->string('Username')->uniqid();
            $table->string('Password');
            $table->integer('Level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Trans_Users');
    }
};
