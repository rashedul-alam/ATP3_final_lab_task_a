<?php if(count($errors)>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert-danger">
        <?php echo e($error); ?>

    </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
    
<?php if(session('success')): ?>
<div class="alert-success">
    <?php echo e(session('success')); ?>

</div>

<?php endif; ?>


<?php if(session('error')): ?>
<div class="alart alert-danger">
    <?php echo e(session('error')); ?>

</div>

<?php endif; ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\PocketProject-laravel\pocketproject\resources\views/inc/messages.blade.php ENDPATH**/ ?>