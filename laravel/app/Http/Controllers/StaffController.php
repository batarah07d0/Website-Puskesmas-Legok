<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

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

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;
            $file->move(public_path('imgstaff'), $fileName);
        }

        Staff::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $fileName,
        ]);

        return redirect('/staff')->with('success', 'Staff berhasil ditambahkan.');
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
        ]);

        $staff = Staff::find($id);
        $staff->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('staffs.index')->with('success', 'Data staff berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        return redirect()->route('staffs.index')->with('success', 'Data staff berhasil dihapus.');
    }
}
