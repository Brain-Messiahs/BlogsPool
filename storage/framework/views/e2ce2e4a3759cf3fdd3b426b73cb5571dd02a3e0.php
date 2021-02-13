 <table id="table">
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Father's name</th>
                <th class="column4">mobile</th>
                 <th class="column5">class</th>
                <th class="column6">year</th>
                <th class="column7">View</th>
                 <th class="column8">Edit</th>
                </tr>
                </thead>
                <tbody>

      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->f_name); ?></td>
          <td class="column4"><?php echo e($user->f_mobile); ?></td>
           <td class="column5"><?php echo e($user->class); ?></td>  
         <td class="column6"><?php echo e($user->academic_year); ?></td>
            <td class="column7"> <a id="show-button" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" data-dob="<?php echo e($user->dob); ?>" data-aadhar="<?php echo e($user->aadhar); ?>" data-gender="<?php echo e($user->gender); ?>" data-category="<?php echo e($user->category); ?>" data-academic_year="<?php echo e($user->academic_year); ?>" data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>" data-coursetype="<?php echo e($user->coursetype); ?>" data-mobile="<?php echo e($user->mobile); ?>" data-email="<?php echo e($user->email); ?>" data-f_name="<?php echo e($user->f_name); ?>" data-f_occupation="<?php echo e($user->f_occupation); ?>" data-m_name="<?php echo e($user->m_name); ?>" data-m_occupation="<?php echo e($user->m_occupation); ?>" data-f_mobile="<?php echo e($user->f_mobile); ?>" data-address="<?php echo e($user->address); ?>" data-fee_details="<?php echo e($user->fee_details); ?>" data-photo="<?php echo e($user->photo); ?>" data-reg_name="<?php echo e($user->reg_name); ?>" data-created_at="<?php echo e($user->created_at); ?>" >
            <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
             <?php if(Auth::user()->id == 1): ?>
              <a style="align-items: center; margin-left: 20px" id="delete-button" data-toggle="modal" data-target="#delete" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>">
            <i class="fa fa-eye-slash" style="color: red"></i>
            </a>
             <?php endif; ?>
            </td>
          <td class="column8">
            <a id="edit-button" data-toggle="modal" data-target="#edit" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" data-dob="<?php echo e($user->dob); ?>" data-aadhar="<?php echo e($user->aadhar); ?>"  data-gender="<?php echo e($user->gender); ?>" data-category="<?php echo e($user->category); ?>" data-academic_year="<?php echo e($user->academic_year); ?>" data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>" data-coursetype="<?php echo e($user->coursetype); ?>" data-mobile="<?php echo e($user->mobile); ?>" data-email="<?php echo e($user->email); ?>" data-f_name="<?php echo e($user->f_name); ?>" data-f_occupation="<?php echo e($user->f_occupation); ?>" data-m_name="<?php echo e($user->m_name); ?>" data-m_occupation="<?php echo e($user->m_occupation); ?>" data-f_mobile="<?php echo e($user->f_mobile); ?>" data-address="<?php echo e($user->address); ?>" data-fee_details="<?php echo e($user->fee_details); ?>" data-photo="<?php echo e($user->photo); ?>">
              <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
              <?php if(Auth::user()->id == 1): ?>
              <a style="align-items: center; margin-left: 20px" id="delete-button1" data-toggle="modal" data-target="#delete1" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>">
            <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
             <?php endif; ?>
            </td>
            <td class="hidden"><img id="img<?php echo e($user->id); ?>" src="<?php echo e(asset("$user->photo")); ?>" width="24" height="30"></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>