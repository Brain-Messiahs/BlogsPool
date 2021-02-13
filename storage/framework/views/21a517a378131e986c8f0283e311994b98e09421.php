<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>FROODY</title>

  <link rel="stylesheet" href="<?php echo e(asset('user_css/css/login.css')); ?>">
</head>
<body>
  <style media="screen">
    body{
      background:url("<?php echo e(asset('user_css/images/login_background.jpg')); ?>");
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
 <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="<?php echo e(route('user-signup')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h2>Create Account</h2>
        <span>use email for registration</span>
        <input type="text" placeholder="Name"  name="name" required="">
        <input type="email" placeholder="Email"  name="username" required="" >
        <input type="number" placeholder="mobile number" name="mobile" required="">
        <input type="password" placeholder="password" name="password2" required="">
        <input type="password" placeholder="Conform password" id="password" name="password" required="">
        <button id="signupattemt" type="submit">Sign up</button>
        <a id="signin">Sign In</a>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form  action="<?php echo e(route('user-login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h1>Sign in</h1>
        <span>use your account</span><br><br>  <?php if($errors->any()): ?>
<div class="alert alert-danger" style="padding-top: -15px;">
          <li style="list-style: none;">Incorrect Username or Password...</li>
</div>
<?php endif; ?>        
        <input type="email" placeholder="Email" name="username" value="<?php echo e(old('username')); ?>" required="">
        <input type="password" placeholder="password" name="password" required="">
        <button type="submit">Sign In</button>
        <a id="signup">Sign up</a>
      </form>
    </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('user_css/js/jquery-2.1.4.min.js')); ?>"></script>
<script type="text/javascript">
  $('#signin').on('click', function() {
    if(!$('.sign-up-container').hasClass('hidden')){
    $('.sign-up-container').addClass('hidden');}
    if($('.sign-in-container').hasClass('hidden')){
    $('.sign-in-container').removeClass('hidden');}
   
  });
  $('#password').on('keyup', function() {
   var value2 = $("input[name='password2']").val();
   var value1 = $(this).val();
   if(value1!=value2){
     $('#password').attr('style','background:rgba(221,17,68,0.2);');
      $('#signupattemt').attr('disabled',true);
   }
   else{
    $('#password').attr('style','background:#eee;');
    $('#signupattemt').attr('disabled',false);
   }
  });
   $('#signup').on('click', function() {
    if(!$('.sign-in-container').hasClass('hidden')){
    $('.sign-in-container').addClass('hidden');}
    if($('.sign-up-container').hasClass('hidden')){
    $('.sign-up-container').removeClass('hidden');}
   
  })
</script>
  </script>
</body>
</html>
