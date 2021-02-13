
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FROODY</title>
<meta name="description" content="">
<meta name="keywords" content="grocery, froody , vegetables, vegetable, online food order, grocery delivery">
<link rel="canonical" href="https://froody.in" />
<meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
     <meta http-equiv="Pragma-directive: no-cache">
     <meta http-equiv="Cache-directive: no-cache">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo e(asset('css/preloader.css')); ?>" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo e(asset('hub_css/css/search.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('web1/css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo e(asset('web1/css/style1.css')); ?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="<?php echo e(asset('web1/css/font-awesome.css')); ?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script type="text/javascript" src="<?php echo e(asset('hub_css/js/jquery-2.1.1.min.js')); ?>"></script> 
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
							<div id="sidebar_details">
							<li class="dropdown">
		              <a style="padding:10px 5px;"><img src="<?php echo e(asset('hub_css/images/'.Auth::user()->photo)); ?>" width="35" style="border-radius:50%">&nbsp;&nbsp;<span class=" name-caret" style="text-transform: capitalize;font-size: 0.8em; color: #fff; text-decoration: none;"><?php echo e(Auth::user()->hub_name); ?></span></a>	
											<li style="margin-right: 10px;"><a class="btn-warning "  style=" border-radius:5px;box-shadow: inset 0 2em 2.3em -2em rgb(0,135,0);  color:#fff;border: none; float: right; font-size: 0.65em;padding: 5px 7px" href="<?php echo e(route('hub-logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('hub-logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                        </li><div class="clearfix"></div>
                                      <li style="background-color: #fd6e70;max-height: 1.5px;min-height: 1.5px; margin-top: 10px;"></li>

								</div>	
							<li>
								<a href="<?php echo e(route('hub-profile')); ?>"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-your_product')); ?>"><i class="fa fa-shopping-cart	
   								nav_icon"></i>Your Products</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-current_order')); ?>"><i class="fa fa-cart-arrow-down nav_icon"></i>Current Orders</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-your_order')); ?>"><i class="fa fa-cart-plus nav_icon"></i>Your Orders</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-accounting')); ?>"><i class="fa fa-calculator nav_icon"></i>Accounting</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-billing')); ?>"><i class="fa fa-sliders nav_icon"></i>Billing</a>
							</li>	
							<li>
								<a href="<?php echo e(route('hub-support')); ?>"><i class="fa fa-handshake-o	
								 nav_icon"></i>Support</a>
							</li>
							<li>
								<a href="<?php echo e(route('hub-settings')); ?>"><i class="fa fa-cog nav_icon"></i>Settings</a>
							</li>	
						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section header-1">
			<div class="header-left logo">
				<!--logo -->
						<ul>
						<button id="showLeftPush1"><i class="fa fa-bars"></i></button>
							
							<img src="<?php echo e(asset('hub_css/images/logo.png')); ?>" alt="" />
						
							<div class="clearfix"> </div>
						</ul>	
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="sticky-header header-section header-2">
			<div class="header-left logo">
				<!--logo -->
					<a href="https://contrivanceonline.in/accounting/profile">
						<ul>	
							<li style="align-items: center;"><img src="<?php echo e(asset('hub_css/images/logo.png')); ?>" alt="" /></li>
						
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
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><img src="<?php echo e(asset('hub_css/images/'.Auth::user()->photo)); ?>">&nbsp;&nbsp;<span class=" name-caret" style="text-transform: capitalize; text-decoration: none;"><?php echo e(Auth::user()->hub_name); ?></span></a><div class="clearfix"> </div>	
		             <ul class="dropdown-menu drp-mnu">
											<li><a style="background-color: #fff;border: none; color: #fd6e70;" href="<?php echo e(route('hub-logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('hub-logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
									</li></ul></li></ul>

				</div>
				<!--toggle button start-->
				<button id="showLeftPush2"><i class="fa fa-bars"></i></button>
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
						 <p>© 2019 Froody. | Design by  <a>Delta Trek</a> </p>
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
				showLeftPush = document.getElementById( 'showLeftPush1' ),
				body = document.body;
				hideclick =  document.getElementById( 'page-wrapper' );
				hideclick.onclick = function() {
					if ($(window).width()<805 && !$('#cbp-spmenu-s1').hasClass('cbp-spmenu-open')) {
					$('#showLeftPush1').trigger('click');	
		   }
				};			
  
    $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return true;
    });
});
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
		<script type="text/javascript">
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush2' ),
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
		$('#showLeftPush1').trigger('click');}
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