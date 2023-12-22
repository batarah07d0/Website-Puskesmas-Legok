<?php $__env->startSection('title', 'Pasien Section'); ?>

<?php $__env->startSection('contents'); ?>
<div class="d-flex align-items-center justify-content-between ">
    <h1 class="mb-0">List Pasien</h1>
    <a href="<?php echo e(route('pasien.create')); ?>" class="btn btn-primary">Tambah Data Pasien</a>
</div>
<hr />
<?php if(Session::has('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>
<div class="table-responsive">
    <table class="table overflow-auto">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nomor BPJS</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kepala Keluarga</th>
                <th>Agama</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            <?php if($pasien->count() > 0): ?>
            <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                <td class="align-middle"><?php echo e($rs->nik); ?></td>
                <td class="align-middle"><?php echo e($rs->nama_lengkap); ?></td>
                <td class="align-middle"><?php echo e($rs->no_bpjs); ?></td>
                <td class="align-middle"><?php echo e($rs->tempat_lahir); ?></td>
                <td class="align-middle"><?php echo e($rs->tanggal_lahir); ?></td>
                <td class="align-middle"><?php echo e($rs->kepala_keluarga); ?></td>
                <td class="align-middle"><?php echo e($rs->agama); ?></td>
                <td class="align-middle"><?php echo e($rs->kecamatan); ?></td>
                <td class="align-middle"><?php echo e($rs->desa); ?></td>
                <td class="align-middle"><?php echo e($rs->alamat); ?></td>
                <td class="align-middle">
                    <div class="btn-group d-flex flex-column" role="group" aria-label="Basic example">
                        <a href="<?php echo e(route('pasien.show', $rs->id)); ?>" type="button" class="btn btn-secondary mb-1">Detail</a>
                        <a href="<?php echo e(route('pasien.edit', $rs->id)); ?>" type="button" class="btn btn-warning mb-1">Edit</a>
                        <form action="<?php echo e(route('pasien.destroy', $rs->id)); ?>" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td class="text-center" colspan="12">Pasien belum diisi</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/pasien/index.blade.php ENDPATH**/ ?>