<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <style>
        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 3px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: green;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }
    </style>
    <title>Puskesmas Legok | {{ $title ?? '' }}</title>
</head>

<body>
    <div class="h-[20rem] lg:h-[32rem]">
        <div class="container max-w-full h-full bg-cover" style="background-image: url('/img/Group_10.png');">
            {{-- Navbar --}}
            <nav class="bg-opacity-50">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="img/logo.png" class="w-16 md:w-24" alt="Logo Puskesmas Legok" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                            <img src="img/name.png" class="w-24 md:w-36">
                        </span>
                    </a>
                    <div class="flex md:order-2">
                        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                            aria-expanded="false"
                            class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                        <div class="relative hidden md:block ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class=" text-gray-500 dark:text-gray-400 p-12" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </div>
                            <input type="text" id="search-navbar"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search...">
                        </div>
                        <button data-collapse-toggle="navbar-search" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-search" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="lg:bg-opacity-0 bg-opacity-70 items-center justify-between hidden w-full md:flex md:w-auto md:order-1 z-50 rounded-md px-5"
                        id="navbar-search">
                        <div class="relative mt-3 md:hidden mx-5">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="search-navbar"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search...">
                        </div>
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium bg-color rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparant dark:bg-transparant md:dark:bg-transparant dark:border-black">
                            <li>
                                <a href="/"
                                    class="font-poppins block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-black font-bold"
                                    aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="/pelayanan"
                                    class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Pelayanan</a>
                            </li>
                            <li>
                                <a href="/tentangkami"
                                    class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/program-kegiatan"
                                    class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Program & Kegiatan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- End Navbar --}}
            {{-- Hero --}}
            <div class="container pt-14 max-w-full overflow-hidden">
                @yield('heroSection')
            </div>
            {{-- End Hero --}}
        </div>
    </div>
    {{-- Container --}}
    <div class="h-[30rem] lg:h-[40rem] bg-[#F5FFF4]">
        @yield('container')
    </div>
    {{-- End Container --}}
    {{-- FAQ --}}
    <div class="h-[32rem] pt-14 bg-[#F5FFF4]">
        @yield('faqSection')
    </div>
    {{-- End FAQ --}}
</body>
{{-- Footer --}}
<footer class="bg-white">
    <div class="grid gap-2 grid-cols-2 mt-24 ml-20 mr-20 border-b-2 pb-16">
        <div>
            <div class="flex items-center">
                <img src="img/logokecil.png" class="w-12">
                <span>
                    <img src="img/puskesmasLegokFooter.png" class="ml-2">
                </span>
            </div>
            <div class="mt-4 pr-96 mr-20">
                <h3 class="font-montserrat text-lg text-slate-500 text-justify">
                    Membantu anda mendapatkan berbagai layanan kesehatan
                    dimulai dari rumah dengan tepat dan cepat.</h3>
            </div>
            <div class=" mt-6 flex justify-start">
                <a href="https://www.instagram.com/puskesmaslegok_tng/">
                    <img src="img/instagram.png">
                </a>
                <div class="flex items-center ml-4">
                    <a href="https://www.youtube.com/channel/UCre_crOrFCT9sqvdT5jSVMQ">
                        <img src="img/YouTube.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="grid grid-flow-col justify-stretch">
            <div>
                <div>
                    <h2 class="pl-4 text-3xl font-montserrat font-semibold text-green-500">Contacts us</h2>
                </div>
                <div class="grid grid-rows-3 pl-4 gap-8 pt-12">
                    <div class="flex items-center">
                        <img src="img/Email.png">
                        <span class="ml-2">
                            <h3 class="font-montserrat text-slate-600">puskesmaslegok@gmail.com</h3>
                        </span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/phone.png">
                        <span class="ml-2">
                            <h3 class="font-montserrat text-slate-600">(62) 8213136633</h3>
                        </span>
                    </div>
                    <div class="flex items-center mr-12">
                        <img src="img/location.png" class="place-content-start">
                        <span class="ml-2">
                            <h3 class="font-montserrat text-slate-600">Jalan Panti Asuhan, RT. 001/002 Kelurahan
                                Babakan, Kec.
                                Legok,
                                Kab. Tangerang, Banten 15820</h3>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe
                            src="https://maps.google.com/maps?q=puskesmas%20legok&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                            frameborder="0" scrolling="no" style="width: 380px; height: 270px;"></iframe>
                        <style>
                            .mapouter {
                                position: relative;
                                height: 270px;
                                width: 380px;
                                background: #fff;
                            }

                            .maprouter a {
                                color: #fff !important;
                                position: absolute !important;
                                top: 0 !important;
                                z-index: 0 !important;
                            }
                        </style><a href="https://blooketjoin.org/blooket-host/">blooket host</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                height: 270px;
                                width: 380px
                            }

                            .gmap_canvas iframe {
                                position: relative;
                                z-index: 2
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8 pb-8">
        <h3 class="font-montserrat text-slate-500">Copyright © 2023 Website Resmi UPTD Puskesmas Legok All Rights
            Reserved</h3>
    </div>
</footer>
{{-- End Footer --}}

</html>
