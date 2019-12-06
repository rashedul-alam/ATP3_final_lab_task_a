<?php $__env->startSection('content'); ?>

    

   
            
           
              
                
                <h1>Name: <?php echo e($product->productName); ?></h1>
                <h4>ID : <?php echo e($product->id); ?></h4>
                <div>
                    <p>Details</p>
                    <p><?php echo e($product->details); ?></p>
                    
                </div>
                
                <p>DETAILS : <?php echo e($product->quantity); ?></p>
                <p>PRICE : <?php echo e($product->price); ?></p>
                <p>ENTRY :  <br>By: <?php echo e($product->user->name); ?> <br> At: <?php echo e($product->created_at); ?></p>
                <hr>
                <?php if(!Auth::guest()): ?>
                <?php if(Auth::user()->id == $product->user_id): ?>
                    <div>
                    <p><a href="/Products/<?php echo e($product->id); ?>/edit" class="btn btn-secondary">Edit</a></p>

                <form  action="<?php echo e(route('Products.destroy', $product['id'])); ?>"  method="POST" class="pull-right">
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                 </form>
                </div>
                <?php endif; ?>
                
                <?php endif; ?>
                
              
              
       
    
       

        
                
                
            
        
            
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\PocketProject-laravel\pocketproject\resources\views/products/show.blade.php ENDPATH**/ ?>