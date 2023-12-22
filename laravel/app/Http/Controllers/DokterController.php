<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }
    public function create()
    {
        return view('dokter.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'pendidikan' => 'required',
            'spesialisasi' => 'required',
            'jadwal_praktek' => 'required',
            'jamsenin' => 'required',
            'jamselasa' => 'required',
            'jamrabu' => 'required',
            'jamkamis' => 'required',
            'jamjumat' => 'required',
            'jamsabtu' => 'required',

        ]);

        // Proses foto
        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

        // Simpan di storage/app/public/imgdokter
        $file->storeAs('public/imgdokter', $fileName);

        Dokter::create([
            'name' => $request->name,
            'foto' => $fileName,
            'pendidikan' => $request->pendidikan,
            'spesialisasi' => $request->spesialisasi,
            'jadwal_praktek' => $request->jadwal_praktek,
            'jamsenin' => $request->jamsenin,
            'jamselasa' => $request->jamselasa,
            'jamrabu' => $request->jamrabu,
            'jamkamis' => $request->jamkamis,
            'jamjumat' => $request->jamjumat,
            'jamsabtu' => $request->jamsabtu,
        ]);

        return redirect('/dokter')->with('success', 'Dokter berhasil ditambahkan.');
    }
    public function show(string $id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('dokter.show', compact('dokter'));
    }
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'pendidikan' => 'required',
            'spesialisasi' => 'required',
            'jadwal_praktek' => 'required',
            'jamsenin' => 'required',
            'jamselasa' => 'required',
            'jamrabu' => 'required',
            'jamkamis' => 'required',
            'jamjumat' => 'required',
            'jamsabtu' => 'required',
        ]);

        $dokter = Dokter::find($id);

        if ($request->hasFile('foto')) {
            // Proses foto
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgdokter
            $file->storeAs('public/imgdokter', $fileName);

            // Hapus foto lama jika ada
            if ($dokter->foto) {
                Storage::delete('public/imgdokter/' . $dokter->foto);
            }

            $dokter->update([
                'name' => $request->name,
                'foto' => $fileName,
                'pendidikan' => $request->pendidikan,
                'spesialisasi' => $request->spesialisasi,
                'jadwal_praktek' => $request->jadwal_praktek,
                'jamsenin' => $request->jamsenin,
                'jamselasa' => $request->jamselasa,
                'jamrabu' => $request->jamrabu,
                'jamkamis' => $request->jamkamis,
                'jamjumat' => $request->jamjumat,
                'jamsabtu' => $request->jamsabtu,
            ]);
        } else {
            // Jika tidak ada file foto baru
            $dokter->update([
                'name' => $request->name,
                'pendidikan' => $request->pendidikan,
                'spesialisasi' => $request->spesialisasi,
                'jadwal_praktek' => $request->jadwal_praktek,
                'jamsenin' => $request->jamsenin,
                'jamselasa' => $request->jamselasa,
                'jamrabu' => $request->jamrabu,
                'jamkamis' => $request->jamkamis,
                'jamjumat' => $request->jamjumat,
                'jamsabtu' => $request->jamsabtu,
            ]);
        }
        //return $request->spesialisasi;
        return redirect()->route('dokter')->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);

        $gambarPath = $dokter->foto;

        $dokter->delete();

        if ($gambarPath) {
            $gambarFullPath = 'public/imgdokter/' . $gambarPath;

            if (Storage::exists($gambarFullPath)) {
                Storage::delete($gambarFullPath);
            }
        }


        return redirect('/dokter')->with('success', 'Data dokter berhasil dihapus.');
    }
}
