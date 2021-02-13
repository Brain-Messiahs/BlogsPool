<?php $__env->startSection('inner_block'); ?>
  <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d');?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainsheet.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4>
    <div class="searchForm">
        <input id="searchField" type="text" name="s" placeholder="Search here"/>    
        <div class="close">
            <span class="front"></span>
            <span class="back"></span>
        </div>
    </div>
   
      
       <label>Start Date</label>
      <input style="width:100px; height:30px; border-radius:8px;" type="date" id="date1" name ="date1" value="" /> 
               <label>End Date</label>
      <input style="width:100px; height:30px; border-radius:8px;" type="date" id="date2" name ="date2" value="<?php echo e($timer); ?>" />
       <select id="category" disabled>
        <option value="">Category</option>
        <option value="all">All</option>
        <option value="earning_table">Earnings</option>
        <option value="expenses_table">Expenses</option>
      </select>
      <select class="hidden" id="earning_table">
        <option value="">Type</option>
        <option value="all">All</option>
        <option value="8th">8th</option>
        <option value="9th">9th</option>
        <option value="10th">10th</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
        <option value="repeater">Repeater</option>
        <option value="Online">Online</option>
      </select>
      <select class="hidden" id="expenses_table">
     <option value="">Type</option>
      <option value="all">All</option>
     <option value="Salary">Salary</option>
     <option value="Rents">Rents</option>
     <option value="Bills">Bills</option>
     <option value="Advertiesment">Advertiesment</option>
     <option value="Purchases">Purchases</option>
     <option value="Regular">Regular</option>
         </select>
         <select class="hidden" id="type">
     <option value="">Sub Type</option>
      <option value="all">All</option>
     <option value="Cheque">Cheque</option>
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
  <style type="text/css">
   
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
 $('#date1').on('input', function() {
   if($('input[name=date1]').val()!=''&&$('input[name=date2]').val()!=''){
      $('#category').attr('disabled',false);
   }
   else{$('#category option[value=""]').prop('selected', 'selected').change();
    $('#category').attr('disabled',true);}
});
  $('#date2').on('input', function() {
  if($('input[name=date1]').val()!=''&&$('input[name=date2]').val()!=''){
      $('#category').attr('disabled',false);
   }
   else{$('#category option[value=""]').prop('selected', 'selected').change();
    $('#category').attr('disabled',true);} 
});
  $('#category').on('change',function() {
    var category=$('#category option:selected').val();
    if(category=='earning_table'){
     if($('#earning_table').hasClass('hidden')){
      $('#earning_table').removeClass('hidden');
     }
     if(!$('#expenses_table').hasClass('hidden')){
      $('#expenses_table').addClass('hidden');
     }
    }
    else if(category=='expenses_table'){
     if(!$('#earning_table').hasClass('hidden')){
      $('#earning_table').addClass('hidden');
       if(!$('#type').hasClass('hidden')){
      $('#type').addClass('hidden');
     }
     }
     if($('#expenses_table').hasClass('hidden')){
      $('#expenses_table').removeClass('hidden');
     }
    }
    else{
       if(!$('#expenses_table').hasClass('hidden')){
      $('#expenses_table').addClass('hidden');
     }
     if(!$('#earning_table').hasClass('hidden')){
      $('#earning_table').addClass('hidden');
     }
      if(!$('#type').hasClass('hidden')){
      $('#type').addClass('hidden');
     }
      var loading = document.getElementById('loading');
    loading.style.display='';
    var date1=$('input[name=date1]').val();
     var date2=$('input[name=date2]').val();
    var img ="<?php echo e(route('account-balance_sheet_list',['id'=>'all','date1'=>':date1','date2'=>':date2'])); ?>";
     var img = img.replace('%3Adate1',date1);
      var img = img.replace('%3Adate2',date2);
      var img = img.replace('&amp;','&');
      var img = img.replace('&amp;','&');
     $('#print').attr('href','balance_sheet_pdf?id='+category+'&date1='+date1+'&date2='+date2);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
  }
    });

  $('#earning_table').on('change',function() {
    var category=$('#earning_table option:selected').val();
    if(category!='all'){
     if($('#type').hasClass('hidden')){
      $('#type').removeClass('hidden');
     }
    }
    else{
       if(!$('#type').hasClass('hidden')){
      $('#type').addClass('hidden');
     }
      var loading = document.getElementById('loading');
    loading.style.display='';
    var date1=$('input[name=date1]').val();
     var date2=$('input[name=date2]').val();
    var img ="<?php echo e(route('account-balance_sheet_list',['earning_table'=>':id','date1'=>':date1','date2'=>':date2'])); ?>";
     var img = img.replace('%3Aid',category);
      var img = img.replace('%3Adate1',date1);
      var img = img.replace('%3Adate2',date2);
      var img = img.replace('&amp;','&');
      var img = img.replace('&amp;','&');
     $('#print').attr('href','balance_sheet_pdf?id='+category+'&date1='+date1+'&date2='+date2);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
  }
    });
   $('#expenses_table').on('change',function() {
    var category=$('#expenses_table option:selected').val();
      var loading = document.getElementById('loading');
        loading.style.display='';
    var date1=$('input[name=date1]').val();
     var date2=$('input[name=date2]').val();
    var img ="<?php echo e(route('account-balance_sheet_list',['expenses_table'=>':id','date1'=>':date1','date2'=>':date2'])); ?>";
     var img = img.replace('%3Aid',category);
      var img = img.replace('%3Adate1',date1);
      var img = img.replace('%3Adate2',date2);
      var img = img.replace('&amp;','&');
      var img = img.replace('&amp;','&');
     $('#print').attr('href','balance_sheet_pdf?id='+category+'&date1='+date1+'&date2='+date2);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });

    $('#type').on('change',function() {
    var category=$('#type option:selected').val();
      var loading = document.getElementById('loading');
    loading.style.display='';
    var date1=$('input[name=date1]').val();
     var date2=$('input[name=date2]').val();
    var img ="<?php echo e(route('account-balance_sheet_list',['type'=>':id','date1'=>':date1','date2'=>':date2'])); ?>";
     var img = img.replace('%3Aid',category);
      var img = img.replace('%3Adate1',date1);
      var img = img.replace('%3Adate2',date2);
      var img = img.replace('&amp;','&');
      var img = img.replace('&amp;','&');
     $('#print').attr('href','balance_sheet_pdf?id='+category+'&date1='+date1+'&date2='+date2);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });

</script>
<script type="text/javascript">
  $('#searchField').keyup(function (e) {
            var keyCode = e.which;
          
            if (keyCode == 13) {
              var category = $('#searchField').val();
        var loading = document.getElementById('loading');
    loading.style.display='';
    var img ="<?php echo e(route('account-balance_sheet_list_search',['s'=>':id'])); ?>";
     var img = img.replace('%3Aid',category);
    $('#print').attr('href','balance_sheet_pdf?s='+category);
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);  
            }
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>