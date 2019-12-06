<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(count($products)>0): ?>
                        
                    <h3>Your inserted Products</h3>
                    <table class="table table-striped">
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">DETAILS</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">ENTRY</th>
                                <th scope="col">ACTION</th>


                        </tr>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                        <tbody>
                        
                            <td scope="row"><?php echo e($product->id); ?></td>
                            <td><?php echo e($product->productName); ?></td>
                            <td><?php echo e($product->details); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->created_at); ?></td>
                            <td><a href="<?php echo e(route('Products.show', $product->id)); ?>">SHOW</a></td>
                            

                            
                        
                        </tbody>
                        
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>
                    
                        
                    <?php else: ?>
                    <h3>Your added products list EMPTY.</h3>
                    <a class="btn btn-primary" href="/Products/create">Add Product</a>
                        
                    <?php endif; ?>
                        
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Atp 3\Laravel\All\PocketProject\PocketProject-Laravel\PocketProject-laravel\pocketproject\resources\views/dashboard.blade.php ENDPATH**/ ?>