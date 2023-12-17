@extends('layouts.main', ['title' => 'Beranda'])
@section('heroSection')
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20">
            <div class="flex flex-col w-full sm:w-2/5">
                <h1 class="font-bold pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Program & Kegiatan</h1>
                <h2 class="text-xs sm:text-sm md:text-base lg:text-lg">Membantu anda mendapatkan berbagai layanan kesehatan
                    dimulai dari rumah dengan tepat dan cepat.</h2>
            </div>
        </div>
    </div>
@endsection
@section('container')
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-background-green px-8 py-4">
            <div class="flex justify-center">
                <div
                    class=" font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Program</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24  pb-5 overflow-auto">
                @foreach ($photos->take(4) as $p)
                    <div
                        class="flex-shrink-0 w-[200px] h-[250px]  bg-white rounded-lg justify-center items-center shadow-lg">
                        <img class="object-cover w-full h-full" src="{{ Storage::url('imgpk/' . $p->foto) }}"
                            alt="Foto">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-custom-color3 bg-opacity-70 px-8 py-4">
            <div class="flex justify-center">
                <div
                    class="font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Post</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24 overflow-x-auto pb-5">
                @foreach ($post->take(4) as $pos)
                    <div
                        class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">
                        <img class="object-cover w-full h-full" src="{{ Storage::url('imgpost/' . $pos->foto) }}"
                            alt="Foto">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
@section('container')
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-background-green px-8 py-4">
            <div class="flex justify-center">
                <div
                    class=" font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Program</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24  pb-5 overflow-auto">
                @foreach ($photos->take(4) as $p)
                    <div
                        class="flex-shrink-0 w-[200px] h-[250px]  bg-white rounded-lg justify-center items-center shadow-lg overflow-hidden">
                        <img class="object-cover w-full h-full" src="{{ Storage::url('imgpk/' . $p->foto) }}"
                            alt="Foto">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-custom-color3 bg-opacity-70 px-8 py-4">
            <div class="flex justify-center">
                <div
                    class="font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Post</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24 overflow-x-auto pb-5">
                @foreach ($post->take(4) as $pos)
                    <div
                        class="flex w-[200px] h-[250px] shrink-0 bg-transparent rounded-lg justify-center items-center shadow-lg">
                        <img class="object-cover w-full h-full" src="{{ Storage::url('imgpost/' . $pos->foto) }}"
                            alt="Foto">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script></script>
@endsection
