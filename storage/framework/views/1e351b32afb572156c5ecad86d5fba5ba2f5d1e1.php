
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
<body class="cbp-spmenu-push" onload="preloader()" oncontextmenu="return true">
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
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/mainstudent_show_paper.css')); ?>">
      <div id="table" class="modal-body" >
      <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;">Question <?php echo e($ques->qid); ?></li>
 <li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;"><img src="<?php echo e(asset("$ques->quesimg")); ?>"/></li>
 <li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;">Solution <?php echo e($ques->qid); ?></li>
 <?php if($ques->solimg!=''): ?>
<li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>" style="list-style: none;"><img src="<?php echo e(asset("$ques->solimg")); ?>"/></li>
<?php else: ?>
<li class="hidden ques-all ques-img<?php echo e($ques->qid); ?>"  style="list-style: none;color: #d9d9d9;">Solution Not Available</li>
<?php endif; ?>
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

<div  class="hover_bkgrs" style="display: none;">
    <div id="tabless">
       <img src="">
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
                                                            <h4 class="question-title"> Question 1: <img src="<?php echo e(asset('img/QuizIcons/down.png')); ?>" class="btndown pull-right"> </h4>
                                                            <img id="img1" alt="Question" src="<?php echo e(asset("$ques->quesimg")); ?>" class="img-responsive"> <br>
                                                            <h4>Solution:-</h4>
                                                            <img alt="Question" src="<?php echo e(asset("$ques->solimg")); ?>" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody> <?php if($ques->type=='single'): ?>
                                                        <tr> 
                                                                        <td> <input type="radio" value="A" name="radiospage1" id="rOption1_1" disabled> a ) </td>
                                                                        <td> <input type="radio" value="B" name="radiospage1" id="rOption1_1" disabled> b ) </td>
                                                                        <td> <input type="radio" value="C" name="radiospage1" id="rOption1_1" disabled> c ) </td>
                                                                        <td> <input type="radio" value="D" name="radiospage1" id="rOption1_1" disabled> d ) </td>
                                                                    </tr> <?php endif; ?>
                            <?php if($ques->type=='multiple'): ?>
                            <tr>
                            <td class="column1"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='A' disabled> a )</td>
                            <td class="column2"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='B' disabled> b )</td>
                            <td class="column3"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='C' disabled> c )</td>
                            <td class="column4"><input type='checkbox' name='checkboxpage1' id="cOption1_1" value='D' disabled> d )</td> 
                           </tr>
                    <?php endif; ?>
                    <?php if($ques->type=='integer'): ?>
                     <tr>
                   <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" type='text' id="iOption1_1" min="0" max="9" placeholder="0" name='integerpage1'  disabled></td>
                   </tr>    
                  <?php endif; ?>
                   <?php if($ques->type=='numerical'): ?>
       <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" type='text' id="nOption1_1" step="0.001" placeholder="0.000" name='numericalpage1'  disabled></td>
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
                                                            <h4 class="question-title"> Question&nbsp;<?php echo e($ques->qid); ?>: <img src="<?php echo e(asset('img/QuizIcons/down.png')); ?>" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="<?php echo e(asset("$ques->quesimg")); ?>" class="img-responsive"> <br>
                                                             <h4>Solution:-</h4>
                                                            <img alt="Question" src="<?php echo e(asset("$ques->solimg")); ?>" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
         <?php if($ques->type=='single'): ?>
     <tr>
     <td> <input type="radio" value="A" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" disabled> a ) </td>
    <td> <input type="radio" value="B" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" disabled> b ) </td>
    <td> <input type="radio" value="C" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" disabled> c ) </td>
    <td> <input type="radio" value="D" name="radiospage<?php echo e($ques->qid); ?>" id="rOption<?php echo e($ques->qid); ?>_1" disabled> d ) </td>
         </tr> <?php endif; ?>                                                            
        <?php if($ques->type=='multiple'): ?>
       <tr>
    <td class="column1"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='A'disabled> a )</td>
    <td class="column2"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='B'disabled> b )</td>
    <td class="column3"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='C'disabled> c )</td>
    <td class="column4"><input type='checkbox' name='checkboxpage<?php echo e($ques->qid); ?>' id="cOption<?php echo e($ques->qid); ?>_1" value='D'disabled> d )</td>
      </tr>
         <?php endif; ?>
       <?php if($ques->type=='integer'): ?>
         <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" type='text' id="iOption<?php echo e($ques->qid); ?>_1" min="0" max="9" placeholder="0" name='integerpage<?php echo e($ques->qid); ?>'  disabled></td>
         </tr>
         <?php endif; ?>
       <?php if($ques->type=='numerical'): ?>
       <tr>
 <td class="column3"><input style="max-width:140px; border: 2px solid var(--main-blue);border-radius: 5px; background:#fff;" type='text' id="nOption<?php echo e($ques->qid); ?>_1" step="0.001" placeholder="0.000" name='numericalpage<?php echo e($ques->qid); ?>'  disabled></td>
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
                                           
                                        </div>
                                    </div>


                                    <div class="panel-footer">
                                        <div class="row">
                
                                            <div class="col-md-12"> 
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
     $('.hover_bkgrs').click(function(){
        $('.hover_bkgrs').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgrs').hide();
    });
     $("img").click(function () {
        var $src = $(this).attr("src");
        $(".hover_bkgrs").fadeIn();
        $(".hover_bkgrs img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
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
 <?php if($answer->qtype=='single'): ?>
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
.hover_bkgrs{
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
.hover_bkgrs > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
   
    vertical-align: middle;
   
    position: relative;
    border-radius: 8px;
    margin: 1px 1px 1px 1px;
    padding: 15px 5%;
}

  </style>  
  </body>
  
  </html>