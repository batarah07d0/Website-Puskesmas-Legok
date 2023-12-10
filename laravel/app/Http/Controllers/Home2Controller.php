<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;
use Carbon\Carbon;

use App\Enums\TimeOptions;

class Home2Controller extends Controller
{
    public function index()
    {
        $enumValues = JenisLayanan::getEnumValues('jenis_layanan', 'kategori');
        $enumValue = JenisLayanan::getEnumValue('jenis_layanan', 'waktu_pelayanan');

        $today = now()->dayOfWeek;
        $endHour = null;

        if ($today >= 1 && $today <= 4) {
            $endHour = TimeOptions::ONE;
        } elseif ($today == 5) {
            $endHour = TimeOptions::ELEVEN;
        }

        return view('welcome', compact('enumValues', 'enumValue'));
    }
}
