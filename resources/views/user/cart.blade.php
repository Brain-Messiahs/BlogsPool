@extends('layout/user_dashboard')
@section('product')
<div class="bod_1"  style="padding-top:55px ">
   <?php 
     $range =0;
      $latitude = 0;
       $longitude = 0; 
       if(Auth::check()){$crt = Auth::user()->cart; }
       else {$crt = $cart_number;}?>
  @if($crt>0)
       <div class="shopping-cart">

         <div class="column-labels">
           <label class="product-image">Image</label>
           <label class="product-details">Product</label>
           <label class="product-price">Price</label>
           <label class="product-quantity">Quantity</label>
           <label class="product-removal">Remove</label>
           <label class="product-line-price">Total</label>
         </div>
  <?php $amount=0;$tax=0;$shipping=0;$total=0;?>
@foreach($carts as $cart)
         <div class="product">
           <div class="product-image">
             <img src="{{ asset("$cart->product_image") }}">
           </div>
           <div class="product-details">

             <div class="product-title">{{$cart->product_name.', '.$cart->product_unit.$cart->product_unit_type}}</div>
           </div>
           <div class="product-price">{{$cart->product_price}}</div>
           <div class="product-quantity">
            <div class="unit_circle" style="float: right;">
            <a class="unit_negative" data-id="{{$cart->id}}" data-price="{{$cart->product_price}}">-</a>
            </div>
             <input type="number" class="change_unit{{$cart->id}}" data-id="{{$cart->id}}" data-price="{{$cart->product_price}}" value="{{$cart->product_quantity}}" min="1" readonly="" disabled="">
             <div class="unit_circle" style="float: right; margin-right: 5px;">
              <a class="unit_positive" data-id="{{$cart->id}}" data-price="{{$cart->product_price}}">+</a>
              </div>
           </div>
           <div class="product-removal">
             <button class="remove-product delete_product" data-id="{{$cart->id}}" data-unit="{{$cart->product_quantity}}">
               Remove
             </button>
           </div>
           <div class="product-line-price">{{$cart->amount}}</div>
         </div>
         <?php $amount=$amount+$cart->amount;
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
      @foreach($products as $product)
     <?php 
     $range = $product->product_range;
      $latitude = $product->latitude;
       $longitude = $product->longitude; ?>
@endforeach
<p style="color: tomato">For Order value more than ₹100 Shipping is Free.</p>
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
                     <hr class="space">

         </div>

             <button class="checkout"><a onclick="checkout()">Checkout</a></button>

       </div>
       @else
       <?php 
     $range =0;
      $latitude = 0;
       $longitude = 0; ?>
       <h4 style="margin-left: 30%;">Your Cart is empty...</h4>
       @endif
       <script src="{{asset('user_css/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript">
   $('.unit_negative').on('click', function() {
    var id = $(this).data('id');
    var price = $(this).data('price');
   var unit = parseFloat($('.change_unit'+id).val());
    if(unit>=2){
    var unit = parseFloat(unit) - 1;
    $('.change_unit'+id).val(unit);

    $.ajax({
    type: 'POST',
    @if(Auth::check())
   url: '{{ route('user-product_decrease_cart') }}',
    @else
    url: '{{ route('home-product_decrease_cart') }}',
    @endif
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    'quantity': unit,
    'price':price,
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count - 1;
    $('#cart_count').attr('data-count',count);
@if(Auth::check())
    var img ="{{ route('user-reload_cart') }}";
    @else
    var img ="{{ route('home-reload_cart') }}";
    @endif
       $.get(img,function(data){
          $('.bod_1').html(data);
    });
    },
    });
  }
   });
       $('.unit_positive').on('click', function() {
    var id = $(this).data('id');
    var price = $(this).data('price');
    var unit = $('.change_unit'+id).val();
    var unit = parseFloat(unit) + 1;
    $('.change_unit'+id).val(unit);

    $.ajax({
    type: 'POST',
    @if(Auth::check())
   url: '{{ route('user-product_increase_cart') }}',
    @else
    url: '{{ route('home-product_increase_cart') }}',
    @endif
    
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    'quantity': unit,
    'price':price,
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count + 1;
    $('#cart_count').attr('data-count',count);
@if(Auth::check())
    var img ="{{ route('user-reload_cart') }}";
    @else
    var img ="{{ route('home-reload_cart') }}";
    @endif
       $.get(img,function(data){
          $('.bod_1').html(data);
    });
    },
    });
   });
$('.delete_product').on('click', function() {
    var id = $(this).data('id');
    var value = $(this).data('unit');
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    $.ajax({
    type: 'POST',
     @if(Auth::check())
      url: '{{ route('user-product_delete_cart') }}',
    @else
     url: '{{ route('home-product_delete_cart') }}',
    @endif
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      'id': id
    },
    success: function(data){
      var count = $('#cart_count').data('count'); 
    var count = count - value;
    $('#cart_count').attr('data-count',count);
     @if(Auth::check())
     var img ="{{ route('user-reload_cart') }}";
    @else
    var img ="{{ route('home-reload_cart') }}";
    @endif
       $.get(img,function(data){
          $('.bod_1').html(data);
           $("#loading").fadeOut(500);
           });

    },
    });

   });
function checkout() {
  @if(Auth::check())
  var img = "{{ route('user-checkout',['range'=>$range,'latitude'=>$latitude,'longitude'=>$longitude]) }}";
  var img = img.replace('&amp;','&');
  var img = img.replace('&amp;','&');
  var img = img.replace('&amp;','&');
  location.href = img;
  @else
  var img = "{{ route('user-form',['href'=>'/user/cart']) }}";
  var img = img.replace('%2F','/');
  var img = img.replace('%2F','/');
   location.href = img;
   @endif
}
  </script>
  <style type="text/css">
    .unit_circle{
  width:20%;
  border-radius:50%;
  text-align:center;
  font-size: 22px;
  padding:10% 0;
  margin:3px 5px 3px 5px;
  line-height:0;
  position:relative;
  background: #38a9e4;
  color: white;
  font-family: Helvetica, Arial Black, sans;
}
.unit_circle a{
  color: #fff;
}
  </style>
    </div>
    @endsection
    