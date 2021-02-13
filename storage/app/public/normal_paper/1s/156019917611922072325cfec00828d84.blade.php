
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Inspire Academy || IIT-JEE, NEET & MHT-CET</title>
<meta name="description" content="Best success rate in all over maharashtra in JEE, NEET, CET & Olympiads.Inspire Academy achieves more than 80% selections from classroom courses and crash courses each year.Branches : Kolhapur,Karad & Satara
Add.: 2nd floor,Tathastu Corner,Shahupuri,Opp.railway Gate-416001 Contact:7972961299">
<meta name="keywords" content="inspire kolhapur, inspire, inspire Academy, inspire portal, inspirekolhapur, inspirekolhapur.com">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.default.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <script type="text/javascript">
      window.onload = function() {
        var o = <?php echo $timeover; ?>;
        if (o==1) {
        for (var i = 1; i-1 < <?php echo $NOQ; ?>; i++) {
          $("#img"+i).attr("src", $("#img"+i).attr("src")+"?timestamp=" + new Date().getTime());
          if (i<10) {var n='0'+i; var p=i-1; var w= "0"+p;}
          else{var n=i;var p=i-1; var w = p;}
          var a='';
          var a = localStorage.getItem('radiospage'+ n +'<?php echo $sid;echo $pid;?>');
            if (a!='') {
     if (a==1) {$('input:radio[name="radiospage' + n +'"][value="1"]').prop('checked', true).trigger("click");}
 else if (a==2) {$('input:radio[name="radiospage' + n +'"][value="2"]').prop('checked', true).trigger("click");}
 else if (a==3) {$('input:radio[name="radiospage' + n +'"][value="3"]').prop('checked', true).trigger("click");}
 else if (a==4) {$('input:radio[name="radiospage' + n +'"][value="4"]').prop('checked', true).trigger("click");}
              var tb = $(".test-questions").find("li#"+w+"");
            tb.removeClass("active");
            if (i==10) {var te = $(".test-questions").find("li#0"+w+"");
            te.removeClass("active");}
             var t = $(".test-questions").find("li#"+n+"");
                 t.addClass("active");
              $(".btn-save-answer").trigger("click");
            if (i==<?php echo $NOQ; ?>) {
               var tn = $(".test-questions").find("li#"+n+"");
            tn.removeClass("active");
             var tc = $(".test-questions").find("li#01");
            tc.addClass("active");
            }
        }  
        } 
        }       
        };
    </script>
    
    
</head>

<body>

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
                                <img src="{{asset('storage/app/public/img/logo.jpg')}}" alt="inspire logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                <td style="padding: 5px 15px; border: 2px solid #666"><i class="fa fa-user fa-4x"></i></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #fd6e70; font-weight: bold"><?php echo $name; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Subject Name</td>
                                                            <td> : <span style="color: #fd6e70; font-weight: bold"><?php echo $pn; ?></span></td>
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
                                <input type="hidden" id="hdfTestDuration" value="<?php echo $TTT; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear"></div>
        <div>
            <div id="heading-breadcrumbs" style="background: #2b2b33; color: #fff;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 pull-left">
                            <table class="stream">
                                <tr class="full-width">
                                    <td class="full-width">
                                        <h1> <?php echo $pn; ?> </h1>
                                    </td>
                                    <?php if($PQ!="0"){?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php if($PQN1<10){echo"0";} echo $PQN1;?>">Physics</a>
                                        <div class="clear-xs"></div>
                                    </td><?php } if($CQ!="0"){?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php if($CQN1<10){echo"0";} echo $CQN1;?>">Chemistry</a></td>
                                    <?php } if($MQ!="0"){?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php if($MQN1<10){echo"0";} echo $MQN1;?>">Mathmatics</a></td>
                                    <?php } if($BQ!="0"){?>
                                    <td class="full-width"><a style="background: #fd6e70;color: #fff;border-radius: 5px" class="mb5 btn stream_1 full-width" href="javascript:void(0);" data-href="page<?php if($BQN1<10){echo"0";} echo $BQN1;?>">Biology</a></td><?php } ?>
                                </tr>
                            </table>
                        </div>


                        <div class="clear-xs"></div>
                        <div class="col-md-2 col-sm-12" id="divdrplngcng" @*style="margin: 15px 0 0 0" *@>
                            <text style="color:white; font-weight:bold">Paper Language:</text>
                            <select class="form-control drplanguage">
                                <option selected value="english">English</option>
                            </select>
                            <input type="hidden" id="hdfCurrentLng" value="English" />
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
                                                     <div style="" class="tab-content div-question mb0" id="page01">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo $a1;?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 1: <img src="img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img id="img1" alt="Question" src="img/Question/<?php echo $name1;?>/1.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage01" id="rOption1_1"<?php if ($timeover==0) {
                                                                         if ($a1=="1") {?>
                                                                         checked
                                                                        <?php }} ?>> a ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage01" id="rOption1_1"<?php if ($timeover==0) {
                                                                         if ($a1=="2") {?>
                                                                         checked
                                                                        <?php }} ?>> b ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage01" id="rOption1_1"<?php if ($timeover==0) {
                                                                         if ($a1=="3") {?>
                                                                         checked
                                                                        <?php }} ?>> c ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage01" id="rOption1_1"<?php if ($timeover==0) {
                                                                         if ($a1=="4") {?>
                                                                         checked
                                                                        <?php }} ?>> d ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <?php
                                        
                                                    while ($i-1 < $NOQ ) {$z='a'.$i;?><div style="display: none;" class="tab-content div-question mb0" id="page<?php if ($i<10){echo "0";}echo $i;?>">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo $$z;?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question&nbsp;<?php echo $i;?>: <img src="img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="img/Question/<?php echo $name1;?>/<?php echo $i;?>.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage<?php if ($i<10){echo "0";}echo $i;?>" id="rOption<?php echo $i;?>_1"<?php if ($timeover==0) {
                                                                         if ($$z =="1") {?>
                                                                         checked
                                                                        <?php }} ?> > a ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage<?php if ($i<10){echo "0";}echo $i;?>" id="rOption<?php echo $i;?>_1"<?php if ($timeover==0) {
                                                                         if ($$z =="2") {?>
                                                                         checked
                                                                        <?php }} ?>> b ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage<?php if ($i<10){echo "0";}echo $i;?>" id="rOption<?php echo $i;?>_1"<?php if ($timeover==0) {
                                                                         if ($$z =="3") {?>
                                                                         checked
                                                                        <?php }} ?>> c ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage<?php if ($i<10){echo "0";}echo $i;?>" id="rOption<?php echo $i;?>_1"<?php if ($timeover==0) {
                                                                         if ($$z =="4") {?>
                                                                         checked
                                                                        <?php }} ?>> d ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>

                                                    <?php 
                                                    $i++;      
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button <?php if ($timeover==0) {?>disabled="true"<?php }?>  class="mb5 full-width btn btn-success btn-block btn-save-answer">Save &amp; Next</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button <?php if ($timeover==0) {?>disabled="true"<?php }?> class="mb5 full-width btn btn-warning btn-block btn-save-mark-answer">Save &amp; Mark For Review</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button <?php if ($timeover==0) {?>disabled="true"<?php }?> class="mb5 full-width btn btn-default btn-block btn-reset-answer">Clear Response</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button <?php if ($timeover==0) {?>disabled="true"<?php }?> class="mb5 full-width btn btn-primary btn-block btn-mark-answer">Mark For Review &amp; Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel-footer">
                                        <div class="row">
                
                                            <div class="col-md-12"> <button <?php if ($timeover==0) {?>disabled="true"<?php }?> id="hhh" class="btn btn-success btn-submit-all-answers pull-right">Submit</button>&nbsp;&nbsp;
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
                                    <li class="active" data-seq="1" id="01"><a class="test-ques que-not-answered" href="javascript:void(0);" data-href="page01">01</a></li>
                                    <?php
                                    while ($j-1 < $NOQ ) { ?>
                                    <li data-seq="1" class="" id="<?php if ($j<10) {echo "0";} echo $j;?>">
                                    <a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php if ($j<10){echo "0";}echo $j;?>"><?php if ($j<10) {
                                        echo "0";
                                    } echo $j;?></a></li>
                                   <?php $j++; }?>
                                    
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
                    <div class="col-md-12 exam-thankyou" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    
       
                    <div class="col-md-12 exam-result form" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body" >
                               
                                
                                <div class="col-md-12 text-center">
                                   <h3>
                                        Result
                                        <a id="btnRBack" class="btn btn-info pull-right">Close</a>
                                    </h3>
                                    <h4>Score: <strong id="lblRScore"></strong></h4> 
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Total Question</td>
                                                <td id="lblRTotalQuestion"></td>
                                                <td>Total Attempted</td>
                                                <td id="lblRTotalAttempted"></td>
                                                <th style="text-align: center;">Score</th>
                                            </tr>   
                                            <?php if ($PQ!='0') {?>
                                            <tr>
                                                <td>Correct In Physics</td>
                                                <td id="lblRTotalCorrectP"></td>
                                                <td>Incorrect In Physics</td>
                                                <td id="lblRTotalWrongP"></td>
                                                <th style="text-align: center;" id="lblRScoreP"></th>
                                            </tr>
                                           <?php } 
                                            if ($CQ!='0') {?>
                                            <tr>
                                                <td>Correct In Chemistry</td>
                                                <td id="lblRTotalCorrectC"></td>
                                                <td>Incorrect In Chemistry</td>
                                                <td id="lblRTotalWrongC"></td>
                                                <th style="text-align: center;" id="lblRScoreC"></th>
                                            </tr>
                                            <?php }
                                             if ($MQ!='0') {?>
                                            <tr>
                                                <td>Correct In Math</td>
                                                <td id="lblRTotalCorrectM"></td>
                                                <td>Inorrect In Math</td>
                                                <td id="lblRTotalWrongM"></td>
                                                <th style="text-align: center;" id="lblRScoreM"></th>
                                            </tr>
                                            <?php } 
                                             if ($BQ!='0') {?>
                                            <tr>
                                                <td>Correct In Biology</td>
                                                <td id="lblRTotalCorrectB"></td>
                                                <td>Inorrect In Biology</td>
                                                <td id="lblRTotalWrongB"></td>
                                                <th style="text-align: center;" id="lblRScoreB"></th>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>Total Correct Answers</td>
                                                <td id="lblRTotalCorrect"></td>
                                                <td>Total Incorrect Answers</td>
                                                <td id="lblRTotalWrong"></td>
                                                <th style="text-align: center;" id="lblRScoreper"></th>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr >
                                                <th style="text-align: center;">Question No.</th>
                                                <th style="text-align: center;">selected Option</th>
                                                <th style="text-align: center;">Status</th>
                                                <th style="text-align: center;">Currect Option</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyResult"></tbody>
                                    </table>
    
                                </div>
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
            
    <script src="js/jquery.min.js" type="text/javascript"></script>
Success!
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
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
    <script type="text/javascript">var myInterval, AttemptedAns = [],
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
    var t = 60 * <?php echo $TTT;?>;
    myInterval = setInterval(function() {
        myTimeSpan = 1e3 * t, $(".timer-title").text(GetTime(myTimeSpan)), t < 600 ? ($(".timer-title").addClass("time-ending"), $(".timer-title").removeClass("time-started")) : ($(".timer-title").addClass("time-started"), $(".timer-title").removeClass("time-ending")), t > 0 ? t -= 1 : CleartTimer()
    }, 1e3)
    
}



function CleartTimer() {
    if (<?php echo $timeover;?>==1) {
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
}

function GetTime(e) {
    parseInt(e % 1e3 / 100);
    var t = parseInt(e / 1e3 % 60),
        a = parseInt(e / 6e4 % 60),
       n = parseInt(e / 36e5 % 24),
       tt = (n*60) + a ,
       studentid = "<?php echo $studentid;?>",
       paperid = "<?php echo $id2;?>";       
  $.ajax({
type: "POST",
url: "time.php", 
data: { timeleft : tt , studentid : studentid , paperid : paperid } ,
success:function(response){ 
}
});
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


function CheckResult() {
    var n = 0
    $('#tbodyResult').html();
    var score = 0;
    var scoreP = 0;
    var scoreC = 0;
    var scoreM = 0;
    var scoreB = 0;
    var scoreper = 0;
    var TotalQuestion = 0;
    var TotalAttempted = 0;
    var TotalCorrectP = 0;
    var TotalWrongP = 0;
    var TotalCorrectC = 0;
    var TotalWrongC = 0;
    var TotalCorrectM = 0;
    var TotalWrongM= 0;
    var TotalCorrectB = 0;
    var TotalWrongB= 0;
    var TotalCorrect = 0;
    var TotalWrong = 0;


    $(".test-questions").find("li").each(function() {
        var r = $(this);
        var a = r.find("a").attr("data-href");
        var currectAns = $("#" + a).find(".hdfCurrectAns").val();
        var currectQue = $("#" + a).find(".question-title").text();
        TotalQuestion = TotalQuestion + 1;
        var tr = $('<tr></tr>');
        tr.append('<td>' + currectQue + '</td>');
        var ansStatus = "Wrong";
        var selectedAns = '';
        if (TotalQuestion<"<?php echo $PQN; ?>") {
        if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            $("#" + a).find("input[name='radios" + a + "']").each(function() {
                var e = $(this);
                if (e.is(':checked')) {
                    selectedAns = e.val();
                    if (e.val() == currectAns) {
                        ansStatus = "Correct";
                    }
                }
            });
            
            if (ansStatus == 'Correct') {
                scoreP = scoreP + <?php echo $PM; ?>;
                TotalCorrectP = TotalCorrectP + 1;
            } else {
                scoreP = scoreP - <?php echo $PN; ?>;
                TotalWrongP = TotalWrongP + 1;
            }
            TotalAttempted = TotalAttempted + 1;
        }
    }
   else if (TotalQuestion<"<?php echo $CQN; ?>") {
             if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            $("#" + a).find("input[name='radios" + a + "']").each(function() {
                var e = $(this);
                if (e.is(':checked')) {
                    selectedAns = e.val();
                    if (e.val() == currectAns) {
                        ansStatus = "Correct";
                    }
                }
            });
            
            if (ansStatus == 'Correct') {
                scoreC = scoreC + <?php echo $CM; ?>;
                TotalCorrectC = TotalCorrectC + 1;
            } else {
                scoreC = scoreC - <?php echo $CN; ?>;
                TotalWrongC = TotalWrongC + 1;
            }
            TotalAttempted = TotalAttempted + 1;
        }
    }
    else if (TotalQuestion<"<?php echo $MQN; ?>") {
            if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            $("#" + a).find("input[name='radios" + a + "']").each(function() {
                var e = $(this);
                if (e.is(':checked')) {
                    selectedAns = e.val();
                    if (e.val() == currectAns) {
                        ansStatus = "Correct";
                    }
                }
            });
            
            if (ansStatus == 'Correct') {
                scoreM = scoreM + <?php echo $MM; ?>;
                TotalCorrectM = TotalCorrectM + 1;
            } else {
                scoreM = scoreM - <?php echo $MN; ?>;
                TotalWrongM = TotalWrongM + 1;
            }
            TotalAttempted = TotalAttempted + 1;
        }
    }
    else{
        if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            $("#" + a).find("input[name='radios" + a + "']").each(function() {
                var e = $(this);
                if (e.is(':checked')) {
                    selectedAns = e.val();
                    if (e.val() == currectAns) {
                        ansStatus = "Correct";
                    }
                }
            });
            
            if (ansStatus == 'Correct') {
                scoreB = scoreB + <?php echo $BM; ?>;
                TotalCorrectB = TotalCorrectB + 1;
            } else {
                scoreB = scoreB - <?php echo $BN; ?>;
                TotalWrongB = TotalWrongB + 1;
            }
            TotalAttempted = TotalAttempted + 1;
        }
    }  TotalCorrect = TotalCorrectP + TotalCorrectC + TotalCorrectM + TotalCorrectB ;
          TotalWrong = TotalWrongP + TotalWrongC + TotalWrongM + TotalWrongB ;
          score = scoreP + scoreC + scoreM + scoreB ;
          scoreper = score;
          
        if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            tr.append('<td>' + selectedAns + '</td>');
        } else {
            tr.append('<td>---</td>');
        }
        if (r.children().hasClass("que-save") || r.children().hasClass("que-save-mark")) {
            if (ansStatus == 'Correct') {
                tr.append('<td><span class="label label-success">' + ansStatus + '</span></td>');
            } else {
                tr.append('<td><span class="label label-danger">' + ansStatus + '</span></td>');
            }
        } else {
            tr.append('<td>N/A</td>');
        }
        tr.append('<td>' + currectAns + '</td>');
        $('#tbodyResult').append(tr);
    });
    $('#lblRTotalQuestion').text(TotalQuestion);
    $('#lblRTotalAttempted').text(TotalAttempted);
     $('#lblRTotalCorrectP').text(TotalCorrectP);
    $('#lblRTotalWrongP').text(TotalWrongP);
     $('#lblRTotalCorrectC').text(TotalCorrectC);
    $('#lblRTotalWrongC').text(TotalWrongC);
     $('#lblRTotalCorrectM').text(TotalCorrectM);
    $('#lblRTotalWrongM').text(TotalWrongM);
    $('#lblRTotalCorrectB').text(TotalCorrectB);
    $('#lblRTotalWrongB').text(TotalWrongB);
     $('#lblRTotalCorrect').text(TotalCorrect);
    $('#lblRTotalWrong').text(TotalWrong);
    $('#lblRScore').text(score);
    $('#lblRScoreP').text(scoreP);
    $('#lblRScoreC').text(scoreC);
    $('#lblRScoreM').text(scoreM);
    $('#lblRScoreB').text(scoreB);
    $('#lblRScoreper').text(scoreper); 

    $('#a').val(TotalQuestion);
    $('#b').val(TotalAttempted);
     $('#c').val(TotalCorrect);
    $('#d').val(TotalWrong);
     $('#e').val(scoreper);
     $('#f').val(TotalCorrectP);
    $('#g').val(TotalWrongP);
    $('#h').val(scoreP);
     $('#i').val(TotalCorrectC);
    $('#j').val(TotalWrongC);
      $('#k').val(scoreC);
     $('#l').val(TotalCorrectM);
    $('#m').val(TotalWrongM);
    $('#n').val(scoreM);
    $('#o').val(TotalCorrectB);
    $('#p').val(TotalWrongB);
    $('#q').val(scoreB);
    var sid9 = <?php echo $_GET['sid']; ?>;
    var pid9 = <?php echo $_GET['pid']; ?>;
    $.ajax({
      type: "POST",
    url: "rsu.php",  
    data: {sid9:sid9,
            pid9:pid9,
      lblRTotalQuestion:TotalQuestion,
             lblRTotalAttempted:TotalAttempted,
              lblRTotalCorrect:TotalCorrect,
               lblRTotalWrong:TotalWrong,
               lblRScoreper:scoreper,
               lblRTotalCorrectP:TotalCorrectP,
               lblRTotalWrongP:TotalWrongP,
               lblRScoreP:scoreP,
             lblRTotalCorrectC:TotalCorrectC,
               lblRTotalWrongC:TotalWrongC,
               lblRScoreC:scoreC,
             lblRTotalCorrectM:TotalCorrectM,
               lblRTotalWrongM:TotalWrongM,
               lblRScoreM:scoreM,
             lblRTotalCorrectB:TotalCorrectB,
               lblRTotalWrongB:TotalWrongB,
               lblRScoreB:scoreB},
    success: function(response) {
      var succes = 1;
    },
    error: function(response) {
     var succes = 0;
    }
  });  
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
        e.preventDefault();
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            n = ($("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), !1);
             
        if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (n = !0)
            }), 0 == n) {  return !1 };
        $("input[name='radios" + a + "']:checked").val(),
         localStorage.setItem('radios'+ a +'<?php echo $sid;echo $pid;?>', $("input[name='radios" + a + "']:checked").val()),
         t.find("a").removeClass("que-save-mark"), t.find("a").removeClass("que-mark"), t.find("a").addClass("que-save"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus()
    });
    $(".btn-save-mark-answer").click(function(e) {
        e.preventDefault();
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href"),
            n = ($("#" + a).find(".hdfQuestionID").val(),
                $("#" + a).find(".hdfPaperSetID").val(),
                $("#" + a).find(".hdfCurrectAns").val(),
                $("#" + a).find(".hdfCurrectAns").val(), !1);
        if ($("input[name='radios" + a + "']").each(function() {
                $(this).is(":checked") && (n = !0)
            }), 0 == n) {  return !1 };
        $("input[name='radios" + a + "']:checked").val(),
         t.find("a").removeClass("que-save"), t.find("a").removeClass("que-mark"), t.find("a").addClass("que-save-mark"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus()
    });
    $(".btn-mark-answer").click(function(e) {
        e.preventDefault();
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href");
        $("#" + a).find(".hdfQuestionID").val(),
         $("#" + a).find(".hdfPaperSetID").val(), $("#" + a).find(".hdfCurrectAns").val(), $("#" + a).find(".hdfCurrectAns").val(), t.find("a").removeClass("que-save-mark"), t.find("a").removeClass("que-save"), t.find("a").addClass("que-mark"), t.find("a").removeClass("que-not-answered"), t.find("a").removeClass("que-not-attempted"), NextQuestion(!1), CheckQueAttemptStatus()
    });
    $(".btn-reset-answer").click(function(e) {
        e.preventDefault();
        var t = $(".test-questions").find("li.active"),
            a = t.find("a").attr("data-href");
        $("#" + a).attr("data-queid"), t.find("a").removeClass("saved-que"),
            $("input[name='radios" + a + "']:checked").each(function() {
                $(this).prop("checked", !1).change()
            }), $("input[name='chk" + a + "']").each(function() {
                $(this).prop("checked", !1).change()
            }), $("input[type=checkbox]").prop("checked", !1).change(),
            $("input[type=text]").val(""), a = t.find("a").attr("data-href"),
            $("#" + a).find(".hdfQuestionID").val(), $("#" + a).find(".hdfPaperSetID").val(),
            $("#" + a).find(".hdfCurrectAns").val(), $("#" + a).find(".hdfCurrectAns").val(),
            t.find("a").removeClass("que-save-mark"),
            t.find("a").removeClass("que-mark"),
            t.find("a").removeClass("que-save"),
            t.find("a").removeClass("que-not-attempted"),
            t.find("a").addClass("que-not-answered"),
            //NextQuestion(!1),
            CheckQueAttemptStatus()
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
        e.preventDefault();
        CheckResult();
        for (var i = 1; i-1 < <?php echo $NOQ; ?>; i++) {
          if (i<10) {var n='0'+i;}
          else{var n=i;}
      localStorage.removeItem('radiospage'+ n +'<?php echo $sid;echo $pid;?>');}
        $("#time1").hide();
        $('.exam-result').show();
        $("#divdrplngcng").hide(); 
        $(".exam-confirm").hide();
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
    $('.drplanguage').on('change', function(e) {
        e.preventDefault();
        var newlang = 'English';

        if ($(this).val() == 'english') {
            newlang = 'English';
        } else if ($(this).val() == 'hindi') {
            newlang = 'Hindi';
        } else if ($(this).val() == 'gujarati') {
            newlang = 'Gujarati';
        }
        var currentLang = $('#hdfCurrentLng').val();
        $('.question-height > .img-responsive').each(function(index, item) {
            var currentImg = $(this);
            var currentImgSrc = currentImg.attr('src');
            currentImg.attr('src', currentImgSrc.replace(currentLang, newlang) + '?' + new Date());
        });
        $('#hdfCurrentLng').val(newlang);
    });
    $('.stream_1').on('click', function(e) {
        e.preventDefault();
        var current_herf = $(this).attr('data-href');
        var a = $(".test-questions").find("li").find("a[data-href=" + current_herf + "]");
        a.trigger('click');
    });
    
    $('#btnRBack').on('click', function(e) {
        e.preventDefault();
        window.location.href = "../student/student_login.php";
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
    $(document).ready(function() {     
      var sid = <?php echo $sid; ?>;
      var pid = <?php echo $pid; ?>;
      var pn  = <?php echo $pn; ?>;
      var status = "active";
    $.ajax({
      type: "POST",
    url: "online status.php",  
    data: {sid:sid,pid:pid,pn:pn,status:status},
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
 input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color:  #4CAF50;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
/* Popup box BEGIN */
    </style>