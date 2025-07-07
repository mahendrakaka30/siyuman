<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Membuat tabel mahasiswa
        Schema::create('dosen', function (Blueprint $table) {
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('jurusan');
            $table->integer('nilai');
        });

        // Menambahkan kolom nim ke tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim')->unique()->after('id');
        });
    }

    /**
     * Membatalkan migrasi.
     */
    public function down(): void
    {
        // Hapus tabel mahasiswa
        Schema::dropIfExists('dosen');

        // Hapus kolom nim dari users
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nim');
        });
    }
};