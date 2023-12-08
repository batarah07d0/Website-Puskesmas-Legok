@extends('layouts.app')

@section('title', 'Tambah Data Staff')

@section('contents')
<h1 class="mb-0">Tambah Staff</h1>
<hr />
<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="foto">
        </div>

    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection