<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('transaksi', function (Blueprint $table) {
        $table->id('id_transaksi'); // Primary Key
        $table->date('tanggal');
        $table->decimal('total', 10, 2);
        $table->string('metode_pembayaran');
        $table->unsignedBigInteger('id_pelanggan')->nullable();
        $table->unsignedBigInteger('id_pengguna')->nullable();

        // Foreign Key Constraints
        $table->foreign('id_pelanggan')->references('id')->on('pelanggan')->onDelete('cascade');
        $table->foreign('id_pengguna')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('transaksi', function (Blueprint $table) {
        $table->unsignedBigInteger('id_produk');  // Tambahkan kolom produk
        $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');  // Relasi dengan produk
    });
}

   
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
