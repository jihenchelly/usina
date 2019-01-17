<!DOCTYPE html>
<html lang="en">
<head>
	
	<script type="text/javascript" src="ntc.js"></script>

  <script type="text/javascript">
	
	var pageactuelle=0;
function myFunction() {
	
	document.getElementById("Model_Name_Del").innerHTML="";
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("Category_Name_Del");
var q = e.value;
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("nizar").value = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		var drp=document.getElementById("nizar").value;
		var previous=1;
		for(i=0;i<drp.length+1;i++)
		{
			if(drp.charAt(i)=="*")
			{
				var option="";
				for(j=previous;j<i;j++)
			option=option+drp.charAt(j);
		
				previous=i+1;
				
				var opt = document.createElement('option');
    
    opt.innerHTML = option;
    document.getElementById("Model_Name_Del").appendChild(opt);
				
				
				
			}
				
			
			
			
			
			
			
			
			
			
			
			
			
		}
		
		
		
    };
    oReq.open("GET", "dropcategorie.php?q="+q, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
}

function myFunctionmod() {
	
	document.getElementById("Model_Name_Mod").innerHTML="";
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("Category_Name_Mod");
var q = e.value;
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("nizar").value = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		var drp=document.getElementById("nizar").value;
		var previous=1;
		for(i=0;i<drp.length+1;i++)
		{
			if(drp.charAt(i)=="*")
			{
				var option="";
				for(j=previous;j<i;j++)
			option=option+drp.charAt(j);
		
				previous=i+1;
				
				var opt = document.createElement('option');
    
    opt.innerHTML = option;
    document.getElementById("Model_Name_Mod").appendChild(opt);
				
				
				
			}
				
			
			
			
			
			
			
			
			
			
			
			
			
		}
		
		
		
    };
    oReq.open("GET", "dropcategorie.php?q="+q, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
}

function selectcolors() {
	
	document.getElementById("Color_Name_Mod").innerHTML="";
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("Model_Name_Mod");
var q = e.value;



		
		for(i=0;i<q.length+1;i++)
		{
			
			if(q.charAt(i)=="-")
			break;	
		
		}
		q=q.slice(0,i);
		



    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("listcouleurs").value = this.responseText;

      
		var drp=document.getElementById("listcouleurs").value;
		var previous=1;
		for(i=0;i<drp.length+1;i++)
		{
			if(drp.charAt(i)=="*")
			{
				var option="";
				for(j=previous;j<i;j++)
			option=option+drp.charAt(j);
		
				previous=i+1;
				
				var opt = document.createElement('option');
    
    opt.innerHTML = option;
    document.getElementById("Color_Name_Mod").appendChild(opt);
				
				
				
			}
				
			
			
			
			
			
			
			
			
			
			
			
			
		}
		
		
		
    };
    oReq.open("GET", "dropcouleurs.php?q="+q, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
}


function modifier() {
	
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("Model_Name_Mod");
var q = e.value;

var drp;
		
		for(i=0;i<q.length+1;i++)
		{
			
			if(q.charAt(i)=="-")
			break;	
		
		}
		drp=q.slice(0,i);
		
		q=document.getElementById("Color_Name_Mod").value;

    oReq.onload = function() {
        //HERE
		document.getElementById("modifformulaire").value = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		
		
    };
     oReq.open("GET", "modifproduit.php?q="+drp+"&p1="+q, true);
                                 
     oReq.send();
	
	
}






	function shape()
	{
		
		
	
	
document.getElementById("width01").value = "";
			document.getElementById("length01").value = "";
	 
document.getElementById("diametre01").value = "";
document.getElementById("height01").value = "";
	
	var e = document.getElementById("shapechoice");
var q = e.value;
    if(q=="Rounded")
		
		{
			document.getElementById("diametre01").disabled = false;
			
			
			
			
			document.getElementById("width01").disabled = true;
			document.getElementById("length01").disabled = true;
		}
	
	
	else
		
		{
			
			document.getElementById("diametre01").disabled = true;
			
			document.getElementById("width01").disabled = false;
			document.getElementById("length01").disabled = false;
				
			
			
			
			
		}

		
		
	}
	
	
	
	function myFunction21() {
	
	
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("filter");
var q = e.value;
var p1;
p1=document.getElementById("filterprice1").value;

var p2;
p2=document.getElementById("filterprice2").value;


    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("txtHint").innerHTML = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		
		
		
		
    };
    oReq.open("GET", "filtrecategorie.php?q="+q+"&p1="+p1+"&p2="+p2, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
}

	
	
	
	function myFunction2() {
	
	
	document.getElementById("filterprice1").value="";
	document.getElementById("filterprice2").value="";
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	var e = document.getElementById("filter");
var q = e.value;
var p1;
p1=document.getElementById("filterprice1").value;

var p2;
p2=document.getElementById("filterprice2").value;


    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("txtHint").innerHTML = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		
		
		
		
    };
    oReq.open("GET", "filtrecategorie.php?q="+q+"&p1="+p1+"&p2="+p2, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
}

function fcolor(){
	
	
	var n_match  = ntc.name(document.getElementById("color01").value);
    
    n_name       = n_match[1]; // This is the text string for the name of the match
   

   
	
	document.getElementById("colorname").value=n_name;

	
}

function fcolor_mod(){
	
	
	var n_match  = ntc.name(document.getElementById("color01_mod").value);
    
    n_name       = n_match[1]; // This is the text string for the name of the match
   

   
	
	document.getElementById("colorname_mod").value=n_name;
	
	
}





	
	
function pagination(a) {



 



	if (a=="»")
		pageactuelle=pageactuelle+1;
	if (a=="«")
		pageactuelle=pageactuelle-1;
	
	
	if(pageactuelle==0)
		document.getElementById("pagegauche").disabled = true;
	else
	document.getElementById("pagegauche").disabled = false;	
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	
var q = document.getElementById("elementspagination").value;






    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		document.getElementById("txtHint").innerHTML = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		var drp=document.getElementById("nombreelements").value;
		
		
		
		if(drp==1)
		document.getElementById("pagedroite").disabled = true;
	if(drp==0)
		document.getElementById("pagedroite").disabled = false;
		
    };
    oReq.open("GET", "pagination.php?q="+q+"&p1="+pageactuelle, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
	
	
	
}
	
	function stock()
	{
		
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	







    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		var stockoccupe = this.responseText;
       // alert(document.getElementById("nizar").value); //Will alert: 42
		
		var stock=100000000;
		if((stock-stockoccupe)<10000000)
		alert("Votre Stock est presque plein et vous ne pouvez pas y ajouter beaucoup de produits. Un e-mail vous sera envoyé pour plus d'informations");
		
		if((stockoccupe)>90000000)
	mail(stockoccupe);
    };
    oReq.open("GET", "stock.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
		
		
		
	}
	
	function mail(x)
	{
		
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	







    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
		
       // alert(document.getElementById("nizar").value); //Will alert: 42
		
		
    };
    oReq.open("GET", "mail.php?q="+x, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
		
		
		
	}
	
	
	
	function ref(x)
	{
		
	
	console.log(this.responseText);
	
    var oReq = new XMLHttpRequest(); //New request object
	







    oReq.onload = function() {
       
		if(this.responseText==1)
		document.getElementById("reference").style.color = 'red';
	else
		document.getElementById("reference").style.color = 'green';
	
	
	
	
    };
    oReq.open("GET", "ref.php?q="+x, true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
	
	
		
		
		
	}
	
	
	
	
	
	
	
</script>
	
	
	
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
	
		
		
		
</head>

<body>
<script> 

stock();
 </script>
 
 
 
<input type="text" value="" id="nizar" style="display: none;">
<input type="text" value="" id="listcouleurs" style="display: none;">

<?php
include ("crudproduit.php");

$cc=new crudproduit();

	$list=$cc->affichagepagination($cc->conn,5,0);
	//var_dump($list);
	
	


	$list1=$cc->affichecategories($cc->conn);
	//var_dump($list);
	
	?> 
	
	
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
				<li><a href="#">Products</a></li>
			</ul>
                            <div class="row-fluid">
                            <div class="header">
                                <h1>Product List </h1>
								
								
							 
                                 <select class="filter" id="filter" onchange="myFunction2()">
                                                                  <option  >Filter By Category</option>
																  <?php
	foreach ($list1 as $l1){
    ?>
<option><?php echo $l1['Nom_Category']  ?></option>

<?php
	}
	?>
                                                              </select>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								Filter By Price :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp between						  
								<input type="number" class="filter1" id="filterprice1" onchange="myFunction21()" onkeypress = "this.onchange();" oninput    = "this.onchange();">                             
								&
							 <input type="number" class="filter1" id="filterprice2" onchange="myFunction21()"onkeypress = "this.onchange();"  oninput    = "this.onchange();">
							  
                                                     
								
								
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
					
					                                                      
													  
                                        <div id="txtHint"  class="box-control">
										
										<div class="control-group">
										<table>
                                       <tr>
	<td>Reference</td><td>Category_Name</td><td>Name</td><td>Price</td><td>Photo</td><td>mark</td><td>review number</td><td>fidelity value</td><td>description</td><td>dimensions</td>
	</tr>
	<?php
	
	
	foreach ($list as $l){
		
		
    ?>
	
	
	
	<tr>
	<td><?php echo $l['Ref_Model'] //$l[1]?></td>
	<td><?php echo $l['Category_Name']//$l[4] ?></td>
	<td><?php echo $l['Name'] //$l[2]?></td>
	
	<td><?php echo $l['Price'] //$l[0]?></td>
	<td><img src= "<?php echo $l['photo']?>" style="width:60px;height:40px;"/></td>
	<td><?php echo $l['mark'] //$l[0]?></td>
	<td><?php echo $l['review_nbr'] //$l[0]?></td>
	<td><?php echo $l['pt_value'] //$l[0]?></td>
	<td><?php echo $l['description'] //$l[0]?></td>
	<?php if($l['diametre']==0) { ?>		 <td>Rectangular Shape : Dimensions: Length <?php echo $l['length']; ?> cm x Width <?php echo $l['width']; ?> cm x Height <?php echo $l['height']; ?> cm </td>
					<?php } ?>	

<?php if($l['diametre']!=0) { ?>		 <td>Rounded Shape: Dimensions: Diametre <?php echo $l['diametre']; ?> cm  x Height <?php echo $l['height']; ?> cm </td>
					<?php } ?>
	
	
	<td><a   href="modifierproduit.php?refproduit=<?php echo $l['Ref_Model'];?>" title="set finished" name="set finished " class="glyphicons-icon pencil"></a><td>
	
	<td><a   href="supprimerproduit.php?refproduit=<?php echo $l['Ref_Model'];?>" title="set finished" name="set finished " class="glyphicons-icon remove_2"></a><td>

	
	</tr>
	
	<?php
	}
	?>
	
	</table>
	
         </div>               


		 
								  </div>
								  
								  <div >
						&nbsp&nbsp
		<input type="button" id="pagegauche" value="«" disabled onclick="pagination(this.value)"> 						  
&nbsp&nbsp&nbsp&nbsp&nbsp

<select  id="elementspagination" onchange="pagination()">
                                                                  <option  >5</option>
																  <option  >10</option>
																  <option  >20</option>
																 

                                                              </select>

&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="button" id="pagedroite" value="»" onclick="pagination(this.value)"> 	
  
</div>
                            </div>
					
			</div>		
                        </div>
			<div class="row-fluid">
                            <div class="header">
                                <h1>Product Addition</h1>
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
                                       <form method="POST" action="ajoutproduit.php" class="form-horizontal" enctype="multipart/form-data" >
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="Model_ref">Category</label>
							  <div class="controls">
                                                              <select class="Model_ref" name="Category_Name" required >
                                                                  <option value="" >Choose Category</option>
																  <?php
	foreach ($list1 as $l1){
    ?>
<option><?php echo $l1['Nom_Category']  ?></option>

<?php
	}
	?>
                                                              </select>
							  </div>
							</div>
						  
						  
						  
						  <div class="control-group">
							  <label class="control-label" for="Model_Name_add">Reference </label>
							  <div class="controls">
								<input type="number" class="Model_Name_add" name="Model_reference_add" id="reference" required oninput="ref(this.value)">
								
							  </div>
							</div>
						  
							<div class="control-group">
							  <label class="control-label" for="Model_Name_add">Name </label>
							  <div class="controls">
								<input type="text" class="Model_Name_add" name="Model_Name_add" required >
								
							  </div>
							</div>
							
							
							
							
							
                                                      <div class="control-group">
							  <label class="control-label" for="Color01">Color</label>
							  <div class="controls">
                                                              <input type="color" class="Model_Color_add" id ="color01" name="Color01" onchange="fcolor()" required >
                                                                  
																  
																  
																  
																  
                                                             
							  </div>
                                                      </div>
                                                      <input type="text" value="" name="colorname" id="colorname" style="display: none;">
                                                      <div class="control-group">
							  <label class="control-label" for="Qty01">Quantity</label>
							  <div class="controls">
                                                                <input type="number" class="Model_Qty_add" name="Qty01" value="0.00" required>UNIT
							  </div>
                                                      </div>
													  
													  <div class="control-group">
							  <label class="control-label" for="shape">Shape</label>
							  <div class="controls">
                                                              <select class="shape" id="shapechoice" onchange="shape()" required >
                                                                  <option value="" >Choose Shape</option>
																  
<option> Rounded </option>
<option> rectangular </option>


                                                              </select>
							  </div>
							</div>
							<div class="control-group">
							
							<label class="control-label" for="height01">Diametre</label>
							  <div class="controls">
								<input type="number" class="Model_Height_add" id="diametre01" name="diametre01"  required >CM
							  </div>
							
							  <label class="control-label" for="height01">Heigh</label>
							  <div class="controls">
								<input type="number" class="Model_Height_add" id="height01"  name="height01"  required >CM
							  </div>
                                                          <label class="control-label" for="length01">Length</label>
							  <div class="controls">
								<input type="number" class="Model_Length_add" id="length01" name="length01"  required>CM
							  </div>
                                                          <label class="control-label" for="width01">Width</label>
							  <div class="controls">
								<input type="number" class="Model_width_add" id="width01" name="width01"  required>CM
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label" for="Price01">Price</label>
							  <div class="controls">
                                                                <input type="number" class="Model_Price_add" name="Price01" value="0.00" required>DT
							  </div>
                                                      </div>
													  
													  <div class="control-group">
							  <label class="control-label" for="Price01">Fidelity Value</label>
							  <div class="controls">
                                                                <input type="number" class="Model_Price_add" name="value01" value="0.00" required>DT
							  </div>
                                                      </div>
													  
							<div class="control-group">
							  <label class="control-label" for="Photo_Input01">Photo</label>
							  <div class="controls">
								<input class="Model_Photo_add" id="Photo_Input01" type="file" name="pic" accept="image/*" required>
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="Desc01">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="Desc01" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							
						  </fieldset>
						</form>  
                                            </div>
                            </div>
					
			</div>		
                        </div>

			<div class="row-fluid">
				
				<div class="header">
                                <h1>Product Modification</h1>
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
			<?PHP		
					
			if (isset($_POST['savemodif'])){
	
$ref= current(explode("-", $_POST['Model_Name_Mod']));
	
	

	$cc->modifquantity($cc->conn,$_POST['Color_Name_Mod'],$ref,$_POST['Qtymod']);
	
	
	
}		
	?>				
					
					
                                        <div class="box-content">
                                      <form method="POST"  class="form-horizontal" enctype="multipart/form-data" >
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="Model_ref_Del">Category</label>
							  <div class="controls">
                                                              <select class="Model_Name_Del" id="Category_Name_Mod" onchange="myFunctionmod()" >
                                                                  <option value="" >Choose Category</option>
																  <?php
	foreach ($list1 as $l1){
    ?>
<option><?php echo $l1['Nom_Category']  ?></option>

<?php
	}
	?>
                                                              </select>
							  </div>
							</div>
							
                                                      <div  class="control-group">
							  <label class="control-label" for="Model_Name_Del">Product</label>
							  <div class="controls" >
                                                              <select class="Model_Name_Del" id="Model_Name_Mod" name="Model_Name_Mod" onchange="selectcolors()">
                                                                  <option value="" >Choose Product</option>
                                                              </select>
							  </div>
                                                          
                                                      </div>
													  
												 <div  class="control-group">
							  <label class="control-label" for="Model_Name_Del">Color</label>
							  <div class="controls" >
                                                              <select class="Model_Name_Del" id="Color_Name_Mod" name="Color_Name_Mod" onchange="modifier()">
                                                                  <option value="" >Choose Color</option>
                                                              </select>
							  </div>
                                                          
                                                      </div>	  
													  
													  
													  
													  
													  
													  
													   
											  <div class="control-group">
							  <label class="control-label" for="Qty01">Quantity</label>
							  <div class="controls">
                                                                <input type="text" id="modifformulaire" class="Model_Qty_add" name="Qtymod"  required>
							  </div>
                                                      </div>		   
													   
													   
													  
                                                      <div class="form-actions">
							  <button type="submit" name="savemodif" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                                            </div>
                            </div>
					
			</div>
			</div>
			
			<div class="row-fluid">
				
				<div class="header">
                                <h1>Product Deletion</h1>
                            </div>
                                <div class="Product_Crud">
                                    <div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Delete Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
                                        <div class="box-content">
                                       <form method="POST" action="suppproduit.php" class="form-horizontal" enctype="multipart/form-data" >
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="Model_ref_Del">Category</label>
							  <div class="controls">
                                                              <select class="Model_Name_Del" id="Category_Name_Del" onchange="myFunction()">
                                                                  <option value="" >Choose Category</option>
																  <?php
	foreach ($list1 as $l1){
    ?>
<option><?php echo $l1['Nom_Category']  ?></option>

<?php
	}
	?>
                                                              </select>
							  </div>
							</div>
							
                                                      <div  class="control-group">
							  <label class="control-label" for="Model_Name_Del">Product</label>
							  <div class="controls" >
                                                              <select class="Model_Name_Del" id="Model_Name_Del" name="Model_Name_Del">
                                                                  <option value="" >Choose Product</option>
                                                              </select>
							  </div>
                                                          
                                                      </div>
                                                      <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
                                                      </div>
                                    </div>
                                         </div>
                                     </div>
		
			
			<div class="row-fluid">	

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
                            <a class="quick-button metro blue span2" href="Delivery.html">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->
			
       

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
