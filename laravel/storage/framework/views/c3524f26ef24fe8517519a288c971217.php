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
        if (isset($exist)) {
            echo 'Maaf, anda sudah mengambil antrian untuk esok hari. <br>';
            echo 'Nomor antrian anda : ' . $nomor_antrian;
        } else {
            echo 'Anda telah mengambil nomor antrian. <br>';
            echo 'Nomor antrian anda : ' . $nomor_antrian;
        }
    ?>
    <a class="btn btn-primary" href="<?php echo e(URL::to('nomorantrian/pdf')); ?>">Export to PDF</a>
</body>

</html>
<?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/antriansukses.blade.php ENDPATH**/ ?>