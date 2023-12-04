@extends('layouts.app')

@section('title', 'Sunting Program Kegiatan')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Program Kegiatan</h1>
<hr />
<form action="{{ route('programkegiatan.update', $programkegiatan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama_event" class="form-control" placeholder="Nama Event" value="{{ $programkegiatan->nama_event }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Jabatan" value="{{ $programkegiatan->deskripsi }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ Storage::url('imgpk/' . $programkegiatan->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <!-- <input type="file" name="foto" value="{{ $programkegiatan->foto }}"> -->
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" value="{{ $programkegiatan->tanggal_mulai }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" value="{{ $programkegiatan->tanggal_selesai }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection