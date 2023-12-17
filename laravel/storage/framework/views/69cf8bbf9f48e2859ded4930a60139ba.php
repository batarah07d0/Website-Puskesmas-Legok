<?php $__env->startSection('heroSection'); ?>
    <div class="columns">
        <div
            class="flex font-montserrat text-green-700 justify-left text-center px-4 lg:text-left lg:pl-64 sm:text-left sm:pl-20">
            <div class="flex flex-col w-full sm:w-2/5">
                <h1 class="font-bold pb-5 text-xl sm:text-2xl md:text-3xl xl:text-4xl">Program & Kegiatan</h1>
                <h2 class="text-xs sm:text-sm md:text-base lg:text-lg">Membantu anda mendapatkan berbagai layanan kesehatan
                    dimulai dari rumah dengan tepat dan cepat.</h2>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-background-green px-8 py-4">
            <div class="flex justify-center">
                <div
                    class=" font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Program</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24  pb-5 overflow-auto">
                <?php $__currentLoopData = $photos->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="flex-shrink-0 w-[200px] h-[250px]  bg-white rounded-lg justify-center items-center shadow-lg">
                        <img class="object-cover w-full h-full" src="<?php echo e(Storage::url('imgpk/' . $p->foto)); ?>"
                            alt="Foto">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="h-[32rem]">
        <div class="container max-w-full h-full bg-custom-color3 bg-opacity-70 px-8 py-4">
            <div class="flex justify-center">
                <div
                    class="font-montserrat bg-white rounded-xl mt-5 p-5 px-12 shadow-lg text-4xl text-center text-green-700 font-bold">
                    <h1>Our Post</h1>
                </div>
            </div>
            <div class="flex flex-row gap-8 justify-center pt-24 overflow-x-auto pb-5">
                <?php $__currentLoopData = $post->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="flex w-[200px] h-[250px] shrink-0 bg-white rounded-lg justify-center items-center shadow-lg">
                        <img class="object-cover w-full h-full" src="<?php echo e(Storage::url('imgpost/' . $pos->foto)); ?>"
                            alt="Foto">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', ['title' => 'Program & Kegiatan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/progkegdepan/index.blade.php ENDPATH**/ ?>