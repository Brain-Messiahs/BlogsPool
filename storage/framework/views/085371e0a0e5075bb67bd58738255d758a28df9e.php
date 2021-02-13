
<?php $__env->startSection('popup'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/input.css')); ?>">
 <img id="formimg" style="display: none;" src="<?php echo e(asset('account/students/form/form.jpg')); ?>">
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>upload failed</li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
  <?php echo e(session('success')); ?>

</div> 
<?php endif; ?>

  <form action="addstudent" method="POST" enctype="multipart/form-data" role="modal" id="addstudent">
    <?php echo e(csrf_field()); ?> 
    <img src="<?php echo e(asset('account/header_form.png')); ?>" width="100%">
     <div><select class="form-control" id="add_class" name="add_class" required="required">
     <option value="">Class</option>
     <option id="add_class-8" value="8th">8th</option>
     <option id="add_class-9" value="9th">9th</option>
     <option id="add_class-10" value="10th">10th</option> 
     <option id="add_class-11" value="11th">11th</option> 
     <option id="add_class-12" value="12th">12th</option> 
     <option id="add_class-repeater" value="Repeater">Repeater</option> 
         </select></div>
   <div><select class="form-control" id="add_course" name="add_course" required="required"> 
    <option value="">Course</option>
     <option id="add_course-foundation" value="Foundation">Foundation</option>
     <option id="add_course-jeemain" value="JEE Main">JEE Main</option>
     <option id="add_course-jeeadv" value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option id="add_course-neet" value="NEET">NEET</option> 
     <option id="add_course-neetaiims" value="NEET + AIIMS">NEET + AIIMS</option> 
     <option id="add_course-cet" value="MHT-CET">MHT-CET</option>
     <option id="add_course-classroom" value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div><select class="form-control" id="add_coursetype" name="add_coursetype" required="required"> 
     <option value="">Course Type</option>
     <option id="add_coursetype-classroom"  value="Classroom Course">Classroom Course</option>
     <option id="add_coursetype-crash"  value="Crash Course">Crash Course</option>
     <option id="add_coursetype-distance" value="Distance Learning">Distance Learning</option>
     </select> </div>
     <div>
     
     <select class="group adcyear" id="add_year" name="add_year" required="required" style="float: left; margin-bottom:38px;"> 
     <option value="">Academic Year</option>
    <option value="2017-18">2017-18</option>
        <option value="2018-19">2018-19</option>
        <option value="2019-20">2019-20</option>
        <option value="2020-21">2020-21</option>
        <option value="2021-22">2021-22</option>
        <option value="2022-23">2022-23</option>
     </select>
    
    <div class="group" style="float: right;">
      <input type="file" id="add_photo"  name="add_photo" required="required" accept="image/jpg" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="add_name"  name="add_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
    <div class="group" style="float: right;"> 
      <input id="add_dob" name="add_dob" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>D.O.B.</label>
    </div>
     <div class="group" style="float: left;">
      <input type="number" id="add_aadhar"  name="add_aadhar" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Aadhar No.</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text"  id="add_email"  name="add_email" required="required"  autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    <div class="group" style="float: left;">
      <input type="number" id="add_f_mobile"  name="add_f_mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's Contact</label>
    </div>
    <div class="group" style="float: right;">
      <input type="number" id="add_mobile"  name="add_mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Student Contact</label>
    </div>
    
    <div class="clearfix"></div>
    <div style="color: #999; float: left;" >
      <input  style="width: 20px;float: right;" class="add_gender" type="radio" name="add_gender" value="Female"  required="required"><span style="float:right;">Female </span></input>
       <input style="width: 20px;float: right;" class="add_gender" type="radio" name="add_gender" value="Male"  required="required" ><span style="float:right;">Male </span></input> 
       <b style="color: #999;float: right;">Gender&nbsp;</b>
    </div>
    <div style="color: #999; float: right;">
        <b style="color: #999; float: left;">Category&nbsp;</b>
      <input style="width: 20px;float: left;" class="add_category" type="radio" name="add_category" value="General"  required="required"><span style="float:left;">GEN </span></input> 
      <input  style="width: 20px;float: left;" class="add_category" type="radio" name="add_category" value="OBC"  required="required"><span style="float:left;">OBC </span></input>
      <input  style="width: 20px;float: left;" class="add_category" type="radio" name="add_category" value="SC"  required="required"><span style="float:left;">SC </span></input>
      <input  style="width: 20px;float: left;" class="add_category" type="radio" name="add_category" value="ST"  required="required"><span style="float:left;">ST </span></input>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="add_f_name"  name="add_f_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="add_f_occupation"  name="add_f_occupation" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's Occupation</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="add_m_name"  name="add_m_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mother's name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="add_m_occupation"  name="add_m_occupation" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mother's Occupation</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="add_address"  name="add_address" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Address</label>
    </div>
    <div class="group"style="float: right;" >
      <input type="text"  id="add_fee_details"  name="add_fee_details"  required="required"  autocomplete="off" ></text><span class="highlight"></span><span class="bar"></span>
      <label>Fee details</label>
    </div>  
</div>
 <div class="clearfix"></div>
      <input type="hidden" id="add_form"  name="add_form" required="required" autocomplete="off" />
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_student">
              Add student
            </button>  </form>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>









<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details</h4>
                  </div>
                    <div class="modal-body" id="show_body" style="height: 600px;">
                     
                    </div>
  <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>



<div id="edit"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Edit Details</h4>
      </div>
      <div class="modal-body">
        <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>upload failed</li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
  <?php echo e(session('success')); ?>

</div> 
<?php endif; ?>
  <form action="editstudent" method="POST" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?> 
    <img src="<?php echo e(asset('account/header_form.png')); ?>" width="100%">
    <input type="hidden" id="edit_id"  name="edit_id">
     <div><select class="form-control" id="edit_class" name="edit_class" required="required">
     <option value="">Class</option>
     <option id="edit_class-8" value="8th">8th</option>
     <option id="edit_class-9" value="9th">9th</option>
     <option id="edit_class-10" value="10th">10th</option> 
     <option id="edit_class-11" value="11th">11th</option> 
     <option id="edit_class-12" value="12th">12th</option> 
     <option id="edit_class-repeater" value="Repeater">Repeater</option> 
         </select></div>
   <div><select class="form-control" id="edit_course" name="edit_course" required="required"> 
    <option value="">Course</option>
     <option id="edit_course-foundation" value="Foundation">Foundation</option>
     <option id="edit_course-jeemain" value="JEE Main">JEE Main</option>
     <option id="edit_course-jeeadv" value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option id="edit_course-neet" value="NEET">NEET</option> 
     <option id="edit_course-neetaiims" value="NEET + AIIMS">NEET + AIIMS</option> 
     <option id="edit_course-cet" value="MHT-CET">MHT-CET</option>
     <option id="edit_course-classroom" value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div><select class="form-control" id="edit_coursetype" name="edit_coursetype" required="required"> 
     <option value="">Course Type</option>
     <option id="edit_coursetype-classroom"  value="Classroom Course">Classroom Course</option>
     <option id="edit_coursetype-crash"  value="Crash Course">Crash Course</option>
     <option id="edit_coursetype-distance" value="Distance Learning">Distance Learning</option>
     </select> </div>
     <div>
      <select class="group adcyear" id="edit_year" name="edit_year" required="required" style="float: left; margin-bottom:38px;"> 
     <option value="">Academic Year</option>
    <option value="2017-18">2017-18</option>
        <option value="2018-19">2018-19</option>
        <option value="2019-20">2019-20</option>
        <option value="2020-21">2020-21</option>
        <option value="2021-22">2021-22</option>
        <option value="2022-23">2022-23</option>
     </select>
    <div class="group" style="float: right;">
      <input type="file" id="edit_photo"  name="edit_photo" accept="image/jpg" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="edit_name"  name="edit_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
    <div class="group" style="float: right;"> 
      <input id="edit_dob" name="edit_dob" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>D.O.B.</label>
    </div>
     <div class="group" style="float: left;">
      <input type="number" id="edit_aadhar"  name="edit_aadhar" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Aadhar No.</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text"  id="edit_email"  name="edit_email" required="required"  autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    <div class="group" style="float: left;">
      <input type="number" id="edit_f_mobile"  name="edit_f_mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's Contact</label>
    </div>
    <div class="group" style="float: right;">
      <input type="number" id="edit_mobile"  name="edit_mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Student Contact</label>
    </div>
    
    <div class="clearfix"></div>
    <div style="color: #999; float: left;" >
      <input  style="width: 20px;float: right;" id="edit_gender" type="radio" name="edit_gender" required="required" value="Female"><span style="float:right;">Female </span></input>
       <input style="width: 20px;float: right;" id="edit_gender" type="radio" name="edit_gender" required="required" value="Male"  ><span style="float:right;">Male </span></input> 
       <b style="color: #999;float: right;">Gender&nbsp;</b>
    </div>
    <div style="color: #999; float: right;">
        <b style="color: #999; float: left;">Category&nbsp;</b>
      <input style="width: 20px;float: left;" id="edit_category" type="radio" name="edit_category" required="required" value="General"><span style="float:left;">GEN </span></input> 
      <input  style="width: 20px;float: left;" id="edit_category" type="radio" name="edit_category" required="required" value="OBC"><span style="float:left;">OBC </span></input>
      <input  style="width: 20px;float: left;" id="edit_category" type="radio" name="edit_category" required="required" value="SC"><span style="float:left;">SC </span></input>
      <input  style="width: 20px;float: left;" id="edit_category" type="radio" name="edit_category" required="required" value="ST"><span style="float:left;">ST </span></input>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="edit_f_name"  name="edit_f_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="edit_f_occupation"  name="edit_f_occupation" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Father's Occupation</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="edit_m_name"  name="edit_m_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mother's name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="edit_m_occupation"  name="edit_m_occupation" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mother's Occupation</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="edit_address"  name="edit_address" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Address</label>
    </div>
    <div class="group"style="float: right;" >
      <input type="text"  id="edit_fee_details"  name="edit_fee_details"  required="required"  autocomplete="off" ></text><span class="highlight"></span><span class="bar"></span>
      <label>Fee details</label>
    </div>  
  <div class="clearfix"></div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_student">
              Edit Details
            </button>  </form>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>



 
 <div id="delete" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Hide</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
             <h4 id="delete-name"></h4>
           <p id="delete-id" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-student">
              Hide
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>



<div id="delete1" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Hide</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
             <h4 id="delete-name1"></h4>
           <p id="delete-id1" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-student1">
              Delete
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
</div></div>
<?php $__env->stopSection(); ?>
