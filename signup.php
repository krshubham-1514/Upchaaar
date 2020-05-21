<?php
session_start();
$conn=mysqli_connect("localhost","root","","user_details_orders");
if(isset($_POST['submit']))
{
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $query="SELECT * FROM coutomers WHERE email='$email'";
if($result=mysqli_query($conn,$query))
{
 if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
	  $pass_data=$row['pass'];
	  $pass_user=mysqli_real_escape_string($conn,$_POST['pass']);
	  if(password_verify($pass_user,$pass_data))
	  {
		  $_SESSION["user_email"]=$email;
		  header("Location:verify.php");
	  }
	  else
	  {
		  $_SESSION['msg']="You entered a incorrect password!";
	  }
	 
 }
 else
 {
	  $_SESSION['msg']="There was a problem We cannot find an account with that email address";
 }

}
}
?>
<!doctype html>
   <head>
	   <title>
	   </title>
   </head>
   <link rel="stylesheet" type="text/css" href="form.css">
   <link href="https:fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
   <link href="https:fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<body>
	<div class="msg">
	<?php
	  if(isset($_SESSION['msg']))
	  {
		  echo $_SESSION['msg'];
	  }
	  ?>
	</div> 
	 
	<form action="" method="post" id="form">
		<ul>
		<li><h2>Login</h2></li>
		<li><input type="email" name="email" placeholder="Email" required></li><br>
		<li><input type="password" name="pass" placeholder="Password" required></li><br>
		<li><input type="submit" name="submit" value="Login" style="background-color:#009acd;border:0;color:white;"></li><br>
		<li><a href="http://localhost/emedical6.0/forget.php">Forgot password?</a></li>
		</ul>
	</form>
</body>
</html>

