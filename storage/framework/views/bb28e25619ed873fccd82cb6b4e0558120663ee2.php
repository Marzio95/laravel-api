<?php $__env->startSection('pageTitle'); ?>
    Create Post
<?php $__env->stopSection(); ?>



<?php $__env->startSection('pageMain'); ?>
    <form enctype="multipart/form-data" class="m-auto w-75 mt-4" method="POST"
        action="<?php echo e(route('admin.posts.update', $post->slug)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input value="<?php echo e(old('title', $post->title)); ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title">
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="form-group row mt-3 mb-3">
            <label for="slug" class="col-sm-2 col-form-label">slug</label>
            <div class="col-sm-10">
                <input value="<?php echo e(old('slug', $post->slug)); ?>" type="text" class="form-control" id="slug"
                    placeholder="slug" name="slug">
                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="form-group row mt-3 mb-3">
            <div class="mb-3">
                <label for="photo_post" class="form-label">Select a Photo</label>
                <input accept="image/*" value="<?php echo e(old('photo_post', $post->photo_post)); ?>" class="form-control"
                    type="file" id="photo_post" name="photo_post">
            </div>
            <?php $__errorArgs = ['photo_post'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <select class="mt-3 mb-3" name="category_id" id="category_id">
            <option selected value="">Select a Category</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php if($category->id == old('category_id', $post->category->id)): ?> selected <?php endif; ?>>
                    <?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <fieldset class="mb-5">
            <legend>Tags</legend>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input <?php if(in_array($tag->id, old('tags', $post->tags->pluck('id')->all()))): ?> checked <?php endif; ?> type="checkbox" name="tags[]"
                    id="tag-<?php echo e($tag->id); ?>" value="<?php echo e(old('tags[]', $tag->id)); ?>">
                <label for="tag <?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </fieldset>

        <div class="form-group row">
            <label for="postText" class="col-sm-2 col-form-label">Text</label>
            <div class="col-sm-10">
                <input value="<?php echo e(old('postText', $post->postText)); ?>" type="text" class="form-control" id="postText"
                    placeholder="Testo del post" name="postText">
                <?php $__errorArgs = ['postText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">MODIFICA POST</button>
        </div>
        <div class="col-sm-10 mt-5">
            <a class="text-white bg-black p-2" href="<?php echo e(url()->previous()); ?>">Torna indietro</a>
        </div>
        <div class="col-sm-10 mt-5">
            <a class="text-white bg-black p-2" href="<?php echo e(route('admin.posts.index', 'PostController')); ?>">Torna alla
                lista</a>
        </div>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marzio\Desktop\BOOLEAN GITHUB\laravel-api\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>