@extends('layout/user_dashboard')
@section('banner')
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
						<a class="button2" href="{{ route('user') }}">Shop Now </a>
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
						<a class="button2" href="{{ route('user') }}">Shop Now </a>
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
						<a class="button2" href="{{ route('user') }}">Shop Now </a>
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
						<a class="button2" href="{{ route('user') }}">Shop Now </a>
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
@endsection
@section('product')
<div class="container">
	<?php $no=0; $n=1; ?>
					@foreach ($products as $product)
					<?php $n=2;?>
					@if($no==0)
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{$product->product->product_category}}
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
					
					<div class="product-sec1">
						@endif
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset("$product->product->image")}}" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a>{{$product->product->product_name.', '.$product->product->quantity.$product->product->quantity_type}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹{{$product->product->admin_selling_price}}</span>
										<del>₹{{$product->product->admin_mrp}}</del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="{{$product->product->id}}" value="Add to cart" class="button add_cart" />
									</div>

								</div>
							</div>
						</div>
						
                        <?php $no++ ?>
							@endforeach
							@if($no>0)
						<div class="clearfix"></div>
							@endif
							@if($n==1)
							<h4 style="padding-left: 10%; color: #8cc43e">{{app('request')->input('category')}} Not Available...</h4>
							@endif
					</div>
					

				</div>
			</div>
			<!-- //product right -->
		</div>
		@endsection
		
		@section('js')
		<script type="text/javascript">
	
	 $('.add_cart').on('click', function() {
	 	var id = $(this).data('id');
	 	var loading = document.getElementById('loading');
    loading.style.display=''; 
	 	$.ajax({
    type: 'POST',
    url: '{{ route('product_add_cart') }}',
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
@endsection
