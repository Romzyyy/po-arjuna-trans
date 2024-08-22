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
        Schema::create('Trans_Trip', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Halaman');
            $table->string('Wa')->unique();
            $table->date('Jadwal_Trip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Trans_Trip');
    }
};
