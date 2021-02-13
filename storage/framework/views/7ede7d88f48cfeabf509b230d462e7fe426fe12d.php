<?php $__env->startSection('product'); ?>
<div class="bod_1"  style="padding-top:55px ">
  <?php if($cart_number>0): ?>
       <div class="shopping-cart">

         <div class="column-labels">
           <label class="product-image">Image</label>
           <label class="product-details">Product</label>
           <label class="product-price">Price</label>
           <label class="product-quantity">Quantity</label>
           <label class="product-removal">Remove</label>
           <label class="product-line-price">Total</label>
         </div>
  <?php $amount=0;$tax=0;$shipping=0;$total=0;?>
<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="product">
           <div class="product-image">
             <img src="<?php echo e(asset("$cart->image")); ?>">
           </div>
           <div class="product-details">
             <div class="product-title"><?php echo e($cart->product_name.', '.$cart->quantity.$cart->quantity_type); ?></div>
           </div>
           <div class="product-price"><?php echo e($cart->admin_selling_price); ?></div>
           <div class="product-quantity">
            <div class="unit_circle" style="float: right;">
            <a class="unit_negative" data-id="<?php echo e($cart->id); ?>" data-price="<?php echo e($cart->admin_selling_price); ?>">-</a>
            </div>
             <input type="number" class="change_unit<?php echo e($cart->id); ?>" data-id="<?php echo e($cart->id); ?>" data-price="<?php echo e($cart->admin_selling_price); ?>" value="<?php echo e($cart->unit); ?>" min="1" readonly="" disabled="">
             <div class="unit_circle" style="float: right; margin-right: 5px;">
              <a class="unit_positive" data-id="<?php echo e($cart->id); ?>" data-price="<?php echo e($cart->admin_selling_price); ?>">+</a>
              </div>
           </div>
           <div class="product-removal">
             <button class="remove-product delete_product" data-id="<?php echo e($cart->id); ?>" data-unit="<?php echo e($cart->unit); ?>">
               Remove
             </button>
           </div>
           <div class="product-line-price"><?php echo e($cart->amount); ?></div>
         </div>
         <?php $amount=$amount+$cart->amount;
         $tax=($amount*0)/100;
         if($amount>=100){
          $shipping=0;
         }
         else{
         $shipping=15;  
         }
         $total=$amount+$tax+$shipping;
         ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

         <div class="totals">
           <div class="totals-item">
             <label>Subtotal</label>
             <div class="totals-value" id="cart-subtotal"><?php echo e($amount); ?></div>
           </div>
           <div class="totals-item">
             <label>Tax (0%)</label>
             <div class="totals-value" id="cart-tax"><?php echo e($tax); ?></div>
           </div>
           <div class="totals-item">
             <label>Shipping</label>
             <div class="totals-value" id="cart-shipping"><?php echo e($shipping); ?></div>
           </div>
           <div class="totals-item totals-item-total">
             <label>Grand Total</label>
             <div class="totals-value" id="cart-total"><?php echo e($total); ?></div>
           </div>
                     <hr class="space">

         </div>

             <button class="checkout"><a href="<?php echo e(route('user-checkout')); ?>">Checkout</a></button>

       </div>
       <?php else: ?>
       <h4 style="margin-left: 30%;">Your Cart is empty...</h4>
       <?php endif; ?>
       <script src="<?php echo e(asset('user_css/js/jquery-2.1.4.min.js')); ?>"></script>
<script type="text/javascript">
   $('.unit_negative').on('click', function() {
    var id = $(this).data('id');
    var price = $(this).data('price');
   var unit = parseFloat($('.change_unit'+id).val());
    if(unit>=2){
    var unit = parseFloat(unit) - 1;
    $('.change_unit'+id).val(unit);

    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_update_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    'unit': unit,
    'price':price,
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count - 1;
    $('#cart_count').attr('data-count',count);
var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
          $('.bod_1').html(data);
    });
    },
    });
  }
   });
       $('.unit_positive').on('click', function() {
    var id = $(this).data('id');
    var price = $(this).data('price');
    var unit = $('.change_unit'+id).val();
    var unit = parseFloat(unit) + 1;
    $('.change_unit'+id).val(unit);

    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_update_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    'unit': unit,
    'price':price,
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count + 1;
    $('#cart_count').attr('data-count',count);
var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
          $('.bod_1').html(data);
    });
    },
    });
   });
$('.delete_product').on('click', function() {
    var id = $(this).data('id');
    var value = $(this).data('unit');
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_delete_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      'id': id
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count - value;
    $('#cart_count').attr('data-count',count);
      var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
          $('.bod_1').html(data);
           $("#loading").fadeOut(500);
           });

    },
    });

   });
  </script>
  <style type="text/css">
    .unit_circle{
  width:20%;
  border-radius:50%;
  text-align:center;
  font-size: 22px;
  padding:10% 0;
  margin:3px 5px 3px 5px;
  line-height:0;
  position:relative;
  background: #38a9e4;
  color: white;
  font-family: Helvetica, Arial Black, sans;
}
.unit_circle a{
  color: #fff;
}
  </style>
    </div>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layout/user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>