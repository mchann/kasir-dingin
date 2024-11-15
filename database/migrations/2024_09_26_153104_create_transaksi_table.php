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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->float('total');
            $table->string('metode_pembayaran');
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->timestamps();


          $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
          $table->foreign('pengguna_id')->references('id')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
