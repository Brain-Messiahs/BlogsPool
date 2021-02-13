@extends('layout/user_dashboard')
@section('search_box')

<div id="searchbox" class="information-wrapper">
<div class="first-row">
<div class="controls">
<input disabled style="margin-bottom: 10px; padding: 8px 6px;background-color: #fff" class="searchbox" type="text" name="search" placeholder="Search products, Shop" autocomplete="false">
</div></div></div>
@endsection
@section('product')
<!-- banner -->
	
	
<div id="search_div" style="display: none; min-height: 84vh; padding-top: 25px">
	<i class="fa fa-arrow-left" onclick="close_search()" style=" font-size: 24px;margin-left: 8px;color:#8cc43d;"></i>
	<div class="information-wrapper" style="padding: 7px;">
<div class="first-row">
<div class="controls">
<input class="searchbox_input" type="text" name="search_input" placeholder="Search products, Shop" autocomplete="false">
<div id="search_results" >
	

</div>
</div></div></div>
</div>

	<!-- //banner -->
	<div id="vendors" style="padding-top:80px;">
	  <?php $m=0;?>

@if($vendor)
@foreach($vendor as $p)
@if($p->distance<=$p->vendor_range)
<?php $m++;?>
<div class="vendor_div1" data-id='{{$p->id}}'>
<div class="image_div1">
<img class="vendor_image1" src="{{ asset("$p->photo") }}" width="50">	
</div>
<div class="detail_div1">
<h4 class="vendor_name1">{{$p->vendor_name}}</h4>
<p class="vendor_category1">{{round($p->distance,1)}} km</p>
</div>
<li class="rating">{{round($p->rating,1)}}</li>
</div>
<li class="end"></li>
@endif
@endforeach
@endif
@if($m==0)
<div class="oops">
	<p>Oops!</p>
	<p>Sorry, Froody is not available to your location.</p>
</div>
@endif
</div>
@endsection
@section('js')
<div class="container">
	<p class="hidden" id="demo"></p>
		</div>
		<script type="text/javascript">
		 var x=document.getElementById("demo");
		 @if($lat==0&&$lng==0)
        function getLocation()
         {
        if (navigator.geolocation)
        {
        navigator.geolocation.getCurrentPosition(showPosition);
        }
        else{x.innerHTML="Geolocation is not supported by this browser.";}
        }
        function showPosition(position)
        {
        	var lt1= position.coords.latitude;
 var lng1 = position.coords.longitude; 
        @if(Auth::check())
  location.href = "{{ route('user') }}?latitude="+lt1+"&longitude="+lng1;
  @else
location.href = "{{ route('home') }}?latitude="+lt1+"&longitude="+lng1;
@endif 
        }
        getLocation()
        @else
        function getFromAndroid() {
          var myvar = Android.getFromAndroid();
        var img ="{{ route('home-search',['token'=>':search']) }}";
         var img = img.replace('%3Asearch',myvar);
    $.get(img,function(data){
         alert(data);
    });  
        }
        
        @endif
</script>
<script type="text/javascript">
	$('#searchbox').click(function(){
		$('#vendors').css('display','none');
		$(this).css('display','none');
		$('#search_div').slideDown(500);
	})
	$('.searchbox_input').keyup(function(){
	
    var search=$('input[name=search_input]').val();
    @if(Auth::check())
        var img ="{{ route('user-search',['s'=>':search']) }}";
   @else
   var img ="{{ route('home-search',['s'=>':search']) }}";
 @endif 
    var img = img.replace('%3Asearch',search);
    $.get(img,function(data){
          $('#search_results').empty().html(data);
    });
	});
	function close_search() { 	
 	$('#vendors').slideDown(500);
 	$('#searchbox').css('display','block');
 	$('#search_div').css('display','none');	
 	$('.searchbox_input').val('');
 	$('#search_results').empty();
 	}

  $('.product_div1').click(function() {
    var search=$(this).data('id');
 @if(Auth::check())
 var img ="{{ route('user-product',['s'=>':search']) }}";
 var img = img.replace('%3Asearch',search);
  location.href = img;
  @else
 var img ="{{ route('home-product',['s'=>':search']) }}";
 var img = img.replace('%3Asearch',search);
  location.href = img;
  @endif 
  });
  $('.vendor_div1').click(function() {
    var search=$(this).data('id');
   @if(Auth::check())
 var img ="{{ route('user-vendor',['id'=>':search']) }}";
 var img = img.replace('%3Asearch',search);
  location.href = img;
  @else
var img ="{{ route('home-vendor',['id'=>':search']) }}";
 var img = img.replace('%3Asearch',search);
  location.href = img;
@endif  
  });
</script>
<style type="text/css">
	.image_div1 {
  float: left;
  width: 16%;
   

}
.rating{
  list-style: none;
  margin: 0;
  padding: 0;
  background-color:#8cc43e;
  border: 2px solid rgba(255, 255, 255, .15);
  font-size: 13px;
  width: 25px;
  float: right;
  text-shadow: 1px;
  color: #fff;
  border-radius: 5px;
  text-align: center;
  height: 25px;

}
	.detail_div1{
    margin-top: 2px;
 float: left;
  width: 64%;
	}
  .range{
    padding: 0;
    margin: 0;
 float: right;
  width: 15%;
  }
	.product_div1,.vendor_div1 {
  margin-bottom: 20px;
  padding-bottom: 10px;
  padding-right: 10px;
  padding-left: 10px;
  margin-top: 10px;
}
.end{
border-bottom: 1px solid #eee;
list-style: none;
margin-top: 45px;

}
.product_div1 .product-image1,.vendor_div1 .vendor-image1 {
  text-align: center;
}
.product_div1 .product-image1 img,.vendor_div1 .vendor-image1 img {
  width: 40px;
  border-radius: 50%;
}
.vendor_name1{
  font-size: 15px;
}
.product_div1 .detail_div1 .product_category1,.vendor_div1 .detail_div1 .vendor_category1 {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.oops{
 margin-top: 20px;
}
.oops p{
 font-weight: bold;	
 text-align: center;
}

</style>
@endsection