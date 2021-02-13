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
        <img src="<?php echo e(asset('hub_css/images/'.Auth::user()->photo)); ?>" alt="">
      </div>
      <div class="col-md-8 profile-text">
        <h6><?php echo e(Auth::user()->hub_name); ?></h6>
        <table>
        <tr><td>Owner : <?php echo e(Auth::user()->owner_name); ?></td></tr>
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
<?php echo $__env->make('layout/hub_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>