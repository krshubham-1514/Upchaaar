<?php
include 'header.php';
session_start();
$_SESSION['product_code']=mysqli_real_escape_string($conn,$_GET['product_id']);
$product_id=$_SESSION['product_code'];
$cart_query="SELECT * FROM products WHERE product_id='$product_id'";
$result_cart=mysqli_query($conn,$cart_query);
$row_cart=mysqli_fetch_array($result_cart,MYSQLI_ASSOC);
?>
<div class="cart_page_single_item_container">
    <div  class="product_image_details_section">
	       <div class="product_image">
			   
		   	
				  <img src="<?php echo $row_cart['product_image']?>" height="500" width="550" class="productimg fade_cart">
				  <img src="<?php echo $row_cart['product_image']?>" height="500" width="550" class="productimg fade_cart">
				  <img src="<?php echo $row_cart['product_image']?>" height="500" width="550" class="productimg fade_cart">
				  <img src="<?php echo $row_cart['product_image']?>" height="500" width="550" class="productimg fade_cart">
				  <a  id="prev_product_list_btn_cart" onclick="plusSlides(-1)"><input type="submit" name="" value="&#10094;"></a>
		          <a  id="next_product_list_btn_cart" onclick="plusSlides(1)"><input type="submit" name="" value="&#10095;"></a>
                 <div id ="dots-container_cart" style="text-align:center">
                 <span class="dots_cart" onclick="currentSlide(1)"></span> 

                 <span class="dots_cart" onclick="currentSlide(2)"></span> 

                <span class="dots_cart" onclick="currentSlide(3)"></span> 

                 <span class="dots_cart" onclick="currentSlide(4)"></span> 
                  
                </div>
</div>
          
            <div class="add_cart_details">
				<div>
					<p><?php echo $row_cart['product_title']?></P>
			   </div>
			   <div>
			   &#8377<del><?php echo $row_cart['product_mrp']?></del>
			    <p><?php echo $row_cart['product_price']?><span style="color:green;">(<?php echo $row_cart['percent_dis']?>% discount)</span></P>
				   <p style="font-size:15px;color:#7f7f7f;">*Inclusive of all taxes</p>
               </div>
				<div class="click_cart_btn">
	           <input type="submit" name="addwish" value="Add to wishlist" class="cart_button">
			   <input type="submit" name="addcart" value="Add to cart" class="cart_button">
			</div>
			<div class="delivery">
				 <input type="text" name="pincode" value="" placeholder="pincode" class="pincode_user">
				 <button id="pin_btn">check</button>
            </div>
			 </div>
			 
    </div>
    <div class="review_product">
             <div class="product_info">
				 <h2>Product details</h2>
				 <div>
					 <h3>key features</h3>
					 <p>
				 Key Features
                  Delicious chocolate flavoured nutritional supplement
                Fortified with great amount essential vitamins and minerals
                   Boosts immunity and builds stamina
				 Supports healthy growth and development
                </p>
				</div>
				<hr class="product_footer">
				<div>
					 <h3>Ingredients</h3>
					 <p>
					 Ingredients
Malt extract (42%), Sugar, Milk solids (8%), cocoa powder, wheat flour (2.5%), minerals, protein isolate, emulsifier, liquid glucose, natural color, nature identical flavouring substances, acidity regulators, vitamins, salt
                </p>
				</div>
				<hr class="product_footer">
				<div>
					 <h3>Unit</h3>
					 <p>
					 Unit
                   500 gm
                </p>
				</div>
				<hr class="product_footer">
				<div>
					 <h3>Description</h3>
					 <p>
					 Description
Health Drink that has nutrients to support immunity. Horlicks is Clinically proven to improve 5 signs of growth. Clinically proven to make kids Taller, Stronger & Sharper. Scientifically proven to improve Power of Milk.
                </p>
				</div>

				<hr class="product_footer">
				<div>
					 <h3>Disclaimer</h3>
					 <p>
					 Disclaimer
Every effort is made to maintain accuracy of all information. However, actual product packaging and materials may contain more and/or different information. It is recommended not to solely rely on the information presented
                </p>
			    </div>
			 
	</div>
	<div class="user_product_reviews">
				 <h2>User reviews</h2>
             </div>
</div>

<!--=======================slider_Cart_Show========================================-->
<script>
var slideIndex = 1;
showSlide(slideIndex);

function plusSlides(n){

showSlide(slideIndex += n);

}

function currentSlide(n) {

showSlide(slideIndex = n);

}

function showSlide(n){
	

var i;

var slides = document.getElementsByClassName("productimg");

var dots = document.getElementsByClassName("dots_cart");

if (n > slides.length) { slideIndex = 1};

if (n < 1) { slideIndex = slides.length};

for (i=0;i<slides.length;i++) {

slides[i].style.display = "none";

};

for (i=0;i<dots.length;i++) {

dots[i].className = dots[i].className.replace(" active","");

};

slides[slideIndex-1].style.display = "block";

dots[slideIndex-1].className += " active";

}
</script>
<!--================================================================================-->
<?php 
include 'footer.php'
?>
<?php
include 'footerbottom.php'
?>
