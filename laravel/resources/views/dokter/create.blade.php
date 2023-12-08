@extends('layouts.app')

@section('title', 'Tambah Data Dokter')

@section('contents')
<h1 class="mb-0">Tambah Dokter</h1>
<hr />
<form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" placeholder="Nama">
        </div>
        <div class="col">
            <input type="file" name="foto">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="pendidikan" placeholder="Pendidikan">
        </div>
        <div class="col">
            <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 08:00 - 10:00">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection