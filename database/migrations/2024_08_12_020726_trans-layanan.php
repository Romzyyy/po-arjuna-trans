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
        Schema::create('Trans_Layanan', function (Blueprint $table) {
           $table->id();
           $table->string('Judul_Halaman');
           $table->text('Keterangan_Umum');
           $table->string('Wa')->unique();
           $table->integer('Total_Pelanggan');
           $table->integer('Total_Pelanggan_Terlayani');
           $table->string('Gambar');
           $table->string('Gambar1');
           $table->string('Gambar2');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Trans_Layanan');
    }
};
