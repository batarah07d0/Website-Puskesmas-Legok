@extends('layouts.app')

@section('title', 'Sunting Pasien')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Pasien</h1>
<hr />
<form action="{{ route('pasien.update', $pasien->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $pasien->nik }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $pasien->nama_lengkap }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nomor BPJS</label>
            <input type="text" name="no_bpjs" class="form-control" placeholder="Nomor BPJS" value="{{ $pasien->no_bpjs }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $pasien->tempat_lahir }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kepala Keluarga</label>
            <input type="text" name="kepala_keluarga" placeholder="Kepala Keluarga" class="form-control" value="{{ $pasien->kepala_keluarga }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Agama</label>
            <input type="text" name="agama" placeholder="Agama" class="form-control" value="{{ $pasien->agama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="{{ $pasien->kecamatan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Desa</label>
            <input type="text" name="desa" placeholder="Desa" class="form-control" value="{{ $pasien->desa }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="{{ $pasien->alamat }}">
        </div>
    </div>
    <div class=" row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection