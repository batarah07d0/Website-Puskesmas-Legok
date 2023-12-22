@extends('layouts.app')

@section('title', 'Dokter Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Dokter</h1>
    <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Data Dokter</a>
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
            <th>Pendidikan</th>
            <th>Spesialisasi</th>
            <th>Jadwal Praktek</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($dokter->count() > 0)
        @foreach($dokter as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->name }}</td>
            <td class="align-middle">{{ $rs->foto }}</td>
            <td class="align-middle">{{ $rs->pendidikan }}</td>
            <td class="align-middle">{{ $rs->spesialisasi }}</td>
            <td class="align-middle">{{ $rs->jadwal_praktek }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('dokter.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('dokter.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('dokter.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="7">Dokter belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection