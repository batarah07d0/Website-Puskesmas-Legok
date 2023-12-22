<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body>
    <?php
        if(!isset($nomor_antrian) || !isset($no_bpjs) || !isset($nama_lengkap) || !isset($jenis_layanan)|| !isset($jam_layanan)){
            redirect("/");
        }

        if (isset($exist)) {
            echo 'Maaf, anda sudah mengambil antrian untuk esok hari. <br>';
            echo 'Nomor Antrian : ' . $nomor_antrian ."<br>";
            echo 'Nomor BPJS : '. $no_bpjs ."<br>";
            echo 'Nama pasien : ' . $nama_lengkap ."<br>";
            echo 'Jenis layanan : ' . $jenis_layanan ."<br>";
            echo 'Jam layanan : ' . date("H:i:s", strtotime($jam_layanan)) ."<br>";
        } else {
            echo 'Anda telah mengambil nomor antrian! <br>';
            echo 'Nomor Antrian : ' . $nomor_antrian ."<br>";
            echo 'Nomor BPJS : '. $no_bpjs ."<br>";
            echo 'Nama pasien : ' . $nama_lengkap ."<br>";
            echo 'Jenis layanan : ' . $jenis_layanan ."<br>";
            echo 'Jam layanan : ' . date("H:i:s", strtotime($jam_layanan)) ."<br>";

        }
    ?>
    <form action="buat-antrian/pdf" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="nomor_antrian" value="<?php echo e($nomor_antrian); ?>">
        <input type="hidden" name="nama_lengkap" value="<?php echo e($nama_lengkap); ?>">
        <input type="hidden" name="no_bpjs" value="<?php echo e($no_bpjs); ?>">
        <input type="hidden" name="jenis_layanan" value="<?php echo e($jenis_layanan); ?>">
        <input type="hidden" name="jam_layanan" value="<?php echo e($jam_layanan); ?>">
        <button class="bg-green-500 hover:bg-green-700 transition duration-300 text-white text-md font-poppins w-48 border border-1 drop-shadow-lg rounded-md font-bold p-2">Cetak Nomor Antrian</button>
    </form>
    
</body>

</html>
<?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/antriansukses.blade.php ENDPATH**/ ?>