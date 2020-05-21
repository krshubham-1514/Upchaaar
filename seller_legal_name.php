<?php
//verification of seller legal name
include 'pdodb.php';
session_start();

if(isset($_POST['submit']))
{
    
    $email=$_SESSION['email'];   
    $legal_name=$_POST['legal'];
   
    $query="UPDATE medicine_seller SET legal_name = :legal WHERE seller_email=:email";
    $stmt=$conn->prepare($query);
    if($row=$stmt->execute(['legal'=>$legal_name,'email'=>$email]))
    {
        
        header("Location:phone_verify.php");
    }
    else
    {
        echo "your data has not been submitted";
    }

}

?>
<div class="form_legal_name">
    <div class="form_legal_inner">
    <h2 style="color:#cc324b;">Register And Start Selling</h2>
    <p>Please have the following ready before you begin</p>
    <ul>
        <li>Your bank details to get payment from <span style="color:grey;">2cureU</span></li>
        <li>Tax(VAT/GST)details of your buissness if you sell in taxable products</li>
    </ul>
   
   <h3>Enter details below to continue registration(please ensure details are correct).</h3>
   <form action="" method="post" id="form_legal">
    <ul>
        <li>  
   <label for="legal_name"><h4>Legal name</h4></label></li>
   <li>
   <input type="text" name="legal" value="" id="legal_name" style="border-radius:2px;border:1px solid grey;width:220px;height:35px;" required></li>
   
   <li>
       <h4>Seller Agreement</h4></li>
    <li>
        <input type="checkbox" name="agree" value="1" required>I have read all the documents and agree to bound
        to all <a href="">seller terms and condition</a>.
       </li>
       <li>
   <input type="submit" name="submit" value="continue" class="legal_btn">
   </li>
</form>
</div>
</div>




