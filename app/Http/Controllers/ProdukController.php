<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk()
    {
        $daftarProduk = Produk::with('kategori')->orderBy('nama_produk', 'asc')->get();
        return view('produk', compact('daftarProduk'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('create', compact('kategori')); 
    }
        
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategori,id'
        ]);

        Produk::create($validated);

        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id); 
        $kategori = Kategori::all();
        return view('edit', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategori,id'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui');
    }

    // Soft delete
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus.');
    }

   
    public function trashed()
    {
        $daftarProdukDihapus = Produk::onlyTrashed()->with('kategori')->get();
        return view('trashed', compact('daftarProdukDihapus'));
    }


    public function restore($id)
    {
        $produk = Produk::withTrashed()->findOrFail($id);
        $produk->restore();

        return redirect()->route('produk')->with('success', 'Produk berhasil dipulihkan.');
    }

    public function forceDelete($id)
    {
        $produk = Produk::withTrashed()->findOrFail($id);
        $produk->forceDelete();

        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus secara permanen.');
    }
}