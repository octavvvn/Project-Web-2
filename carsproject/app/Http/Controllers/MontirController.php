<?php

namespace App\Http\Controllers;

use App\Models\Montir;
use App\Models\KategoriMontir;
use Illuminate\Http\Request;

class MontirController extends Controller
{
    public function index()
    {
        $montirs = Montir::all();
        return view('montirs.index', compact('montirs'));
    }

    public function create()
    {
        $kategoriMontirs = KategoriMontir::all();
        return view('montirs.create', compact('kategoriMontirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
            'kategori_montir_id' => 'required|integer',
        ]);

        Montir::create($request->all());
        return redirect()->route('montirs.index')->with('success', 'Montir berhasil ditambahkan.');
    }

    public function edit(Montir $montir)
    {
        $kategoriMontirs = KategoriMontir::all();
        return view('montirs.edit', compact('montir', 'kategoriMontirs'));
    }

    public function update(Request $request, Montir $montir)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
            'kategori_montir_id' => 'required|integer',
        ]);

        $montir->update($request->all());
        return redirect()->route('montirs.index')->with('success', 'Montir berhasil diperbarui.');
    }

    public function destroy(Montir $montir)
    {
        $montir->delete();
        return redirect()->route('montirs.index')->with('success', 'Montir berhasil dihapus.');
    }

    public function show($id)
{
    $montir = Montir::findOrFail($id);
    return view('montirs.show', compact('montir'));
}

}
