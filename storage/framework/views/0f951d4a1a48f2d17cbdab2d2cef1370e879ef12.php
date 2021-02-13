<?php $__env->startSection('body'); ?>
    

<div class="top-header">
	<img style="height: 380px;" class="desktop" src="<?php echo e(asset('images/uu7.jpg')); ?>" alt="" title="">
    <img class="mob" src="<?php echo e(asset('images/uu7.jpg')); ?>" alt="" title="" style="height: 150px;">

<div class="clear"></div>

<div class="wrapper">
    <div class="gap50"></div>
    <div class="clear"></div>
    <div class="about-box2">

    <CENTER>
    <div class="right-box" style="width: 100%; float: none; padding-left: 0px;">
            <div class="policies-row">
                <h2>Company Documents</h2>
                <ul>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/1.pdf')); ?>" target="_blank">PDF 1</a></li>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/2.pdf')); ?>" target="_blank">PDF 2</a></li>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/3.pdf')); ?>" target="_blank">PDF 3</a></li>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/4.pdf')); ?>" target="_blank">PDF 4</a></li>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/5.pdf')); ?>" target="_blank">PDF 5</a></li>
                    <li><a class="gtmpdfdownload" href="<?php echo e(asset('pdf/6.pdf')); ?>" target="_blank">PDF 6</a></li>
                </ul>
            </div>
           
        </div> </CENTER>
    </div>
<div class="clear"></div>
</div>
<div class="clear"></div><div class="clear"></div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>