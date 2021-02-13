<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainteacher.css')); ?>">
  <div class="limiter">
    <div  class="title">
                <div class="searchBox">
                  <h4><b>Teacher List</b>
                    <a id="add-button" data-toggle="modal" data-target="#create" class="create-modal btn btn-warning" >Add</a></h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Email</th>
                <th class="column4">Contact</th> 
                <th class="column5">subject</th> 
                  <th class="column6">Edit</th>
         </tr>
                </thead>
                <tbody>
    
      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->email); ?></td>
          <td class="column4"><?php echo e($user->mobile); ?></td>
          <td class="column5"><?php echo e($user->subject); ?></td>
          <td class="column6">
            <a id="edit-button" data-toggle="modal" data-target="#edit" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>"  data-mobile="<?php echo e($user->mobile); ?>" data-type="<?php echo e($user->type); ?>" data-subject="<?php echo e($user->subject); ?>" data-address="<?php echo e($user->address); ?>">
              <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
            </a>
            </td>
         </tr>  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($users->links()); ?></p>
        </div>
      </div>
    </div>
  </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('account/js/teacher.js')); ?>"> </script>
<script type="text/javascript">$(". search-btn").click(function(){
  $(".search-input").toggleClass("active").focus;
  $(this).toggleClass("animate");
  $(".input").val("");
});</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('account/teacher_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>