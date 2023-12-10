<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
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
                                    <a href="#" class="font-poppins block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-black font-bold md:p-0 md:dark:text-black font-bold" aria-current="page">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                        Pelayanan</a>
                                </li>
                                <li>
                                    <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                        Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                        Program & Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="lg:bg-opacity-0 bg-opacity-70 items-center justify-between hidden w-full md:flex md:w-auto md:order-1 z-50 rounded-md px-5" id="navbar-search">
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
                                <a href="#" class="font-poppins block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-black font-bold md:p-0 md:dark:text-black font-bold" aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="#" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Pelayanan</a>
                            </li>
                            <li>
                                <a href="/tentangkami" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/program-kegiatan" class="font-poppins block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-600 md:p-0 md:dark:hover:text-slate-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
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
                            <h1 class="font-bold pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Dapatkan Layanan
                                Kesehatan yang Tepat dan Cepat</h1>
                            <h2 class="text-xs sm:text-sm md:text-base lg:text-lg">Membantu anda mendapatkan berbagai
                                layanan kesehatan dimulai dari rumah dengan tepat dan cepat.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="h-[30rem] lg:h-[40rem]">
            <div class="container z-10 max-w-full absolute block -translate-y-2/4">
                <div class="container flex max-w-full justify-center px-2 gap-2 md:px-5 md:gap-10 ">
                    <div class="w-3/4 mx-auto flex flex-col justify-center border shadow-lg bg-white rounded-2xl py-2 px-4 font-bold leading-relaxed tracking-light text-green-700 font-montserrat">
                        <h2 class="text-lg sm:text-xl md:text-2xl text-left mb-4">Ambil Nomor Antrian Online</h2>
                        <form action="" class="w-full flex flex-col sm:flex-row items-center sm:items-start gap-2 md:gap-10">
                            <select class="w-full rounded-lg bg-green-700 bg-opacity-20 px-2 py-1 text-sm sm:text-base" id="">
                                <option selected disabled>Cari Jenis Layanan Kesehatan</option>
                                @foreach($enumValues as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <select class="w-full rounded-lg bg-green-700 bg-opacity-20 px-2 py-1 text-sm sm:text-base" id="">
                                <option selected>Pilih Jam Layanan</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                            <div class="w-full mt-1 p-1 rounded-lg bg-green-700 text-center text-white">
                                <button type="submit" class="w-full">Ambil Antrian</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container max-w-full h-full bg-custom-color3 relative">
                <div class="flex flex-col lg:flex-row lg:justify-center items-center lg:pt-52 lg:gap-64 pt-40">
                    <div class="flex flex-col text-green-700 font-montserrat scale-110 lg:scale-150">
                        <div class="flex justify-center text-lg bg-white rounded shadow-lg">
                            Jadwal Pelayanan
                        </div>
                        <div>
                            08.00 - 13.00
                        </div>
                    </div>
                    <div class="flex flex-row gap-10 justify-between">
                        <div>
                            Selasa
                        </div>
                        <div>
                            08.00 - 13.00
                        </div>
                    </div>
                    <div class="flex flex-row gap-10 justify-between">
                        <div>
                            Rabu
                        </div>
                        <div>
                            08.00 - 13.00
                        </div>
                    </div>
                    <div class="flex flex-row gap-10 justify-between">
                        <div>
                            Kamis
                        </div>
                        <div>
                            08.00 - 13.00
                        </div>
                    </div>
                    <div class="flex flex-row gap-10 justify-between">
                        <div>
                            Jumat
                        </div>
                        <div>
                            08.00 - 11.00
                        </div>
                    </div>
                    <div class="flex flex-row gap-10 justify-between">
                        <div>
                            Sabtu
                        </div>
                        <div>
                            08.00 - 11.00
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
                <div class="flex flex-row justify-center items-center">
                    <div class="">
                        <img src="../../img/logoPuskesmasLegok.png" class="w-48 lg:w-64 invisible lg:visible" alt="Puskesmas Legok">
                    </div>
                    <div class="">
                        <img src="../../img/logoBanten.png" class="w-28 lg:w-48 invisible lg:visible" alt="Logo Satya">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-[32rem] pt-14">
        <div class="container max-w-full h-full px-8 py-4 font-montserrat">
            <div class="flex justify-center">
                <h2 class="text-4xl text-green-700">Frequently Asked Question (FAQ)</h2>
            </div>
        </div>

    </body>
            <script>
                document.addEventListener('alpine:init', () => {
                    Alpine.store('accordion', {
                        tab: 0
                    });

                    Alpine.data('accordion', (idx) => ({
                        init() {
                            this.idx = idx;
                        },
                        idx: -1,
                        handleClick() {
                            this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                        },
                        handleRotate() {
                            return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                        },
                        handleToggle() {
                            return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                        }
                    }));
                })
            </script>

        </div>
    </div>
</body>

</html>
