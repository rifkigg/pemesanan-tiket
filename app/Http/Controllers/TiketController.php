<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('tikets.index', compact('tikets'));
    }

    public function create()
    {
        return view('tikets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_kunjungan' => 'required|date',
            'biaya' => 'required|numeric',
            'jumlah_tiket' => 'required|integer',
            'id_pengunjung' => 'required|exists:pengunjungs,id',
            'id_petugas' => 'required|exists:petugas,id',
        ]);
    
        Tiket::create($request->all());
    
        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil dibuat!');
    }

    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tikets.show', compact('tiket'));
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tikets.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_kunjungan' => 'required|date',
            'biaya' => 'required|numeric',
            'jumlah_tiket' => 'required|integer',
            'id_pengunjung' => 'required|exists:pengunjungs,id',
            'id_petugas' => 'required|exists:petugas,id',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->update($request->all());

        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil dihapus!');
    }
}
