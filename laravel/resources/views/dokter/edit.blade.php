@extends('layouts.app')

@section('title', 'Sunting Dokter')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Dokter</h1>
<hr />
<form action="{{ route('dokter.update', $dokter->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $dokter->name }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ Storage::url('imgdokter/' . $dokter->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" placeholder="Foto" value="{{ $dokter->foto }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="{{ $dokter->pendidikan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Spesialisasi</label>
            <input type="text" name="spesialisasi" placeholder="Spesialisasi" value="{{ $dokter->spesialisasi }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jadwal Praktek</label>
            <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 11:00 - 13:00" value="{{ $dokter->jadwal_praktek }}">
        </div>
    </div>
    <div class=" row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection