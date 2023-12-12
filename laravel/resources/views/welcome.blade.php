@extends('layouts.main', ['title' => 'Beranda'])
@section('heroSection')
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center lg:mt-12 px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20">
            <div class="flex flex-col w-full sm:w-4/5">
                <h1 class="font-bold md:pb-1 pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Dapatkan Layanan
                    Kesehatan yang Tepat dan Cepat</h1>
                <h2 class="text-xs sm:text-sm md:text-base lg:text-lg">Membantu anda mendapatkan berbagai
                    layanan kesehatan dimulai dari rumah dengan tepat dan cepat.</h2>
            </div>
        </div>
    </div>
@endsection
@section('container')
    <div class="h-[20rem] lg:h-[40rem] bg-custom-color3">
        <div class="container z-40 max-w-full lg:max-w-full lg:absolute block pt-0 md:pt-5 lg:pt-0 -translate-y-2/4">
            <div class="container flex max-w-full justify-center px-2 gap-2 md:px-5 md:gap-10 ">
                <div
                    class="w-3/4 mx-auto flex flex-col justify-center border shadow-lg bg-white rounded-2xl py-2 px-4 font-bold leading-relaxed tracking-light text-green-700 font-montserrat">
                    <h2 class="text-lg sm:text-xl md:text-2xl text-left mb-4 lg:mb-2">Ambil Nomor Antrian Online</h2>
                    <form action="/daftaronline"
                        class="w-full flex flex-col sm:flex-row items-center sm:items-start gap-2 md:gap-10">
                        <select name="kategori"
                            class="w-full rounded-lg bg-green-700 bg-opacity-20 px-2 py-1 text-sm sm:text-base">
                            <option selected disabled>Jenis Layanan Kesehatan</option>
                            @foreach ($enumValues as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <select name="waktu_pelayanan"
                            class="w-full rounded-lg bg-green-700 bg-opacity-20 px-2 py-1 text-sm sm:text-base"
                            id="">
                            <option selected>Jam Layanan</option>
                            @foreach ($enumValue as $values)
                                <option value="{{ $values }}">{{ $values }}</option>
                            @endforeach
                        </select>
                        <div class="w-full mt-1 p-1 rounded-lg bg-green-700 text-center text-white">
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="submit"
                                class="w-full">Ambil Antrian</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container max-w-full h-full lg:bg-custom-color3 md:relative bg-custom-color3">
            <div class="flex flex-col md:flex-row md:justify-center items-center lg:pt-52 md:gap-14 lg:gap-64 pt-0">
                <div class="flex flex-col font-montserrat scale-125 lg:scale-150">
                    <div>
                        <div
                            class="flex justify-center text-lg bg-white rounded shadow-lg font-bold text-green-700 lg:px-8">
                            Jadwal Pelayanan
                        </div>
                    </div>
                    <div class="text-green-700 text-l flex gap-[15px] flex-row justify-between pt-2 px-2">
                        <div>Senin<br>Selasa<br>Rabu<br>Kamis<br>Jumat<br>Sabtu<br>Minggu</div>
                        <div>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 11.00<br>08.00 -
                            11.00<br>Libur</div>
                    </div>
                </div>
                {{-- Logo --}}
                <div class="lg:flex md:flex flex-row justify-center items-center invisible md:visible">
                    <div class="">
                        <img src="../../img/logoPuskesmasLegok.png" class="w-48 lg:w-64" alt="Puskesmas Legok">
                    </div>
                    <div class="">
                        <img src="../../img/logoBanten.png" class="w-28 lg:w-48" alt="Logo Satya">
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[26rem] lg:h-[34rem] bg-custom-color3">
            <div class="container max-w-full h-full px-12 pb-4 lg:py-4 font-montserrat">
                <div class="flex justify-center">
                    <h2 class="text-center lg:mb-0 text-2xl md:text-4xl text-green-700">Frequently Asked Question (FAQ)</h2>
                </div>
                <div class="md:pt-2 flex justify-center items-start lg:my-2">
                    <div class="w-full sm:w-10/12 md:w-2/2 lg:w-1/2 my-1">
                        <ul class="flex flex-col">
                            <li class="rounded-xl bg-white my-2 shadow-lg" x-data="accordion(1)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span class="text-sm md:text-lg">Jam berapa pelayanan di Puskesmas Legok</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all">
                                    <p class="p-3 text-gray-900 text-sm lg:text-base">
                                        <strong>Jam Pelayanan Puskesmas Legok</strong> <br>
                                        Senin - Kamis : 08.00 - 13.00 <br />
                                        Jum'at - Sabtu : 08.00 - 11.00 <br />
                                        Hari Libur/Besar : Libur
                                    </p>
                                </div>
                            </li>
                            <li class="rounded-xl bg-white my-2 shadow-lg" x-data="accordion(2)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span class="text-sm md:text-base">Apa saja pelayanan yang ada di Puskesmas
                                        Legok?</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 h-40 duration-500 transition-all overflow-y-auto"
                                    x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900 text-sm lg:text-base">
                                        <strong>Jam Pelayanan Puskesmas Legok</strong><br>
                                        - Pelayanan Gawat Darurat (Senin - Sabtu) <br>
                                        - Pelayanan Kesehatan Gigi dan Mulut (Senin - Sabtu) <br>
                                        - Pelayanan Kesehatan Ibu (Senin - Sabtu) <br>
                                        - Pelayanan Kesehatan Anak (Senin - Sabtu) <br>
                                        - Pelayanan Imunisasi (Selasa & Kamis) <br>
                                        - Pelayanan Persalinan (Setiap Hari 24 Jam) <br>
                                        - Pelayanan KB (Senin - Sabtu) <br>
                                        - Pelayanan Saffron (Rabu) <br>
                                        - Pelayanan IVA (Sabtu) <br>
                                        - Pelayanan Gizi (Selasa & Kamis) <br>
                                        - Pelayanan TB Paru (Rabu) <br>
                                        - Pelayanan Kusta (Kamis) <br>
                                        - Pelayanan Sanitasi (Rabu & Kamis) <br>
                                        - Pelayanan Kesehatan Remaja (Rabu) <br>
                                        - Pelayanan Kesehatan Lansia (Senin - Sabtu) <br>
                                        - Pelayanan Laboratorium (Senin - Sabtu) <br>
                                        - Pelayanan Kefarmasian (Senin - Sabtu) <br>
                                    </p>
                                </div>
                            </li>
                            <li class="rounded-xl bg-white my-2 shadow-lg" x-data="accordion(3)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span class="text-sm md:text-base">Dimana alamat Puskesmas Legok?</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-green-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <p class="p-3 text-gray-900 text-sm lg:text-base">
                                        Puskesmas Legok beralamat di Jalan Panti Asuhan, RT. 001/002 Kelurahan Babakan,
                                        Kecamatan Legok, Kabupaten Tangerang.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endsection
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
                        return this.$store.accordion.tab === this.idx ?
                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                    }
                }));
            })
        </script>
