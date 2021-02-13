<?php $__env->startSection('page'); ?>
<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
	
		<h1 class="section-title" id="services"></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="<?php echo e(route('admin-dashboard')); ?>">Dashboard</a></li>
		  <li class="active">Tag List</li>
		</ol><!--breadcrum end-->
	
		<div class="section" id="tbody"> 
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="lead">Tag List</div>
						</div>
					</div>

					<div class="table-responsive"> 
						<table cellspacing="0" cellpadding="0" class="table pmd-table table-hover" id="table-propeller">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Tag Name</th>
									<th>Details</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1;?>
							<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($no++); ?></td>
									<td><?php echo e($c->tag_name); ?></td>
									<td style="text-align: center;"><a href=""><span style="font-size: 1.3em; color: #ff9933; "><i class="fas fa-server"></i></span></a></td>
									<td><a href="<?php echo e(route('admin-edit_tag',['id'=>$c->id])); ?>"><span style="font-size: 1.3em; color: #ff9933;"><i class="fas fa-pencil-alt"></i></span></a></td>
									<td><a href="<?php echo e(route('admin-delete_tag',['id'=>$c->id])); ?>" onclick="return confirm('Are you sure want to Delete Tag (<?php echo e($c->tag_name); ?>)?')"><span style="font-size: 1.3em; color: #ff5c33;"><i class="fas fa-trash-alt"></i></span></a></td>								
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>

						</table>

					</div>
				</div>
			</div> <!-- section content end -->  
			 <p><?php echo e($tags->links()); ?></p>
		</div>
			
	</div><!-- tab end -->

</div><!--end content area-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/vendor_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>