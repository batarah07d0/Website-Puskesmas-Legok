@extends('layouts.app')

@section('title', 'Fasilitas Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Fasilitas</h1>
    <a href="{{ route('fasilitas.create') }}" class="btn btn-primary">Tambah Data Fasilitas</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($fasilitas->count() > 0)
        @foreach($fasilitas as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->nama }}</td>
            <td class="align-middle">{{ $rs->foto }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('fasilitas.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('fasilitas.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('fasilitas.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="4">Fasilitas belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection