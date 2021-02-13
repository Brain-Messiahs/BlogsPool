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
                     <tr><td class="show-detail">Quantity Type</td><td>:</td><td id="show-quantity_type"></td></tr>
                    <tr><td class="show-detail">Status</td><td>:</td><td id="show-status"></td></tr>
                    <tr><td class="show-detail">Total Sell</td><td>:</td><td id="show-total_sell"></td></tr>
                    <tr><td class="show-detail">MRP</td><td>:</td><td id="show-mrp"></td></tr>
                    <tr><td class="show-detail">Selling Price</td><td>:</td><td id="show-selling_price"></td></tr>
                    <tr><td class="show-detail">Off</td><td>:</td><td id="show-off"></td></tr>
                     <tr><td class="show-detail">Upload Time</td><td>:</td><td id="show-created_at"></td></tr>
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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/main_your_products.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Product List</b>
       <a id="add-button" href="<?php echo e(route('hub-add_product')); ?>" class="create-modal btn btn-warning" >Add</a></h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Image</th>
                <th class="column3">Product</th>
                <th class="column4">Category</th>
                <th class="column5">Status</th>
                 <th class="column6">Sell</th>
                  <th class="column7">View</th>
                  <th class="column8">Edit</th>
                  <th class="column9">Delete</th>
               </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><img src="<?php echo e(asset("$user->image")); ?>" width="30"></td>
          <td class="column3"><?php echo e($user->product_name.' , '.$user->quantity.$user->quantity_type); ?></td>
          <td class="column4"><?php echo e($user->product_category); ?></td>
          <td class="column5"><select class="product_status" id="product_status<?php echo e($user->id); ?>" data-id="<?php echo e($user->id); ?>"><option value="">Status</option><option value="Available" <?php if($user->status=='Available'): ?>selected=""<?php endif; ?>>Available</option><option value="Not Available" <?php if($user->status=='Not Available'): ?>selected=""<?php endif; ?>>Not Available</option></select></td>
          <td class="column6"><?php echo e($user->total_sell); ?> units</td>
          <td class="column7">
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-image="<?php echo e($user->image); ?>" data-product_name="<?php echo e($user->product_name); ?>" data-product_category="<?php echo e($user->product_category); ?>" data-quantity="<?php echo e($user->quantity); ?>" data-quantity_type="<?php echo e($user->quantity_type); ?>" data-status="<?php echo e($user->status); ?>" data-total_sell="<?php echo e($user->total_sell); ?>" data-mrp="<?php echo e($user->mrp); ?>" data-selling_price="<?php echo e($user->selling_price); ?>" data-off="<?php echo e($user->off); ?>" data-created_at="<?php echo e($user->created_at); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
            <td class="column8">
              <a href="<?php echo e(route('hub-edit_product',['id'=>$user->id])); ?>">
                 <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
              </a>
            </td>
          <td class="column9">
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->product_name); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
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
 
  
  //---------------------------------------update status---------------------------//

 $('.product_status').on('change', function() {
  var loading = document.getElementById('loading');
  loading.style.display='';
      var id = $(this).data('id');
      var value = $('#product_status'+id+' option:selected').val();
      $.ajax({
      type: 'POST',
      url: '<?php echo e(route('hub-update_product_status')); ?>',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {
        'id': id,
        'value': value
      },
      success: function(data){
       $("#loading").fadeOut(500);
      },
    });
  });

   //---------------------------------------end update status---------------------------//
//----------------------------------------------show details-------------------------//
 $(document).on('click', '#show-button', function() {
    $('#show-id').text($(this).data('id'));
    $('#show-product_name').text($(this).data('product_name'));
    $('#show-product_category').text($(this).data('product_category'));
    $('#show-quantity').text($(this).data('quantity'));
    $('#show-quantity_type').text($(this).data('quantity_type'));
    $('#show-status').text($(this).data('status'));
    $('#show-total_sell').text($(this).data('total_sell'));
    $('#show-mrp').text($(this).data('mrp'));
    $('#show-selling_price').text($(this).data('selling_price'));
    $('#show-off').text($(this).data('off')+'%');
    $('#show-created_at').text($(this).data('created_at'));
var src = "<?php echo e(asset("")); ?>"+$(this).data('image');
    $('#show-image').attr('src',src);
    });
 //----------------------------------------------end show details-------------------------//

//-------------------------------------------------------delete data------------------------//

 $(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
 $('#delete-student').click(function() {
  var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
     url: '<?php echo e(route('hub-delete_product')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
    'id': $('#delete-id').text(),
    },
    success: function(data){

   $('.user'+$('#delete-id').text()).hide();
      $('#delete').modal('hide');
     $("#loading").fadeOut(500);
    }
  });
});
//---------------------------------------------------end delete data----------------------//
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
});
  $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var img ="<?php echo e(route('hub-your_product_reload',['page'=>':year'])); ?>";
    var img = img.replace('%3Ayear',url);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/hub_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>