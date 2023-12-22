<?php $__env->startSection('title', 'Sunting Staff'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Penyuntingan Data Staff</h1>
<hr />
<form action="<?php echo e(route('staff.update', $staff->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Title" value="<?php echo e($staff->nama); ?>">
        </div>
        <div class="col mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo e($staff->jabatan); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="<?php echo e(Storage::url('imgstaff/' . $staff->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" value="<?php echo e($staff->foto); ?>">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/staff/edit.blade.php ENDPATH**/ ?>