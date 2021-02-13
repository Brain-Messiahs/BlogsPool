<?php $__env->startSection('popup'); ?>
 <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d');?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/input.css')); ?>">
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Fee_details</h4>
      </div>
      <div class="modal-body">
       <p class="add-error text-center alert alert-danger hidden"></p>
        <p class="add-success text-center alert alert-success hidden">DATA SAVED.......</p>
  <form method="POST" role="modal" id="addyear">
    <?php echo e(csrf_field()); ?> 
    <div><select class="form-control" id="type" name="type" required="required">
     <option value="">Type</option>
     <option value="Salary">Salary</option>
     <option value="Rents">Rents</option>
     <option value="Bills">Bills</option>
     <option value="Advertiesment">Advertiesment</option>
     <option value="Purchases">Purchases</option>
     <option value="Regular">Regular</option>
         </select></div> 

         <div id="mode_div"><select class="form-control" id="mode" name="mode" required="required">
     <option value="">Mode</option>
     <option value="Cheque">Cheque</option>
     <option value="Cash">Cash</option>
         </select></div>
 <div class="time">
      
      <input type="date" id="dtp_input1" name ="publishtime" value="<?php echo e($timer); ?>" /><br/>
            </div>



<div id="Salary_div" class="hidden">
   <div style="color: #999; float: left;">
      <input  style="width: 20px;float: right;" class="teacher_type" type="radio" name="teacher_type" value="Non Teaching"  required="required"><span style="float:right;">Non Teaching </span></input>
       <input style="width: 20px;float: right;" class="teacher_type" type="radio" name="teacher_type" value="Teaching"  required="required" ><span style="float:right;">Teaching </span></input> 
       <b style="color: #999;float: right;">Staff&nbsp;</b>
    </div>
     <div class="group hidden" id="teaching" style="float:right;"><select class="form-control" id="teach" class="teacher_name" name="teacher_name">
     <option selected value="">Teacher's Name</option>
     <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($t->type=='Teaching'): ?>
     <option value="<?php echo e($t->name); ?>" data-id="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
     <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select></div>
         <div class="group hidden" id="non_teaching" style="float:right;"><select class="form-control" id="nonteach" class="teacher_name" name="teacher_name">
     <option selected value="">Teacher's Name</option>
     <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($t->type=='Non Teaching'): ?>
     <option value="<?php echo e($t->name); ?>"data-id="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
    
     <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select></div></div>

<div id="Rents_div" class="hidden">
  <div class="group" style="float: left;">
      <input type="text" id="name"  name="name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
</div>
          

         <div id="Check_div" class="hidden">
         <div  class="group" style="float:left;"><select class="form-control" id="check_type" name="check_type" required="required">
     <option value="">Cheque Type</option>
     <option value="Varsha's Cheque">Varsha's A/c</option> 
     <option value="Inspire's Cheque">Inspire's A/c</option> 
     <option value="Blank Cheque">Other Cheque</option>
         </select></div>
         
    <div class="group" style="float: left;">
      <input type="text" id="branch"  name="branch" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Branch Name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="bank"  name="bank" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Bank Name</label>
    </div>
    <div class="group" style="float:left;">
      <input type="text" id="check_number" required="required" name="check_number" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Check Number</label>
    </div>
    
  </div>


  <div id="amount_div" class="hidden">
    <div  class="group" style="float: right;">
      <input type="text" id="description"  name="description" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Description</label>
    </div>
     <div class="group" style="float: left;">
      <input type="number" id="amount"  name="amount" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Amount</label>
    </div>
    </div>








</form></div>
<div class="clearfix"></div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_details">
              Add Expenses
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
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete_expenses">
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
