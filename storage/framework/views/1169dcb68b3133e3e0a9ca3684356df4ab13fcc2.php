<?php $__env->startSection('popup'); ?>
 <?php $date = new \DateTime();
$timer=date_format($date, 'Y-m-d');?>
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainearning_list.css')); ?>">
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
  <form action="addyear" method="POST" role="modal" id="addyear">
    <?php echo e(csrf_field()); ?> 
    <div><select class="form-control" id="add_fee_type" name="add_fee_type" required="required">
     <option value="">Fee Type</option>
     <option value="Registration Fee">Registration Fee</option>
     <option value="1st Instalment">1st Instalment</option>
     <option value="2nd Instalment">2nd Instalment</option>
     <option value="3rd Instalment">3rd Instalment</option>
     <option value="4th Instalment">4th Instalment</option>
     <option value="online Fee">Online</option>
         </select></div>  
     <div><select class="form-control" id="add_mode" name="add_mode" required="required">
     <option value="">Mode</option>
     <option value="Cash">Cash</option>
     <option value="Cheque">Cheque</option>
     <option value="Direct">Direct Deposited</option> 
         </select></div>
          <div id="Direct_div" class="hidden"><select class="form-control" id="add_Direct" name="add_Direct" >
     <option value="">Deposite type</option>
     <option value="Varsha's A/c">Varsha's A/c(Cash)</option> 
     <option value="Inspire's A/c">Inspire's A/c(Cash)</option>
     <option value="Sahu's A/c">Sahu's A/c(Cash)</option> 
     <option value="Custom1's A/c">Custom1's A/c(Cash)</option>
     <option value="Custom2's A/c">Custom2's A/c(Cash)</option>  
         </select></div>
          <div  class="time group" style="float:left;">
      <input type="date" id="dtp_input1" name ="publishtime" value="<?php echo e($timer); ?>" required="required" autocomplete="off"/>
            </div>
         <div id="Check_div" class="hidden">
          <div class="group adcyear" style="float:right;  margin-bottom:38px;"><select class="form-control" id="add_Check_type" name="add_Check_type">
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
      <input type="text" id="add_bank"  name="add_bank" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Bank Name</label>
    </div>
    <div class="group" style="float: right;">
      <input type="text" id="add_branch"  name="add_branch" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Branch Name</label>
    </div>
    <div class="group" style="float: left;">
      <input type="text" id="add_Check_number" required="required" name="add_Check_number" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Check Number</label>
    </div>
  </div>
  <div class="group" style="float: right; padding-top: 10px;">
      <input type="text" id="add_description" required="required" name="add_description" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Description</label>
    </div></div>
<div class="clearfix"></div>

  <div class="modal-footer">
    <div class="group" style="float: left;">
      <input type="number" id="add_amount"  name="add_amount" required="required" autocomplete="off"/><span class="highlight"></span><span class="bar"></span>
      <label>Amount</label>
       <input type="hidden" id="add_sid"  name="add_sid" required="required" autocomplete="off"/>
      <input type="hidden" id="add_name"  name="add_name" required="required" autocomplete="off"/>
       <input type="hidden" id="add_f_name"  name="add_f_name" required="required" autocomplete="off"/>
        <input type="hidden" id="add_class"  name="add_class" required="required" autocomplete="off"/>
         <input type="hidden" id="add_year"  name="add_year" required="required" autocomplete="off"/>
    </div> </form> 
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_details">
              Add Deposited Fee
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
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete_earning">
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






<div id="show" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fee_Details</h4>
      </div>
      <div class="modal-body" id="show_body">
   
 
          </div>
      </div>
    </div>
  </div>
</div></div>
<?php $__env->stopSection(); ?>
