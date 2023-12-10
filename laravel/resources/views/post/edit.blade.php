@extends('layouts.app')

@section('title', 'Sunting Post')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Post</h1>
<hr />
<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="{{ Storage::url('imgpost/' . $post->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;"> <input type="file" name="foto" placeholder="Foto" value="{{ $post->foto }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection