   <?php  $no=1; ?>
   <h2>Payment Details</h3>
   	<table id="div" style="width: auto; margin: 5px 5px 5px 5px; border-radius: 8px;background-color: rgba(244,132,83,0.8);">
 <tr><td>student Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>:</td><td>&nbsp;&nbsp;&nbsp;<?php echo e($name); ?></td></tr>
 <tr><td>Father,s Name&nbsp;&nbsp;</td><td>:</td><td>&nbsp;&nbsp;&nbsp;<?php echo e($f_name); ?></td></tr>
 <tr><td>Total Fee&nbsp;&nbsp;</td><td>:</td><td>&nbsp;&nbsp;&nbsp;<?php echo e($total); ?></td></tr>
 <tr><td>Total Payed&nbsp;&nbsp;</td><td>:</td><td>&nbsp;&nbsp;&nbsp;<?php echo e($sum); ?></td></tr>
  <tr><td>Remain&nbsp;&nbsp;</td><td>:</td><td>&nbsp;&nbsp;&nbsp;<?php echo e($total-$sum); ?></td></tr>
</table>
<table id="table">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr><td><b>S.No.</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($no++); ?></td></tr>
          <tr><td><b>Academic year</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->year); ?></td></tr>
          <tr><td><b>Class</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->class); ?></td></tr>
          <tr><td><b>Instalment Type </b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->fee_type); ?></td></tr>
          <tr><td><b>Payment Mode</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->mode); ?></td></tr>
           <?php if($user->mode=='Check'): ?>
          <tr><td><b>Check Type</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->check_type); ?></td></tr>
          <tr><td><b>Bank</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->bank); ?></td></tr>
          <tr><td><b>Branch</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->branch); ?></td></tr>
          <tr><td><b>Check Number</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->check_number); ?></td></tr>
                 <?php elseif($user->mode=='Direct'): ?>
          <tr><td><b>To</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->check_type); ?></td></tr>
                 <?php endif; ?>
          <tr><td><b>Amount</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->amount); ?></td></tr>
          <tr><td><b>Submited By</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->reg_name); ?></td></tr>
          <tr><td><b>Submited At</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->created_at); ?></td></tr>

<tr style=" height: 5px;margin-top: 3px;margin-bottom: 3px;background-color: rgba(244,132,83,0.8);"><td></td><td></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<style type="text/css">
	table{
		padding: 10px 50px 10px 50px;
		border: 1px solid black;
		
	}
	
	h4{
		text-align: center;
		padding: 5px 5px 5px 5px;
	}
	h2{
		text-align: center;
		text-decoration: underline;
	}
</style>
