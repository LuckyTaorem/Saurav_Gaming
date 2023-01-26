<?php
require "dbcon.php";
if(isset($_POST["create"])){
$username = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$result=mysqli_query($con,"select * from user where email='".$email."'");
$num_row=mysqli_num_rows($result);
if($num_row==1){
    header('location:signup.php?q=email_err');
}
if($cpass == $pass){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $qy="insert into user(username,email,password) values('$username','$email','$pass')";
        if (mysqli_query($con,$qy)) {
		    header('location:login.php?q=success');
	    }
    }
}else{
    header('location:signup.php?q=pass_err');
}
}

if(isset($_POST["login"])){
$email = $_POST["email"];
$pass = $_POST["pass"];
$q="SELECT * FROM `user` WHERE `email`='$email'AND `password`='$pass'";
$result=mysqli_query($con,$q);
$num_row=mysqli_num_rows($result);
$_SESSION['email']=$email;
if($num_row==1){
    header('location:index.php');
}else{
    header('location:login.php?q=error');
}
}
?>