
<?php
include 'header.php';
session_start();
if(isset($_POST['submit']))
{
$name=mysqli_real_escape_string($conn,$_POST['name']);
$date=mysqli_real_escape_string($conn,$_POST['dob']);
$father=mysqli_real_escape_string($conn,$_POST['father']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
$blood=mysqli_real_escape_string($conn,$_POST['blood_group']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
echo $blood;
$query="INSERT INTO blood_bank(pat_name,dob_pat,father_name,email_pat,pat_pincode,blood_group,mobile_no,gender)
VALUES ('$name','$date','$father','$email','$pincode','$blood','$number','$gender')";
if(mysqli_query($conn,$query))
{
    header("Location:blood-bank-submit.php");
    $_SESSION['name']=$name;
}
else
{
	echo 'we have some problem in our database';
}
}
?>

<div id="form-inner-container">
<form method="post" action="" id="form_blood">
	<p id="message" style="color:red; font-wieght:bold;"></p>
	<ul>
	<li><h3>Enter patient Details(All details should be correct)</h3></li>
	<li><input type="text" name="name" placeholder="Your name" required id="user_name"></li>
    <li><input type="date" name="dob" placeholder="Date of Birth" required id="user_dob"></li>
	<li><input type="text" name="father" placeholder="Father name" required id="user_father"></li>
    <li><input type="email" name="email" placeholder="E-mail" required id="user_email"></li>
    <li><input type="text" name="pincode" placeholder="Pincode" required id="user_area_pincode"></li>
    <li><select name="blood_group">
        <option selected disabled>Blood Group</option>
        <option value="1">O positive</option>
        <option  value="2">O negative</option>
        <option  value="2">A positive</option>
        <option  value="3">A negative</option>
        <option  value="4">B positive</option>
        <option  value="5">B negative</option>
        <option value="6">AB negative</option>
        <option value="7">AB positive</option>
</select>
</li>
	<li><input type="tel" name="number" placeholder="Mobile Number" required id="user_mobile_number"></li>
    <li><select name="gender">
        <option selected disabled>Gender</option>
		<option value="1">Male</option>
		<option  value="2">Female</option>
	</select></li>
	 <li><input type="submit" name="submit" value="submit" id="btn" style="background-color:#009acd;border:0;color:white;cursor:pointer;" onclick="return check_form_validate()" ></li>
	 </ul>
</form>
</div>
<?php
 include 'footer.php' ?>
 <?php
 include 'footerbottom.php'?>
