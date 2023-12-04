@extends('layouts.app')

@section('title', 'Sunting Prestasi')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Prestasi</h1>
<hr />
<form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ asset('imgprestasi/' . $prestasi->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" placeholder="Foto" value="{{ $prestasi->foto }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $prestasi->deskripsi }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection