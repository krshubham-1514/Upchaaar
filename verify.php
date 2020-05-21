<?php

require 'phpmailer\PHPMailer.php';
require 'phpmailer\SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$conn=mysqli_connect("localhost","root","","user_details_orders");
if(isset($_POST['submit']))
{
 //create a query to verify the email address!
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $query="SELECT firstname,token,email FROM coutomers WHERE email='$email'";
 $result=mysqli_query($conn,$query);
 if(mysqli_num_rows($result)!=0)
 {
	 if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	 {
	$firstname=$row['firstname'];
	$token_ver=$row['token'];
	$email=$row['email'];                                            
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'krshubham.work@gmail.com';                 // SMTP username
    $mail->Password = 'sk15141852';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port =587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('krshubham.work@gmail.com', 'www.2cureU.com');
    $mail->addAddress($email, $firstname);     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Verify email address';
	$mail->Body    = "Thank for registring with www.2careU.com.<br>
	plese click on the link below to verify your reset your account password.<br><a href='http://localhost/emedical4.0/verifysucc.php?email=$email&token=$token_ver'>click here to verify your user account</a>";

	if($mail->send())
	{
		$_SESSION['email_ver']=$email;
		header("Location:emailver.php");
	}
  }
}
else{
	echo 'your email address is not registered!';
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
<body>
	<form action="" method="post" id="form">
		<ul>
		<li><h3>Verify</h3></li>
		<li><input type="email" name="email" placeholder="Enter your email" required></li><br>
		<li><input type="submit" name="submit" value="Continue" style="background-color:orange;border:0;color:white;"></li><br>
		<li><a href="">Enter another email?</a></li>
		</ul>
	</form>
</body>
</html>