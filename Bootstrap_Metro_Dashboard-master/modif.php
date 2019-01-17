<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	<!-- deliver_mmod_animation -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
	<script language="Javascript" type="text/javascript">
	
function test2()
{
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    var url = "modifCARTest.php";
    // Create some variables we need to send to our PHP file
    
    var fn = document.getElementById("delivery_man_Car_mod").value;
    var vars = "?&car="+fn;
    hr.open("POST", url+vars, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("carV").innerHTML = return_data;
			console.log(return_data);
			
			if(return_data=="this car registration number is used")
			{
				document.getElementById("carV").innerHTML = return_data;
				document.getElementById('carV').style.color = 'red';
			}
			else if(return_data=="ok")
			{document.getElementById("carV").innerHTML = return_data;
				document.getElementById('carV').style.color = 'green';}
            
			if(document.getElementById("delivery_man_Car_mod").value==""){
			document.getElementById("carV").innerHTML = "";}
			
			

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(); // Actually execute the request

}	

</script>	


		
</head>

<body>

		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Metro</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
					
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
							<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="indexjiji.php?newsletter"><i class="icon-bar-chart"></i>
						<span class="hidden-tablet"> Send Mail</span></a>
						</li>
				
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Manage</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu2.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Delivery man</span></a></li>
								<li><a class="submenu" href="delivery_cmd_dis.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Deliveries</span></a></li>
								<li><a class="submenu" href="typography.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Orders</span></a></li>
								<li><a class="submenu" href="Products.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Products</span></a></li>
									<li><a class="submenu" href="ClientsInterface.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Clients</span></a></li>

							</ul>	
						</li>
							<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> PROMOTION</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="ajout promo offr1.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Promotions</span></a></li>
								<li><a class="submenu" href="afficher_promos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Generate promotions</span></a></li>

							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Offres</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="ajout_offre.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Offers</span></a></li>
								<li><a class="submenu" href="affichOffre.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Generate Offers</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Deliveries</a></li>
			</ul>
			<?PHP
include ("php/crudDelivery_man.php");

$cc=new crudDelivery_man();
if (isset($_POST['enregistrerModif'])){
	$newChauffeur=new delivery_man ($_GET['cin'],$_POST['delivery_man_Name_mod'],$_POST['delivery_man_First_name_mod'],$_POST['delivery_man_Car_mod'],$_POST['delivery_man_Destination_mod'],$_POST['delivery_man_Tel_mod']);
	$cc->modifyDelivery_man($newChauffeur,$cc->conn);
	
}else{
$cin=$_GET['cin'];
$chauffeur=$cc->recupDelivery_man($cin,$cc->conn);


?>

			<div class="row-fluid">
                            <div class="header">
                                <h1>Delivery man Modification</h1>
                            </div>
							
							
                                <div class="Product_Crud">
                                    <div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
                                        <div class="box-content">
										<form method="POST">
                                       <form class="form-horizontal">
						  <fieldset>
						
						  <?PHP foreach ($chauffeur as $ch){ ?>
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Name_mod">Name </label>
							  <div class="controls">
								<input type="text" class="delivery_man_Name_mod"  value="<?PHP echo $ch['name'];?>" id="delivery_man_Name_mod" name="delivery_man_Name_mod">
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="delivery_man_First_name_mod">First name </label>
							  <div class="controls">
								<input type="text" class="delivery_man_First_name_mod" value="<?PHP echo $ch['first_name'];?>" id="delivery_man_First_name_mod" name="delivery_man_First_name_mod" >
								
							  </div>
							</div>
						
							
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Car_mod">Car registration number</label>
							  <div class="controls">
								<input type="text" class="delivery_man_Car_mod" value="<?PHP echo $ch['car_registration_number'];?> " id="delivery_man_Car_mod" name="delivery_man_Car_mod" onkeyup="test2()" required>
								<p style="display: inline" id="carV" ></p>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Destination_mod">Destination</label>
							  <div class="controls">
                                                              <select class="delivery_man_Destination_mod" id="delivery_man_Destination_mod" name="delivery_man_Destination_mod">
           
																  <option value="sousse" >sousse </option>
                                                              </select>
							  </div>
                                                      </div>
													  
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Tel_mod">Telephone number</label>
							  <div class="controls">
								<input type="text" class="delivery_man_Tel_mod" value="<?PHP echo $ch['telephone'];?> " id="delivery_man_Tel_mod" name="delivery_man_Tel_mod">
								
							  </div>
							</div>						  
							
							
                              <!-- -->
                                                     
                                 
							<?php
	}
	?>
                              
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="enregistrerModif" >Save</button>
							  
							  <button type="reset" class="btn">Cancel</button>
							</div>
							
												<?php
	}
	?>
						  </fieldset>
						</form> 
						
						
</form>		
	
				
                                            </div>
                            </div>
					
			</div>		
                        </div>

		
			
		
			
			<!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>