<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProgramKegiatan;

class HomeController extends Controller
{
    public function index()
    {
        $photos = ProgramKegiatan::all();
        return view('progkegdepan.index', compact('photos'));
    }
}
