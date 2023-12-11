<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class Home3Controller extends Controller
{
    public function index()
    {
        $photos = Fasilitas::all();
        return view('pelayanan', compact('photos'));
    }
}
