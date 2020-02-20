<?php 

    $con = mysqli_connect('localhost','root','');


    if(!$con)
    {
        echo 'Not Connected To Server';
    }

    if(!mysqli_select_db($con,'website'))
    {
        echo 'Database Not Selected';
    }
    //get entries
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password_1'];
    $cpassword = $_POST['password_2'];
    //page for password validation

    if($password != $cpassword){
        echo "Passwords doesn't match(Redirecting you to main page)";
        header("refresh:2; url=index.php");
        return false;
   }
    //insert
    $sql = "INSERT INTO register (fname,mname,lname,gender,birthday,username,email,password) VALUES ('$firstname','$middlename','$lastname','$gender','$birthday','$username','$email','$password')";
    
    //page for username validation
    $rs=mysqli_query($con,"select * from register where username='$username'");
    if (mysqli_num_rows($rs)>0)
    {
        echo "Login ID Already Exists";
        echo "Redirecting you back to register page";
        header("refresh:2; url=index.php");
        exit();
    }
    //page for email validation
    $rs1=mysqli_query($con,"select * from register where email='$email'");
    if (mysqli_num_rows($rs1)>0)
    {
        echo "Email ID Already Exists";
        echo "Redirecting you back to register page";
        header("refresh:2; url=index.php");
        exit();
    }
    //page for account not created
    if(!mysqli_query($con,$sql))
    {
        echo 'Account not Created';
    }
    else
    //page for success
    {
        echo 'Account Successfully Created Login to the main page';
    }

    header("refresh:2; url=index.php");




?>