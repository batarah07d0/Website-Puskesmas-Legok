<?php $__env->startSection('title', 'Show Program Kegiatan'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Program Kegiatan</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Event</label>
        <input type="text" name="nama_event" class="form-control" placeholder="Nama event" value="<?php echo e($programkegiatan->nama_event); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo e($programkegiatan->deskripsi); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <?php if($programkegiatan->foto): ?>
        <img src="<?php echo e(Storage::url('imgpk/' . $programkegiatan->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        <?php else: ?>
        <p>Tidak ada foto</p>
        <?php endif; ?>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" class="form-control" value="<?php echo e($programkegiatan->tanggal_mulai); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" class="form-control" value="<?php echo e($programkegiatan->tanggal_selesai); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($programkegiatan->created_at); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($programkegiatan->updated_at); ?>" readonly>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/programkegiatan/show.blade.php ENDPATH**/ ?>