<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Produk;

class TransaksiController extends Controller
{
    public function index()
    {
        // Ambil semua data transaksi beserta relasi produk
        $transaksi = Transaksi::with('produk')->get();
        return view('transaksi', compact('transaksi'));
    }

    public function create()
    {
        // Ambil data produk beserta kategorinya untuk form tambah transaksi
        $produk = Produk::with('kategori')->get(); 
        return view('transaksi_create', compact('produk'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'pelanggan_id' => 'required|integer',
            'id_pengguna' => 'required|integer',
            'id_produk' => 'required|integer',
        ]);

        // Simpan data ke database
        Transaksi::create([
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'metode_pembayaran' => $request->metode_pembayaran,
            'pelanggan_id' => $request->pelanggan_id,
            'id_pengguna' => $request->id_pengguna,
            'id_produk' => $request->id_produk,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Cari data transaksi berdasarkan ID
        $transaksi = Transaksi::findOrFail($id);
        // Ambil data produk untuk ditampilkan di form edit
        $produk = Produk::all();
        return view('transaksi_edit', compact('transaksi', 'produk'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'pelanggan_id' => 'required|integer',
            'id_pengguna' => 'required|integer',
            'id_produk' => 'required|integer',
        ]);

        // Cari data transaksi dan update
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update([
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'metode_pembayaran' => $request->metode_pembayaran,
            'pelanggan_id' => $request->pelanggan_id,
            'id_pengguna' => $request->id_pengguna,
            'id_produk' => $request->id_produk,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Cari data transaksi dan hapus
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }

    public function trashed()
    {
        // Ambil data transaksi yang dihapus (soft delete)
        $trashedTransaksi = Transaksi::onlyTrashed()->get();
        return view('transaksi_trashed', compact('trashedTransaksi'));
    }

    public function restore($id)
    {
        // Kembalikan data transaksi yang dihapus
        $transaksi = Transaksi::onlyTrashed()->findOrFail($id);
        $transaksi->restore();

        return redirect()->route('transaksi.trashed')->with('success', 'Transaksi berhasil dikembalikan.');
    }

    public function deleteForever($id)
    {
        // Hapus permanen data transaksi
        $transaksi = Transaksi::onlyTrashed()->findOrFail($id);
        $transaksi->forceDelete();

        return redirect()->route('transaksi.trashed')->with('success', 'Transaksi berhasil dihapus permanen.');
    }
}
