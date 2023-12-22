@extends('layouts.main-jadwal-dokter', ['title' => 'Jadwal Dokter'])
@section('heroSection')
<div class="columns">
    <div class="flex font-montserrat text-green-700 justify-left text-center px-4 md:text-left md:pl-[9vh] xl:pl-[25vh] sm:text-left sm:pl-20">
        <div class="flex flex-col w-full sm:w-4/5">
            <h1 class="font-bold md:pb-1 lg:pb-5 text-2xl md:text-3xl lg:text-4xl mt-4 md:mt-0 xl:text-5xl">Jadwal Dokter
            </h1>
        </div>
    </div>
</div>
@endsection
@section('container')

@foreach($fotod as $index => $fd)
@php
$nam = $namad[$index] ?? null;
$spesi = $spesid[$index] ?? null;
$jadwal = $jadwald[$index] ?? null;
$jsenins = $jsenin[$index] ?? null;
$jselasas = $jselasa[$index] ?? null;
$jrabus = $jrabu[$index] ?? null;
$jkamiss = $jkamis[$index] ?? null;
$jjumats = $jjumat[$index] ?? null;
$jsabtus = $jsabtu[$index] ?? null;
@endphp
@if ($nam)
@if($spesi)
@if($jadwal)
<div class="bg-white shadow-lg rounded-lg p-4 md:p-6 flex flex-col md:flex-row items-center">
    <img class="w-40 h-40 rounded-full object-cover mr-5" src="{{ Storage::url('imgdokter/' . $fd->foto) }}" alt="Doctor's Photo">
    <div class="flex flex-col md:justify-between">
        <div>
            <p class="text-lg md:text-xl font-semibold">{{ $nam->name }}</p>
            <p class="text-gray-600 text-sm md:text-base">{{ $spesi->spesialisasi }}</p>
        </div>
        <div class="grid grid-cols-3 gap-5 md:grid-cols-7 divide-x divide-gray-300 text-center mr-5 mt-2 md:mt-4">
            @php
            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            $schedule = [$jsenins->jamsenin, $jselasas->jamselasa,$jrabus->jamrabu ,$jkamiss->jamkamis ,$jjumats->jamjumat ,$jsabtus->jamsabtu ];
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
@endif
@endif
@endif
@endforeach
@endsection