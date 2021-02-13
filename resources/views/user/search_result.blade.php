 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <a class="btn rdo" data-id="product" data-type='open'>Products</a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <a class="btn rdo" data-id="vendor" data-type='open'>Shops</a>
            </div>
            <br>
            <?php $n=0;?>
@foreach($product as $p)
@if($p->distance<=$p->product_range)
 <?php $n++;?>
<div class="product_div" data-id='{{$p->vendor_id}}'>
<div class="image_div">
<img class="product_image" src="{{ asset("$p->product_image") }}" width="50" style="border-radius: 50%;">	
</div>
<div class="detail_div">
<h4 class="product_name">{{$p->product_name}}</h4>
<p class="product_cat">({{$p->product_category}})</p>
<p class="product_vendor_name">{{$p->vendor_name."  (".round($p->distance,1).'km)'}}</p>

</div>
</div>
<li class="end1"></li>
@endif
@endforeach
@foreach($vendor as $p)
@if($p->distance<=$p->vendor_range)
<?php $n++;?>
<div class="vendor_div" data-id='{{$p->id}}'>
<div class="image_div">
<img class="vendor_image" src="{{ asset("$p->photo") }}" width="50">	
</div>
<div class="detail_div">
<h4 class="vendor_name">{{$p->vendor_name}}</h4>
<p class="vendor_category">{{round($p->distance,1)}}km</p>
</div>
<li class="rating">{{round($p->rating,1)}}</li>
</div>
<li class="end2"></li>
@endif
@endforeach
@if($n==0)
<div class="oops">
	<p>Oops!</p>
	<p>Sorry, we could not understand what you mean.</p>
</div>
@endif
<script type="text/javascript">
	$('.rdo').click(function() {
		if($(this).data('id')=='product'){
			if($(this).data('type')=='open'){
			$('.vendor_div').css('display','none');	
			$('.end2').css('display','none');
			$('.product_div').css('display','block');
			$('.end1').css('display','block');	
			$('.rdo').data('type' , 'open');
			$(this).data('type' , 'close');
			$('.rdo').removeClass('act');
			$(this).addClass('act');
		}
		else if($(this).data('type')=='close'){
			$('.vendor_div').css('display','block');	
			$('.end2').css('display','block');
			$('.product_div').css('display','block');
			$('.end1').css('display','block');	
			$('.rdo').data('type' , 'open');
			$('.rdo').removeClass('act');
		}
		}
		else if($(this).data('id')=='vendor'){
		if($(this).data('type')=='open'){
			$('.vendor_div').css('display','block');	
			$('.end2').css('display','block');
			$('.product_div').css('display','none');
			$('.end1').css('display','none');	
			$('.rdo').data('type' , 'open');
			$(this).data('type' , 'close');
			$('.rdo').removeClass('act');
			$(this).addClass('act');
		}
		else if($(this).data('type')=='close'){
			$('.vendor_div').css('display','block');	
			$('.end2').css('display','block');
			$('.product_div').css('display','block');
			$('.end1').css('display','block');	
			$('.rdo').data('type' , 'open');
			$('.rdo').removeClass('act');
		}	
		}
	});
	$('.product_div').click(function() {
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
	$('.vendor_div').click(function() {
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
	.image_div {
  float: left;
  width: 20%;
   

}
	.detail_div{
 float: left;
  width: 64%;
	}
	.product_div,.vendor_div {
  margin-bottom: 20px;
  padding-bottom: 10px;
  padding-right: 10px;
  padding-left: 10px;
  margin-top: 10px;
}
.end1{
border-bottom: 1px solid #eee;
list-style: none;
margin-top: 60px;

}
.end2{
border-bottom: 1px solid #eee;
list-style: none;
margin-top: 45px;

}
.product_div .product-image,.vendor_div .vendor-image {
  text-align: center;
}
.product_div .product-image img,.vendor_div .vendor-image img {
  width: 40px;
  border-radius: 50%;
}
.product_div .detail_div .product_name,.vendor_div .detail_div .vendor_name {
  margin-right: 10px;
   overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.product_div .detail_div .product_category,.vendor_div .detail_div .vendor_category {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
  font-style: italic;
}
.product_vendor_name{
	color: tomato;
	font-style: italic;
	 overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.product_cat{
	font-style: italic;
	 overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;


}
.rdo{
 background-color: #e5e5e5;
 zoom:.8;
 margin-top: -20px;
border-radius: 4px;
color: #999;
border: .5px solid #ccc;
width: 100px;
}
.act{
	background-color: #8cc43d;
}
.oops{
 margin-top: 20px;
}
.oops p{
 font-weight: bold;	
 text-align: center;
}

</style>