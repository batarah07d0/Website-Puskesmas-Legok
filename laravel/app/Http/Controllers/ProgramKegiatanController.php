<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKegiatan;

class ProgramKegiatanController extends Controller
{
    public function index()
    {
        $programKegiatan = ProgramKegiatan::all();
        return view('program_kegiatan.index', compact('programKegiatan'));
    }

    public function create()
    {
        return view('program_kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('imgevent'), $fileName);
            $request->merge(['foto' => 'uploads/' . $fileName]);
        }

        ProgramKegiatan::create($request->all());

        return redirect('/program-kegiatan')->with('success', 'Program Kegiatan berhasil ditambahkan.');
    }
    public function show($id)
    {
        $programKegiatan = ProgramKegiatan::findOrFail($id);
        return view('program_kegiatan.show', compact('programKegiatan'));
    }

    public function edit($id)
    {
        $programKegiatan = ProgramKegiatan::findOrFail($id);
        return view('program_kegiatan.edit', compact('programKegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $programKegiatan = ProgramKegiatan::findOrFail($id);
        $programKegiatan->update($request->all());

        return redirect()->route('program-kegiatan.index')->with('success', 'Data Program Kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $programKegiatan = ProgramKegiatan::findOrFail($id);
        $programKegiatan->delete();

        return redirect()->route('program-kegiatan.index')->with('success', 'Data Program Kegiatan berhasil dihapus.');
    }
}
