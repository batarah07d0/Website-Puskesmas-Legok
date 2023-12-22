@extends('layouts.app')

@section('title', 'Show Staff')

@section('contents')
<h1 class="mb-0">Detail Staff</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Title" value="{{ $staff->nama}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Price" value="{{ $staff->jabatan }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        @if($staff->foto)
        <img src="{{ Storage::url('imgstaff/' . $staff->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        @else
        <p>Tidak ada foto</p>
        @endif
    </div>


</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $staff->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $staff->updated_at }}" readonly>
    </div>
</div>

@endsection