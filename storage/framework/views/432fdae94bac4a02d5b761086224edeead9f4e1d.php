<table><?php $__currentLoopData = $userss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr><td>D.P.P. Name&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<?php echo e($use->pname); ?></td></tr>
<tr><td>Subject&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<?php echo e($use->subject); ?></td></tr>
<tr><td>Paper&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php if($use->ques!=''): ?>Available <?php else: ?> Not Available <?php endif; ?></td></tr>
<tr><td>Solution&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php if($use->ans!=''): ?>Available <?php else: ?> Not Available <?php endif; ?></td></tr>
<tr><td>Published By&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<?php echo e($use->reg_name); ?></td></tr>
<tr><td>Published&nbsp;&nbsp;</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<?php echo e($use->created_at); ?></td></tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
         <table> 
         	 <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">c|c|c|g</th>
                <th class="column3">publish Date</th>
                <th class="column4">By</th>
                <th class="column5">Delete</th> 
         </tr>
                </thead>
                <?php $nm=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="users<?php echo e($user->id); ?>">
          <td><?php echo e($nm++); ?></td>
          <td><?php echo e($user->classid.'|'.$user->courseid.'|'.$user->coursetypeid.'|'.$user->groupid); ?></td>
          <td><?php echo e($user->publish_time); ?></td>
          <td><?php echo e($user->reg_name); ?></td>
          <td>
            <a id="delete-button1" data-toggle="modal" data-target="#delete1" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
          </td>
          </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>