	@extends('layout/user_dashboard')
@section('product')
<div class="privacy" style="padding-top:55px ">
		<div class="container">
			<div class="checkout-left">

				<div class="address_form_agile">
					<h4>Add a new Details</h4>
					<form action="{{ route('user-new_address_submit') }}" method="post" class="creditly-card-form agileinfo_form">
						@csrf
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
								<button type="submit" class="submit check_out">Add Address</button>
							</div>
						</div>
					</form>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!-- //checkout page -->
	@endsection

	