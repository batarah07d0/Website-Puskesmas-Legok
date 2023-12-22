@extends('layouts.app')

@section('title', 'Prestasi Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Prestasi</h1>
    <a href="{{ route('prestasi.create') }}" class="btn btn-primary">Tambah Data Prestasi</a>
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
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($prestasi->count() > 0)
        @foreach($prestasi as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->foto }}</td>
            <td class="align-middle">{{ $rs->deskripsi }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('prestasi.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('prestasi.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('prestasi.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="4">Prestasi belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection