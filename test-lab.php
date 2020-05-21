<?php
include 'header.php';

if(isset($_POST['submit']))
  {
$name=mysqli_real_escape_string($conn,$_POST['name']);
$date=mysqli_real_escape_string($conn,$_POST['dob']);
$father=mysqli_real_escape_string($conn,$_POST['father']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
}


?>
<form method="post" action="" id="form_blood">
	
	<ul>
	<li><h3>Enter Details for Test(All details should be correct)</h3></li>
	<li><input type="text" name="name" placeholder="Your name" required></li>
	<li><input type="date" name="dob" placeholder="Date of Birth" required></li>
	<li><input type="text" name="father" placeholder="Father name" required></li>
	<li><input type="email" name="email" placeholder="E-mail" required></li>
	<li><input type="text" name="pincode" placeholder="Pincode" required></li>
	<li><input type="file" name="report" placeholder="Upload Blood test report" required></li>
	<li><input type="tel" name="number" placeholder="Mobile Number" required></li>
    <li><select name="gender" value="genders">
		<option>Male</option>
		<option>Female</option>
	</select></li>
	 <li><a href="blood-bank-submit.php"><input type="submit" name="submit" value="submit"></a></li>
	 </ul>
</form>