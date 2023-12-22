<?php $__env->startSection('title', 'Show Foto'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Foto</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <input type="text" name="nama" class="form-control mb-2" placeholder="Foto" value="<?php echo e($post->foto); ?>" readonly>
        <?php if($post->foto): ?>
        <img src="<?php echo e(Storage::url('imgpost/' . $post->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        <?php else: ?>
        <p>Tidak ada foto</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/post/show.blade.php ENDPATH**/ ?>