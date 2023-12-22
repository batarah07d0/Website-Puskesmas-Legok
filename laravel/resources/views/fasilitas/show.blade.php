@extends('layouts.app')

@section('title', 'Show Prestasi')

@section('contents')
<h1 class="mb-0">Detail Prestasi</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $fasilitas->nama }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control mb-2" placeholder="Foto" value="{{ $fasilitas->foto}}" readonly>
        @if($fasilitas->foto)
        <img src="{{ Storage::url('imgfasilitas/' . $fasilitas->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">

        @else
        <p>Tidak ada foto</p>
        @endif
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $fasilitas->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $fasilitas->updated_at }}" readonly>
    </div>
</div>

@endsection