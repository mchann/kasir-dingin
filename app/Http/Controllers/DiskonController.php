<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index()
    {
        $diskon = Diskon::all();
        return view('diskon.diskon', compact('diskon'));
    }

    public function create()
    {
        return view('diskon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_diskon' => 'required|string|max:255',
            'persentase' => 'required|numeric|min:0|max:100',
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date|after_or_equal:tgl_mulai',
        ]);

        Diskon::create($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil ditambahkan.');
    }

    public function edit(Diskon $diskon)
    {
        return view('diskon.edit', compact('diskon'));
    }

    public function update(Request $request, Diskon $diskon)
    {
        $request->validate([
            'nama_diskon' => 'required|string|max:255',
            'persentase' => 'required|numeric|min:0|max:100',
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date|after_or_equal:tgl_mulai',
        ]);

        $diskon->update($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil diperbarui.');
    }

    public function destroy(Diskon $diskon)
    {
        $diskon->delete();
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil dihapus.');
    }
}
