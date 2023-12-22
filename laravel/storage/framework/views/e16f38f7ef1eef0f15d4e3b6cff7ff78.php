<?php $__env->startSection('title', 'Show Prestasi'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Prestasi</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <input type="text" name="nama" class="form-control mb-2" placeholder="Foto" value="<?php echo e($prestasi->foto); ?>" readonly>
        <?php if($prestasi->foto): ?>
        <img src="<?php echo e(Storage::url('imgprestasi/' . $prestasi->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">

        <?php else: ?>
        <p>Tidak ada foto</p>
        <?php endif; ?>
    </div>
    <div class="col mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo e($prestasi->deskripsi); ?>" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($prestasi->created_at); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($prestasi->updated_at); ?>" readonly>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/prestasi/show.blade.php ENDPATH**/ ?>