<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table_style.css')); ?>">
<div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Online Students</b></h4> 
</div></div>
   <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Username</th>
                <th class="column4">class</th>
                  <th class="column5">Status</th>
         </tr>
                </thead>
                <tbody>
      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($student->isOnline()): ?>
        <tr class="user<?php echo e($student->id); ?>">
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($student->name); ?></td>
          <td><?php echo e($student->username); ?></td>
          <td><?php echo e($student->class); ?></td>
          <td><a>Online</a></td>
         </tr>
         <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
      
   </table>
    </div>
    </div>
    </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>