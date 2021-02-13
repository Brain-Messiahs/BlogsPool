<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/main_publish_option.css')); ?>">
 <link href="<?php echo e(asset('adminsa/bootstrap/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" media="screen">
 <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d H:i:s');?>
<div class="a">
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
          <li>Publish failed</li>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
   <li>Publish Successfully</li>
</div> 
<?php endif; ?>
        <form class="form-group" method="POST" action="<?php echo e(route('teacher-uploaded_paper_edit_submit')); ?>">
          <?php echo e(csrf_field()); ?>

    <!-- ----------------------------------------- option menu------------------------------------ -->
    <div ><select id="class" class="form-control" name="class" >
     <option value="">Class</option>
     <option value="8th">8th</option>
     <option value="9th">9th</option>
     <option value="10th">10th</option> 
     <option value="11th">11th</option> 
     <option value="12th">12th</option> 
     <option value="Repeater">Repeater</option> 
         </select></div>

  

   <div id="course" ><select class="form-control" id="courseid" name="course" > 
    <option value="">Course</option>
     <option value="Foundation">Foundation</option>
     <option value="JEE Main">JEE Main</option>
     <option value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option value="NEET">NEET</option> 
     <option value="NEET + AIIMS">NEET + AIIMS</option> 
     <option value="MHT-CET">MHT-CET</option>
     <option value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div id="coursetype"><select class="form-control" id="coursetypeid" name="coursetype"> 
     <option value="">Course Type</option>
     <option value="Classroom Course">Classroom Course</option>
     <option value="Crash Course">Crash Course</option>
     <option value="Distance Learning">Distance Learning</option>
     </select> </div>
     <div class="time">
      <label for="dtp_input1" class="col-lg-12 control-label">Publish Time</label>
      <div class="input-group date form_datetime" data-date="<?php echo e($timer); ?>" data-date-format="dd-mm-yyyy hh:ii:ss" data-link-field="dtp_input1">
      <input class="form-control" size="19"  type="text" value="" readonly>
      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
      <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
      </div>
      <input type="hidden" id="dtp_input1" name ="publishtime" value="" /><br/>
            </div>
     <div>
      <label>Group</label>
      <input style="display: none;" type="radio" id="radio" name="radio" value="" checked="true"></input>
      <input type="radio" name="radio" value="A">A </input> 
      <input type="radio" name="radio" value="B">B </input>
      <input type="radio" name="radio" value="C">C </input>
      <input type="radio" name="radio" value="D">D </input>
      <input type="radio" name="radio" value="E">E </input>
      <input type="radio" name="radio" value="F">F </input>
</div>
<div style="display: none;">
  <label>Predictor</label>
  <input style="display: none;" type="radio" name="radio1" id="radio1" value=""></input>
      <input type="radio" name="radio1" value="JEE">JEE Main </input>
      <input type="radio" name="radio1" value="NEET">NEET </input>
       <input type="radio" name="radio1" value="null" checked="true">None </input>
</div>

<div style="display: none;"><label>Hardness&nbsp;</label><input type="text" placeholder="100" name="hardness" value="100"></div>
<!-- -------------------------------------------------------------------option menu end-------------------------- -->
<div class="col-lg-12" style="margin-top: 20px;">
      <button type="submit" style="background-color: #fd6e70" class="btn btn-block btn-lg" name="reg_user">Publish</button>
    </div>
    <div class="col-lg-12" style="display: none;">
      <label>Paper link</label>
      <input type="text" id="id" name="id"  >
    </div>
  </form>
  </div> 
</div>
<style type="text/css">
  .header h2{
    margin-left: 36%;
    color: #4f4f4f;
     padding-top: 8%;
    font-family: 'Arial Black', Gadget, sans-serif;
    margin-bottom: 20px;
  }
  #class{
    margin-bottom: 2px;
  }
  #coursetype{
    margin-bottom: 4px;
  }
  
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('adminsa/bootstrap/js/bootstrap-datetimepicker.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('adminsa/bootstrap/js/bootstrap-datetimepicker.fr.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });

    $(".form_datetime").datetimepicker({
        format: "dd-mm-yyyy hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        startDate: "01-03-2019 00:00",
        minuteStep: 10
    });
      
       </script>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script type="text/javascript">
      $('#id').val('<?php echo e($user->id); ?>');
      $('#class').val('<?php echo e($user->classid); ?>');
      $('#courseid').val('<?php echo e($user->courseid); ?>');
      $('#coursetypeid').val('<?php echo e($user->coursetypeid); ?>');
      $('#hardness').val('<?php echo e($user->hardness); ?>');
       $('#dtp_input1').val('<?php echo e($user->publishtime); ?>');
       $('input:radio[name="radio"][value="<?php echo e($user->groupid); ?>"]').prop('checked', true).trigger("click");
       $('input:radio[name="radio1"][value="<?php echo e($user->rank); ?>"]').prop('checked', true).trigger("click");
    </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/teacher_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>