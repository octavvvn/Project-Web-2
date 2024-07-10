<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanans.index', compact('layanans'));
    }

    public function create()
    {
        return view('layanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'jenis_layanan_id' => 'required|integer',
            'total_biaya' => 'required|numeric',
            'rating' => 'required|integer',
        ]);

        Layanan::create($request->all());
        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        return view('layanans.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'jenis_layanan_id' => 'required|integer',
            'total_biaya' => 'required|numeric',
            'rating' => 'required|integer',
        ]);

        $layanan->update($request->all());
        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil dihapus.');
    }

    public function show($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanans.show', compact('layanan'));
    }
}

