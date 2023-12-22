@extends('layouts.app')

@section('title', 'Show Foto')

@section('contents')
<h1 class="mb-0">Detail Foto</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <input type="text" name="nama" class="form-control mb-2" placeholder="Foto" value="{{ $post->foto}}" readonly>
        @if($post->foto)
        <img src="{{ Storage::url('imgpost/' . $post->foto) }}" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        @else
        <p>Tidak ada foto</p>
        @endif
    </div>
</div>
@endsection