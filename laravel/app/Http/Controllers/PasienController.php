<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }
    public function readDeleted()
    {
        $pasiens = Pasien::withTrashed();
        return view('pasien.deleted', compact('pasiens'));
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
                'alamat' => 'required',
                'desa' => 'required',
                'kecamatan' => 'required',
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
                'alamat' => $request->alamat,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan
            ]
        );
        return redirect('pasien')->with('success', 'Pasien berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }
    public function update(Request $request, $id)
    {
        // $request->validate(
        //     [
        //         'nik' => 'required',
        //         'nama_lengkap' => 'required',
        //         'no_bpjs' => 'required',
        //         'tempat_lahir' => 'required',
        //         'tanggal_lahir' => 'required|date_format:Y-m-d',
        //         'kepala_keluarga' => 'required',
        //         'agama' => 'required',
        //         'alamat' => 'required',
        //         'desa' => 'required',
        //         'kecamatan' => 'required',
        //     ]
        // );
        $pasien = Pasien::find($id);
        $pasien->update([
            'nama_lengkap' => $request->nama_lengkap
        ]);
        return redirect('/pasien');
    }
    public function delete($id)
    {
        Pasien::find($id)->delete();
        return redirect('/pasien');
    }
    public function forceDelete($id)
    {
        Pasien::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/pasien');
    }
    public function restore($id)
    {
        Pasien::withTrashed()->where('id', $id)->restore();
        return redirect('/pasien');
    }
}
