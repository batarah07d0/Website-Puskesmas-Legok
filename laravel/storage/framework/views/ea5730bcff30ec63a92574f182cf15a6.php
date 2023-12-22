<?php $__env->startSection('title', 'Jenis layanan Section'); ?>

<?php $__env->startSection('contents'); ?>
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Jenis layanan</h1>
    <a href="<?php echo e(route('jenislayanan.create')); ?>" class="btn btn-primary">Tambah Data Jenis Layanan</a>
</div>
<hr />
<?php if(Session::has('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Waktu Pelayanan</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>+
        <?php if($jenislayanan->count() > 0): ?>
        <?php $__currentLoopData = $jenislayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
            <td class="align-middle"><?php echo e($rs->waktu_pelayanan); ?></td>
            <td class="align-middle"><?php echo e($rs->kategori); ?></td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('jenislayanan.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                    <a href="<?php echo e(route('jenislayanan.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('jenislayanan.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah yakin ingin dihapus?')">
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
            <td class="text-center" colspan="3">Jenis Layanan belum diisi</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Documents\Project\Website-Puskesmas-Legok\laravel\resources\views/jenislayanan/index.blade.php ENDPATH**/ ?>