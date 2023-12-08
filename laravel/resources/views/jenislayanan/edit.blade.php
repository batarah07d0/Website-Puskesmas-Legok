@extends('layouts.app')

@section('title', 'Sunting Jenis Layanan')

@section('contents')
<h1 class="mb-0">Penyuntingan Data Jenis Layanan</h1>
<hr />
<form action="{{ route('jenislayanan.update', $jenislayanan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label for="waktu_pelayanan">Waktu Pelayanan:</label>
            <input type="time" name="waktu_pelayanan" class="form-control" placeholder="Waktu Pelayanan" value="{{ $jenislayanan->waktu_pelayanan }}">
        </div>
        <div class="col mb-3">
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" class="form-control" value="{{ $jenislayanan->kategori }}">
                <option value="Gawat Darurat">Gawat Darurat</option>
                <option value="Rawat Jalan">Rawat Jalan</option>
                <option value="Kesehatan Gigi dan Mulut">Kesehatan Gigi dan Mulut</option>
                <option value="Kesehatan Ibu">Kesehatan Ibu</option>
                <option value="Kesehatan Anak">Kesehatan Anak</option>
                <option value="Imunisasi">Imunisasi</option>
                <option value="Persalinan">Persalinan</option>
                <option value="KB">KB (Kelahiran Kontrol)</option>
                <option value="Saffron">Saffron</option>
                <option value="IVA">IVA (Inspeksi Visual Asam Asetat)</option>
                <option value="Gizi">Gizi</option>
                <option value="TB Paru">TB Paru (Tuberkulosis Paru)</option>
                <option value="Kusta">Kusta</option>
                <option value="Sanitasi">Sanitasi</option>
                <option value="Kesehatan Remaja">Kesehatan Remaja</option>
                <option value="Kesehatan Lansia">Kesehatan Lansia</option>
                <option value="Laboratorium">Laboratorium</option>
                <option value="Kefarmasian">Kefarmasian</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection