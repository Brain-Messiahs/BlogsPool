<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainaccounting.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Accounting</b>

       <select id="type">
       <option value="">Type</option>
        <option value="all">All</option>
      <option value="Varsha's A/c">Varsha's A/c</option> 
     <option value="Inspire's A/c">Inspire's A/c</option>
     <option value="Sahu's A/c">Sahu's A/c</option> 
     <option value="Custom1's A/c">Custom1's A/c</option>
     <option value="Custom2's A/c">Custom2's A/c</option>  
      <option value="Cash">Cash</option> 
      </select>
       <a id="print" ><i class="fa fa-file-pdf-o " style="color: #ff5c33; size: 16px"></i></a>
    </h4> 
</div></div>
<div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100"  id="tbody">
          
        </div>
      </div>
    </div>
  </div></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
 
  $('#type').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var type=$('#type option:selected').val();
    var img ="<?php echo e(route('account-accounting_list',['id'=>':type'])); ?>";
    var img = img.replace('%3Atype',type);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $('#print').attr('href','accounting_list_pdf?id='+type+'')
    $("#loading").fadeOut(500);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>