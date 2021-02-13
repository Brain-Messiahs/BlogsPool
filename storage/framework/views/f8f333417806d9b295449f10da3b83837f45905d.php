<?php $__env->startSection('popup'); ?>
<script type="text/javascript"></script>

  <div id="details" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">details</h4>
      </div>
      <div class="modal-body" id="details_body">
         <div></div>
  </div>
      </div>
    </div>
  </div>


<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Add D.P.P.</h4>
      </div>
      <div class="modal-body">
        <p id="addpserror"></p>
        <p class="add-error text-center alert alert-danger hidden"></p>
        <p id="add-success" class=" text-center alert alert-success hidden">DATA SAVED.......</p>
        <div class="col-md-12">
          <form action="<?php echo e(route('admin-dpp_add')); ?>" method="POST" class="form-horizontal" role="modal" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

<!-- -------------------------------------------------------------------option menu end-------------------------- -->
    <div >
      <label>D.P.P. Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="pname" type="text" name="pname">
    </div>
     <div><select class="form-control" id="subject" name="subject">
     <option value="">Subject</option>
     <option id="add-class-8" value="physics">Physics</option>
     <option id="add-class-9" value="chemistry">Chemistry</option>
     <option id="add-class-10" value="mathmatics">Mathmatics</option> 
     <option id="add-class-11" value="biology">Biology</option> 
         </select></div>
    <div class="col-lg-6">
      <label>Paper*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="ques" type="file" name="ques">
    </div>
    <div class="col-lg-6">
      <label>solution&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="ans" type="file" name="ans" >
    </div>
      <br>
          <br>
     
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add-dpp">
              Add D.P.P.
            </button>   </form>
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
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-dpp">
              Delete
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>


  
 <div id="delete1" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">delete</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="modal">
             <h4 id="delete-name1"></h4>
           <p id="delete-id1" class="hidden"></p>
            </form>
  </div>
  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="delete-dpp_link">
              Delete
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
      </div>
    </div>
  </div>














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



 
 <div id="publish" class="modal fade " role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
        <h4 class="modal-title">Publish</h4>
      </div>
      <div class="modal-body">
<p id="addpserror"></p>
        <p class="pub-error text-center alert alert-danger hidden"></p>
        <p id="pub-success" class=" text-center alert alert-success hidden">DATA SAVED.......</p>
        <div class="col-md-12">
        <form class="form-group" action="<?php echo e(route('admin-dpp_add_link')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

    <!-- ----------------------------------------- option menu------------------------------------ -->
    <div ><select id="p_class" class="form-control" name="p_class">
     <option value="">Class</option>
     <option value="8th">8th</option>
     <option value="9th">9th</option>
     <option value="10th">10th</option> 
     <option value="11th">11th</option> 
     <option value="12th">12th</option> 
     <option value="Repeater">Repeater</option> 
         </select></div>

  

   <div id="course" ><select class="form-control" name="p_course" id="p_course" > 
    <option value="">Course</option>
     <option value="Foundation">Foundation</option>
     <option value="JEE Main">JEE Main</option>
     <option value="JEE (Main + Advance)">JEE (Main + Advance)</option> 
     <option value="NEET">NEET</option> 
     <option value="NEET + AIIMS">NEET + AIIMS</option> 
     <option value="MHT-CET">MHT-CET</option>
     <option value="Classroom Test">Classroom Test</option>
   </select> </div>

   <div id="coursetype"><select class="form-control" name="p_coursetype"  id="p_coursetype"> 
     <option value="">Course Type</option>
     <option value="Classroom Course">Classroom Course</option>
     <option value="Crash Course">Crash Course</option>
     <option value="Distance Learning">Distance Learning</option>
     </select> </div>
     <input type="hidden" id="p_pname" name="p_pname">
      <input type="hidden" id="p_ques" name="p_ques">
      <input type="hidden" id="p_ans" name="p_ans">
      <input type="hidden" id="p_subject" name="p_subject">
      <input type="hidden" id="p_id" name="p_id">
     <label>publishtime</label>
      <input type="date" id="p_publishtime" name ="p_publishtime" /><br/>
           
      <label>Group</label>
      <input style="display: none;" type="radio" name="p_radio" value="" checked="true"></input>
      <input type="radio" name="p_radio" value="A">A </input> 
      <input type="radio" name="p_radio" value="B">B </input>
      <input type="radio" name="p_radio" value="C">C </input>
      <input type="radio" name="p_radio" value="D">D </input>
      <input type="radio" name="p_radio" value="E">E </input>
      <input type="radio" name="p_radio" value="F">F </input>
      </form>
    </div>
  </div> 

  <div class="modal-footer">
            <button style="background-color: #fd6e70" class="btn btn-warning" type="submit" id="add-dpp_link">
              Publish
            </button>
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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/maindpp.css')); ?>">
  <div class="limiter">
    <div  class="title">
                <div class="searchBox">
                  <h4><b>DPP List</b>
                    <a id="add-button" data-toggle="modal" data-target="#create" class="create-modal btn btn-warning" >Add</a>
    <div class="searchForm">
       <form action="<?php echo e(route('admin-dpp')); ?>" method="get">
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
                <th class="column3">Subject</th>
                <th class="column4">Paper</th>
                <th class="column5">Solution</th> 
                 <th class="column6">Details</th>
                 <th class="column7">Publish</th>
                   <th class="column8">Delete</th>
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
            </a>
            </td>
            <td>
            <a id="details-button" data-toggle="modal" data-target="#details" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
              data-reg_name="<?php echo e($user->reg_name); ?>"  data-created_at="<?php echo e($user->created_at); ?>" data-subject="<?php echo e($user->subject); ?>" data-link="<?php echo e($user->ques); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
            <td>
            <a class="btn btn-warning" id="publish-button" data-toggle="modal" data-target="#publish" data-id="<?php echo e($user->id); ?>" data-pname="<?php echo e($user->pname); ?>" 
             data-subject="<?php echo e($user->subject); ?>"  data-ans="<?php echo e($user->ans); ?>" data-ques="<?php echo e($user->ques); ?>">
             publish
            </a>
            </td>
          <td>
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->pname); ?>" data-id="<?php echo e($user->id); ?>">
              <i class="glyphicon glyphicon-trash" style="color: #ff5c33"></i>
            </a>
          </td>
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
    var img ="<?php echo e(route('admin-dpp_page',['s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
      console.log(img)
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });

  //-----------------------------------------modal unload----------------------//
  $(document).on('hide.bs.modal', '#create', function() {
    if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden');
        }
        if ($('#add-success').hasClass('hidden')) {
        }else {
          $('#add-success').addClass('hidden');
        } 
           $('#pname').val('');
           $('#subject').val('');
           $('#ques').val('');
           $('#ans').val('');
  });
  //-----------------------------------------modal unload----------------------//
  $(document).on('hide.bs.modal', '#publish', function() {
    if ($('.pub-error').hasClass('hidden')) {
        }else {
          $('.pub-error').addClass('hidden');
        }
        if ($('#pub-success').hasClass('hidden')) {
        }else {
          $('#pub-success').addClass('hidden');
        } 
           $('#p_pname').val('');
           $('#p_subject').val('');
           $('#p_ques').val('');
           $('#p_ans').val('');
           $('#p_class').val('');
           $('#p_course').val('');
           $('#p_coursetype').val('');
           $('#p_publishtime').val('');
            $('#p_radio').val('');
  });
  //---------------------------------------end modal unload----------------------//
  $(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
   $(document).on('click', '#delete-button1', function() {
  $('#delete1').modal({backdrop:'false'});
  $('#delete-name1').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id1').text($(this).data('id'));
    
});

    $(document).on('click', '#details-button', function() {
  $('#details').modal({backdrop:'false'});
  var link =$(this).data('id');
  var src="<?php echo e(route('admin-dpp_link',['id'=>':year'])); ?>";
   var src = src.replace('%3Ayear',link);
  $.get(src,function(data){
          $('#details_body').empty().html(data);
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

  
 $('#delete-dpp').click(function() {
   var loading = document.getElementById('loading');
    loading.style.display=''; 
  $.ajax({
    type: 'POST',
    url: 'delete_dpp',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#delete-id').text(),
    },
    success: function(data){
$('#delete').modal('hide');
    $('.user'+$('#delete-id').text()).hide();
    $("#loading").fadeOut(500);
    }
  });
});
  $('#delete-dpp_link').click(function() {
   var loading = document.getElementById('loading');
    loading.style.display=''; 
  $.ajax({
    type: 'POST',
    url: 'delete_dpp_link',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#delete-id1').text(),
    },
    success: function(data){
$('#delete1').modal('hide');
    $('.users'+$('#delete-id1').text()).hide();
    $("#loading").fadeOut(500);
    }
  });
});
  //---------------------------------------add link---------------------------//


    $(document).on('click', '#publish-button', function() {
    $('#p_id').val($(this).data('id'));
    $('#p_pname').val($(this).data('pname'));
    $('#p_subject').val($(this).data('subject'));
    $('#p_ques').val($(this).data('ques'));
    $('#p_ans').val($(this).data('ans'));

    
});

 $('#add-dpp_link').click(function() {
     var loading = document.getElementById('loading');
    loading.style.display=''; 
      $.ajax({
      type: 'POST',
      url: '<?php echo e(route('admin-dpp_add_link')); ?>',
      data: {
        '_token': $('input[name=_token]').val(),
        'pname': $('#p_pname').val(),
        'ques': $('#p_ques').val(),
         'ans': $('#p_ans').val(),
        'subject': $('#p_subject').val(),
        'class': $('#p_class option:selected').val(),
        'course': $('#p_course option:selected').val(),
        'coursetype': $('#p_coursetype option:selected').val(), 
         'publishtime': $('input[name=p_publishtime]').val(),
         'radio': $('input[name=p_radio]:checked').val(),
         'dpp_id': $('#p_id').val()
      },
      success: function(data){
        if ((data.errors)) {
          if ($('#pub-success').hasClass('hidden')) {
        }else {
          $('#pub-success').addClass('hidden');
        }  
          $('.pub-error').removeClass('hidden');
          $('.pub-error').text('Upload Failed...');
          $("#loading").fadeOut(500);
        } else {
          if ($('.pub-error').hasClass('hidden')) {
        }else {
          $('.pub-error').addClass('hidden');
        }  
          $('#pub-success').removeClass('hidden');
           $('#p_pname').val('');
           $('#p_subject').val('');
           $('#p_ques').val('');
           $('#p_ans').val('');
           $('#p_class').val('');
           $('#p_course').val('');
           $('#p_coursetype').val('');
           $('#p_publishtime').val('');
            $('#p_radio').val('');
    $.get("<?php echo e(route('admin-dpp_page')); ?>",function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
        }
      },

    });
  });
  document.getElementById("pdf_link").contentWindow.document.oncontextmenu = function(){ return false;}; 
</script>

<?php $__env->stopSection(); ?>

<style type="text/css">
  .header h2{
    margin-left: 36%;
    color: #4f4f4f;
     padding-top: 8%;
    font-family: 'Arial Black', Gadget, sans-serif;
    margin-bottom: 20px;
  }
  #class{
    margin-bottom: 2px;
  }
  #course1{
    margin-bottom: 2px;
  }
  #course2{
    margin-bottom: 2px;
  }
  #coursetype{
    margin-bottom: 4px;
  }
  
</style>
<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>