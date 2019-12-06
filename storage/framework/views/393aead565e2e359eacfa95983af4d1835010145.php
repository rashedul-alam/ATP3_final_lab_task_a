<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
    
     <div class="jumbotron text-center">
        <h1 class="display">If You should not registered , you cant login</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
        </p>
        
    
    
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\pocketproject\resources\views/pages/index.blade.php ENDPATH**/ ?>