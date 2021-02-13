<?php $__env->startSection('inner_block'); ?>
 
 <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d H:i:s');?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/maininvestment.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Investments</b>
       <a id="add-button" data-toggle="modal" data-target="#add" class="create-modal btn btn-warning" >Add</a>
    </h4> 
</div></div>
<div id="tbody">
  
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" >
           <table id="#table">
            <thead class="thead">
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Description</th>
                <th class="column3">Invested Amount</th>
                 <th class="column4">Clearing Amount</th>
                  <th class="column5">Benefits</th>
                  <th class="column6">Clearing Time</th>
                <th class="column7">Clear This</th>
                </tr>
                </thead>
                <tbody class="tbody">
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"> <?php if($user->description==''): ?>--<?php else: ?><?php echo e($user->description); ?><?php endif; ?></td>
          <td class="column3"> <?php if($user->inv_amount==''): ?>--<?php else: ?><?php echo e($user->inv_amount); ?><?php endif; ?></td>
           <td class="column4"><?php if($user->clear_amount==''): ?>--<?php else: ?><?php echo e($user->clear_amount); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->benefits==''): ?>--<?php else: ?><?php echo e($user->benefits); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->benefits==''): ?>--<?php else: ?><?php echo e($user->publishtime); ?><?php endif; ?></td>
           <td class="column9"> <?php if($user->clear_amount==''): ?><a class="btn btn-info" style="margin-top: 2px; padding: 8.5px 20px 8.5px 20px;" id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-exp_id="<?php echo e($user->exp_id); ?>" data-inv="<?php echo e($user->inv_amount); ?>">Clear</a> <?php else: ?> <a style="margin-top: 2px;"  class="btn btn-warning disabled">Cleared</a><?php endif; ?> 
            </td>
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

 $(document).on('hide.bs.modal', '#delete', function() {
    if ($('.edit-error').hasClass('hidden')) {
        }else {
          $('.edit-error').editClass('hidden');
        }
        if ($('.edit-success').hasClass('hidden')) {
        }else {
          $('.edit-success').addClass('hidden');
        } 
  });

   
   $('#add_mode').on('change', function() {
    var v = $('#add_mode').val();
    if(v=='Cheque'){
         if ($('#add_Check_div').hasClass('hidden')) {
          $('#add_Check_div').removeClass('hidden');
        }
        if ($('#add_amount_div').hasClass('hidden')) {
          $('#add_amount_div').removeClass('hidden');
        }
        if (!$('#add_Direct_div').hasClass('hidden')) {
          $('#add_Direct_div').addClass('hidden'); }
       $('#add_check_type option[value=""]').prop('selected', 'selected').change();
         $('#bcash option[value=""]').prop('selected', 'selected').change();
}
else if(v=='Cash'){
  if (!$('#add_Check_div').hasClass('hidden')) {
          $('#add_Check_div').addClass('hidden');
        }
          if ($('#add_amount_div').hasClass('hidden')) {
          $('#add_amount_div').removeClass('hidden');
        }
        if (!$('#add_Direct_div').hasClass('hidden')) {
          $('#add_Direct_div').addClass('hidden'); }
        $('#add_check_type option[value=""]').prop('selected', 'selected').change();
        $('#bcash option[value=""]').prop('selected', 'selected').change();
         $('input[name=add_bank]').val('');
         $('input[name=add_branch]').val('');
        $('input[name=add_check_number]').val('');

}
else if(v=='Direct'){
       if (!$('#add_Check_div').hasClass('hidden')) {
          $('#add_Check_div').addClass('hidden'); }
      if ($('#add_Direct_div').hasClass('hidden')) {
          $('#add_Direct_div').removeClass('hidden'); }
          if ($('#add_amount_div').hasClass('hidden')) {
          $('#add_amount_div').removeClass('hidden');
        }
          $('#add_check_type option[value=""]').prop('selected', 'selected').change();
        $('#bcash option[value=""]').prop('selected', 'selected').change();
          $('#add_check_number').val('');
          $('#add_branch').val('');
          $('#add_bank').val('');
          $('#add_check_number').val('');
          $('#add_inv_amount').val('');
    }
   });




 $(document).on('click', '#add_details', function() {
  var err=0; var name=''; var id='';
  if($('#add_dtp_input1').val()==''){
     var err = 1;
       if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
         }  
    }
  
 if($('#add_mode option:selected').val()=='Cheque'){
    if($('#add_check_type option:selected').val()==''||$('input[name=add_bank]').val()==''||$('input[name=add_branch]').val()==''||$('input[name=add_check_number]').val()==''||$('input[name=add_description]').val()==''||$('input[name=add_inv_amount]').val()==''){
       var err = 1; 
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
         }  
    }
  }
  else if($('#add_mode option:selected').val()=='Cash'){
    if($('input[name=add_inv_amount]').val()==''||$('input[name=add_description]').val()==''){
       var err = 1; 
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
         
         }  
    }

  }
  else if($('#add_mode option:selected').val()=='Direct'){
    if($('input[name=add_inv_amount]').val()==''||$('input[name=add_description]').val()==''||$('#bcash option:selected').val()==''){
       var err = 1; 
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
         } 

    }else{ $("#add_check_type").val($('#bcash option:selected').val());}

  }
if(err==0){
      $.ajax({
      type: 'POST',
      url: 'add_investment',
      data: {
        '_token': $('input[name=_token]').val(),
        'mode':$('#add_mode option:selected').val(),
        'check_type':$('#add_check_type option:selected').val(),
        'bank': $('input[name=add_bank]').val(),
        'branch': $('input[name=add_branch]').val(),
        'check_number': $('input[name=add_check_number]').val(),
        'inv_amount':$('input[name=add_inv_amount]').val(),
        'description': $('input[name=add_description]').val(),
        'publishtime': $('input[name=add_publishtime]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
        }  
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
        
        }else{
          if (!$('.add-error').hasClass('hidden')) {
          $('.add-error').addClass('hidden'); }
          $('.add-success').removeClass('hidden');
    $('#add_check_number').val('');
   $('#add_check_type').val('');
    $('#add_branch').val('');
    $('#add_bank').val('');
    $('#add_check_number').val('');
    $('#add_mode').val('');
    $('#add_inv_amount').val('');
    $('#bcash').val('');
     $('#add_description').val('');
     $.get("<?php echo e(route('account-investment_reload')); ?>",function(data){
          $('#tbody').empty().html(data);
    })
  
  }

    },
    });
    }
    });


 $(document).on('click', '#delete-button', function() {
    $('#edit_id').val($(this).data('id'));
    $('#edit_amount').val($(this).data('inv'));
});
 $(document).on('click', '#clear_details', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
    var err=0;
   var mode = $('#edit_mode option:selected').val();
   var bank = $('#edit_bank').val();
    var amount = $('#edit_inv_amount').val();
    var branch = $('#edit_branch').val();
    var check_type = $('#edit_check_type option:selected').val();
    var check_number = $('#edit_check_number').val();
    var Direct = $('#edit_Direct option:selected').val();
if (mode==''||amount==''){ 
   var err=1;
     if ($('.edit-success').hasClass('hidden')) {
        }else {
          $('.edit-success').addClass('hidden');
        }  
         if ($('.edit-error').hasClass('hidden')) {
           $('.edit-error').removeClass('hidden');
        }
          $('.edit-error').text('Please Fill All Feild...');
        }
 else if(mode=='Cheque'){
    if(check_type==''||bank==''||branch==''||check_number==''){
      var err=1;
     if (!$('.edit-success').hasClass('hidden')) {
       
          $('.edit-success').addClass('hidden');
        }  
         if ($('.edit-error').hasClass('hidden')) {
           $('.edit-error').removeClass('hidden');
        }
          $('.edit-error').text('Please Fill All Feild...');
    }
  }
        else if(mode=='Direct'){
        if(Direct!=''){
    $("#edit_check_type").val($('#edit_Direct option:selected').val());
    $('#edit_branch').val('');$('#edit_bank').val('');$('#edit_check_number').val('');
  }else{ 
    var err=1;
    if ($('.edit-error').hasClass('hidden')) {
           $('.edit-error').removeClass('hidden');
        }
          $('.edit-error').text('Please Fill All Feild...');
  }
}
if ($('input[name=edit_publishtime]').val()==''){
   var err=1;
  if (!$('.edit-success').hasClass('hidden')) {
       
          $('.edit-success').addClass('hidden');
        }  
         if ($('.edit-error').hasClass('hidden')) {
           $('.edit-error').removeClass('hidden');
        }
          $('.edit-error').text('Please Fill All Feild...');
}
if(err==0){
   
      $.ajax({
      type: 'POST',
      url: 'clear_investment',
      data: {
        '_token': $('input[name=_token]').val(),
         'id': $('input[name=edit_id]').val(),
        'mode': mode,
        'check_type':$('#edit_check_type').val(),
         'description':$('#edit_description').val(),
        'bank': bank,
         'benefits':$('input[name=edit_amount]').val(),
        'branch': branch,
        'check_number': check_number,
        'inv_amount': amount,
        'publishtime': $('input[name=edit_publishtime]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if ($('.edit-success').hasClass('hidden')) {
        }else {
          $('.edit-success').addClass('hidden');
        }  
          $('.edit-error').removeClass('hidden');
          $('.edit-error').text('Please Fill All Feild...');
        
        }else{
          if ($('.edit-error').hasClass('hidden')) {
        }else {
          $('.edit-error').addClass('hidden'); }
          $('.edit-success').removeClass('hidden');
   
    $('#edit_mode').val('');
    $('#edit_Direct').val('');
    $('#edit_check_number').val('');
   $('#edit_check_type').val('');
    $('#edit_description').val('');
    $('#edit_branch').val('');
    $('#edit_bank').val('');
    $('#edit_check_number').val('');
    $('#edit_amount').val('');
     $('#edit_inv_amount').val('');
    $('#edit_id').val('');
    $('#delete').modal('hide');


      $.get("<?php echo e(route('account-investment_reload')); ?>",function(data){
          $('#tbody').empty().html(data);
    })
  }
   $("#loading").fadeOut(500);
    },
    });
    }
    });


  $('#edit_mode').on('change',function() {
    var year=$('#edit_mode option:selected').val();
    if(year=='Cheque'){
       if ($('#Direct_div').hasClass('hidden')) {
        }else {
          $('#Direct_div').addClass('hidden');}
     if ($('#Check_div').hasClass('hidden')) {
          $('#Check_div').removeClass('hidden');}
          $('#edit_Direct').val('');
          $('#edit_check_number').val('');
         $('#edit_check_type option[value=""]').prop('selected', 'selected').change();
          $('#edit_branch').val('');
          $('#edit_bank').val('');
          $('#edit_check_number').val('');
          $('#edit_inv_amount').val('');
    }
    else if(year=='Cash'){
       if ($('#Direct_div').hasClass('hidden')) {
        }else {
          $('#Direct_div').addClass('hidden'); }
          if ($('#Check_div').hasClass('hidden')) {
        }else {
          $('#Check_div').addClass('hidden'); }
            $('#edit_Direct').val('');
          $('#edit_check_number').val('');
          $('#edit_check_type option[value=""]').prop('selected', 'selected').change();
          $('#edit_branch').val('');
          $('#edit_bank').val('');
          $('#edit_check_number').val('');
          $('#edit_inv_amount').val('');
}
    else if(year=='Direct'){
       if ($('#Check_div').hasClass('hidden')) {
        }else {
          $('#Check_div').addClass('hidden'); }

      if ($('#Direct_div').hasClass('hidden')) {
          $('#Direct_div').removeClass('hidden'); }
           $('#edit_check_type option[value=""]').prop('selected', 'selected').change();
           $('#edit_Direct option[value=""]').prop('selected', 'selected').change();
          $('#edit_check_number').val('');
          $('#edit_check_type').val('');
          $('#edit_branch').val('');
          $('#edit_bank').val('');
          $('#edit_inv_amount').val('');
    }
  });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account/investment_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>