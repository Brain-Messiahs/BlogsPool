<?php $__env->startSection('page'); ?>
<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
	
		<h1 class="section-title" id="services"></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="<?php echo e(route('admin-dashboard')); ?>">Dashboard</a></li>
		  <li class="active">Article Details</li>
		</ol><!--breadcrum end-->
	
		<div class="section" id="tbody"> 
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					
				</div>
			</div> <!-- section content end -->  
		</div>
			
	</div><!-- tab end -->

</div><!--end content area-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/vendor_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>