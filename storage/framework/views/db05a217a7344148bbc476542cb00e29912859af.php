 <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" >
           <table id="#table">
            <thead class="thead">
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Description</th>
                <th class="column3">Invested Amount</th>
                 <th class="column4">Clearing Amount</th>
                  <th class="column5">Benefits</th>
                  <th class="column6">Clearing Time</th>
                <th class="column7">Clear This</th>
                </tr>
                </thead>
                <tbody class="tbody">
     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"> <?php if($user->description==''): ?>--<?php else: ?><?php echo e($user->description); ?><?php endif; ?></td>
          <td class="column3"> <?php if($user->inv_amount==''): ?>--<?php else: ?><?php echo e($user->inv_amount); ?><?php endif; ?></td>
           <td class="column4"><?php if($user->clear_amount==''): ?>--<?php else: ?><?php echo e($user->clear_amount); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->benefits==''): ?>--<?php else: ?><?php echo e($user->benefits); ?><?php endif; ?></td>
           <td class="column5"><?php if($user->benefits==''): ?>--<?php else: ?><?php echo e($user->publishtime); ?><?php endif; ?></td>
           <td class="column9"> <?php if($user->clear_amount==''): ?><a class="btn btn-info" style="margin-top: 2px; padding: 8.5px 20px 8.5px 20px;" id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-exp_id="<?php echo e($user->exp_id); ?>" data-inv="<?php echo e($user->inv_amount); ?>">Clear</a> <?php else: ?> <a style="margin-top: 2px;"  class="btn btn-warning disabled">Cleared</a><?php endif; ?> 
            </td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>
        </div>
      </div>
    </div>