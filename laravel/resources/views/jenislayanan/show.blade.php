@extends('layouts.app')

@section('title', 'Show Jenis Layanan')

@section('contents')
<h1 class="mb-0">Detail Jenis Layanan</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Waktu Pelayanan</label>
        <input type="time" name="waktu_pelayanan" class="form-control" placeholder="Waktu Pelayanan" value="{{ $jenislayanan->waktu_pelayanan}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $jenislayanan->kategori }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $jenislayanan->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $jenislayanan->updated_at }}" readonly>
    </div>
</div>

@endsection