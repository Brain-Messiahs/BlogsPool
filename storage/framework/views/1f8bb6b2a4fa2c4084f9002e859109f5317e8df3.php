
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inspire Academy || IIT-JEE, NEET & MHT-CET</title>
<meta name="description" content="Best success rate in all over maharashtra in JEE, NEET, CET & Olympiads.Inspire Academy achieves more than 80% selections from classroom courses and crash courses each year.Branches : Kolhapur,Karad & Satara
Add.: 2nd floor,Tathastu Corner,Shahupuri,Opp.railway Gate-416001 Contact:7972961299">
<meta name="keywords" content="inspire kolhapur, inspire, inspire Academy, inspire portal, inspirekolhapur, inspirekolhapur.com">
<meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
     <meta http-equiv="Pragma-directive: no-cache">
     <meta http-equiv="Cache-directive: no-cache">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo e(asset('student/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo e(asset('student/css/styles.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script type="text/javascript" src="<?php echo e(asset('student/js/jquery-2.1.1.min.js')); ?>"></script> 
<!--icons-css-->
<link href="<?php echo e(asset('student/css/font-awesome.css')); ?>" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<!--//charts-->

<!--//skycons-icons-->
</head>
<body> <a style="display: none;" href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
</div>

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Confirm Admin Password</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="teacher dashboard.php?idl=dl&dp=<?php echo $dp;?>&dt=<?php echo $dt;?>&dcp=<?php echo $dcp;?>&ds=<?php echo $ds;?>&idc=<?php echo $idc;?>" method="post">
					<div class="form-group">
					<?php include('delete errors.php'); ?></div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" name="admin_password" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<button type="submit" name="subm" style="background-color: #fd6e70;color: #FFF" class="btn btn-block btn-lg">DELETE</button>
					</div>
				</form>					
			</div>
		</div>
	</div>
</div> 	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <img src="<?php echo e(asset('student/images/logo.png')); ?>">
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/noimage.png" height="50px" alt=""> </span> 
												<div class="user-name">
													<p style="text-transform: capitalize;"><strong>student</strong></p>
													<span>admin</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li><form  method="post" action="userlogout" >
											 <button style="background-color: #fff;border: none; color: #fd6e70;" type="logout" name="logout" value="logout"><i class="fa fa-sign-out"></i> Logout</button></form> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
      	$("body").on("contextmenu",function(e){
        return false;
    });
     });
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<?php $linkid = $_GET['idl'];


    if ($linkid == "profile" || $linkid == "dl" ) {
    	include('inner block profile.php');
    }
    elseif ($linkid == "teacher") {
    	include('inner block teacher register.php');
    }
    elseif ($linkid == "teacherlist") {
    	include('inner block teacher list.php');
    }
     elseif ($linkid == "updateteacher") {
    	include('update teacher.php');
    }
    elseif ($linkid == "editstudent") {

    	include('student/updatebyteacher.php');
    }
     elseif ($linkid == "student_list") {

    	include('student/student_list.php');
    }
    elseif ($linkid == "npaper") {
    	include('inner block new paper.php');
    }
    elseif ($linkid == "uploaded") {

    	include('inner block paper uploaded.php');
    }
    elseif ($linkid == "publish") {

    	include('inner block paper publish.php');
    }
    elseif ($linkid == "updatepaperuploaded") {

    	include('inner block update paper uploaded.php');
    }
    elseif ($linkid == "file") {

    	include('inner block file upload.php');
    }
    elseif ($linkid == "answerkey") {

    	include('inner block answer key.php');
    }
    elseif ($linkid == "publishpaper") {

    	include('inner block paper publish options.php');
    }
    elseif ($linkid == "register") {

    	include('inner block register.php');
    }
    elseif ($linkid == "results") {

    	include('inner block results.php');
    }
    elseif ($linkid == "settings") {

    	include('inner block settings.php');
    }
    elseif ($linkid == "paperlistresults") {

    	include('results paper list.php');
    }
    elseif ($linkid == "online student") {

    	include('inner block online.php');
    }
 ?>

<!--inner block end here-->
<!--copy rights start here-->
	
<!--COPY rights end here-->
</div>


</div>


<!--slider menu-->
  <!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			</div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-profile" ><a href="#"><i class="fa fa-user"></i><span>Dashboard</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        <ul>
		            <li><a href="teacher dashboard.php?idl=profile">Profile</a></li>
		            <li><a href="teacher dashboard.php?idl=online student">Online user</a></li>		            
		          </ul>
		      </li>
		         <li id="menu-teacher"><a href="#"><i class="fa fa-user-secret"></i><span>Teacher</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul>
		         	 	<li><a href="teacher dashboard.php?idl=teacher">Register</a></li>
		                <li><a href="teacher dashboard.php?idl=teacherlist">List</a></li>
		         	 </ul>
		        </li>
		        <li id="menu-students" ><a href="#"><i class="fa fa-users"></i><span>Students</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        <ul>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=8">class 8th</a></li>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=9">class 9th</a></li>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=10">class 10th</a></li>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=11">class 11th</a></li>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=12">class 12th</a></li>
		            <li><a href="teacher dashboard.php?idl=student_list&idc=13">class Repeater</a></li>		            
		          </ul>
		      </li>

		        <li id="menu-online-test"><a href="#"><i class="fa fa-pencil-square-o"></i><span>Online Test</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	<ul>
		        		<li><a href="teacher dashboard.php?idl=npaper">Create Paper</a></li>
		        		<li><a href="teacher dashboard.php?idl=publish">Upload Paper</a></li>
		         	 	<li><a href="teacher dashboard.php?idl=uploaded">Uploaded Paper</a></li>
		                
		         	 </ul>
		        </li>
		        <li id="menu-register"><a href="teacher dashboard.php?idl=register"><i class="fa fa-user-plus"></i><span>Register</span></a>
		        </li>
		        <li id="menu-results" ><a href="teacher dashboard.php?idl=paperlistresults"><i class="fa fa-line-chart"></i><span>Results</span></a>
		        </li>
		          <li id="menu-settings"><a href="teacher dashboard.php?idl=settings"><i class="fa fa-cog"></i><span>Settings</span></a></li>

		      </ul>
		    </div>
	 </div>
	<div class="clearfix">
	 </div>
</div>
<!--slide bar menu end here-->
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">
	    $(document).ready(function(){
      	$("body").on("contextmenu",function(e){
        return false;
    });
     });
		</script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<div class="copyright" style="position: fixed; margin-left:40%;bottom: 0;">
	 <p><strong>© 2019 Inspire Academy. | Designed by  <a href="">Delta Trek</strong> </a> </p>
</div>
</body>
<style type="text/css">
 
	.modal-login {
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 20px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>

</html>                     