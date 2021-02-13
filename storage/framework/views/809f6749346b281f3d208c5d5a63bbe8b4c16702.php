<?php $__env->startSection('inner_block'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainresult.css')); ?>">
  <div id="body">
    <div  class="table-title">
    <div class="searchBox">
    <h4><b>Student List</b>
    <div class="searchForm">
      <form action="<?php echo e(route('admin-student_result_search')); ?>" method="get">
        <input id="searchField" type="text" name="s" placeholder="Search here"/>
           <input type="hidden" name="id" value="<?php echo e(Request::get('id')); ?>" /> 
        <div class="close">
            <span class="front"></span>
            <span class="back"></span>
        </div>  </form>  
    </div></h4> 
</div></div>
    <div class="container">
        <div class="table-wrapper">
        <table class="table table-striped table-hover" >
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
      <?php  $no=1; ?>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="<?php echo e($user->id); ?>">
                  <td class="column1"><strong><?php echo e($no++); ?></strong></td>
                  <td class="column2"><strong><?php echo e($user->name); ?></strong></td>
                  <td class="column3"><strong><?php echo e($user->classid); ?></strong></td>
                  <td class="column4"><strong><?php echo e($user->courseid); ?></strong></td>
                  <td class="column5"><strong><?php echo e($user->paper); ?></strong></td>
                  <td class="column6"><?php if($user->rank!=''): ?>
                    <a>AIR <?php echo e($user->rank); ?></a><?php endif; ?></td>
                  <td class="column7" style="padding: 5px 5px 5px 5px;cursor:pointer;" ><strong><a id="r0" class="rm">RESULT&nbsp;&nbsp;<span class="sub-arrow"></span></a></strong></td>
                  </tr>
                  <div id="result">
                    <td style="display: none;" class="rsrm"></td>
                 <td id="r1" class="rsrm" style="display: none; background-color: #fd6e70;border-radius: 30px;box-shadow: 0.2em 0.4em 2em 0.4em #2b2b33;">
                  <ul >
                  <label>RESULT</label>
                  <li class="top" ><strong>Total Score &nbsp;&nbsp; &nbsp;&nbsp; :&nbsp;  <?php echo e($user->totalS); ?></strong></li>
                  <li class="1st" ><strong>Total Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalC); ?></strong></li>
                  <li class="1st" ><strong>Total&nbsp; Incorrect&nbsp;:&nbsp; <?php echo e($user->totalW); ?></strong></li>
                  <li class="1st" ><strong>Total &nbsp;Attempt &nbsp; :&nbsp; <?php echo e($user->totalA); ?></strong></li>
                  </ul>
                  </td> 
                  <?php if($user->PQ!=0): ?>
                  <td id="r2" class="rsrm" style="display: none; background-color: grey;border-radius: 30px;color: #fff;box-shadow: 0.2em 0.4em 2em 0.4em #2b2b33;">
                  <ul >
                    <label>PHYSICS</label>
                  <li class="phy" ><strong>Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalCinP); ?></strong></li>
                  <li class="phy" ><strong>Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinP); ?></strong></li>
                  <li class="phy" ><strong>Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinP); ?></strong></li>
                </ul>
                </td>
                <?php else: ?>
                  <td id="r2" style="display: none;" class="rsrm"></td>
                  <?php endif; ?> 
                 <?php if($user->CQ!=0): ?>
                  <td id="r3" class="rsrm" style="display: none; background-color: mediumseagreen;border-radius: 30px;box-shadow: 0.2em 0.4em 2em 0.4em #2b2b33;">
                    <ul>
                      <label>CHEMISTRY</label>
                      <li class="chem" ><strong>Correct&nbsp; &nbsp;&nbsp;:&nbsp; <?php echo e($user->totalCinC); ?></strong></li>
                  <li class="chem" ><strong>Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinC); ?></strong></li>
                  <li class="chem" ><strong>Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinC); ?></strong></li>
                    </ul>   
                  </td>
                  <?php else: ?>
                  <td id="r3" style="display: none;" class="rsrm"></td>
                 <?php endif; ?> 
                 <?php if($user->MQ!=0): ?>
                        <td id="r4" class="rsrm" style="display: none; background-color: grey;border-radius: 30px;color: #fff;box-shadow: 0.2em 0.4em 2em 0.4em #2b2b33;">
                    <ul>
                      <label>MATHEMATICS</label>
                      <li class="math" ><strong>Correct&nbsp; &nbsp;&nbsp;&nbsp;: <?php echo e($user->totalCinM); ?></strong></li>
                     <li class="math" ><strong>Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinM); ?></strong></li>
                     <li class="math" ><strong>Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinM); ?></strong></li>
                    </ul>
                  </td>
                    <?php else: ?>
                  <td id="r4" style="display: none;" class="rsrm"></td>
                 <?php endif; ?> 
                 <?php if($user->BQ!=0): ?>
                  <td id="r5" class="rsrm" style="display: none; background-color: grey;border-radius: 30px;color: #fff;box-shadow: 0.2em 0.4em 2em 0.4em #2b2b33;">
                    <ul>
                      <label>BIOLOGY</label>
                      <li class="bio" ><strong>Correct&nbsp; &nbsp;&nbsp;&nbsp;: <?php echo e($user->totalCinB); ?></strong></li>
                     <li class="bio" ><strong>Incorrect &nbsp;:&nbsp; <?php echo e($user->totalWinB); ?></strong></li>
                     <li class="bio" ><strong>Score &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo e($user->totalSinB); ?></strong></li>
                    </ul>
                  </td><?php else: ?>
                  <td id="r5" style="display: none;" class="rsrm"></td>
                      <?php endif; ?> 
                  </div>   
                  </tr>   
            
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
  </table>
   <p><?php echo e($users->links()); ?></p>
        </div>
        </div>
    </div>  
    <style type="text/css">
      #open {
        float: right;
    font-size: 1em;
    color: #fd6e70;   
    background: #FC8213;
    background-color: #fd6e70;  
    border-radius: 10px;
    padding: 0.2em 1.5em;
    display: inline-block;
}
#open:hover {
  background:#337AB7;
  color: #fff;
}
.rs {display: none;}
.result td li {list-style: none;}
.result td li {display: block;}
.result {display: none;}

tr td .sub-arrow:before{
  content: '\203A';  
}

li {list-style: none;}

.table tbody tr td{
  margin-bottom: 0px;
  padding-left: 2%;
}
    </style>
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
 <script type="text/javascript">
    $(document).ready(function(){ 
 $('#searchField').keydown(function(e){
    if (e.keyCode === 13) { // If Enter key pressed
        $(this).trigger('submit');
    }
});
      var i = 0;
      var a = 0;
      $('.rm').each(function(){
        i++;
        var newID=''+i;
        $(this).attr('id',newID);
        $(this).val(i);
      });
      $('.rsrm').each(function(){
        a++;
        var newID='rs'+a;
        $(this).attr('id',newID);
        $(this).val(a);
      });
    });
  </script>
  <script type="text/javascript">
    $('.rm').click(function(){
        var r = $(this).attr('id'); 
        for (var i = 6*r-5 ; i < 6*r+1; i++) {
          if (true) {}
        var j ='rs'+i;
        $('#'+j).toggle(10);
        }
        
      });
  </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>