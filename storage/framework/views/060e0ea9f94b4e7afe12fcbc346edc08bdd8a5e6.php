<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table_style.css')); ?>">
<div class="inner-block">
  <div id="body">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2><b>Student List</b></h2>
          </div>
                </div>
            </div>
            <table id="table" class="table table-striped table-hover">
                <thead style="background-color: #fff;padding-top: 10em; ">
                    <tr>
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Username</th>
                <th class="column4">class</th>
                <th class="column5">Results</th>
                 <th class="column6">View</th>
                  <th class="column7">Edit</th>
                <th><a id="add-button" data-toggle="modal" data-target="#create" class="create-modal btn btn-warning" >Add</a>
        </th>
         </tr>
                </thead>
                <tbody>
                    <tr>
      <?php echo e(csrf_field()); ?>

      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($user->name); ?></td>
          <td><?php echo e($user->username); ?></td>
          <td><?php echo e($user->class); ?></td>
          <td><a href="#"><i class="fa fa-line-chart" style="color:#019739"></i></a></td>
          <td>
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>"  data-mobile="<?php echo e($user->mobile); ?>" data-username="<?php echo e($user->username); ?>"  data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>"data-coursetype="<?php echo e($user->coursetype); ?>"data-group="<?php echo e($user->groupid); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
          <td>
            <a id="edit-button" data-toggle="modal" data-target="#edit" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>"  data-mobile="<?php echo e($user->mobile); ?>" data-username="<?php echo e($user->username); ?>"  data-class="<?php echo e($user->class); ?>" data-course="<?php echo e($user->course); ?>"data-coursetype="<?php echo e($user->coursetype); ?>"data-group="<?php echo e($user->groupid); ?>">
              <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
            </a>
            </td>
          <td>
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->name); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
          </td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </tbody>
   </table>
    <p style="float: right; margin-bottom: 0px;"><?php echo e($users->links()); ?></p>
    </div>
    </div>
    </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/student.js')); ?>"> </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/student_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>