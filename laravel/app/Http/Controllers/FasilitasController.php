<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;


class FasilitasController extends Controller
{
    public function forceDelete($id)
    {
        $fasilitas = Fasilitas::withTrashed()->findOrFail($id);

        if ($fasilitas->trashed()) {
            // Hapus permanen jika fasilitas sudah dihapus
            $fasilitas->forceDelete();
            return redirect('/fasilitas')->with('success', 'Fasilitas berhasil dihapus secara permanen.');
        } else {
            // Jika fasilitas belum dihapus, Anda dapat mengarahkan ke halaman lain atau menampilkan pesan
            return redirect('/fasilitas')->with('error', 'Fasilitas belum dihapus.');
        }
    }
}
