<!DOCTYPE HTML>
<html>
<head>
<title>L'Usina::Account</title>
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
  <?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
     echo '<meta http-equiv="refresh" content="0;URL=IndexLoggedIn.php">'; 
}
  ?>
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
					<li class="top_link">Email:<a href="mailto@example.com">info@atebtunisie.com</a></li>|
					<!--<li class="top_link"><a href="login.php">My Account</a></li>|-->	
              <!--  <?php session_start ();  ?>                        
	        <li class="dropdown"> <div class="dropdown">
                <button class="dropbtn"><?php echo $_SESSION['E'];  ?> </button>
                       <div class="dropdown-content">
                         <a href="#">Link 1</a>
                         <a href="#">Link 2</a>
                         <a href="#">Link 3</a>
                       </div>
             </div>			 
</li>-->
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
		 	<a href="index.html"><img src="images/logo3.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="login">
				 <a href="login.html">LOGIN</a>
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
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
                         <!--<script type="text/javascript">
    document.getElementById("registerr-submit").onclick = function () {
        location.href = "MyAccountSettings.html";
    };
</script>-->
                         <script language="Javascript" type="text/javascript">
$(document).ready(function() {
    $("#test1").keyup(check);
  
});


function check() {
  var test1 = $("#test1").val();
  
    if (!(test1.search(/[^a-zA-Z]+/) === -1)) {
$("#verif").text("*Charecters Only"); 
}  else if (test1.search(/[^a-zA-Z]+/) === -1) { $("#verif").text("");}
}
$(document).ready(function() {
      $("#test2").keyup(check2);
});


function check2() {
 
  var test2 = $("#test2").val();

 if (!(test2.search(/[^a-zA-Z]+/) === -1)) {
$("#verif2").text("*Charecters Only"); 
} else if (test2.search(/[^a-zA-Z]+/) === -1) { $("#verif2").text("");}
    
    
} 
function checkmail() {
 
  var test3 = $("#test3").val();

 if (!(test3.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/))) {
$("#verif3").text("*Unvalid Email"); 
} else {
    $("#verif3").text("*Valid Email"); 
}
    
    
}


</script>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="AddClient.php" method="POST">
					<div>
						<label>
                                                    <input name="First_Name" placeholder="first name:" type="text" tabindex="1" required autofocus id="test1" onkeyup="check()">
						</label>
                                            <p id="verif"></p>
					</div>
					<div>
						<label>
							<input name="Last_Name" placeholder="last name:" type="text" tabindex="2" required autofocus id="test2" onkeyup="check2()">
						</label>
                                             <p id="verif2"></p>
					</div>
					<div>
						<label>
							<input name="Email"  type="email" tabindex="3" required placeholder="me@example.com" id="test3" onkeyup="checkmail()">
						</label>
                                             <p id="verif3"></p>
					</div>
					<!-- <div>
						<label>
							<input placeholder="Address:" type="email" tabindex="3" required>
						</label>
					</div>	-->				
						<div class="sky_form1">
							<ul>
                                                            <li><label class="radio left"><input type="radio" name="Choice" value="Male"><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="Choice" value="Female"><i></i>Female</label></li>
								<div class= "clearfix"></div>
							</ul>
						</div>					
					<div>
						<label>
							<input name="Password" placeholder="password" type="password" tabindex="4" required>
						</label>
					</div>						
					<!--<div>
						<label>
							<input placeholder="retype password" type="password" tabindex="4" required>
						</label>
					</div>-->

					<div>
                                       
                                        <input type="submit" value="create an account" id="register-submit">
					
                                        </div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to L'Usina.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>existing user</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="contact.php" method="post">
					<div>
						<label>
							<input placeholder="email:" type="email" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="4" required>
						</label>
					</div>						
					<div>
						<input type="submit" value="sign in" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- end registration -->
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


</body>
</html>