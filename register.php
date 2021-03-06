<?php include('./assets/php/process.php') ?>
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
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
   
    <div class="login-form">


      <!-- signup -->

      <form class="sign-in-htm" action="register.php" method="POST">
      <div class="group">
          <label for="user" class="label">First Name</label>
          <input id="firstname" name="firstname" type="text" class="input"value="" required/>
        </div>

        <div class="group">
          <label for="user" class="label">Middle Name</label>
          <input id="middlename" name="middlename" type="text" class="input"value="" required/>
        </div>

        <div class="group">
          <label for="user" class="label">Last Name</label>
          <input id="lastname" name="lastname" type="text" class="input"value="" required/>
        </div>

        <div class="group">
          <label for="user" class="label">Date of Birth</label>
          <input id="birthday" name="birthday" type="date" class="input"value="" required/>
        </div>

        <div class="group">
          <label for="user" class="label">Gender</label>
          <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other 
                 <a value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>">
                    </a>

        </div>
        <div class="group">
        <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input"value="<?php echo $username; ?>" required/>
          <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
        </div>
        </div>

        <div class="group">
        <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
          <label for="user" class="label">User Email</label>
          <input id="useremail" name="email" type="email" class="input"value="<?php echo $email; ?>"required/>
          <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
        </div>
        </div>

        <div class="group">
        <div <?php if (isset($password_error)): ?> class="form_error" <?php endif ?> >
          <label for="pass" class="label">Password</label>
          <input id="password" name="password_1" type="password" class="input" data-type="password" value="" required/>
          <?php if (isset($password_error)): ?>
      	<span><?php echo $password_error; ?></span>
      <?php endif ?>
        </div>
          </div>

        <div class="group">
        <div <?php if (isset($password_error)): ?> class="form_error" <?php endif ?> >
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass"name="password_2" type="password" class="input" data-type="password" value="" required/>
          <?php if (isset($password_error)): ?>
      	<span><?php echo $password_error; ?></span>
      <?php endif ?>
          </div>
        </div>

        <div class="group">
          <input type="submit" class="button" value="Sign Up" name="reg_user">
        </div>
        <div class="hr"></div>
        <p>
        <center> <a href="login.php">Already a Member? Sign In</a></center>
        </p>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>