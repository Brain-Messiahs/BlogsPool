 <table class="table table-bordered" style="margin-right: 20px">
  <thead>
    <tr>
      <?php if(app('request')->input('id')=='all'): ?>
       <th scope="col">S.no.</th>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Mode</th>
      <th scope="col">Inspire's A/c</th>
      <th scope="col">Varsha's A/c</th>
      <th scope="col">Sahu's A/c</th>
      <th scope="col">Custom1's A/c</th>
      <th scope="col">Custom2's A/c</th>
      <th scope="col">Cash</th>
<?php else: ?>
      <th scope="col">S.no.</th>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Mode</th>
       <?php if(app('request')->input('id')=="Inspire's A/c"): ?><th scope="col">Inspire's A/c</th>
      <?php elseif(app('request')->input('id')=="Varsha's A/c"): ?><th scope="col">Varsha's A/c</th>
      <?php elseif(app('request')->input('id')=="Sahu's A/c"): ?><th scope="col">Sahu's A/c</th>
      <?php elseif(app('request')->input('id')=="Custom1's A/c"): ?><th scope="col">Custom1's A/c</th>
     <?php elseif(app('request')->input('id')=="Custom2's A/c"): ?><th scope="col">Custom2's A/c</th>
      <?php elseif(app('request')->input('id')=="Cash"): ?><th scope="col">Cash</th><?php endif; ?>
<?php endif; ?>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; $ins=0; $vrs =0; $Custom2=0; $Sahu=0; $Custom1=0; $cash=0;?>
    <?php $__currentLoopData = $earnings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $earning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e($earning->publishtime); ?></td>
       <td>Earning</td>
      <td><?php echo e($earning->fee_type); ?></td>
     <td><?php echo e($earning->name); ?></td>
      <td><?php echo e($earning->mode); ?></td>
       <?php if(app('request')->input('id')=="all"): ?>
      <td><?php if($earning->check_type=="Inspire's A/c"||$earning->check_type=="Inspire's Check"): ?><?php echo e($earning->amount); ?><?php $ins =$ins+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($earning->check_type=="Varsha's A/c"||$earning->check_type=="Varsha's Check"): ?><?php echo e($earning->amount); ?><?php $vrs =$vrs+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <td><?php if($earning->check_type=="Sahu's A/c"): ?><?php echo e($earning->amount); ?><?php $Sahu =$Sahu+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($earning->check_type=="Custom1's A/c"||$earning->check_type=="Custom1's Check"): ?><?php echo e($earning->amount); ?><?php $Custom1 =$Custom1+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($earning->check_type=="Custom2's A/c"||$earning->check_type=="Custom2's Check"): ?><?php echo e($earning->amount); ?><?php $Custom2 =$Custom2+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
       <td><?php if($earning->mode=="Cash"): ?><?php echo e($earning->amount); ?><?php $cash =$cash+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php else: ?>
      <?php if(app('request')->input('id')=="Inspire's A/c"): ?><td><?php if($earning->check_type=="Inspire's A/c"||$earning->check_type=="Inspire's Check"): ?><?php echo e($earning->amount); ?><?php $ins =$ins+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Varsha's A/c"): ?><td><?php if($earning->check_type=="Varsha's A/c"||$earning->check_type=="Varsha's Check"): ?><?php echo e($earning->amount); ?><?php $vrs =$vrs+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Sahu's A/c"): ?> <td><?php if($earning->check_type=="Sahu's A/c"): ?><?php echo e($earning->amount); ?><?php $Sahu =$Sahu+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
       <?php elseif(app('request')->input('id')=="Custom1's A/c"): ?><td><?php if($earning->check_type=="Custom1's A/c"||$earning->check_type=="Custom1's Check"): ?><?php echo e($earning->amount); ?><?php $Custom1 =$Custom1+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Custom2's A/c"): ?><td><?php if($earning->check_type=="Custom2's A/c"||$earning->check_type=="Custom2's Check"): ?><?php echo e($earning->amount); ?><?php $Custom2 =$Custom2+$earning->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Cash"): ?><td><?php if($earning->mode=="Cash"): ?><?php echo e($earning->amount); ?><?php $cash =$cash+$earning->amount;?> <?php else: ?>--<?php endif; ?></td><?php endif; ?>
      <?php endif; ?>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
      <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e($expense->publishtime); ?></td>
       <td>Expense</td>
      <td><?php echo e($expense->description); ?></td>
     <td><?php if($expense->tname!=''): ?><?php echo e($expense->tname); ?><?php elseif($expense->name!=''): ?><?php echo e($expense->name); ?><?php else: ?>--<?php endif; ?></td>
      <td><?php echo e($expense->mode); ?></td>
      <?php if(app('request')->input('id')=="all"): ?>
      <td><?php if($expense->check_type=="Inspire's A/c"||$expense->check_type=="Inspire's Check"): ?><?php echo e($expense->amount); ?><?php $ins =$ins-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($expense->check_type=="Varsha's A/c"||$expense->check_type=="Varsha's Check"): ?><?php echo e($expense->amount); ?><?php $vrs =$vrs-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
      <td><?php if($expense->check_type=="Sahu's A/c"): ?><?php echo e($expense->amount); ?><?php $Sahu =$Sahu-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($expense->check_type=="Custom1's A/c"||$expense->check_type=="Custom1's Check"): ?><?php echo e($expense->amount); ?><?php $Custom1 =$Custom1-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
     <td><?php if($expense->check_type=="Custom2's A/c"||$expense->check_type=="Custom2's Check"): ?><?php echo e($expense->amount); ?><?php $Custom2 =$Custom2-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
       <td><?php if($expense->mode=="Cash"): ?><?php echo e($expense->amount); ?><?php $cash =$cash-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php else: ?>
      <?php if(app('request')->input('id')=="Inspire's A/c"): ?><td><?php if($expense->check_type=="Inspire's A/c"||$expense->check_type=="Inspire's Check"): ?><?php echo e($expense->amount); ?><?php $ins =$ins-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Varsha's A/c"): ?><td><?php if($expense->check_type=="Varsha's A/c"||$expense->check_type=="Varsha's Check"): ?><?php echo e($expense->amount); ?><?php $vrs =$vrs-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
       <?php elseif(app('request')->input('id')=="Sahu's A/c"): ?> <td><?php if($expense->check_type=="Sahu's A/c"): ?><?php echo e($expense->amount); ?><?php $Sahu =$Sahu-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Custom1's A/c"): ?><td><?php if($expense->check_type=="Custom1's A/c"||$expense->check_type=="Custom1's Check"): ?><?php echo e($expense->amount); ?><?php $Custom1 =$Custom1-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
      <?php elseif(app('request')->input('id')=="Custom2's A/c"): ?><td><?php if($expense->check_type=="Custom2's A/c"||$expense->check_type=="Custom2's Check"): ?><?php echo e($expense->amount); ?><?php $Custom2 =$Custom2-$expense->amount;?> <?php else: ?>--<?php endif; ?></td>
       <?php elseif(app('request')->input('id')=="Cash"): ?><td><?php if($expense->mode=="Cash"): ?><?php echo e($expense->amount); ?><?php $cash =$cash-$expense->amount;?> <?php else: ?>--<?php endif; ?></td><?php endif; ?>
       <?php endif; ?>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php if(app('request')->input('id')=="all"): ?>
    <tr class="btn-danger" style="color: #fff;background-color: #d9534f;border-color: #d43f3a;"><td colspan="6">Total Remain Balance</td><td><?php echo e($ins); ?></td><td><?php echo e($vrs); ?></td><td><?php echo e($Sahu); ?></td><td><?php echo e($Custom1); ?></td><td><?php echo e($Custom2); ?></td><td><?php echo e($cash); ?></td></tr>
    <?php else: ?>
    <tr class="btn-danger" style="color: #fff;background-color: #d9534f;border-color: #d43f3a;"><td colspan="6">Total Remain Balance</td> <?php if(app('request')->input('id')=="Inspire's A/c"): ?><td><?php echo e($ins); ?></td> <?php elseif(app('request')->input('id')=="Varsha's A/c"): ?><td><?php echo e($vrs); ?></td><?php elseif(app('request')->input('id')=="Sahu's A/c"): ?><td><?php echo e($Sahu); ?></td> <?php elseif(app('request')->input('id')=="Custom1's A/c"): ?><td><?php echo e($Custom1); ?></td> <?php elseif(app('request')->input('id')=="Custom2's A/c"): ?><td><?php echo e($Custom2); ?></td> <?php elseif(app('request')->input('id')=="Cash"): ?><td><?php echo e($cash); ?></td><?php endif; ?></tr>
    <?php endif; ?>
  </tbody>
</table>
