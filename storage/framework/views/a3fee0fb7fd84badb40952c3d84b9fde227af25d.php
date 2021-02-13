
<?php $__env->startSection('popup'); ?>
 <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d');?>
 <link href="<?php echo e(asset('admin/bootstrap/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/input.css')); ?>">
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Investment_Details</h4>
      </div>
      <div class="modal-body">
       <p class="add-error text-center alert alert-danger hidden"></p>
        <p class="add-success text-center alert alert-success hidden">DATA SAVED.......</p>
  <form method="POST" role="modal" id="addyear">
    <?php echo e(csrf_field()); ?> 
         <div id="add_mode_div"><select class="form-control" id="add_mode" name="add_mode" required="required">
     <option value="">Mode</option>
    <option value="Cash">Cash</option>
     <option value="Cheque">Cheque</option>
     <option value="Direct">Bank's Cash</option>
         </select></div>
           <div id="add_Direct_div" class="hidden"><select class="form-control" id="bcash" name="bcash" >
     <option value="">Bank's Cash Type</option>
     <option value="Varsha's A/c">Varsha's A/c(Cash)</option> 
     <option value="Inspire's A/c">Inspire's A/c(Online)</option>
     <option value="Sahu's A/c">Sahu's A/c(Cash)</option> 
     <option value="Custom1's A/c">Custom1's A/c(Cash)</option>
     <option value="Custom2's A/c">Custom2's A/c(Cash)</option>  
         </select></div>
  <div  class="time group" style="float:left;">
      <input type="date" id="add_dtp_input1" name ="add_publishtime" value="<?php echo e($timer); ?>" required="required" autocomplete="off"/>
            </div>

         <div id="add_Check_div" class="hidden">
         <div  class="group adcyear" style="float: right; margin-bottom:38px;"><select class="form-control" id="add_check_type" name="add_check_type" required="required">
     <option value="">Cheque Type</option>
     <option value="blank Cheque">Blank Cheque</option>
    <option value="Varsha's Cheque">Varsha's A/c</option> 
     <option value="Inspire's Cheque">Inspire's A/c</option>
     <option value="Custom1's Cheque">Custom1's A/c</option>
     <option value="Custom2's Cheque">Custom2's A/c</option>  
     <option class="hidden" value="Varsha's A/c">Cheque Type</option> 
     <option class="hidden" value="Inspire's A/c">Cheque Type</option>
     <option class="hidden" value="Sahu's A/c">Cheque Type</option> 
     <option class="hidden" value="Custom1's A/c">Cheque Type</option>
     <option class="hidden" value="Custom2's A/c">Cheque Type</option>  
         </select></div>
         
    <div class="group" style="float: left;">
      <input type="text" id="add_branch"  name="add_branch" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Branch Name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="text" id="add_bank"  name="add_bank" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Bank Name</label>
    </div>
    <div class="group" style="float:left;">
      <input type="text" id="add_check_number" required="required" name="add_check_number" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Check Number</label>
    </div></div>
    
  <div id="add_amount_div" class="hidden">
    <div  class="group" style="float: right;">
      <input type="text" id="add_description"  name="add_description" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Description</label>
    </div>
    </div>
   
 <div class="clearfix"></div>
     
        <div class="group" style="float: left;">
      <input type="number" id="add_inv_amount"  name="add_inv_amount" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Amount</label>
    </div>
</div></form>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_details">
              Add Investment
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
  <h4 class="modal-title">Clear Investment</h4>
      </div>
      <div class="modal-body">
       <p class="edit-error text-center alert alert-danger hidden"></p>
        <p class="edit-success text-center alert alert-success hidden">Investment Cleared.......</p>
  <form role="modal">
    <?php echo e(csrf_field()); ?> 
     <div class="group" class="form-control">
      <input type="number" id="edit_amount"  name="edit_amount" required="required" autocomplete="off" disabled/><span class="highlight"></span><span class="bar"></span>
      
       <input type="hidden" id="edit_id"  name="edit_id" required="required" autocomplete="off"/>
    </div>
     <div><select class="form-control" id="edit_mode" name="edit_mode" required="required">
     <option value="">Mode</option>
     <option value="Cheque">Cheque</option>
     <option value="Cash">Cash</option>
     <option value="Direct">Direct Deposited</option> 
         </select></div>
          <div id="Direct_div" class="hidden"><select class="form-control" id="edit_Direct" name="edit_Direct" >
     <option value="">Deposite type</option>
     <option value="Varsha's A/c">Varsha's A/c(Cash)</option> 
     <option value="Inspire's A/c">Inspire's A/c(Online)</option>
     <option value="Sahu's A/c">Sahu's A/c(Cash)</option> 
     <option value="Custom1's A/c">Custom1's A/c(Cash)</option>
     <option value="Custom2's A/c">Custom2's A/c(Cash)</option> 
         </select></div>
           <div  class="time group" style="float:left;">
      <input type="date" id="edit_dtp_input1" name ="edit_publishtime" value="<?php echo e($timer); ?>" required="required" autocomplete="off"/>
            </div>
         <div id="Check_div" class="hidden">
          <div class="group adcyear" style="float: right; margin-bottom:38px;"><select class="form-control" id="edit_check_type" name="edit_check_type">
     <option value="">Cheque Type</option>
     <option value="blank Cheque">Blank Cheque</option>
    <option value="Varsha's Cheque">Varsha's A/c</option> 
     <option value="Inspire's Cheque">Inspire's A/c</option>
     <option value="Custom1's Cheque">Custom1's A/c</option>
     <option value="Custom2's Cheque">Custom2's A/c</option>  
     <option class="hidden" value="Varsha's A/c">Cheque Type</option> 
     <option class="hidden" value="Inspire's A/c">Cheque Type</option>
     <option class="hidden" value="Sahu's A/c">Cheque Type</option> 
     <option class="hidden" value="Custom1's A/c">Cheque Type</option>
     <option class="hidden" value="Custom2's A/c">Cheque Type</option>  
         </select></div>
      <div class="group" style="float: left;">
      <input type="text" id="edit_bank"  name="edit_bank" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Bank Name</label>
    </div>
    <div class="group" style="float: right;">
      <input type="text" id="edit_branch"  name="edit_branch" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Branch Name</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="edit_check_number" required="required" name="edit_check_number" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Check Number</label>
    </div> </div>
     <div class="group" style="float: right; padding-top: 10px;">
      <input type="text" id="edit_description" required="required" name="edit_description" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Description</label>
    </div></div>
       
<div class="clearfix"></div>
  <div class="modal-footer">
     <div class="group" style="float: left;">
      <input type="number" id="edit_inv_amount"  name="edit_inv_amount" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Clearing Amount</label>
       <input type="hidden" id="edit_id"  name="edit_id" required="required" autocomplete="off"/>
    </div>
</form>
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="clear_details">
             Clear Investment
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
