<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="loginsystem";
 
require('connect.php');

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where uidUsers='".$uname."'AND pwdUsers='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("Location: login.php");
        exit();
    }   
}
?>


<!DOCTYPE html>
<html>
<head>
 	<title> Login Form </title>
 	<link rel="stylesheet" a href="style.css">
</head>
<body>
	 <div class="container">
		 <img src="imgg.png"/>
		 <form method="POST" action="#">
		 <div class="form-input">
			<input type="text" name="username" placeholder="Enter the User Name"/> 
		 </div>
		 	<div class="form-input">
		 <input type="password" name="password" placeholder="password"/>
			 </div>
		 <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		 </form>
		 <div class="texts">

			<?php
			
			if(isset($_POST['username']))
			{
				if(mysqli_num_rows($result)!=1)
				{
				echo "<br></br> You Have Entered Incorrect Password. Try again";
				}
			}

			?>

	 </div>
</body>
</html>
