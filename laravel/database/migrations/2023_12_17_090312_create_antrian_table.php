<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->integer('nomorantrian', autoIncrement: true, unsigned: true)->length(3);
            $table->foreignId('id_pasien')->constrained(table: 'pasien', indexName: 'id')->cascadeOnDelete();
            $table->string('jenis_layanan');
            $table->dateTime('jam_layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian');
    }
};
