<?php
session_start();
require 'phpmailer\PHPMailer.php';
require 'phpmailer\SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$conn=mysqli_connect("localhost","root","","user_details_orders");
if(isset($_POST['submit']))
{
    
  $token="WJLKDKJSFSMSMAUTSDEEW6546546%#@%54DFGhajhkfjhd%#akhfawhuei5@#946464hnknsfdkurewhorero";
  $token=str_shuffle($token);
  $token=substr($token,0,10);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $query1="UPDATE coutomers SET  token='$token' WHERE email='$email'";
  if(mysqli_query($conn,$query1))
  {
      
 //create a query to verify the email address!
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $query2="SELECT firstname,token,email FROM coutomers WHERE email='$email'";
 $result=mysqli_query($conn,$query2);
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
    $mail->setFrom('krshubham.work@gmail.com', '2cureU');
    $mail->addAddress($email, $firstname);     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Reset password';
	$mail->Body    = ".<br>
	Please click on the link below to reset your password.<br><a href='http://localhost/emedical6.0/changepass.php?email=$email&token=$token_ver'>click here to reset your password</a>";

	if($mail->send())
	{
    $_SESSION['email_ver']=$email;
    header("Location:resetmsg.php");
    }
 }
}
else{
  echo "<script>document.getElementById('alertbox').style.display='block';</script>";
}
  }
}

?>




<!doctype html>
   <head>
	   <title>
	   </title>
   </head>
   <style>
  #alertbox
   {
       
       width:30%;
       margin:0 auto;
       z-index:10000;
   }
   </style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="form.css">
   <link href="https:fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<body>
  <div class="alert alert-danger" id="alertbox">Please check your email.</div>
	<form action="" method="post" id="form">
		<ul>
		<li><h3>Reset password</h3></li>
		<li><input type="email" name="email" placeholder="Enter your email" required></li><br>
		<li><input type="submit" name="submit" value="Continue" style="background-color:orange;border:0;color:white;"></li><br>
		
		</ul>
	</form>
</body>
</html>