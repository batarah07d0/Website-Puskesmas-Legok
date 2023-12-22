<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid gap-2 grid-cols-1 sm:grid-cols-3 mt-24 mx-4 sm:mx-20 border-b-2 pb-16">
        <!-- Puskesmas Legok Section -->
        <div>
            <div class="flex items-center justify-center sm:justify-start">
                <img src="img/logokecil.png" class="w-12">
                <span>
                    <img src="img/puskesmasLegokFooter.png" class="ml-2">
                </span>
            </div>
            <div class="mt-4 px-4 sm:px-0 mt-12">
                <h3 class="font-montserrat text-base sm:text-lg text-slate-500 text-justify px-8">
                    Membantu anda mendapatkan berbagai layanan kesehatan dimulai dari rumah dengan tepat dan cepat.
                </h3>
            </div>
            <div class="mt-6 flex justify-center sm:justify-start">
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
        <div class="flex flex-col items-center sm:items-start pt-4 sm:pt-0">
            <div>
                <h2 class="text-2xl sm:text-3xl font-montserrat font-semibold text-green-500 text-center sm:text-left">Contact us</h2>
            </div>
            <div class="grid grid-rows-3 gap-0 sm:gap-8 pt-0 w-full items-center">
                <div class="flex items-center justify-center sm:justify-start">
                    <img src="img/Email.png">
                    <span class="ml-2">
                        <h3 class="font-montserrat text-slate-600">puskesmaslegok@gmail.com</h3>
                    </span>
                </div>
                <div class="flex items-center justify-center sm:justify-start">
                    <img src="img/phone.png">
                    <span class="ml-2">
                        <h3 class="font-montserrat text-slate-600">(62) 8213136633</h3>
                    </span>
                </div>
                <div class="flex items-center justify-center sm:justify-start">
                    <img src="img/location.png" class="place-content-start">
                    <span class="ml-2">
                        <h3 class="font-montserrat text-slate-600 text-center sm:text-left">Jalan Panti Asuhan, RT. 001/002 Kelurahan
                            Babakan, Kec.
                            Legok,
                            Kab. Tangerang, Banten 15820</h3>
                    </span>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="flex justify-center sm:mt-0 pt-4 sm:pt-0">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe src="https://maps.google.com/maps?q=puskesmas%20legok&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" class="w-full h-64 sm:h-96"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8 pb-8">
        <h3 class="font-montserrat text-slate-500 text-center">Copyright © 2023 Website Resmi UPTD Puskesmas Legok All Rights
            Reserved</h3>
    </div>
</body>

</html>