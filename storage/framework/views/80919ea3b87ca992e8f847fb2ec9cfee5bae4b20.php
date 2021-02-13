
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><b>Question <?php echo e($user->qid); ?></b></li>
<?php if($user->quesimg!=''): ?>
<li><img src="<?php echo e(asset("$user->quesimg")); ?>" /></li>
<?php else: ?>
<li style="color: #d9d9d9">Question Not Available</li>
<?php endif; ?>
<li><b>Solution <?php echo e($user->qid); ?></b></li>
<?php if($user->solimg!=''): ?>
<li><img src="<?php echo e(asset("$user->solimg")); ?>" /></li>
<?php else: ?>
<li  style="color: #d9d9d9">Solution Not Available</li>
<?php endif; ?>
<li style=" height: 3px;background-color: rgba(244,132,83,0.8);"></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script type="text/javascript">
	$("#loading").fadeOut(500);
</script>
