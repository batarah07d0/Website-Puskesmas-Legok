<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;

class JenisLayananController extends Controller
{
    public function forceDelete($id)
    {
        $layanan = JenisLayanan::withTrashed()->findOrFail($id);

        if ($layanan->trashed()) {

            $layanan->forceDelete();
            return redirect('/layanan')->with('success', 'Layanan berhasil dihapus secara permanen.');
        } else {

            return redirect('/layanan')->with('error', 'Layanan belum dihapus.');
        }
    }
}
