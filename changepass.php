<?php
function redirect()
{
    header("Location:signin.php");
}
if(!isset($_GET['email'])||!isset($_GET['token']))
{
    
}
else
{
    if(isset($_POST['submit']))
    {
    $conn=mysqli_connect("localhost","root","","user_details_orders");
    $email_ver=mysqli_real_escape_string($conn,$_GET['email']);
    $token_ver=mysqli_real_escape_string($conn,$_GET['token']);
    $query="SELECT user_id FROM coutomers WHERE email='$email_ver' AND token='$token_ver'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)!=0)
    {
        if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
       
        $newpass=mysqli_real_escape_string($conn,$_POST['newpass']);
        $repass=mysqli_real_escape_string($conn,$_POST['repass']);
        if($newpass==$repass)
        {
        $hash=password_hash($newpass,PASSWORD_BCRYPT);
        $user=$row['user_id'];
        $query_update="UPDATE coutomers SET pass='$hash' WHERE user_id='$user'"; 
        $result_ver=mysqli_query($conn,$query_update);
        if($result_ver)
        {
            echo 'your password has been changed succesfully!';
        }
        }
    }
       
       
    }
    else
    {
       echo "you have entered wrong email address";
    }
}
}


?>
<!doctype html>
<html>
   <head>
	   <title>
	   </title>
   </head>
   <link rel="stylesheet" type="text/css" href="form.css">
   <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<body>
<form action="" method="post" id="form">
		<ul>
		<li><h3>Change password</h3></li>
		<li><input type="newpass" name="newpass" placeholder="New password" required></li><br>
        <li><input type="repass" name="repass" placeholder="Re-enter New password" required></li><br>
		<li><input type="submit" name="submit" value="continue" style="background-color:orange;border:0;color:white;"></li><br>
		</ul>
	</form>
</body>
	
</body>
</html>