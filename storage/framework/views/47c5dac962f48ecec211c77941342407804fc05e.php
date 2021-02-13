
<?php echo $__env->make($results==0 ? 'layout/advanced_paper' : 'layout/advanced_papershow', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>