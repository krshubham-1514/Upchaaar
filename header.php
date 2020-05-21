<?php
 define("HOSTNAME","localhost");
 define("USER","root");
 define("PASSWORD","");
 define("DATABASE","user_details_orders");
 $conn=mysqli_connect(HOSTNAME,USER,PASSWORD,DATABASE);
?>




<!doctype html>
<head>
<title>
</title>
<link rel="stylesheet" href="headstyle.css" type="text/css">
<link rel="stylesheet" href="form.css" type="text/css">

<link rel="stylesheet" href="chat.css" type="text/css">
<link rel="stylesheet" href="cart.css" type="text/css">
<link rel="stylesheet" href="index.css" type="text/css">
<link rel="stylesheet" href="jqueryui/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="jqueryui/jquery-ui.structure.css" type="text/css">
<link rel="stylesheet" href="jqueryui/jquery-ui.theme.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Rubik|Tajawal" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet"> 
<script src="jquery-3.3.1.js"></script>
<script src="jquery.js"></script>
<script src="jqueryui/jquery-ui.js"></script>
<script script="special_effect.js" type="text/javascript"></script>

</head>
<body>
<div id="headertop">
<div id="search-bar-hidden">
	<input type="text" name="search" value="" placeholder="search from thousand of medicines" id="input-search-box-hidden">
	<input type="submit" name="submit_search" value="search" id="hidden-search">
   

</div>

	
	<div id="header-logo-png">
		<div id="logo-call" style="display:inline;">
		<img src="call.png" width="37" height="37">
		</div>
		<div id="cart-logo" style="display:inline;">
		<img src="cart.png" width="37" height="37">
			
    </div>
	</div>
	</div>
</div>

	<div id="search-medicines-bar">
	     <div id="search-medicine-container">
		 <div id="tagline1"><p>We care till cure.</p></div>
         <input type="text" name="search" value="" placeholder="search from thousand of medicines" id="input-search-box">
	     <input type="submit" name="submit" value="search" id="input-search-button" onclick="function check()">
		 
		
		</div>
		 

	
</div>

<script>
	function show()
	{
		document.getElementById("category_hidden_open_hover").style.display="block";
		
	}
	function hide()
	{
		document.getElementById("category_hidden_open_hover").style.display="none";
	}
</script>

