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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainnr_ans_upload_update.css')); ?>">
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
      <?php echo e(csrf_field()); ?>

      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="user<?php echo e($user->qid); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
						            <td class="column2"><?php echo e($user->qid); ?></td><?php if($user->q1==''): ?>
                                    <td class="column2">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column3">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column4">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column5">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='A'): ?>
                                    <td class="column2">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A' checked></td>
                                    <td class="column3">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column4">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column5">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                    <?php endif; ?>
                                   <?php if($user->q1=='B'): ?>
                                   <td class="column2">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column3">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B' checked></td>
                                    <td class="column4">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column5">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='C'): ?>
                                    <td class="column2">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column3">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column4">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C' checked></td>
                                    <td class="column5">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D'></td>
                                   <?php endif; ?>
                                   <?php if($user->q1=='D'): ?>
                                    <td class="column2">A <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='A'></td>
                                    <td class="column3">B <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='B'></td>
                                    <td class="column4">C <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='C'></td>
                                    <td class="column5">D <input type='radio' name='<?php echo e($user->qpqtypeid); ?>' value='D' checked></td>
                                    <?php endif; ?> 
                                     <td class="column6"><a id="p_delete-button" class="btn btn-info" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->qid); ?>" data-pid="<?php echo e($user->pid); ?>" data-id="<?php echo e($user->qid); ?>">Res. Update</a></td>  
                    </tr>
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
  $('input:radio[name="<?php echo e($user->qpqtypeid); ?>"]').change(function() {
   var qpqtypeid = '<?php echo e($user->qpqtypeid); ?>';
  var q1 = $(this).val();
var loading = document.getElementById('loading');
  loading.style.display='';
     $.ajax({
      type: 'POST',
      url: 'nr_ans_upload_submit',
      data: {
        '_token': $('input[name=_token]').val(),
        'q1':q1,
        'qpqtypeid':qpqtypeid
      },
      success: function(data){
       $("#loading").fadeOut();
      },
    });
    
});
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
    url: '<?php echo e(route('admin-normal_paper_update_result')); ?>',
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>