@extends('layouts.app')

@section('title', 'Show Program Kegiatan')

@section('contents')
<h1 class="mb-0">Detail Program Kegiatan</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Event</label>
        <input type="text" name="nama_event" class="form-control" placeholder="Nama event" value="{{ $programkegiatan->nama_event}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $programkegiatan->deskripsi }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        @if($programkegiatan->foto)
        <img src="{{ Storage::url('imgpk/' . $programkegiatan->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        @else
        <p>Tidak ada foto</p>
        @endif
    </div>
    <div class="col mb-3">
        <label class="form-label">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" class="form-control" value="{{ $programkegiatan->tanggal_mulai }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" class="form-control" value="{{ $programkegiatan->tanggal_selesai }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $programkegiatan->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $programkegiatan->updated_at }}" readonly>
    </div>
</div>

@endsection