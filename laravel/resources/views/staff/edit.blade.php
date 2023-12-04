@extends('layouts.app')

@section('title', 'Sunting Staff')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Staff</h1>
<hr />
<form action="{{ route('staff.update', $staff->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Title" value="{{ $staff->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ $staff->jabatan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ asset('imgstaff/' . $staff->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" value="{{ $staff->foto }}">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection