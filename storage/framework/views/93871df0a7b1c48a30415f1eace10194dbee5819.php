
<?php $__env->startSection('title', 'Photos'); ?>
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
                            <strong>Data Photos</strong>
                        </div>
                        <div class="pull-right">
                        <a href="<?php echo e(url("photos/create")); ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Nama Post</th>
                            <th>Tanggal Post</th>
                            <th>Photos</th>
                            <th>Keterangan Foto</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($loop-> iteration); ?></td>
                            <td><?php echo e($item ->post->post_title); ?></td>
                            <td><?php echo e($item ->photos_date); ?></td>
                            <td><img src="<?php echo e(asset('photos_img/'.$item->photos_title)); ?>" class="img-table" width="100px" height="100px"></td>
                            <td><?php echo e($item ->photos_text); ?></td>
                            <td>
                                <a href="<?php echo e(url("/photos/{$item->photos_id}/edit")); ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                                <form action="<?php echo e(url ("/photos/{$item->photos_id}")); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puyblog\resources\views/photos/index.blade.php ENDPATH**/ ?>