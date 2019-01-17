<!DOCTYPE HTML>
<html>
<head>
<title>L'Usina::Home</title>
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
<?php

include '../222/php/crudPromotion.php';
$cc=new crudPromotion();
include '../222/php/crudoffre.php';
$off=new crudOffres();
$resultat=$cc->getPromotions();
$resultat_offres=$off->getOffres();
$res=$cc->RecherchePourcentage();
@$detail_offre=$off->getDetailOffre();
$news=$cc->newsletter();
$te=count($news);
if($te==0){include 'popup.php';}
?>
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="login.php">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto@example.com">info@atebtunisie.com</a></li>|
                                        
                                        <?php session_start (); 
                                        //echo $_SESSION['C'];?>                        
	        <li class="dropdown"> <div class="dropdown">
               <!-- <button class="dropbtn"> <?php echo $_SESSION['E'];?> </button>-->
                       <div class="dropdown-content">
                           <a href="MyAccountSettings.php">My Account Settings</a>
                           <a href="MyAccountPasswordSettings.php">Password Settings</a>
                         <a href="#">Link 3</a>
                       </div>
             </div>			 
</li>
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
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
                     <a href="indexLoggedIn.php"><img src="images/logo3.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="login">
                             <?php if (isset($_SESSION['E'])) ?>
				 <?php{?> 
                             <a href="index.php">LOGOUT</a> 
                            <?php //session_destroy();?>                                     
                                 <?php}?>
			 </div>
			 <div class="cart box_1">
				<a href="cart.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.html">Home</a></li>
			 <li class="grid"><a class="color2" href="#">Furniture</a>
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
			<li><a class="color4" href="#">Accessories</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Lamps</h4>
								<ul>
									<li><a href="products.html">All Lamps</a></li>
									<li><a href="products.html">Simple Lamps</a></li>
									<li><a href="products.html">Industrial Lamps</a></li>
				                </ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Mirrors</h4>
								<ul>
									<li><a href="products.html">Single Mirrors</a></li>
									<li><a href="products.html">Double Mirrors</a></li>
								
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
               					<li><a class="color6" href="?offres">Offres</a></li>
			
				<li><a class="color5" href="index.html">About Us</a>
				
									
<li><a class="color6" href="prom.php">Promotions</a>
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
<div class="product-model">	 
	 <div class="container">
			<ol>
			<?php 
		  if(isset($_GET['offres']))
		  {?>
		  <a href="index.php"></a>
		  
		  <?php } 
		   else if(isset($_GET['promotion']))
		  {?>
	  <ol class="breadcrumb"
		  <li><a href="index.php">Home</a></li>
		   <li class="active">Promotions</li>

		  <?php } ?>
		 </ol>
		 
		 <?php 
		 
		  if(isset($_GET['offres']))
						  {include '../frontend/offres.php';}
				
		 else if(isset($_GET['detail']))
						  {include '../frontend/detail_offre.php';}
		else 
		 if(!isset($_GET['offres']))
		 {?>
			<h2>OUR PRODUCTS</h2>			
		 <div class="col-md-9 product-model-sec">
					 <a href="single.html"><div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<!--debut de bloc-->
						  
						  
						<?php 
						if(isset($_GET['promotion']))
						{
						
						foreach($resultat as $cle)
						{
						//echo $cle['photo_blob'].'<br>';
							?>
							
						   <div class="product-img b-link-stripe b-animate-go  thickbox">
						   <img src="images/<?php echo $cle['photo']?>" class="img-responsive" alt=""/>
						
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
                                                            <form Action="AddToCart.php" method="POST">
								<h4></h4>
								<p><!--ID: 2000--></p>
                                                                <input type="text" value="2000" name="Ref" hidden="true"/>
								<span class="item_price">$187.95 </span>	<font color=red><?php echo $cle['percentage']?>%</font>							
                                                                <input type="text" class="item_quantity" value="1" name="Qty" />
                                                                <input type="submit" class="item_add items" value="ADD">
							</form>
                                                                </div>													
							<div class="clearfix"> </div>
						</div>
						
						<?php }

                          }
						 
						 ?>
						
						<!--Fin bloc-->
					</div>	
					<?php
					 /***Pour resultat recherche pourcentage**/
						 if(isset($_POST['ok']))
						{
							$row=count($res);
							if($row==0){
								
								?>
								<a href="offres.php"> </br></br>
								<?php
								echo '<h1>Product does not exist</h1>';
								
							}
							else{
							
							foreach($res as $values) 
												{
												?>
												<img src="images/<?php echo $values['photo']?>" width=250 height=180 class="img-responsive" alt=""/>
												<?php
												}
												
							
							}
						}
				 /***Fin resultat recherche pourcentage**/
					
					?>
					
					
					
					</div>
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Furniture</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Love Seats</p></a>
									<a href="#"><p>Dinning Sets</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Decor</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Shelves</p></a>
									<a href="#"><p>Wall Racks</p></a>
									<a href="#"><p>Curios</p></a>
									<a href="#"><p>Ash Trays</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Lighting</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Table Lamps</p></a>
									<a href="#"><p>Tube Lights</p></a>
									<a href="#"><p>Study Lamps</p></a>
									<a href="#"><p>Usb Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Bed & Bath</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Towels</p></a>
									<a href="#"><p>Bath Roles</p></a>
									<a href="#"><p>Mirrors</p></a>
									<a href="#"><p>Soap Stands</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">Fabric</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Beds</p></a>
									<a href="#"><p>Relax Chairs</p></a>
						     </div>
					      </div>
						  
						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				  <section  class="sky-form">
				 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Promotions</h4>
						 <div >
							 <ul class="place">								
								 <li class="sort"><a href="?promotion">Promotion</a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
						</div>
					</div>
					 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
						 <form method="post">
								<label class="checkbox"><input type="radio" name="checkbox" id="recherchePourcentage" value="0"/><i></i>5% - 10% </label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkbox" id="recherchePourcentage" value="1"/><i></i>10% - 30%</label>
								<label class="checkbox"><input type="radio" name="checkbox" id="recherchePourcentage" value="2"/><i></i>30% - 45%</label>
								<label class="checkbox"><input type="radio" name="checkbox" id="recherchePourcentage" value="3"/><i></i>45% - 80%</label>
							 <input type="submit" name="ok"  value="Recherche"  style="width:80px; float:right; font-size:12px"/>	
						 </div>
						
						 </form>
					 </div>
				 </section> 				 				 
				   <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
							<ul class="dropdown-menu1">
								 <li><a href="">								               
								<div id="slider-range"></div>							
								<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
							 </a></li>			
						  </ul>
				   </section>
				   <!---->
					 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 8500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]> 
					</script>
					 <!---->
					 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dinner Sets   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3+1+1 Sofa Sets (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sofa Chairs     (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 Seater Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Display Units   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L-shaped Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 Seater Sofas  (30)</label>
								</div>
							</div>
				   </section>
				   		<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>			
			 </div>				 
	      </div>
		</div>
</div>	
		 <?php } ?>
<!---->

<!---->
<!---->



<!---->
<br>
<br>
<br>
<br>
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
				 <li><a href="#">Tunisia</a></li>
				 <li><a href="#">|</a></li>
			 </ul>
		 </div>		 
		 <div class="copywrite">
			 <p>Copyright © 2016 L'Usina All rights reserved | Design by Hypernova</p>
		 </div>			 
		 </div>
	 </div>

<!---->
</body>
</html>