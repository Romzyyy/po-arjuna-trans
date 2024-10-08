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
        Schema::create('Trans_Home', function(Blueprint $table){
            $table->id();
            $table->string('Nama_Travel');
            $table->string('Nama_Travel1');
            $table->string('Slogan');
            $table->string('Wa');
            $table->string('Logo');
            $table->string('Home');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Trans_Home');
    }
};
