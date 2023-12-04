<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;

class JenisLayananController extends Controller
{
    public function index()
    {
        $jenislayanan = JenisLayanan::all();
        return view('jenislayanan.index', compact('jenislayanan'));
    }

    public function create()
    {
        return view('jenislayanan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'waktu_pelayanan' => 'required|date_format:H:i',
            'kategori' => 'required|in:Gawat Darurat,Rawat Jalan,Kesehatan Gigi dan Mulut,Kesehatan Ibu,Kesehatan Anak,Imunisasi,Persalinan,KB,Saffron,IVA,Gizi,TB Paru,Kusta,Sanitasi,Kesehatan Remaja,Kesehatan Lansia,Laboratorium,Kefarmasian',
        ]);
        $waktuPelayanan = $request->waktu_pelayanan;


        JenisLayanan::create([
            'waktu_pelayanan' => $waktuPelayanan,
            'kategori' => $request->kategori,

        ]);
        return redirect('/jenislayanan')->with('success', 'Jenis Layanan berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $jenislayanan = JenisLayanan::findOrFail($id);

        return view('jenislayanan.show', compact('jenislayanan'));
    }

    public function edit($id)
    {
        $jenislayanan = JenisLayanan::find($id);
        return  view('jenislayanan.edit', compact('jenislayanan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_pelayanan' => 'required|date_format:H:i',
            'kategori' => 'required|in:Gawat Darurat,Rawat Jalan,Kesehatan Gigi dan Mulut,Kesehatan Ibu,Kesehatan Anak,Imunisasi,Persalinan,KB,Saffron,IVA,Gizi,TB Paru,Kusta,Sanitasi,Kesehatan Remaja,Kesehatan Lansia,Laboratorium,Kefarmasian',
        ]);
        $waktuPelayanan = $request->waktu_pelayanan;
        $jenislayanan = JenisLayanan::find($id);
        $jenislayanan->update([
            'waktu_pelayanan' => $waktuPelayanan,
            'kategori' => $request->kategori,

        ]);


        return redirect()->route('jenislayanan')->with('success', 'Data Jenis Layanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jenislayanan = JenisLayanan::find($id);
        $jenislayanan->delete();

        return redirect()->route('jenislayanan')->with('success', 'Data Jenis Layanan berhasil dihapus.');
    }
}
