

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
        <div class="content mt-3">
            <div class="animated fadeIn">
                Welcome <?php echo e(Auth::user()->name); ?>

                <br>
                Silahkan Gunakan Sistem Untuk Menunjang Penjualan
             </div>
        </div>
        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quizblog\resources\views/home.blade.php ENDPATH**/ ?>