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
<div class="slider-product-list-wraper-container" id="slider-product-list-wraper-container1">
<div class="slider-product-list-wraper">
<?php
 $query="SELECT * FROM products";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_assoc($result))
 {
?>
<div class="slider-product-list">
	<div class="slider--product-list-seperate">
		<div class="img-product">
		<img src="<?php echo $row['product_image'];?>" width="200" height="250">
        </div>
	    <div class="products-details">
		     <?php echo $row['product_title'];?>
		</div>
		<div class="mrp-price">
		     <span style="color:#575757;">MRP &nbsp &#8377<del><?php echo $row['product_mrp'];?></del>
		</div>
		
		   <div class="price">
		      <span>&#8377</span><?php echo $row['product_price'];?>&nbsp<span style="color:green;">(<?php echo $row['percent_dis']?>% discount)</span>
            </div>

    
    </div>
    <?php
 }
 ?>
    </div>
    </div>
    </div>