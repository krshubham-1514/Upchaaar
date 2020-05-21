<?php 
session_start();
$conn=mysqli_connect("localhost","root","","user_details_orders");
if(isset($_POST['submit']))
{
  if($_POST['password1']==$_POST['password2'])
  {
  $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
  $password=password_hash($_POST['password1'],PASSWORD_BCRYPT);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $mobile=mysqli_real_escape_string($conn,$_POST['tele']);
  $token="WJLKDKJSFSMSMAUTSDEEW6546546%#@%54DFGhajhkfjhd%#akhfawhuei5@#946464hnknsfdkurewhorero";
  $token=str_shuffle($token);
  $token=substr($token,0,10);
  $active=0;
  $query="INSERT INTO coutomers(firstname,lastname,pass,email,mobile,active,token) VALUES ('$firstname','$lastname','$password','$email','$mobile','$active','$token')";
  if(mysqli_query($conn,$query))
  {
	
	header("Location:verify.php");
  }
  else
  {
	  echo 'some error in data entered';
  }
  }
 else
  {
	echo 'plese enter matching password' ;
  }
  
}



?>
<!doctype html>
	<html>
	<head>
	<title> 
	</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">	
	</head>
	
<body>
	<form  action="signin.php" method="post" id="form">
	<ul>
	<li><h2>Create Account</h2></li>
	<li><input type="text" name="firstname" value="" minlenght=5 placeholder="First name" id="username" required ><br></li>
	<li><input type="text" name="lastname" value="" placeholder="Last name" id="username" required ><br></li>
	<li><input type="password" name="password1" value="" placeholder="Password" id="password" required ><br></li>
	
	<li><input type="password" name="password2" value="" placeholder=" Re-enter Password" id="password" required ><br></li>
    <li><input type="email" name="email" value="" placeholder="Email" id="email" required ><br></li>
	<li><input type="tel" name="tele" value="" placeholder="Mobile no." id="email" required ><br></li>
	<li><input type="submit" name="submit" value="Continue" onclick="return check()" style="background-color:#009acd;border:0;color:white;" id="btn"><br></li>
	 <li><p>Already have a account?</p><a href="signup.php">Sign in</a></li>
	</ul>
	</form>
</body>
</html>