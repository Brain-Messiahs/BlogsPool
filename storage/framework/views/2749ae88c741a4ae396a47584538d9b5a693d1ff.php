 <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Subject</th>
                <th class="column4">Paper</th>
                <th class="column5">Solution</th> 
                 <th class="column6">Details</th>
                 <th class="column7">Publish</th>
                   <th class="column8">Delete</th>
         </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($user->pname); ?></td>
          <td><?php echo e($user->subject); ?></td>
          <td>
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
              <td>
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
            <td>
            <a id="details-button" data-toggle="modal" data-target="#details" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
            <td>
            <a class="btn btn-warning" id="publish-button" data-toggle="modal" data-target="#publish" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
             data-subject="<?php echo e($user->subject); ?>"  data-ans="<?php echo e($user->ans); ?>" data-ques="<?php echo e($user->ques); ?>">
             publish
            </a>
            </td>
          <td>
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
          </td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($users->links()); ?></p>