    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
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
                        <div class="pt-14 text-4xl font-bold flex ml-32 font-montserrat text-green-700">
                            <h1>Dapatkan Layanan Kesehatan <br /> yang Tepat dan Cepat</h1>
                        </div>
                        <div class="pt-14 pb-12 text-lg flex ml-32 font-montserrat text-green-700">
                            <h2>Membantu anda untuk mendapatkan berbagai layanan <br /> kesehatan dimulai dari rumah dengan tepat dan <br /> cepat tanpa antrian </h2>
                        </div>

                        <div class="ml-32 text-green-700">
                            <h2>Ambil nomor antrian online</h2>
                        </div>

                        <div class="z-10 relative h-28 pt-2rounded-lg my-auto border shadow-lg bg-white rounded-lg mx-40 gap-4 mt-2">
                            <div class="flex gap-4">
                                <div class="pt-8 ml-4 pl-[40px] w-70">
                                    <select id="countries" class=" bg-gray-50 border border-green-600 text-green-700 text-sm rounded-lg focus:ring-green-500
                                            focus:border-green-500 block w-full p-2.5 bg-green-700 bg-opacity-20 dark:border-green-600 dark:placeholder-green-400 text-green-700
                                            dark:focus:ring-green-500 dark:focus:border-green-500">
                                        <option selected>Pilih Jenis Layanan Kesehatan</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>

                                <div class="pt-8 ml-8 w-60">
                                    <select id="countries" class=" bg-gray-50 border border-green-600 text-green-700 text-sm rounded-lg focus:ring-green-500
                                            focus:border-green-500 block w-full p-2.5 bg-green-700 bg-opacity-20 dark:border-green-600 dark:placeholder-green-400 text-green-700
                                            dark:focus:ring-green-500 dark:focus:border-green-500">
                                        <option selected>Pilih Jam Layanan</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                                <div class="pt-8 ml-8">
                                    <button class="w-56 bg-green-600 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-lg mr-10">
                                        Ambil Antrian
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="h-[32rem]">
            <div class="container max-w-full h-full bg-custom-color3 relative">
                <div class="flex flex-row justify-center items-center pt-32 gap-80">
                    <div class="flex flex-col text-green-700">
                        <div class="flex justify-center text-lg bg-white rounded shadow-lg">
                            Jadwal Pelayanan
                        </div>
                        <div class="flex flex-row gap-10 justify-between pt-2">
                            <div class="">
                                Senin
                            </div>
                            <div>
                                07:30 - 01:00
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
                        <div class="flex flex-row gap-7 justify-start">
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
                            <img src="../../img/logoPuskesmasLegok.png" class="w-48" alt="Puskesmas Legok">
                        </div>
                        <div class="">
                            <img src="../../img/logoBanten.png" class="w-28" alt="Logo Satya">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-[32rem]">
            <div class="container max-w-full h-full bg-green-200 bg-opacity-70 px-8 py-4">
                <div class="bg-gray-100 p-4 shadow-m text-4xl text-center ">
                    <h1>Our Program</h1>
                </div>
            </div>
        </div>
    </body>

    </html>