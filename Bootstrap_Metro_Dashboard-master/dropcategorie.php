<?php

$q=$_GET['q'];

$dropdown="";	
	
include ("crudproduit.php");
$cc=new crudproduit();

	$list1=$cc->afficheproduitseloncategory($cc->conn,$q);


	foreach ($list1 as $l){
		
		
    
	
	
	
	
	 $dropdown=$dropdown.$l['Ref_Model']."-".$l['Name']."*" ;
	
	
	
	}
	
	
echo json_encode($dropdown);
?> 

