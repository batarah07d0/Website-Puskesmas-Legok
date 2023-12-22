<?php $__env->startSection('title', 'Tambah Data Dokter'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Dokter</h1>
<hr />
<form action="<?php echo e(route('dokter.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama Dokter</label>
            <input type="text" name="name" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <label class="form-label">Foto</label>
            <input type="file" name="foto">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan">
        </div>
        <div class="col">
            <label class="form-label">Spesialisasi</label>
            <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jadwal Praktek</label>
            <input type="text" name="jadwal_praktek" placeholder="Contoh: Senin - Jumat, 08:00 - 10:00" class="form-control">
        </div>
        <div class="col">
            <label class="form-label">Jam Senin</label>
            <input type="text" name="jamsenin" placeholder="08:00 - 10:00" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Selasa</label>
            <input type="text" name="jamselasa" placeholder="08:00 - 10:00" class="form-control">
        </div>
        <div class="col">
            <label class="form-label">Jam Rabu</label>
            <input type="text" name="jamrabu" placeholder="08:00 - 10:00" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Kamis</label>
            <input type="text" name="jamkamis" placeholder="08:00 - 10:00" class="form-control">
        </div>
        <div class="col">
            <label class="form-label">Jam Jumat</label>
            <input type="text" name="jamjumat" placeholder="08:00 - 10:00" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jam Sabtu</label>
            <input type="text" name="jamsabtu" placeholder="08:00 - 10:00" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/dokter/create.blade.php ENDPATH**/ ?>