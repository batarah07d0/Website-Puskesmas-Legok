@extends('layouts.app')

@section('title', 'Pasien Section')

@section('contents')
<div class="d-flex align-items-center justify-content-between ">
    <h1 class="mb-0">List Pasien</h1>
    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Data Pasien</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<div class="table-responsive">
    <table class="table overflow-auto">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nomor BPJS</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kepala Keluarga</th>
                <th>Agama</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($pasien->count() > 0)
            @foreach($pasien as $rs)
            <tr>

                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $rs->nik }}</td>
                <td class="align-middle">{{ $rs->nama_lengkap }}</td>
                <td class="align-middle">{{ $rs->no_bpjs }}</td>
                <td class="align-middle">{{ $rs->tempat_lahir }}</td>
                <td class="align-middle">{{ $rs->tanggal_lahir }}</td>
                <td class="align-middle">{{ $rs->kepala_keluarga }}</td>
                <td class="align-middle">{{ $rs->agama }}</td>
                <td class="align-middle">{{ $rs->kecamatan }}</td>
                <td class="align-middle">{{ $rs->desa }}</td>
                <td class="align-middle">{{ $rs->alamat }}</td>
                <td class="align-middle">
                    <div class="btn-group d-flex flex-column" role="group" aria-label="Basic example">
                        <a href="{{ route('pasien.show', $rs->id) }}" type="button" class="btn btn-secondary mb-1">Detail</a>
                        <a href="{{ route('pasien.edit', $rs->id)}}" type="button" class="btn btn-warning mb-1">Edit</a>
                        <form action="{{ route('pasien.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
                <td class="text-center" colspan="12">Pasien belum diisi</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection