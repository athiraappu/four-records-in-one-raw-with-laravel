<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
           <h4> Product Listing</h4>
        </div>
    </div>
</div>
  
<br/>
<div class="container">
  
    <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>
  
    <?php echo $__env->yieldContent('content'); ?>
</div>
  
<?php echo $__env->yieldContent('scripts'); ?>
     
</body>
</html><?php /**PATH D:\xampp\htdocs\machine_test_product_based\resources\views/layout.blade.php ENDPATH**/ ?>