<?php $__env->startSection('heroSection'); ?>
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center px-4 md:text-left md:pl-[9vh] xl:pl-[25vh] sm:text-left sm:pl-20">
            <div class="flex flex-col w-full sm:w-4/5">
                <h1 class="font-bold md:pb-1 lg:pb-5 text-2xl md:text-3xl lg:text-4xl mt-4 md:mt-0 xl:text-5xl">Jadwal Dokter
                </h1>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 flex flex-col md:flex-row items-center">
        <img class="rounded-2xl w-1/2" src="<?php echo e(asset('../../img/orangniaga.jpeg')); ?>" alt="Doctor's Photo">
        <div class="flex flex-col md:justify-between">
            <div>
                <p class="text-lg md:text-xl font-semibold">dr. Abcdefg</p>
                <p class="text-gray-600 text-sm md:text-base">Spesialis Kandungan (kandungan anak)</p>
            </div>
            <div class="grid grid-cols-3 gap-5 md:grid-cols-7 divide-x divide-gray-300 text-center mt-2 md:mt-4">
                <?php
                    $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    $schedule = ['10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '08:00 - 12:00', '10:00 - 13:00'];
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-jadwal-dokter', ['title' => 'Jadwal Dokter'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/detaildokter.blade.php ENDPATH**/ ?>