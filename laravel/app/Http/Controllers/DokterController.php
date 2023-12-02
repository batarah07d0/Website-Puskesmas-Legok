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
        ]);

        // Proses foto
        $file = $request->file('foto');
        $fileName = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('imgdokter'), $fileName);


        Dokter::create([
            'name' => $request->name,
            'foto' => 'imgdokter/' . $fileName,
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
            'name' => 'required',
            'pendidikan' => 'required|mimes:jpeg,png,jpg',
            'spesialisasi' => 'required',
        ]);

        $dokter = Dokter::find($id);
        $dokter->update([
            'name' => $request->name,
            'pendidikan' => $request->pendidikan,
            'spesialisasi' => $request->spesialisasi,
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $randomFileName = md5(time() . rand()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $randomFileName);

            // Hapus foto lama trus nyimpen foto baru
            if ($dokter->foto) {
                unlink(public_path($dokter->foto));
            }

            $dokter->update(['foto' => 'imgdokter/' . $randomFileName]);
        }

        return redirect('/dokters')->with('success', 'Data dokter berhasil diperbarui.');;
    }

    public function editJadwalPraktek($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit_jadwal_praktek', compact('dokter'));
    }

    public function updateJadwalPraktek(Request $request, $id)
    {
        $request->validate([
            'jadwal_praktek' => 'required',
        ]);

        $dokter = Dokter::find($id);
        $dokter->update(['jadwal_praktek' => $request->jadwal_praktek]);

        return redirect('/dokters')->with('success', 'Jadwal praktek dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();

        return redirect('/dokters')->with('success', 'Data dokter berhasil dihapus.');
    }
}
