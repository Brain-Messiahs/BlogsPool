<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainprofile.css')); ?>">
   <div class="limiter">
   <div class="container-table100" style="background-color: transparent;">
      <div class="wrap-table100">
        <div class="table100">
<div class=" profile">
    <div class="profile-bottom">
      <h3><i class="fa fa-user"></i>Profile</h3>
      <div class="profile-bottom-top">
      <div class="col-md-4 profile-bottom-img">
        <img src="<?php echo e(asset('adminsa/images/'.Auth::user()->photo)); ?>" alt="">
      </div>
      <div class="col-md-8 profile-text">
        <h6><?php echo e(Auth::user()->name); ?></h6>
        <table>
        <tr><td>Username : <?php echo e(Auth::user()->username); ?></td></tr>

        <tr><td>Email : <?php echo e(Auth::user()->email); ?></td></tr>

        <tr><td>Contact : <?php echo e(Auth::user()->mobile); ?></td></tr>

        </table>
      </div>
      <div class="clearfix"></div>
      </div>
      <div class="profile-btn">
           <div class="clearfix"></div>
      </div>
       
    </div>
  </div>
</div>
</div>
</div>
</div>
   
 <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout/teacher_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>