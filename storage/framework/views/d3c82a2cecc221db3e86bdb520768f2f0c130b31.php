

<?php $__env->startSection('title', 'Sigadget'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Post</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Post</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Post</strong>
                        </div>
                        <div class="pull-right">
                        <a href="<?php echo e(url("post/create")); ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Tanggal Post</th>
                            <th>Slug</th>
                            <th>Judul Post</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($loop-> iteration); ?></td>
                            <td><?php echo e($item ->category->cat_name); ?></td>
                            <td><?php echo e($item ->post_date); ?></td>
                            <td><?php echo e($item ->post_slug); ?></td>
                            <td><?php echo e($item ->post_title); ?></td>
                            <td><?php echo e($item ->post_text); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(url("/post/{$item->post_id}/edit")); ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="<?php echo e(url ("/post/{$item->post_id}")); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i>  
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quizblog\resources\views/post/index.blade.php ENDPATH**/ ?>