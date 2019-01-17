<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
//header("Location: http://localhost/Web_Template/cart.php");
include './Crud_Model_Cart.php';
include './Crud_Shopping_Cart.php';
$cc=new crudMCart();
$csc=new crudCart();
session_start();
echo $_SESSION['E'];
var_dump($_SESSION['I']);
        //echo 'Displplaying Cart + Client infos';
        $Cart=$csc->DisplayCart($csc->con,$_SESSION['I']);
        
        var_dump($Cart);
        //echo 'Displaying Model_Cart';
        foreach ($Cart as $Ca){
           // var_dump($Ca->ID_Cart);
        $list=$cc->DisplayMCart($cc->conn,$Ca->ID_Cart);
	//var_dump($list);
        }
	?> 
<!DOCTYPE HTML>

<html>
    
<head>
    
<title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Cart :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body>
    
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="login.html">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email: <a href="mailto@example.com">info(at)Mobilya.com</a></li>|
					<li class="top_link"><a href="login.html">My Account</a></li>|					
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div><?php
foreach($Cart as $Cart){
    ?>

<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.html"><img src="images/logo3.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="login">
				 <a href="login.html">LOGIN</a>
			 </div>
			 <div class="cart box_1">
				<a href="cart.html">
<h3> <span class="Cart_total"><?php echo $Cart->Total_Price; echo ' DT' ?> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
 <?php } ?>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.html">Home</a></li>
			 <li class="grid"><a class="color2" href="#">furniture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Metal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">living</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">kitchen & dinning</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">appliances</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">decor</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			   </ul> 
			   <div class="search">
				 <form>
					<input type="text" value="" placeholder="Search...">
					<input type="submit" value="">
					</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="cart_main">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="men.html">Home</a></li>
		  <li class="active">Cart </li>
		 </ol>			
		 <div class="cart-items">
			 <h2>My Shopping Bag (2)</h2>
                          <?php 
                                   foreach ($list as $l ){
                                    
                           ?>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
                          
			 <div class="cart-header">
				 <div class="close1">     
<form action='Model_Cart_Delete.php?Ref_Model="<?php echo $l->Ref_Model; ?>"' method="post">
        <input type="text" name="Ref_Model" value="<?php echo $l->Ref_Model;  ?>" hidden/>
        <input type="submit" name="submit" class="close2">
    </form>
                                 
    
                                 </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
                                                    <table border="1">
                                                        <tr><td><img src="<?php echo $l->photo?>" style="width:150px;height:100px;" class="img-responsive" alt=""/></td></tr>
					</table>  
                                                  </div>  
                                     <div class="cart-item-info">
                                         <h3><?php echo $l->Name; ?> <span> Model No: <?php echo $l->Ref_Model; ?></span></h3>
							 <h4><span>Rs: <?php echo $l->Price; ?> DT </span></h4>
							 <p class="qty">Quantity :</p>
                                                         <form action='Model_Cart_Mod.php' method="POST">
                                                        <input type="text" name="Ref_Model" value="<?php echo $l->Ref_Model;  ?>" hidden/>
       
                                                         <input min="1" type="number" id="quantity" name="quantity" placeholder="<?php echo $l->Qty; ?>" class="form-control input-small">
                                                         <br>
                                                         <span>   <input type="submit" name="submit" class="item_add items" value="Save"></span></form>
                                                         </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges Will Be Calculated Later on </p>							
				        </div>						
				  </div>
			 </div>
                           <?php }
                                   
                           $SUM=$cc->CalculateSUM($Cart->ID_Cart,$cc->conn);
                           //var_dump($SUM);
                           foreach ($SUM as $SUMM){
                           //echo $SUMM->Total;
                           //var_dump($Cart->ID_Cart);
                           $T=  floatval($SUMM->Total);
                           //echo $T;
                           $Mod_Cart=$csc->EditCart($T, $Cart->ID_Cart, $csc->con);
                           //var_dump($Mod_Cart);
                           }
                           ?>
			 	
		 </div>
		 <?php 
                           foreach ($SUM as $SUMMM)
                           { ?>
		 <div class="cart-total">
			 <a class="continue" href="Cart.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
                                 <span class="total_Price"><?php echo $SUMMM->Total ; ?></span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">100.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
                           <span class="total_F"><?php echo $SUMMM->Total ; }?></span>
                           <div class="clearfix"></div><br>
                         <form action='expresscheckout.php' method="post">
                             <h5>Home Delivery:</h5>
                             Yes<input type="radio" name="Delivery" value="Yes"> No<input type="radio" name="Delivery" value="No"> <input type="text" name="Destination" placeholder="Destination" value="<?php echo $Cart->City ?>"> 
                                    <h6>_______________________________</h6>
                                                         <input type="text" name="ID_Client" value="<?php echo $Cart->ID_Client;  ?>" Hidden />
                                                         <input type="text" name="ID_Cart" value="<?php echo $Cart->ID_Cart;  ?>" Hidden />
                                                         <input  hidden="true" type="text" name="Total_Price" value="<?php echo $Cart->Total_Price;  ?>" />
                                                          
                                                         Visa<input type="radio"  name="Payment" value="Visa"><br>
                             Paypal<input type="radio"  name="Payment" value="Paypal">                            
                             <span> <input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/></span></form>
                             <!--<a class="order" href="#">Place Order</a>-->
                         </form>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
<!---->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Carrers</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Furinture</a></li>
					 <li><a href="#">> Bean Bags</a></li>
					 <li><a href="#">> Decor</a></li>
					 <li><a href="#">> Kichen & Dinning</a></li>
					 <li><a href="#">> Bed & Bath</a></li>
					 <li><a href="#">...More</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="store">
			<ul>
				 <li class="active">OUR STORE LOCATOR::</li>
				 <li><a href="#">Noida</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Belgium</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">China</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Germany</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Japan</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Armenia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">South Africa</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Malaysia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Indonesia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Mumbai</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Portugal</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Spain</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Northern Ireland</a></li>	
				 <li><a href="#">|</a></li>				 
				 <li><a href="#">Mohali</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Gurgaon</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Panchkula</a></li>
				 <li><a href="#">|</a></li>				 
				 <li><a href="#">Ambala</a></li>	
			 </ul>
		 </div>		 
		 <div class="copywrite">
			 <p>Copyright © 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>			 
		 </div>
	 </div>
</div>
<!---->
</body>
</html>
