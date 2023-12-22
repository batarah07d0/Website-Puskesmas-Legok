<?php $__env->startSection('heroSection'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <div class="h-[20rem] lg:h-[40rem] bg-custom-color3">
        <div
            class="container flex justify-center z-40 max-w-full lg:max-w-full lg:absolute lg:block pt-0 md:pt-5 lg:pt-0 -translate-y-2/4">
            <div class="container flex max-w-sm md:max-w-full justify-center px-2 gap-2 md:px-5 md:gap-10 ">
                <div
                    class="relative w-5/6 lg:w-3/4 mx-auto mt-16 md:m-0 flex flex-col justify-center border shadow-lg bg-white rounded-2xl py-2 px-4 font-bold leading-relaxed tracking-light text-green-700 font-montserrat">
                    <h2 class="text-sm md:text-xl lg:text-2xl text-left mb-1 md:mb-2">Ambil Nomor Antrian Online</h2>
                    <form action="/daftaronline" method="POST"
                        class="w-full flex flex-col sm:flex-row items-center sm:items-start gap-1 md:gap-3 lg:gap-10 mb-1">
                        <?php echo csrf_field(); ?>
                        <select name="kategori" id="kategori"
                            class="w-full md:w-max lg:w-full h-auto rounded-lg bg-green-700 bg-opacity-20 px-2 py-1 md:py-2 text-xs md:text-base">
                            <option value="" disabled selected>Jenis Layanan Kesehatan</option>
                            <?php $__currentLoopData = $enumValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="relative w-full border-opacity-0" data-te-format24="true" id="timepicker-format"
                            data-te-input-wrapper-init data-te-timepicker-init>
                            <input type="text" name="jam_layanan"
                                class="placeholder-green-700 text-xs md:text-base peer block min-h-[auto] w-full rounded-lg border-2 border-opacity-100 bg-green-700 bg-opacity-20 px-2 py-1 md:py-[6.5px] transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                data-te-toggle="timepicker" placeholder="Jam Pelayanan" id="form14"
                                oninput="toggleLabelVisibility()" />
                        </div>
                        <div
                            class="w-full p-1 py-1 md:py-[6.5px] rounded-lg bg-green-600 hover:bg-green-700 text-center text-white">
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="submit"
                                class="w-full text-sm md:text-lg" id="submitBtn" disabled>Ambil Antrian</button>
                        </div>
                    </form>
                    <p id="notification" class="text-xs md:text-sm text-red-700 hidden">Pendaftaran Online Hanya Berlaku H+1
                        Setelah Melakukan Pendaftaran Secara Online!
                    </p>
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
                        <div>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 13.00<br>08.00 - 11.00<br>08.00
                            -
                            11.00<br>Libur</div>
                    </div>
                </div>
                
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
                    <h2 class="text-center lg:mb-0 text-2xl md:text-4xl text-green-700">Frequently Asked Question (FAQ)
                    </h2>
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
        <?php $__env->stopSection(); ?>
        <script>
            function checkInputs() {
                var kategori = document.querySelector('[name="kategori"]').value;
                var jamPelayanan = document.querySelector('#form14').value;

                var submitButton = document.getElementById("submitBtn");
                var notification = document.getElementById("notification");

                // Memeriksa apakah kedua input tidak kosong
                if (kategori.trim() !== "" && jamPelayanan.trim() !== "") {
                    // Mengaktifkan tombol
                    submitButton.removeAttribute("disabled");
                    // Menyembunyikan pemberitahuan
                    notification.classList.add("hidden");
                } else {
                    // Menonaktifkan tombol
                    submitButton.setAttribute("disabled", "true");
                    // Menampilkan pemberitahuan
                    notification.classList.remove("hidden");
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Memanggil fungsi checkInputs saat halaman dimuat
                checkInputs();

                // Menambahkan event listener untuk memanggil checkInputs saat ada input
                document.querySelector('[name="kategori"]').addEventListener("input", checkInputs);
                document.querySelector('#form14').addEventListener("input", checkInputs);
            });

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

            function toggleLabelVisibility() {
                var input = document.getElementById('form14');
                var label = document.getElementById('labelJamPelayanan');

                if (input.value.trim() !== '') {
                    label.style.transform = 'translateY(-1.5rem) scale(0.75)';
                    label.style.opacity = '0';
                } else {
                    label.style.transform = 'translateY(0) scale(1)';
                    label.style.opacity = '1';
                }
            }

            document.getElementById('form14').addEventListener('input', toggleLabelVisibility);

            document.getElementById('form14').addEventListener('blur', function() {
                var input = this;
                var label = document.getElementById('labelJamPelayanan');

                if (input.value.trim() === '') {
                    label.style.transform = 'translateY(0) scale(1)';
                    label.style.opacity = '1';
                }
            });
        </script>

<?php echo $__env->make('layouts.main', ['title' => 'Beranda'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>