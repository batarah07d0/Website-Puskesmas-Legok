<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script> --}}
    <title>Tentang Kami</title>
    <style>
        body {
            background-color: #F5FFF4;
        }

        .roundedtexts {
            background-color: #5D9F689E;
        }
    </style>
</head>

<body>
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-cover" style="background-image: url('/img/Group_10.png');">
            <nav class="bg-opacity-50">
                <div class="mx-auto max-w-7xl -px-2 sm:px-6 lg:px-8 pt-10">
                    <div class="relative flex h-16 items-center justify-between">

                        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start gap-14 ">
                            <div class="flex flex-shrink-0 items-center mb-4">
                                <img class="h-24 pb-4 w-auto" src="../../img/logo.png" alt="Your Company">
                                <img class="h-10 pt-2 w-auto" src="../../img/name.png" alt="Your Company">
                            </div>
                            <form>
                                <div class="pt-8">
                                    <input type="search" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-green-600 bg-green-600 bg-opacity-20 bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none border-green-700 placeholder-opacity-50 text-black dark:placeholder:text-green-700 dark:focus:border-primary" id="exampleSearch" placeholder="Search" />

                                </div>
                            </form>
                            <div class="hidden sm:ml-6 sm:block pt-8">
                                <div class="flex space-x-4">
                                    <a href="#" class="text-black  px-3 py-2 text-sm font-medium border-b-2 border-black hover:border-transparent focus:border-transparent " aria-current="page">Beranda</a>
                                    <a href="#" class="text-black  hover:font-bold px-3 py-2 text-sm font-medium">Pelayanan</a>
                                    <a href="#" class="text-black  hover:font-bold px-3 py-2 text-sm font-medium">Tentang Kami</a>
                                    <a href="#" class="text-black  hover:font-bold px-3 py-2 text-sm font-medium">Program & Kegiatan</a>
                                </div>
                            </div>
                            <!-- <div>
                                <button class="bg-green-600 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-full">
                                        Login
                                </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="container pt-14 h-fit overflow-hidden">
                        <div class="columns">
                            <div class=" flex font-montserrat text-green-700 justify-around">
                                <div class="flex flex-col w-2/5">
                                    <h1 class="font-bold pb-5 text-xl xl:text-4xl">Tentang Kami</h1>
                                    <h2 class="text-xs sm:text-base lg:text-lg">Sebagai fasilitas pelayanan kesehatan yang didirikan oleh pemerintah, Puskesmas Legok menyediakan layanan kesehatan primer mulai dari perawatan hingga program pencegahan penyakit. Dengan pelayanan profesional dan komprehensif, kami berkomitmen untuk memberikan kontribusi nyata dalam peningkatan kualitas hidup masyarakat setempat.</h2>
                                </div>
                                <div class="flex-col w-2/5 flex flex-row justify-center">
                                    <div class="flex flex-row justify-center items-center">
                                        <div class="">
                                            <img src="../../img/Logowithtext.png" class="w-24 lg:w-48" alt="Puskesmas Legok">
                                        </div>
                                        <div class="">
                                            <img src="../../img/satya.png" class="w-14 lg:w-28" alt="Logo Satya">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    {{-- <div class="container z-10 absolute block -translate-y-2/4">
        <div class="container flex max-w-full justify-center px-2 gap-2 md:px-52 md:gap-10">
            <div href="#profil" class="columns-2 w-full border shadow-lg bg-white rounded-full flex justify-center py-2 font-bold leading-relaxed tracking-light text-green-700 font-montserrat text-[7px] sm:text-xs md:text-base lg:text-xl">
                Profil Puskesmas
            </div>
        </div>
    </div> --}}
    <div class="container z-10 max-w-full absolute block -translate-y-2/4">
        <div class="container flex max-w-full justify-center px-2 gap-2 md:px-5 md:gap-10">
            <a href="#profil" class="columns-2 w-full border shadow-lg bg-white rounded-full flex justify-center py-2 font-bold leading-relaxed tracking-light text-green-700 font-montserrat text-[8px] sm:text-xs md:text-base lg:text-xl">
                Profil Puskesmas
            </a>
            <a href="#" class="columns-2 w-full border shadow-lg bg-white rounded-full flex justify-center py-2 font-bold leading-relaxed tracking-light text-green-700 font-montserrat text-[8px] sm:text-xs md:text-base lg:text-xl">
                Struktur Organisasi
            </a>
            <a href="#" class="columns-2 w-full border shadow-lg bg-white rounded-full flex justify-center py-2 font-bold leading-relaxed tracking-light text-green-700 font-montserrat text-[8px] sm:text-xs md:text-base lg:text-xl">
                Staff Puskesmas
            </a>
            <a href="#" class="columns-2 w-full border shadow-lg bg-white rounded-full flex justify-center py-2 font-bold leading-relaxed tracking-light text-green-700 font-montserrat text-[8px] sm:text-xs md:text-base lg:text-xl">
                Daftar Prestasi
            </a>
        </div>
    </div>
    <div class="container max-w-full" id="profil">
        <div class="pt-32 flex flex-col items-center gap-11">
            <div class="flex justify-center items-center bg-white shadow-lg rounded-[22px] py-2 shadow px-10 sm:px-20 xl:px-40">
                <div class="text-green-500 font-bold text-center text-xl md:text-4xl xl:text-5xl">
                    Profil
                </div>
            </div>
            <div class="flex w-full max-h-full items-center px-10 gap-5 flex-col xl:justify-center xl:flex-row xl:gap-10">
                
                <div class="bg-white max-h-full shadow-lg rounded-lg shadow" style="background-color:#EBFEEA">
                    <div class="flex flex-col justify-between">
                        <div class="flex flex-row pt-5 px-5">
                            <div class="w-[15px] h-[15px] bg-neutral-700 rounded-[50px]"></div>
                            <div class="w-[15px] h-[15px] ms-auto bg-neutral-700 rounded-[50px]"></div>
                        </div>
                        <div class="px-10 flex flex-col">
                            <h1 class="font-montserrat font-bold text-4xl">Visi:</h1>
                            <p class=" font-montserrat font-bold pb-2 text-xl">
                                Menjadikan Masyarakat Legok Sehat Mandiri
                            </p>
                            <h1 class="font-montserrat font-bold text-4xl">Misi:</h1>
                            <p class="font-montserrat font-bold">
                            <ul class="list-disc px-5 font-montserrat font-bold text-xl">
                                <li>
                                    Meningkatkan mutu pelayanan kesehatan di wilayah kerja Puskesmas Legok.
                                </li>
                                <li>
                                    Mendorong kemandirian masyarakat Legok di bidang kesehatan.
                                </li>
                                <li>
                                    Meningkatkan kerja sama dengan lintas sektor.
                                </li>
                                <li>
                                    Meningkatkan kualitas SDM Puskesmas yang kompeten.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="flex flex-row pb-5 px-5">
                            <div class="w-[15px] h-[15px] bg-neutral-700 rounded-[50px]"></div>
                            <div class="w-[15px] h-[15px] ms-auto bg-neutral-700 rounded-[50px]"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-fit">
                    <div>
                        <h1 class="font-montserrat font-bold text-2xl text-center pb-2">TATA NILAI KAMI</h1>
                    </div>
                    <div>
                        <div class="flex items-center bg-white shadow-lg rounded-lg shadow" style="background-color:#EBFEEA">
                            <div class="flex flex-col">
                                <div class="flex flex-row pt-5 -mb-5 px-5">
                                    <div class="w-[15px] h-[15px] bg-neutral-700 rounded-[50px]"></div>
                                    <div class="w-[15px] h-[15px] ms-auto bg-neutral-700 rounded-[50px]"></div>
                                </div>
                                <div class="flex flex-col font-poppins font-bold px-12 py-2 gap-1">
                                    <div class="flex flex-row">
                                        <div class="roundedtexts flex items-center justify-center bg-neutral-500 bg-opacity-60 rounded-full text-2xl w-[50px] h-[50px]">
                                            L
                                        </div>
                                        <div class="flex items-center text-lg">
                                            AYANI DENGAN HATI
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="roundedtexts flex items-center justify-center bg-neutral-500 bg-opacity-60 rounded-full text-2xl w-[50px] h-[50px]">
                                            E
                                        </div>
                                        <div class="flex items-center text-lg">
                                            MPATI
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="roundedtexts flex items-center justify-center bg-neutral-500 bg-opacity-60 rounded-full text-2xl w-[50px] h-[50px]">
                                            G
                                        </div>
                                        <div class="flex items-center text-lg">
                                            ERAK CEPAT
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="roundedtexts flex items-center justify-center bg-neutral-500 bg-opacity-60 rounded-full text-2xl w-[50px] h-[50px]">
                                            O
                                        </div>
                                        <div class="flex items-center text-lg">
                                            PTIMIS
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="roundedtexts flex items-center justify-center bg-neutral-500 bg-opacity-60 rounded-full text-2xl w-[50px] h-[50px]">
                                            K
                                        </div>
                                        <div class="flex items-center text-lg">
                                            ERJA SAMA
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row -mt-5 pb-5 px-5">
                                    <div class="w-[15px] h-[15px] bg-neutral-700 rounded-[50px]"></div>
                                    <div class="w-[15px] h-[15px] ms-auto bg-neutral-700 rounded-[50px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full" id="motto">
        <div class="pt-32 flex flex-col items-center gap-11">
            <div class="flex justify-center items-center bg-white shadow-lg rounded-[22px] py-2 shadow px-10 sm:px-20 xl:px-40">
                <div class="text-green-500 font-bold text-center text-xl md:text-4xl xl:text-5xl">
                    Motto
                </div>
            </div>
            <div class="flex flex-col justify-center items-center gap-6">
                <div class="flex flex-row w-[200px] justify-around items-center">
                    <div class="w-[27.90px] h-[6.31px] rotate-[-130deg] bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                    <div class="w-[21.58px] h-[6.98px] -rotate-90 bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                    <div class="w-[28.75px] h-[6.20px] rotate-[-40deg] bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                </div>
                <div>
                    <h1 class="font-montserrat font-bold text-center text-xl md:text-4xl">
                        "KITA DISINI UNTUK MELAYANI"
                    </h1>
                </div>
                <div class="flex flex-row w-[200px] justify-around">
                    <div class="w-[27.90px] h-[6.31px] rotate-[130deg] bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                    <div class="w-[21.58px] h-[6.98px] rotate-90 bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                    <div class="w-[28.75px] h-[6.20px] rotate-[40deg] bg-gradient-to-bl from-white to-green-700 rounded-[10px]"></div>
                </div>
            </div>

            <div class="flex flex-row pb-20 pt-5 gap-6 px-2 sm:px-5">
                <div class="rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                    <img class="w-[104.178px] h-[115.251px] sm:w-[173.63px] sm:h-[192.085px] lg:w-[260.445px] lg:h-[288.1275px] xl:w-[347.26px] xl:h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                    <div>
                        <p class="text-center text-xs py-2 w-[104.123px] sm:w-[173.63px] md:text-xl lg:w-[260.445px] xl:text-2xl xl:py-6 xl:w-[347.26px] truncate">
                            Drs. Dikezz Lawler banget
                        </p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                    <img class="w-[104.178px] h-[115.251px] sm:w-[173.63px] sm:h-[192.085px] lg:w-[260.445px] lg:h-[288.1275px] xl:w-[347.26px] xl:h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                    <div>
                        <p class="text-center text-xs py-2 w-[104.123px] sm:w-[173.63px] md:text-xl lg:w-[260.445px] xl:text-2xl xl:py-6 xl:w-[347.26px] truncate">
                            Drs. Dikezz Lawler banget
                        </p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                    <img class="w-[104.178px] h-[115.251px] sm:w-[173.63px] sm:h-[192.085px] lg:w-[260.445px] lg:h-[288.1275px] xl:w-[347.26px] xl:h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                    <div>
                        <p class="text-center text-xs py-2 w-[104.123px] sm:w-[173.63px] md:text-xl lg:w-[260.445px] xl:text-2xl xl:py-6 xl:w-[347.26px] truncate">
                            Drs. Dikezz Lawler banget
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full px-10 bg-emerald-100">
                <div class="flex justify-center items-center bg-white shadow-lg rounded-full py-2 shadow mx-10 mb-12 mt-10 sm:mx-32 sm:mt-10 md:mt-32 xl:mb-32 xl:mt-32 xl:mx-96">
                    <div class="text-green-500 font-bold text-center text-xl md:text-4xl xl:text-5xl">
                        STAFF PUSKESMAS
                    </div>
                </div>
                <div id="indicators-carousel" class="relative w-full pt-10" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                            <div class="flex">
                                <div class="flex flex-col absolute block h-full bg-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                                    <img class="w-[347.26px] h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                                    <div>
                                        <p class="text-center text-2xl py-6">
                                            Doctor Dikezz
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="flex">
                                <div class="flex flex-col absolute block h-full bg-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                                    <img class="w-[347.26px] h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                                    <div>
                                        <p class="text-center text-2xl py-6">
                                            Doctor Dikezz
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse -bottom-8 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 border-2 border-green-400 group-hover:bg-black/5 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
                            <svg class="w-4 h-4 text-green-950 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 border-2 border-green-400 group-hover:bg-black/5 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
                            <svg class="w-4 h-4 text-green-950 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="pb-32"></div>
            </div>
        </div>
    </div>

    <div class="container max-w-full" id="prestasi">
        <div class="pt-32 flex flex-col items-center gap-11">
            <div class="flex justify-center items-center bg-white shadow-lg rounded-[22px] py-2 shadow px-10 sm:px-20 xl:px-40">
                <div class="text-green-500 font-bold text-center text-xl md:text-4xl xl:text-5xl">
                    Prestasi
                </div>
            </div>
            <div class="w-9/12 bg-white shadow-xl rounded-3xl px-10 py-20 ">
                <div class="flex w-full max-h-full items-center gap-5 flex-col xl:justify-center xl:flex-row xl:gap-10">
                    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                                <div class="flex">
                                    <div class="flex flex-col absolute block h-full bg-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                                        <img class="w-[347.26px] h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                                        <div>
                                            <p class="text-center text-2xl py-6">
                                                Doctor Dikezz
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="flex">
                                    <div class="flex flex-col absolute block h-full bg-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg overflow-hidden shadow-lg" style="background-color:#C4F2BD">
                                        <img class="w-[347.26px] h-[384.17px]" src="../../img/orangniaga.jpeg" alt="Dokter Niaga">
                                        <div>
                                            <p class="text-center text-2xl py-6">
                                                Doctor Dikezz
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse -bottom-8 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 border-2 border-green-400 group-hover:bg-black/5 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
                                <svg class="w-4 h-4 text-green-950 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 border-2 border-green-400 group-hover:bg-black/5 group-focus:ring-2 group-focus:ring-black group-focus:outline-none">
                                <svg class="w-4 h-4 text-green-950 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div> 
            </div>

            <div class="pb-32"></div>
        </div>
    </div>

    <div class="container max-w-full bg-blue-500">
        <nav class="flex flex-col items-center sm:flex-row justify-between">
            <div>
                lol
            </div>
            <div class="relative w-full px-5 pb-8 mt-8  sm:w-full sm:px-20">
                <div class="mx-auto px-5">
                    <div class="mx-auto mt-8 grid max-w-full divide-y divide-neutral-200">
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> How does the billing work?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                                    billing options, including monthly and annual subscription plans, as well as pay-as-you-go
                                    pricing for certain services. Payment is typically made through a credit card or other
                                    secure online payment method.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> Can I get a refund for my subscription?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                                    guarantee for most of its subscription plans. If you are not satisfied with your
                                    subscription within the first 30 days, you can request a full refund. Refunds for
                                    subscriptions that have been active for longer than 30 days may be considered on a
                                    case-by-case basis.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> How do I cancel my subscription?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To cancel your subscription, you can
                                    log in to your account and navigate to the subscription management page. From there, you
                                    should be able to cancel your subscription and stop future billing.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> Is there a free trial?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a free trial of our software
                                    for a limited time. During the trial period, you will have access to a limited set of
                                    features and functionality, but you will not be charged.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> How do I contact support?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our platform or
                                    have any other questions, you can contact the company's support team by submitting a support
                                    request through the website or by emailing support@ourwebsite.com.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span> Do you offer any discounts or promotions?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We may offer discounts or promotions
                                    from time to time. To stay up-to-date on the latest deals and special offers, you can sign
                                    up for the company's newsletter or follow it on social media.
                                </p>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                lol
            </div>
        </nav>

    </div>
</body>

</html>