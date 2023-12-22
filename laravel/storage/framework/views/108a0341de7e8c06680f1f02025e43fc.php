<?php $__env->startSection('title', 'Show Staff'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Staff</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Title" value="<?php echo e($staff->nama); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Price" value="<?php echo e($staff->jabatan); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <?php if($staff->foto): ?>
        <img src="<?php echo e(Storage::url('imgstaff/' . $staff->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        <?php else: ?>
        <p>Tidak ada foto</p>
        <?php endif; ?>
    </div>


</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($staff->created_at); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($staff->updated_at); ?>" readonly>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/staff/show.blade.php ENDPATH**/ ?>