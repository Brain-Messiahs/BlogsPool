 
 <table id="table" class="table table-bordered" style="margin-right: 20px">
  <thead>
    <tr>
       <th scope="col">S.no.</th>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
       <th scope="col">Reg. By</th>
      <th scope="col">Mode</th>
      <th scope="col">Balace Type</th>
      <th scope="col">Bank</th>
       <th scope="col">Branch</th>
        <th scope="col">Cheque No.</th>
         <th scope="col">Earnings</th>
          <th scope="col">Expences</th>
           <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody class="tbody">
    <?php $no=1; $ern=0; $exp =0; $total=0;?>
    <?php if(isset($earnings)): ?>
    <?php $__currentLoopData = $earnings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $earning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr date="<?php echo e(strtotime($earning->publishtime)); ?>">
      <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e($earning->publishtime); ?></td>
      <td><?php echo e($earning->fee_type); ?></td>
     <td><?php if($earning->name!=""): ?><?php echo e($earning->name); ?><?php else: ?>--<?php endif; ?></td>
      <td><?php if($earning->description!=""): ?><?php echo e($earning->description); ?><?php else: ?>--<?php endif; ?></td>
       <td><?php echo e($earning->reg_name); ?></td>
        <td><?php echo e($earning->mode); ?></td>
         <td><?php echo e($earning->check_type); ?></td>
      <td><?php if($earning->bank!=""): ?><?php echo e($earning->bank); ?> <?php else: ?>--<?php endif; ?></td>
         <td><?php if($earning->Branch!=""): ?><?php echo e($earning->branch); ?> <?php else: ?>--<?php endif; ?></td>
             <td><?php if($earning->check_number!=""): ?><?php echo e($earning->check_number); ?> <?php else: ?>--<?php endif; ?></td>
              <td><?php echo e($earning->amount); ?></td>
              <?php $ern=$ern+$earning->amount;$total=$total+$earning->amount?>
               <td>--</td>
                <td><?php echo e($total); ?></td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php endif; ?>
     <?php if(isset($expenses)): ?>
      <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr date="<?php echo e(strtotime($earning->publishtime)); ?>">
       <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e($expense->publishtime); ?></td>
      <td><?php echo e($expense->type); ?></td>
     <td><?php if($expense->name!=''): ?><?php echo e($expense->name); ?><?php elseif($expense->tname!=''): ?><?php echo e($expense->tname); ?><?php else: ?>--<?php endif; ?></td>
      <td><?php echo e($expense->description); ?></td>
       <td><?php echo e($expense->reg_name); ?></td>
        <td><?php echo e($expense->mode); ?></td>
         <td><?php echo e($expense->check_type); ?></td>
      <td><?php if($expense->bank!=""): ?><?php echo e($expense->bank); ?> <?php else: ?>--<?php endif; ?></td>
         <td><?php if($expense->Branch!=""): ?><?php echo e($expense->branch); ?> <?php else: ?>--<?php endif; ?></td>
             <td><?php if($expense->Check_number!=""): ?><?php echo e($expense->Check_number); ?> <?php else: ?>--<?php endif; ?></td>
              <td>--</td>
              <td><?php echo e($expense->amount); ?></td>
              <?php $exp=$exp+$expense->amount;$total=$total-$expense->amount?>
                <td><?php echo e($total); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <tr class="btn-danger" style="color: #fff;background-color: #d9534f;border-color: #d43f3a;"><td colspan="11">Total Balance</td><td><?php echo e($ern); ?></td><td><?php echo e($exp); ?></td><td><?php echo e($total); ?></td></tr>
  </tbody>
</table>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
   var tb = $('.tbody');
    var rows = tb.find('tr');
    rows.sort(function(a, b) {
        var keyA = $(a).attr('date');
        var keyB = $(b).attr('date');
        return keyA - keyB;
    });
    $.each(rows, function(index, row) {
        tb.append(row);
    });
</script>