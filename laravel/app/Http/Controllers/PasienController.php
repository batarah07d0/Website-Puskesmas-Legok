<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

date_default_timezone_set('Asia/Jakarta');

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }
    public function create()
    {
        return view('pasien.create');
    }
    public function storeantrian(Request $request)
    {
        $request->validate(
            [
                'jenis_layanan' => 'required',
                'jam_layanan' => 'required',
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'no_bpjs' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date_format:Y-m-d',
                'kepala_keluarga' => 'required',
                'agama' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'alamat' => 'required',
            ]
        );
        $q = Pasien::where('no_bpjs', $request->no_bpjs)->get();
        if (count($q) === 0) {
            Pasien::create([
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'no_bpjs' => $request->no_bpjs,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kepala_keluarga' => $request->kepala_keluarga,
                'agama' => $request->agama,
                'kecamatan' => $request->kecamatan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
            ]);
        }
        $q = Pasien::where('no_bpjs', $request->no_bpjs)->get();
        $id = "";
        foreach ($q as $index) {
            $id = $index->id;
        }
        $antrian = Antrian::where('id_pasien', $id)->get();
        if (count($antrian) === 0) {
            $date = date_default_timezone_get() . $request->jam_layanan;
            $jamlayanan = date('Y-m-d H:i:s', strtotime($date . "+1 days"));
            Antrian::create([
                'id_pasien' => $id,
                'jenis_layanan' => $request->jenis_layanan,
                'nama_pasien' => $request->nama_lengkap,
                'jam_layanan' => $jamlayanan
            ]);
            $antrian = Antrian::where('id_pasien', $id)->get();
            foreach ($antrian as $a) {
                $nomor_antrian = $a->nomorantrian;
            }
            // return $nomor_antrian;
            return view('antriansukses', [
                'nomor_antrian' => $nomor_antrian,
                'no_bpjs' => $request->no_bpjs,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_layanan' => $request->jenis_layanan,
                'jam_layanan' => $request->jam_layanan

            ]);
        } else {
            $antrian = Antrian::where('id_pasien', $id)->get();
            foreach ($antrian as $a) {
                $nama_pasien = $a->nama_pasien;
                $jenis_layanan = $a->jenis_layanan;
                $jam_layanan = $a->jam_layanan;
                $nomor_antrian = $a->nomorantrian;
            }
            $pasien = Pasien::where('id', $id)->get();
            foreach ($pasien as $p) {
                $no_bpjs = $p->no_bpjs;
            }
            // return $nomor_antrian;
            return view('antriansukses', [
                'exist' => "true",
                'nomor_antrian' => $nomor_antrian,
                'no_bpjs' => $no_bpjs,
                'nama_lengkap' => $nama_pasien,
                'jenis_layanan' => $jenis_layanan,
                'jam_layanan' => $jam_layanan
            ]);
        }
    }

    public function createPDF(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('
        <div style="display:flex;">
            <br>
            <h1 style="justify-content: center; text-align:center; width:100%">
                Pendaftaran Online
            </h1>
            <h3>Nomor Antrian : ' . $request->nomor_antrian . '</h3>
            <p>Nomor BPJS : ' . $request->no_bpjs . '</p>
            <p>Nama : ' . $request->nama_lengkap . '</p>
            <p>Jenis Layanan : ' . $request->jenis_layanan . ' </p>
            <p>Jadwal Layanan : ' . $request->jam_layanan . '</p>
        </div>
        ');
        return $pdf->download($request->nama_lengkap . "_" . $request->nomor_antrian . ".pdf");
        // return $pdf->stream();
        // return view("antriansukses-pdf");
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'no_bpjs' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date_format:Y-m-d',
                'kepala_keluarga' => 'required',
                'agama' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'alamat' => 'required',
            ]
        );
        Pasien::create(
            [
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'no_bpjs' => $request->no_bpjs,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kepala_keluarga' => $request->kepala_keluarga,
                'agama' => $request->agama,
                'kecamatan' => $request->kecamatan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
            ]
        );
        return redirect('/pasien')->with('success', 'Pasien berhasil ditambahkan');
    }
    public function show(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'no_bpjs' => 'required',
                'tanggal_lahir' => 'required|date_format:Y-m-d',
                'tempat_lahir' => 'required',
                'kepala_keluarga' => 'required',
                'agama' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'alamat' => 'required',
            ]
        );
        $pasien = Pasien::find($id);
        $pasien->update([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'no_bpjs' => $request->no_bpjs,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kepala_keluarga' => $request->kepala_keluarga,
            'agama' => $request->agama,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('pasien')->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect()->route('pasien')->with('success', 'Data pasien berhasil dihapus.');
    }
    public function restore($id)
    {
        Pasien::withTrashed()->where('id', $id)->restore();
        return redirect()->route('pasien')->with('success', 'Data pasien berhasil dikembalikan.');
    }
}
