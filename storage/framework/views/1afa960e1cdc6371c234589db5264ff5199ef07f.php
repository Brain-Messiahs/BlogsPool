	
<?php $__env->startSection('product'); ?>
<div class="privacy" style="padding-top:55px ">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<div class="checkout-left">
				<?php if($address_number>0): ?>
				<div class="exist_address">
					<form action="<?php echo e(route('user-place_order')); ?>" method="post" class="creditly-card-form agileinfo_form">
						<?php echo csrf_field(); ?>
					<table>
					<?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
					<tr class="exist_address_box address_tr" data-id="<?php echo e($add->id); ?>">
					
						<td class="exist_address_radio">
							<input type="radio" name="address_id" value="<?php echo e($add->id); ?>" required="">
						</td>
						<td class="exist_address_details">
							<h5><?php echo e($add->name); ?></h5>
							 <p> <?php echo e($add->flat); ?> ,<?php echo e($add->area); ?> ,<?php echo e($add->city.' , '.$add->pincode); ?><br><?php echo e($add->mobile); ?></p>

						</td>
					
				</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<tr class="exist_address_box"><td colspan="2" ><a href="<?php echo e(route('user-new_address')); ?>" style="color: silver;margin-left: 5px">Add new address ></a></td></tr>
					<input type="radio" checked="">&nbsp;<a style="color: silver;margin-left: 5px">Method : COD</a>

					</table>
					<button onclick="modal()" class="submit check_out" >Delivery to this Address</button>
				</form>
				</div>
				
					<?php else: ?>
					<div class="checkout-left">

				<div class="address_form_agile">
					<h4>Add a new Details</h4>

					<form action="<?php echo e(route('user-new_address_submit')); ?>" method="POST" class="creditly-card-form agileinfo_form">
						<?php echo e(csrf_field()); ?>

						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="number" placeholder="Mobile Number" name="mobile" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="number" placeholder="Pincode" name="pincode" required="">
											</div>
										</div>
										<div class="controls">
										<input type="text" placeholder="Town/City" name="city" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Flat, House no.,company, Apartment" name="flat" required="">
											</div>
										</div>
										
										<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Area" name="area" required="">
											</div>
										</div>
			
										<div class="clear"> </div>
									</div>
									
								</div>
								<input type="submit" class="submit check_out" style="margin-bottom: 5px" value="Add Address" readonly="">
							</div>
						</div>
					</form>
					
				</div>
			<?php endif; ?>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!-- //checkout page -->
	<style type="text/css">
					.exist_address .exist_address_details h5{
						padding-bottom: 5px;
						font-weight: bold;
					}
					.exist_address table tr{
						border: 2px solid tomato;
						border-radius: 50px;
						margin-bottom: 20px;
					}
					.exist_address_radio{
						padding: 30px 20px 30px 20px;
					}
					.exist_address_details{
						padding: 5px 5px 5px 0px;
					}
					
					 input[type='radio']:after {
        width: 18px;
        height: 18px;
        border-radius: 18px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 18px;
        height: 18px;
        border-radius: 18px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: tomato;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
				</style>
				<script src="<?php echo e(asset('user_css/js/jquery-2.1.4.min.js')); ?>"></script>
<script type="text/javascript">
	var loading = document.getElementById('loading');
		$('.address_tr').on('click', function() {
		var id = $(this).data('id');
		$('input:radio[name="address_id"][value="'+id+'"]').prop('checked', true).trigger("click");	
		});
		
		 function modal() {
               loading.style.display='inline-block';
		};
	</script>
	
					
	<?php $__env->stopSection(); ?>


	
	
<?php echo $__env->make('layout/user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>