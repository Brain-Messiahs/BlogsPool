<?php $__env->startSection('popup'); ?>

 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainshow_paper.css')); ?>">
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
<div id="syllabus" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Syllabus</h4>
      </div>
       <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainstudent_show_syllabus.css')); ?>">
      <div class="modal-body" id="syllabusimg">
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainnormal_paper_list_admin.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Upload Paper</b><?php if(Auth::user()->admin=='yes'): ?> <a href="<?php echo e(route('admin-nr_paper_upload')); ?>"> <i class="glyphicon glyphicon-2x glyphicon-upload" style="color: skyblue"></i></a><?php endif; ?>
    <div class="searchForm">
     <form action="<?php echo e(route('admin-normal_paper')); ?>" method="get">
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
                <th class="colum3">Upload File</th>
                <th class="column4">Answer</th>
                <th class="column5">Result Update</th>
                <th class="column6">Publish</th>
               <th class="column7">Syllabus</th>
                <th class="column8">Preview</th>
                <th class="column9">Summary</th>
                <th class="column10">Delete</th>
              </tr>
                </thead>
                <tbody>
      <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="user<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->pname); ?></strong></td>
                  <td class="column3"><a style="color: #fff" class="btn btn-primary" href="<?php echo e(route('admin-normal_paper_ques_upload',['id'=>$user->id])); ?>">Upload paper</a></td>
                  <td class="column4"><a style="color: #fff" class="btn btn-danger" href="<?php echo e(route('admin-normal_paper_ans_upload',['id'=>$user->id])); ?>">Upload Ans.</a></td>
                 <td class="column5"><a style="color: #fff" class="btn btn-info" href="<?php echo e(route('admin-normal_paper_update_result_page',['id'=>$user->id])); ?>">Update</a></td>
                 <td class="column6"><a style="color: #fff" class="btn btn-warning" href="<?php echo e(route('admin-normal_paper_publish',['id'=>$user->id])); ?>">Publish</a></td>
                 <td class="column7"><a id="syllabus-button" data-toggle="modal" data-target="#syllabus" data-id="<?php echo e($user->pname); ?>">
              <i class="fa fa-book" style="color: #ff9933"></i></td>
                 <td class="column8"><a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->pname); ?>">
                   <i class="fa fa-eye" style="color: #5b84d7"></i></td>
                  <td class="column9"><a href="<?php echo e(route('admin-normal_paper_summary',['id'=>$user->id])); ?>"><i style="color: #fd6e70" class="glyphicon glyphicon-download"></i></a></td>
                 <td class="column10"> <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i></a><?php if(Auth::user()->admin=='yes'): ?> <a  href="<?php echo e(route('admin-nr_paper_download',['id'=>$user->id])); ?>"> <i class="glyphicon glyphicon-download" style="color: #4CAF50"></i> </a><?php endif; ?></td>   
                          </tr>   
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
    var img ="<?php echo e(route('admin-normal_paper_page',['s'=>':year','page'=>':page'])); ?>";
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
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
 $('#delete-student').click(function() {
  var loading = document.getElementById('loading');
    loading.style.display='';
  $.ajax({
    type: 'POST',
    url: '<?php echo e(route('admin-delete_nr_paper')); ?>',
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
<script type="text/javascript">
   $(document).on('click', '#show-button', function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var id=$(this).data('id');
    var img ="<?php echo e(route('admin-nr_image',['id'=>':id'])); ?>";
    var img = img.replace('%3Aid',id);
    $.get(img,function(data){
          $('#table').empty().html(data);
    })
    });
    $(document).on('click', '#syllabus-button', function() {
  var a = "<?php echo e(asset('Quiz/normal_paper')); ?>/"+$(this).data('id')+"/question/syllabus.png";
  $.get(a)
    .done(function() { 
       $('#syllabusimg').html('<img src="'+a+'">');

    }).fail(function() { 
        $('#syllabusimg').html('Syllabus not available...');

    })
 
    
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>