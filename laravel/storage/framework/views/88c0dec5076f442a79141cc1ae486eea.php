<?php $__env->startSection('title', 'Sunting Dokter'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Penyuntingan Data Dokter</h1>
<hr />
<form action="<?php echo e(route('dokter.update', $dokter->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo e($dokter->name); ?>">
        </div>
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <img src="<?php echo e(Storage::url('imgdokter/' . $dokter->foto)); ?>" alt="Foto" style="width: 25rem; height: auto; display: block; margin-bottom: 10px;">
            <input type="file" name="foto" placeholder="Foto" value="<?php echo e($dokter->foto); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="<?php echo e($dokter->pendidikan); ?>">
        </div>
        <div class="col mb-3">
            <label class="form-label">Spesialisasi</label>
            <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi" value="<?php echo e($dokter->spesialisasi); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jadwal Praktek</label>
            <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 11:00 - 13:00" value="<?php echo e($dokter->jadwal_praktek); ?>">
        </div>
        <div class="col">
            <label class="form-label">Jam Senin</label>
            <input type="text" name="jamsenin" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamsenin); ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Selasa</label>
            <input type="text" name="jamselasa" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamselasa); ?>">
        </div>
        <div class="col">
            <label class="form-label">Jam Rabu</label>
            <input type="text" name="jamrabu" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamrabu); ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Kamis</label>
            <input type="text" name="jamkamis" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamkamis); ?>">
        </div>
        <div class="col">
            <label class="form-label">Jam Jumat</label>
            <input type="text" name="jamjumat" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamjumat); ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Sabtu</label>
            <input type="text" name="jamsabtu" placeholder="08:00 - 10:00" class="form-control" value="<?php echo e($dokter->jamsabtu); ?>">
        </div>
    </div>
    <div class=" row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/dokter/edit.blade.php ENDPATH**/ ?>