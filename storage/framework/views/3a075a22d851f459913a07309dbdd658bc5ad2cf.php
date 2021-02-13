 <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Paper Name</th>
                <th class="colum3">Upload File</th>
                <th class="column4">Answer</th>
                <th class="column5">Result Update</th>
                <th class="column6">Publish</th>
                <th class="column7">Syllabus</th>
                <th class="column8">Preview</th>
                <th class="column9">Delete</th>
              </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->pname); ?></strong></td>
                  <td class="column3"><a style="color: #fff" class="btn btn-primary" href="<?php echo e(route('admin-advanced_paper_ques_upload',['id'=>$user->id])); ?>">Upload paper</a></td>
                  <td class="column4"><a style="color: #fff" class="btn btn-danger" href="<?php echo e(route('admin-advanced_paper_ans_upload',['id'=>$user->id])); ?>">Upload Ans.</a></td>
                    <td class="column5"><a style="color: #fff" class="btn btn-info" href="<?php echo e(route('admin-advanced_paper_update_result_page',['id'=>$user->id])); ?>">Update</a></td>
                 <td class="column6"><a style="color: #fff" class="btn btn-warning" href="<?php echo e(route('admin-advanced_paper_publish',['id'=>$user->id])); ?>">Publish</a></td>
                  <td class="column7"><a id="syllabus-button" data-toggle="modal" data-target="#syllabus" data-id="<?php echo e($user->pname); ?>">
              <i class="fa fa-book" style="color: #ff9933"></i></td>
                 <td class="column8"><a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->pname); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i></td>
                 <td class="column9"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></td>   
                          </tr>   
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>