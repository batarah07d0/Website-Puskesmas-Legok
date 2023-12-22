<?php $__env->startSection('title', 'Sunting Prestasi'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Penyuntingan Data Prestasi</h1>
<hr />
<form action="<?php echo e(route('prestasi.update', $prestasi->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="<?php echo e(Storage::url('imgprestasi/' . $prestasi->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;"> <input type="file" name="foto" placeholder="Foto" value="<?php echo e($prestasi->foto); ?>">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo e($prestasi->deskripsi); ?>">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/prestasi/edit.blade.php ENDPATH**/ ?>