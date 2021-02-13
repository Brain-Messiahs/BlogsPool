<?php if($type=="normal"): ?>
<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><b>Question <?php echo e($user->qid); ?></b></li>
<?php if($user->quesimg!=''): ?>
<li><img src="<?php echo e(asset("$user->quesimg")); ?>" /></li>
<?php else: ?>
<li style="color: #d9d9d9" >Question Not Available</li>
<?php endif; ?>
<li class="l1" id="<?php echo e($user->qid); ?>" style="color: #555555;">Your Answer : Not Answered</li>
<li class="l2" id="q<?php echo e($user->qid); ?>"style="color: #555555;">Correct Answer : <?php echo e($user->q1); ?></li>

<li><b>Solution <?php echo e($user->qid); ?></b></li>
<?php if($user->solimg!=''): ?>
<li><img src="<?php echo e(asset("$user->solimg")); ?>" /></li>
<?php else: ?>
<li  style="color: #d9d9d9">Solution Not Available</li>
<?php endif; ?>
<li style=" height: 3px;background-color: rgba(244,132,83,0.8);"></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script type="text/javascript">
  <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
      var qid="<?php echo e($ans->qid); ?>";
      var a="<?php echo e($ans->a1); ?>";
       var ans="<?php echo e($ans->answer); ?>";
      var w="<?php echo e($ans->a8); ?>";
      if( w=="save"|| w=="save_mark")
      {
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : <?php echo e($ans->a1); ?>');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : <?php echo e($ans->a7); ?>');
        if(ans=='Correct'){
          $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity:0.8;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); padding: 0px 0px 5px 5px;height: 25px;background-color: rgb(6, 220, 149,0.4);');
        }
        else{
           $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(253,92,99,0.8); padding: 0px 0px 5px 5px;height: 25px;background-color: rgba(253,92,99,0.4);');
        }
      }else{
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : Not Answered');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : <?php echo e($ans->a7); ?>');
         $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 5px 5px;height: 25px;background-color: rgba(70,184,218,0.4);');
      }      

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </script>
  <style type="text/css">
    .l1{margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 0px 5px;height: 25px;background-color: rgba(70,184,218,0.4);}
    .l2{
      color: #555555;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); opacity: 0.8; margin-top:2px;  padding: 0px 0px 0px 5px;max-height: 25px;background-color: rgb(6, 220, 149,0.4);
    }
  </style>
  <?php elseif($type=="advanced"): ?>
  <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><b>Question <?php echo e($user->qid); ?></b></li>
<?php if($user->quesimg!=''): ?>
<li><img src="<?php echo e(asset("$user->quesimg")); ?>" /></li>
<?php else: ?>
<li style="color: #d9d9d9">Question Not Available</li>
<?php endif; ?>
<li class="l1" id="<?php echo e($user->qid); ?>" style="color: #555555;">Your Answer : Not Answered</li>
<?php if($user->type=='single'||$user->type=='integer'||$user->type=='passage'||$user->type=='match_column'): ?>
<li class="l2" id="q<?php echo e($user->qid); ?>"style="color: #555555;">Correct Answer : <?php echo e($user->q1); ?></li>
<?php elseif($user->type=='multiple'): ?>
<li class="l2" id="q<?php echo e($user->qid); ?>"style="color: #555555;">Correct Answers : <?php echo e($user->q1 . $user->q2 . $user->q3 . $user->q4); ?></li>
<?php elseif($user->type=='numerical'): ?>
<li class="l2" id="q<?php echo e($user->qid); ?>"style="color: #555555;">Correct Answer : Between <?php echo e($user->q1); ?> To <?php echo e($user->q2); ?></li>
<?php endif; ?>
<li><b>Solution <?php echo e($user->qid); ?></b></li>
<?php if($user->solimg!=''): ?>
<li><img src="<?php echo e(asset("$user->solimg")); ?>" /></li>
<?php else: ?>
<li  style="color: #d9d9d9">Solution Not Available</li>
<?php endif; ?>
<li style=" height: 3px;background-color: rgba(244,132,83,0.8);"></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script type="text/javascript">
  <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
      var qid="<?php echo e($ans->qid); ?>";
      var qtype="<?php echo e($ans->qtype); ?>";
      var w="<?php echo e($ans->ans_type); ?>";
      var ans="<?php echo e($ans->answer); ?>";
      if(w=="save" ||  w=="save_mark"){
         if(qtype=='single'||qtype=='integer'||qtype=='passage'||qtype=='match_column'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : <?php echo e($ans->a1); ?>');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : <?php echo e($ans->a5); ?>');
        if(ans=='Correct'){
          $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); opacity: 0.8; padding: 0px 0px 0px 5px;height: 25px;background-color: rgb(6, 220, 149,0.4);');
        }
        else{
           $('#<?php echo e($ans->qid); ?>').attr('style',' margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(253,92,99,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(253,92,99,0.4);');
        }
        
      }
      else if(qtype=='multiple'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answers : <?php echo e($ans->a1 . $ans->a2 . $ans->a3 . $ans->a4); ?>');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answers : <?php echo e($ans->a5 . $ans->a6 . $ans->a7 . $ans->a8); ?>');
         if(ans=='Correct'||ans=='Partially Correct'){
          $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); opacity: 0.8; padding: 0px 0px 0px 5px;height: 25px;background-color: rgb(6, 220, 149,0.4);');
        }
        else{
           $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(253,92,99,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(253,92,99,0.4);');
        }
      }
      else if(qtype=='numerical'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : <?php echo e($ans->a1); ?>');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : Between <?php echo e($ans->a5); ?> To <?php echo e($ans->a6); ?>');
         if(ans=='Correct'){
          $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); opacity: 0.8; padding: 0px 0px 0px 5px;height: 25px;background-color: rgb(6, 220, 149,0.4);');
        }
        else{
           $('#<?php echo e($ans->qid); ?>').attr('style',' margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(253,92,99,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(253,92,99,0.4);');
        }
      }
  }
  else{
   if(qtype=='single'||qtype=='integer'||qtype=='passage'||qtype=='match_column'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : Not Answered');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : <?php echo e($ans->a5); ?>');
        $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(70,184,218,0.4);');  
      }
      else if(qtype=='multiple'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : Not Answered');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answers : <?php echo e($ans->a5 . $ans->a6 . $ans->a7 . $ans->a8); ?>');
        $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(70,184,218,0.4);');
      }
      else if(qtype=='numerical'){
        $('#<?php echo e($ans->qid); ?>').text('Your Answer : Not Answered');
        $('#q<?php echo e($ans->qid); ?>').text('Correct Answer : Between <?php echo e($ans->a5); ?> To <?php echo e($ans->a6); ?>');
        $('#<?php echo e($ans->qid); ?>').attr('style','margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 0px 5px ;height: 25px;background-color: rgba(70,184,218,0.4);');
      }
  }

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </script>
  <style type="text/css">
   .l1{margin-top: 8px;color: #555555;opacity: 0.8;border-radius: 5px;border:2px solid rgba(70,184,218,0.8); padding: 0px 0px 0px 5px;height: 25px;background-color: rgba(70,184,218,0.4);}
    .l2{
      color: #555555;border-radius: 5px;border:2px solid rgb(6, 217, 149,0.8); opacity: 0.8; margin-top:2px;  padding: 0px 0px 0px 5px;max-height: 25px;background-color: rgb(6, 220, 149,0.4);
    }
  </style>
  <?php endif; ?>
  <script type="text/javascript">
     $("#loading").fadeOut(500);
  </script>
