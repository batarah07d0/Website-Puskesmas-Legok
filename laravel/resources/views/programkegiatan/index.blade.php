@extends('layouts.app')

@section('title', 'Program Kegiatan Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Program Kegiatan</h1>
    <a href="{{ route('programkegiatan.create') }}" class="btn btn-primary">Tambah Data Program Kegiatan</a>
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
            <th>Nama Event</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($programkegiatan->count() > 0)
        @foreach($programkegiatan as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->nama_event }}</td>
            <td class="align-middle">{{ $rs->deskripsi }}</td>
            <td class="align-middle">{{ $rs->foto }}</td>
            <td class="align-middle">{{ $rs->tanggal_mulai }}</td>
            <td class="align-middle">{{ $rs->tanggal_selesai }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('programkegiatan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('programkegiatan.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('programkegiatan.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="7">Program Kegiatan belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection