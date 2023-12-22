@extends('layouts.app')

@section('title', 'Show Dokter')

@section('contents')
<h1 class="mb-0">Detail Dokter</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $dokter->name}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <img src="{{ Storage::url('imgdokter/' . $dokter->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        @if($dokter->foto)

        @else
        <p>Tidak ada foto</p>
        @endif
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Pendidikan</label>
        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="{{ $dokter->pendidikan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Spesiaslisasi</label>
        <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi" value="{{ $dokter->spesialisasi }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Jadwal Praktek</label>
        <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 11:00 - 13:00" value="{{ $dokter->jadwal_praktek}}" readonly>
    </div>
    <div class="col">
        <label class="form-label">Jam Senin</label>
        <input type="text" name="jamsenin" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamsenin }}" readonly>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <label class="form-label">Jam Selasa</label>
        <input type="text" name="jamselasa" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamselasa }}" readonly>
    </div>
    <div class="col">
        <label class="form-label">Jam Rabu</label>
        <input type="text" name="jamrabu" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamrabu }}" readonly>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <label class="form-label">Jam Kamis</label>
        <input type="text" name="jamkamis" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamkamis }}" readonly>
    </div>
    <div class="col">
        <label class="form-label">Jam Jumat</label>
        <input type="text" name="jamjumat" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamjumat }}" readonly>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <label class="form-label">Jam Sabtu</label>
        <input type="text" name="jamsabtu" placeholder="08:00 - 10:00" class="form-control" value="{{ $dokter->jamsabtu }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $dokter->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $dokter->updated_at }}" readonly>
    </div>
</div>

@endsection