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
            $table->string('nama');
            $table->longText('deskripsi');
            $table->longText('indikasi');
            $table->longText('aturanpakai');
            $table->longText('perhatian');
            $table->string('id_kategori', 50);
            $table->integer('harga');
            $table->boolean('promo')->default(0);
            $table->integer('harga_promo')->nullable();
            $table->integer('stok');
            $table->string('kandungan');
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->string('slug')->unique();

            $table->foreign('id_kategori')->references('id')->on('kategoris');
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
