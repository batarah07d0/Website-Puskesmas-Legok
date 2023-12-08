@extends('layouts.app')

@section('title', 'Tambah Data Fasilitas')

@section('contents')
<h1 class="mb-0">Tambah Fasilitas</h1>
<hr />
<form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <input type="file" name="foto" placeholder="Foto">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection