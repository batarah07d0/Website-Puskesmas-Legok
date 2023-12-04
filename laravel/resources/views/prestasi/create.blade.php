@extends('layouts.app')

@section('title', 'Tambah Data Prestasi')

@section('contents')
<h1 class="mb-0">Tambah Prestasi</h1>
<hr />
<form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="foto" placeholder="Foto">
        </div>
        <div class="col">
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection