<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-auto">
    <div class="ml-7 mt-5">
        <h1 class="font-poppins text-4xl font-bold drop-shadow-lg">Daftar Online</h1>
    </div>
    <div class="shadow-lg pb-4">
        <form class="ml-7 mt-8 mr-7">
            <div class="grid gap-6 mb-6">
                <div class="shadow-lg">
                    <label for="nama" class="block mb-2 font-poppins text-2xl font-medium">Nama</label>
                    <input type="text" id="nama"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Nama Lengkap Anda, Cth. : Aziz Akbar" required>
                </div>
                <div class="shadow-lg">
                    <label for="nik" class="block mb-2 font-poppins text-2xl font-medium">NIK</label>
                    <input type="number" id="nik"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan NIK Anda, Cth. : 12345678910" required>
                </div>
                <div class="shadow-lg">
                    <label for="nomorbpjs" class="block mb-2 font-poppins text-2xl font-medium">Nomor BPJS (Jika Anda
                        BPJS)</label>
                    <input type="number" id="nomorbpjs"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Nomor BPJS Anda, Cth. : 09876554321" required>
                </div>
                <div>
                    <p class="-mt-5 ml-1 text-red-500 text-xs italic">Jika Anda bukan pengguna BPJS, maka akan ada
                        biaya pendaftaran sebesar Rp. 3000</p>
                </div>
                <div class="shadow-lg">
                    <label for="tempatlahir" class="block mb-2 font-poppins text-2xl font-medium">Tempat Lahir</label>
                    <input type="text" id="tempatlahir"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Tempat Lahir Anda, Cth. : Jakarta Utara" required>
                </div>
                <div>
                    <label for="tanggallahir" class="block mb-2 font-poppins text-2xl font-medium">Tanggal Lahir</label>
                    <input type="date" id="tanggallahir" name="tanggallahir"
                        class="w-48 font-poppins border border-gray-600 text-sm rounded-lg block p-3 shadow-lg">
                </div>
                <div>
                    <label for="agama" class="block mb-2 font-poppins text-2xl font-medium">Agama</label>
                    <select id="agama"
                        class="w-48 font-poppins border border-gray-600 text-sm rounded-lg p-3 shadow-lg">
                        <option value="" disabled selected hidden>Pilih Agama Anda</option>
                        <option value="islam">Islam</option>
                        <option value="kristenprotestan">Kristen Protestan</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="shadow-lg">
                    <label for="kepalakeluarga" class="block mb-2 font-poppins text-2xl font-medium">Kepala
                        Keluarga</label>
                    <input type="text" id="kepalakeluarga"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Nama Kepala Keluarga Anda, Cth. : Aji Rono" required>
                </div>
                <div class="shadow-lg">
                    <label for="alamat" class="block mb-2 font-poppins text-2xl font-medium">Alamat (Beserta
                        RT/RW)</label>
                    <input type="text" id="alamat"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Alamat Anda, Cth. : Jalan Mawar Blok 3 No 5 RT 02/RW 12" required>
                </div>
                <div class="shadow-lg">
                    <label for="desaataukelurahan"
                        class="block mb-2 font-poppins text-2xl font-medium">Desa/Kelurahan</label>
                    <input type="text" id="desaataukelurahan"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Desa/Kelurahan Anda, Cth. : Cirarab" required>
                </div>
                <div class="shadow-lg">
                    <label for="kecamatan" class="block mb-2 font-poppins text-2xl font-medium">Kecamatan</label>
                    <input type="text" id="kecamatan"
                        class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3"
                        placeholder="Masukkan Kecamatan Anda, Cth. : Legok" required>
                </div>
            </div>
        </form>
    </div>
    <div class="grid justify-items-end ml-7 mt-9 mb-6 mr-7">
        <button
            class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-lg font-poppins w-48 border border-1 shadow-2xl rounded-md font-bold p-2 shadow-xl">
            KIRIM
        </button>
    </div>


</body>

</html>
