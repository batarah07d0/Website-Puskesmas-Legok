<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Fasilitas;

class Home5Controller extends Controller
{
    public function index()
    {
        $fotod = Dokter::all();
        $namad = Dokter::all();
        $spesid = Dokter::all();
        $jadwald = Dokter::all();
        $jsenin = Dokter::all();
        $jselasa = Dokter::all();
        $jrabu = Dokter::all();
        $jkamis = Dokter::all();
        $jjumat = Dokter::all();
        $jsabtu = Dokter::all();
        $fotof = Fasilitas::all();
        return view('pelayanan', compact('fotod', 'namad', 'spesid', 'jadwald', 'jsenin', 'jselasa', 'jrabu', 'jkamis', 'jjumat', 'jsabtu', 'fotof'));
    }
}
