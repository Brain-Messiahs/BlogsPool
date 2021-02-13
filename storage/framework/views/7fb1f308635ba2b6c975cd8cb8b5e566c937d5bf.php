<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Inspire Academy || IIT-JEE, NEET & MHT-CET</title>
<meta name="description" content="Best success rate in all over maharashtra in JEE, NEET, CET & Olympiads.Inspire Academy achieves more than 80% selections from classroom courses and crash courses each year.Branches : Kolhapur,Karad & Satara
Add.: 2nd floor,Tathastu Corner,Shahupuri,Opp.railway Gate-416001 Contact:7972961299">
<meta name="keywords" content="inspire kolhapur, inspire, inspire Academy, inspire portal, inspirekolhapur, inspirekolhapur.com">
<meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
     <meta http-equiv="Pragma-directive: no-cache">
     <meta http-equiv="Cache-directive: no-cache">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo e(asset('css/preloader.css')); ?>" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo e(asset('admin/css/search.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('web1/css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo e(asset('web1/css/style.css')); ?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="<?php echo e(asset('web1/css/font-awesome.css')); ?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script type="text/javascript" src="<?php echo e(asset('admin/js/jquery-2.1.1.min.js')); ?>"></script> 
<!--animate-->
<link href="<?php echo e(asset('web1/css/animate.css')); ?>" rel="stylesheet" type="text/css')}}" media="all">
<!--//end-animate-->
<!-- Metis Menu -->
<script src="<?php echo e(asset('web1/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('web1/js/custom.js')); ?>"></script>
<link href="<?php echo e(asset('web1/css/custom.css')); ?>" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push" onload="preloader()">
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
	<?php echo $__env->yieldContent('popup'); ?>
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="profile" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>
							<li>
								<a href="#"><i class="	fa fa-address-card-o nav_icon"></i>Profiles <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
		                               	<li><a href="students">Students</a></li>
		                                <li><a href="teacher_list?t=1">Teaching Staff</a></li>
		                                <li><a href="teacher_list">Non-teaching staff</a></l>          
		                          </ul>
							</li>
							<li>
								<a href="fee_details"><i class="fa fa-calendar-check-o nav_icon"></i>Fee Details</a>
							</li>
							<li>
								<a href="earnings"><i class="fa fa-check-square-o nav_icon"></i>Earnings</a>
							</li>
							<li>
								<a href="expenses"><i class="fa fa-industry nav_icon"></i>Expenses</a>
							</li>
							<li>
								<a href="accounting"><i class="fa fa-calculator nav_icon"></i>Accounting</a>
							</li>
							<li>
								<a href="balance_sheet"><i class="fa fa-sliders nav_icon"></i>Balance Sheet</a>
							</li>	
							<li>
								<a href="investments"><i class="fa fa-line-chart nav_icon"></i>Investments</a>
							</li>
							<li>
								<a href="settings"><i class="fa fa-cog nav_icon"></i>Settings</a>
							</li>	
						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left logo">
				<!--logo -->
					<a href="https://inspirekolhapur.com">
						<ul>	
							<li style="align-items: center;"><img src="<?php echo e(asset('admin/images/logo.png')); ?>" alt="" /></li>
						
							<div class="clearfix"> </div>
						</ul>
					</a>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<!--search-box-->
				<!--//end-search-box-->
			<div class="header-right">
				
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
					<li class="dropdown" style="padding-top: 0.8em">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><img src="<?php echo e(asset('account/images/'.Auth::user()->photo)); ?>">&nbsp;&nbsp;<span class=" name-caret" style="text-transform: capitalize; text-decoration: none;"><?php echo e(Auth::user()->name); ?></span></a><div class="clearfix"> </div>	
		             <ul class="dropdown-menu drp-mnu">
											<li><a style="background-color: #fff;border: none; color: #fd6e70;" href="<?php echo e(route('account-logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('account-logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
									</li></ul></li></ul>

				</div>
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
								
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
				<!-- four-grids -->
					<?php echo $__env->yieldContent('inner_block'); ?>
							
		<!--footer-->
		 <div class="dev-page">
	 
			<!-- page footer -->   
			<!-- dev-page-footer-closed dev-page-footer-fixed -->
            <div class="dev-page-footer dev-page-footer-fixed"> 
				<!-- container -->
				<div class="container">
					<div class="copyright">
						 <p>© 2019 Inspire Academy | Designed by  <a href="http://deltatrek.in">Delta Trek</a> </p>
					</div>
                </div>
				<!-- //container -->
            </div>
            <!-- /page footer -->
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="<?php echo e(asset('web1/js/classie.js')); ?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- Bootstrap Core JavaScript --> 
		
		<script type="text/javascript">
			var loading = document.getElementById('loading');
	function preloader(){
   loading.style.display='none';
	}
	$(window).load(function() {
		if ($(window).width()<805) {
		$('#showLeftPush').trigger('click');}
	//$("#loading").delay(2000).fadeOut(500);
	$("#loading-center").click(function() {
	$("#loading").fadeOut(500);
	});
});
		</script>
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		   
		<!-- //status -->
		<script type="text/javascript" src="<?php echo e(asset('web1/css/bootstrap.min.css')); ?>"></script>
		 <script type="text/javascript" src="<?php echo e(asset('web1/js/dev-loaders.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('web1/js/jquery.marquee.js')); ?>"></script>
		<!--//scrolling js--> 

<?php echo $__env->yieldContent('js'); ?>
		
</body>
</html>