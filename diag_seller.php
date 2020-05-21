<?php
include 'pdodb.php';
session_start();
if(isset($_POST['submit']))
{
    //setting all form details for user
       $diag_name=$_POST['firstname'];
       $pass1=$_POST['pass'];
       $pass2=$_POST['pass2'];
       $email_seller=$_POST['email'];
       $str='HKJSHAFDD654613213sdsdsfW3#@$sdfsdHKJLerwkejrnnbxmerthkerhtehr';
       $str=str_shuffle($str);
       $token=substr($str,0,10);
     
       
     if($pass1==$pass2)
    {
    //password matched
        $pass_hash=password_hash($pass1,PASSWORD_BCRYPT);
        $query='INSERT INTO diag_seller(seller_name,seller_pass,seller_email,token,active)
         VALUES (:seller_name,:pass_hash,:email,:token,:active)';
         $stmt=$conn->prepare($query);
         if($stmt->execute(['seller_name'=>$diag_name,'pass_hash'=>$pass_hash,'email'=>$email_seller,'token'=>$token,'active'=>0]))
         {
             $_SESSION['email']=$email_seller;
             header("Location:diag_phone_ver.php");
         }
         else{
             echo "there is some error in database";
         }



    }
    else
    {
        echo "please enter matching password";
    }
}

?>


<!--=====================Diagonostic_seller_account_reg_form===========================-->
<form  action="" method="post" id="form">
	<ul>
	<li><h3>create account</h3></li>
	<li><input type="text" name="firstname" value="" minlenght=5 placeholder="your name" id="username" required ><br></li>
	<li><input type="password" name="pass" value="" placeholder="Password" id="password" required ><br></li>
	
	<li><input type="password" name="pass2" value="" placeholder=" Re-enter Password" id="password" required ><br></li>
    <li><input type="email" name="email" value="" placeholder="Email" id="email" required ><br></li>
	<li><input type="submit" name="submit" value="Continue" onclick="return check()" style="background-color:#cc324b;border:0;color:white;" id="btn"><br></li>
	 <li><p>Already have a account?</p><a href="">Sign in</a></li>
	</ul>
</form>