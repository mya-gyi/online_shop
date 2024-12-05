

<?php $__env->startSection('title', 'Home - Online Shop'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="p-5 text-center bg-light rounded-3">
                <h1>Welcome to Online Shop</h1>
                <p>Your one-stop destination for amazing products.</p>
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-shopping-bag"></i> Start Shopping
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    

    <!-- Categories Section -->
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\mhk\workplace\online-shop\resources\views/home.blade.php ENDPATH**/ ?>