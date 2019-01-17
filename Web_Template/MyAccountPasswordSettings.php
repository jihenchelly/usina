<!DOCTYPE HTML>
<html>
<head>
<title>L'Usina:: My Account</title>
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
  
</head>
<body>
<!-- header -->
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
					<li class="top_link">Email:<a href="mailto@example.com"> info@atebtunisie.com</a></li>|
					 <?php session_start ();  ?>                        
	        <li class="dropdown"> <div class="dropdown">
                <button class="dropbtn"><?php echo $_SESSION['E'];  ?> </button>
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
                             <?php 
                             if (isset($_SESSION['E'])) ?>
				 <?php{?> 
                             <a href="index.php" onclick="javascript:Logout();" >LOGOUT </a> 
                            <?php //session_destroy();?>                                     
                                 <?php}?>
			 </div>
<script type="text/javascript">
    function Logout () {
        <?php> session_destroy(); ?>
    }
</script>
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
				<li><a class="color5" href="index.html">About Us</a>
				
				<li><a class="color6" href="#">Our Achievements</a>
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
<div class="container">

		
<ol class="breadcrumb">
		  <li><a href="index.html">My Account</a></li>
		  <li class="active">Products</li>
		 </ol>
		 <h2>MY USINA</h2>	
<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Menus</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">My Commands</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>All Commands</p></a>
									<a href="#"><p>My Points</p></a>
									<a href="#"><p>Delivery Address</p></a>
									
							 </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">My Deliveries</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="MyDeliverySettings.php"><p>All Deliveries</p></a>
									
									
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Claims</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>1st Menu</p></a>
									<a href="#"><p>2nd Menu</p></a>
									
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Account Settings</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="My Account Settings.html"><p>Edit Settings</p></a>
									<a href="My Account Password Settings.html"><p>Edit Password</p></a>
									<a href="#"><p>Edit Delivery Address</p></a>
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
					 
				   			
			 </div>
                                     <script language="Javascript" type="text/javascript">
$(document).ready(function() {
  $("#test2").keyup(match);
});


function match() {
  var test1 = $("#test1").val();
  var test2 = $("#test2").val();

    
 
    if(test1 == test2) {
       $("#verif").text("Password Match");        
    }
    else {
        $("#verif").text("Password Mismatch");  
    }
    
}

</script>
<?php include ("CrudClient.php");
$cc=new CrudClient();
$Email=$_SESSION['E'];
$client=$cc->backupClient($Email,$cc->conn);
//var_dump($client);
?> 
<div class="Account">
                <div class="col-md-6 log">	
                    <form id="Password_form" method="POST" action="ModifyPasswordSettings.php" >
                        <?PHP foreach ($client as $cl){ ?>
                       <label>
                                                <h5>Old Password:</h5>
                                                <input name="Old_Password" type="Password" tabindex="1" required autofocus value="<?PHP echo $cl['Password']; ?>" requiered readonly >
						</label>
					 
					 <h5>New Password:</h5>	
                                         <input name="NewPassword" type="Password" tabindex="1" autofocus requiered id="test1" >
                                        
					 <h5>Retype Password:</h5>
					 <input name="NewPassword2" type="password"  requiered id="test2"> 
                                          <p id="verif"></p>
                                         <?PHP } ?>
                                         <input type="submit" value="Submit" name="Submit" onclick="return confirm('Are you sure you want to do that?');" >
                                         
					 
   				   </form>
				</div>
    
</div>		
  
	      </div>
<!---->

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
					 <li><a href="#">Carriers</a></li>					 
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
	 
</div>


<!---->
</body>
</html>


</body>
</html>                    