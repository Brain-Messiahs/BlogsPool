;

<?php $__env->startSection('title'); ?>
Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page'); ?>
	
		<header class="page-header">
			<h1 class="page-title">Category: <span><?php echo e($new_category[0]->category_name); ?></span></h1>		</header><!-- .page-header -->


			<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<article id="post-201" class="post-201 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-games tag-dynamo tag-gamers tag-games tag-games-vlogs tag-mortal tag-pro tag-pro-player tag-pubg tag-pubg-in-india tag-pubg-india tag-pubg-indian-version tag-pubg-mobile tag-pubg-mobile-india tag-pubg-unban tag-pubg-unban-in-india tag-scout tag-unban">
			<div class="entry-img">
			<a href="<?php echo e(route('index')); ?>"><img width="345" height="225" src="<?php echo e($ar->image); ?>" class="attachment-blog-way-common size-blog-way-common wp-post-image" alt="" loading="lazy" /></a>
       </div>
       	<div class="detail-wrap">
		<header class="entry-header">
			<span class="cat-links"><a href="<?php echo e(route('index')); ?>" rel="category tag"><?php echo e($ar->category_name); ?></a></span><h2 class="entry-title"><a href="pubg-mobile-india/index.html" rel="bookmark"><?php echo e($ar->title); ?></a></h2>
				<div class="author-date">
											<span class="author vcard"><a class="url fn n" href="author/admin/index.html">admin</a></span>
					
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
<?php $__env->stopSection(); ?>
	

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>