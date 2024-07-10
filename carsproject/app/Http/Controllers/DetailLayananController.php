<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use App\Models\Layanan;
use App\Models\Montir;
use Illuminate\Http\Request;

class DetailLayananController extends Controller
{
    public function index()
    {
        $detailLayanans = DetailLayanan::all();
        return view('detail_layanans.index', compact('detailLayanans'));
    }

    public function create()
    {
        $layanans = Layanan::all();
        $montirs = Montir::all();
        return view('detail_layanans.create', compact('layanans', 'montirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pekerjaan' => 'required',
            'biaya' => 'required|numeric',
            'layanan_id' => 'required|integer',
            'pj_montir_id' => 'required|integer',
        ]);

        DetailLayanan::create($request->all());
        return redirect()->route('detail-layanans.index')->with('success', 'Detail Layanan berhasil ditambahkan.');
    }

    public function edit(DetailLayanan $detailLayanan)
    {
        $layanans = Layanan::all();
        $montirs = Montir::all();
        return view('detail_layanans.edit', compact('detailLayanan', 'layanans', 'montirs'));
    }

    public function update(Request $request, DetailLayanan $detailLayanan)
    {
        $request->validate([
            'pekerjaan' => 'required',
            'biaya' => 'required|numeric',
            'layanan_id' => 'required|integer',
            'pj_montir_id' => 'required|integer',
        ]);

        $detailLayanan->update($request->all());
        return redirect()->route('detail-layanans.index')->with('success', 'Detail Layanan berhasil diperbarui.');
    }

    public function show($id)
    {
        $detailLayanan = DetailLayanan::findOrFail($id);
        return view('detail_layanans.show', compact('detailLayanan'));
    }
    public function destroy(DetailLayanan $detailLayanan)
    {
        $detailLayanan->delete();
        return redirect()->route('detail-layanans.index')->with('success', 'Detail Layanan berhasil dihapus.');
    }

}
