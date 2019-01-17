<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/rechercheajaxjs.js"></script>
	<?php
	include ("php/crudPromotion.php");


$cc=new crudPromotion(); //cnx déjà établie dans le constructeur de la classe 
if(isset($_GET['recherche']))
{$promos=$cc->recherche();}
else {$promos=$cc->getPromotion();}
	$row=count($promos);
	 '<h1>'.$row.'</h1><br>';
	// $refarticles['Ref_Model'];
	if(isset($_GET['param']))
	{
		
		
		if($cc->supprimerPromotion($_GET['param'],$cc->conn))
			header("location:afficher_promos.php");
		else echo 'Erreur de supp';
			
	}
	?>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>generate promotions</title>
	<meta name="description" content="Promotions">
	<meta name="author" content="Jihen chelly">
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
				<a class="brand" href="index.html"><span>delete </span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
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
										    	jihen chelly
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
										    	jihen chelly
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
										    jihen chelly 
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
										    	jihen chelly
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
										    	jihen chelly
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
								<i class="halflings-icon white user"></i> jihen chelly
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
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Promotions</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="ajout promo offr1.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Promotions</span></a></li>
								<!--<li><a class="submenu" href="afficher_promos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Afficher Promotions</span></a></li>-->
								<li><a class="submenu" href="afficher_promos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Generate Promotions</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Generate Promotions</a>
				</li>
			</ul>
			
		
								
							
				<input type="search" style="float:right" id="champ_recherche" />
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Generate Promortions</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
				
					 <div class="box-content" >
                                       <div  id="resultat">
						<table border=1 width=100% style="margin-bottom:50px">
						<tr>
							<td>Id</td><td>Date begin</td>	<td>Date End</td>	<td>Promotion</td>	<td>Product</td>	<td>Modify promotion</td>	<td>Delete Promotion</td>
							</tr>
							
							<?php 
							if($row>0)
							{
								$i=0;
							foreach($promos as $res)
							{
								$i=$i+1;
								?>
								<tr><td><?php echo $i?></td><td><?php echo $res['Reductions_start_date']?></td>	
								<td><?php echo $res['Reduction_end_date']?></td>	<td><?php echo $res['percentage']?></td>
								<td><?php echo $res['Ref_Model']?></td>	<td><a href="?modif=<?php echo $res['Id_reduction']?>">Modify</a></td>	<td><a onclick="if(!confirm('do you want to delete this promotion')) return false" href="?param=<?php echo $res['Id_reduction']?>">Delete</a></td>
								</tr>
							<?php
							
							}
							}
							if($row==0){?>
								
								<tr height=80></td></tr>
								
							<?php
							}
							/*include ("php/crudPromotion.php");
							$cc=new crudPromotion();
							$pro=$cc->selectnom($_GET['nomPromotion'],$cc->conn);					
							//echo $_GET['nomPromotion']	;
							
							foreach ($pro as $p){
							*/
							?>
							</table>
							</div>
						<?php if(isset($_GET['modif']))
						{
							$pro=$cc->selectnom($_GET['modif'],$cc->conn);	
							foreach($pro as $code);
							?>
					  <form method="POST" class="form-horizontal" >
						  <fieldset>
						  							  <!--<div class="control-group">
								<label class="control-label" for="focusedInput">Name </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="Promo_Name_add" name="Promo_Name_add" type="text">
								</div>
							  </div>-->
						<div class="control-group">
							  <label class="control-label" for="date01">Date Begin</label>
							  <div class="controls">
								<input type="date"  id="dateD_promo_add" name="dateD_promo_add" value="<?php echo $code['Reductions_start_date']?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date End</label>
							  <div class="controls">
								<input type="date"  id="dateF_promo_add" name="dateF_promo_add" value="<?php echo $code['Reduction_end_date']?>">
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError">product Ref</label>
								<div class="controls">
								  <input type="text" name="idProduit_promo_add" value="<?php echo $code['Ref_Model']?>" readOnly/>
									
								</div>
							  </div>
							
								<div class="control">
							  <label class="control-label" for="date01">Percentage of promotion</label>
							  <div class="controls">
							         <input type="number" name="pourcentage_promo_add" min="0" max="100" step="5" value="<?php echo $code['percentage']?>">
							
							  </div>
							</div>
							  <div style="position:relative; top:30px; margin-bottom:25px">
							  <button type="submit" name="update_promo" class="btn btn-primary">Modify </button>
							  <a href="?cancel"  type="reset" class="btn">Cancel </a>
							</div>
						  </fieldset>
						 
                   

						</form>   
                          <?php 
						  if(isset($_POST['update_promo']))
						  {
							  $now = $_POST['dateD_promo_add']; 

								$expire = $_POST['dateF_promo_add'];

								// format the 2 dates using DateTime
								$now = new DateTime( $now );
								$now = $now->format("Ymd");
								$expire = new DateTime( $expire );
								$expire = $expire->format("Ymd");
								//echo $now.'<br>';
								//echo $expire.'<br>';
								if($expire>$now) 
								{	
							  
							  /************Ajout*******/
										

											if($cc->modifierPromotion($cc->conn))
											//header("location:afficher_promos.php");
										echo "<script>document.location.href='afficher_promos.php'</script>";
										
										else print 'error';
								}
								
								else print "<script>alert('Date End lower then Date Begin')</script>";
							  
						  }
						 } ?>
				</div><!--/span-->
				</div><!--/span-->

			</div><!--/row-->

			<!--<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add a offre </h2>
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
							  <label class="control-label" for="typeahead">Name of offres </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["table","chaise lounge","chaise sofa bed"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>
							    <div class="control-group">
								<label class="control-label">Date begin </label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input"></span>
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label">Date end</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input"></span>
								</div>
								</div>
							
							 
							   <div class="control-group">
								<label class="control-label">Product Ref</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input"></span>
								</div>
								</div>
							   <div class="control-group">
								<label class="control-label"> photo</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input"></span>
								</div>
								</div>
							   <div class="control-group">
								<label class="control-label">Description</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input"></span>
								</div>
								</div>						
							 
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Delete</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>-->
				</div><!--/span-->
			
			</div><!--/row-->
			
	
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
