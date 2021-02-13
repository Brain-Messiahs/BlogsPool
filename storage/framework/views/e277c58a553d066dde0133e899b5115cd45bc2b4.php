
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta http-equiv="expires" content="0">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Inspire Academy || IIT-JEE, NEET & MHT-CET</title>
<meta name="description" content="Best success rate in all over maharashtra in JEE, NEET, CET & Olympiads.Inspire Academy achieves more than 80% selections from classroom courses and crash courses each year.Branches : Kolhapur,Karad & Satara
Add.: 2nd floor,Tathastu Corner,Shahupuri,Opp.railway Gate-416001 Contact:7972961299">
<meta name="keywords" content="inspire kolhapur, inspire, inspire Academy, inspire portal, inspirekolhapur, inspirekolhapur.com">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" />
    <link href="<?php echo e(asset('web1/css/style4.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/preloader.css')); ?>" rel="stylesheet" type="text/css" media="all">
     <link href="<?php echo e(asset('css/virtual_keyboard.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/style.default.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        document.onkeydown = function (e) 
 {
  return false;
 }
    </script>
</head>
<?php if($results==0): ?>
<body class="cbp-spmenu-push" onload="preloader()" oncontextmenu="return false">
    <div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>
</div>
</div>
</div>
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainstudent_show_paper.css')); ?>">
 <div id="show" class="modal fade " role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
  
      </div>
      <div id="table" class="modal-body" >
      <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;">Question <?php echo e($ques->qid); ?></li>
<li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;"><img src="<?php echo e(asset("$ques->quesimg")); ?>"/></li>
<li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none; height: 1px;background-color: rgba(244,132,83,0.8);"></li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script type="text/javascript">
    var loading = document.getElementById('loading');
    function preloader(){
   loading.style.display='none';
    }
</script>
 <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $plinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $timelefts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeleft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php $CQ1 = $paper->PQ + 1;
      $PQN = $paper->PQ;  $CQN = $paper->PQ + $paper->CQ; $MQN = $paper->PQ + $paper->CQ + $paper->MQ;
       $BQN=$paper->PQ + $paper->CQ + $paper->MQ + $paper->BQ;  
$MQ1=$paper->PQ + $paper->CQ + 1;
$BQ1=$paper->PQ + $paper->CQ + $paper->MQ + 1;  ?>  

       
<div class="hover_bkgr_fricc" style="display: none;">
    <span class="helper"></span>
    <div style="margin: 0px;padding: 0px;">
        <div class="popupCloseButton" >X</div>
        <h4 style="color: #f7931e;margin-top: 7%;font-size: 20px; ">You Are Not Connected to the Internet</h4>
    </div>
</div>

  
    <div id="all">
        <div class="top-bar">
            <div class="container">
                <div class="col-md-12">
                    <div class="top-links"> </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <header class="main-header">
            <div class="navbar" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home">
                                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="inspirekolhapur logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                 <td style="padding: 5px 15px;"><img style="float: left;"  src="<?php echo e(asset('student/images/'.Auth::user()->photo)); ?>" width="100">
                                                    <table>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #fd6e70; font-weight: bold"><?php echo e(Auth::user()->name); ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Subject Name</td> 
                                                            <td> : <span style="color: #fd6e70; font-weight: bold"><?php echo e($paper->pname); ?></span></td>
                                                        </tr>
                                                        <tr id="time1" >
                                                            <td style="padding: 0px 5px;">Remaining Time</td>
                                                            <td>
                                                                : <span class="timer-title time-started">00:00:00</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>

                                </ul>
                                <input type="hidden" id="hdfTestDuration" value="<?php echo e($timeleft->timeleft); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <div class="clear"></div>
         <div>
            <div id="heading-breadcrumbs" >
                <div class="container">
                 <div id="arrwrapper" class="row">
                 <span id="arrows" class="arrows"></span>
            </div>   
               <div class="row" id="heading-breadcru">
                        <div class="col-md-7 pull-left">
                            <table class="stream">
                                <tr class="full-width">
                                    <td class="full-width">
                                        <h1> <?php echo e($paper->pname); ?> </h1>
                                    </td>
                                    <?php if($paper->PQ!=0): ?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page1">Physics</a>
                                        <div class="clear-xs"></div>
                                    </td> <?php endif; ?> <?php if($paper->CQ!=0): ?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php echo e($CQ1); ?>">Chemistry</a></td>
                                    <?php endif; ?> <?php if($paper->MQ!=0): ?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);"data-href="page<?php echo e($MQ1); ?>">Mathmatics</a></td>
                                    <?php endif; ?> <?php if($paper->BQ!=0): ?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php echo e($BQ1); ?>">Biology</a></td> 
                                    <?php endif; ?>
                                </tr>
                            </table>
                        </div>


                        <div class="clear-xs"></div>
                        <div class="col-md-2 col-sm-12" id="divdrplngcng" @*style="margin: 15px 0 0 0" *@>
                            <text style="color:white; font-weight:bold">Paper View:</text>
                            <select class="form-control paperview">
                                <option selected value="">Select</option>
                                <option value="all">Full Paper</option>
            <?php if($paper->PQ!=0): ?> <option value="Physics">Physics</option><?php endif; ?>
            <?php if($paper->CQ!=0): ?> <option value="Chemistry">Chemistry</option><?php endif; ?>
            <?php if($paper->MQ!=0): ?> <option value="Mathmatics">Mathmatics</option><?php endif; ?>
            <?php if($paper->BQ!=0): ?> <option value="Biology">Biology</option><?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" style="background: #d8d8d8;">
            <div class="container">
                <div class="row exam-paper">
                    <div class="col-md-8" id="quest" style="padding: 0">
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <div class="panel panel-default">
                                        <div class="panel-body mb0">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                  <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php if($ques->qid==1): ?>
                                                     <div style="" class="tab-content div-question mb0" id="page1">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo e($ques->type); ?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title" id="Qinfo1"></h4>
                                                            <h4 class="question-title"> Question 1: <img src="<?php echo e(asset('img/QuizIcons/down.png')); ?>" class="btndown pull-right"> </h4>
                                                            <img id="img1" alt="Question" src="<?php echo e(asset("$ques->quesimg")); ?>" class="img-responsive "> <br>
                                                            <table class="table table-borderless mb0">
                                                        <tbody> <?php if($ques->type=='single'||$ques->type=='passage'||$ques->type=='match_column'): ?>
      <?php if($ques->qid<=$PQN): ?>
     <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Single Option Correct Type [ +<?php echo e($paper->P1M); ?> , -<?php echo e($paper->P1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Paragraphs Type [ +<?php echo e($paper->P5M); ?> , -<?php echo e($paper->P5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html('Match The Column Type [ +<?php echo e($paper->P6M); ?> , -<?php echo e($paper->P6N); ?> Marks] ')</script>
    <?php endif; ?>
     <?php elseif($ques->qid<=$CQN): ?>
    <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Single Option Correct Type [ +<?php echo e($paper->C1M); ?> , -<?php echo e($paper->C1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Paragraphs Type [ +<?php echo e($paper->C5M); ?> , -<?php echo e($paper->C5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html('Match The Column Type [ +<?php echo e($paper->C6M); ?> , -<?php echo e($paper->C6N); ?> Marks] ')</script>
    <?php endif; ?>
    <?php elseif($ques->qid<=$MQN): ?>
        <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Single Option Correct Type [ +<?php echo e($paper->M1M); ?> , -<?php echo e($paper->M1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html(' Paragraphs Type [ +<?php echo e($paper->M5M); ?> , -<?php echo e($paper->M5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo1').empty().html('Match The Column Type [ +<?php echo e($paper->M6M); ?> , -<?php echo e($paper->M6N); ?> Marks] ')</script>
    <?php endif; ?>
       <?php endif; ?>
                                                                    <tr>
                                                                        <td> <input type="radio" value="A" name="radiospage1" id="rOption1_1"> a ) </td>
                                                                        <td> <input type="radio" value="B" name="radiospage1" id="rOption1_1"> b ) </td>
                                                                        <td> <input type="radio" value="C" name="radiospage1" id="rOption1_1"> c ) </td>
                                                                        <td> <input type="radio" value="D" name="radiospage1" id="rOption1_1"> d ) </td>
                                                                    </tr> <?php endif; ?>
     <?php if($ques->type=='multiple'): ?>
     <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->P2M); ?> , -<?php echo e($paper->P2N); ?> Marks , Partial +1 Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->C2M); ?> , -<?php echo e($paper->C2N); ?> Marks , Partial +1 Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->M2M); ?> , -<?php echo e($paper->M2N); ?> Marks , Partial +1 Marks] ')</script>   
     <?php endif; ?>
                            <tr>
                            <td class="column1"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='A'> a )</td>
                            <td class="column2"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='B'> b )</td>
                            <td class="column3"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='C'> c )</td>
                            <td class="column4"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='D'> d )</td> 
                           </tr>
                    <?php endif; ?>
                    <?php if($ques->type=='integer'): ?>
     <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Single Digit Integer Type [ +<?php echo e($paper->P3M); ?> , -<?php echo e($paper->P3N); ?> Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Single Digit Integer Type [ +<?php echo e($paper->C3M); ?> , -<?php echo e($paper->C3N); ?> Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Single Digit Integer Type [ +<?php echo e($paper->M3M); ?> , -<?php echo e($paper->M3N); ?> Marks] ')</script>   
     <?php endif; ?>
                     <tr>
                    <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" type='text' class="vir_input" id="iOption1_1" min="0" max="9" name='integerpage1' disabled><div class="temp-keyboard">
    <div class="keyboard ikeyboard1" id="azerty">
      <div class="row-keyboard">
        <div id="1" data-value="1"><p>1</p></div>
        <div id="2" data-value="2"><p>2</p></div>
        <div id="3" data-value="3"><p>3</p></div>
      </div>
      <div class="row-keyboard">
        <div id="4" data-value="4"><p>4</p></div>
        <div id="5" data-value="5"><p>5</p></div>
        <div id="6" data-value="6"><p>6</p></div>
      </div>
      <div class="row-keyboard">
        <div id="7" data-value="7"><p>7</p></div>
        <div id="8" data-value="8"><p>8</p></div>
        <div id="9" data-value="9"><p>9</p></div>
      </div>
      <div class="row-keyboard">
        <div id="null" data-value="null"><p></p></div>
        <div id="0" data-value="0"><p>0</p></div>
        <div id="del" data-value="del"><p id="del">del</p></div>
    </div>
      </div>
    </div></td>
    <script type="text/javascript">
        $('.ikeyboard1 .row-keyboard div').on('click', function(e){
  e.preventDefault();
  var inputtext = $('#iOption1_1').val();

  if (e.target.id == 'del') {
    var temp = inputtext.substring(0, inputtext.length - 1);
    $('#iOption1_1').val(temp);
  }
  else if (e.target.id == 'null') {
  }
  else {

    var temp = $(this).data('value');
    $('#iOption1_1').val(temp);
  }

});
    </script>
                   </tr>    
                  <?php endif; ?>
                   <?php if($ques->type=='numerical'): ?>
        <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Numerical Value input Type [ +<?php echo e($paper->P4M); ?> , -<?php echo e($paper->P4N); ?> Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Numerical Value input Type [ +<?php echo e($paper->C4M); ?> , -<?php echo e($paper->C4N); ?> Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo1').empty().html('Numerical Value input Type [ +<?php echo e($paper->M4M); ?> , -<?php echo e($paper->M4N); ?> Marks] ')</script>   
     <?php endif; ?>
       <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" class="vir_input" type='text' id="nOption1_1" step="0.001" placeholder="0.000" name='numericalpage1' disabled><div class="temp-keyboard">
    <div class="keyboard nkeyboard1" id="azerty">
      <div class="row-keyboard">
        <div id="1" data-value="1"><p>1</p></div>
        <div id="2" data-value="2"><p>2</p></div>
        <div id="3" data-value="3"><p>3</p></div>
      </div>
      <div class="row-keyboard">
        <div id="4" data-value="4"><p>4</p></div>
        <div id="5" data-value="5"><p>5</p></div>
        <div id="6" data-value="6"><p>6</p></div>
      </div>
      <div class="row-keyboard">
        <div id="7" data-value="7"><p>7</p></div>
        <div id="8" data-value="8"><p>8</p></div>
        <div id="9" data-value="9"><p>9</p></div>
      </div>
      <div class="row-keyboard">
        <div id="null" data-value=""><p>.</p></div>
        <div id="0" data-value="0"><p>0</p></div>
        <div id="del" data-value="del"><p id="del">del</p></div>
    </div>
      </div>
    </div></td>
    <script type="text/javascript">
        $('.nkeyboard1 .row-keyboard div').on('click', function(e){
  e.preventDefault();
  var inputtext = $('#nOption1_1').val();

  if (e.target.id == 'del') {
    var temp = inputtext.substring(0, inputtext.length - 1);
    $('#nOption1_1').val(temp);
  }
  else if (e.target.id == 'null') {
    temp = inputtext + '.';
    $('#nOption1_1').val(temp);
  }
  else {

     var temp = $(this).data('value');
    temp = inputtext + temp;
    $('#nOption1_1').val(temp);
  }

});
    </script>
       </tr>
       <?php endif; ?>

                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="<?php echo e(asset('img/QuizIcons/up.png')); ?>" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <?php else: ?>
                                                     <div style="display: none;" class="tab-content div-question mb0" id="page<?php echo e($ques->qid); ?>" >
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo e($ques->type); ?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title" id="Qinfo<?php echo e($ques->qid); ?>"></h4>
                                                            <h4 class="question-title"> Question&nbsp;<?php echo e($ques->qid); ?>: <img src="<?php echo e(asset('img/QuizIcons/down.png')); ?>" class="btndown pull-right"> </h4>
                                                            <img  alt="Question" src="<?php echo e(asset("$ques->quesimg")); ?>" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
         <?php if($ques->type=='single'||$ques->type=='passage'||$ques->type=='match_column'): ?>
          <?php if($ques->qid<=$PQN): ?>
     <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Single Option Correct Type [ +<?php echo e($paper->P1M); ?> , -<?php echo e($paper->P1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Paragraphs Type [ +<?php echo e($paper->P5M); ?> , -<?php echo e($paper->P5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Match The Column Type [ +<?php echo e($paper->P6M); ?> , -<?php echo e($paper->P6N); ?> Marks] ')</script>
    <?php endif; ?>
     <?php elseif($ques->qid<=$CQN): ?>
    <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Single Option Correct Type [ +<?php echo e($paper->C1M); ?> , -<?php echo e($paper->C1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Paragraphs Type [ +<?php echo e($paper->C5M); ?> , -<?php echo e($paper->C5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Match The Column Type [ +<?php echo e($paper->C6M); ?> , -<?php echo e($paper->C6N); ?> Marks] ')</script>
    <?php endif; ?>
    <?php elseif($ques->qid<=$MQN): ?>
        <?php if($ques->type=='single'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Single Option Correct Type [ +<?php echo e($paper->M1M); ?> , -<?php echo e($paper->M1N); ?> Marks] ')</script>
    <?php elseif($ques->type=='passage'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Paragraphs Type [ +<?php echo e($paper->M5M); ?> , -<?php echo e($paper->M5N); ?> Marks] ')</script>
    <?php elseif($ques->type=='match_column'): ?>
    <script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Match The Column Type [ +<?php echo e($paper->M6M); ?> , -<?php echo e($paper->M6N); ?> Marks] ')</script>
    <?php endif; ?>
       <?php endif; ?>
     <tr>
     <td> <input type="radio" value="A" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" > a ) </td>
    <td> <input type="radio" value="B" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" > b ) </td>
    <td> <input type="radio" value="C" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" > c ) </td>
    <td> <input type="radio" value="D" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" > d ) </td>
         </tr> <?php endif; ?>                                                            
        <?php if($ques->type=='multiple'): ?>
        <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->P2M); ?> , -<?php echo e($paper->P2N); ?> Marks , Partial +1 Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->C2M); ?> , -<?php echo e($paper->C2N); ?> Marks , Partial +1 Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html(' Multiple Option Correct type [ +<?php echo e($paper->M2M); ?> , -<?php echo e($paper->M2N); ?> Marks , Partial +1 Marks] ')</script>   
     <?php endif; ?>
       <tr>
    <td class="column1"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='A'> a )</td>
    <td class="column2"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='B'> b )</td>
    <td class="column3"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='C'> c )</td>
    <td class="column4"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='D'> d )</td>
      </tr>
         <?php endif; ?>
       <?php if($ques->type=='integer'): ?>
        <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Single Digit Integer Type [ +<?php echo e($paper->P3M); ?> , -<?php echo e($paper->P3N); ?> Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Single Digit Integer Type [ +<?php echo e($paper->C3M); ?> , -<?php echo e($paper->C3N); ?> Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Single Digit Integer Type [ +<?php echo e($paper->M3M); ?> , -<?php echo e($paper->M3N); ?> Marks] ')</script>   
     <?php endif; ?>
         <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" class="vir_input" type='text' id="iOption<?php echo e($ques->qid); ?>_1" min="0" max="9" name='integerpage<?php echo e($ques->qid); ?>' disabled><div class="temp-keyboard">
    <div class="keyboard ikeyboard<?php echo e($ques->qid); ?>" id="azerty">
      <div class="row-keyboard">
        <div id="1" data-value="1"><p>1</p></div>
        <div id="2" data-value="2"><p>2</p></div>
        <div id="3" data-value="3"><p>3</p></div>
      </div>
      <div class="row-keyboard">
        <div id="4" data-value="4"><p>4</p></div>
        <div id="5" data-value="5"><p>5</p></div>
        <div id="6" data-value="6"><p>6</p></div>
      </div>
      <div class="row-keyboard">
        <div id="7" data-value="7"><p>7</p></div>
        <div id="8" data-value="8"><p>8</p></div>
        <div id="9" data-value="9"><p>9</p></div>
      </div>
      <div class="row-keyboard">
        <div id="null" data-value="null"><p></p></div>
        <div id="0" data-value="0"><p>0</p></div>
        <div id="del" data-value="del"><p id="del">del</p></div>
    </div>
      </div>
    </div></td>
    <script type="text/javascript">
        $('.ikeyboard<?php echo e($ques->qid); ?> .row-keyboard div').on('click', function(e){
  e.preventDefault();
  var inputtext = $('#iOption<?php echo e($ques->qid); ?>_1').val();

  if (e.target.id == 'del') {
    var temp = inputtext.substring(0, inputtext.length - 1);
    $('#iOption<?php echo e($ques->qid); ?>_1').val(temp);
  }
  else if (e.target.id == 'null') {
  }
  else {

    var temp = $(this).data('value');
    $('#iOption<?php echo e($ques->qid); ?>_1').val(temp);
  }

});
    </script>
         </tr>
         <?php endif; ?>
       <?php if($ques->type=='numerical'): ?>
        <?php if($ques->qid<=$PQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Numerical Value input Type [ +<?php echo e($paper->P4M); ?> , -<?php echo e($paper->P4N); ?> Marks] ')</script>
     <?php elseif($ques->qid<=$CQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Numerical Value input Type [ +<?php echo e($paper->C4M); ?> , -<?php echo e($paper->C4N); ?> Marks] ')</script>
    <?php elseif($ques->qid<=$MQN): ?>
<script type="text/javascript">$('#Qinfo<?php echo e($ques->qid); ?>').empty().html('Numerical Value input Type [ +<?php echo e($paper->M4M); ?> , -<?php echo e($paper->M4N); ?> Marks] ')</script>   
     <?php endif; ?>
       <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" class="vir_input" type='text' id="nOption<?php echo e($ques->qid); ?>_1" step="0.001" placeholder="0.000" name='numericalpage<?php echo e($ques->qid); ?>' disabled><div class="temp-keyboard">
    <div class="keyboard ikeyboard<?php echo e($ques->qid); ?>" id="azerty">
      <div class="row-keyboard">
        <div id="1" data-value="1"><p>1</p></div>
        <div id="2" data-value="2"><p>2</p></div>
        <div id="3" data-value="3"><p>3</p></div>
      </div>
      <div class="row-keyboard">
        <div id="4" data-value="4"><p>4</p></div>
        <div id="5" data-value="5"><p>5</p></div>
        <div id="6" data-value="6"><p>6</p></div>
      </div>
      <div class="row-keyboard">
        <div id="7" data-value="7"><p>7</p></div>
        <div id="8" data-value="8"><p>8</p></div>
        <div id="9" data-value="9"><p>9</p></div>
      </div>
      <div class="row-keyboard">
        <div id="null" data-value="."><p>.</p></div>
        <div id="0" data-value="0"><p>0</p></div>
        <div id="del" data-value="del"><p id="del">del</p></div>
    </div>
      </div>
    </div></td>
    <script type="text/javascript">
        $('.ikeyboard<?php echo e($ques->qid); ?> .row-keyboard div').on('click', function(e){
  e.preventDefault();
  var inputtext = $('#nOption<?php echo e($ques->qid); ?>_1').val();

  if (e.target.id == 'del') {
    var temp = inputtext.substring(0, inputtext.length - 1);
    $('#nOption<?php echo e($ques->qid); ?>_1').val(temp);
  }
  else if (e.target.id == 'null') {
    var temp = $(this).data('value');
    temp = inputtext + ".";
    $('#nOption<?php echo e($ques->qid); ?>_1').val(temp);
  }
  else {

     var temp = $(this).data('value');
    temp = inputtext + temp;
    $('#nOption<?php echo e($ques->qid); ?>_1').val(temp);
  }

});
    </script>
       </tr>
       <?php endif; ?>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="<?php echo e(asset('img/QuizIcons/up.png')); ?>" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button  class="mb5 full-width btn btn-success btn-block btn-save-answer">Save &amp; Next</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-warning btn-block btn-save-mark-answer">Save &amp; Mark For Review</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-default btn-block btn-reset-answer">Clear Response</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-primary btn-block btn-mark-answer">Mark For Review &amp; Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel-footer">
                                        <div class="row">
                
                                            <div class="col-md-12"> <button id="hhh" class="btn btn-success btn-submit-all-answers pull-right">Submit</button>&nbsp;&nbsp;
                                                <a href="javascript:void(0);" class="btn btn-default pull-left" id="btnPrevQue">
                                                    << Back </a>&nbsp;&nbsp; <a href="javascript:void(0);" class="btn btn-default pull-left" id="btnNextQue">Next >></a>&nbsp;&nbsp; </div>
                                        </div>
                                    </div>
                                </td>
                                <td >
                                    <div class="full_screen pull-right" style="cursor: pointer; background-color: #000; color: #fff; padding: 5px;">
                                        <i class="fa fa-angle-right fa-2x"></i>
                                    </div>
                                    <div class="collapse_screen hidden pull-right" style="cursor: pointer; background-color: #000; color: #fff; padding: 5px;">
                                        <i class="fa fa-angle-left fa-2x"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4" id="pallette" style="background: #d8d8d8;">
                        <div class="panel panel-default mb0"style="background: #d8d8d8;">
                            <div class="panel-body" style="background: #d8d8d8;">
                                <table class="table table-borderless mb0" >
                                    <tr>
                                        <td class="full-width"> <a class="test-ques-stats que-not-attempted lblNotVisited">0</a> Not Visited </td>
                                        <td class="full-width"> <a class="test-ques-stats que-not-answered lblNotAttempted">0</a> Not Answered </td>
                                    </tr>
                                    <tr>
                                        <td class="full-width"> <a class="test-ques-stats que-save lblTotalSaved">0</a> Answered </td>
                                        <td class="full-width"> <a class="test-ques-stats que-mark lblTotalMarkForReview">0</a> Marked for Review </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <a class="test-ques-stats que-save-mark lblTotalSaveMarkForReview">0</a> Answered &amp; Marked for Review (will be considered for evaluation) </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default " style="background: #d8d8d8;">
                            <div class="panel-body " style="height:320px;overflow-y:scroll; background: #d8d8d8; color: #d8d8d8;">
                                <ul class="pagination test-questions" style="background: #d8d8d8; color: #d8d8d8;">
                                    <li class="active" data-seq="1" id="1"><a class="test-ques que-not-answered" href="javascript:void(0);" data-href="page1">01</a></li>
                                   <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($ques->qid>1): ?>
                                    <li data-seq="1" class="" id="<?php echo e($ques->qid); ?>">
                                    <a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php echo e($ques->qid); ?>"><?php if($ques->qid<10): ?><?php echo e('0'.$ques->qid); ?><?php else: ?><?php echo e($ques->qid); ?><?php endif; ?></a></li>
                                    <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 exam-summery" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="text-center">Exam Summary</h3>
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Section Name</th>
                                            <th>No of Questions</th>
                                            <th>Answered</th>
                                            <th>Not Answered</th>
                                            <th>Marked for Review</th>
                                            <th>Answered & Marked for Review(will be considered for evaluation)</th>
                                            <th>Not Visited</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">Paper</td>
                                            <td class="lblTotalQuestion"></td>
                                            <td class="lblTotalSaved"></td>
                                            <td class="lblNotAttempted"></td>
                                            <td class="lblTotalMarkForReview"></td>
                                            <td class="lblTotalSaveMarkForReview"></td>
                                            <td class="lblNotVisited"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr />
                                <div class="col-md-12 text-center">
                                    <h4> Are you sure you want to submit for final marking?<br />No changes will be allowed after submission. <br /> </h4>
                                    <a class="btn btn-default btn-lg" id="btnYesSubmit">Yes</a> <a class="btn btn-default btn-lg" id="btnNoSubmit">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 exam-confirm" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                                    <h4> Thank You, your responses will be submitted for final marking - click OK to complete final submission. <br /> </h4>
                                    <a class="btn btn-default btn-lg" id="btnYesSubmitConfirm">Ok</a> <a class="btn btn-default btn-lg" id="btnNoSubmitConfirm">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    <div id="copyright">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center">© 2019 Inspire Academy. | Designed by  <a>Delta Trek</a> </p>
                    </div>
                </div>
            </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>     
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $('.keyboard .row-keyboard div').on('click', function(e){
  e.preventDefault();
  var inputtext = $('#username').val();

  if (e.target.id == 'del') {
    var temp = inputtext.substring(0, inputtext.length - 1);
    $('#username').val(temp);
  }
  else {
    var temp = $(this).data('value');
    temp = inputtext + temp;
    $('#username').val(temp);
  }

});


    </script>
    <script type="text/javascript">
        document.getElementById('arrwrapper').onclick = function() {

   $('#heading-breadcru').toggle();
    
    $(this).toggleClass('active');
    $('#heading-breadcrumbs').toggleClass('active');
};


    </script>
    <script type="text/javascript">
    $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return true;
    });
});
        var btn1p = 0;
        var btn2p = 0;
        var btn3p = 0;
     $('#btnViewResult').on('click', function(e) {
        e.preventDefault();
        $('.exam-result').show();
        $(".exam-thankyou").hide();    
    });</script>
    <script>
        $('.full_screen').click(function() {
            //alert('ff');
            $('#quest').removeClass('col-md-8');
            $('#quest').addClass('col-md-12');
            //pallette
            $('#pallette').addClass('hidden');
            $('.full_screen').addClass('hidden');
            $('.collapse_screen').removeClass('hidden');
        });

        $('.collapse_screen').click(function() {
            $('#quest').removeClass('col-md-12');
            $('#quest').addClass('col-md-8');
            //pallette
            $('#pallette').removeClass('hidden');
            $('.full_screen').removeClass('hidden');
            $('.collapse_screen').addClass('hidden');

        });
     

    </script>
    <script type="text/javascript">

 var myInterval, AttemptedAns = [],
    TotalTime = 0;
function NextQuestion(e) {
    var t = $(".test-questions").find("li.active");
    if (CheckNextPrevButtons(), t.is(":last-child")) return !1;
    $(".test-questions").find("li").removeClass("active"), t.next().addClass("active"), OpenCurrentQue(t.next().find("a")), e && (t.find("a").addClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"));
    var a = t.attr("data-seq");
    $(".nav-tab-sections").find("li").removeClass("active"), $(".nav-tab-sections").find("li[data-id=" + a + "]").addClass("active"), CheckQueAttemptStatus()
}

function PrevQuestion(e) {
    var t = $(".test-questions").find("li.active");
    if (CheckNextPrevButtons(), t.is(":first-child")) return !1;
    $(".test-questions").find("li").removeClass("active"), t.prev().addClass("active"), OpenCurrentQue(t.prev().find("a"));
    var a = t.attr("data-seq");
    $(".nav-tab-sections").find("li").removeClass("active"), $(".nav-tab-sections").find("li[data-id=" + a + "]").addClass("active"), CheckQueAttemptStatus()
}

function CheckNextPrevButtons() {
    var e = $(".test-questions").find("li.active");
    $("#btnPrevQue").removeAttr("disabled"), $("#btnNextQue").removeAttr("disabled"), e.is(":first-child") ? $("#btnPrevQue").attr("disabled", "disabled") : e.is(":last-child") && $("#btnNextQue").attr("disabled", "disabled")
}

function pad(e, t) {
    for (var a = e + ""; a.length < t;) a = "0" + a;
    return a
}

function OpenCurrentQue(e) {
    $(".tab-content").hide(), $("#lblQueNumber").text(e.text()), $("#" + e.attr("data-href")).show();
    var t = e.parent().attr("data-seq");
    $(".nav-tab-sections").find("li").removeClass("active"), $(".nav-tab-sections").find("li[data-id=" + t + "]").addClass("active"), CheckQueAttemptStatus()
}

function CoundownTimer(e) {
    var t = <?php echo e($timeleft->timeleft); ?>;
    myInterval = setInterval(function() {
        myTimeSpan = 1e3 * t, $(".timer-title").text(GetTime(myTimeSpan)), t < 600 ? ($(".timer-title").addClass("time-ending"), $(".timer-title").removeClass("time-started")) : ($(".timer-title").addClass("time-started"), $(".timer-title").removeClass("time-ending")), t > 0 ? t -= 1 : CleartTimer()
    }, 1e3)
    
}

function CleartTimer() {
      if(navigator.onLine)
        {
           clearInterval(myInterval);
           $('.hover_bkgr_fricc').hide();
       if (btn1p==1 && btn2p==0) {
        $("#btnYesSubmit").trigger("click")
      , $("#btnYesSubmitConfirm").trigger("click")}
        else if (btn2p==1 && btn3p==0) {
          $("#btnYesSubmitConfirm").trigger("click")
        }
 else{
      $(".btn-submit-all-answers").trigger("click")
    , $("#btnYesSubmit").trigger("click")
    , $("#btnYesSubmitConfirm").trigger("click")
}
        }
        else
        {$('.hover_bkgr_fricc').show();
            CleartTimer();
        }
     
}
function GetTime(e) {
    parseInt(e % 1e3 / 100);
    var t = parseInt(e / 1e3 % 60),
        a = parseInt(e / 6e4 % 60),
       n = parseInt(e / 36e5 % 24),
        tt = (n*60*60) + (a*60) + t ,
         paperid = "<?php echo e($plink->id); ?>"; 
        if(t/10==1||t/10==2||t/10==3||t/10==4||t/10==5||t/10==6){
        $.ajax({
      type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-timeleft')); ?>",
    data: {paperid:paperid,timeleft:tt},
    success: function(data) {
     },
  })   
  }   

    return (n = n < 10 ? "0" + n : n) + ":" + (a = a < 10 ? "0" + a : a) + ":" + (t < 10 ? "0" + t : t)

}


function pretty_time_string(e) {
    return (e < 10 ? "0" : "") + e
}


function CheckQueExists(e) {
    $.each(AttemptedAns, function(t, a) {
        void 0 !== a && a[1] == e && AttemptedAns.splice(t, 1)
    })
}

function CheckQueAttemptStatus() {
    var e = 0,
        t = 0,
        a = 0,
        n = 0,
        s = 0,
        i = 0;
    $(".test-questions").find("li").each(function() {
        var r = $(this);
        e += 1, r.children().hasClass("que-save") ? a += 1 : r.children().hasClass("que-save-mark") ? n += 1 : r.children().hasClass("que-mark") ? s += 1 : r.children().hasClass("que-not-answered") ? t += 1 : i += 1
    }), $(".lblTotalQuestion").text(e), $(".lblNotAttempted").text(t), $(".lblTotalSaved").text(a), $(".lblTotalSaveMarkForReview").text(n), $(".lblTotalMarkForReview").text(s), $(".lblNotVisited").text(i)
}



$(document).ready(function() {
    $("#page01").show();
    $(".exam-paper").show();
    CoundownTimer(parseInt($("#hdfTestDuration").val()));
    CheckNextPrevButtons();
    CheckQueAttemptStatus();
    $("#btnPrevQue").click(function() {
        PrevQuestion(!0)
    });
    $("#btnNextQue").click(function() {
        NextQuestion(!0)
    });
    $(".test-ques").click(function() {
        var e = $(".test-questions").find("li.active").find("a");
        $(".test-questions").find("li").removeClass("active"),
            $(this).parent().addClass("active"),
            $(this).hasClass("que-save") || $(this).hasClass("que-save-mark") || $(this).hasClass("que-mark") || ($(this).addClass("que-not-answered"), $(this).removeClass("que-not-attempted")), e.hasClass("que-save") || e.hasClass("que-save-mark") || e.hasClass("que-mark") || (e.addClass("que-not-answered"), e.removeClass("que-not-attempted")), OpenCurrentQue($(this))
    });
    $(".btn-save-answer").click(function(e) {
        e.preventDefault(); if(navigator.onLine){
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            n = $("#" + a).find(".hdfCurrectAns").val();
            if(n=='single'||n=='passage'||n=='match_column'){ if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        $("input[name='radios" + a + "']:checked").val();}
     else if(n=='multiple'){ if ($("input[name='checkbox" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        $("input[name='checkbox" + a + "']:checked").val();}
         else if(n=='integer'){if ($("input[name='integer" + a + "']").val()=='') {  return !1 };
        $("input[name='integer" + a + "']:checked").val();}
         else if(n=='numerical'){ if ($("input[name='numerical" + a + "']").val()=='') {  return !1 };
        $("input[name='numerical" + a + "']:checked").val();}
         t.find("a").removeClass("que-save-mark"), t.find("a").removeClass("que-mark"), t.find("a").addClass("que-save"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus() }
         else{
           alert('No Internet Connection. Please Connect to the Internet. Your response for this question isn\'t saved.');
           return !1; }
    });
    $(".btn-save-mark-answer").click(function(e) {
        e.preventDefault();if(navigator.onLine){
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            n = $("#" + a).find(".hdfCurrectAns").val();
            if(n=='single'||n=='passage'||n=='match_column'){ if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        $("input[name='radios" + a + "']:checked").val();}
     else if(n=='multiple'){ if ($("input[name='checkbox" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        $("input[name='checkbox" + a + "']:checked").val();}
         else if(n=='integer'){if ($("input[name='integer" + a + "']").val()=='') {  return !1 };
        $("input[name='integer" + a + "']:checked").val();}
         else if(n=='numerical'){ if ($("input[name='numerical" + a + "']").val()=='') {  return !1 };
        $("input[name='numerical" + a + "']:checked").val();}
         t.find("a").removeClass("que-save"), t.find("a").removeClass("que-mark"), t.find("a").addClass("que-save-mark"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus()}
         else{
           alert('No Internet Connection. Please Connect to the Internet. Your response for this question isn\'t saved.');
           return !1; }
    });
    $(".btn-mark-answer").click(function(e) {
        e.preventDefault();if(navigator.onLine){
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href");
        $("#" + a).find(".hdfQuestionID").val(),
         $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), $("#" + a).find(".hdfCurrectAns").val(), t.find("a").removeClass("que-save-mark"), t.find("a").removeClass("que-save"), t.find("a").addClass("que-mark"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus()}
         else{
           alert('No Internet Connection. Please Connect to the Internet. Your response for this question isn\'t saved.');
           return !1; }
    });
    $(".btn-reset-answer").click(function(e) {
        e.preventDefault();if(navigator.onLine){
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href");
             n = $("#" + a).find(".hdfCurrectAns").val();
        $("#" + a).attr("data-queid"), t.find("a").removeClass("saved-que");
            if(n=='single'||n=='passage'||n=='match_column'){$("input[name='radios" + a + "']:checked").each(function() {
                $(this).prop("checked", !1).change()
            }); }
                else if(n=='multiple'){$("input[name='checkbox" + a + "']:checked").each(function() {
                $(this).prop("checked", !1).change()
            }); }
             else if(n=='integer'){$("input[name='integer" + a + "']").val(''); }
             else if(n=='numerical'){$("input[name='numerical" + a + "']").val(''); }
            $("input[type=text]").val(""), a = t.find("a").attr("data-href"),
            $("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(),
            $("#" + a).find(".hdfCurrectAns").val(), $("#" + a).find(".hdfCurrectAns").val(),
            t.find("a").removeClass("que-save-mark"),
            t.find("a").removeClass("que-mark"),
            t.find("a").removeClass("que-save"),
            t.find("a").removeClass("que-not-attempted"),
            t.find("a").addClass("que-not-answered"),
            //NextQuestion(!1),
            CheckQueAttemptStatus()}
         else{
           alert('No Internet Connection. Please Connect to the Internet. Your response for this question isn\'t saved.');
           return !1; }
    });
    $(".btn-submit-all-answers").click(function(e) {
      e.preventDefault();
        if(navigator.onLine)
        {
            var con = 1;
        }
        else
        {
            var con = 0;
        }
      if (con == 1){
        var btn1p=1;
        e.preventDefault(), $(this),
            $(".test-questions").find("li").each(function() {
                var e = $(this),
                    t = !1;
                if (e.children().hasClass("que-save") ? t = !0 : e.children().hasClass("que-save-mark") && (t = !0), t) {
                    var a = e.find("a").attr("data-href");
                    //console.log(a), $("#" + a);
                    $("#" + a).find(".hdfCurrectAns").val();
                    $("#" + a).find("input[name='radios" + a + "']").each(function() {
                        var e = $(this);
                        e.is(":checked") && e.val()
                    });
                }
            })
            
            $(".exam-paper").hide(),
            $(".stream_1").hide(),
            $("#divdrplngcng").hide(),
            $(".exam-summery").show(),
            CheckQueAttemptStatus()
          var con = 0;}
            else {
              $('.hover_bkgr_fricc').show();
            }
    });
    $("#btnYesSubmit").on("click", function(e) {
      e.preventDefault();
       if(navigator.onLine)
        {
            var con = 1;
        }
        else
        {
            var con = 0;
        }
      if (con == 1){
        var btn2p=1;
        e.preventDefault(), $(".exam-confirm").show(), $("#divdrplngcng").hide(), $(".exam-summery").hide() 
        var con = 0;}
       else {
              $('.hover_bkgr_fricc').show();
            } 
    });
    $("#btnNoSubmit").on("click", function(e) {
        var btn1p=0;
        e.preventDefault(), $(".exam-paper").show(), $(".stream_1").show(), $(".exam-summery").hide(), $("#divdrplngcng").show()
    });
   $("#btnYesSubmitConfirm").on("click", function(e) {
      e.preventDefault();
       if(navigator.onLine)
        {
            var con = 1;
        }
        else
        {
            var con = 0;
        }
      if (con == 1){ var btn3p=1;
        var loading = document.getElementById('loading');
   loading.style.display='';
           var plid='<?php echo e($plink->id); ?>';
           var pid='<?php echo e($paper->id); ?>';
            var sid='<?php echo e(Auth::user()->id); ?>';
            var sname='<?php echo e(Auth::user()->name); ?>';
            var sclass='<?php echo e(Auth::user()->class); ?>';
            var scourse='<?php echo e(Auth::user()->course); ?>';
             var scoursetype='<?php echo e(Auth::user()->coursetype); ?>';
              var sgroup='<?php echo e(Auth::user()->groupid); ?>';
            var token = '<?php echo e(csrf_field()); ?>';
             $.ajax({
      type: "POST",
    url: "<?php echo e(route('student-adv_submit_result')); ?>", 
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    data: {pid:pid,plid:plid,sid:sid,sname:sname,sclass:sclass,scourse:scourse,scoursetype:scoursetype,sgroup:sgroup},
    success: function(data) {
         $("#loading").fadeOut(500);
      window.location.href = "results";
     },
  });  
      var con = 0;}
        else {
              $('.hover_bkgr_fricc').show();
            }
    });
    $("#btnNoSubmitConfirm").on("click", function(e) {
        var btn1p=0;
        var btn2p=0;
        e.preventDefault(), $(".exam-paper").show(), $(".stream_1").show(), $(".exam-confirm").hide(), $("#divdrplngcng").show()
    });
    $('.paperview').on('change', function(e) {
        e.preventDefault();

        if ($(this).val() == 'all') {
         $('#show').modal('show');
         $('.ques-all').removeClass('hidden');
           
        } else if ($(this).val() == 'Physics') {
        $('.ques-all').addClass('hidden');
             $('#show').modal('show');
           for (var i = 1; i <= <?php echo e($PQN); ?>; i++) {
               $('.ques-img'+i).removeClass('hidden');
           }
        } else if ($(this).val() == 'Chemistry') { 
            $('.ques-all').addClass('hidden');
             $('#show').modal('show');
           for (var i = <?php echo e($PQN+1); ?>; i <= <?php echo e($CQN); ?>; i++) {
               $('.ques-img'+i).removeClass('hidden');
           }
        } else if ($(this).val() == 'Mathmatics') {
             $('.ques-all').addClass('hidden');
             $('#show').modal('show');
           for (var i = <?php echo e($CQN+1); ?>; i <= <?php echo e($MQN); ?>; i++) {
               $('.ques-img'+i).removeClass('hidden');
           }
        } else if ($(this).val() == 'Biology') {
             $('.ques-all').addClass('hidden');
             $('#show').modal('show');
           for (var i = <?php echo e($MQN+1); ?>; i <= <?php echo e($BQN); ?>; i++) {
               $('.ques-img'+i).removeClass('hidden');
           }
        }
       
    });

    $('.stream_1').on('click', function(e) {
        e.preventDefault();
        var current_herf = $(this).attr('data-href');
        var a = $(".test-questions").find("li").find("a[data-href=" + current_herf + "]");
        a.trigger('click');
    });
    
    $('#btnRBack').on('click', function(e) {
        e.preventDefault();
        window.location.href = "online_tests";
    });
});</script>


<script type="text/javascript">
      $(window).load(function () {
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
    </script>
    
    
    <style type="text/css">

      /* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
 
/* Popup box BEGIN */
    </style>
    <script type="text/javascript">
       $(".btn-save-answer").click(function() {
   var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            qid= t.attr("id");
            var a1=''; var a2=''; var a3=''; var a4='';
            var na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            var n = $("#" + a).find(".hdfCurrectAns").val();
            if(n=='single'||n=='passage'||n=='match_column'){ if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        var a1=$("input[name='radios" + a + "']:checked").val();}
     else if(n=='multiple'){ if ($("input[name='checkbox" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
         var a1=$("input[name='checkbox" + a + "'][value='A']:checked").val();
         var a2=$("input[name='checkbox" + a + "'][value='B']:checked").val();
         var a3=$("input[name='checkbox" + a + "'][value='C']:checked").val();
         var a4=$("input[name='checkbox" + a + "'][value='D']:checked").val();
       }
         else if(n=='integer'){if ($("input[name='integer" + a + "']").val()=='') {  return !1 };
        var a1=$("input[name='integer" + a + "']").val();}
         else if(n=='numerical'){ if ($("input[name='numerical" + a + "']").val()=='') {  return !1 };
        var a1=$("input[name='numerical" + a + "']").val();} 
            plid='<?php echo e($plink->id); ?>';
            pid='<?php echo e($paper->id); ?>';
             sid='<?php echo e(Auth::user()->id); ?>';
            var type = 'save';
             $.ajax({
      type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-adv_saveanswer')); ?>",  
    data: {sid:sid,a1:a1,a2:a2,a3:a3,a4:a4,qid:qid,pid:pid,plid:plid,type:type,qtype:n},
    success: function(data) {

     },
  });  
 });
  $(".btn-save-mark-answer").click(function() {
   var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            qid= t.attr("id");
            var a1=''; var a2=''; var a3=''; var a4='';
            var na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            var n = $("#" + a).find(".hdfCurrectAns").val();
            if(n=='single'||n=='passage'||n=='match_column'){ if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        var a1=$("input[name='radios" + a + "']:checked").val();}
     else if(n=='multiple'){ if ($("input[name='checkbox" + a + "']").each(function() {
                $(this).is(":checked") && (na = !0)
            }), 0 == na) {  return !1 };
        var a1=$("input[name='checkbox" + a + "'][value='A']:checked").val();
         var a2=$("input[name='checkbox" + a + "'][value='B']:checked").val();
         var a3=$("input[name='checkbox" + a + "'][value='C']:checked").val();
         var a4=$("input[name='checkbox" + a + "'][value='D']:checked").val();}
         else if(n=='integer'){if ($("input[name='integer" + a + "']").val()=='') {  return !1 };
        var a1=$("input[name='integer" + a + "']").val();}
         else if(n=='numerical'){ if ($("input[name='numerical" + a + "']").val()=='') {  return !1 };
        var a1=$("input[name='numerical" + a + "']").val();} 
            plid='<?php echo e($plink->id); ?>';
            pid='<?php echo e($paper->id); ?>';
             sid='<?php echo e(Auth::user()->id); ?>';
            var type = 'save_mark';
             $.ajax({
       type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-adv_saveanswer')); ?>",  
    data: {sid:sid,a1:a1,a2:a2,a3:a3,a4:a4,qid:qid,pid:pid,plid:plid,type:type,qtype:n},
    success: function(data) {

     },
  });  
 });
  $(".btn-mark-answer").click(function() {
   var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            qid= t.attr("id");
            var a1=''; var a2=''; var a3=''; var a4='';
            var na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            var n = $("#" + a).find(".hdfCurrectAns").val();
            if(n=='single'||n=='passage'||n=='match_column') {if($("input[name='radios" + a + "']").is(':checked')){ var a1=$("input[name='radios" + a + "']:checked").val();}}
     else if(n=='multiple'){ 
    if($("input[name='checkbox" + a + "'][value='A']").is(':checked')){var a1=$("input[name='checkbox" + a + "'][value='A']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='B']").is(':checked')){var a2=$("input[name='checkbox" + a + "'][value='B']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='C']").is(':checked')){var a3=$("input[name='checkbox" + a + "'][value='C']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='D']").is(':checked')){var a4=$("input[name='checkbox" + a + "'][value='D']:checked").val();}}
         else if(n=='integer'){var a1=$("input[name='integer" + a + "']").val();}
         else if(n=='numerical'){var a1=$("input[name='numerical" + a + "']").val();} 
            plid='<?php echo e($plink->id); ?>';
            pid='<?php echo e($paper->id); ?>';
             sid='<?php echo e(Auth::user()->id); ?>';
            var type = 'mark';
             $.ajax({
     type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-adv_saveanswer')); ?>",  
    data: {sid:sid,a1:a1,a2:a2,a3:a3,a4:a4,qid:qid,pid:pid,plid:plid,type:type,qtype:n},
    success: function(data) {

     },
  });  
 });
  
  $(".test-ques").click(function() {
    var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            qid= t.attr("id");
            var a1=''; var a2=''; var a3=''; var a4='';
            var na = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
            var n = $("#" + a).find(".hdfCurrectAns").val();
           if(n=='single'||n=='passage'||n=='match_column') {if($("input[name='radios" + a + "']").is(':checked')){ var a1=$("input[name='radios" + a + "']:checked").val();}}
     else if(n=='multiple'){ 
    if($("input[name='checkbox" + a + "'][value='A']").is(':checked')){var a1=$("input[name='checkbox" + a + "'][value='A']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='B']").is(':checked')){var a2=$("input[name='checkbox" + a + "'][value='B']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='C']").is(':checked')){var a3=$("input[name='checkbox" + a + "'][value='C']:checked").val();}
    if($("input[name='checkbox" + a + "'][value='D']").is(':checked')){var a4=$("input[name='checkbox" + a + "'][value='D']:checked").val();}}
         else if(n=='integer'){var a1=$("input[name='integer" + a + "']").val();}
         else if(n=='numerical'){var a1=$("input[name='numerical" + a + "']").val();} 
            plid='<?php echo e($plink->id); ?>';
            pid='<?php echo e($paper->id); ?>';
             sid='<?php echo e(Auth::user()->id); ?>';
           var type = 'visited';
            if(a1==''&&a2==''&&a3==''&&a4==''){
             $.ajax({
      type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-adv_saveanswer')); ?>",  
    data: {sid:sid,a1:a1,a2:a2,a3:a3,a4:a4,qid:qid,pid:pid,plid:plid,type:type,qtype:n},
    success: function(data) {

     },
  });  
   }          
 });
  $(".btn-reset-answer").click(function() {
   var t = $(".test-questions").find("li.active"),
              qid= t.attr("id"),
             plid='<?php echo e($plink->id); ?>';
            pid='<?php echo e($paper->id); ?>';
             sid='<?php echo e(Auth::user()->id); ?>';
             $.ajax({
      type: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    url: "<?php echo e(route('student-adv_deleteanswer')); ?>",  
    data: {sid:sid,qid:qid,pid:pid,plid:plid},
    success: function(data) {
      

     },
  });  
 });

    </script>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <script type="text/javascript">
  window.onload = function() {
   <?php  $s =0; $sm=0; $m=0;  $v=0; ?>
       <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
var w = $(".test-questions").find("li.active");
                    w.removeClass("active");   
 var nowQ = $(".test-questions").find("li#<?php echo e($answer->qid); ?>");
 if (!nowQ.hasClass("active")){
  nowQ.addClass("active");
 }
 <?php if($answer->qtype=='single'||$answer->qtype=='passage'||$answer->qtype=='match_column'): ?>
<?php if($answer->a1=='A'): ?> $('input:radio[name="radiospage<?php echo e($answer->qid); ?>"][value="A"]').prop('checked', true).trigger("click");
<?php elseif($answer->a1=='B'): ?> $('input:radio[name="radiospage<?php echo e($answer->qid); ?>"][value="B"]').prop('checked', true).trigger("click");
<?php elseif($answer->a1=='C'): ?> $('input:radio[name="radiospage<?php echo e($answer->qid); ?>"][value="C"]').prop('checked', true).trigger("click");
<?php elseif($answer->a1=='D'): ?> $('input:radio[name="radiospage<?php echo e($answer->qid); ?>"][value="D"]').prop('checked', true).trigger("click");
<?php endif; ?>
<?php elseif($answer->qtype=='multiple'): ?>
<?php if($answer->a1=='A'): ?> $('input:checkbox[name="checkboxpage<?php echo e($answer->qid); ?>"][value="A"]').prop('checked', true);<?php endif; ?>
<?php if($answer->a2=='B'): ?> $('input:checkbox[name="checkboxpage<?php echo e($answer->qid); ?>"][value="B"]').prop('checked', true);<?php endif; ?>
<?php if($answer->a3=='C'): ?> $('input:checkbox[name="checkboxpage<?php echo e($answer->qid); ?>"][value="C"]').prop('checked', true);<?php endif; ?>
<?php if($answer->a4=='D'): ?> $('input:checkbox[name="checkboxpage<?php echo e($answer->qid); ?>"][value="D"]').prop('checked', true);<?php endif; ?>
<?php elseif($answer->qtype=='integer'): ?>
$("#iOption<?php echo e($answer->qid); ?>_1").val('<?php echo e($answer->a1); ?>');
<?php elseif($answer->qtype=='numerical'): ?>
$("#nOption<?php echo e($answer->qid); ?>_1").val('<?php echo e($answer->a1); ?>');
<?php endif; ?>
<?php if($answer->ans_type=='save'): ?>
 var t = $(".test-questions").find("li.active");
  t.find("a").addClass("que-save");
  t.find("a").removeClass("que-not-attempted");
<?php $s++;?>
<?php elseif($answer->ans_type=='save_mark'): ?>
 var t = $(".test-questions").find("li.active");
 t.find("a").addClass("que-save-mark");
  t.find("a").removeClass("que-not-attempted");
  <?php $sm++;?>
<?php elseif($answer->ans_type=='mark'): ?>
 var t = $(".test-questions").find("li.active");
  t.find("a").addClass("que-mark");
  t.find("a").removeClass("que-not-attempted");
  <?php $m++;?>
<?php elseif($answer->ans_type=='visited'): ?>
 var t = $(".test-questions").find("li.active");
  t.find("a").addClass("que-not-answered");
  t.find("a").removeClass("que-not-attempted");
  <?php $v++;?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
var w = $(".test-questions").find("li.active");
                    w.removeClass("active");
var nowQ = $(".test-questions").find("li#1");
 if (!nowQ.hasClass("active")){
  nowQ.addClass("active");
 }
$('.lblTotalSaved').text('<?php echo e($s); ?>');
$('.lblTotalSaveMarkForReview').text('<?php echo e($sm); ?>');
$('.lblTotalMarkForReview').text('<?php echo e($m); ?>');
$('.lblNotAttempted').text('<?php echo e($v); ?>');
$('.lblNotVisited').text('<?php echo e($BQN-$v-$s-$m-$sm); ?>');

$("#loading").fadeOut(500);  };

    </script>  
  </body>
  <style type="text/css">
     #heading-breadcrumbs.active{
    background: transparent;
}
#heading-breadcrumbs #arrwrapper{
   min-width: 35px;
   min-height: 35px;
   margin-right: 5px;
   margin-bottom: 5px;
   border-radius: 50%;
   background: rgba(43,43,51,0.8);
   border:1.5px solid #fff;
   float: right;transition: 0.15s ease;
}
.arrows:before, .arrows:after{background-color: #fd6e70;}
#heading-breadcrumbs.active .arrows:before{background-color: #fff;}
#heading-breadcrumbs.active .arrows:after{background-color: #fff;}
#heading-breadcrumbs.active #arrwrapper{border:1.5px solid #fd6e70;}
#heading-breadcrumbs{
    background: #2b2b33; color: #fff;
}
  </style>
  <?php endif; ?>
  
  </html>