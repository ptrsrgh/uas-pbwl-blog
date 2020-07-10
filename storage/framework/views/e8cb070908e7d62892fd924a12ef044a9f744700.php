
<?php $__env->startSection('title', 'Kategori'); ?>
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
                            <strong>Data Kategori</strong>
                        </div>
                        <div class="pull-right">
                        <a href="<?php echo e(url("category/create")); ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($loop-> iteration); ?></td>
                            <td><?php echo e($item ->cat_name); ?></td>
                            <td><?php echo e($item ->cat_text); ?></td>
                            <td>
                                <a href="<?php echo e(url("/category/{$item->cat_id}/edit")); ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                <form action="<?php echo e(url ("/category/{$item->cat_id}")); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puyblog\resources\views/category/index.blade.php ENDPATH**/ ?>