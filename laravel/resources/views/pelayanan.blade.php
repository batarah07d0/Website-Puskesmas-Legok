<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body>

    <div class="h-[24rem] lg:h-[32rem]">
        <div class="container max-w-full h-full bg-cover" style="background-image: url('/img/Group_10.png');">
            <nav class="bg-opacity-50">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="img/logo.png" class="w-16 md:w-24" alt="Logo Puskesmas Legok" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                            <img src="img/name.png" class="w-24 md:w-36">
                        </span>
                    </a>
                    <div class="flex md:order-2">
                        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                        <div class="relative hidden md:block ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class=" text-gray-500 dark:text-gray-400 p-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </div>
                            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                        </div>
                        <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="bg-gray-100 lg:bg-opacity-0 bg-opacity-70 items-center justify-between hidden w-full md:flex md:w-auto md:order-1 z-50 rounded-md px-5" id="navbar-search">
                        <div class="relative mt-3 md:hidden mx-5">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                        </div>
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium bg-color rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparant dark:bg-transparant md:dark:bg-transparant dark:border-black">
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-black font-bold md:p-0 md:dark:text-black font-bold" aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Pelayanan</a>
                            </li>
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Tentang Kami</a>
                            </li>
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Program & Kegiatan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container sm:pt-14 max-w-full overflow-hidden">
                <div class="columns">
                    <div class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20 ">
                        <div class="flex flex-col w-full sm:w-3/5">
                            <h1 class="font-bold pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Pelayanan</h1>
                            <p class="text-xs sm:text-sm md:text-base lg:text-lg">Komitmen kami adalah untuk menyediakan layanan kesehatan terbaik bagi masyarakat dengan melibatkan tim profesional yang berdedikasi dan memanfaatkan fasilitas modern yang kami miliki. Tim medis kami, yang terdiri dari para ahli kesehatan yang berpengalaman, bertujuan untuk memberikan perawatan holistik yang mencakup aspek pencegahan, pengobatan, dan pemulihan. Fasilitas kami yang dilengkapi dengan teknologi terkini tidak hanya menciptakan lingkungan yang aman, tetapi juga nyaman bagi setiap pasien yang mempercayakan kesehatan mereka kepada kami. Melalui pendekatan yang personal dan komprehensif, kami berkomitmen untuk membantu Anda mencapai kondisi kesehatan optimal yang Anda harapkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container max-w-full h-full bg-custom-color3 relative">
        <div class="flex flex-col lg:flex-row lg:justify-center items-center lg:pt-32 lg:gap-64 pt-32 pb-32 lg:pb-32">
            <div class="flex flex-col text-green-700 font-montserrat scale-110 lg:scale-150 bg-white rounded shadow-lg px-8 py-4 rounded-lg">
                <div class="flex justify-center text-lg ">
                    Jam Operasional
                </div>
                <div class="flex flex-row gap-10 justify-between pt-2">
                    <div class="">
                        Senin
                    </div>
                    <div>
                        07:30 - 13:00
                    </div>
                </div>
                <div class="flex flex-row gap-10 justify-between">
                    <div>
                        Selasa
                    </div>
                    <div>
                        07:30 - 01:00
                    </div>
                </div>
                <div class="flex flex-row gap-10 justify-between">
                    <div>
                        Rabu
                    </div>
                    <div>
                        07:30 - 01:00
                    </div>
                </div>
                <div class="flex flex-row gap-10 justify-between">
                    <div>
                        Kamis
                    </div>
                    <div>
                        07:30 - 01:00
                    </div>
                </div>
                <div class="flex flex-row gap-10 justify-between">
                    <div>
                        Jumat
                    </div>
                    <div>
                        07:30 - 23:00
                    </div>
                </div>
                <div class="flex flex-row gap-10 justify-between">
                    <div>
                        Sabtu
                    </div>
                    <div>
                        07:30 - 23:00
                    </div>
                </div>
                <div class="flex flex-row gap-9 justify-start">
                    <div>
                        Minggu
                    </div>
                    <div>
                        Libur
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center items-center invisible lg:visible h-0 lg:32">
                <div class="">
                    <img src="../../img/logoPuskesmasLegok.png" class="w-48 lg:w-64" alt="Puskesmas Legok">
                </div>
                <div class="">
                    <img src="../../img/logoBanten.png" class="w-28 lg:w-48" alt="Logo Satya">
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Left Column -->
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                <!-- Section Lantai 1 -->
                <div class="mb-8">
                    <h2 class="font-semibold text-xl mb-4">Lantai 1</h2>
                    <div class="bg-white shadow rounded-lg p-6">
                        <ul class="divide-y divide-gray-200">
                            <li class="py-2">Ruang Unit Gawat Darurat (UGD)</li>
                            <li class="py-2">Ruang Persalinan (PONED)</li>
                            <li class="py-2">Ruang Pasca Persalinan / Nifas</li>
                            <li class="py-2">Bagian Rujukan</li>
                            <li class="py-2">Ruang Pelayanan Kesehatan Lansia</li>
                            <li class="py-2">Ruang Pelayanan Kesehatan Ibu</li>
                            <!-- ... other items -->
                        </ul>
                    </div>
                </div>
                <!-- Section Lantai 2 -->
                <div>
                    <h2 class="font-semibold text-xl mb-4">Lantai 2</h2>
                    <div class="bg-white shadow rounded-lg p-6">
                        <ul class="divide-y divide-gray-200">
                            <li class="py-2">Ruang Kepala Puskesmas</li>
                            <li class="py-2">Ruang Kepala Tata Usaha</li>
                            <li class="py-2">Mushola</li>
                            <li class="py-2">Dapur</li>
                            <li class="py-2">Toilet</li>
                            <!-- ... other items -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="w-full lg:w-1/3 px-4">
                <!-- Section Lantai 2 (Continued) -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="font-semibold text-xl mb-4">Lantai 2</h2>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">Ruang Administrasi</li>
                        <li class="py-2">Ruang Pelayanan Imunisasi</li>
                        <li class="py-2">Ruang Pelayanan Anak</li>
                        <li class="py-2">Ruang Pelayanan Kesehatan Umum</li>
                        <li class="py-2">Ruang Pelayanan Kesehatan Gigi dan Mulut</li>
                        <li class="py-2">Ruang Pelayanan Gizi</li>
                        <li class="py-2">Ruang Pelayanan Sanitasi</li>
                        <li class="py-2">Ruang Pelayanan Kesehatan Remaja</li>
                        <li class="py-2">Ruang Pelayanan Keluarga Berencana</li>
                        <li class="py-2">Ruang Pelayanan IVA</li>
                        <li class="py-2">Ruang Laktasi</li>
                        <!-- ... other items -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- Scrollable Image Section -->
        <div class="mt-8">
            <div class="flex space-x-4 overflow-x-auto">
                @foreach($photos as $p)
                <img class="flex-none w-120 h-60 object-cover rounded-lg shadow-lg" src="{{ Storage::url('imgfasilitas/' . $p->foto) }} alt=" Image description">
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-custom-color3 px-6 py-8">
        <div class="container mx-auto">
            <!-- Title and See More -->
            <div class="flex justify-between items-center w-full mb-8">
                <h2 class="text-4xl font-bold text-green-800">Cek Jadwal Layanan</h2>
                <a href="#" class="text-lg text-green-800 hover:text-green-600">See More...</a>
            </div>
            <!-- Dropdowns -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-start gap-4">
                <div class="relative">
                    <select class="appearance-none block w-full bg-white border border-gray-400 rounded-lg shadow py-3 pl-4 pr-10 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        <option>Gizi</option>
                        <!-- Other options -->
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">

                    </div>
                </div>
                <div class="relative">
                    <select class="appearance-none block w-full bg-white border border-gray-400 rounded-lg shadow py-3 pl-4 pr-10 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        <option>Selasa</option>
                        <!-- Other options -->
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>