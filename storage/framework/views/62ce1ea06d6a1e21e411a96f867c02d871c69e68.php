<?php $__env->startSection('popup'); ?>
<div id="delete" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Recycle</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
            <?php echo csrf_field(); ?>
             <h4 id="delete-name"></h4>
           <p id="delete-id" class="hidden"></p>
            </form>
   
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-student">
              Recycle
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
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainnormal_paper_list_recycle.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Deleted Papers</b>
    <div class="searchForm">
     <form action="<?php echo e(route('teacher-recycle_normal_paper')); ?>" method="get">
        <input id="searchField" type="text" name="s" placeholder="Search here"/>   
        <div class="close">
            <span class="front"></span>
            <span class="back"></span>
        </div> </form> 
    </div></h4> 
</div></div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Paper Name</th>
                <th class="colum3"></th>
                <th class="column4"></th>
                <th class="column5">total_marks</th>
                <th class="column6">Created_at</th>
                <th class="column7">Recycle</th>
              </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->active == 0): ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->pname); ?></strong></td>
                  <td class="column3"></td>
                  <td class="column4"></td>
                  <td class="column5"><?php echo e($user->total_marks); ?></td>
                  <td class="column6"><?php echo e($user->created_at); ?></td>
                  <td class="column7"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="fa fa-recycle fa-2x" style="color: #30dd8a"></i></a></td>   
                          </tr> 
                  <?php endif; ?>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>
        </div>
        </div>
    </div>  
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
<script type="text/javascript">$(". search-btn").click(function(){
  $(".search-input").toggleClass("active").focus;
  $(this).toggleClass("animate");
  $(".input").val("");
});</script>
<script type="text/javascript">
   $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('input[name=s]').val();
    var img ="<?php echo e(route('teacher-recycle_normal_paper_page',['s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });
 $(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to Recycle ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
 $('#delete-student').click(function() {
  var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: '<?php echo e(route('teacher-recycle_normal_paper_submit')); ?>',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#delete-id').text(),
    },
    success: function(data){
    $('.user'+$('#delete-id').text()).hide();
      $('#delete').modal('hide');
     $("#loading").fadeOut(500);
    }
  });
});
 //------------------------------------------------search----------------------------------//

 $('#searchField').keydown(function(e){
    if (e.keyCode === 13) { // If Enter key pressed
        $(this).trigger('submit');
    }
});
 //--------------------------------------------end search------------------------------//
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/teacher_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>