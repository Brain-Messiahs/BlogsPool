
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
<title>Contrivance || IIT-JEE, NEET & MHT-CET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Contrivance IIT and Medical is a premier institute for the preparation of NEET/IIT-JEE/MHT-CET/Boards/KVPY and the competitive examinations based on PCMB syllabus. We are based out of Pune and we have a pool of experienced and qualified faculties from IITs/ NITs/ GFTIs. We have special batches for CBSE/ICSE/State Board students to cater the specific requirements of the students. You can contact us @ 7378944442/3/5/6 or visit our office at 156, C Wing, Shoppers Orbit, Pune Alandi Road, Vishrantwadi, Pune-411015">
<meta name="keywords" content="contrivanceonline, contrivance, inspire Academy, contrivance portal, contrivance maharashtra, contrivanceonline.in , iit ,neet, MHT-CET,CET,Kvpy,Olympiads,Bestinstitute,Maharashtra CET">
<link rel="canonical" href="https://contrivanceonline.in" />
 <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/util.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" />
       <link href="<?php echo e(asset('fonts/icon-font.min.css')); ?>" rel="stylesheet" />
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script>
   $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return true;
    });
});
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('img/inspire.jpg')); ?>');">
            <div  class="wrap-login100 p-t-15 p-l-8">
              <img src="<?php echo e(asset('img/logo.png')); ?>" width="95%" style="opacity: 5">
                <span class="login100-form-title p-b-0 p-t-30" style="font-family: Ubuntu-Bold;color: rgba(10, 10, 10, 0.8);">
                    Student Login
                </span>
                 <?php if($errors->any()): ?>
<div class="alert alert-danger" style="padding-top: -25px;">
          <li>Incorrect Username or Password...</li>
</div>
<?php endif; ?>        
                <form autocomplete="off" method="POST" action="<?php echo e(route('student-login')); ?>" class="login100-form validate-form p-b-33 p-t-5">
                        <?php echo csrf_field(); ?>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="User name" autocomplete="false" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;" ></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password"  placeholder="Password" name="password" autocomplete="false" required>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>

        </div>

           <div class="col-md-12" style="min-height: 5vh; max-height: 5vh;padding-top: 6px;background-color: rgba(43, 43, 51, 0.9);">
                      <p style=" color: #fff" class="text-center">© 2019 Contrivance. | Designed by  <a style=" color: #fff">Delta Trek</a> </p>
                    </div>  
    </div>
     
</body>
</html>