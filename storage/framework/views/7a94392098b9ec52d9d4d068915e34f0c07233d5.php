<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('homepage')); ?>">First-Auth</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my_navbar_posts" id="navbarNav">
            <ul class="navbar-nav my_ul_nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('admin.posts.create')); ?>">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('admin.posts.index')); ?>">Listing
                        Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="<?php echo e(route('admin.categories.index')); ?>">Listing
                        Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('admin.myposts')); ?>">My Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('admin.home')); ?>">Login Page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\marzio\Desktop\BOOLEAN GITHUB\laravel-api\resources\views/admin/partials/header.blade.php ENDPATH**/ ?>