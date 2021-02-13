<?php $__env->startSection('popup'); ?>

 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainstudent_show_paper.css')); ?>">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainonline_test.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Online Test</b>
    <div class="searchForm">
      <form action="<?php echo e(route('student-online_tests')); ?>" method="get">
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
                <th class="column2">paper name</th>
                <th class="column3"></th>
                <th class="column4"></th>
                <th class="column5"></th>
                 <th class="column6">Attempt</th>
                </tr>
                </thead>
                <tbody>
     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*7-6;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="user<?php echo e($user->id); ?>">
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->paper); ?></td>
          <td id="<?php echo e($user->id); ?>" class="column3"></td>
          <td id="view<?php echo e($user->id); ?>" class="column4"></td>
    <?php if($user->type=='normal'): ?><td class="column5"><a id="syllabus-button_nr" data-toggle="modal" data-target="#syllabus" data-id="<?php echo e($user->paper); ?>">
              <i class="fa fa-book" style="color: #ff9933"></i> Syllabus</td>
  <?php elseif($user->type=='advanced'): ?><td class="column5"><a id="syllabus-button_adv" data-toggle="modal" data-target="#syllabus" data-id="<?php echo e($user->paper); ?>">
              <i class="fa fa-book" style="color: #ff9933"></i> Syllabus</td>
              <?php endif; ?>
          <form action="<?php echo e(route('student-instructions')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
          <td class="column6"><button type="submit" id="button<?php echo e($user->id); ?>" class="btn btn-warning">&nbsp;&nbsp;Wait.&nbsp;&nbsp;</button> </form></td>
         
         </tr>
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
 <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
 <script type="text/javascript">
    $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('input[name=s]').val();
    var img ="<?php echo e(route('student-online_tests_page',['s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
  });
 </script>
<script src="https://rawcdn.githack.com/golu1510/counter.github.io/bf06b479befc50b764d77ef5d5b732a39f18574c/countdown.js" type="text/javascript"></script>
<script type="text/javascript">
   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
   $("#button<?php echo e($user->id); ?>").attr("disabled", true);
  $('#<?php echo e($user->id); ?>').countdown('<?php echo e($user->publishtime); ?>',function(event){
    var i=0;
    $(this).attr("style", 'color:#fd6e70;');
   $(this).html(event.strftime('<span>%D</span><span>days </span><span>%H:%M:%S'));
   if (event.strftime('%D%H%M%S')=='00000000') {
    var i=2; 
    $('#<?php echo e($user->id); ?>').empty().html('');
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($user->pid.$user->id==$result->pid.$result->plid): ?>
    var i=1;
    $('#button<?php echo e($user->id); ?>').empty().html('&nbsp;&nbsp;Open&nbsp;&nbsp;');
    $('#button<?php echo e($user->id); ?>').removeClass('btn-warning');
     $('#button<?php echo e($user->id); ?>').addClass('btn-info');
     $("#button<?php echo e($user->id); ?>").attr("disabled", false);
     $('#view<?php echo e($user->id); ?>').empty().html('<a id="show-button" class="btn btn-default" style="color: #fd6e70" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->pid); ?>" data-plid="<?php echo e($user->id); ?>" data-type="<?php echo e($user->type); ?>">View</a>');
  <?php endif; ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

}
if(i==2){
   $('#button<?php echo e($user->id); ?>').empty().html('Attempt');
      $('#view<?php echo e($user->id); ?>').empty().html('');
    $('#button<?php echo e($user->id); ?>').removeClass('btn-warning');
     $('#button<?php echo e($user->id); ?>').addClass('btn-success');
     $("#button<?php echo e($user->id); ?>").attr("disabled", false);
}
  });
  
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<script type="text/javascript">
   $(document).on('click', '#show-button', function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var id=$(this).data('id');
     var plid=$(this).data('plid');
    var type=$(this).data('type');
    var img ="<?php echo e(route('student-papershow',['id'=>':id','type'=>':type','plid'=>':plid'])); ?>";
    var img = img.replace('%3Aid',id);
     var img = img.replace('%3Aplid',plid);
    var img = img.replace('%3Atype',type);
     var img = img.replace('&amp;','&');
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
      $('#table').empty().html(data);
    })
    });
    $(document).on('click', '#syllabus-button_nr', function() {
  var a = "<?php echo e(asset('Quiz/normal_paper')); ?>/"+$(this).data('id')+"/question/syllabus.png";
  $.get(a)
    .done(function() { 
       $('#syllabusimg').html('<img src="'+a+'">');

    }).fail(function() { 
        $('#syllabusimg').html('Syllabus not available...');

    })
 
    
});
    $(document).on('click', '#syllabus-button_adv', function() {
  var a = "<?php echo e(asset('Quiz/advanced_paper')); ?>/"+$(this).data('id')+"/question/syllabus.png";
  $.get(a)
    .done(function() { 
       $('#syllabusimg').html('<img src="'+a+'">');

    }).fail(function() { 
        $('#syllabusimg').html('Syllabus not available...');

    })
 
    
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/student_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>