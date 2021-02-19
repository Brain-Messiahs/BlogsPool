;

<?php $__env->startSection('title'); ?>
<?php echo e($article[0]->page_title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page'); ?>

<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<article id="post-201" class="post-201 post type-post">

    <div class="detail-wrap">
        <header class="entry-header">
            <span class="cat-links"><a  rel="category tag"><?php echo e($ar->category_name); ?></a></span><h1 class="entry-title"><?php echo e($ar->title); ?></h1>
                <div class="author-date">
                                            <span class="author vcard"><a class="url fn n" >Admin</a></span>
                    
                                            <span class="separator"> / </span>
                    
                                            <span class="posted-on"><?php echo e(date_format(date_create($ar->created_at),"jS M, Y")); ?></span>
                                    </div><!-- .author-date -->
            
        </header><!-- .entry-header -->

                    <div class="entry-img">
                <img width="1280" height="720"  class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="<?php echo e($ar->image); ?>" sizes="(max-width: 1280px) 100vw, 1280px" />         </div>
           
        <div class="entry-content  content_description" data-data="<?php echo e($ar->content); ?>"> 
            

    </div>

</article><!-- #post-## -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="related-posts" style="padding: 20px">
                        
                        <header class="page-header">
                            <h2 class="page-title">Related Posts</h2>       </header><!-- .page-header -->
                                <?php $__currentLoopData = $related_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ra->id != $ar->id && $ra->active == 1): ?>
                                <div class="container" style="display: inline-block;">
                                <div onclick="location.href='<?php echo e(route('detail_blog',['blog'=>$ra->id])); ?>';" style="cursor: pointer; width: 27rem; margin: 10 ; display: inline-block;" class="card " >
                                          <img width="330" height="300" class="attachment-full size-full wp-post-image md card-img-top" alt="" loading="lazy" srcset="<?php echo e($ra->image); ?>" sizes="(max-width: 1280px) 100vw, 1280px"/>
                                          <div class="card-body">
                                          <h5 class="card-title"><?php echo e($ra->title); ?></h5>
                                            <p class="card-text"><?php echo e($ra->description); ?></p>
                                          </div>
                                        </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                            

        </div>





<?php $__env->stopSection(); ?>









  

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>