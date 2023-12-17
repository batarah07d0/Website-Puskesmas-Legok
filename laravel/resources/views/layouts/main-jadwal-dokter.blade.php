<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
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
    <div class="h-[10rem] md:h-[13rem] lg:h-[17rem] xl:h-[20vmax]">
        <div class="container max-w-full h-[25vmax] xl:h-[45vh] bg-cover"
            style="background-image: url('/img/Group_10.png')">
            {{-- Navbar --}}
            <nav class="bg-opacity-50">
                <div
                    class="md:grid md:grid-cols-3 md:pl-10 lg:pl-11 xl:pl-32 md:gap-0 xl:place-content-between max-w-full md:max-w-full flex flex-wrap justify-between md:justify-around p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="img/logo.png" class="ml-2 w-9 md:w-12" alt="Logo Puskesmas Legok" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                            <img src="img/name.png" class="w-24 md:w-28">
                        </span>
                    </a>
                    <div class="flex md:order-2">
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
                    <div class="z-40 absolute md:col-span-2 inset-x-0 top-16 md:top-8 md:static bg-opacity-90 md:bg-opacity-0 bg-white items-center md:mr-8 lg:mr-10 xl:mr-[7.5rem] hidden mx-auto md:max-w-xl max-w-[26rem] lg:max-w-2xl md:flex rounded-md"
                        id="navbar-search">
                        <ul
                            class="flex flex-col p-2 md:p-0 font-medium bg-color rounded-lg md:space-x-8 lg:max-w-2xl md:flex-row md:mt-0 md:border-0 md:bg-transparant dark:bg-transparant md:dark:bg-transparant dark:border-black">
                            <li>
                                <a href="/"
                                    class="font-poppins block py-2 px-3 {{ Request::is('/') ? 'text-white md:text-black lg:text-black bg-green-700 font-bold' : 'text-gray-900' }} rounded md:bg-transparent lg:text-lg md:p-0 md:dark:text-black">Beranda</a>
                            </li>
                            <li>
                                <a href="/pelayanan"
                                    class="font-poppins block py-2 px-3 {{ Request::is('pelayanan') ? 'text-white md:text-black lg:text-black bg-green-700 font-bold' : 'text-gray-900' }} rounded md:bg-transparent lg:text-lg md:p-0 md:dark:text-black">
                                    Pelayanan</a>
                            </li>
                            <li>
                                <a href="/tentangkami"
                                    class="font-poppins block py-2 px-3 {{ Request::is('tentangkami') ? 'text-white md:text-black lg:text-black bg-green-700 font-bold' : 'text-gray-900' }} rounded md:bg-transparent lg:text-lg md:p-0 md:dark:text-black">
                                    Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/program-kegiatan"
                                    class="font-poppins block py-2 px-3 {{ Request::is('program-kegiatan') ? 'text-white md:text-black lg:text-black bg-green-700 font-bold' : 'text-gray-900' }} rounded md:bg-transparent lg:text-lg md:p-0 md:dark:text-black">
                                    Program & Kegiatan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- End Navbar --}}
            {{-- Hero --}}
            <div class="container pt-3 px-8 md:pt-6 lg:pt-14 max-w-full overflow-hidden">
                @yield('heroSection')
            </div>
            {{-- End Hero --}}
        </div>
    </div>
    {{-- Container --}}
    @yield('container')
    {{-- End Container --}}
</body>
{{-- Footer --}}
<footer class="bg-white">
    <div
        class="grid gap-2 grid-cols-1 md:grid-cols-3 mt-8 lg:mt-10 mx-1 md:mx-2 lg:mx-20 divide-y md:divide-transparent lg:divide-transparent pb-1">
        <!-- Puskesmas Legok Section -->
        <div class="mb-2 lg:mb-4">
            <div class="ml-6 flex items-center justify-start">
                <img src="img/logokecil.png" class="w-10 lg:w-12">
                <span>
                    <img src="img/puskesmasLegokFooter.png" class="ml-2">
                </span>
            </div>
            <div class="mt-2 lg:mt-4">
                <h3 class="font-montserrat text-base sm:text-lg lg:max-w-md text-slate-500 text-justify px-6">
                    Membantu anda mendapatkan berbagai layanan kesehatan dimulai dari rumah dengan tepat dan cepat.
                </h3>
            </div>
            <div class="invisible hidden md:visible mx-6 mt-2 lg:mt-6 md:flex justify-start">
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
        <!-- Contact Us Section -->
        <div class="flex flex-col justify-start items-start mx-6 mb-2 lg:mb-4">
            <div class="mt-2">
                <h2
                    class="text-2xl sm:text-3xl md:text-lg font-montserrat font-semibold text-[#499757] text-center sm:text-left">
                    CONTACT US</h2>
            </div>
            <div class="w-full items-center lg:pt-5">
                <div class="mt-2 flex justify-start">
                    <img src="img/Email.png">
                    <div class="ml-2">
                        <h3 class="font-montserrat text-slate-600">puskesmaslegok@gmail.com</h3>
                    </div>
                </div>
                <div class="mt-2 flex justify-start">
                    <img src="img/phone.png">
                    <span class="ml-2">
                        <h3 class="font-montserrat text-slate-600">(62) 8213136633</h3>
                    </span>
                </div>
                <div class="mt-2 flex items-center lg:justify-center justify-start">
                    <img src="img/location.png" class="place-content-start pb-5 lg:pb-11">
                    <span class="ml-2">
                        <h3 class="font-montserrat lg:pb-5 text-slate-600 text-left">Jalan Panti Asuhan, RT.
                            001/002 Kelurahan
                            Babakan, Kec.
                            Legok,
                            Kab. Tangerang, Banten 15820</h3>
                    </span>
                </div>
                <div class="mt-2 flex justify-center md:invisible md:hidden">
                    <a href="https://www.instagram.com/puskesmaslegok_tng/">
                        <img src="img/instagram.png" class="w-6">
                    </a>
                    <div class="flex items-center ml-2">
                        <a href="https://www.youtube.com/channel/UCre_crOrFCT9sqvdT5jSVMQ">
                            <img src="img/YouTube.png" class="w-7">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section -->
        <div class="flex justify-center lg:justify-end pt-3 pb-2 lg:pt-0 lg:pr-6">
            <div
                class="mapouter relative w-[260px] h-[150px] md:w-[28vw] md:mr-5 lg:mr-0 md:h-[24vh] lg:w-[250px] lg:h-[220px] xl:w-[380px] xl:h-[270px] bg-white">
                <div
                    class="gmap_canvas overflow-hidden w-[260px] h-[150px] md:w-[28vw] md:mr-5 lg:mr-0 md:h-[24vh] lg:w-[250px] lg:h-[220px] xl:w-[380px] xl:h-[270px]">
                    <iframe
                        src="https://maps.google.com/maps?q=puskesmas%20legok&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                        frameborder="0" scrolling="no"
                        class="w-[260px] h-[150px] md:w-[28vw] md:mr-5 lg:mr-0 md:h-[24vh] lg:w-[250px] lg:h-[220px] xl:w-[380px] xl:h-[270px]"></iframe>
                    <style>
                        .maprouter a {
                            color: #fff !important;
                            position: absolute !important;
                            top: 0 !important;
                            z-index: 0 !important;
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
    <hr class="w-full">
    <div class="flex justify-center items-center py-3 lg:pt-3 md:pb-3">
        <h3 class="font-montserrat text-xs lg:text-lg text-slate-500">Copyright © 2023 Website
            Resmi UPTD Puskesmas
            Legok All
            Rights Reserved</h3>
    </div>
</footer>
{{-- End Footer --}}

</html>
