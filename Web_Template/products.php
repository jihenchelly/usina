<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php
session_start();
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
<title>L'usina:: Products</title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

  
</head>
<body>


<?php
include ("crudproduit.php");

$cc=new crudproduit();

	$list=$cc->afficheproduit($cc->conn);
	
	$list1=$cc->affichecategories($cc->conn);
	
	//var_dump($list);


?> 

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
						
						
						<?php
	foreach ($list1 as $l1){
		
		
    ?>
						
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $l1['Nom_Category'] ?></h4>
								<ul>
								<?php 




$cc1=new crudproduit();

$list2=$cc->afficheproduitseloncategory($cc1->conn,$l1['Nom_Category']);

foreach ($list2 as $l2){

								?>
									<li><a href="single.php?refm=<?php echo $l2['Ref_Model'];?>"><?php echo $l2['Name']?></a></li>
									
								
							
					
<?php
}
?>

</ul>	
</div>							
						</div>
<?php
	}	
    ?>
					
						
						
						
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
               <li><a class="color6" href="?offres"">Offers</a>
				</li>					
			</ul> 
			   <div class="search">
				 <form>
					<input type="text" value="" placeholder="Search..." id="rech1"   oninput    = "recherche()">
					<!--<input type="button" value="" onclick="recherche()" >-->
					</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<!--header//-->
<div class="product-model">	 
	 <div class="container">
	 
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
<?php 
		  if(isset($_GET['offres']))
		  {?>
		  <a href="index.php"></a>
		  
		  <?php } 
		   else if(isset($_GET['promotion']))
		  {?>
	  <ol class="breadcrumb"
		  <li><a href="?promotion">Home</a></li>
		   <li class="active">Promotions</li>

		  <?php } ?>
		 </ol>
		 
		 <?php 
		 
		  if(isset($_GET['offres']))
						  {include 'offres.php';}
				
		 else if(isset($_GET['detail']))
						  {include 'detail_offre.php';}
		else 
		 if(!isset($_GET['offres']))
		 {?>	
	</ol>
			<h2>OUR PRODUCTS</h2>			
		 <div class="col-md-9 product-model-sec" id="txtHint">
		 
		 
		 <?php
	foreach ($list as $l){
		
		
    ?>
	
	
	
	 <a href="single.php?refm=<?php echo $l['Ref_Model']; ?>"><div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo $l['photo']?>" style="width:150px;height:100px;" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
                                                            <form Action="AddToCart.php" method="POST">
								<h4><?php echo $l['Name'] ?></h4>
								<p>Reference: <?php echo $l['Ref_Model'] ?></p>
                                                                <input type="text" value="<?php echo $l['Ref_Model'] ?>" name="Ref" hidden="true"/>
								<span class="item_price"><?php echo $l['Price'] ?> TND</span>
                                                                <input type="text" class="item_quantity" value="1" name="Qty" />
                                                                <input type="submit" class="item_add items" value="ADD">
							</form>
                                                                </div>													
							<div class="clearfix"> </div>
						</div>
					</div>	
					
					
					
	
	
	
	
	
	</tr>
	
	<?php
	}
	?>
		 
		 </div>
		 
					
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
					

					 <?php
					 $i=1;
	foreach ($list1 as $l1){
		
		
    ?>
					
					<div class="tab<?php echo $i; ?>">
							 <ul class="place">								
								 <li class="sort"><?php echo $l1['Nom_Category'] ?></li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							  
							  
							  
							 <div class="single-bottom">	

<?php
		$cc1=new crudproduit();

$list3=$cc->afficheproduitseloncategory($cc1->conn,$l1['Nom_Category']);	
			
	foreach ($list3 as $l3){
		
		
    ?>
							 
									<a href="single.php?refm=<?php echo $l3['Ref_Model']; ?>"><p><?php echo $l3['Name'] ?></p></a>
									
									<?php
 
	}
		
    ?>
									
									
						     </div>
							 
							 
							 
					      </div>
 <?php
 $i=$i+1;
	}
		
    ?>


						  
						  
						  
						  
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
							
							
							
							function recherche() {
	
	
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); 
	


var q=document.getElementById("rech1").value;



    oReq.onload = function() {
       
		document.getElementById("txtHint").innerHTML = this.responseText;
      
		
		
		
		
    };
    oReq.open("GET", "recherche.php?q="+q, true);
                                
    oReq.send();
	
	
}

	
	function fprix(a) {
		
		var prixinf;
		var prixsup;
		var q=document.getElementById(a).name;
	var i;
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); 
	
	for(i=1;i<6;i++)
	{
	
		
		if(i!=a)
		
        document.getElementById(i).checked = false;
		 
		
	}
	
	
	
	
	for(i=0;i<q.length+1;i++)
		{
			
			if(q.charAt(i)==" ")
			break;	
		
		}
		prixinf=q.slice(0,i);
		prixsup=q.slice(i+3);
		
	if(document.getElementById(a).checked==false)
prixinf="no";	
		
		var max=eval(document.getElementById("nmbrmax").value)+1;
		for(i=6;i<max;i++)
	{
	
		
		if(i!=a)
		
        document.getElementById(i).checked = false;
		 
		
	}
		
	
	oReq.onload = function() {
       
		document.getElementById("txtHint").innerHTML = this.responseText;
      
		
		
		
		
    };
    oReq.open("GET", "prix.php?q="+prixinf+"&p1="+prixsup, true);
                                
    oReq.send();
	
	
	
	
	
	
	
	
}

function fcat(a)
{
	
	
	
	
	
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); 
	


var q=document.getElementById(a).name;
var max=eval(document.getElementById("nmbrmax").value)+1;
var i;
if(document.getElementById(a).checked==false)
q="no";
for(i=6;i<max;i++)
	{
	
		
		if(i!=a)
		
        document.getElementById(i).checked = false;
		 
		
	}
	for(i=1;i<6;i++)
	{
	
		
		
		
        document.getElementById(i).checked = false;
		 
		
	}


    oReq.onload = function() {
       
		document.getElementById("txtHint").innerHTML = this.responseText;
      
		
		
		
		
    };
    oReq.open("GET", "categorie.php?q="+q, true);
                                
    oReq.send();
	
	
	
	
	
	
}	
	
	
	
	
	
	
	
	
	
	
							
							
							
							
							
						</script>
						<!-- script -->					 
				 </section>
				


<?php 






$prixmax=$cc->maxprix($cc->conn);
$prixmin=$cc->minprix($cc->conn);
foreach ($prixmax as $pm){
	foreach ($prixmin as $pmi){
		
$borninf=$pmi['MIN(Price)'];
$bornsup=$pm['MAX(Price)'];
$diff=($bornsup-$borninf)/5;
								?>



				 
				   <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
							<div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input onclick="fprix(this.id)" type="checkbox" id="1" name="<?php echo $borninf; ?> to <?php echo $borninf+$diff; ?>" ><i> </i> <?php echo $borninf; ?> to <?php echo $borninf+$diff; ?>  </label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input onclick="fprix(this.id)" type="checkbox" id="2" name="<?php echo $borninf+$diff; ?> to <?php echo $borninf+$diff*2; ?>"><i></i><?php echo $borninf+$diff; ?> to <?php echo $borninf+$diff*2; ?> </label>
								<label class="checkbox"><input onclick="fprix(this.id)" type="checkbox" id="3" name="<?php echo $borninf+$diff*2; ?> to <?php echo $borninf+$diff*3; ?>"><i></i><?php echo $borninf+$diff*2; ?> to <?php echo $borninf+$diff*3; ?></label>
								<label class="checkbox"><input onclick="fprix(this.id)" type="checkbox" id="4" name="<?php echo $borninf+$diff*3; ?> to <?php echo $borninf+$diff*4; ?>"><i></i><?php echo $borninf+$diff*3; ?> to <?php echo $borninf+$diff*4; ?></label>
								<label class="checkbox"><input onclick="fprix(this.id)" type="checkbox" id="5" name="<?php echo $borninf+$diff*4; ?> to <?php echo $borninf+$diff*5; ?>"><i></i><?php echo $borninf+$diff*4; ?> to <?php echo $borninf+$diff*5; ?></label>
						 </div>
					 </div>
				   </section>
				   
				   
				   <?php 
}
}
								?>
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
									<?php 
$nombrecat=5;
	foreach ($list1 as $l1){
$nombrecat=$nombrecat+1;
								?>
									<label class="checkbox"><input type="checkbox" onclick="fcat(this.id)" id="<?php echo $nombrecat; ?>" name="<?php echo $l1['Nom_Category']; ?>"><i></i> <?php echo $l1['Nom_Category']; ?> </label>
									<?php 

	}
	$nmbrmax=$nombrecat;

								?>
								<input type="text" value="<?php echo $nmbrmax; ?>" id="nmbrmax" style="display: none;">
								</div>
							</div>
				   </section>
				   		
			 </div>				 
	      </div>
		</div>
</div>	
<?php } ?>
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
			 <p>Copyright Â© 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>			 
		 </div>
	 </div>
</div>
<!---->
</body>
</html>