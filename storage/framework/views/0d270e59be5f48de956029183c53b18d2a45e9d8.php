<?php $__env->startSection('inner_block'); ?>
<script type="text/javascript" src="<?php echo e(asset('account/js/jspdf.js')); ?>"></script>
<img src="<?php echo e(asset('account/0001.jpg')); ?>" id="img"/>


<form>
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
            <a  style="background-color: #fd6e70" class="btn btn-warning"id="add-student">
              Add student
            </a>
            <script type="text/javascript">
              $('#add-student').click(function(){
                 var doc = new jsPDF('p', 'mm', 'a4');
                 var img=document.getElementById("img");
                 doc.addImage(img,'JPEG',0,0,210,297);
                 var name = $('#add-name').val();
                 doc.text(23,81,name);
                 doc.save('');
               });
             
            </script>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>