<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/main_ques_upload.css')); ?>">
<div class="a">
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>upload failed</li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
  <?php echo e(session('success')); ?>

</div> 
<?php endif; ?>
<div class="b">
  <b>Question Upload Box</b>
<form action="<?php echo e(route('teacher-normal_paper_ques_upload_submit')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

 <input class="btn btn-lg input" type="file" name="filenames[]" multiple="" accept="image/png"/>
 <input type="hidden" name="id" value="<?php echo e(app('request')->input('id')); ?>">
<div class="header" >
  </div>
 <input class="btn btn-lg submit" type="submit" name="submit" value="Upload All Question" />
</form>
 <h4><?php echo e($question); ?> file Uploaded.</h4>
</div>
<div class="clearfix"></div><div class="c">
   <b>solution Upload Box</b>
<form action="<?php echo e(route('teacher-normal_paper_sol_upload_submit')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

 <input class="btn btn-lg input" type="file" name="filenames[]" multiple="" accept="image/png"/>
 <input type="hidden" name="id" value="<?php echo e(app('request')->input('id')); ?>">
<div class="header" >
  </div>
 <input class="btn btn-lg submit" type="submit" name="submit" value="Upload All Solution" />
</form>
 <h4><?php echo e($solution); ?> file Uploaded.</h4>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/teacher_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>