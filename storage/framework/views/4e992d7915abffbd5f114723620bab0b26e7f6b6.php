<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Earnings</b>
       <select id="class">
        <option value="">Class</option>
        <option value="all">All</option>
        <option value="8th">8th</option>
        <option value="9th">9th</option>
        <option value="10th">10th</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
        <option value="repeater">Repeater</option>
      </select>
      <select id="year">
        <option value="">year</option>
        <option value="all">All</option>
        <option value="2017">2017-18</option>
        <option value="2018">2018-19</option>
        <option value="2019">2019-20</option>
        <option value="2020">2020-21</option>
        <option value="2021">2021-22</option>
        <option value="2022">2022-23</option>
      </select>
      
      
    </h4> 
</div></div>
<div id="tbody">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainearning.css')); ?>">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" >
           <table id="#table">
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Father's name</th>
                 <th class="column4">Class</th>
                  <th class="column5">Year</th>
                <th class="column6">Fee_type</th>
                <th class="column7">Amount</th>
                <th class="column8">Delete</th>
                </tr>
                </thead>
                <tbody>
      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->f_name); ?></td>
           <td class="column4"><?php echo e($user->class); ?></td>
            <td class="column5"><?php echo e($user->year); ?></td>
           <td class="column6"> <?php echo e($user->fee_type); ?></td>
           <td class="column7"><?php echo e($user->amount); ?></td>
           <td class="column6"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" >
           <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>
        </div>
      </div>
    </div>
  </div></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('admin/bootstrap/js/bootstrap-datetimepicker.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bootstrap/js/bootstrap-datetimepicker.fr.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });

    $(".form_datetime").datetimepicker({
        format: "dd-mm-yyyy hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        startDate: "01-03-2019 00:00",
        minuteStep: 10
    });
      
       </script>

<script type="text/javascript">
 
  $(document).on('hide.bs.modal', '#add', function() {
    if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden');
        }
        if ($('.add-success').hasClass('hidden')) {
        }else {
          $('.add-success').addClass('hidden');
        } 
  });
  $('#year').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-earning_list',['year'=>':year','class'=>':class'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });
    $('#class').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
   var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-earning_list',['year'=>':year','class'=>':class'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });
   $(document).on('click', '#add-button', function() {
   $('#add_class').val($(this).data('class'));
   $('#add_year').val($(this).data('year'));
    $('#add_name').val($(this).data('name'));
    $('#add_sid').val($(this).data('sid'));
    $('#add_f_name').val($(this).data('f_name'));
});
 $(document).on('click', '#add_details', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
   var mode = $('#add_mode option:selected').val();
   var bank = $('#add_bank').val();
    var amount = $('#add_amount').val();
    var branch = $('#add_branch').val();
    var Check_type = $('#add_Check_type option:selected').val();
     var fee_type = $('#add_fee_type option:selected').val();
    var Check_number = $('#add_Check_number').val();
    var Direct = $('#add_Direct option:selected').val();
if (fee_type==''||mode==''||amount==''){ 
     if ($('.add-success').hasClass('hidden')) {
        }else {
          $('.add-success').addClass('hidden');
        }  
         if ($('.add-error').hasClass('hidden')) {
           $('.add-error').removeClass('hidden');
        }
          $('.add-error').text('Please Fill All Feild...');
        }
 else if(mode=='Check'){
    if(Check_type==''||bank==''||branch==''||Check_number==''){
      
     if (!$('.add-success').hasClass('hidden')) {
       
          $('.add-success').addClass('hidden');
        }  
         if ($('.add-error').hasClass('hidden')) {
           $('.add-error').removeClass('hidden');
        }
          $('.add-error').text('Please Fill All Feild...');
    }
  }
        else if(mode=='Direct'){
        if(Direct!=''){
     $('#add_Check_type').val(Direct);
    $('#add_branch').val('');$('#add_bank').val('');$('#add_Check_number').val('');
  }else{
    if ($('.add-error').hasClass('hidden')) {
           $('.add-error').removeClass('hidden');
        }
          $('.add-error').text('Please Fill All Feild...');
  }
}
if ($('input[name=publishtime]').val()==''){
  if (!$('.add-success').hasClass('hidden')) {
       
          $('.add-success').addClass('hidden');
        }  
         if ($('.add-error').hasClass('hidden')) {
           $('.add-error').removeClass('hidden');
        }
          $('.add-error').text('Please Fill All Feild...');
}

      $.ajax({
      type: 'POST',
      url: 'addearning',
      data: {
        '_token': $('input[name=_token]').val(),
        'fee_type': fee_type,
        'mode': mode,
        'Check_type':$('#add_Check_type').val(),
        'bank': bank,
        'branch': branch,
        'Check_number': Check_number,
        'amount': amount,
        'name': $('input[name=add_name]').val(),
        'sid': $('input[name=add_sid]').val(),
        'f_name': $('input[name=add_f_name]').val(),
        'publishtime': $('input[name=publishtime]').val(),
        'class': $('input[name=add_class]').val(),
        'year': $('input[name=add_year]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if ($('.add-success').hasClass('hidden')) {
        }else {
          $('.add-success').addClass('hidden');
        }  
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
        
        }else{
          if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden'); }
          $('.add-success').removeClass('hidden');
    $('#add_fee_type').val('');
    $('#add_mode').val('');
    $('#add_Direct').val('');
    $('#add_Check_number').val('');
    $('#add_Check_type').val('');
    $('#add_branch').val('');
    $('#add_bank').val('');
    $('#add_Check_number').val('');
    $('#add_amount').val('');
    $('#add_name').val('');
    $('#add_sid').val('');
    $('#add_f_name').val('');
     $('#add_class').val('');
   $('#add_year').val('');
    $('#add').modal('hide');
     $('#dtp_input1').val('');
    $('#dtp_in').val('');
  }
   $("#loading").fadeOut(500);
    },
    })
    });


  $('#add_mode').on('change',function() {
    var year=$('#add_mode option:selected').val();
    if(year=='Check'){
       if ($('#Direct_div').hasClass('hidden')) {
        }else {
          $('#Direct_div').addClass('hidden');}
     if ($('#Check_div').hasClass('hidden')) {
          $('#Check_div').removeClass('hidden');}
          $('#add_Direct').val('');
          $('#add_Check_number').val('');
          $('#add_Check_type').val('');
          $('#add_branch').val('');
          $('#add_bank').val('');
          $('#add_Check_number').val('');
          $('#add_amount').val('');
    }
    else if(year=='Cash'){
       if ($('#Direct_div').hasClass('hidden')) {
        }else {
          $('#Direct_div').addClass('hidden'); }
          if ($('#Check_div').hasClass('hidden')) {
        }else {
          $('#Check_div').addClass('hidden'); }
            $('#add_Direct').val('');
          $('#add_Check_number').val('');
          $('#add_Check_type').val('');
          $('#add_branch').val('');
          $('#add_bank').val('');
          $('#add_Check_number').val('');
          $('#add_amount').val('');
}
    else if(year=='Direct'){
       if ($('#Check_div').hasClass('hidden')) {
        }else {
          $('#Check_div').addClass('hidden'); }

      if ($('#Direct_div').hasClass('hidden')) {
          $('#Direct_div').removeClass('hidden'); }
           $('#add_Direct').val('');
          $('#add_Check_number').val('');
          $('#add_Check_type').val('');
          $('#add_branch').val('');
          $('#add_bank').val('');
          $('#add_Check_number').val('');
          $('#add_amount').val('');
    }
  });

$(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+') earning....');
    $('#delete-id').text($(this).data('id'));
    
});
 $(document).on('click', '#delete_earning', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: 'deleteearning',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#delete-id').text(),
    },
    success: function(data){
  
    $('.user'+$('#delete-id').text()).hide();
    $('#delete').modal('hide');
     $("#loading").fadeOut(500);
    }
  });
});
 $(document).on('click', '#show-button', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
    var sid = $(this).data('sid');
 var img ="<?php echo e(route('account-student_earning',['sid'=>':sid'])); ?>";
    var img = img.replace('%3Asid',sid);
    $.get(img,function(data){
          $('#show_body').empty().html(data);
    })
     $("#loading").fadeOut(500);
});

 $(document).on('click', '#print', function() {
 $('#show_body').printThis({
     debug: false,              
     importCSS: true,          
      printContainer: true,     
      pageTitle: "",            
      removeInline: false   
 });
});

 $(document).on('click', '#print_pdf', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
     $("#loading").fadeOut(500);
 
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account/earning_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>