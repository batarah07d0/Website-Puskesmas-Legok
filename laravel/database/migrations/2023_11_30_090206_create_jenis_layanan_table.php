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
        Schema::create('jenis_layanan', function (Blueprint $table) {
            $table->id();
            $table->datetime('waktu_pelayan');
            $table->enum('kategori', [
                'Gawat Darurat',
                'Rawat Jalan',
                'Kesehatan Gigi dan Mulut',
                'Kesehatan Ibu',
                'Kesehatan Anak',
                'Imunisasi',
                'Persalinan',
                'KB',
                'Saffron',
                'IVA',
                'Gizi',
                'TB Paru',
                'Kusta',
                'Sanitasi',
                'Kesehatan Remaja',
                'Kesehatan Lansia',
                'Laboratorium',
                'Kefarmasian',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_layanan');
    }
};
