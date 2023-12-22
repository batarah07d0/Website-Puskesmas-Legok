@extends('layouts.app')

@section('title', 'Jenis layanan Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Jenis layanan</h1>
    <a href="{{ route('jenislayanan.create') }}" class="btn btn-primary">Tambah Data Jenis Layanan</a>
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
            <th>Waktu Pelayanan</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($jenislayanan->count() > 0)
        @foreach($jenislayanan as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->waktu_pelayanan }}</td>
            <td class="align-middle">{{ $rs->kategori }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('jenislayanan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('jenislayanan.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jenislayanan.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="3">Jenis Layanan belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection