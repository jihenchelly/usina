<?php
session_start();
include '../222/php/crudPromotion.php';
$cc=new crudPromotion();

 
				if($cc->addnewsletter())
					header("location:index.php?promotion");
				//echo 'ffff';
				else print 'erreur';
				
		
		?>