<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainteacher.css')); ?>">
  <div class="limiter">
    <div  class="title">
                <div class="searchBox">
                  <h4><b>Teacher List</b>
                    <a id="add-button" data-toggle="modal" data-target="#create" class="create-modal btn btn-warning" >Add</a>
    <div class="searchForm">
       <form action="<?php echo e(route('admin-teachers')); ?>" method="get">
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
                <th class="column3">Username</th>
                <th class="column4">Email</th>
                <th class="column5">Contact</th> 
                 <th class="column6">View</th>
                  <th class="column7">Edit</th>
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
          <td><?php echo e($user->name); ?></td>
          <td><?php echo e($user->username); ?></td>
          <td><?php echo e($user->email); ?></td>
          <td><?php echo e($user->mobile); ?></td>
          <td>
            <a id="show-button" data-toggle="modal" data-target="#show" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>"  data-mobile="<?php echo e($user->mobile); ?>" data-username="<?php echo e($user->username); ?>">
              <i class="fa fa-eye" style="color: #5b84d7"></i>
            </a>
            </td>
          <td>
            <a id="edit-button" data-toggle="modal" data-target="#edit" data-id="<?php echo e($user->id); ?>" data-name="<?php echo e($user->name); ?>" 
              data-email="<?php echo e($user->email); ?>"  data-mobile="<?php echo e($user->mobile); ?>" data-username="<?php echo e($user->username); ?>">
              <i class="glyphicon glyphicon-pencil" style="color:#ff9933"></i>
            </a>
            </td>
          <td>
            <a id="delete-button" data-toggle="modal" data-target="#delete" data-name="<?php echo e($user->name); ?>" data-id="<?php echo e($user->id); ?>">
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
    var img ="<?php echo e(route('admin-teachers_page',['s'=>':year','page'=>':page'])); ?>";
    var img = img.replace('%3Ayear',year);
      var img = img.replace('%3Apage',url);
       var img = img.replace('&amp;','&');
    $.get(img,function(data){
      console.log(img)
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);

  });

   $(document).ready(function(){
  $('#add-password1').keyup(function(){
    var add_password = $('#add-password').val();
  var add_password1 = $('#add-password1').val();
  if (add_password==add_password1) {
    $('#addpserror').html('');
    $('#add-teacher').attr('disabled',false);
  }
});
  $('#edit-password1').keyup(function(){
    var edit_password = $('#edit-password').val();
  var edit_password1 = $('#edit-password1').val();
  if (edit_password==edit_password1) {
    $('#editpserror').html('');
    $('#edit-teacher').attr('disabled',false);
  }
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
           $('#add-name').val('');
           $('#add-username').val('');
           $('#add-email').val('');
           $('#add-mobile').val('');
           $('#add-password').val('');
           $('#add-password1').val('');
  });
  $(document).on('hide.bs.modal', '#edit', function() {
    if ($('.edit-error').hasClass('hidden')) {
        }else {
          $('.edit-error').addClass('hidden');
        }
        if ($('#edit-success').hasClass('hidden')) {
        }else {
          $('#edit-success').addClass('hidden');
        } 
  });
  //---------------------------------------end modal unload----------------------//
  //---------------------------------------add teacher---------------------------//

 $('#add-teacher').click(function() {
  var add_password = $('#add-password').val();
  var add_password1 = $('#add-password1').val();
  if (add_password!=add_password1) {
    $('#addpserror').html('** password are not matching');
    $('#addpserror').css('color','red');
    $('#add-teacher').attr('disabled',true);
  }
  else{
    $('#addpserror').html('');
    $('#add-teacher').attr('disabled',false);
     var loading = document.getElementById('loading');
    loading.style.display=''; 
      $.ajax({
      type: 'POST',
      url: 'addteacher',
      data: {
        '_token': $('input[name=_token]').val(),
        'name': $('input[name=add-name]').val(),
        'username': $('input[name=add-username]').val(),
        'email': $('input[name=add-email]').val(),
        'mobile': $('input[name=add-mobile]').val(),
        'password': $('input[name=add-password]').val()
      },
      success: function(data){
        if ((data.errors)) {
          if ($('#add-success').hasClass('hidden')) {
        }else {
          $('#add-success').addClass('hidden');
        }  
          $('.add-error').removeClass('hidden');
          $('.add-error').text(data.errors.password);
          $('.add-error').text(data.errors.mobile);
          $('.add-error').text(data.errors.email);
          $('.add-error').text(data.errors.username);
          $('.add-error').text(data.errors.name);

        } else {
          if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden');
        }  
          $('#add-success').removeClass('hidden');
           $('#add-name').val('');
           $('#add-username').val('');
           $('#add-email').val('');
           $('#add-mobile').val('');
           $('#add-password').val('');
           $('#add-password1').val('');
    $.get("<?php echo e(route('admin-teachers_page')); ?>",function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
        }
      },

    });
    }
  });

   //---------------------------------------end add teacher---------------------------//
//----------------------------------------------show details-------------------------//
 $(document).on('click', '#show-button', function() {
    $('#show-id').text($(this).data('id'));
    $('#show-name').text($(this).data('name'));
    $('#show-username').text($(this).data('username'));
    $('#show-email').text($(this).data('email'));
    $('#show-mobile').text($(this).data('mobile'));
    $('#show-photo').text($(this).data('photo'));
    });
 //----------------------------------------------end show details-------------------------//
//-------------------------------------------------------edit details--------------------//
  $(document).on('click', '#edit-button', function() {
    $('#edit-id').val($(this).data('id'));
    $('#edit-name').val($(this).data('name'));
    $('#edit-username').val($(this).data('username'));
    $('#edit-email').val($(this).data('email'));
    $('#edit-mobile').val($(this).data('mobile'));
    $('#edit-photo').val($(this).data('photo'));
});

 $('#edit-teacher').click(function() {
   var edit_password = $('#edit-password').val();
  var edit_password1 = $('#edit-password1').val();
  if (edit_password!=edit_password1) {
    $('#editpserror').html('** password are not matching');
    $('#editpserror').css('color','red');
    $('#edit-teacher').attr('disabled',true);
  }
  else{
    $('#addpserror').html('');
    $('#edit-teacher').attr('disabled',false);
    var loading = document.getElementById('loading');
    loading.style.display=''; 
      $.ajax({
      type: 'POST',
      url: 'editteacher',
      data: {
       '_token': $('input[name=_token]').val(),
        'id': $("#edit-id").val(),
        'name': $("#edit-name").val(),
        'username': $("#edit-username").val(),
        'email': $("#edit-email").val(),
        'mobile': $("#edit-mobile").val(),
        'password': $('input[name=edit-password]').val()
         
      },
      success: function(data){
        if ((data.errors)) {
          if ($('#edit-success').hasClass('hidden')) {
        }else {
          $('#edit-success').addClass('hidden');
        }  
          $('.edit-error').removeClass('hidden');
          $('.edit-error').text(data.errors.mobile);
          $('.edit-error').text(data.errors.email);
          $('.edit-error').text(data.errors.username);
          $('.edit-error').text(data.errors.name);

        } else {
          if ($('.edit-error').hasClass('hidden')) {
        }else {
          $('.edit-error').addClass('hidden');
        }  
          $('#edit-success').removeClass('hidden');
           $.get("<?php echo e(route('admin-teachers_page')); ?>",function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
        }
      },

    });
    }
  });
//-------------------------------------------------------end edit details--------------------//
//-------------------------------------------------------delete data------------------------//

 $(document).on('click', '#delete-button', function() {
  $('#delete').modal({backdrop:'false'});
  $('#delete-name').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));
    
});
 $('#delete-teacher').click(function() {
   var loading = document.getElementById('loading');
    loading.style.display=''; 
  $.ajax({
    type: 'POST',
    url: 'deleteteacher',
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
//---------------------------------------------------end delete data----------------------//
//------------------------------------------------search----------------------------------//
fetch_customer_data(); 
 $('#searchField').keydown(function(e){
    if (e.keyCode === 13) { // If Enter key pressed
        $(this).trigger('submit');
    }
});
 //--------------------------------------------end search------------------------------//
  });

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/teacher_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>