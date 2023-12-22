<?php $__env->startSection('title', 'Tambah Data Staff'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Staff</h1>
<hr />
<form action="<?php echo e(route('staff.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Foto</label>
            <input type="file" name="foto">
        </div>

    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/staff/create.blade.php ENDPATH**/ ?>