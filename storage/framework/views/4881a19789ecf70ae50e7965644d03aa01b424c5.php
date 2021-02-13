<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('account/table/css/mainstudents.css')); ?>">
  <div class="limiter">
    <div  class="title">
    <div class="searchBox">
    <h4><b>Student List</b>
      <a id="add-button" data-toggle="modal" data-target="#create" class="create-modal btn btn-warning" >Add</a>
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
                <th class="column4">mobile</th>
                 <th class="column5">class</th>
                <th class="column6">year</th>
                <th class="column7">View</th>
                 <th class="column8">Edit</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script type="text/javascript">
   $(document).on('click', '#show-button', function() {
  
    var loading = document.getElementById('loading');
    loading.style.display='';
    var name = $(this).data('name');
    var dob = $(this).data('dob');
    var aadhar = $(this).data('aadhar');
    var gender = $(this).data('gender');
    var category = $(this).data('category');
    var academic_year = $(this).data('academic_year');
    var clas = $(this).data('class');
    var course = $(this).data('course');
    var coursetype = $(this).data('coursetype');
    var mobile = $(this).data('mobile');
    var email = $(this).data('email');
    var f_name = $(this).data('f_name');
    var f_occupation = $(this).data('f_occupation');
    var f_mobile = $(this).data('f_mobile');
    var m_name = $(this).data('m_name');
    var m_occupation = $(this).data('m_occupation');
    var address = $(this).data('address');
    var add1 =address.substring(0,42);
    var add2 =address.substring(42,109);
    var add3 =address.substring(113,180);
    var photo = $(this).data('photo');
    var fee_details = $(this).data('fee_details');
    var created_at = $(this).data('created_at');
    var reg_name = $(this).data('reg_name');
       var doc = new jsPDF('p', 'mm', 'a4');
                 var img=document.getElementById("formimg");
                 doc.addImage(img,'JPEG',0,0,210,297);
                 doc.setFont("times");
                 doc.setFontType("italic");
                 doc.setFontType("bold");
                 doc.setFontSize(12);
                 doc.text(41,58.5,''+created_at);
                 doc.text(75,70,''+name);
                 doc.text(54,81,''+dob);
                 doc.text(112,81,''+aadhar);
                 doc.text(45,92,''+gender);
                 doc.text(140,92,''+category);
                 doc.text(63,103,''+course);
                 doc.text(134,103,''+clas);
                 doc.text(57,113,''+f_name);
                 doc.text(68,123,''+f_occupation);
                 doc.text(59,133.8,''+m_name);
                 doc.text(69,144.5,''+m_occupation);
                 doc.text(77,154,''+add1);
                 doc.text(29,163.5,''+add2);
                 doc.text(29,173,''+add3);
                 doc.text(71,184.5,''+mobile);
                 doc.text(131,184.5,''+f_mobile);
                 doc.text(50,195,''+fee_details);
                var imgs=document.getElementById("img"+$(this).data('id'));
                doc.addImage(imgs,'JPEG',173,60,24,30);
                doc.save(name+' form.pdf');
               $("#loading").fadeOut(500);
       
   });
  $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-student_list',['year'=>':year','class'=>':class','page'=>':page'])); ?>";
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

  
   $('#year').on('change',function() {
    var loading = document.getElementById('loading');
    loading.style.display='';
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-student_list',['year'=>':year','class'=>':class'])); ?>";
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
    var img ="<?php echo e(route('account-student_list',['year'=>':year','class'=>':class'])); ?>";
    var img = img.replace('%3Ayear',year);
     var img = img.replace('%3Aclass',clas);
      var img = img.replace('&amp;','&');
    $.get(img,function(data){
          $('#tbody').empty().html(data);
    })
    $("#loading").fadeOut(500);
    });
</script>

  <script type="text/javascript">

    $(document).on('click', '#edit-button', function() {
    $('#edit_id').val($(this).data('id'));
    $('#edit_name').val($(this).data('name'));
    $('#edit_dob').val($(this).data('dob'));
    $('#edit_aadhar').val($(this).data('aadhar'));
    $('#edit_year').val($(this).data('academic_year'));
     $('#edit_email').val($(this).data('email'));
    $('#edit_mobile').val($(this).data('mobile'));
    $('#edit_f_name').val($(this).data('f_name'));
    $('#edit_f_occupation').val($(this).data('f_occupation'));
    $('#edit_m_name').val($(this).data('m_name'));
    $('#edit_m_occupation').val($(this).data('m_occupation'));
    $('#edit_f_mobile').val($(this).data('f_mobile'));
    $('#edit_address').val($(this).data('address'));
    $('#edit_fee_details').val($(this).data('fee_details'));
    $('#edit_class').val($(this).data('class'));
    $('#edit_course').val($(this).data('course'));
    $('#edit_coursetype').val($(this).data('coursetype'));
     $('input[name="edit_category"][value='+ $(this).data('category') +']').prop('checked', true).trigger("click");
    $('input[name="edit_gender"][value='+ $(this).data('gender') +']').prop('checked', true).trigger("click");
   
   
});
    $(document).on('hide.bs.modal', '#create', function() {
    if ($('.add-error').hasClass('hidden')) {
        }else {
          $('.add-error').addClass('hidden');
        }
        if ($('#add-success').hasClass('hidden')) {
        }else {
          $('#add-success').addClass('hidden');
        } 
          
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
   $(document).on('click', '#delete-button', function() {
  $('#delete-name').text('Are You sure want to Hide ('+$(this).data('name')+')....');
    $('#delete-id').text($(this).data('id'));   
});
  $('#delete-student').click(function(){
  var loading = document.getElementById('loading');
  loading.style.display='';
     $.ajax({
      type: 'post',
      url: 'hide_student',
      data: {
        '_token': $('input[name=_token]').val(),
       'id': $('#delete-id').text(),
      },
      success: function(data){
        $('#table .user'+$('#delete-id').text()).attr('style','background-color: #fd6789; color: #fff;');
        $('#delete').modal('hide');
       $("#loading").fadeOut();
      },
    });
    });

  $(document).on('click', '#delete-button1', function() {
  $('#delete1').modal({backdrop:'false'});
  $('#delete-name1').text('Are You sure want to delete ('+$(this).data('name')+')....');
    $('#delete-id1').text($(this).data('id'));
    
});
 $('#delete-student1').click(function() {
   var loading = document.getElementById('loading');
  loading.style.display='';
  $.ajax({
    type: 'POST',
    url: 'deletestudent',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('#delete-id1').text(),
    },
    success: function(data){

    $('#table .user'+$('#delete-id1').text()).hide();
     $("#loading").fadeOut();
    $('#delete1').modal('hide');
     
    }
  });
});
    
        </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('account/student_popup', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/account_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>