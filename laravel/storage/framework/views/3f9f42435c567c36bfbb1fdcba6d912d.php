<?php $__env->startSection('title', 'Tambah Data Program Kegiatan'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Program Kegiatan</h1>
<hr />
<form action="<?php echo e(route('programkegiatan.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama Event</label>
            <input type="text" name="nama_event" class="form-control" placeholder="Nama Event">
        </div>
        <div class="col">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Foto</label><br>
            <input type="file" name="foto">
        </div>
        <div class="col">
            <label class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control">
        </div>

    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/programkegiatan/create.blade.php ENDPATH**/ ?>