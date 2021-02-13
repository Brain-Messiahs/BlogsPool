	@extends('layout/user_dashboard')
@section('product')
<?php $range =app('request')->input('range');$latitude =app('request')->input('latitude');$longitude =app('request')->input('longitude') ?>
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
				@if($address_number>0)
				<div id="warning" style="height: 40px;width: 320px; padding: 7px;border: 1px solid #b51c18;display: none;" class="btn-danger"><p style="color: #fff;">Sorry!! vendor can't deliver to this Address</p></div>
				<div class="exist_address">
					<form action="{{ route('user-place_order') }}" method="post" class="creditly-card-form agileinfo_form">
						@csrf
					<table>
					@foreach($address as $add)
				
					<tr class="exist_address_box address_tr" data-id="{{$add->id}}" data-latitude="{{$add->latitude}}" data-longitude="{{$add->longitude}}">
					
						<td class="exist_address_radio">
							<input type="radio" name="address_id" value="{{$add->id}}" required="">
						</td>
						<td class="exist_address_details">
							<h5>{{$add->name}}</h5>
							 <p> {{$add->address}} ,{{$add->landmark}} <br>{{$add->mobile}}</p>

						</td>
					
				</tr>
					@endforeach
					<tr class="exist_address_box"><td colspan="2" ><a onclick="map()" style="color: silver;margin-left: 5px">Add new address ></a></td></tr>
					<input type="radio" checked="">&nbsp;<a style="color: silver;margin-left: 5px">Method : COD</a>

					</table>
					<button onclick="modal()" class="submit check_out">Delivery to this Address</button>
				</form>
				</div>
				
					@else
					<script type="text/javascript">
						$(window).load(function () {
			  	   			 var img = "{{ route('user-new_address',['range'=>$range,'latitude'=>$latitude,'longitude'=>$longitude]) }}";
                             var img = img.replace('&amp;','&');
                             var img = img.replace('&amp;','&');
                             var img = img.replace('&amp;','&');
                             location.href = img; });
					</script>
			@endif
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
				<script src="{{asset('user_css/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript">
	var loading = document.getElementById('loading');
		$('.address_tr').on('click', function() {
		var id = $(this).data('id');
		var lat1 = $(this).data('latitude');
		var lon1 = $(this).data('longitude');
		var range = "{{app('request')->input('range')}}";
		var lat2 = "{{app('request')->input('latitude')}}";
		var lon2 = "{{app('request')->input('longitude')}}";

	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		dist = dist * 1.609344 
		if(dist>range){
         $('#warning').css('display','block');
         $('.check_out').attr('disabled',true);
		}
		else{
			$('#warning').css('display','none');
         $('.check_out').attr('disabled',false);
		}
		$('input:radio[name="address_id"][value="'+id+'"]').prop('checked', true).trigger("click");	
	}

		});
		function map() {
			var img = "{{ route('user-new_address',['range'=>$range,'latitude'=>$latitude,'longitude'=>$longitude]) }}";
                             var img = img.replace('&amp;','&');
                             var img = img.replace('&amp;','&');
                             var img = img.replace('&amp;','&');
                             location.href = img; 
		}
		 function modal() {

               loading.style.display='inline-block';
		};
	</script>
	
					
	@endsection


	
	