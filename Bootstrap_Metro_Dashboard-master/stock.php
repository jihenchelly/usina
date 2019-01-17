<?php



$dropdown=0;	
	
include ("crudproduit.php");
$cc=new crudproduit();

	$list=$cc->afficheproduit($cc->conn);


	foreach ($list as $l){
		
		
		$list1=$cc->affichecouleur($cc->conn,$l['Ref_Model']);
    foreach ($list1 as $l1){
	
	
	
	 $dropdown=$dropdown+($l['diametre']*$l['diametre']+$l['length']*$l['width'])*$l1['Qty'] ;
	
	
	}
	}
	
	
	
echo ($dropdown);






?> 

