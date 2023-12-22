<?php $__env->startSection('title', 'Show Pasien'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Pasien</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?php echo e($pasien->nik); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?php echo e($pasien->nama_lengkap); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nomor BPJS</label>
        <input type="text" name="no_bpjs" class="form-control" placeholder="Nomor BPJS" value="<?php echo e($pasien->no_bpjs); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo e($pasien->tempat_lahir); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Agama</label>
        <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?php echo e($pasien->agama); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="<?php echo e($pasien->kecamatan); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" value="<?php echo e($pasien->tanggal_lahir); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kepala Keluarga</label>
        <input type="text" name="kepala_keluarga" placeholder="Kepala Keluarga" class="form-control" value="<?php echo e($pasien->kepala_keluarga); ?>" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Desa</label>
        <input type="text" name="desa" placeholder="Desa" class="form-control" value="<?php echo e($pasien->desa); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo e($pasien->alamat); ?>" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($pasien->created_at); ?>" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($pasien->updated_at); ?>" readonly>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/pasien/show.blade.php ENDPATH**/ ?>