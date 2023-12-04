<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }
    public function create()
    {
        return view('pasien.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'no_bpjs' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date_format:Y-m-d',
                'kepala_keluarga' => 'required',
                'agama' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'alamat' => 'required',
            ]
        );
        Pasien::create(
            [
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'no_bpjs' => $request->no_bpjs,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kepala_keluarga' => $request->kepala_keluarga,
                'agama' => $request->agama,
                'kecamatan' => $request->kecamatan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
            ]
        );
        return redirect('/pasien')->with('success', 'Pasien berhasil ditambahkan');
    }
    public function show(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'no_bpjs' => 'required',
                'tanggal_lahir' => 'required|date_format:Y-m-d',
                'tempat_lahir' => 'required',
                'kepala_keluarga' => 'required',
                'agama' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'alamat' => 'required',
            ]
        );
        $pasien = Pasien::find($id);
        $pasien->update([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'no_bpjs' => $request->no_bpjs,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kepala_keluarga' => $request->kepala_keluarga,
            'agama' => $request->agama,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('pasien')->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect()->route('pasien')->with('success', 'Data pasien berhasil dihapus.');
    }
    public function restore($id)
    {
        Pasien::withTrashed()->where('id', $id)->restore();
        return redirect()->route('pasien')->with('success', 'Data pasien berhasil dikembalikan.');
    }
}
