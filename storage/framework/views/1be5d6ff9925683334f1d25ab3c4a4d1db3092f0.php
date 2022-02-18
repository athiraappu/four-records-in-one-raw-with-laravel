
   
<?php $__env->startSection('content'); ?>

<table class="table table-striped">
    <thead>
        <tr>
          <!-- <td>Name</td> -->
         <!--  <td>Description</td>
          <td>Price</td> -->
        </tr>
    </thead>
     <tbody>
	     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	    

	         <?php if($key%4 == 0): ?>
	         	<tr>
	          <?php endif; ?>
	         	 <td>
	         	 <h4><?php echo e($key.$product['name']); ?></h4>
	         	 <h5><?php echo e($key.$product['description']); ?></h5>
	         	 <h6><?php echo e($key.$product['price']); ?></h6>
	         	</td>      

	        <?php if(($key+1)%4 ==0 || count($products)-1 == $key): ?>	       
			   </tr>
			<?php endif; ?>
	     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
     </tbody>
 </table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\machine_test_product_based\resources\views/products.blade.php ENDPATH**/ ?>