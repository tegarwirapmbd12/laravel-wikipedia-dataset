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
        Schema::create('variabel202201s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_variabel')->nullable();
            $table->string('alias')->nullable();
            $table->string('konsep')->nullable();
            $table->string('definisi')->nullable();
            $table->string('referensi_pemilihan')->nullable();
            $table->string('referensi_waktu')->nullable();
            $table->string('tipe_data')->nullable();
            $table->string('klasifikasi_isian')->nullable();
            $table->string('aturan_validasi')->nullable();
            $table->string('kalimat_pertanyaan')->nullable();
            $table->string('dapat_diakses_umum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variabel202201s');
    }
};
