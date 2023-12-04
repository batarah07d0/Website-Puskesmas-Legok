    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
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
                                    <div class="flex space-x-4 font-montserrat">
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

                        <div class="z-10 relative h-28 pt-2rounded-lg my-auto border shadow-lg bg-white rounded-lg mx-40 gap-4 mt-8 font-montserrat">
                            <div class="ml-14 pt-2 text-green-700 font-bold">
                                <h2>Ambil Nomor Antrian Online</h2>
                            </div>
                            <div class="flex gap-4">
                                <div class="pt-2 ml-4 pl-[40px] w-70">
                                    <select id="countries" class=" bg-gray-50 border border-green-600 text-green-700 text-sm rounded-lg focus:ring-green-500
                                            focus:border-green-500 block w-full p-2.5 bg-green-700 bg-opacity-20 dark:border-green-600 dark:placeholder-green-400 text-green-700
                                            dark:focus:ring-green-500 dark:focus:border-green-500 font-montserrat">
                                        <option selected>Pilih Jenis Layanan Kesehatan</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>

                                <div class="pt-2 ml-8 w-60">
                                    <select id="countries" class=" bg-gray-50 border border-green-600 text-green-700 text-sm rounded-lg focus:ring-green-500
                                            focus:border-green-500 block w-full p-2.5 bg-green-700 bg-opacity-20 dark:border-green-600 dark:placeholder-green-400 text-green-700
                                            dark:focus:ring-green-500 dark:focus:border-green-500 font-montserrat">
                                        <option selected>Pilih Jam Layanan</option>
                                        <option value="#">08:00</option>
                                        <option value="#">09:00</option>
                                        <option value="#">10:00</option>
                                        <option value="#">11:00</option>
                                    </select>
                                </div>
                                <div class="pt-2 ml-8 font-montserrat">
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
                    <div class="flex flex-col text-green-700 font-montserrat">
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
                <div class="flex justify-center">
                    <div class=" font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                        <h1>Our Program</h1>
                    </div>
                </div>
                <div class="flex flex-row gap-8 justify-center pt-24 overflow-x-auto pb-5">
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                </div>
            </div>
        </div>

        <div class="h-[32rem]">
            <div class="container max-w-full h-full bg-custom-color3 bg-opacity-70 px-8 py-4">
                <div class="flex justify-center">
                    <div class="font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                        <h1>Our Post</h1>
                    </div>
                </div>
                <div class="flex flex-row gap-8 justify-center pt-24 overflow-x-auto pb-5">
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                    <div class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">01</div>
                </div>
            </div>
        </div>

        <div class="h-[32rem]">
            <div class="container max-w-full h-full bg-custom-color3 bg-opacity-70 px-8 py-4 font-montserrat">
                <div class="flex justify-center">
                    <div class="bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                        <h1>Frequently Asked Question (FAQ)</h1>
                    </div>
                </div>

                <div class="flex justify-center items-start my-2">
                    <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                        <ul class="flex flex-col">
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Jam berapa pelayanan di Puskesmas Legok</span>
                                    <svg :class="handleRotate()" class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all">
                                    <p class="p-3 text-gray-900">
                                        Jam pelayanan UPT Puskesmas Sumberasih <br />
                                        Rawat jalan <br />
                                        Senin - Kamis: 07:30-13:00 <br />
                                        Jum'at: 07:30-10:30 <br />
                                        Sabtu: 07:30-11:00 <br />
                                        Hari Libur/Besar: Libur
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>How do I track my order?</span>
                                    <svg :class="handleRotate()" class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900">
                                        Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>What’s your return policy?</span>
                                    <svg :class="handleRotate()" class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900">
                                        We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>How do I make changes to an existing order?</span>
                                    <svg :class="handleRotate()" class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900">
                                        Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>What shipping options do you have?</span>
                                    <svg :class="handleRotate()" class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900">
                                        For USA domestic orders we offer FedEx and USPS shipping.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </main>
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