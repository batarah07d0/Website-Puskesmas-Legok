@extends('layouts.main', ['title' => 'Jadwal Dokter'])
@section('heroSection')
<div class="columns">
    <div class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20">
        <div class="flex flex-col">
            <h1 class="text-green-700 font-semibold pb-5 text-xl xl:text-4xl font-['Montserrat']">Jadwal Dokter</h1>
        </div>
    </div>
</div>
@endsection
@section('container')
<div class="h-[30rem] lg:h-[40rem]  bg-white">
    <div class="ml-28 mt-12">
        <p class="text-green-700 text-lg font-semibold font-['Poppins']">Note : Jadwal Dokter dapat berubah sewaktu-waktu</p>
    </div>
    <div class="ml-28 mt-8 flex">
        <div class="w-11/12 h-48 bg-green-700 rounded-lg shadow flex items-center ">
            <img src="https://source.unsplash.com/random" class="h-1/2 w-auto rounded-full ml-16" alt="">
            <div class="items-center ml-10">
                <p class="mb-2 font-bold font-['Poppins'] text-lg">dr. Abcdefg</p>
                <p class="">Spesialis Kandungan <br>(Kandungan Anak)</p>
            </div>
        </div>
    </div>
</div>
@endsection