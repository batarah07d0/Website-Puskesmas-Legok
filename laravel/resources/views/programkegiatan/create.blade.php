@extends('layouts.app')

@section('title', 'Tambah Data Program Kegiatan')

@section('contents')
<h1 class="mb-0">Tambah Program Kegiatan</h1>
<hr />
<form action="{{ route('programkegiatan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama Event</label>
            <input type="text" name="nama_event" class="form-control" placeholder="Nama Event">
        </div>
        <div class="col">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Foto</label><br>
            <input type="file" name="foto">
        </div>
        <div class="col">
            <label class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control">
        </div>

    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection