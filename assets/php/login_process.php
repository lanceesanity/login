<?php  
 require('db_connect.php');

if (isset($_POST['login_username']) and isset($_POST['login_password'])){
	
// Assigning POST values to variables.
$username = $_POST['login_username'];
$password = $_POST['login_password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `register` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "Login Credentials verified";
header("refresh:0.01; url=home_page/home.php");

}else{
    $login_error="Username and Password not match";
}
}
?>
