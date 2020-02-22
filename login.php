<?php include('./assets/php/login_process.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cubers</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>

  <!-- login -->
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
   
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
      <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="login_username" type="text" class="input" value="" required/>
        </div>
        
        <div class="group">
        <div <?php if (isset($login_error)): ?> class="form_error" <?php endif ?> >
          <label for="pass" class="label">Password</label>
          <input id="password" name="login_password" type="password" class="input" data-type="password" value="" required/>
          <?php if (isset($login_error)): ?>
      	<span><?php echo $login_error; ?></span>
      <?php endif ?>
        </div>
        </div>
        
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
       
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        
        <div class="hr"></div>
        <p>
        <center> <a href="register.php">Not yet a Member? Sign Up</a></center>
        </p>
      </form>


    </div>
  </div>
</div>
  
  
</body>
</html>