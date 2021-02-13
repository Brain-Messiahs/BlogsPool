@extends('layout/user_dashboard')
@section('product')
<div class="bod_1">
	
	<p style="padding:30px 0px 10px 20px;" >Order ID - {{app('request')->input('id')}}</p>

  <div id="prdct">
       <table class="table table-bordered">
        <?php $amount=0; ?>
@foreach($orders as $cart)
<tr class="product_open" data-id="{{$cart->order_no}}">
<td style="padding:4px!important;border-right-color: #fff; min-width: 60px" ><img src="{{ asset("$cart->product_image") }}" height="45" width="40" style="margin: 4px -13px 0px 4px"></td>
<td  style="padding:4px!important;border-right: none;" colspan="4"><h4 style="color: #000; margin-bottom: -25px;margin-top: 5px; font-size: 16px">{{$cart->product_name.', '.$cart->product_unit.$cart->product_unit_type}}</h4><br><p style="margin-bottom: -25px;">unit: {{$cart->product_quantity}} X ₹{{$cart->product_price}}&nbsp;|&nbsp;order: <span style="color: #8cc43e">{{$cart->order_status}}</span> </p><br><p style="font-size: 10px">order date: {{$cart->created_at}}</p></td>
<td style=" border-left: none; padding-left: 2px !important;padding-right: 2px !important;width: 70px;"><p style="color: tomato; padding: 5px 5px !important; float: right; margin-right: 8px;">₹{{$cart->amount}}</p></td>
</tr>
@if($cart->order_status=='Delivered')
<tr>
<td style="border-left: none;border-right: none; width: 20%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=1)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="1"></i></td>
<td style="border-left: none;border-right: none; width: 20%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=2)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="2"></i></td>
<td style="border-left: none;border-right: none; width: 20%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=3)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="3"></i></td>
<td style="border-left: none;border-right: none; width: 20%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=4)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="4"></i></td>
<td style="border-left: none;border-right: none; width: 20%; text-align: center;@if($cart->rating!=NULL&&$cart->rating>=5)color:#8cc43e;@endif"><i class="fa fa-star rating" data-pr_id="{{$cart->product_id}}" data-id="{{$cart->id}}" data-rate="5"></i></td></tr>
@endif

<?php $addresss = $cart->delivery_address; $mobile = $cart->delivery_mobile;  $amount=$amount+$cart->amount;
         $tax=($amount*0)/100;
         if($amount>=100){
          $shipping=0;
         }
         else{
         $shipping=15;  
         }
         $total=$amount+$tax+$shipping;
         ?>
@endforeach
      </table>  
</div>

     </div>
     @foreach($address as $add)
<div style="background-color: rgba(23,22,23,0.08); padding-top: 12px !important;margin-top: -20px;width: 100%;">
</div>
<div style="padding-left: 20px; font-size: 17px;">
  <p style="padding:5px 0px 5px 0px; font-size: 16px;" >Shipping Details</p>
  <li style="background-color: rgba(23,22,23,0.08); min-height: 1px; list-style: none; margin-left: -20px;margin-bottom: 10px;"></li>
  <div class="clearfix"></div>
  <b>{{$add->name}}</b><br>
  <h5 style="font-size: 15px; margin-top: 5px; line-height: 1.3em">{{$addresss}}</h5>
  <h5 style="font-size: 15px; line-height: 1.3em">pincode - {{$add->pincode}}</h5>
  <h5 style="font-size: 15px; line-height: 1.3em"><b>Phone number: </b>{{$mobile}}</h5>
</div>
<div style="background-color: rgba(23,22,23,0.08); padding-bottom: 12px !important;margin-top: 20px;width: 100%;">
</div>
@endforeach
<div style="padding-left: 20px; font-size: 20px;">
  <p style="padding:5px 0px 5px 0px; font-size: 16px;" >Price Details</p>
  <li style="background-color: rgba(23,22,23,0.08); min-height: 1px; list-style: none; margin-left: -20px;margin-bottom: 10px;"></li>
  <div class="clearfix"></div>
   <div class="totals">
           <div class="totals-item">
             <label>Subtotal</label>
             <div class="totals-value" id="cart-subtotal">{{$amount}}</div>
           </div>
           <div class="totals-item">
             <label>Tax (0%)</label>
             <div class="totals-value" id="cart-tax">{{$tax}}</div>
           </div>
           <div class="totals-item">
             <label>Shipping</label>
             <div class="totals-value" id="cart-shipping">{{$shipping}}</div>
           </div>
           <div class="totals-item totals-item-total">
             <label>Grand Total</label>
             <div class="totals-value" id="cart-total">{{$total}}</div>
           </div>
</div>
    
     <div id="rate_box" style="margin-left: -20px;position: fixed;z-index: 99999;float: right; bottom: 0px; width: 100%; background-color:rgba(0,0,0,.8); height: 50px; color: #fff;display: none;">
<h4 style="font-size:15px; width: 60%;padding-left: 20px;float: left; margin-top: 17px;">Thanks for rating...</h4>
      </div>
     <script type="text/javascript">
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

     </script>
    @endsection
    