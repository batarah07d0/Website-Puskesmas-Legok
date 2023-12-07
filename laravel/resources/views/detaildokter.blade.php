<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="ml-7  mt-10">
        <h1 class="text-green-700  text-2xl font-medium font-poppins">Spesialis Kandungan
            (Kandungan
            anak)</h1>
    </div>
    <div class="mt-4 ml-7">
        <h2 class="text-black text-3xl">dr Abcdefg, PhD</h2>
    </div>

    <div class="flex ml-7 mt-8">
        <div class="bg-green-600 text-3xl text-white w-32 h-10 "><span
                class=" flex justify-center font-medium">Profil</span></div>
        <div class="ml-7 text-3xl font-medium">Pendidikan</div>
    </div>

    <div class="ml-7 mt-5 pr-8">
        <h1 class="text-slate-700 text-xl font-monserrat text-justify">Dr. ABCDEFG, PhD, adalah seorang dokter
            spesialis kandungan
            dengan fokus pada kandungan anak. Dengan dedikasinya pada bidang kesehatan reproduksi dan kehamilan, Dr.
            ABCDEFG membawa pengetahuan mendalam dan keterampilan klinis yang luas untuk memberikan perawatan terbaik
            kepada pasien-pasien kecil dan ibu hamil. Setelah menyelesaikan pendidikan dokternya di Fakultas Kedokteran
            Universitas XY
        </h1>

    </div>

    <div class="card shadow-lg px-6 mb-6">
        <div class="block justify-normal border mt-10 pb-5">
            <img src="{{ asset('storage/images/bocchi.jpg') }}" class="rounded-full w-24 mt-6 ml-7">
            <span>
                <div class="text-black font-poppins text-2xl mt-6 ml-6 font-medium">dr. Dikes</div>
                <div class="text-xl font-light text-slate-900 mt-4 ml-6">Spesial Kandungan</div>
                <div class="text-xl font-light text-slate-900 ml-6">(Kandungan Anak)</div>
            </span>
        </div>
        <div class="pr-6 mb-3 pb-2">
            <table class="table-fixed mt-4 mb-4 ml-6">
                <thead class="bg-green-600 h-12">
                    <tr class="text-center text-white text-m font-poppins">
                        <th class="w-36">Senin</th>
                        <th class="w-36">Selasa</th>
                        <th class="w-36">Rabu</th>
                        <th class="w-36">Kamis</th>
                        <th class="w-36">Jumat</th>
                        <th class="w-36">Sabtu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center font-medium font-poppins">
                        <td>-</td>
                        <td>-</td>
                        <td class="bg-green-300">11.00-13.00</td>
                        <td>-</td>
                        <td class="bg-green-300">08.00-12.00</td>
                        <td>-</td>
                    </tr>
                    <tr class="text-center font-medium font-poppins ">
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td class="bg-green-300">11.00-13.00</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <button
            class="bg-green-600 hover:bg-green-700 transition duration-300 flex items-stretchs shadow-lg rounded-xl ml-7 pt-2 pb-4 pr-3 pl-1 mb-4 mt-2">
            <img src="{{ asset('storage/images/leftarrow.png') }}" class="ml-2 mt-2">
            <div class="text-white font-poppins font-semibold mt-2 ml-3">
                Temukan Doktor Lainnya
            </div>
        </button>
    </div>

</body>



</html>
