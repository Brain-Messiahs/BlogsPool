<?php $__env->startSection('banner'); ?>
<!-- banner -->
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-top:55px ">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<br>
						<a class="button2" href="<?php echo e(route('user')); ?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<br>
						<a class="button2" href="<?php echo e(route('user')); ?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<br>
						<a class="button2" href="<?php echo e(route('user')); ?>">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<br>
						<a class="button2" href="<?php echo e(route('user')); ?>">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('product'); ?>
<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Vegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Vegetables</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                        <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Vegetables'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2" id="nuts_block">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="<?php echo e(asset('user_css/images/nut1.png')); ?>" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!------------------------------------Dry_Fruits ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Dry_Fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Dry_Fruits</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Dried Fruits & Nuts'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Dry_Fruits ------------------------->

					<!-- special offers -->

					<?php $no=0 ?>
					<?php $__currentLoopData = $Offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"><a href="<?php echo e(route('products',['category'=>'Offers'])); ?>">Special Offers
				</a><span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php endif; ?>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a>
										<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>₹<?php echo e($product->product->admin_selling_price); ?></h6>
									<p>Save ₹<?php echo e($product->product->admin_mrp - $product->product->admin_selling_price); ?></p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" /> 
								</div>
							</div>
						</div>
					</li>
					 <?php $no++ ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
					
					<!------------------------------------Fruits ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Fruits</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>

								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Fruits'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Fruits ------------------------->

					<!------------------------------------Ghasitaram ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Ghasitaram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Ghasitaram Sweets</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Ghasitaram Sweets'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Ghasitaram ------------------------->
					<!------------------------------------Grocery ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Grocery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Grocery</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Grocery'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Grocery ------------------------->
					
					<!------------------------------------Bread ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Bread; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Bread & Bakery</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Bread & Bakery'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Bread ------------------------->
					
					<!------------------------------------Biscuits ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Biscuits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Biscuits & Cookies</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Biscuits & Cookies'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Biscuits ------------------------->
					
					<!------------------------------------Snacks ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Snacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Snacks & Beverages</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Snacks & Beverages'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Snacks ------------------------->
					
					<!------------------------------------Drinks ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Drinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Soft Drinks</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Soft Drinks'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Drinks ------------------------->
					
					<!------------------------------------Personal_Care ------------------------->
					<?php $no=0 ?>
					<?php $__currentLoopData = $Personal_Care; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($no==0): ?>
					<div class="product-sec1" style="padding-bottom: 5px">
						<h3 class="heading-tittle">Personal_Care</h3>
						<?php endif; ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product->image;?>
									<img src="<?php echo e(asset("$image")); ?>" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a><?php echo e($product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type); ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹<?php echo e($product->product->admin_selling_price); ?></span>
										<del>₹<?php echo e($product->product->admin_mrp); ?></del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="<?php echo e($product->product->id); ?>" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                         <?php $no++ ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if($no>0): ?>
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
						 <div><h4 style="color:#000;margin-left:40%; padding:7px;">
								<a href="<?php echo e(route('products',['category'=>'Personal Care'])); ?>" style="color:tomato;"><h4>More...</h4></a>
							</h4>
							</div>
							<?php endif; ?>
					</div>
					
					<!------------------------------------end Personal_Care ------------------------->
					

				</div>
			</div>
			<!-- //product right -->
		</div>
		<?php $__env->stopSection(); ?>
		
		<?php $__env->startSection('js'); ?>
		<script type="text/javascript">
	$('#nuts_block').on('click', function() {
		
    var link ='<?php echo e(route('products',['category'=>'Dried Fruits & Nuts'])); ?>';
    window.location=link;

});
	 $('.add_cart').on('click', function() {
	 	var id = $(this).data('id');
	 	var loading = document.getElementById('loading');
    loading.style.display=''; 
	 	$.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_add_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    },
    success: function(data){
    var count = $('#cart_count').data('count');
    count = count + 1;	
    $('#cart_count').data('count',count);
    $('#cart_count').attr('data-count',count);
$("#loading").fadeOut(500);
    },
    });
	 });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>