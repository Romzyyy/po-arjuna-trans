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
        Schema::create('Trans_Tentangkami', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->unique();
            $table->string('Sub_Judul');
            $table->string('Alamat');
            $table->string('Wa')->unique();
            $table->string('Telpon')->unique();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Trans_TentangKami');
    }
};
