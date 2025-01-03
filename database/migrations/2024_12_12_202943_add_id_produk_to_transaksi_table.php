<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdProdukToTransaksiTable extends Migration
{
    public function up()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk')->nullable(); // Menambahkan kolom id_produk

            // Menambahkan foreign key untuk id_produk
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_produk']); // Menghapus foreign key
            $table->dropColumn('id_produk'); // Menghapus kolom id_produk
        });
    }
}
r