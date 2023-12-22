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
        Schema::table('dokter', function (Blueprint $table) {
            $table->string('jamsenin')->nullable();
            $table->string('jamselasa')->nullable();
            $table->string('jamrabu')->nullable();
            $table->string('jamkamis')->nullable();
            $table->string('jamjumat')->nullable();
            $table->string('jamsabtu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->dropColumn(['jamsenin', 'jamselasa', 'jamrabu', 'jamkamis', 'jamjumat', 'jamsabtu']);
        });
    }
};
