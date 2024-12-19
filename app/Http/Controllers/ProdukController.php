<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    public function produk(Request $request)
{
    $query = Produk::with('kategori')->orderBy('nama_produk', 'asc');

    if ($request->has('search') && $request->search != '') {
        $query->where('nama_produk', 'like', '%' . $request->search . '%');
    }

    $daftarProduk = $query->get();

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
            'harga_dasar' => 'required|integer|min:0',
            'harga_jual' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif' // Validasi gambar
        ]);
    
        // Simpan produk
        $produk = Produk::create($validated);
    
        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk', 'public'); // Menyimpan gambar di folder produk
            $produk->gambar = $gambarPath;
            $produk->save();
        }
    
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
        // Validasi input
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_dasar' => 'required|integer|min:0',
            'harga_jual' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif' // Validasi gambar
        ]);
    
        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        $produk->update($validated);
    
        // Cek jika ada gambar yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                Storage::delete('public/' . $produk->gambar);

            }
            
            // Simpan gambar baru
            $gambarPath = $request->file('gambar')->store('produk', 'public');
            $produk->gambar = $gambarPath;
            $produk->save();
        }
    
        return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui.');
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



    // Manajemen stok
    public function manajemenStok()
    {
        $produk = Produk::all(); // Ambil semua produk
        return view('stok.manajemenstok', compact('produk'));
    }

    public function editStok($id)
    {
        $produk = Produk::findOrFail($id); // Cari produk berdasarkan ID
        return view('stok.edit', compact('produk'));
    }

    public function updateStok(Request $request, $id)
{
   
    $request->validate([
        'stok' => 'required|integer|min:0',
    ]);

    $produk = Produk::findOrFail($id);

    // Perbarui stok
    $produk->stok = $request->stok;
    $produk->save();

    // Redirect dengan pesan sukses
    return redirect()->route('manajemen.stok')->with('success', 'Stok produk berhasil diperbarui.');
}


}