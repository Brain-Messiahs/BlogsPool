<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainnr_ans_upload.css')); ?>">
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>