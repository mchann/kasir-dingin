<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function kategori()
    {
        $kategoris = Kategori::orderBy('nama_kategori', 'asc')->get();
        return view('kategori', compact('kategoris'));
    }

    public function create()
    {
    return view('kategori_create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        Kategori::create($validated);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id) {
        
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());
        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui.');

}

public function destroy($id)
{
    $kategori = Kategori::findOrFail($id);
    $kategori->delete();
    return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus.');

}

public function trashed(){
    $daftarkategoridihapus = Kategori::onlyTrashed()->get();
    return view('kategori.trash', compact('daftarkategoridihapus'));
}

public function restore($id){
    $kategori = Kategori::withTrashed()->findOrFail($id);
    $kategori->restore();
    return redirect()->route('kategori')->with('success', 'Kategori berhasil direstore.');
}

}