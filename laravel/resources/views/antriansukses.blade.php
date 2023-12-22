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
        if (isset($exist)) {
            echo 'Maaf, anda sudah mengambil antrian untuk esok hari. <br>';
            echo 'Nomor antrian anda : ' . $nomor_antrian;
        } else {
            echo 'Anda telah mengambil nomor antrian. <br>';
            echo 'Nomor antrian anda : ' . $nomor_antrian;
        }
    @endphp
    <a class="btn btn-primary" href="{{ URL::to('nomorantrian/pdf') }}">Export to PDF</a>
</body>

</html>
