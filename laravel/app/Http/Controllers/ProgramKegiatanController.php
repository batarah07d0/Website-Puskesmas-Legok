<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKegiatan;
use Illuminate\Support\Facades\Storage;



class ProgramKegiatanController extends Controller
{
    public function index()
    {
        $programkegiatan = ProgramKegiatan::all();
        return view('programkegiatan.index', compact('programkegiatan'));
    }

    public function create()
    {
        return view('programkegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

        // Simpan di storage/app/public/imgpk
        $file->storeAs('public/imgpk', $fileName);


        ProgramKegiatan::create([
            'nama_event' => $request->nama_event,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'foto' => $fileName,
        ]);

        return redirect('/programkegiatan')->with('success', 'Program Kegiatan berhasil ditambahkan.');
    }
    public function show($id)
    {
        $programkegiatan = ProgramKegiatan::findOrFail($id);
        return view('programkegiatan.show', compact('programkegiatan'));
    }

    public function edit($id)
    {
        $programkegiatan = ProgramKegiatan::findOrFail($id);
        return view('programkegiatan.edit', compact('programkegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ]);



        $programkegiatan = ProgramKegiatan::find($id);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgpk
            $file->storeAs('public/imgpk', $fileName);

            // Hapus foto lama jika ada
            if ($programkegiatan->foto) {
                Storage::delete('public/imgpk/' . $programkegiatan->foto);
            }

            $programkegiatan->update([
                'nama_event' => $request->nama_event,
                'deskripsi' => $request->deskripsi,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'foto' => $fileName,
            ]);
        } else {
            // Jika tidak ada file foto baru
            $programkegiatan->update([
                'nama_event' => $request->nama_event,
                'deskripsi' => $request->deskripsi,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
            ]);
        }




        return redirect()->route('programkegiatan')->with('success', 'Data Program Kegiatan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $programkegiatan = ProgramKegiatan::findOrFail($id);
        $gambarPath = $programkegiatan->foto;
        $programkegiatan->delete();

        if ($gambarPath) {
            $gambarFullPath = 'public/imgpk/' . $gambarPath;

            if (Storage::exists($gambarFullPath)) {
                Storage::delete($gambarFullPath);
            }
        }

        return redirect('/programkegiatan')->with('success', 'Data Program Kegiatan berhasil dihapus.');
    }
}
