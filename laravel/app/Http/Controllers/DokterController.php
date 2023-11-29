<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index', compact('dokters'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'foto' => 'required',
            'pendidikan' => 'required',
            'spesialisasi' => 'required',
            'jadwal_praktek' => 'required',
        ]);

        Dokter::create([
            'name' => $request->name,
            'foto' => $request->foto,
            'pendidikan' => $request->pendidikan,
            'spesialisasi' => $request->spesialisasi,
            'jadwal_praktek' => $request->jadwal_praktek,
        ]);

        return redirect('/dokters')->with('success', 'Dokter berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jadwal_praktek' => 'required',
        ]);

        $dokter = Dokter::find($id);
        $dokter->update([
            'jadwal_praktek' => $request->jadwal_praktek,
        ]);

        return redirect('/dokters')->with('success', 'Jadwal praktek berhasil diperbarui.');
    }
}
