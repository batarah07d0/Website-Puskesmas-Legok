<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body x-data="{ showModal: false, isApproved: false }" x-init="showModal = !isApproved">
    <!-- Modal -->
    <div x-show="showModal" id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden flex fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow pb-2 dark:bg-gray-700">
                <div class="mt-4 ml-7 pb-2 flex items-center justify-between mr-7">
                    <h1 class="text-black text-2xl font-bold font-poppins flex justify-start md:text-3xl xl:text-5xl">
                        Persetujuan Umum
                    </h1>
                    <span class="flex items-center ml-10">
                        <img src="img/logoPuskesmasLegok.png" class="w-16 md:w-24 xl:w-32">
                        <img src="img/logoBanten.png" class="w-10 md:w-16 xl:w-20">
                    </span>
                </div>
                <div class="overflow-hidden mb-6 pb-4">
                    <h3 class="font-poppins ml-7 mt-4 font-medium mr-7">
                        Selaku Pasien/Wali hukum UPTD Puskesmas LEGOK dengan menyatakan persetujuan:
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium mr-7">
                        1. Saya menyetujui untuk perawatan di UPTD Puskesmas LEGOK sebagai pasien rawat jalan.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        2. <strong>HAK DAN KEWAJIBAN SEBAGAI PASIEN</strong>, Saya mengakui bahwa dalam proses
                        pendaftaran untuk
                        mendapatkan perawatan UPTD Puskesmas LEGOK dan penandatangan dokumen ini, saya telah mendapat
                        informasi
                        tentang hak-hak dan kewajiban saya sebagai pasien
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        3. <strong>PERSETUJUAN PELAYANAN KESEHATAN</strong>, Saya menyetujui dan memberikan persetujuan
                        untuk
                        mendapat pelayanan kesehatan di UPTD Puskesmas LEGOK dan dengan ini saya meminta dan memberikan
                        kuasa kepada
                        pihak Puskesmas, dokter dan perawat,
                        dan tenaga kesehatan lainnya untuk memberikan Asuhan Keperawatan, pemeriksaan fisik yang
                        dilakukan oleh
                        dokter dan perawat, melakukan prosedur diagnostik, atau terapi dan tata laksana sesuai
                        pertimbangan dokter
                        yang diperlukan atau disarankan pada perawatan saya. Hal ini mencakup seluruh pemeriksaan dan
                        prosedur
                        diagnostic rutin, pemberian dan atau tindakan medis serta penyuntikan
                        (intra muscular, intravena dan prosedur invasive lainnya), produk farmasi dan obat-obatan,
                        pemasangan alat
                        kesehatan (kecuali yang membutuhkan persetujuan khusus/tertulis), dan pengambilan darah untuk
                        pemeriksaan
                        laboratorium atau pemeriksaan patologi yang dibutuhkan untuk pengobatan dan tindakan yang aman.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        4. <strong>PRIVASI</strong>, Saya memberi kuasa kepada UPTD Puskesmas LEGOK untuk menjaga
                        privasi dan
                        karahasiaan penyakit saya selama dalam perawatan.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        5. <strong>RAHASIA KEDOKTERAN</strong>, Saya setuju UPTD Puskesmas LEGOK wajib menjamin rahasia
                        kedokteran
                        saya baik untuk kepentingan perawatan atau pengobatan, kecuali saya mengungkapkansendiri atau
                        orang lain
                        yang saya beri kuasa kepada penjamin.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        5. <strong>RAHASIA KEDOKTERAN</strong>, Saya setuju UPTD Puskesmas LEGOK wajib menjamin rahasia
                        kedokteran
                        saya baik untuk kepentingan perawatan atau pengobatan, kecuali saya mengungkapkan sendiri atau
                        orang lain
                        yang saya beri kuasa kepada penjamin.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        6. <strong>MEMBUKA RAHASIA KEDOKTERAN</strong>, Saya setuju untuk membuka rahasia kedokteran
                        terkait dengan
                        kondisi kesehatan asuhan dan pengobatan yang saya terima kepada : • Dokter dan tenaga kesehatan
                        lain yang
                        memberikan asuhan kepada saya • Perusahaan asuransi kesehatan atau BPJS atau pihak lain yang
                        menjamin
                        pembiayaan saya.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        7. <strong>BARANG PRIBADI</strong>, Saya setuju untuk tidak membawa barang-barang berharga yang
                        tidak
                        diperlukan selama dalam perawatan UPTD Puskesmas LEGOK . Saya memahami dan menyetujui UPTD
                        Puskesmas LEGOK
                        tidak bertanggung jawab terhadap kehilangan, kerusakan, atau pencurian barang berharga.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        8. <strong>PENGAJUAN KELUHAN</strong>, Saya menyatakan bahwa saya telah menerima informasi
                        tentang adanya
                        tata cara mengajukan dan mengatasi keluhan terkait pelayanan medic yang di berikan terhadap diri
                        saya. Saya
                        setuju untuk mengikuti tata cara mengajukan keluhan sesuai prosedur yang ada.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        9. <strong>KEWAJIBAN PEMBAYARAN</strong>, Saya menyatakan setuju baik sebagai wali atau
                        sebagai pasien,
                        bahwa sesuai pertimbangan pelayanan yang diberikan kepada pasien, maka saya wajib untuk membayar
                        total/menyelesaikan biaya pelayanan, biaya pelayanan berdasarkan acuan biaya dan ketentuan UPTD
                        Puskesmas
                        LEGOK.
                    </h3>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        Saya juga menyadari dan memahami bahwa:
                    </h3>
                    <ul class="list-disc list-inside font-poppins ml-7 mt-2 font-medium text-justify mr-7">
                        <li>Apabila ada biaya pemeriksaan/tindakan/perawatan yang tidak ditanggung/ sebagian ditanggung
                            oleh
                            penjamin, maka saya bersedia melunasi biayanya.
                        </li>
                    </ul>
                    <ul class="list-disc list-inside font-poppins ml-7 mt-2 font-medium text-justify mr-7">
                        <li>Apabila UPTD Puskesmas LEGOK membutuhkan proses hukum untuk menagih biaya pelayanan UPTD
                            Puskesmas LEGOK
                            dari saya, saya memahami bahwa saya bertanggung jawab untuk membayar semua biaya yang
                            disebabkan dan
                            proses hukum tersebut.
                        </li>
                    </ul>
                    <h3 class="font-poppins ml-7 mt-4 font-medium text-justify mr-7">
                        Melalui dokumen ini saya menegaskan kembali bahwa saya mempercayakan kepada tenaga kesehatan
                        UPTD Puskesmas
                        LEGOK untuk memberikan perawatan, diagnostic dan terapi kepada saya sebagai pasien rawat jalan
                        atau
                        instalasi gawat darurat (IGD), termasuk semua pemeriksaan penunjang, yang dibutuhkan untuk
                        pengobatan dan
                        tindakan yang aman.
                    </h3>
                </div>
                <div>
                    <h1 class="font-poppins text-lg ml-7 mt-4 font-medium text-justify mr-7">
                        <strong>SAYA TELAH MEMBACA DAN SEPENUHNYA SETUJU</strong> dengan setiap pernyataan yang terdapat
                        pada
                        formulir ini dan menandatangani tanpa paksaan dan dengan kesadaran penuh.
                    </h1>
                    <div class="flex justify-end gap-7 ml-7 mr-7 mt-10 mb-8">
                        <button x-on:click="isApproved = true; showModal = false" type="button" class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-lg font-poppins w-48 border border-1 shadow-md drop-shadow-lg rounded-md font-bold p-4">
                            SETUJU
                        </button>
                        <span>
                            <button x-on:click="showModal = false; navigateTo('beranda')" type="button" class="ml-4 bg-rose-500 hover:bg-rose-700 transition duration-300 text-white text-lg font-poppins w-44 border border-1 shadow-md drop-shadow-lg rounded-md font-bold p-4">
                                KEMBALI
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Utama -->
    @if ($_POST['kategori'] == 'Poli Gigi')
    @if ($quota <= 0) <div class="mx-auto p-4 w-full max-w-4xl max-h-full" x-show="isApproved">
        <h1 class="font-poppins">
            Maaf, quota untuk Poli Gigi sudah habis untuk esok hari.
        </h1>
        <br>
        <a href="/" class="p-5 mt-10 font-poppins bg-green-500 drop-shadow-lg border rounded-lg text-white">Kembali ke
            home tab</a>
        </div>
        @else
        <div class="mx-auto p-4 w-full max-w-4xl max-h-full" x-show="isApproved">
            <div class="ml-7 mt-5">
                <h1 class="font-poppins text-4xl font-bold drop-shadow-lg">Daftar Online</h1>
                <p class="text-justify pr-6">Antrian yang diambil melalui pendaftaran online ini hanya dapat
                    digunakan pada
                    esok
                    hari sesuai dengan
                    Jam Pelayanan yang telah dipilih, toleransi keterlambatan selama 15 menit dari Jam Pelayanan
                    yang telah
                    dipilih jika lewat dari waktu keterlambatan maka tiket akan hangus.</p>
            </div>
            <form action="/buat-antrian" method="POST" class="ml-7 mt-8 mr-7">
                <div class="pb-4">
                    @csrf
                    <input type="hidden" name="jenis_layanan" value="{{ $_POST['kategori'] }}" autocomplete="off">
                    <input type="hidden" name="jam_layanan" value="{{ $_POST['jam_layanan'] }}" autocomplete="off">
                    <div class="grid gap-6 mb-6">
                        <div class="shadow-lg">
                            <label for="nama" class="block mb-2 font-poppins text-2xl font-medium">Nama</label>
                            <input type="text" id="nama" name="nama_lengkap" class="font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nama Lengkap Anda, Cth. : Aziz Akbar" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="nik" class="block mb-2 font-poppins text-2xl font-medium">NIK</label>
                            <input type="number" id="nik" name="nik" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan NIK Anda, Cth. : 12345678910" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="nomorbpjs" class="block mb-2 font-poppins text-2xl font-medium">Nomor BPJS
                                (Jika
                                Anda
                                BPJS)</label>
                            <input type="number" id="nomorbpjs" name="no_bpjs" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nomor BPJS Anda, Cth. : 09876554321" required>
                        </div>
                        <div>
                            <p class="-mt-5 ml-1 text-red-500 text-xs italic">Jika Anda bukan pengguna BPJS, maka
                                akan ada
                                biaya pendaftaran sebesar Rp. 3000</p>
                        </div>
                        <div class="shadow-lg">
                            <label for="tempatlahir" class="block mb-2 font-poppins text-2xl font-medium">Tempat
                                Lahir</label>
                            <input type="text" id="tempatlahir" name="tempat_lahir" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Tempat Lahir Anda, Cth. : Jakarta Utara" required>
                        </div>
                        <div>
                            <label for="tanggallahir" class="block mb-2 font-poppins text-2xl font-medium">Tanggal
                                Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggal_lahir" class="w-48 font-poppins border border-gray-600 text-sm rounded-lg block p-3 shadow-lg">
                        </div>
                        <div>
                            <label for="agama" class="block mb-2 font-poppins text-2xl font-medium">Agama</label>
                            <select id="agama" name="agama" class="w-48 font-poppins border border-gray-600 text-sm rounded-lg p-3 shadow-lg">
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
                            <input type="text" id="kepalakeluarga" name="kepala_keluarga" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nama Kepala Keluarga Anda, Cth. : Aji Rono" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="alamat" class="block mb-2 font-poppins text-2xl font-medium">Alamat
                                (Beserta
                                RT/RW)</label>
                            <input type="text" id="alamat" name="alamat" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Alamat Anda, Cth. : Jalan Mawar Blok 3 No 5 RT 02/RW 12" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="desaataukelurahan" class="block mb-2 font-poppins text-2xl font-medium">Desa/Kelurahan</label>
                            <input type="text" id="desaataukelurahan" name="desa" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Desa/Kelurahan Anda, Cth. : Cirarab" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="kecamatan" class="block mb-2 font-poppins text-2xl font-medium">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Kecamatan Anda, Cth. : Legok" required>
                        </div>
                    </div>
                </div>
                <div class="grid justify-items-end ml-7 mt-9 mb-6 mr-7">
                    <button data-modal-target="default-modal" ata-modal-toggle="default-modal" type="submit" class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-lg font-poppins w-48 border border-1 drop-shadow-lg rounded-md font-bold p-2">
                        AMBIL ANTRIAN
                    </button>
                </div>
            </form>
        </div>
        @endif
        @else
        <div class="mx-auto p-4 w-full max-w-4xl max-h-full" x-show="isApproved">
            <div class="ml-7 mt-5">
                <h1 class="font-poppins text-4xl font-bold drop-shadow-lg">Daftar Online</h1>
                <p class="text-justify pr-6">Antrian yang diambil melalui pendaftaran online ini hanya dapat digunakan
                    pada
                    esok
                    hari sesuai dengan
                    Jam Pelayanan yang telah dipilih, toleransi keterlambatan selama 15 menit dari Jam Pelayanan yang
                    telah
                    dipilih jika lewat dari waktu keterlambatan maka tiket akan hangus.</p>
            </div>
            <form action="" class="ml-7 mt-8 mr-7">
                <div class="pb-4">
                    @csrf
                    <input type="hidden" name="jenis_layanan" value="{{ $_POST['kategori'] }}">
                    <input type="hidden" name="jam_layanan" value="{{ $_POST['jam_layanan'] }}">
                    <div class="grid gap-6 mb-6">
                        <div class="shadow-lg">
                            <label for="nama" class="block mb-2 font-poppins text-2xl font-medium">Nama</label>
                            <input type="text" id="nama" name="nama_lengkap" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nama Lengkap Anda, Cth. : Aziz Akbar" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="nik" class="block mb-2 font-poppins text-2xl font-medium">NIK</label>
                            <input type="number" id="nik" name="nik" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan NIK Anda, Cth. : 12345678910" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="nomorbpjs" class="block mb-2 font-poppins text-2xl font-medium">Nomor BPJS
                                (Jika
                                Anda
                                BPJS)</label>
                            <input type="number" id="nomorbpjs" name="no_bpjs" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nomor BPJS Anda, Cth. : 09876554321" required>
                        </div>
                        <div>
                            <p class="-mt-5 ml-1 text-red-500 text-xs italic">Jika Anda bukan pengguna BPJS, maka akan
                                ada
                                biaya pendaftaran sebesar Rp. 3000</p>
                        </div>
                        <div class="shadow-lg">
                            <label for="tempatlahir" class="block mb-2 font-poppins text-2xl font-medium">Tempat
                                Lahir</label>
                            <input type="text" id="tempatlahir" name="tempat_lahir" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Tempat Lahir Anda, Cth. : Jakarta Utara" required>
                        </div>
                        <div>
                            <label for="tanggallahir" class="block mb-2 font-poppins text-2xl font-medium">Tanggal
                                Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggal_lahir" class="w-48 font-poppins border border-gray-600 text-sm rounded-lg block p-3 shadow-lg">
                        </div>
                        <div>
                            <label for="agama" class="block mb-2 font-poppins text-2xl font-medium">Agama</label>
                            <select id="agama" name="agama" class="w-48 font-poppins border border-gray-600 text-sm rounded-lg p-3 shadow-lg">
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
                            <input type="text" id="kepalakeluarga" name="kepala_keluarga" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Nama Kepala Keluarga Anda, Cth. : Aji Rono" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="alamat" class="block mb-2 font-poppins text-2xl font-medium">Alamat (Beserta
                                RT/RW)</label>
                            <input type="text" id="alamat" name="alamat" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Alamat Anda, Cth. : Jalan Mawar Blok 3 No 5 RT 02/RW 12" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="desaataukelurahan" class="block mb-2 font-poppins text-2xl font-medium">Desa/Kelurahan</label>
                            <input type="text" id="desaataukelurahan" name="desa" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Desa/Kelurahan Anda, Cth. : Cirarab" required>
                        </div>
                        <div class="shadow-lg">
                            <label for="kecamatan" class="block mb-2 font-poppins text-2xl font-medium">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class=" font-poppins border border-gray-600 text-sm rounded-lg block w-full p-3" placeholder="Masukkan Kecamatan Anda, Cth. : Legok" required>
                        </div>
                    </div>
                </div>
                <div class="grid justify-items-end ml-7 mt-9 mb-6 mr-7">
                    <button data-modal-target="default-modal" ata-modal-toggle="default-modal" type="submit" class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-lg font-poppins w-48 border border-1 drop-shadow-lg rounded-md font-bold p-2">
                        AMBIL ANTRIAN
                    </button>
                </div>
            </form>
        </div>
        @endif
</body>

<script>
    function navigateTo(url) {
        // Fungsi ini mengarahkan ke URL yang diinginkan
        window.location.href = "/";
    }
</script>

</html>