<?php
session_start();
include 'pdodb.php';
?>
<div class="diag_form">
<ul>

<h2>Diagonostic center details</h2>

<form action="" method="">
<h3>Technical and Infrastructral details of Diagonostic center</h3>
<li>
Name of diagonostic center<br>
<input type="text" name="diag_name" value="" >
</li>
<li>
Pincode<br>
<input type="text" name="p_add" value="">
</li>
<li>
City/Town<br>
<input type="text" name="c_add" value="">
</li>
<li>
District<br>
<input type="text" name="d_add" value="">
</li>
<li>
Landmark(optional)<br>
<input type="text" name="l_add" value="">
</li>
<li>
Telephone(optional)<br>
<input type="text" name="l_add" value="">
</li>
<li>
Mobile no.<br>
<input type="text" name="m_add" value="">
</li>
<li>
Complete Address<br>
<textarea name="cc_add" rows="4" cols="4">
</textarea>
</li>
<li>
Location of  diagonostic center:<br>
<input type="radio" name="yesorno" value="" class="radio">Uraban
<input type="radio" name="yesorno" value="" class="radio">Rural
</li>
<li>
Date of registration:<br>
<input type="date" name="date" value="" style="max-width:25%">
</li>
<li>
<input type="submit" name="submit" value="continue"style="max-width:25%;background-color:#cc324b;color:white;border:0;margin-top:15px;" required>
</li>
</ul>
</div>
