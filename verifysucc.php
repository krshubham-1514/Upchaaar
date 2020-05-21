<?php
function redirect()
{
    header("Location:signin.php");
}
if(!isset($_GET['email'])||!isset($_GET['token']))
{
    redirect();
}
else
{
    
    $conn=mysqli_connect("localhost","root","","user_details_orders");
    $email_ver=$_GET['email'];
    $token_ver=$_GET['token'];
    $query="SELECT user_id FROM coutomers WHERE email='$email_ver' AND token='$token_ver'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)!=0)
    {
        if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
        $user=$row['user_id'];
        $query_update="UPDATE coutomers SET active=1, token='' WHERE user_id='$user'"; 
        $result_ver=mysqli_query($conn,$query_update);
        if($result_ver)
        {
            echo 'your have verified your email address!';
            header("Location:signin.php");
        }
        }
       
       
    }
    else
    {
       redirect();
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

	
</body>
</html>
