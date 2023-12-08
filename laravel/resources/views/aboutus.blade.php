<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
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
                                <a href="/" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Pelayanan</a>
                            </li>
                            <li>
                                <a href="/tentangkami" class="font-poppins block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-black font-bold md:p-0 md:dark:text-black font-bold">
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

            <div class="container pt-14 max-w-full overflow-hidden">
                <div class="columns">
                    <div class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20">
                        <div class="flex flex-col w-full sm:w-2/5">
                            <h1 class="font-bold pb-5 text-xl xl:text-4xl">Tentang Kami</h1>
                            <h2 class="text-xs sm:text-base lg:text-lg">Sebagai fasilitas pelayanan kesehatan yang didirikan oleh pemerintah, Puskesmas Legok menyediakan layanan kesehatan primer mulai dari perawatan hingga program pencegahan penyakit. Dengan pelayanan profesional dan komprehensif, kami berkomitmen untuk memberikan kontribusi nyata dalam peningkatan kualitas hidup masyarakat setempat.</h2>
                        </div>
                    </div>
                </div>
            </div>
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
</body>

</html>