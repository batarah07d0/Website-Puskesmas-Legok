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
        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->enum('kategori', ['Poli Gigi', 'Poli Umum', 'Poli Lansia dan Ibu Hamil', 'Poli Kesehatan Ibu dan Anak']);
            $table->enum('waktu_pelayanan', ['08:00', '09:00', '10:00', '11:00']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->dropColumn(['kategori', 'waktu_pelayanan']);
        });
    }
};
