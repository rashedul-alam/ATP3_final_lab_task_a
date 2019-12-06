<?php $__env->startSection('content'); ?>
<h1>ADD PRODUCT</h1>
<form  method="POST" action="/Products" >
    <?php echo csrf_field(); ?>
    
    <div class="form-group">
            <label for="productName">productName</label>
            <input class="form-control" type="text" name="productName" >
        
    </div>
    <div class="form-group">
        <label for="details">details</label>
        <input class="form-control" type="text" name="details" placeholder="Details">

    </div>
    <div class="form-group">
            <label for="quantity">quantity</label>
            <input class="form-control" type="number" name="quantity" >
        
    </div>
    
    <div class="form-group">
            <label for="price">price</label>
            <input class="form-control" type="number" name="price" >
        
    </div>
    <div class="form-group">
           
        <input class="btn btn-outline-primary" type="submit" name="submit" value="Submit" >
        
    </div>


</form>


              



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\PocketProject-laravel\pocketproject\resources\views/products/create.blade.php ENDPATH**/ ?>