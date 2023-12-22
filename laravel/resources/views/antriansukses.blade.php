<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body>
    @php
        if (!isset($nomor_antrian) || !isset($no_bpjs) || !isset($nama_lengkap) || !isset($jenis_layanan) || !isset($jam_layanan)) {
            redirect('/');
        }

        if (isset($exist)) {
            echo 'Maaf, anda sudah mengambil antrian untuk esok hari. <br>';
            echo 'Nomor Antrian : ' . $nomor_antrian . '<br>';
            echo 'Nomor BPJS : ' . $no_bpjs . '<br>';
            echo 'Nama pasien : ' . $nama_lengkap . '<br>';
            echo 'Jenis layanan : ' . $jenis_layanan . '<br>';
            echo 'Jam layanan : ' . date('H:i:s', strtotime($jam_layanan)) . '<br>';
        } else {
            echo 'Anda telah mengambil nomor antrian! <br>';
            echo 'Nomor Antrian : ' . $nomor_antrian . '<br>';
            echo 'Nomor BPJS : ' . $no_bpjs . '<br>';
            echo 'Nama pasien : ' . $nama_lengkap . '<br>';
            echo 'Jenis layanan : ' . $jenis_layanan . '<br>';
            echo 'Jam layanan : ' . date('H:i:s', strtotime($jam_layanan)) . '<br>';
        }
    @endphp
    <form action="buat-antrian/pdf" method="post">
        @csrf
        <input type="hidden" name="nomor_antrian" value="{{ $nomor_antrian }}">
        <input type="hidden" name="nama_lengkap" value="{{ $nama_lengkap }}">
        <input type="hidden" name="no_bpjs" value="{{ $no_bpjs }}">
        <input type="hidden" name="jenis_layanan" value="{{ $jenis_layanan }}">
        <input type="hidden" name="jam_layanan" value="{{ $jam_layanan }}">
        <button
            class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-md font-poppins w-48 border border-1 drop-shadow-lg rounded-md font-bold p-2">Cetak
            Nomor Antrian</button>
    </form>
    {{-- <a class="btn btn-primary" href="buat-antrian/pdf">
    </a> --}}
</body>

</html>
