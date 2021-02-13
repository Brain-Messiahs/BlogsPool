   <?php  $no=1; ?>
   <h2>Payment Details</h3>
    <?php $sum = 0; $sid="";?>
<table>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($no==1): ?>

<div id="div" style="width: auto; margin: 5px 5px 5px 5px; border-radius: 8px;background-color: rgba(244,132,83,0.8);">
 <h4>student Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;<?php echo e($user->name); ?></h4>
 <h4>Father,s Name&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo e($user->f_name); ?></h4>
 <h4>Total Fee&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo e($total); ?></h4>
 <h4 id="amount"></h4>
  <h4 id="remain"></h4>
 <?php if($total!=$total1): ?> <h4 class="btn-danger">Here is a Calculation Mistake in Between total Fee & Instalment</h4><?php endif; ?>
 <li style="height: 2px; background-color: #d9d9d9;list-style: none;"></li>
</div>
<?php endif; ?>
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
<?php $sid = $user->sid; $sum = $sum + $user->amount; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
 </div>
  <div class="modal-footer">
     <a href="student_earning_pdf?sum=<?php echo e($sum); ?>&sid=<?php echo e($sid); ?>" style="float: left;"><i class="fa fa-file-pdf-o fa-2x" style="color: #ff5c33; size: 16px"></i></a>

            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
            <script type="text/javascript">
  
    document.getElementById("amount").innerHTML = "Total Payed&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo e($sum); ?>";
    document.getElementById("remain").innerHTML = "Remain&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo e($total-$sum); ?>";
    
  
</script>
<style type="text/css">
	table{
		padding-left: 40px;
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
