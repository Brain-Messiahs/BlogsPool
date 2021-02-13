<table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Paper Name</th>
                <th class="column3">Class</th>
                <th class="column4">Course</th>
                <th class="column5">Course Type</th>
                <th class="column6">Group</th>
                <th class="column7">Total</th>
                <th class="column8">Results</th>
                <th class="column9">Summary</th>
              </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php $rn=0;?>
       <?php $__currentLoopData = $counts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($count->plid==$user->id): ?>
        <?php $rn++ ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->active==1): ?>
                  <tr class="<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->paper); ?></strong></td>
                  <td class="column3"><strong><?php echo e($user->classid); ?></strong></td>
                  <td class="column4"><strong><?php echo e($user->courseid); ?></strong></td>
                  <td class="column5"><strong><?php echo e($user->coursetypeid); ?></strong></td>
                  <td class="column6"><strong><?php echo e($user->groupid); ?></strong></td>
                  <td class="column7"><strong><?php echo e($rn); ?></strong></td>
                 <td class="column8"><a style="color: #fff" class="btn btn-warning" href="<?php echo e(route('admin-paper_result',['id'=>$user->id])); ?>">Result</a></td>
                 <td class="column9"><a href="<?php echo e(route('admin-paper_link_summary',['id'=>$user->id])); ?>"><i style="color: #fd6e70" class="glyphicon glyphicon-download"></i></a></td>
            </tr> 
            <?php endif; ?>  
            </tbody>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
   <p><?php echo e($users->links()); ?></p>