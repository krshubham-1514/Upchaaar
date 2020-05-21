<?php
session_start();
?>

<!doctype html>
<html>
<head>
<title>
</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Rubik|Tajawal" rel="stylesheet">

<style>

body
    {
       background-color:#ededed;
    }
#mailsentver
{

    height:250px; 
    width:40%;
    font-size:18px;
    font-family:tajawal;
    margin:0 auto;
    margin-top:15%;
    background-color:white;
   
}
</style>
<body>
<div id="mailsentver" class="alert alert-success">
     <h2 style="color:#474747;">Check mail</h2>
     <span style="color:#474747;"><p>We have sent a account password reset link to <span style="color:green;"><?php echo $_SESSION['email_ver']?></span>.<br>
     <p>Please check your mail to reset your account password.</p></span>
    <div class="btn btn-info"><a href="signin.php" class="alert-link" style="font-family:tajawal;color:#ededed;">Go to signin page</a></div>
</div>
</body>
</html>
