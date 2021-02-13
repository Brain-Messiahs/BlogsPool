<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainexpenses.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Expenses</b>
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
                <th class="column2">Name</th>
                <th class="column3">Type</th>
                 <th class="column4">Mode</th>
                  <th class="column5">Balance Type</th>
                <th class="column6">Cheque Number</th>
                <th class="column7">Amount</th>
                 <th class="column8">Reg. By</th>
                <th class="column9">Delete</th>
                </tr>
                </thead>
                <tbody class="tbody">
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"> <?php if($user->tname!=''): ?><?php echo e($user->tname); ?><?php elseif($user->name!=''): ?><?php echo e($user->name); ?><?php else: ?>--<?php endif; ?></td>
          <td class="column3"> <?php if($user->type==''): ?>--<?php else: ?><?php echo e($user->type); ?><?php endif; ?></td>
           <td class="column4"><?php if($user->mode==''): ?>--<?php else: ?><?php echo e($user->mode); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->check_type==''): ?>--<?php else: ?><?php echo e($user->check_type); ?><?php endif; ?></td>
           <td class="column6"><?php if($user->check_number==''): ?>--<?php else: ?><?php echo e($user->check_number); ?><?php endif; ?></td>
           <td class="column7"><?php if($user->amount==''): ?>--<?php else: ?><?php echo e($user->amount); ?><?php endif; ?></td>
            <td class="column8"><?php if($user->reg_name==''): ?>--<?php else: ?><?php echo e($user->reg_name); ?><?php endif; ?></td>
           <td class="column9"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->tname); ?>">
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

   $('#type').on('change', function() {
    var v = $(this).val();
    if(v=='Salary'){
       if ($('#Salary_div').hasClass('hidden')) {
          $('#Salary_div').removeClass('hidden');
        }
          if (!$('#Rents_div').hasClass('hidden')) {
          $('#Rents_div').addClass('hidden');}
          $('#name').val('');
    }
  else if(v=='Rents'||v=='Advertiesment'){
       if (!$('#Salary_div').hasClass('hidden')) {
          $('#Salary_div').addClass('hidden'); }
          if ($('#Rents_div').hasClass('hidden')) {
          $('#Rents_div').removeClass('hidden'); }
          $('#teach option[value=""]').prop('selected', 'selected').change();
          $('#nonteach option[value=""]').prop('selected', 'selected').change();
      }
      else if(v=='Bills'||v=='Purchase'){
       if (!$('#Salary_div').hasClass('hidden')) {
          $('#Salary_div').addClass('hidden'); }
          if ($('#Rents_div').hasClass('hidden')) {
          $('#Rents_div').removeClass('hidden');
        } 
        $('#teach option[value=""]').prop('selected', 'selected').change();
        $('#nonteach option[value=""]').prop('selected', 'selected').change();
      }
      else if(v=='Regular'){
       if (!$('#Salary_div').hasClass('hidden')) {
          $('#Salary_div').addClass('hidden'); }
          if (!$('#Rents_div').hasClass('hidden')) {
          $('#Rents_div').addClass('hidden'); }
          $('#mode').val('Cash');
          $('#name').val('');
          $('#teach option[value=""]').prop('selected', 'selected').change();
          $('#nonteach option[value=""]').prop('selected', 'selected').change();
          if ($('#amount_div').hasClass('hidden')) {
          $('#amount_div').removeClass('hidden');
        }
      }
  });
  
   $('input[type=radio][name=teacher_type]').on('change', function() {

var v = $(this).val();
if(v=='Teaching'){
  if (!$('#non_teaching').hasClass('hidden')) {
          $('#non_teaching').addClass('hidden');
        }
         if ($('#teaching').hasClass('hidden')) {
          $('#teaching').removeClass('hidden');
        }
         $('#nonteach option[value=""]').prop('selected', 'selected').change();
}
if(v=='Non Teaching'){
  if ($('#teaching').hasClass('hidden')) {
        }else {
          $('#teaching').addClass('hidden');
        }
         if ($('#non_teaching').hasClass('hidden')) {
          $('#non_teaching').removeClass('hidden');
        }
        $('#teach option[value=""]').prop('selected', 'selected').change();
}
});


   $('#mode').on('change', function() {
    var v = $('#mode').val();
    if(v=='Cheque'){
         if ($('#Check_div').hasClass('hidden')) {
          $('#Check_div').removeClass('hidden');
        }
        if ($('#amount_div').hasClass('hidden')) {
          $('#amount_div').removeClass('hidden');
        }
        if (!$('#Direct_div').hasClass('hidden')) {
          $('#Direct_div').addClass('hidden');
        }
}
if(v=='Cash'){
  if (!$('#Check_div').hasClass('hidden')) {
          $('#Check_div').addClass('hidden');
        }
          if ($('#amount_div').hasClass('hidden')) {
          $('#amount_div').removeClass('hidden');
        }
        $('#check_type option[value=""]').prop('selected', 'selected').change();
         $('input[name=bank]').val('');
         $('input[name=branch]').val('');
        $('input[name=check_number]').val('');

}
if(v=='Direct'){
  if (!$('#Check_div').hasClass('hidden')) {
          $('#Check_div').addClass('hidden');
        }
         if ($('#Direct_div').hasClass('hidden')) {
          $('#Direct_div').removeClass('hidden');
        }
          if ($('#amount_div').hasClass('hidden')) {
          $('#amount_div').removeClass('hidden');
        }
        $('#check_type option[value=""]').prop('selected', 'selected').change();
         $('input[name=bank]').val('');
         $('input[name=branch]').val('');
        $('input[name=check_number]').val('');

}
   });




 $(document).on('click', '#add_details', function() {
  var err=0; var name=''; var id='';
  if($('#type option:selected').val()==''||$('#mode option:selected').val()==''){
     var err = 1;
       if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
         }  
  }
  if($('#dtp_input1').val()==''){
     var err = 1;
       if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
         }  
    }
  if($('#type option:selected').val()=='Salary'){
   if($('#teach option:selected').val()==''&& $('#nonteach option:selected').val()==''){
     var err = 1;
  if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
}
}
else{
  if($('#teach option:selected').val()!=''){
   var name = $('#teach option:selected').val();
  var id =$('#teach option:selected').data('id');
}
 else if($('#nonteach option:selected').val()!=''){
   var name = $('#nonteach option:selected').val();
  var id = $('#nonteach option:selected').data('id');
}
}
}
else if($('#type option:selected').val()!='Salary' && $('#type option:selected').val()!='Regular'){
  if($('input[name=name]').val()==''){
    var err = 1;
  if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
}
}
   } 
 if($('#mode option:selected').val()=='Cheque'){
    if($('#check_type option:selected').val()==''||$('input[name=bank]').val()==''||$('input[name=branch]').val()==''||$('input[name=check_number]').val()==''||$('input[name=description]').val()==''||$('input[name=amount]').val()==''){
       var err = 1;
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
           
         }  
    }
  }
  else if($('#mode option:selected').val()=='Cash'){
    if($('input[name=amount]').val()==''||$('input[name=description]').val()==''){
       var err = 1;
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
         
         }  
    }

  }
   else if($('#mode option:selected').val()=='Direct'){
    if($('input[name=amount]').val()==''||$('input[name=description]').val()==''||$('#bcash option:selected').val()==''){
       var err = 1;
     if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
         }  if ($('.add-error').hasClass('hidden')) {
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
         
         }  
    }
    else{
      $('#check_type').val($('#bcash option:selected').val());
    }

  }
if(err==0){
      $.ajax({
      type: 'POST',
      url: 'addexpenses',
      data: {
        '_token': $('input[name=_token]').val(),
        'type': $('#type option:selected').val(),
        'mode':$('#mode option:selected').val(),
        'teacher_name':name,
         'tid': id,
         'name': $('input[name=name]').val(),
        'check_type':$('#check_type option:selected').val(),
        'bank': $('input[name=bank]').val(),
        'branch': $('input[name=branch]').val(),
        'check_number': $('input[name=check_number]').val(),
        'amount':$('input[name=amount]').val(),
        'description': $('input[name=description]').val(),
        'publishtime': $('input[name=publishtime]').val()
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
    $('#type').val('');
    $('#mode').val('');
    $('#teach').val('');
     $('#nonteach').val('');
    $('#check_type').val('');
    $('#branch').val('');
    $('#bank').val('');
    $('#check_number').val('');
    $('#amount').val('');
    $('#name').val('');
     $('#bcash').val('');
     $('#description').val('');
    $('#dtp_input1').val('');
     var loading = document.getElementById('loading');
    loading.style.display='';
    var img ="<?php echo e(route('account-expense_reload')); ?>";
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
  
     }
    },
    })
    }
    });

$(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete This expense....');
    $('#delete-id').text($(this).data('id'));
    
});     
  $(document).on('click', '#delete_expenses', function() {
   var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: 'deleteexpenses',
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account/expenses_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>