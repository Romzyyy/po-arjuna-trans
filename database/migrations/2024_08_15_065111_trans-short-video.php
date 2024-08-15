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
        Schema::create('Trans_Short_Video', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Halaman');
            $table->text('Youtube');
            $table->text('Instagram');
            $table->text('Tiktok');
            $table->text('Facebook');
            $table->integer('Short_Video');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_short_video');
    }
};
