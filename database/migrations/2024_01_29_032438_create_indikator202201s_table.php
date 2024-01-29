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
        Schema::create('indikator202201s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indikator')->nullable();
            $table->string('konsep')->nullable();
            $table->string('definisi')->nullable();
            $table->string('interpretasi')->nullable();
            $table->string('metode_rumus_penghitungan')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('satuan')->nullable();
            $table->string('klasifikasi_penyajian')->nullable();
            $table->string('indikator_komposit')->nullable();
            $table->string('publikasi_ketersediaan')->nullable();
            $table->string('nama_indikator_pembangunan')->nullable();
            $table->string('kegiatan_penghasil')->nullable();
            $table->string('kode_kegiatan')->nullable();
            $table->string('nama_variabel_pembangunan')->nullable();
            $table->string('level_estimasi')->nullable();
            $table->string('dapat_diakses_umum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator202201s');
    }
};
