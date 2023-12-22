<?php $__env->startSection('title', 'Tambah Data Post'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Post</h1>
<hr />
<form action="<?php echo e(route('post.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <label>Foto :</label>
            <input type="file" name="foto" placeholder="Foto">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/post/create.blade.php ENDPATH**/ ?>