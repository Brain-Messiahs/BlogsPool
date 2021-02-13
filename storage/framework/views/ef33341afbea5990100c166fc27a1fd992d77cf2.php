<?php $__env->startSection('page'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
		<h1></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="<?php echo e(route('admin-dashboard')); ?>">Dashboard</a></li>
		  <li class="active">Edit Tag</li>
		</ol>
		<!--breadcrum end-->
	
		<div class="section"> 

			<form action="<?php echo e(route('admin-edit_tag_submit')); ?>" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				 <input type="hidden" name="id" value="<?php echo e(app('request')->input('id')); ?>">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lead">EDIT TAG</div>
						</div>
					</div>

					<div class="group-fields clearfix row">

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="tag_name" class="control-label">Tag Name</label>
								<input type="text" name="tag_name" id="tag_name" class="form-control" value="<?php echo e($dt->tag_name); ?>" placeholder="" required>
							</div>
						</div>

												


						<div class="pmd-card-actions col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p align="right">
							<button type="submit" class="btn pmd-ripple-effect btn-danger" name="submit">Submit</button>
							</p>
						</div>						

						</div>

				</div>

			</div> <!-- section content end -->  
			</form>
		</div>
			
	</div><!-- tab end -->

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/vendor_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>