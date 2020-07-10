
<?php $__env->startSection('title', 'Album'); ?>
<?php $__env->startSection('content'); ?> 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Album</strong>
                        </div>
                        <div class="pull-right">
                        <a href="<?php echo e(url("album/create")); ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Nama Album</th>
                            <th>Nama(Ket) Foto</th>
                            <th>Keterangan Album</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $album; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($loop-> iteration); ?></td>
                            <td><?php echo e($item ->album_name); ?></td>
                            <td><?php echo e($item ->photos->photos_text); ?></td>
                            <td><?php echo e($item ->album_text); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(url("/album/{$item->album_id}/edit")); ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                                <form action="<?php echo e(url ("/album/{$item->album_id}")); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i> Hapus 
                                    </button>
                                </form>
                            </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
                </div>
                
             </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puyblog\resources\views/album/index.blade.php ENDPATH**/ ?>