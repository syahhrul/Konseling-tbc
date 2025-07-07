<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('check_harian', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Untuk menghubungkan ke tabel user
            $table->boolean('frekuensi_batuk')->nullable(); // Parah / Tidak
            $table->boolean('panas')->nullable(); // Ya / Tidak
            $table->boolean('keringat_dingin')->nullable(); // Ya / Tidak
            $table->boolean('lupa_minum_obat')->nullable(); // Ya / Tidak
            $table->text('alasan_lupa')->nullable(); // Alasan lupa minum obat
            $table->boolean('mual_saat_minum_obat')->nullable(); // Ya / Tidak
            $table->boolean('berat_badan_turun')->nullable(); // Turun / Tidak
            $table->timestamps(); // Untuk created_at dan updated_at
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Menyambungkan ke tabel users
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_harian');
    }
};