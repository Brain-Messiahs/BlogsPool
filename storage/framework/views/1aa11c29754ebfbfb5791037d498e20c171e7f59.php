<?php $__env->startSection('popup'); ?>


 <div id="delete" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">delete</h4>
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

 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainshow_result.css')); ?>">
 <div id="show" class="modal fade " role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
      </div>
      <div id="table" class="modal-body">
      
   
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainresult.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Results</b>
     <div class="searchForm">
      <form action="<?php echo e(route('admin-paper_result')); ?>" method="get">
         <input type="hidden" name="id" value="<?php echo e(Request::get('id')); ?>" />
        <input id="searchField" type="text" name="s" placeholder="Search here"/> 
        <div class="close">
            <span class="front"></span>
            <span class="back"></span>
        </div>  </form>  
    </div></h4> 
</div></div>
   <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" id="tbody">
           <table>
            <thead>
              <tr class="table100-head">
                 <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Class</th>
                <th class="column4">course</th>
                <th class="column5">Paper</th>
                 <th class="column6"></th>
                  <th class="column7"></th>
                </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->active==1): ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->name); ?></strong></td>
                  <td class="column3"><strong><?php echo e($user->classid); ?></strong></td>
                  <td class="column4"><strong><?php echo e($user->courseid); ?></strong></td>
                  <td class="column5"><strong><?php echo e($user->paper); ?></strong></td>
                  <td class="column6"><?php if($user->rank!=''): ?>
                    <a>AIR <?php echo e($user->rank); ?></a><?php endif; ?></td>
                  <td class="column6" style="padding: 5px 5px 5px 5px;cursor:pointer;" ><strong><a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->pname); ?>">RESULT</a></strong></td>
                  <td class="column7"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->paper); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></td>  
                  </tr>   
                   <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>
        </div>
        </div>
    </div>  
    <style type="text/css">
li {list-style: none;}
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('input[name=s]').val();
    var id ="<?php echo e(app('request')->input('id')); ?>";
    var img ="<?php echo e(route('admin-paper_result_page',['id'=>':id','s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3id',id);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });
   $(document).on('click', '#show-button', function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var id=$(this).data('id');
    var img ="<?php echo e(route('admin-resultshow',['id'=>':id'])); ?>";
    var img = img.replace('%3Aid',id);
    $.get(img,function(data){
          $('#table').empty().html(data);
    })
    });
    $(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
 $('#delete-student').click(function() {
  var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: '<?php echo e(route('admin-delete_result')); ?>',
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>