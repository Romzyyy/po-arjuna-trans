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
           $table->string('Nama_Layanan');
           $table->string('Gambar');
           $table->string('Keterangan');
           $table->enum('Aktif', ['Aktif', 'Tidak Aktif'])->default('Aktif');

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
