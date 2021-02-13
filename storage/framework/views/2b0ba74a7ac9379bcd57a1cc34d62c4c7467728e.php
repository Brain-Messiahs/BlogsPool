
           <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Paper Name</th>
                <th class="column3">Cl.|Co.|Co.t.|Gr.</th>
                <th class="column4">Publish Time</th>
                <th class="column5">Edit</th>
                <th class="column6">Delete</th>
              </tr>
                </thead>
                <tbody>
   <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->paper); ?></strong></td>
                  <td class="column3"><strong><?php echo e($user->classid.'|'.$user->courseid.'|'.$user->coursetypeid.'|'. $user->groupid); ?></strong></td>
                    <td class="column4"><strong><?php echo e($user->publishtime); ?></strong></td>
                 <td class="column5"><a style="color: #fff" href="<?php echo e(route('admin-uploaded_paper_edit',['id'=>$user->id])); ?>"> <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></a></td>
                 <td class="column6"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->paper); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></td>   
                          </tr>   
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>
        