
 <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100" >
           <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">S.No</th>
                <th class="column2">Name</th>
                <th class="column3">Father's name</th>
                 <th class="column4">Class</th>
                  <th class="column5">Year</th>
                <th class="column6">Add</th>
                <th class="column7">Details</th>
                </tr>
                </thead>
                <tbody>
     <?php  $n = app('request')->input('page'); if($n>1||$n!=""){$no=$n*8-7;}else{$no=1;} ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="user<?php echo e($user->id); ?>"  <?php if($user->active==2): ?> style="background-color: #fd6789; color: #fff" <?php endif; ?>>
          <td class="column1"><?php echo e($no++); ?></td>
          <td class="column2"><?php echo e($user->name); ?></td>
          <td class="column3"><?php echo e($user->f_name); ?></td>
           <td class="column4"><?php echo e($user->class); ?></td>
            <td class="column5"><?php echo e($user->year); ?></td>
         <td class="column6"> <a class="create-modal btn btn-warning" id="add-button" data-toggle="modal" data-target="#add" data-sid="<?php echo e($user->sid); ?>" data-name="<?php echo e($user->name); ?>" data-f_name="<?php echo e($user->f_name); ?>" data-year="<?php echo e($user->year); ?>" data-class="<?php echo e($user->class); ?>">Add</a> </td>
         <td class="column7"><a style="color: #fff" class="btn btn-info" id="show-button" data-toggle="modal" data-target="#show" data-sid="<?php echo e($user->sid); ?>">Details</a></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
          </table>
           <p><?php echo e($users->render()); ?></p>
        </div>
      </div>
    </div>
  </div>
           <script type="text/javascript">
              $(document).on('click','.pagination a', function(e){
    e.preventDefault();
    var loading = document.getElementById('loading');
    loading.style.display=''; 
    var url =$(this).attr('href').split('page=')[1];
    var year=$('#year option:selected').val();
     var clas=$('#class option:selected').val();
    var img ="<?php echo e(route('account-earning_list',['year'=>':year','class'=>':class','page'=>':page'])); ?>";
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
           </script>