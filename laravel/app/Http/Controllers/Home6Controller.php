<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class Home6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('detaildokter', compact('fotod', 'namad', 'spesid', 'jadwald', 'jsenin', 'jselasa', 'jrabu', 'jkamis', 'jjumat', 'jsabtu'));
    }
}
