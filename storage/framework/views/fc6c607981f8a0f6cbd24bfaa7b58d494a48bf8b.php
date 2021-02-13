<?php $__env->startSection('product'); ?>
<div class="bod_1">
	
	<h3 style="padding:30px 0px 10px 32%; color: #8cc43e" >Your Orders...</h3>
  <?php if($order_number>0): ?>
  <div id="prdct">
       <table class="table table-bordered">
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td style="padding:4px!important;border-right-color: #fff; min-width: 60px" ><img src="<?php echo e(asset("$cart->image")); ?>" height="45" width="40" style="margin: 4px -13px 0px 4px"></td>
<td  style="padding:4px!important;border-right-color: #fff;" colspan="3"><h4 style="color: #000; margin-bottom: -25px;margin-top: 5px; font-size: 16px"><?php echo e($cart->product_name.', '.$cart->quantity.$cart->quantity_type); ?></h4><br><p style="margin-bottom: -25px;">unit: <?php echo e($cart->unit); ?> X ₹<?php echo e($cart->amount/$cart->unit); ?>&nbsp;|&nbsp;order: <span style="color: #8cc43e"><?php echo e($cart->order_status); ?></span> </p><br><p style="font-size: 10px">order date: <?php echo e($cart->created_at); ?></p></td>
<td style=" border-right-color: #fff; padding-left: 2px !important;padding-right: 2px !important;" class="row"><p style="color: tomato; padding: 5px 5px !important; float: right; margin-right: 8px;">₹<?php echo e($cart->amount); ?></p></td>
         
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>  
</div>
       <?php else: ?>
       <h4 style="margin-left: 30%;">You Have Ordered Nothing...</h4>
       <?php endif; ?>
     </div>
     <script type="text/javascript">
        	 myInterval = setInterval(function() {
         var prdct = document.getElementById('prdc');
	 var img ="<?php echo e(route('user-orders_reload')); ?>";
    $.get(img,function(data){
    
          $('#prdct').empty().html(data);
    	
    });
    }, 5000)
     </script>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layout/user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>