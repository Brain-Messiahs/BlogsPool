<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<title>Froody</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="<?php echo e(asset('user_css/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo e(asset('user_css/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo e(asset('user_css/css/font-awesome.css')); ?>" rel="stylesheet">
	<!--pop-up-box-->
	<link href="<?php echo e(asset('user_css/css/popuo-box.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo e(asset('user_css/css/cart.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo e(asset('user_css/css/orders.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo e(asset('css/preloader1.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- jquery -->
	<script src="<?php echo e(asset('user_css/js/jquery-2.1.4.min.js')); ?>"></script>
	<!-- //jquery -->
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('user_css/css/jquery-ui1.css')); ?>">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<?php echo $__env->yieldContent('head'); ?>
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
	<!-- top-header -->
	<!-- Modal -->
	<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 999999;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title"> <img src="<?php echo e(asset('user_css/images/profile.png')); ?>" width="43">&nbsp;&nbsp;<?php echo e(Auth::user()->name); ?></h5>
				</div>

				<div class="modal-body">
<div class="sidebar">
				<ul class="nav" id="side-menu">

					<li>
								<a  href="<?php echo e(route('user')); ?>" ><i class="fa fa-home nav_icon"></i>Home</a>
							</li>
							<li>
								<a href="<?php echo e(route('user-orders')); ?>" ><i class="fa fa-cart-plus nav_icon"></i>My Orders</a>
							</li>
							<li>
								<a href="<?php echo e(route('user-support')); ?>"><i class="fa  fa-handshake-o nav_icon"></i>Support</a>
							</li>
							<li>
								<form action="<?php echo e(route('user-logout')); ?>" method="post">
									<?php echo csrf_field(); ?>
								<a><i class="fa  fa-sign-out nav_icon"></i><input style="background-color: #fff;color: #8cc43e;border:none;" type="submit" value="Log Out" readonly=""></a>
								</form>
							</li>
							<h4>Category</h4><hr>
	  <li class="cat"><a href="<?php echo e(route('products',['category'=>'Offers'])); ?>">Offers</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Grocery'])); ?>">Grocery</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Vegetables'])); ?>">Vegetables</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Fruits'])); ?>">Fruits</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Dried Fruits & Nuts'])); ?>">Dried Fruits & Nuts</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Ghasitaram Sweets'])); ?>">Ghasitaram Sweets</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Bread & Bakery'])); ?>">Bread & Bakery</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Biscuits & Cookies'])); ?>">Biscuits & Cookies</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Snacks & Beverages'])); ?>">Snacks & Beverages</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Soft Drinks'])); ?>">Soft Drinks</a></li>
     <li class="cat"><a href="<?php echo e(route('products',['category'=>'Personal Care'])); ?>">Personal Care</a></li>

				</ul></div>
			</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	<!-- //top-header -->
	<div class="ban-top">
		<div class="container">
			 <span class="open-slide">
        <a href="#" data-toggle="modal" data-target="#myModal">
          <svg width="30" height="40">
                  <path d="M0,20 27,20" stroke="#8cc43e" stroke-width="4"/>
                  <path d="M0,27 21,27" stroke="#8cc43e" stroke-width="4"/>
                  <path d="M0,34 16,34" stroke="#8cc43e" stroke-width="4"/>
                </svg>
        </a>
      </span>
<div style="display: inline-block; margin-left: 22%">
	<a href="<?php echo e(route('user')); ?>">
				<img src="<?php echo e(asset('user_css/images/froody.png')); ?>" width="120" style="margin-top: -25px; ">
			</a>
			</div> 
			<div id="ex4" style="float: right; zoom:0.8; margin-right: -20px">
				<a href="<?php echo e(route('user-cart')); ?>">
  <span id="cart_count" class="p1 fa-stack fa-2x has-badge" data-count="<?php echo e($cart_number); ?>"  style="color: #8cc43e;">
    <!--<i class="p2 fa fa-circle fa-stack-2x"></i>-->
    <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="4b"></i>
  </span>
</a>
</div>
			
		</div>
	</div>
	
	<!-- //navigation -->
	<?php echo $__env->yieldContent('banner'); ?>

	<!-- top Products -->
	<div class="ads-grid">
		<?php echo $__env->yieldContent('product'); ?>
	</div>
	<!-- //top products -->


	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right" style=" bottom: 0px; width: 100%">
		<div class="container">
			<p>© 2019 Froody | Design by
				<a href="http://deltatrek.in">Delta Trek.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	

	<!-- popup modal (for signin & signup)-->
	<script src="<?php echo e(asset('user_css/js/jquery.magnific-popup.js')); ?>"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="<?php echo e(asset('user_css/js/minicart.js')); ?>"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="<?php echo e(asset('user_css/js/jquery-ui.js')); ?>"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="<?php echo e(asset('user_css/js/jquery.flexisel.js')); ?>"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->


	<!-- start-smooth-scrolling -->
	<script src="<?php echo e(asset('user_css/js/move-top.js')); ?>"></script>
	<script src="<?php echo e(asset('user_css/js/easing.js')); ?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="<?php echo e(asset('user_css/js/bootstrap.js')); ?>"></script>
	
	<!-- //for bootstrap working -->
	<!-- //js-files -->
<?php echo $__env->yieldContent('js'); ?>
<script type="text/javascript">
	$(window).load(function () {
    var cat = '<?php echo e(app('request')->input('category')); ?>';
      $('#agileinfo-nav_search').val(cat);
  });
   $('#agileinfo-nav_search').on('change', function() {
    var v = $(this).val();
    var link ='<?php echo e(route('products',['category'=>':cat'])); ?>';
    var link = link.replace('%3Acat',v);
    window.location=link;
});
  function openSlideMenu(){
      document.getElementById('side-menu').style.width='75%';

    }
			

var loading = document.getElementById('loading');
	function preloader(){
   loading.style.display='none';
	}
	$(window).load(function() {
	$("#loading-center").click(function() {
	$("#loading").fadeOut(500);
	});
});
		</script>
<style type="text/css">
	.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 230px;
		height: 100%;

		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;

	}
	
	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;

	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: -320px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}
        
	.slide-nav{
  height: 100%;
  width:0;
position: fixed;
  z-index: 999999999;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden; /* important*/
  padding-top: 60px;
  transition: 0.5s;
  -webkit-box-shadow: inset -194px 0px 18px -200px rgba(0,0,0,0.27);
-moz-box-shadow: inset -194px 0px 18px -200px rgba(0,0,0,0.27);
box-shadow: inset -194px 0px 18px -200px rgba(0,0,0,0.27);
}

#ex4 .p1[data-count]:after{
  position:absolute;
  right:10%;
  top:8%;
  content: attr(data-count);
  font-size:40%;
  padding:.2em;
  border-radius:50%;
  line-height:1em;
  color: white;
  background:#fe5722;
  text-align:center;
  min-width: 1.3em;
  //font-weight:bold;
}
/*--side-menu--*/
.sidebar ul li{
   margin-bottom: 0.7em;

}
.sidebar ul li a {
    color: #8cc43e;
    font-size: 0.9em;
     padding: 5px;
}
 
 .sidebar ul .cat a{
color: #8cc43e;
    font-size: 0.7em;
     padding-left: 5px;
     margin-top: 0px;
     margin-bottom: 0px;
 }
 .sidebar ul .cat {
 	 margin-bottom: 0.3em;
 }
.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: transparent;
    color: #fe5722;
}
.sidebar .arrow {
    float: right;
}
i.nav_icon {
    margin-right: 1em;
  font-size: 1.1em;
}
</style>
 
</body>

</html>