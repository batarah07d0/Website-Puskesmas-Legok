@extends('layouts.app')

@section('title', 'Staff Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Staff</h1>
    <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah Data Staff</a>
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
            <th>Jabatan</th>
            <th>Foto</th>
            <<th>Action</th>
        </tr>
    </thead>
    <tbody>+
        @if($staff->count() > 0)
        @foreach($staff as $rs)
        <tr>

            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->nama }}</td>
            <td class="align-middle">{{ $rs->jabatan }}</td>
            <td class="align-middle">{{ $rs->foto }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('staff.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('staff.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('staff.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="5">Staff belum diisi</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection