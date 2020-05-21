<?php
include 'pdodb.php';
session_start();
if(isset($_POST['submit']))
{
    //setting all form details for user
       $seller_name=$_POST['firstname'];
       $pass1=$_POST['pass'];
       $pass2=$_POST['pass2'];
       $email_seller=$_POST['email'];
       $str='HKJSHAFDD654613213sdsdsfW3#@$#$13Kkjhbrtwberwkejrnnbxmerthkerhtehr';
       $str=str_shuffle($str);
       $token=substr($str,0,10);
       $otp="123456789";
       $otp=str_shuffle($otp);
       $otp=substr($otp,0,6);
       
     if($pass1==$pass2)
    {
    //password matched
        $pass_hash=password_hash($pass1,PASSWORD_BCRYPT);
        $query='INSERT INTO medicine_seller (seller_name,seller_pass,seller_email,token_seller,otp,active)
         VALUES (:seller_name,:pass_hash,:email,:token,:otp,:active)';
         $stmt=$conn->prepare($query);
         if($stmt->execute(['seller_name'=>$seller_name,'pass_hash'=>$pass_hash,'email'=>$email_seller,'token'=>$token,'otp'=>$otp,'active'=>0]))
         {
             $_SESSION['email']=$email_seller;
             header("Location:seller_legal_name.php");
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


<!--=====================Medicine_seller_account_reg_form===========================-->
<form  action="" method="post" id="form">
	<ul>
	<li><h3>Create Seller Account</h3></li>
	<li><input type="text" name="firstname" value="" minlenght=5 placeholder="Your name" id="username" required ><br></li>
	<li><input type="password" name="pass" value="" placeholder="Password" id="password" required ><br></li>
	
	<li><input type="password" name="pass2" value="" placeholder=" Re-enter Password" id="password" required ><br></li>
    <li><input type="email" name="email" value="" placeholder="Email" id="email" required ><br></li>
	<li><input type="submit" name="submit" value="Continue" onclick="return check()" style="background-color:#cc324b;border:0;color:white;" id="btn"><br></li>
	 <li><p>Already have a account?</p><a href="">Sign in</a></li>
	</ul>
</form>