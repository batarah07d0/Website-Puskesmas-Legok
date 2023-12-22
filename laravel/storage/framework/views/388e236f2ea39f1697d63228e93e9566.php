<?php $__env->startSection('title', 'Show Dokter'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Dokter</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo e($dokter->name); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Foto</label>
        <img src="<?php echo e(Storage::url('imgdokter/' . $dokter->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
        <?php if($dokter->foto): ?>

        <?php else: ?>
        <p>Tidak ada foto</p>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Pendidikan</label>
        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="<?php echo e($dokter->pendidikan); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Spesiaslisasi</label>
        <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi" value="<?php echo e($dokter->spesialisasi); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Jadwal Praktek</label>
        <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 11:00 - 13:00" value="<?php echo e($dokter->jadwal_praktek); ?>" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($dokter->created_at); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($dokter->updated_at); ?>" readonly>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/dokter/show.blade.php ENDPATH**/ ?>