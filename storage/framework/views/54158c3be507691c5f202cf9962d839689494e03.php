  
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <ul id="r1">
                  <label><strong>RESULT</strong></label>
                  <li class="top" >Total Marks &nbsp;&nbsp; &nbsp;&nbsp; :&nbsp;  <?php echo e($user->total_marks); ?></li>
                  <li class="1st" >Total Score &nbsp;&nbsp; &nbsp;&nbsp; :&nbsp;  <?php echo e($user->totalS); ?></li>
                  <li class="1st" >Time Used &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; :&nbsp;  <?php echo e($user->lefttime); ?> min.</li>
                  <li class="1st" >Total Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalC); ?></li>
                  <li class="1st" >Total&nbsp; Incorrect&nbsp;:&nbsp; <?php echo e($user->totalW); ?></li>
                  <li class="1st" >Total &nbsp;Attempt &nbsp; :&nbsp; <?php echo e($user->totalA); ?></li>
                  </ul>
                  <?php if($user->PQ!=0): ?>
          
                  <ul id="r2">
                    <label><strong>PHYSICS</strong></label>
                  <li class="phy" >Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalCinP); ?></li>
                  <li class="phy" >Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinP); ?></li>
                  <li class="phy" >Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinP); ?></li>
                </ul>
              
                <?php else: ?>
                  <li id="r2" style="display: none;"></li>
                  <?php endif; ?> 
                 <?php if($user->CQ!=0): ?>
                  
                    <ul id="r3">
                      <label><strong>CHEMISTRY</strong></label>
                      <li class="chem" >Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalCinC); ?></li>
                  <li class="chem" >Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinC); ?></li>
                  <li class="chem" >Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinC); ?></li>
                    </ul>   
                
                  <?php else: ?>
                  <li id="r3" style="display: none;"></li>
                 <?php endif; ?> 
                 <?php if($user->MQ!=0): ?>
                        
                    <ul id="r4">
                      <label><strong>MATHEMATICS</strong></label>
                      <li class="math" >Correct&nbsp; &nbsp;&nbsp;&nbsp;: <?php echo e($user->totalCinM); ?></li>
                     <li class="math" >Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinM); ?></li>
                     <li class="math" >Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinM); ?></li>
                    </ul>
                
                    <?php else: ?>
                  <li id="r4" style="display: none;"></li>
                 <?php endif; ?> 
                 <?php if($user->BQ!=0): ?>
                    <ul id="r5">
                      <label><strong>BIOLOGY</strong></label>
                      <li class="bio" >Correct&nbsp; &nbsp;&nbsp;&nbsp;: <?php echo e($user->totalCinB); ?></li>
                     <li class="bio" >Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinB); ?></li>
                     <li class="bio" >Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinB); ?></li>
                    </ul>
                <?php else: ?>
                  <li id="r5" style="display: none;"></li>
                      <?php endif; ?>  
                
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script type="text/javascript">
	$("#loading").fadeOut(500);
</script>
