<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('You are logged in!')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <a class="mybtn_list" href="<?php echo e(route('admin.posts.index')); ?>">Listing Posts</a>
            <a class="mybtn_list bg-primary" href="<?php echo e(route('admin.posts.create')); ?>">Create Post</a>
            <a class="mybtn_list bg-danger" href="<?php echo e(route('admin.myposts')); ?>">My Posts</a>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marzio\Desktop\BOOLEAN GITHUB\laravel-api\resources\views/admin/home.blade.php ENDPATH**/ ?>