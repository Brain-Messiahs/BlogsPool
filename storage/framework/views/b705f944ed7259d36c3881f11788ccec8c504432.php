<?php $__env->startSection('popup'); ?>


 <div id="show" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">pdf</h4>
      </div>
      <div class="modal-body" id="pdf_body">
          <iframe  type="application/pdf"   width="100%" height="70%" id="pdf_link"></iframe>
          <input type="hidden" id="pdf_links"></div>
  <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainstudent_dpp.css')); ?>">
  <div class="limiter">
    <div  class="title">
                <div class="searchBox">
                  <h4><b>D.P.P.</b>
    <div class="searchForm">
       <form action="<?php echo e(route('student-dpp')); ?>" method="get">
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
                <th class="column2">D.P.P.</th>
                <th class="column3">Subject</th>
                 <th class="column7">Teacher</th>
                <th class="column4">Publish Date</th>
                <th class="column5">Problem</th> 
                 <th class="column6">Solution</th>
                
         </tr>
                </thead>
                <tbody>
      <?php echo e(csrf_field()); ?>

     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->active == 1): ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($user->pname); ?></td>
          <td><?php echo e($user->subject); ?></td>
          <td><?php echo e($user->reg_name); ?></td>
          <td><?php echo e($user->publish_time); ?></td>
          
          <td>
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
<td>
<a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a></td>
         </tr>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
          </table>
           <p><?php echo e($users->links()); ?></p>
        </div>
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
    var clas = "<?php echo e(app('request')->input('class')); ?>";
    var img ="<?php echo e(route('student-dpp_page',['s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
      console.log(img)
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });


 $(document).on('click', '#show-button', function() {
  $('#show').modal({backdrop:'false'});
  if($('#pdf_links').val()!=$(this).data('link') && $(this).data('link')!=''){
    var link =$(this).data('link');
    var src = "<?php echo e(asset('')); ?>"+link+'#toolbar=0';
    $('#pdf_link').attr('src',src);
     $('#pdf_links').val($(this).data('link'));
  }
  else if($(this).data('link')==''){
    $('#pdf_body').empty().html('Pdf Not available...');
  }
});

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/student_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>