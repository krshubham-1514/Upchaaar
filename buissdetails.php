<?php
include 'pdodb.php';
session_start();
if(isset($_POST['submit']))
{
//taking all variable from the form exexpt email which is from session.
$email=$_SESSION['email'];
$store_name=$_POST['store'];
$store_pin=$_POST['addressp'];
$store_comp_add=$_POST['addressc'];
$store_type=$_POST['type'];
$city=$_POST['addcity'];
$addstate=$_POST['addstate'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];


//array of all the inputs to put into the execute function


$array=array($store_name,$store_pin,$store_comp_add,$store_type,$city,$addstate,$tel1,$tel2,$email);

//query

$query_store="UPDATE medicine_seller SET store_name=?,store_pin=?,
store_add=?,store_type=?,
city=?,state_store=?,
telephone1=?,telephone2=?
 WHERE seller_email=?";


//prepare the query
$stmt=$conn->prepare($query_store);

//exexute the prepares statmemt
if($stmt->execute($array))
{
    header("Location:seller_doc.php");
}
else
{
    echo 'your database has not been updated';
}

}





?>
<!--DETAILS OF THE STORE RETILER-->
<div class="details_bus">
<ul>
    <h2 style="color:#cc324b;">Seller buissness details</h2>
<form action="" method="post">

<li><input type="text" name="store" value="" placeholder="Store name" required></li>
<li><input type="text" name="addressp" value="" maxlen="6" placeholder="Pincode" required style="max-width:40%;"></li>
<li><textarea rows="4" cols="18" name="addressc" placeholder="Complete Address" required>
</textarea></li>
<li>
<select required name="type">
<option selected disabled>Type of store</option>
<option value="wholesaler">Wholesaler</option>
<option  value="retailer">Retailer</option>
</select>
</li>
<li><input type="text" name="addcity" value="" placeholder="City/Town" required></li>
<li><input type="text" name="addstate" value="" placeholder="State" required></li>


<li>
<input type="tel" name="tel1" value="" placeholder="Store mobile Number" required>
</li>
<li>
<input type="tel" name="tel2" value="" placeholder="Alternate mobile number(optional)">
</li>


<li>
<input type="submit" name="submit" value="continue" style="max-width:25%;background-color:#cc324b;color:white;border:0;margin-top:15px;" ">
</li>
</ul>
</div>