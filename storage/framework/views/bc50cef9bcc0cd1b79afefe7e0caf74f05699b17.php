
<?php $__env->startSection('pageTitle'); ?>
    Posts
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageMain'); ?>

    <body>
        <?php if(session('deletd')): ?>
            <div class="alert alert-warning"><?php echo e(session('deletd')); ?></div>
        <?php endif; ?>

        <?php if(session('status')): ?>
            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
        <?php endif; ?>
        <div class="text-center">
            <h3 style="margin: 1rem">Filtra i Posts</h3>

            <form action="" method="get" class="row g-3 mb-3" style="display: inline-flex">
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example" name="category" id="category">
                        <option value="" selected>Select a category</option>

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if($category->id == $request->category): ?> selected <?php endif; ?>>
                                <?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example" name="author" id="author">
                        <option value="" selected>Select an author</option>

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>" <?php if($user->id == $request->author): ?> selected <?php endif; ?>>
                                <?php echo e($user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row" style="display: flex; align-items: flex-end; margin-top: 1rem;">
                    <div class="col-md-9">
                        <label for="search-string" class="form-label"><?php echo e(__('Stringa di ricerca')); ?></label>
                        <input type="text" class="form-control" id="search-string" name="s" value="<?php echo e($request->s); ?>">
                    </div>

                    <div class="col-md-2" style="width: 9rem">
                        <button class="btn btn-primary">Applica filtri</button>
                    </div>
                </div>
            </form>

        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Text</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->tags->pluck('name')->join(', ')); ?></td>
                        <td><?php echo e($post->category->name); ?></td>
                        <td><?php echo e($post->postText); ?></td>
                        <td><a href="<?php echo e(route('admin.posts.show', $post->slug)); ?>">Post</a></td>
                        <td>
                            <?php if(Auth::user()->id === $post->user_id): ?>
                                <a href="<?php echo e(route('admin.posts.edit', $post->slug)); ?>">Modifica Post</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if(Auth::user()->id === $post->user_id): ?>
                                <button data-id="<?php echo e($post->slug); ?>" onclick="event.stopPropagation()"
                                    class="my_btn_link btn-delete">Elimina Post</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

        <div class="text-center d-flex justify-content-center mt-4">
            <?php echo e($posts->links()); ?>

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

    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marzio\Desktop\BOOLEAN GITHUB\laravel-api\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>