<?php $__env->startSection('popup'); ?>
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
  <form  role="modal">
    <?php echo e(csrf_field()); ?> 
     <div><select class="form-control" id="add_class" name="add_class" required="required">
     <option value="">Class</option>
     <option id="add_class-8" value="8th">8th</option>
     <option id="add_class-9" value="9th">9th</option>
     <option id="add_class-10" value="10th">10th</option> 
     <option id="add_class-11" value="11th">11th</option> 
     <option id="add_class-12" value="12th">12th</option> 
     <option id="add_class-repeater" value="Repeater">Repeater</option> 
         </select></div>
    <select class="form-control" id="add_year" name="add_year" required="required">
        <option value="">year</option>
        <option value="2017-18">2017-18</option>
        <option value="2018-19">2018-19</option>
        <option value="2019-20">2019-20</option>
        <option value="2020-21">2020-21</option>
        <option value="2021-22">2021-22</option>
        <option value="2022-23">2022-23</option>
      </select>    
    <div class="group" style="float: left;">
      <input type="text" id="add_name"  name="add_name" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Name</label>
    </div>
     <div class="group" style="float: right;">
      <input type="number" id="add_total_fee"  name="add_total_fee" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Total Fee</label>
    </div>
    <div class="group" style="float: left;">
      <input type="number" id="add_reg_fee"  name="add_reg_fee" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Registration Fee</label>
    </div>
    <div class="group" style="float: right;">
      <input type="number" id="add_first"  name="add_first" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>1st Instalment</label>
    </div>
     <div class="group" style="float: left;">
      <input type="number" id="add_second"  name="add_second" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>2nt Instalment</label>
    </div>
     <div class="group" style="float: right;">
      <input type="number" id="add_third"  name="add_third" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>3rt Instalment</label>
    </div>
     <div class="group" style="float: left;">
      <input type="number" id="add_fourth"  name="add_fourth" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>4th Instalment</label>
    </div>
     <div class="group" style="float: right;">
      <input type="number" id="add_online"  name="add_online" required="required" autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
      <label>Online Fee</label>
    </div>
    <input type="hidden" id="add_id"  name="add_id" required="required">
     <input type="hidden" id="add_sid"  name="add_sid" required="required">
      <input type="hidden" id="add_f_name"  name="add_f_name" required="required">
       <input type="hidden" id="add_f_mobile"  name="add_f_mobile" required="required">
</div> </form>
 <div class="clearfix"></div>
      <input type="hidden" id="add_form"  name="add_form" required="required" autocomplete="off" />
  <div class="modal-footer">
    <?php if(Auth::user()->id==1): ?>
    <h5 style="float: left;" id="reg_name"></h5><?php endif; ?>
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add_details">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainfee_details.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Fee Details</b>
       <select id="class">
        <option value="">Class</option>
        <option value="all">All</option>
        <option value="8th">8th</option>
        <option value="9th">9th</option>
        <option value="10th">10th</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
        <option value="Repeater">Repeater</option>
      </select>
      <select id="year">
        <option value="">year</option>
        <option value="all">All</option>
        <option value="2017-18">2017-18</option>
        <option value="2018-19">2018-19</option>
        <option value="2019-20">2019-20</option>
        <option value="2020-21">2020-21</option>
        <option value="2021-22">2021-22</option>
        <option value="2022-23">2022-23</option>
      </select>
      
      
    </h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Father's name</th>
                <th class="column4">Total_fee</th>
                <th class="column5">Reg_fee</th>
                <th class="column6">1st</th>
                <th class="column7">2nd</th>
                <th class="column8">3rd</th>
                <th class="column9">4th</th>
                <th class="column10">Online</th>
                <th class="column11">Edit</th>
                </tr>
                </thead>
                <tbody>
     
       </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-year_list',['year'=>':year','class'=>':class','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('%3Apage',url);
      var img = img.replace('&amp;','&');
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
      console.log(img)
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
  });
  $(document).on('hide.bs.modal', '#add', function() {
    if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden');
        }
        if ($('.add-success').hasClass('hidden')) {
        }else {
          $('.add-success').addClass('hidden');
        } 
  });
  $('#year').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-year_list',['year'=>':year','class'=>':class'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });
    $('#class').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
   var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-year_list',['year'=>':year','class'=>':class'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });
   $(document).on('click', '#add-button', function() {
   $('#add_class').val($(this).data('class'));
   $('#add_year').val($(this).data('year'));
    $('#add_name').val($(this).data('name'));
    $('#add_total_fee').val($(this).data('total_fee'));
    $('#add_reg_fee').val($(this).data('reg_fee'));
    $('#add_first').val($(this).data('first'));
    $('#add_second').val($(this).data('second'));
    $('#add_third').val($(this).data('third'));
    $('#add_fourth').val($(this).data('fourth'));
    $('#add_online').val($(this).data('online'));
    $('#add_id').val($(this).data('id'));
    $('#add_sid').val($(this).data('sid'));
    $('#add_f_name').val($(this).data('f_name'));
  $('#add_f_mobile').val($(this).data('f_mobile')); 
   $('#reg_name').text('Reg. by. -'+$(this).data('reg_name'));
});
 $("#add_details").click(function() {
       var loading = document.getElementById('loading');
    loading.style.display='';
      $.ajax({
      type: 'POST',
      url: 'addyear',
      data: {
        '_token': $('input[name=_token]').val(),
        'class': $('#add_class option:selected').val(),
        'year': $('#add_year option:selected').val(),
        'name': $('input[name=add_name]').val(),
        'total_fee': $('input[name=add_total_fee]').val(),
        'reg_fee': $('input[name=add_reg_fee]').val(),
        'first': $('input[name=add_first]').val(),
        'second': $('input[name=add_second]').val(),
        'third': $('input[name=add_third]').val(),
        'fourth': $('input[name=add_fourth]').val(),
        'online': $('input[name=add_online]').val(),
        'id': $('input[name=add_id]').val(),
        'sid': $('input[name=add_sid]').val(),
        'f_name': $('input[name=add_f_name]').val(),
        'f_mobile': $('input[name=add_f_mobile]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if ($('.add-success').hasClass('hidden')) {
        }else {
          $('.add-success').addClass('hidden');
        }  
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Please Fill All Feild...');
        
        }else{
          if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden'); }
          $('.add-success').removeClass('hidden');
         $('#add_class').val();
   $('#add_year').val();
    $('#add_name').val();
    $('#add_total_fee').val();
    $('#add_reg_fee').val();
    $('#add_first').val();
    $('#add_second').val();
    $('#add_third').val();
    $('#add_fourth').val();
    $('#add_online').val();
    $('#add_id').val();
    $('#add_sid').val();
    $('#add_f_name').val();
    $('#add_f_mobile').val();
  }
   $("#loading").fadeOut(500);
    },
    })
    });
 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>