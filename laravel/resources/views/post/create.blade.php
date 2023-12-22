@extends('layouts.app')

@section('title', 'Tambah Data Post')

@section('contents')
<h1 class="mb-0">Tambah Post</h1>
<hr />
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label>Foto :</label>
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