<?php
//verification of seller legal name
include 'pdodb.php';
session_start();

if(isset($_POST['submit']))
{
    
    $email=$_SESSION['email'];   
    $tel=$_POST['tel_ver'];
    $query="UPDATE diag_seller SET seller_mob = :tel WHERE seller_email=:email";
    $stmt=$conn->prepare($query);
    if($row=$stmt->execute(['tel'=>$tel,'email'=>$email]))
    {
        
        echo "your data has been successfuly submitted";
    }
    else
    {
        echo "your data has not been submitted";
    }

}

?>
<!--VERIFICATION_OF_MOBILE-->
<form action="" method="post" id="form">
		<ul>
        <li><h3>Verify Mobile Number</h3></li>
        <li><input type="tel" name="tel_ver" placeholder="Mobile number" required></li><br>
        <li style="font-size:small;color:#7f7f7f;">Note:otp will be send to this number for verification.</li>
        <li><input type="submit" name="submit" value="Send OTP" style="background-color:#cc324b;border:0;color:white;"></li><br>
		</ul>
	</form>
<body>
<html>