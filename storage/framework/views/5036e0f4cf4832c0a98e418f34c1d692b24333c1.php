 <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Father's name</th>
                <th class="column4">Total_fee</th>
                <th class="column5">Reg_fee</th>
                <th class="column6">1st</th>
                <th class="column7">2nd</th>
                <th class="column8">3rd</th>
                <th class="column9">4th</th>
                <th class="column10">Online</th>
                <th class="column11">Edit</th>
                </tr>
                </thead>
                <tbody>
     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->f_name); ?></td>
          <td class="column4"><?php echo e($user->total_fee); ?></td>
           <td class="column5"><?php echo e($user->reg_fee); ?></td>  
         <td class="column6"><?php echo e($user->first); ?></td>
         <td class="column7"><?php echo e($user->second); ?></td>
         <td class="column8"><?php echo e($user->third); ?></td>
         <td class="column9"><?php echo e($user->fourth); ?></td>
         <td class="column10"><?php echo e($user->online); ?></td>
            <td class="column11"> <a id="add-button" data-toggle="modal" data-target="#add" data-id="<?php echo e($user->id); ?>" data-sid="<?php echo e($user->sid); ?>" data-name="<?php echo e($user->name); ?>" data-f_name="<?php echo e($user->f_name); ?>" data-f_mobile="<?php echo e($user->f_mobile); ?>" data-total_fee="<?php echo e($user->total_fee); ?>" data-reg_fee="<?php echo e($user->reg_fee); ?>" data-first="<?php echo e($user->first); ?>" data-second="<?php echo e($user->second); ?>" data-third="<?php echo e($user->third); ?>" data-fourth="<?php echo e($user->fourth); ?>" data-online="<?php echo e($user->online); ?>" data-year="<?php echo e($user->year); ?>" data-class="<?php echo e($user->class); ?>" data-reg_name="<?php echo e($user->reg_name); ?>" data-created_at="<?php echo e($user->created_at); ?>" >
            <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
            </a>
            </td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>