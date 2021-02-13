 





        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css"> html{margin:15px;padding:15px;zoom:50%;} </style>
<h2 style="text-decoration: underline;text-align: center;font:bold;font-size: 25px">Invoice</h2>
 <table id="table" class="table table-bordered" style="zoom:70%;">
   <tr class="row" >
              <td colspan="4" style="border-right-color: #fff"><h4>Aman Gupta</h4><br style="padding: 0px;">
                subhash nagar naraini road atarra<br>9696761818</td><td colspan="2" style="border-left-color: #fff">
                <img style="float: right;" src="{{asset('user_css/images/logo2.png')}}" width="80">
                </td>
            </tr>
  <thead style="color: #fff;background-color: #d9534f;border-color: #d43f3a;">
    <tr>
       <th class="col" >SL No.</th>
                <th class="col" colspan="2" >Product</th>
                <th class="col" >Quality</th>
                <th class="col" >Price</th>
                <th class="col" >Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; $amount=0;$tax=0;$shipping=0;$total=0;?>
    @foreach($carts as $cart)
     <tr style="" class="row{{$no++}}">
                <td class="row">{{$no++}}</td>
                  <td colspan="2">{{$cart->product_name.', '.$cart->unit.$cart->unit_type}}</td>
                <td>
                  <div class="quantity">
                    <div class="quantity-select">
                      
                      <div class="entry value">
                        <span>{{$cart->quantity}}</span>
                      </div>
                      
                    </div>
                  </div>
                </td>
                <td>{{$cart->product_price}}</td>
                <td>{{$cart->amount}}</td>
              </tr>

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
            
    <tr colspan="6">
      <div class="totals" style=" float: right; margin-right: 10px;">
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
        
    </tr>
    
  </tbody>
</table>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>