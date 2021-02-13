
<?php $__env->startSection('popup'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/input.css')); ?>">

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
       
          <form class="form-horizontal" role="modal">
<!-- -------------------------------------------------------------------option menu end-------------------------- -->
    <div class="group" style="float: left;">
      <input type="text" id="add-name"  name="add-name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="add-email"  name="add-email" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    
     <div class="group" style="float: left;">
      <input type="number" id="add-mobile"  name="add-mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mobile no.</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text"  id="add-subject"  name="add-subject" required="required"  autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Subject</label>
    </div>
    <div class="clearfix"></div>
    <div style="color: #999; float: left;" >
       <input style="width: 20px;float: right;" class="add-type" type="radio" name="add-type" value="Non Teaching"  required="required" ><span style="float:right;">Non Teaching </span></input> 
       <input  style="width: 20px;float: right;" class="add-type" type="radio" name="add-type" value="Teaching"  required="required"><span style="float:right;">Teaching </span></input>
       <b style="color: #999;float: right;">Staff&nbsp;&nbsp;&nbsp;</b>
    </div>
     <div class="group" style="float: right;">
      <input type="textarea" id="add-address"  name="add-address" rows="3" required="required"></input><span class="highlight"></span><span class="bar"></span>
      <label>Address</label>
    </div>
    </div>
 <div class="clearfix"></div>
        </form>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add-teacher">
              Add teacher
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
        <img src="<?php echo e(asset('student/images/'.Auth::user()->photo)); ?>" alt=""/>
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
                    <tr><td class="show-detail">Address</td><td>:</td><td id="show-address"></td></tr>
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
<!-- -------------------------------------------------------------------option menu end-------------------------- -->
     <div class="group" style="float: left;">
      <input type="text" id="edit-name"  name="edit-name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="edit-email"  name="edit-email" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    
     <div class="group" style="float: left;">
      <input type="number" id="edit-mobile"  name="edit-mobile" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Mobile no.</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text"  id="edit-subject"  name="edit-subject" required="required"  autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Subject</label>
    </div>
    <div class="clearfix"></div>
    <div style="color: #999; float: left;" >
       <input style="width: 20px;float: right;" class="edit-type" type="radio" name="edit-type" value="Non Teaching"  required="required" ><span style="float:right;">Non Teaching </span></input> 
       <input  style="width: 20px;float: right;" class="edit-type" type="radio" name="edit-type" value="Teaching"  required="required"><span style="float:right;">Teaching </span></input>
       <b style="color: #999;float: right;">Staff&nbsp;&nbsp;&nbsp;</b>
    </div>
     <div class="group" style="float: right;">
      <input type="textarea" id="edit-address"  name="edit-address" rows="3" required="required"></input><span class="highlight"></span><span class="bar"></span>
      <label>Address</label>
    </div>
    </div>
 <div class="clearfix"></div>
        </form>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="edit-teacher">
              Update Details
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
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
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-teacher">
              Delete
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
