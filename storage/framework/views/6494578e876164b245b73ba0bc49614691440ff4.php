;

<?php $__env->startSection('title'); ?>
Blogspool - Something you should know
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page'); ?>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<article id="" class=" post  ">
			<div class="entry-img">
			<a href="<?php echo e(route('detail_blog',['blog'=>$ar->id])); ?>"><img width="345" height="225" src="<?php echo e($ar->image); ?>" class="attachment-blog-way-common size-blog-way-common wp-post-image" alt="" loading="lazy" /></a>
       </div>
       	<div class="detail-wrap">
		<header class="entry-header">
			<span class="cat-links"><a  rel="category tag"><?php echo e($ar->category_name); ?></a></span><h2 class="entry-title"><a href="" rel="bookmark"><?php echo e($ar->title); ?></a></h2>
				<div class="author-date">
											<span class="author vcard"><a class="url fn n" >admin</a></span>
					
											<span class="separator"> / </span>
					
											<span class="posted-on"><?php echo e(date_format(date_create($ar->created_at),"jS M, Y")); ?></span>
									</div><!-- .author-date -->

					</header><!-- .entry-header -->

		<div class="entry-content">
			<p><?php echo e($ar->description); ?></p>
<p><a href="<?php echo e(route('detail_blog',['blog'=>$ar->id])); ?>" class="btn-continue">Continue Reading<span class="arrow-continue">&rarr;</span></a></p>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<p><?php echo e($articles->links()); ?></p> 

<?php $__env->stopSection(); ?>









  

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>