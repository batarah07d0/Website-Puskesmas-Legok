@extends('layouts.main-jadwal-dokter', ['title' => 'Jadwal Dokter'])
@section('heroSection')
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center px-4 md:text-left md:pl-[9vh] xl:pl-[25vh] sm:text-left sm:pl-20">
            <div class="flex flex-col w-full sm:w-4/5">
                <h1 class="font-bold md:pb-1 lg:pb-5 text-2xl md:text-3xl lg:text-4xl mt-4 md:mt-0 xl:text-5xl">Jadwal Dokter
                </h1>
            </div>
        </div>
    </div>
@endsection
@section('container')
<div class="mx-4 py-4 md:mx-48 md:py-14">

<!-- //newline -->
            <div class="flex flex-col pt-4">
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
        </div>

        
<!-- //newline -->
<div class="flex flex-col pt-4">
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
        </div>

        
<!-- //newline -->
<div class="flex flex-col pt-4">
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
        </div>
@endsection
