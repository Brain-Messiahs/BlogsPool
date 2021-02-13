
<?php $__env->startSection('popup'); ?>

<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <p id="addpserror"></p>
        <p class="add-error text-center alert alert-danger hidden"></p>
        <p id="add-success" class=" text-center alert alert-success hidden">DATA SAVED.......</p>
        <div class="col-md-12">
          <form class="form-horizontal" role="modal">
        <div><select class="form-control" id="add-class" name="add-class">
     <option value="">Class</option>
     <option id="add-class-8" value="8th">8th</option>
     <option id="add-class-9" value="9th">9th</option>
     <option id="add-class-10" value="10th">10th</option> 
     <option id="add-class-11" value="11th">11th</option> 
     <option id="add-class-12" value="12th">12th</option> 
     <option id="add-class-repeater" value="Repeater">Repeater</option> 
         </select></div>
   <div><select class="form-control" id="add-course" name="add-course">  
    <option value="">Course</option>
     <option id="add-course-foundation" value="Foundation">Foundation</option>
     <option id="add-course-jeemain" value="JEE Main">JEE Main</option>
     <option id="add-course-jeeadv" value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option id="add-course-neet" value="NEET">NEET</option> 
     <option id="add-course-neetaiims" value="NEET + AIIMS">NEET + AIIMS</option> 
     <option id="add-course-cet" value="MHT-CET">MHT-CET</option>
     <option id="add-course-classroom" value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div><select class="form-control" id="add-coursetype" name="add-coursetype"> 
     <option value="">Course Type</option>
     <option id="add-coursetype-classroom"  value="Classroom Course">Classroom Course</option>
     <option id="add-coursetype-crash"  value="Crash Course">Crash Course</option>
     <option id="add-coursetype-distance" value="Distance Learning">Distance Learning</option>
     </select> </div>
     <div>
      <label>Group</label>
      <input class="add-group" type="radio" name="add-group" value="A">A </input> 
      <input class="add-group" type="radio" name="add-group" value="B">B </input>
      <input class="add-group" type="radio" name="add-group" value="C">C </input>
      <input class="add-group" type="radio" name="add-group" value="D">D </input>
      <input class="add-group" type="radio" name="add-group" value="E">E </input>
      <input class="add-group" type="radio" name="add-group" value="F">F </input>
</div>
<!-- -------------------------------------------------------------------option menu end-------------------------- -->
    <div class="col-lg-6">
      <label>Name*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="add-name" type="text" name="add-name">
    </div>
    <div class="col-lg-6">
      <label>Username*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="add-username" type="text" name="add-username">
    </div>
    <div class="col-lg-6">
      <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="add-email" type="email" name="add-email">
    </div>
    <div class="col-lg-6">
      <label>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="add-mobile" type="number" name="add-mobile">
    </div>

    <div class="col-lg-6">
      <label>Password*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="add-password" type="password" name="add-password">
    </div>
    <div class="col-lg-6">
      <label>Confirm password*</label>
      <input id="add-password1" type="password" name="add-password1">
      <br>
          <br>
           </div>
        </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add-student">
              Add student
            </button>
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
                    <div class="modal-body" style="color: #fd6e70">
                      <div class="col-md-4 profile-bottom-img">
        <img src="<?php echo e(asset('student/images/'.Auth::user()->photo)); ?>" alt="">
      </div>
   <div class="limiter">
   <div class="container-table100" style="background-color: transparent;">
      <div class="wrap-table100">
        <div class="table100">

        <table>
                    <tr><td class="show-detail">ID</td><td>:</td><td id="show-id"></td></tr>
                    <tr><td class="show-detail">NAME</td><td>:</td><td id="show-name"></td></tr>
                     <tr><td class="show-detail">USERNAME</td><td>:</td><td id="show-username"></td></tr>
                    <tr><td class="show-detail">EMAIL</td><td>:</td><td id="show-email"></td></tr>
                    <tr><td class="show-detail">CONTACT</td><td>:</td><td id="show-mobile"></td></tr>
                    <tr><td class="show-detail">CLASS</td><td>:</td><td id="show-class"></td></tr>
                    <tr><td class="show-detail">COURSE</td><td>:</td><td id="show-course"></td></tr>
                    <tr><td class="show-detail">COURSE TYPE</td><td>:</td><td id="show-coursetype"></td></tr>
                    <tr><td class="show-detail">GROUP</td><td>:</td><td id="show-group"></td></tr>
                    </table></div></div></div></div></div>
                    </div>
                    </div>
                    </div>
              


<div id="edit"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Edit Details</h4>
      </div>
      <div class="modal-body">
        <p id="editpserror"></p>
      <p class="edit-error text-center alert alert-danger hidden"></p>
        <p id="edit-success" class=" text-center alert alert-success hidden">Updated Successfully.......</p>
        <div class="col-md-12">
          <form class="form-horizontal" role="modal">
             <input id="edit-id" type="hidden" name="edit-id" disabled>
        <div><select class="form-control" id="edit-class" name="edit-class">
     <option value="">Class</option>
     <option id="edit-class-8" value="8th">8th</option>
     <option id="edit-class-9" value="9th">9th</option>
     <option id="edit-class-10" value="10th">10th</option> 
     <option id="edit-class-11" value="11th">11th</option> 
     <option id="edit-class-12" value="12th">12th</option> 
     <option id="edit-class-repeater" value="Repeater">Repeater</option> 
         </select></div>
   <div><select class="form-control" id="edit-course" name="edit-course"> 
    <option value="">Course</option>
     <option id="edit-course-foundation" value="Foundation">Foundation</option>
     <option id="edit-course-jeemain" value="JEE Main">JEE Main</option>
     <option id="edit-course-jeeadv" value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option id="edit-course-neet" value="NEET">NEET</option> 
     <option id="edit-course-neetaiims" value="NEET + AIIMS">NEET + AIIMS</option> 
     <option id="edit-course-cet" value="MHT-CET">MHT-CET</option>
     <option id="edit-course-classroom" value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div><select class="form-control" id="edit-coursetype" name="edit-coursetype"> 
     <option value="">Course Type</option>
     <option id="edit-coursetype-classroom"  value="Classroom Course">Classroom Course</option>
     <option id="edit-coursetype-crash"  value="Crash Course">Crash Course</option>
     <option id="edit-coursetype-distance" value="Distance Learning">Distance Learning</option>
     </select> </div>
     <div>
      <label>Group</label>
      <input class="edit-group" type="radio" name="edit-group" value="A">A </input> 
      <input class="edit-group" type="radio" name="edit-group" value="B">B </input>
      <input class="edit-group" type="radio" name="edit-group" value="C">C </input>
      <input class="edit-group" type="radio" name="edit-group" value="D">D </input>
      <input class="edit-group" type="radio" name="edit-group" value="E">E </input>
      <input class="edit-group" type="radio" name="edit-group" value="F">F </input>
</div>
<!-- -------------------------------------------------------------------option menu end-------------------------- -->
     <div class="col-lg-6">
      <label>Name*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="edit-name" type="text" name="edit-name">
    </div>
    <div class="col-lg-6">
      <label>Username*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="edit-username" type="text" name="edit-username">
    </div>
    <div class="col-lg-6">
      <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="edit-email" type="email" name="edit-email">
    </div>
    <div class="col-lg-6">
      <label>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="edit-mobile" type="number" name="edit-mobile">
    </div>

    <div class="col-lg-6">
      <label>Password*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="edit-password" type="password" name="edit-password">
    </div>
    <div class="col-lg-6">
      <label>Confirm password*</label>
      <input id="edit-password1" type="password" name="edit-password1">
      <br>
          <br>
           </div>
        </form>
    </div>
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="edit-student">
              Update Details
            </button>
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
  
        <h4 class="modal-title">delete</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
             <h4 id="delete-name"></h4>
           <p id="delete-id" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-student">
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
