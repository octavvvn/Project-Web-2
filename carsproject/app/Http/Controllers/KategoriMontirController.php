<?php

namespace App\Http\Controllers;

use App\Models\KategoriMontir;
use Illuminate\Http\Request;

class KategoriMontirController extends Controller
{
    public function index()
    {
        $kategoriMontirs = KategoriMontir::all();
        return view('kategori_montirs.index', compact('kategoriMontirs'));
    }

    public function create()
    {
        return view('kategori_montirs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        KategoriMontir::create($request->all());
        return redirect()->route('kategori-montirs.index')->with('success', 'Kategori Montir berhasil ditambahkan.');
    }

    public function edit(KategoriMontir $kategoriMontir)
    {
        return view('kategori_montirs.edit', compact('kategoriMontir'));
    }

    public function update(Request $request, KategoriMontir $kategoriMontir)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategoriMontir->update($request->all());
        return redirect()->route('kategori-montirs.index')->with('success', 'Kategori Montir berhasil diperbarui.');
    }

    public function show($id)
{
    $kategoriMontir = KategoriMontir::findOrFail($id);
    return view('kategori_montirs.show', compact('kategoriMontir'));
}


    public function destroy(KategoriMontir $kategoriMontir)
    {
        $kategoriMontir->delete();
        return redirect()->route('kategori-montirs.index')->with('success', 'Kategori Montir berhasil dihapus.');
    }

}

