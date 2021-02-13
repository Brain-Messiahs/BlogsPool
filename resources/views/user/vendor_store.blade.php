@extends('layout/user_dashboard')
@section('product')

			<!-- tittle heading -->
			@foreach($vendor as $ven)
			<div class="vendor_board" style="margin-top: 50px;">
				<img src="{{ asset("$ven->photo") }}" width="40px"><h3>{{$ven->vendor_name}}</h3>
				<div class="rate_div"><li class="one">{{$ven->rating}}<br></li><br><li class="two">{{round($ven->rating,1)}}<p>Reviews</p></li></div>
			</div>
			@endforeach
			<div class="chat-popup" id="myForm">
			@foreach($category as $cat)
			<li onclick="closeForm()"><a href="#{{$cat->category_name}}">{{$cat->category_name}}</a></li>
			@endforeach
		    <button type="button" style="float: right; margin-top: -2PX; margin-right: -2PX; border-radius: 20px; padding: 3px 15px" onclick="closeForm()"><i class="fa fa-bars"> Close</i></button>
			</div>
			<!-- //tittle heading -->
			<div style="position: fixed;z-index: 999999;float: right; bottom: 70px; width: 100%">

				<button  onclick="openForm()" style="float: right; margin-right: 20px; border-radius: 20px; padding: 3px 15px">
					<i class="fa fa-bars"> Menu</i>
				</button>
			</div>
			<div id="cart_box" style="position: fixed;z-index: 99999;float: right; bottom: 0px; width: 100%; background-color: tomato; height: 60px; display: none;">
<h4 style="font-size:15px; width: 60%;padding-left: 5px;float: left; margin-top: 23px;"><b id="cart_box_h4"@if(Auth::check()) data-count="{{ Auth::user()->cart }}"@else data-count="{{$cart_number }}" @endif>@if(Auth::check()){{ Auth::user()->cart }}@else{{$cart_number }}@endif</b><b> item in your cart</b></h4>
				<button  onclick="cart()" style="float: right; margin-top: 13px; margin-right: 20px; border-radius: 20px; padding: 3px 25px; background-color:#8cc43d;">
					<i class="fa fa-shopping-cart"> Cart</i>
				</button>
			</div>
			<!-- product right -->
			<div class="agileinfo-ads-display ">
				<div class="wrapper">
					<!-- first section (nuts) -->
					@foreach($category as $cat)
					<?php $no=0 ?>
					@foreach ($products as $product)
					@if($cat->category_name==$product->product_category)
					@if($no==0)
						<h3 class="heading-tittle" id="{{$cat->category_name}}">{{$cat->category_name}}</h3>
						@endif
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php $image = $product->product_image;?>
									<img src="{{asset("$image")}}" alt="">
									<div class="men-cart-pro">
									</div>
									
								</div>
								<div class="item-info-product ">
									<h4 style="min-height: 40px;">
										<a>{{$product->product_name.', '.$product->product_unit.$product->product_unit_type}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">₹{{$product->product_price}}</span>
										<del>₹{{$product->product_mrp}}</del>
									</div>


									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
												<input type="submit"  name="submit" data-id="{{$product->id}}" value="Add to cart" class="button add_cart" />
									</div>


								</div>
							</div>
						</div>
						
                        <?php $no++ ?>
                        @endif
							@endforeach
						<div class="clearfix"></div>
						<hr style="margin: 3px;">
							@endforeach
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
     @if(Auth::check())
    url: '{{ route('user-product_add_cart') }}',
    @else
     url: '{{ route('home-product_add_cart') }}',
     @endif
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    },
    success: function(data){
    var count = $('#cart_count').data('count');
    count = count + 1;	
    $('#cart_count').data('count',count);
    $('#cart_count').attr('data-count',count);
     $('#cart_box').css('display','block');
     var ct = $('#cart_box_h4').data('count');
     var ct =  parseInt(ct) + parseInt('1');
     $('#cart_box_h4').data('count',ct);
     $('#cart_box_h4').html(ct);
$("#loading").fadeOut(500);
    },
    });
	 });
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function cart() {
   @if(Auth::check())
 var img ="{{ route('user-cart') }}";
  location.href = img;
  @else
 var img ="{{ route('home-cart') }}";
  location.href = img;
  @endif 
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<style type="text/css">
	html {
  scroll-behavior: smooth;
}/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 67px;
  color: #000;
  right: 20px;
  border: 3px solid #f1f1f1;
  z-index: 9999999;
  width: 40%;
  padding-left: 10px;
  background-color: #ccc;

  opacity: 1;
}
.chat-popup a{
	color: #5d5d5d;
}
.chat-popup li{
	list-style: none;
}
.vendor_board{
	padding-left: 20px;

}
.vendor_board li{
	float: right;
	margin-right: 20px;
	list-style: none;
	margin-top: -20px;
	width: 50px;
	text-align: center;
	}
	.vendor_board h3{
		margin-top: 10px;
		font-size: 20px;
	}
	.vendor_board img{
		border-radius: 20px;
		width: 50px;
		float: left;
		margin-top: -10px;
		margin-right: 10px;
	}
	.one{
		color: #fff;
		font-size: 18px;
		border-top: 1px solid #999;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
		background-color: #8cc43e;
		padding: 2px 0px 2px 0px;
	}
	.two{
		color: #777;
		font-size: 14px;
		border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
	}
	.two p{
		font-size: 9px;
		margin-top: -4px;
	}
</style>
@endsection
