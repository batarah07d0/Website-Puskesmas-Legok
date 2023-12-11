@extends('layouts.main', ['title' => 'Program & Kegiatan'])
@section('heroSection')
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20 ">
            <div class="flex flex-col w-full sm:w-3/5">
                <h1 class="font-bold pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Pelayanan</h1>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg">Komitmen kami adalah untuk menyediakan layanan
                    kesehatan terbaik bagi masyarakat dengan melibatkan tim profesional yang berdedikasi dan memanfaatkan
                    fasilitas modern yang kami miliki. Tim medis kami, yang terdiri dari para ahli kesehatan yang
                    berpengalaman, bertujuan untuk memberikan perawatan holistik yang mencakup aspek pencegahan, pengobatan,
                    dan pemulihan. Fasilitas kami yang dilengkapi dengan teknologi terkini tidak hanya menciptakan
                    lingkungan yang aman, tetapi juga nyaman bagi setiap pasien yang mempercayakan kesehatan mereka kepada
                    kami. Melalui pendekatan yang personal dan komprehensif, kami berkomitmen untuk membantu Anda mencapai
                    kondisi kesehatan optimal yang Anda harapkan.</p>
            </div>
        </div>
    </div>
@endsection
@section('container')
    <div class="container max-w-full h-full bg-custom-color3 relative">
        <div class="flex flex-col lg:flex-row lg:justify-center items-center lg:pt-32 lg:gap-64 pt-32 pb-32 lg:pb-32">
            <div
                class="flex flex-col text-green-700 font-montserrat scale-110 lg:scale-150 bg-white shadow-lg px-8 py-4 rounded-lg">
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
                <!-- Image 1 -->
                <img class="flex-none w-120 h-60 object-cover rounded-lg shadow-lg" src="/path/to/your/image1.jpg"
                    alt="Image description">
                <!-- Image 2 -->
                <img class="flex-none w-120 h-60 object-cover rounded-lg shadow-lg" src="/path/to/your/image2.jpg"
                    alt="Image description">
                <!-- Add more images as needed -->
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
                    <select
                        class="appearance-none block w-full bg-white border border-gray-400 rounded-lg shadow py-3 pl-4 pr-10 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        <option>Gizi</option>
                        <!-- Other options -->
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                    </div>
                </div>
                <div class="relative">
                    <select
                        class="appearance-none block w-full bg-white border border-gray-400 rounded-lg shadow py-3 pl-4 pr-10 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        <option>Selasa</option>
                        <!-- Other options -->
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
