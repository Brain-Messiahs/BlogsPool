<?php $__env->startSection('js'); ?>
    
    <script type="text/javascript">
  $(window).load(function () {
    var cat = '<?php echo e(app('request')->input('category')); ?>';
      $('#agileinfo-nav_search').val(cat);
  });
   $('#agileinfo-nav_search').on('change', function() {
    var v = $(this).val();
    var link ='<?php echo e(route('products',['category'=>':cat'])); ?>';
    var link = link.replace('%3Acat',v);
    window.location=link;
});
   $('.add_cart').on('click', function() {
    var id = $(this).data('id');
    
    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_add_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    },
    success: function(data){
      var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
        document.getElementById("cart_popup").innerHTML=data;
     });
    },
    });
   });
$('.change_unit').on('change', function() {
    var id = $(this).data('id');
    var price = $(this).data('price');
    var unit = $(this).val();
    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_update_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    'unit': unit,
    'price':price,
    },
    success: function(data){
  var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
        document.getElementById("cart_popup").innerHTML=data;
     });
    },
    });
   });
$('.delete_product').on('click', function() {
    var id = $(this).data('id');
    $.ajax({
    type: 'POST',
    url: '<?php echo e(route('product_delete_cart')); ?>',
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {'id': id,
    },
    success: function(data){
      var img ="<?php echo e(route('user-reload_cart')); ?>";
       $.get(img,function(data){
         document.getElementById("cart_popup").innerHTML=data;
      });

    },
    });
   });
</script>
<?php $__env->stopSection(); ?>
