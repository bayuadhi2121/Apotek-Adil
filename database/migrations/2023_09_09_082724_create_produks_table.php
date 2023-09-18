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
        Schema::create('produks', function (Blueprint $table) {
            $table->String('id')->primary();
            $table->String('nama');
            $table->longText('deskripsi');
            $table->longText('indikasi');
            $table->longText('aturanpakai');
            $table->longText('perhatian');
            $table->String('kategori');
            $table->integer('harga');
            $table->integer('stok');
            $table->String('kandungan');
            $table->String('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
