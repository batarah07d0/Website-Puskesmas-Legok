<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::all();
        return view('struktur_organisasi.index', compact('strukturOrganisasi'));
    }

    public function create()
    {
        return view('struktur_organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        StrukturOrganisasi::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/struktur-organisasi')->with('success', 'Data struktur organisasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $strukturOrganisasi = StrukturOrganisasi::find($id);
        return view('struktur_organisasi.edit', compact('strukturOrganisasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $strukturOrganisasi = StrukturOrganisasi::find($id);
        $strukturOrganisasi->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/struktur-organisasi')->with('success', 'Data struktur organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $strukturOrganisasi = StrukturOrganisasi::find($id);
        $strukturOrganisasi->delete();

        return redirect('/struktur-organisasi')->with('success', 'Data struktur organisasi berhasil dihapus.');
    }
}
