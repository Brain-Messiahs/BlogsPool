 <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Order_id</th>
                <th class="column3">Product_id</th>
                <th class="column4">Product</th>
                <th class="column5">Unit</th>
                 <th class="column6">Status</th>
                  <th class="column7">Price</th>
                  <th class="column8">Amount</th>
                  <th class="column9">Details</th>
               </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

      <?php  $no=1; ?>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->order_id); ?></td>
          <td class="column3"><?php echo e($user->product_id); ?></td>
          <td class="column4"><?php echo e($user->product_name.' , '.$user->quantity.$user->quantity_type); ?></td>
          <td class="column5"><?php echo e($user->unit); ?></td>
          <td class="column6"><select class="product_status" id="product_status<?php echo e($user->id); ?>" data-id="<?php echo e($user->id); ?>">
          	<option value="Pending" <?php if($user->order_status=='Pending'): ?>selected=""<?php endif; ?>>Pending</option>
          	<option value="Accepted" <?php if($user->order_status=='Accepted'): ?>selected=""<?php endif; ?>>Accepted</option>
          	<option value="Packinng" <?php if($user->order_status=='Packinng'): ?>selected=""<?php endif; ?>>Packinng</option>
       <option value="Ready for delivery" <?php if($user->order_status=='Ready for delivery'): ?>selected=""<?php endif; ?>>Ready for delivery</option>
          	<option value="Out for delivery" <?php if($user->order_status=='Out for delivery'): ?>selected=""<?php endif; ?>>Out for delivery</option>
          	<option value="Delivered" <?php if($user->order_status=='Delivered'): ?>selected=""<?php endif; ?>>Delivered</option>
       <option value="Unable to deliver" <?php if($user->order_status=='Unable to deliver'): ?>selected=""<?php endif; ?>>Unable to deliver</option>
          	<option value="Out of stock" <?php if($user->order_status=='Out of stock'): ?>selected=""<?php endif; ?>>Out of stock</option>
         <option value="Customer not reachable" <?php if($user->order_status=='Customer not reachable'): ?>selected=""<?php endif; ?>>Customer not reachable</option>
          	<option value="Order Cancelled" <?php if($user->order_status=='Order Cancelled'): ?>selected=""<?php endif; ?>>Order Cancelled</option>

          </select></td>
          <td class="column7"><?php echo e($user->amount/$user->unit); ?></td>
            <td class="column8"><?php echo e($user->amount); ?></td>
          <td class="column9">
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-image="<?php echo e($user->image); ?>" data-product_name="<?php echo e($user->product_name); ?>" data-product_category="<?php echo e($user->product_category); ?>" data-quantity="<?php echo e($user->quantity); ?>" data-quantity_type="<?php echo e($user->quantity_type); ?>" data-unit="<?php echo e($user->unit); ?>" data-status="<?php echo e($user->order_status); ?>" data-delivery_address="<?php echo e($user->delivery_address); ?>" data-delivery_mobile="<?php echo e($user->delivery_mobile); ?>" data-delivery_charge="<?php echo e($user->delivery_charge); ?>" data-amount="<?php echo e($user->amount); ?>" data-selling_price="<?php echo e($user->amount/$user->unit); ?>" data-created_at="<?php echo e($user->created_at); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
          </td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
       <script type="text/javascript">
         $('.product_status').on('change', function() {
  var loading = document.getElementById('loading');
  loading.style.display='';
      var id = $(this).data('id');
      var value = $('#product_status'+id+' option:selected').val();
      $.ajax({
      type: 'POST',
      url: '<?php echo e(route('hub-update_order_status')); ?>',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {
        'id': id,
        'value': value
      },
      success: function(data){
        var img ="<?php echo e(route('hub-current_order_reload')); ?>";
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    });
       $("#loading").fadeOut(500);
      },
    });
  });
       </script>
          </table>
           