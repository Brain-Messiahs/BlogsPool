<?php $er=preg_replace('/(\[|\]){1}/','',$earn);
$er =str_replace("},", "}", $er) ?>
<?php $__currentLoopData = $earn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a => $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($earn[$a]->id); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>