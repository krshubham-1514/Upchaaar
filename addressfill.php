<?php
include "header.php"
?>
<div class="cart_container">
<div class="address_form">
<fieldset style="border:1px solid grey;">
<legend style="margin-left:10%;">ADD NEW ADDRESS</legend>
<form action="" method="">
<table>
<tr>
    <td colspan="2">
<input type="Pincode" name="pin_code" value="" placeholder="Pincode" required class="pin_mob"></td>
</tr>
<tr>
    <td colspan="2">
<input type="text" name="town" value="" placeholder="Town/Locality" required></td>
</tr>
<tr>
    <td>
<input type="text" name="city" value="" placeholder="City/District" required class="city_s">
</td>
<td>
<input type="text" name="state" value="" placeholder="State" required class="city_s"></td>
<tr>
<tr>
    <td colspan="2">
<input type="text" name="name" value="" placeholder="Name" required>
</td>
</tr>
<tr>
    <td colspan="2">
<textarea rows="5"  cols="20" placeholder="Address">
</textarea></td>
<tr>
    <td colspan="2">
<input type="tel" name="mobile" value="" placeholder="Mobile No" required class="pin_mob"></td>
</tr>
<tr>
    <td>
<h4>Type of address</h4>
</td>
</tr>
<tr>
<td>
Home:
<input type="radio" name="yes or no" value="" id="radio_add">
</td>
<td>
<span>Office/Commercial:</span>
<input type="radio" name="yes or no" value="" id="radio_add">
</td>
</tr>
<tr>
    <td>
        <input type="submit" name="submit_add" value="Save" class="save_btn">
</td>
</tr>
</table>
</form>
</fielset>
</div>
<div class="total_amount_details" style="max-height:350px;margin-top:10px;border:1px solid #e0e0e0;">
   <table>
   <tr>
   <td colspan="2"><h4>ORDER SUMMARY</h4></td>
   </tr>
   <tr>
   <td>Total price</td>
   <td>1500</td>
   </tr>
   <tr>
   <td>Discount</td>
   <td>15663</td>
   </tr>
   <tr>
   <td>Sub Total</td>
   <td>5363</td>
   </tr>
   <tr>
   <td>Estimated GST</td>
   <td>654</td>
   </tr>
   <tr>
   <td>Shipping Charges</td>
   <td>5266</td>
   </tr>
   <tr>
   <td>Total Payable</td>
   <td>654654</td>
   </tr>
   
</div>
</div>

