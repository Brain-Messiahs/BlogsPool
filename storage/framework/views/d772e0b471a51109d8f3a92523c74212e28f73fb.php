
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Class</th>
                <th class="column4">course</th>
                <th class="column5">Paper</th>
                 <th class="column6"></th>
                  <th class="column7"></th>
                </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->active==1): ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->name); ?></strong></td>
                  <td class="column3"><strong><?php echo e($user->classid); ?></strong></td>
                  <td class="column4"><strong><?php echo e($user->courseid); ?></strong></td>
                  <td class="column5"><strong><?php echo e($user->paper); ?></strong></td>
                  <td class="column6"><?php if($user->rank!=''): ?>
                    <a>AIR <?php echo e($user->rank); ?></a><?php endif; ?></td>
                  <td class="column6" style="padding: 5px 5px 5px 5px;cursor:pointer;" ><strong><a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->pname); ?>">RESULT</a></strong></td>
                  <td class="column7"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->paper); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></td>  
                  </tr>   
                   <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>
       