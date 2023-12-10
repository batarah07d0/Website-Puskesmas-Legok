<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
        ]);

        $fileName = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgprestasi
            $file->storeAs('public/imgprestasi', $fileName);
        }

        Prestasi::create([
            'foto' => $fileName,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/prestasi')->with('success', 'Prestasi berhasil ditambahkan.');
    }
    public function show(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }
    public function edit($id)
    {
        $prestasi = Prestasi::find($id);
        return view('prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
        ]);

        $prestasi = Prestasi::find($id);

        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($prestasi->foto) {
                Storage::delete('public/imgprestasi/' . $prestasi->foto);
            }

            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgprestasi
            $file->storeAs('public/imgprestasi', $fileName);

            $prestasi->update([
                'foto' => $fileName,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $prestasi->update([
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect()->route('prestasi')->with('success', 'Data prestasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);

        $gambarPath = $prestasi->foto;

        $prestasi->delete();

        if ($gambarPath) {
            $gambarFullPath = 'public/imgprestasi/' . $gambarPath;

            if (Storage::exists($gambarFullPath)) {
                Storage::delete($gambarFullPath);
            }
        }

        return redirect()->route('prestasi')->with('success', 'Data prestasi berhasil dihapus.');
    }
}
