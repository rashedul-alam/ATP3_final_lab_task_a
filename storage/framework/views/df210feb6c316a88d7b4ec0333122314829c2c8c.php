<?php $__env->startSection('content'); ?>

    

   
            
           
              
                
                <h1>Name: <?php echo e($product->productName); ?></h1>
                <h4>ID : <?php echo e($product->id); ?></h4>
                <div>
                    <p><?php echo e($product->details); ?></p>
                    
                </div>
                
                <p>DETAILS : <?php echo e($product->quantity); ?></p>
                <p>PRICE : <?php echo e($product->price); ?></p>
                <p>ENTRY : <?php echo e($product->created_at); ?></p>
                <p><a class="btn btn-primary" href="">CRUD</a></p>
              
              
       
    
       

        
                
                
            
        
            
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\pocketproject\resources\views/products/show.blade.php ENDPATH**/ ?>