<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

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
            'nama' => 'required',
            'deskripsi' => 'required',

        ]);

        Prestasi::create($request->all());

        return redirect('/prestasi')->with('success', 'Prestasi berhasil ditambahkan.');
    }
}
