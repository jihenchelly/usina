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
	<script> 

$(document).ready(function(){
    $(".modify_deliveryman").click(function(){
        $(".deliver_mod_animation").animate({
            height: 'show'
        });
    });
	 $(".btn_canel_deliver_mod_anim").click(function(){
        $(".deliver_mod_animation").animate({
            height: 'hide'
        });
    });
	
});	
</script>	

<script> 

$(document).ready(function(){
    $(".btn_ok_deliver_del_anim").click(function(){
        $(".deliver_del_animation").animate({
            height: 'show'
        });
    });
	 $(".btn_canel_deliver_del_anim").click(function(){
        $(".deliver_del_animation").animate({
            height: 'hide'
        });
    });
	
});	
</script>





<script language="Javascript" type="text/javascript">
	
function test()
{
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    var url = "ajoutCINTest.php";
    // Create some variables we need to send to our PHP file
    var fn = document.getElementById("delivery_man_CIN_add").value;
    //var ln = document.getElementById("delivery_man_Car_add").value;
    var vars = "?&cin="+fn;
    hr.open("POST", url+vars, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("cinV").innerHTML = return_data;
			console.log(return_data);
			
			if(return_data=="this cin is used")
			{
				document.getElementById("cinV").innerHTML = return_data;
			document.getElementById('cinV').style.color = 'red';
			document.getElementById("sob").disabled=true;
			}
			
			else if(return_data=="ok")
			{
				document.getElementById("cinV").innerHTML = return_data;
				document.getElementById('cinV').style.color = 'green';
				document.getElementById("sob").disabled=false;
			}
            if(document.getElementById("delivery_man_CIN_add").value==""){
			document.getElementById("cinV").innerHTML = "";
			document.getElementById("sob").disabled=true;}

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(); // Actually execute the request

}	

</script>	

<script language="Javascript" type="text/javascript">
	
function test2()
{
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    var url = "ajoutCARTest.php";
    // Create some variables we need to send to our PHP file
    
    var fn = document.getElementById("delivery_man_Car_add").value;
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
				document.getElementById("sob").disabled=true;
			}
			else if(return_data=="ok")
			{document.getElementById("carV").innerHTML = return_data;
				document.getElementById('carV').style.color = 'green';
				document.getElementById("sob").disabled=false;}
            
			if(document.getElementById("delivery_man_Car_add").value==""){
			document.getElementById("carV").innerHTML = "";
			document.getElementById("sob").disabled=true;}
			
			

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(); // Actually execute the request

}	

</script>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
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
						</li>
						<!--<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>-->
						<!--<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>-->
						<!--<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>-->
					<!--	<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>-->
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

			<div class="row-fluid">
                            <div class="header">
                                <h1>Delivery man Addition</h1>
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
										<form method="POST" action="php/insertDelivery_man.php">
                                       <form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Name_add">Name </label>
							  <div class="controls">
								<input type="text" class="delivery_man_Name_add" id="delivery_man_Name_add" name="delivery_man_Name_add"  required placeholder="Nizar" > 
								 
							  </div>				
							</div>
								
							<div class="control-group">
							  <label class="control-label" for="delivery_man_First_name_add">First name </label>
							  <div class="controls">
								<input type="text" class="delivery_man_First_name_add" id="delivery_man_First_name_add" name="delivery_man_First_name_add"  required>
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="deliveryman_CIN_add">CIN</label>
							  <div class="controls" id="staticParent">
								<input type="text" class="delivery_man_CIN_add"  id="delivery_man_CIN_add" name="delivery_man_CIN_add"   onkeyup="test()" required>
								<p style="display: inline" id="cinV" ></p>
							  </div>
							</div>
							
							<script>
							
							$(function() {
				$('#staticParent').on('keydown', '#delivery_man_CIN_add', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
					})
							</script>
							
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Car_add">Car registration number</label>
							  <div class="controls">
								<input type="text" class="delivery_man_Car_add" id="delivery_man_Car_add" name="delivery_man_Car_add" onkeyup="test2()" required>
								<p style="display: inline" id="carV" ></p>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Destination_add">Destination</label>
							  <div class="controls">
                                                              <select class="delivery_man_Destination_add" id="delivery_man_Destination_add" name="delivery_man_Destination_add">
                                                                  <option value="" >Choose destination </option>
																  <option value="sousse" >sousse </option>
                                                              </select>
							  </div>
                                                      </div>
													  
							<div class="control-group">
							  <label class="control-label" for="delivery_man_Tel_add">Telephone number</label>
							  <div class="controls" id="staticParent2">
								<input type="tel" class="delivery_man_Tel_add" id="delivery_man_Tel_add" name="delivery_man_Tel_add" onblur="queDesChiffres(this);" required>
							  
							  				<script>
							
							$(function() {
				$('#staticParent2').on('keydown', '#delivery_man_Tel_add', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
					})
							</script>
							  </div>
							</div>		
							
							
							
                              <!-- -->
                                                     
                                 
							
                              
							
							<div class="form-actions">
							  <button onclick=" return confirm('success!')" type="submit" class="btn btn-primary" id="sob" name="lol">Save changes</button>
						<!--	  <script>
	function saveAndSubmit(event){
 	mail();
	alert("mail");
}
</script>
-->
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form> 
</form>						
                                            </div>
                            </div>
					
			</div>		
                        </div>
						<!-- here deliver modification -->

			<div class="row-fluid">
				
				<div class="header">
                                <h1>Edit Delivery man </h1>
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
                                       <form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="Delivery_man_CIN_mod">enter CIN </label>
							  <div class="controls">
								<input type="search" class="Delivery_man_CIN_mod" id="Delivery_man_CIN_mod">
								<button class="btn_ok_deliver_mod_anim" type="button">OK</button> 
								<button class="btn_canel_deliver_mod_anim" type="button">Cancel</button>
								<!--affichage-->
								
								

								<?php
include ("php/crudDelivery_man.php");
$cc=new crudDelivery_man();

$list=$cc->displayDelivery_man($cc->conn);
	?> 
	<table>
	<tr>
	<td>CIN</td><td>Name</td><td>First name</td><td>Car registration number</td><td>Destination</td><td>Telephone </td><td>availability</td><td></td><td></td>
	</tr>
	<?php
	foreach ($list as $l){
    ?>
	<tr>
	<td><?php echo $l['cin'] ?></td>
	<td><?php echo $l['name']?></td>
	<td><?php echo $l['first_name']?></td>
	<td><?php echo $l['car_registration_number'] ?></td>
	<td><?php echo $l['destination']?></td>
	<td><?php echo $l['telephone']?></td>
	<td><?php echo $l['availability']?></td>
	<td><form  action="" method='POST'>
	<td><a href="modif.php?cin=<?php echo $l['cin']; ?>"   name='modify_deliveryman'class="glyphicons-icon pencil" ></a></td>
	<!--<td><input type="submit" class="btn btn-primary" value="delete" name="supprimer"></td>-->
	<td><a onclick="return confirm('Are you sure?')" href="delete.php?cin=<?php echo $l['cin']; ?>" value="delete" title="delete" name="supprimer" class="glyphicons-icon remove_2"></a></td>
	<input type="text" value="<?PHP echo $l['cin'] ?>" name="cin" style="display: none;">

	</form> </td>
	</tr>
	<?php
	}
	?>
	</table>

<script>
$("#Delivery_man_CIN_mod").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>


								
							  </div>

							</div>
                                                     
              
							
                                                      
							        
							
							<div class="form-actions">
							  <button type="submit" href="submenu2.php" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                                            </div>
                            </div>
					
			</div>
			</div>
			<!-- here deliver deletion -->
			
			
                               
		
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
