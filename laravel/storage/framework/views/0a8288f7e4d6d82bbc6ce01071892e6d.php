<?php $__env->startSection('heroSection'); ?>
<div class="columns">
    <div class="flex font-montserrat text-green-700 justify-left text-center px-4 md:text-left md:pl-[9vh] xl:pl-[25vh] sm:text-left sm:pl-20">
        <div class="flex flex-col w-full sm:w-4/5">
            <h1 class="font-bold md:pb-1 lg:pb-5 text-2xl md:text-3xl lg:text-4xl mt-4 md:mt-0 xl:text-5xl">Jadwal Dokter
            </h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>

<?php $__currentLoopData = $fotod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $fd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$nam = $namad[$index] ?? null;
$spesi = $spesid[$index] ?? null;
$jadwal = $jadwald[$index] ?? null;
$jsenins = $jsenin[$index] ?? null;
$jselasas = $jselasa[$index] ?? null;
$jrabus = $jrabu[$index] ?? null;
$jkamiss = $jkamis[$index] ?? null;
$jjumats = $jjumat[$index] ?? null;
$jsabtus = $jsabtu[$index] ?? null;
?>
<?php if($nam): ?>
<?php if($spesi): ?>
<?php if($jadwal): ?>
<div class="bg-white shadow-lg rounded-lg p-4 md:p-6 flex flex-col md:flex-row items-center">
    <img class="w-40 h-40 rounded-full object-cover mr-5" src="<?php echo e(Storage::url('imgdokter/' . $fd->foto)); ?>" alt="Doctor's Photo">
    <div class="flex flex-col md:justify-between">
        <div>
            <p class="text-lg md:text-xl font-semibold"><?php echo e($nam->name); ?></p>
            <p class="text-gray-600 text-sm md:text-base"><?php echo e($spesi->spesialisasi); ?></p>
        </div>
        <div class="grid grid-cols-3 gap-5 md:grid-cols-7 divide-x divide-gray-300 text-center mr-5 mt-2 md:mt-4">
            <?php
            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            $schedule = [$jsenins->jamsenin, $jselasas->jamselasa,$jrabus->jamrabu ,$jkamiss->jamkamis ,$jjumats->jamjumat ,$jsabtus->jamsabtu ];
            ?>
            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="px-1 md:px-2 py-1">
                <div class="font-bold text-xs md:text-sm"><?php echo e($day); ?></div>
                <div class="text-xxs md:text-xs"><?php echo e($schedule[$index]); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-jadwal-dokter', ['title' => 'Jadwal Dokter'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/detaildokter.blade.php ENDPATH**/ ?>