<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Pasien</title>
</head>
<body>
    <h1>Pasien</h1>
    @if ($pasiens)
        @foreach ($pasiens as $pasien)
            {{$pasien}}
        @endforeach
    @endif
    @if (isset($success))
    <h1>Success</h1>
    @endif

    <form action="pasien/store" method="post">
        @csrf
        <input type="date" name="tanggal_lahir">
        <button type="submit">Submit</button>
    </form>
    <form action="pasien/5" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <form action="pasien/5/forceDelete" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">ForceDelete</button>
    </form>
    <form action="pasien/5/update" method="POST">
        @method('PUT')
        @csrf
        <input type="hidden" name="nama_lengkap" value="Axel">
        <button type="submit">Update</button>
    </form>
    <form action="pasien/5/restore" method="POST">
        @csrf
        <button type="submit">Restore</button>
    </form>
</body>
</html>