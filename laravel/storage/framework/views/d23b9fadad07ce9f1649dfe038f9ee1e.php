<?php $__env->startSection('title', 'Tambah Data Pasien'); ?>

<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Pasien</h1>
<hr />
<form action="<?php echo e(route('pasien.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <label for="nik">NIK</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK">
        </div>
        <div class="col">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="no_bpjs">Nomor BPJS</label>
            <input type="text" name="no_bpjs" class="form-control" placeholder="Nomor BPJS">
        </div>
        <div class="col">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
        </div>
        <div class="col">
            <label for="kepala_keluarga">Kepala Keluarga</label>
            <input type="text" name="kepala_keluarga" class="form-control" placeholder="Nama Kepala Keluarga">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="agama">Agama</label>
            <input type="text" name="agama" class="form-control" placeholder="Agama">
        </div>
        <div class="col">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="desa">Desa</label>
            <input type="text" name="desa" class="form-control" placeholder="Desa">
        </div>
        <div class="col">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAS AKhir\Website-Puskesmas-Legok\laravel\resources\views/pasien/create.blade.php ENDPATH**/ ?>