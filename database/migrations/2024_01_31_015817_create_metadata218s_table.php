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
        Schema::create('metadata218s', function (Blueprint $table) {
            $table->id();
            $table->text('nama_indikator')->nullable();
            $table->string('konsep_indikator')->nullable();
            $table->text('definisi_indikator')->nullable();
            $table->text('interpretasi')->nullable();
            $table->text('metode_rumus_penghitungan')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('satuan')->nullable();
            $table->string('klasifikasi_penyajian')->nullable();
            $table->string('indikator_komposit')->nullable();
            $table->text('publikasi_ketersediaan')->nullable();
            $table->text('nama_indikator_pembangunan')->nullable();
            $table->text('kegiatan_penghasil')->nullable();
            $table->string('kode_kegiatan')->nullable();
            $table->text('nama_variabel_pembangunan')->nullable();
            $table->string('level_estimasi')->nullable();
            $table->string('dapat_diakses_umum_indikator')->nullable();
            $table->string('nama_variabel')->nullable();
            $table->string('alias')->nullable();
            $table->string('konsep_variabel')->nullable();
            $table->text('definisi_variabel')->nullable();
            $table->text('referensi_pemilihan')->nullable();
            $table->string('referensi_waktu')->nullable();
            $table->string('tipe_data')->nullable();
            $table->text('klasifikasi_isian')->nullable();
            $table->string('aturan_validasi')->nullable();
            $table->string('kalimat_pertanyaan')->nullable();
            $table->string('dapat_diakses_umum_variabel')->nullable();
            $table->text('judul_kegiatan')->nullable();
            $table->string('instansi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('faksimile')->nullable();
            $table->string('eselon_1')->nullable();
            $table->string('eselon_2')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('perencanaan_kegiatan_awal')->nullable();
            $table->string('perencanaan_kegiatan_akhir')->nullable();
            $table->string('desain_awal')->nullable();
            $table->string('desain_akhir')->nullable();
            $table->string('pengumpulan_data_awal')->nullable();
            $table->string('pengumpulan_data_akhir')->nullable();
            $table->string('pengolahan_data_awal')->nullable();
            $table->string('pengolahan_data_akhir')->nullable();
            $table->string('analisis_awal')->nullable();
            $table->string('analisis_akhir')->nullable();
            $table->string('diseminasi_hasil_awal')->nullable();
            $table->string('diseminasi_hasil_akhir')->nullable();
            $table->string('evaluasi_awal')->nullable();
            $table->string('evaluasi_akhir')->nullable();
            $table->string('file_indikator')->nullable();
            $table->string('file_kegiatan')->nullable();
            $table->string('file_variabel')->nullable();
            $table->text('latar_belakang')->nullable();
            $table->text('tujuan_kegiatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadata218s');
    }
};
