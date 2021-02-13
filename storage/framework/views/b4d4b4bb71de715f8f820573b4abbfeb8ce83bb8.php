
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" >
           <table id="#table">
            <thead class="thead">
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Type</th>
                 <th class="column4">Mode</th>
                  <th class="column5">Balance Type</th>
                <th class="column6">Cheque Number</th>
                <th class="column7">Amount</th>
                 <th class="column8">Reg. By</th>
                <th class="column9">Delete</th>
                </tr>
                </thead>
                <tbody class="tbody">
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"> <?php if($user->tname!=''): ?><?php echo e($user->tname); ?><?php elseif($user->name!=''): ?><?php echo e($user->name); ?><?php else: ?>--<?php endif; ?></td>
          <td class="column3"> <?php if($user->type==''): ?>--<?php else: ?><?php echo e($user->type); ?><?php endif; ?></td>
           <td class="column4"><?php if($user->mode==''): ?>--<?php else: ?><?php echo e($user->mode); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->check_type==''): ?>--<?php else: ?><?php echo e($user->check_type); ?><?php endif; ?></td>
           <td class="column6"><?php if($user->check_number==''): ?>--<?php else: ?><?php echo e($user->check_number); ?><?php endif; ?></td>
           <td class="column7"><?php if($user->amount==''): ?>--<?php else: ?><?php echo e($user->amount); ?><?php endif; ?></td>
            <td class="column8"><?php if($user->reg_name==''): ?>--<?php else: ?><?php echo e($user->reg_name); ?><?php endif; ?></td>
           <td class="column9"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->tname); ?>">
           <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>
        </div>
      </div>
    </div>