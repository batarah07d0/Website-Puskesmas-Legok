<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|nullable',
        ]);

        $fileName = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgstaff
            $file->storeAs('public/imgstaff', $fileName);
        }

        Staff::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $fileName,
        ]);

        return redirect('/staff')->with('success', 'Staff berhasil ditambahkan.');
    }
    public function show(string $id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|nullable',
        ]);

        $staff = Staff::find($id);

        // Hapus gambar lama jika ada
        if ($staff->foto) {
            Storage::delete('public/imgstaff/' . $staff->foto);
        }

        $fileName = $staff->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgstaff
            $file->storeAs('public/imgstaff', $fileName);
        }

        $staff->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $fileName,
        ]);

        return redirect('/staff')->with('success', 'Data Staff berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $gambarPath = $staff->foto;
        $staff->delete();
        if ($gambarPath) {
            $gambarFullPath = 'public/imgstaff/' . $gambarPath;

            if (Storage::exists($gambarFullPath)) {
                Storage::delete($gambarFullPath);
            }
        }



        return redirect()->route('staff')->with('success', 'Data staff berhasil dihapus.');
    }
}
