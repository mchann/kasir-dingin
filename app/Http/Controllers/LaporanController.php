<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanKeuangan(Request $request)
    {
        // Contoh data transaksi (seharusnya diambil dari database)
        $transaksis = [
            ['tanggal' => '2024-09-01', 'jenis' => 'pendapatan', 'jumlah' => 150000, 'keterangan' => 'Penjualan Produk A'],
            ['tanggal' => '2024-09-02', 'jenis' => 'pengeluaran', 'jumlah' => 50000, 'keterangan' => 'Pembelian Bahan Baku'],
            ['tanggal' => '2024-09-03', 'jenis' => 'pendapatan', 'jumlah' => 200000, 'keterangan' => 'Penjualan Produk B'],
            ['tanggal' => '2024-09-04', 'jenis' => 'pengeluaran', 'jumlah' => 30000, 'keterangan' => 'Pembayaran Gaji'],
        ];

        // Hitung total pendapatan dan pengeluaran
        $totalPendapatan = 0;
        $totalPengeluaran = 0;

        foreach ($transaksis as $transaksi) {
            if ($transaksi['jenis'] === 'pendapatan') {
                $totalPendapatan += $transaksi['jumlah'];
            } elseif ($transaksi['jenis'] === 'pengeluaran') {
                $totalPengeluaran += $transaksi['jumlah'];
            }
        }

        $labaBersih = $totalPendapatan - $totalPengeluaran;

        // Siapkan data untuk laporan
        $dataLaporan = [
            'totalPendapatan' => $totalPendapatan,
            'totalPengeluaran' => $totalPengeluaran,
            'labaBersih' => $labaBersih,
            'transaksis' => $transaksis,
        ];

        // Kembalikan view laporan keuangan
        return view('laporan', compact('dataLaporan'));
    }
}
