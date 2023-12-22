@extends('layouts.main', ['title' => 'Pelayanan'])
@section('heroSection')
    <div class="columns">
        <div
            class="flex font-montserrat mt-5 md:mt-0 text-green-700 justify-left text-justify px-4 lg:text-left lg:pl-64 sm:pl-20">
            <div class="flex flex-col w-full md:w-4/5 sm:w-3/5">
                <h1 class="font-bold pb-1 lg:pb-5 text-xl md:text-3xl xl:text-4xl">Pelayanan</h1>
                <p class="text-xs md:text-base lg:text-lg">Komitmen kami adalah untuk menyediakan layanan
                    kesehatan terbaik bagi masyarakat dengan melibatkan tim profesional yang berdedikasi dan memanfaatkan
                    fasilitas modern yang kami miliki. Tim medis kami, yang terdiri dari para ahli kesehatan yang
                    berpengalaman, bertujuan untuk memberikan perawatan yang mencakup aspek pencegahan, pengobatan,
                    dan pemulihan.</p>
            </div>
        </div>
    </div>
@endsection
@section('container')
    <div class="container max-w-full h-full bg-custom-color3 relative">
        <div
            class="flex flex-col md:flex-row md:justify-center items-center lg:pt-32 lg:gap-64 md:gap-16 py-20 pb-0 md:py-32">
            <div
                class="flex flex-col text-green-700 font-montserrat scale-100 md:scale-125 xl:scale-150 bg-white shadow-lg px-8 py-4 rounded-lg">
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
            <div class="lg:flex md:flex flex-row justify-center items-center invisible hidden md:visible">
                <div class="">
                    <img src="../../img/logoPuskesmasLegok.png" class="w-0 md:w-48 lg:w-64" alt="Puskesmas Legok">
                </div>
                <div class="">
                    <img src="../../img/logoBanten.png" class="w-0 md:w-28 lg:w-48" alt="Logo Satya">
                </div>
            </div>
        </div>
        <div
            class="bg-white relative container scale-75 -top-28 md:top-0 md:scale-90 xl:scale-100 mx-auto px-4 pt-8 shadow-inner">
            <div class="flex flex-wrap -mx-4">
                <!-- Left Column -->
                <div class="w-full md:w-2/4 px-4 lg:mb-0">
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
                        <h2 class="font-semibold text-xl ">Lantai 2</h2>
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
                <div class="w-full md:w-2/4 px-4 my-auto">
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
                    @foreach ($photos as $p)
                        <img class="flex-none w-120 h-60 object-cover rounded-lg shadow-lg"
                            src="{{ Storage::url('imgfasilitas/' . $p->foto) }} alt=" Image description">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mx-4 py-4 md:mx-48 md:py-14">
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-4xl pb-2 md:pb-4 font-bold text-green-800">Cek Jadwal Dokter</h2>
                <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 flex flex-col md:flex-row items-center">
                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mb-2 md:mr-4" src="{{ asset('../../img/orangniaga.jpeg') }}" alt="Doctor's Photo">
                    <div class="flex flex-col md:justify-between">
                        <div>
                            <p class="text-lg md:text-xl font-semibold">dr. Abcdefg</p>
                            <p class="text-gray-600 text-sm md:text-base">Spesialis Kandungan (kandungan anak)</p>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-7 divide-x divide-gray-300 text-center mt-2 md:mt-4">
                            @php
                                $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                $schedule = ['10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '08:00 - 12:00', '10:00 - 13:00'];
                            @endphp
                            @foreach ($days as $index => $day)
                            <div class="px-1 md:px-2 py-1">
                                <div class="font-bold text-xs md:text-sm">{{ $day }}</div>
                                <div class="text-xxs md:text-xs">{{ $schedule[$index] }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <a href="/detaildokter" class="text-white bg-green-700 hover:bg-green-800 font-bold rounded-lg text-base md:text-lg px-4 md:px-8 py-2 mt-2 md:mt-4 inline-block">
                See More
            </a>
        </div>

@endsection
