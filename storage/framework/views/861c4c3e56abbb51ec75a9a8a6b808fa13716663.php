
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Username</th>
                <th class="column4">class</th>
              <th class="column5">Course</th>
              <th class="column6">Course typ.</th>
              <th class="column7">Group</th>
                 <th class="column8">Recycle</th>
                 <th class="column9">Delete</th>
               </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 0): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->username); ?></td>
          <td class="column4"><?php echo e($user->class); ?></td>
          <td class="column5"><?php echo e($user->course); ?></td>
          <td class="column6"><?php echo e($user->coursetype); ?></td>
          <td class="column7"><?php echo e($user->groupid); ?></td>
         <td class="column8"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->name); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="fa fa-recycle fa-2x" style="color: #30dd8a"></i></a></td>   
             <td class="column9"> <a id="p_delete-button" data-toggle="modal" data-target="#p_delete" data-name="<?php echo e($user->name); ?>" data-id="<?php echo e($user->id); ?>">
             <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></a></td> 
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($users->links()); ?></p>