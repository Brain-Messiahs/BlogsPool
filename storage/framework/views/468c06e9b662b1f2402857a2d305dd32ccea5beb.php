
  
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Username</th>
                <th class="column4">class</th>
                <th class="column5">Results</th>
                 <th class="column6">View</th>
                  <th class="column7">Edit</th>
                  <th class="column8">Delete</th>
               </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->username); ?></td>
          <td class="column4"><?php echo e($user->class); ?></td>
          <td class="column5"><a href="<?php echo e(route('admin-student_result',['id'=>$user->id])); ?>"><i class="fa fa-line-chart" style="color:#019739"></i></a></td>
          <td class="column6">
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>" data-mobile="<?php echo e($user->mobile); ?>" data-username="<?php echo e($user->username); ?>" data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>"data-coursetype="<?php echo e($user->coursetype); ?>"data-group="<?php echo e($user->groupid); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
          <td class="column7">
            <a id="edit-button" data-toggle="modal" data-target="#edit" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
             data-username="<?php echo e($user->username); ?>" data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>"data-coursetype="<?php echo e($user->coursetype); ?>"data-group="<?php echo e($user->groupid); ?>" data-email="<?php echo e($user->email); ?>" data-mobile="<?php echo e($user->mobile); ?>">
              <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
            </a>
            </td>
          <td class="column8">
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->name); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
          </td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($users->links()); ?></p>
       
