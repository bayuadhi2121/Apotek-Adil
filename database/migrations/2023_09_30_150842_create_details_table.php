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
        Schema::create('details', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('id_produk');
            $table->integer('qty');
            $table->string('id_transaksi');
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->foreign('id_transaksi')->references('id')->on('transaksis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
