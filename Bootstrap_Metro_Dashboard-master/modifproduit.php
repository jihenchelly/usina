
<?php

$q=$_GET['q'];
$p1=$_GET['p1'];
	
	
include ("crudproduit.php");
$cc=new crudproduit();

	$list=$cc->affichecouleurprod($cc->conn,$p1,$q);


	
	foreach ($list as $l)
	
	{
		
	
	echo($l['Qty']);
	
	
	
	}
	

?> 

