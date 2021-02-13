  <?php if($cart_number>0): ?>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span><?php echo e($cart_number); ?> Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="row<?php echo e($no++); ?>">
								<td class="invert"><?php echo e($no++); ?></td>
								<td class="invert-image">
									
										<img src="<?php echo e(asset("$cart->image")); ?>" alt=" " height="50" width="50" class="img-responsive">
									
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											
											<div class="entry value">
												<span><?php echo e($cart->unit); ?></span>
											</div>
											
										</div>
									</div>
								</td>
								<td class="invert"><?php echo e($cart->product_name); ?></td>
								<td class="invert">₹<?php echo e($cart->amount); ?></td>
								<td class="invert">
									<div class="rem">
										<button class="delete_products" data-id="<?php echo e($cart->id); ?>">
               Remove
             </button>
									</div>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php else: ?>
			<div class="checkout-right">
				<h4>Your shopping cart contains: Nothing...
				</h4></div>
			<?php endif; ?>
	