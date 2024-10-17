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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->nullable()->index('fk_buku_to_kategori');
            $table->foreignId('prodi_id')->nullable()->index('fk_buku_to_prodi');
            $table->string('judul');
            $table->integer('tahun');
            $table->string('penulis');
            $table->string('penerbit');
            $table->longText('foto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
