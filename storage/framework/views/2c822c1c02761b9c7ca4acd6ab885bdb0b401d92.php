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

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->order_id); ?></td>
          <td class="column3"><?php echo e($user->product_id); ?></td>
          <td class="column4"><?php echo e($user->product_name.' , '.$user->quantity.$user->quantity_type); ?></td>
          <td class="column5"><?php echo e($user->unit); ?></td>
          <td class="column6"><?php echo e($user->order_status); ?></td>
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
          </table>
           <p><?php echo e($products->links()); ?></p>