<?php
include 'header.php';
session_start();
$name=$_SESSION['name'];

?>
<div id="containe-message-conformation">
       <p>Your patients details has been submitted succesfully.<span style="color:green; height:55px;">&#10004</span></p>
    <div id="message-time">
	<h2><span style="color:orange">Message</span></h2>
	Dear <?php echo $name ?> <p>Your data will be used to confirm the avalibility of required blood of matching group.you will get 
	conformation call and mail within <span style="color:green">30mins.</span></p>
	<a href="evs.pdf">Read terms of service</a>
	</div>
</div>