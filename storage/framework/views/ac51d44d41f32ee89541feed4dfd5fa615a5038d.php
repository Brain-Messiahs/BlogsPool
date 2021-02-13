<?php $__env->startSection('popup'); ?>
<div id="p_delete" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Update Results</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
            <?php echo csrf_field(); ?>
             <h4 id="p_delete-name"></h4>
           <p id="p_delete-id" class="hidden"></p>
            <p id="p_delete-pid" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="p_delete-student">
             Update
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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainadv_ans_upload_update.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Upload Answer</b></h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                 <th class="column2">Q.Name</th>
                <th class="column3">Options</th>
                </tr>
                </thead>
             <tbody>
      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->type=='single'||$user->type=='passage'||$user->type=='match_column'): ?>
        <tr class="user<?php echo e($user->qid); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
                        <td class="column2"><?php echo e($user->qid); ?></td><?php if($user->q1==''): ?>
                                    <td class="column3">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column4">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column5">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column6">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                    <td class="column7"></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='A'): ?>
                                    <td class="column3">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A' checked></td>
                                    <td class="column4">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column5">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column6">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                    <td class="column7"></td>
                                    <?php endif; ?>
                                   <?php if($user->q1=='B'): ?>
                                    <td class="column3">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column4">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B' checked></td>
                                    <td class="column5">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column6">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                    <td class="column7"></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='C'): ?>
                                    <td class="column3">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column4">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column5">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C' checked></td>
                                    <td class="column6">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                    <td class="column7"></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='D'): ?>
                                    <td class="column3">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column4">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column5">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column6">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D' checked></td>
                                    <td class="column7"></td>
                                    <?php endif; ?>   
                    <td class="column8"><a id="p_delete-button" class="btn btn-info" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->qid); ?>" data-pid="<?php echo e($user->pid); ?>" data-id="<?php echo e($user->qid); ?>">Res. Update</a></td></tr>
                    <?php endif; ?>
                     <?php if($user->type=='multiple'): ?>
                     <tr class="user<?php echo e($user->qid); ?>">
                     <td class="column1"><?php echo e($no++); ?></td>
                        <td class="column2"><?php echo e($user->qid); ?></td>
                                    <td class="column3">A <input type='checkbox' name='<?php echo e($user->qpqtypeid); ?>' value='A' <?php if($user->q1=='A'): ?> checked <?php endif; ?>></td>
                                    <td class="column4">B <input type='checkbox' name='<?php echo e($user->qpqtypeid); ?>' value='B' <?php if($user->q2=='B'): ?> checked <?php endif; ?>></td>
                                    <td class="column5">C <input type='checkbox' name='<?php echo e($user->qpqtypeid); ?>' value='C' <?php if($user->q3=='C'): ?> checked <?php endif; ?>></td>
                                    <td class="column6">D <input type='checkbox' name='<?php echo e($user->qpqtypeid); ?>' value='D' <?php if($user->q4=='D'): ?> checked <?php endif; ?>></td> 
                                    <td class="column7"><button type='submit' class="btn btn-warning" id='<?php echo e($user->qpqtypeid); ?>'>OK</button></td>
                                 <td class="column8"><a id="p_delete-button" class="btn btn-info" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->qid); ?>" data-pid="<?php echo e($user->pid); ?>" data-id="<?php echo e($user->qid); ?>">Res. Update</a></td></tr>
                    <?php endif; ?>
                     <?php if($user->type=='integer'): ?>
                     <tr class="user<?php echo e($user->qid); ?>">
                     <td class="column1"><?php echo e($no++); ?></td>
                        <td class="column2"><?php echo e($user->qid); ?></td>
                        <td class="column3"><input type='number' id="in1put<?php echo e($user->qpqtypeid); ?>" min="0" max="9" placeholder="0" value="<?php echo e($user->q1); ?>" name='<?php echo e($user->qpqtypeid); ?>' ></td>
                        <td class="column4"><button type='submit' class="btn btn-info" id='<?php echo e($user->qpqtypeid); ?>'>OK</button></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                        <td class="column7"></td>
                        <td class="column8"><a id="p_delete-button" class="btn btn-info" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->qid); ?>" data-pid="<?php echo e($user->pid); ?>" data-id="<?php echo e($user->qid); ?>">Res. Update</a></td></tr>
                    <?php endif; ?>
                    <?php if($user->type=='numerical'): ?>
                     <tr class="user<?php echo e($user->qid); ?>">
                     <td class="column1"><?php echo e($no++); ?></td>
                        <td class="column2"><?php echo e($user->qid); ?></td>
                        <td class="column3"><input type='number' id="in2put<?php echo e($user->qpqtypeid); ?>" step="0.001" placeholder="0.000" name='<?php echo e($user->qpqtypeid); ?>' value="<?php echo e($user->q1); ?>"></td>
                        <td class="column4"><input type='number' id="in3put<?php echo e($user->qpqtypeid); ?>" step="0.001" placeholder="0.000" name='<?php echo e($user->qpqtypeid); ?>' value="<?php echo e($user->q2); ?>"></td>
                        <td class="column5"><button type='submit' class="btn btn-primary" id='<?php echo e($user->qpqtypeid); ?>'>OK</button></td>
                        <td class="column6"></td>
                        <td class="column7"></td>
                        <td class="column8"><a id="p_delete-button" class="btn btn-info" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->qid); ?>" data-pid="<?php echo e($user->pid); ?>" data-id="<?php echo e($user->qid); ?>">Res. Update</a></td></tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
          </table>

  </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($user->type=='single'||$user->type=='passage'||$user->type=='match_column'): ?>
  $('input:radio[name="<?php echo e($user->qpqtypeid); ?>"]').change(function() {
   var qpqtypeid = '<?php echo e($user->qpqtypeid); ?>';
  var q5 = $(this).val(); var q2=''; var q3=''; var q4='';var q1='';
var loading = document.getElementById('loading');
  loading.style.display='';
     $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
    
});
  <?php endif; ?>
  <?php if($user->type=='multiple'): ?>
  $('#<?php echo e($user->qpqtypeid); ?>').click(function() {
   var qpqtypeid = '<?php echo e($user->qpqtypeid); ?>';
    var q1=''; var q2=''; var q3=''; var q4='';var q5='';
    var loading = document.getElementById('loading');
     loading.style.display='';
  $("input[name='<?php echo e($user->qpqtypeid); ?>']").each(function(){            
               if($(this).val()=='A'){
                if($(this).is(':checked')){
                var q1 = 'A';
              }else{var q1 = 'blank1';}
                 $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
               }
               if($(this).val()=='B'){
                if($(this).is(':checked')){
                var q1 = 'B';
              }else{var q1 = 'blank2';}
                 $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
               }
               if($(this).val()=='C'){
                if($(this).is(':checked')){
                var q1 = 'C';
              }else{var q1 = 'blank3';}
                 $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
               }
               if($(this).val()=='D'){
                if($(this).is(':checked')){
                var q1 = 'D';
              }else{var q1 = 'blank4';}
                 $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
    }
  });  
});
  <?php endif; ?>
  <?php if($user->type=='integer'): ?>
$('#<?php echo e($user->qpqtypeid); ?>').click(function() {
   var qpqtypeid = '<?php echo e($user->qpqtypeid); ?>';
    var q2 = $('#in1put<?php echo e($user->qpqtypeid); ?>').val(); var q5=''; var q3=''; var q4='';var q1='';
var loading = document.getElementById('loading');
  loading.style.display='';
     $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
   });
<?php endif; ?>
 <?php if($user->type=='numerical'): ?>
$('#<?php echo e($user->qpqtypeid); ?>').click(function() {
   var qpqtypeid = '<?php echo e($user->qpqtypeid); ?>';
    var q3 = $('#in2put<?php echo e($user->qpqtypeid); ?>').val(); var q5=''; var q2=''; var q4=$('#in3put<?php echo e($user->qpqtypeid); ?>').val();var q1='';
var loading = document.getElementById('loading');
  loading.style.display='';
     $.ajax({
      type: 'POST',
      url: 'adv_ans_upload_submit',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'q2':q2,
        'q3':q3,
        'q4':q4,
        'q5':q5,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
   });
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
$(document).on('click', '#p_delete-button', function() {
  $('#p_delete').modal({backdrop:'false'});
  $('#p_delete-name').text('Are You sure want to Update Results for ('+$(this).data('name')+')....');
    $('#p_delete-id').text($(this).data('id'));
     $('#p_delete-pid').text($(this).data('pid'));
    
});
 $('#p_delete-student').click(function() {
  var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: '<?php echo e(route('admin-advanced_paper_update_result')); ?>',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#p_delete-id').text(),
      'pid': $('#p_delete-pid').text(),
    },
    success: function(data){
      $('#p_delete').modal('hide');
     $("#loading").fadeOut(500);
    }
  });
});
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>