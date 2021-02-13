@extends('layout/user_dashboard')
@section('product')
<div class="bod_1">
	
	<h3 style="padding:30px 0px 10px 32%; color: #8cc43e" >Your Orders...</h3>
  @if($order_number>0)
  <div id="prdct">
       <table class="table table-bordered">
@foreach($orders as $cart)
<tr class="product_open" data-id="{{$cart->order_no}}">
<td style="padding:4px!important;border-right-color: #fff; min-width: 60px" ><img src="{{ asset("$cart->product_image") }}" height="45" width="40" style="margin: 4px -13px 0px 4px"></td>
<td  style="padding:4px!important;border-right: none;" colspan="5"><h4 style="color: #000; margin-bottom: -25px;margin-top: 5px; font-size: 16px">{{$cart->product_name.', '.$cart->product_unit.$cart->product_unit_type}}</h4><br><p style="margin-bottom: -25px;">unit: {{$cart->product_quantity}} X ₹{{$cart->product_price}}&nbsp;|&nbsp;order: <span style="color: #8cc43e">{{$cart->order_status}}</span> </p><br><p style="font-size: 10px">order date: {{$cart->created_at}}</p></td>
</tr>
@if($cart->order_status=='Delivered')
<tr>
  
<td style="border-left: none;border-right: none; width: 15%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=1)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="1"></i></td>
<td style="border-left: none;border-right: none; width: 15%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=2)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="2"></i></td>
<td style="border-left: none;border-right: none; width: 15%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=3)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="3"></i></td>
<td style="border-left: none;border-right: none; width: 15%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=4)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="4"></i></td>
<td style="border-left: none;border-right: none; width: 15%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=5)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="5"></i></td></tr>
@endif
<tr ><td  style="background-color: rgba(23,22,23,0.08); padding: 2px !important" colspan="6"></td></tr>

@endforeach
      </table>  
</div>
       @else
       <h4 style="margin-left: 30%;">You Have Ordered Nothing...</h4>
       @endif
     </div>
     <div id="rate_box" style="position: fixed;z-index: 99999;float: right; bottom: 0px; width: 100%; background-color:rgba(0,0,0,.8); height: 50px; color: #fff;display: none;">
<h4 style="font-size:15px; width: 60%;padding-left: 20px;float: left; margin-top: 17px;">Thanks for rating...</h4>
      </div>
     <script type="text/javascript">
        	 myInterval = setInterval(function() {
         var prdct = document.getElementById('prdc');
	 var img ="{{ route('user-orders_reload') }}";
    $.get(img,function(data){
    
          $('#prdct').empty().html(data);
    	
    });
    }, 10000)
           $('.rating').click(function(){
             var id = $(this).data('id');
             var pr_id = $(this).data('pr_id');
            var rate = $(this).data('rate');
           $(".rating").each(function() {
             if($(this).data('id')==id){
             $(this).css('color','#999');
              }
            if($(this).data('id')==id && $(this).data('rate')<=rate){
           $(this).css('color','#8cc43e');
             }
            });
                $('#rate_box').css('display','block');
                $.ajax({
    type: 'POST',
      url: '{{ route('user-rating') }}',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,'pr_id':pr_id,'rating':rate
    },
    success: function(data){
      $("#rate_box").fadeOut(1000);  
    },
    });
           }) ;
           $('.product_open').click(function(){
                    var search=$(this).data('id');
            var img ="{{ route('user-open_order',['id'=>':search']) }}";
            var img = img.replace('%3Asearch',search);
            location.href = img; 
                  });
     </script>
    @endsection
    