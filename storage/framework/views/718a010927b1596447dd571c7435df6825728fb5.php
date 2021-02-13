<?php $__env->startSection('inner_block'); ?>
<div class="inner-block col-12 " style="padding: 5%">
    <form>
          <?php echo csrf_field(); ?>
        <h3>UPLOAD PAPER</h3>
 <p class="add-error text-center alert alert-danger hidden"></p>
        <p class="add-success text-center alert alert-success hidden">Paper Uploaded Successfully...</p>
        <div class="col-3 text-center" style="margin-top: 20px; margin-right: 13%">
      <label>&nbsp;&nbsp;name * </label>
      <input type="text" name="papername"  id="papername" required>
    </div>
     <div class="col-3 text-center" style="margin-top: 20px; margin-right: 13%">
      <label>&nbsp;&nbsp;structure</label>
      <input type="text" name="paper" id="paper" required>
    </div>
    <div class="col-3 text-center" style="margin-top: 20px;margin-right: 15%">

      <label>Answer</label>
      <input type="text" name="answer" id="answer" required>
    </div>  </form>
    <div class="col-6" style="margin-top: 20px;">
      <button type="submit" id="sub" style="background-color: #fd6e70" class="btn center-block " name="change">Upload</button>
    </div>
  
</div>

<style type="text/css">
h3{
    text-align: center;
    color: #4f4f4f;
    padding-top: 2%;
    font-family: 'Arial Black', Gadget, sans-serif;
    margin-bottom: 4%;
}

    </style>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
    <script type="text/javascript">
       $(document).on('click', '#sub', function() {
 var loading = document.getElementById('loading');
    loading.style.display='';
    
       $.ajax({
      type: 'POST',
      url: '<?php echo e(route('admin-adv_paper_upload_submit')); ?>',
      data: {
        '_token': $('input[name=_token]').val(),
        'papername': $('input[name=papername]').val(),
        'paper': $('input[name=paper]').val(),
        'answer': $('input[name=answer]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if (!$('.add-success').hasClass('hidden')) {
          $('.add-success').addClass('hidden');
        }  
          $('.add-error').removeClass('hidden');
          $('.add-error').text('Old Password not Matched...');
           $("#loading").fadeOut(500);
        
        }else{
          if (!$('.add-error').hasClass('hidden')) {
          $('.add-error').addClass('hidden'); }
          if ($('.add-success').hasClass('hidden')) {
          $('.add-success').removeClass('hidden');
           $("#loading").fadeOut(500); }

    $('#papername').val('');
    $('#paper').val('');
    $('#answer').val('');
  $("#loading").fadeOut(500);
  }

    },
    })
    });

    </script> 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>