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
        Schema::create('praktek_lapangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')->nullable()->index('fk_praktek_lapangan_to_prodi');
            $table->string('judul');
            $table->string('lokasi');
            $table->integer('tahun');
            $table->string('penulis');
            $table->longText('dokumen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('praktek_lapangan');
    }
};
