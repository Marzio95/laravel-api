<?php $__env->startSection('pageTitle', $post->title); ?>

<?php $__env->startSection('pageMain'); ?>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="card m-5" style="width: 40rem; text-align: center">
            <div class="card-body">
                <h3 class="card-title text-uppercase"><?php echo e($post->title); ?></h3>
                <img src="<?php echo e(asset('storage/' . $post->photo_post)); ?>" alt="<?php echo e($post->title); ?>">
                <p class="card-text mb-3 text-start"><?php echo e($post->postText); ?>.</p>
                <h5 class="card-title"><?php echo e($post->user->name); ?></h5>
                <?php if($post->user->userInfo && $post->user->userInfo->phone_number): ?>
                    <h5 class="card-title"><?php echo e($post->user->userInfo->phone_number); ?></h5>
                <?php endif; ?>
                <h5 class="card-title"><?php echo e($post->Category->name); ?></h5>
                <?php if(Auth::user()->id === $post->user_id): ?>
                    <a class="tasto_show bg-green mt-3" href="<?php echo e(route('admin.posts.edit', $post->slug)); ?>">Modifica
                        Post</a>
                <?php endif; ?>

                <?php if(Auth::user()->id === $post->user_id): ?>
                    <button data-id="<?php echo e($post->slug); ?>" onclick="event.stopPropagation()"
                        class="btn-delete bg-danger text-white p-1 mt-4">ELIMINA POST</button>
                <?php endif; ?>
            </div>
        </div>

        <div class="d-flex">
            <div class="m-5">
                <a class="text-white bg-black p-2" href="<?php echo e(url()->previous()); ?>">Torna indietro</a>
            </div>
            <div class="m-5">
                <a class="text-white bg-black p-2" href="<?php echo e(route('admin.posts.index', 'PostController')); ?>">Torna alla
                    lista</a>
            </div>
            <?php if(Auth::user()->id === $post->user_id): ?>
                <div class="m-5">
                    <a class="text-white bg-black p-2" href="<?php echo e(route('admin.myposts')); ?>">Torna
                        ai miei Posts</a>
                </div>
            <?php endif; ?>
        </div>

        <section id="confirmation-overlay" class="overlay d-none">
            <div class="popup">
                <h2>Se continui l'elemento verrà eliminato</h2>
                <div class="d-flex justify-content-evenly mt-5">
                    <form method="POST" data-base="<?php echo e(route('admin.posts.index')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onclick="event.stopPropagation()" class="bg-danger text-white p-2 ">ELIMINA
                            POST</button>
                    </form>
                    <button id="btn-no" class="btn bg-primary">NO</button>
                </div>
            </div>

        </section>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marzio\Desktop\BOOLEAN GITHUB\laravel-api\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>