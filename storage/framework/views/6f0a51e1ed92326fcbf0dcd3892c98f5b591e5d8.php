<?php $__env->startSection('content'); ?>
<h1>EDIT PRODUCT</h1>
<form  method="POST" action="<?php echo e(route('Products.update', $product['id'])); ?>" >
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    
    
    <div class="form-group">
            <label for="productName">productName</label>
            <input class="form-control" type="text" name="productName" value="<?php echo e($product['productName']); ?>" >
        
    </div>
    <div class="form-group">
        <label for="details">details</label>
        <input class="form-control" type="text" name="details" placeholder="Details" value="<?php echo e($product['details']); ?>">

    </div>
    <div class="form-group">
            <label for="quantity">quantity</label>
            <input class="form-control" type="number" name="quantity" value="<?php echo e($product['quantity']); ?>">
        
    </div>
    
    <div class="form-group">
            <label for="price">price</label>
            <input class="form-control" type="number" name="price" value="<?php echo e($product['price']); ?>">
        
    </div>
    <div class="form-group">
           
        <input class="btn btn-outline-primary" type="submit" name="submit" value="Submit" >
        
    </div>


</form>


              



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\PocketProject-laravel\pocketproject\resources\views/Products/edit.blade.php ENDPATH**/ ?>