@extends('layouts.app')

@section('title', 'Sunting Fasilitas')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Fasilitas</h1>
<hr />
<form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $fasilitas->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ Storage::url('imgfasilitas/' . $fasilitas->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" placeholder="Foto" value="{{ $fasilitas->foto }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection