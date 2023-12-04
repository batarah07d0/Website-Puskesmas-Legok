@extends('layouts.app')

@section('title', 'Show Pasien')

@section('contents')
<h1 class="mb-0">Detail Pasien</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $pasien->nik}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $pasien->nama_lengkap}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nomor BPJS</label>
        <input type="text" name="no_bpjs" class="form-control" placeholder="Nomor BPJS" value="{{ $pasien->no_bpjs }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $pasien->tempat_lahir }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Agama</label>
        <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $pasien->agama}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="{{ $pasien->kecamatan}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" value="{{ $pasien->tanggal_lahir}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kepala Keluarga</label>
        <input type="text" name="kepala_keluarga" placeholder="Kepala Keluarga" class="form-control" value="{{ $pasien->kepala_keluarga}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Desa</label>
        <input type="text" name="desa" placeholder="Desa" class="form-control" value="{{ $pasien->desa}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="{{ $pasien->alamat}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $pasien->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $pasien->updated_at }}" readonly>
    </div>
</div>

@endsection