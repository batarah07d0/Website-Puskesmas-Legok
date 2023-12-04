<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ]);

        $fileName = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgfasilitas
            $file->storeAs('public/imgfasilitas', $fileName);
        }

        Fasilitas::create([
            'nama' => $request->nama,
            'foto' => $fileName,
        ]);

        return redirect('/fasilitas')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));
    }
    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ]);

        $fasilitas = Fasilitas::find($id);

        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($fasilitas->foto) {
                Storage::delete('public/imgfasilitas/' . $fasilitas->foto);
            }

            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgfasilitas
            $file->storeAs('public/imgfasilitas', $fileName);

            $fasilitas->update([
                'nama' => $request->nama,
                'foto' => $fileName,
            ]);
        } else {
            $fasilitas->update([
                'nama' => $request->nama,
            ]);
        }

        return redirect()->route('fasilitas')->with('success', 'Data Fasilitas berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();

        return redirect()->route('fasilitas')->with('success', 'Data Fasilitas berhasil dihapus.');
    }
}
