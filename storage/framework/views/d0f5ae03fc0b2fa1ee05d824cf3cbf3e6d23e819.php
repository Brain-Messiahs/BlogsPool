<?php $__env->startSection('popup'); ?>


<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details</h4>
                  </div>
                    <div class="modal-body" style="color: #fd6e70">
                      <div class="col-md-4 profile-bottom-img">
        <img id="show-image" alt="" width="70">
      </div>
   <div class="limiter">
   <div class="container-table100" style="background-color: transparent;">
      <div class="wrap-table100">
        <div class="table100">

        <table>
                    <tr><td class="show-detail">Product Name</td><td>:</td><td id="show-product_name"></td></tr>
                    <tr><td class="show-detail">Category</td><td>:</td><td id="show-product_category"></td></tr>
                    <tr><td class="show-detail">Quantity</td><td>:</td><td id="show-quantity"></td></tr>
                     <tr><td class="show-detail">Unit</td><td>:</td><td id="show-unit"></td></tr>
                    <tr><td class="show-detail">Status</td><td>:</td><td id="show-status"></td></tr>
                    <tr><td class="show-detail">Delivery address</td><td>:</td><td id="show-delivery_address"></td></tr>
                    <tr><td class="show-detail">Delivery contact</td><td>:</td><td id="show-delivery_mobile"></td></tr>
                    <tr><td class="show-detail">Selling Price</td><td>:</td><td id="show-selling_price"></td></tr>
                    <tr><td class="show-detail">Amount</td><td>:</td><td id="show-amount"></td></tr>
                     <tr><td class="show-detail">Ordered at</td><td>:</td><td id="show-created_at"></td></tr>
                    </table></div></div></div></div></div>
                    </div>
                    </div>
                    </div>
            



 
 <div id="delete" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">delete</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
             <h4 id="delete-name"></h4>
           <p id="delete-id" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-student">
              Delete
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/main_current_orders.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Current Orders</b></h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Order_id</th>
                <th class="column3">Product_id</th>
                <th class="column4">Product</th>
                <th class="column5">Unit</th>
                 <th class="column6">Status</th>
                  <th class="column7">Price</th>
                  <th class="column8">Amount</th>
                  <th class="column9">Details</th>
               </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->order_id); ?></td>
          <td class="column3"><?php echo e($user->product_id); ?></td>
          <td class="column4"><?php echo e($user->product_name.' , '.$user->quantity.$user->quantity_type); ?></td>
          <td class="column5"><?php echo e($user->unit); ?></td>
          <td class="column6"><?php echo e($user->order_status); ?></td>
          <td class="column7"><?php echo e($user->amount/$user->unit); ?></td>
            <td class="column8"><?php echo e($user->amount); ?></td>
          <td class="column9">
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-image="<?php echo e($user->image); ?>" data-product_name="<?php echo e($user->product_name); ?>" data-product_category="<?php echo e($user->product_category); ?>" data-quantity="<?php echo e($user->quantity); ?>" data-quantity_type="<?php echo e($user->quantity_type); ?>" data-unit="<?php echo e($user->unit); ?>" data-status="<?php echo e($user->order_status); ?>" data-delivery_address="<?php echo e($user->delivery_address); ?>" data-delivery_mobile="<?php echo e($user->delivery_mobile); ?>" data-delivery_charge="<?php echo e($user->delivery_charge); ?>" data-amount="<?php echo e($user->amount); ?>" data-selling_price="<?php echo e($user->amount/$user->unit); ?>" data-created_at="<?php echo e($user->created_at); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
          </td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($products->links()); ?></p>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript"> 
$(document).ready(function(){
 
  
 
//----------------------------------------------show details-------------------------//
 $(document).on('click', '#show-button', function() {
    $('#show-id').text($(this).data('id'));
    $('#show-product_name').text($(this).data('product_name'));
    $('#show-product_category').text($(this).data('product_category'));
    $('#show-quantity').text($(this).data('quantity')+$(this).data('quantity_type'));
    $('#show-unit').text($(this).data('unite'));
    $('#show-status').text($(this).data('status'));
    $('#show-delivery_address').text($(this).data('delivery_address'));
    $('#show-delivery_mobile').text($(this).data('delivery_mobile'));
    $('#show-selling_price').text($(this).data('selling_price'));
    $('#show-amount').text($(this).data('amount'));
    $('#show-created_at').text($(this).data('created_at'));
    });
 //----------------------------------------------end show details-------------------------//


//------------------------------------------------search----------------------------------//
 $('#searchField').keydown(function(e){
    if (e.keyCode === 13) { // If Enter key pressed
        $(this).trigger('submit');
    }
});
 //--------------------------------------------end search------------------------------//
  });</script>
<script type="text/javascript">$(".search-btn").click(function(){
  $(".search-input").toggleClass("active").focus;
  $(this).toggleClass("animate");
  $(".input").val("");
});</script>
<script type="text/javascript">
  $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
	 var img ="<?php echo e(route('hub-your_order_reload')); ?>";

    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/hub_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>