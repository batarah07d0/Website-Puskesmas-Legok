<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;

class Home2Controller extends Controller
{
    public function index()
    {

        $enumValues = JenisLayanan::getEnumValues('jenis_layanan', 'kategori');
        $enumValue = JenisLayanan::getEnumValue('jenis_layanan', 'waktu_pelayanan');
        return view('welcome', compact('enumValues', 'enumValue'));
    }
}
