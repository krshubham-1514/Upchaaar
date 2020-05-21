<?php
include 'pdodb.php';
session_start();
if(isset($_POST['submit']))
{
    $email=$_SESSION['email'];
    $account=$_POST['account_no'];
    $ifsc=$_POST['ifsc'];
    $bank_name=$_POST['bank_name'];
    $branch_add=$_POST['add'];
    $gst=$_POST['gst_no'];
    $pan=$_POST['pan_no'];
    $drug_license=$_POST['drug_no'];
    $det=array($account,$ifsc,$bank_name,$branch_add,$gst,$pan,$drug_license,$email);
    $query="UPDATE medicine_seller SET account_no=?,ifsc=?,bank_name=?,
    branch_add=?,gst_no=?,pan_no=?,drug_license=?
    WHERE seller_email=?";
    $stmt=$conn->prepare($query);
    if($stmt->execute($det))
    {
        echo "your database has successfully submitted";
    }
    else
    {
        echo 'there is some error in database';
    }
}
?>

<div class="form_doc">
<ul>

<h2 style="color:#cc324b;">Seller document summission</h2>
<form action="" method="post">

<p>Document required to be verify seller.</p>
<ul style="list-style:circle;">
<li>Your bank details to get payment from <span style="color:grey;">2cureU</span>.</li>
<li>Tax(VAT/GST)details of your buissness if you sell in taxable products.</li>
<li>Drugs license details of your store.</li>
</ul>

<h3>Account details(All account details should be correct)</h3>
<li>
<label for="account">Account_no.</label><br>
<input type="text" name="account_no" value="" id="account" required>
</li>
<li>
<label for="ifsc">IFSC code</label><br>
<input type="text" name="ifsc" value="" id="ifsc" required>
</li>
<li>
<label for="bank_name">Bank name</label><br>
<select id="bank_name" name="bank_name" required>
<option selected disabled>Choose bank</option>
<option value="sbi">State Bank of India</option>
<option value="bob">Bank of Baroda</option>
<option value="hdfc">HDFC</option>
<option>Bank of India</option>
</select>
</li>
<li>
<label for="branch_add">Branch Address</label><br>
<textarea rows="5" col="2" id="branch_add" name="add" required>
</textarea>
</li>
<h3>Enter your Tax details(All details should be correct)</h3>
<li>
<label for="gst_det">Provisional GSTIN</label><br>
<input type="text" name="gst_no" value="" required>
</li>
<li>
<label for="gst_det">Pan number</label><br>
<input type="text" name="pan_no" value="" required>
</li>
<h3>Enter drug license details(All details should be correct)</h3>
<li>
<label for="gst_det">Drug license number</label><br>
<input type="text" name="drug_no" value="" required>
</li>
<li>
<input type="submit" name="submit" value="continue"style="max-width:25%;background-color:#cc324b;color:white;border:0;margin-top:15px;" required>
</li>
</ul>
</form>
</div>
