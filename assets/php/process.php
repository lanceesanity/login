<?php 
$db = mysqli_connect('localhost', 'root', '', 'website');
  $username = "";
  $email = "";
  if (isset($_POST['reg_user'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password_1'];
    $cpassword = $_POST['password_2'];

  	$sql_u = "SELECT * FROM register WHERE username='$username'";
  	$sql_e = "SELECT * FROM register WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
      }
    elseif(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
      }
    elseif($password != $cpassword){
     $password_error="Password does not match";
    }else{
           $query = "INSERT INTO register (fname,mname,lname,gender,birthday,username,email,password) VALUES ('$firstname','$middlename','$lastname','$gender','$birthday','$username','$email','$password')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           header("refresh:2; url=assets/php/account_success.php");
  	}
  }
?>