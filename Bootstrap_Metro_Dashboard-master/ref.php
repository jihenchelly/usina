
<?php

$q=$_GET['q'];



	
include ("crudproduit.php");
$cc=new crudproduit();


$rep=0;


$list=$cc->afficheproduit($cc->conn);
	

   
		
	

	
	foreach ($list as $l)
	
	{
		
		if($q==$l['Ref_Model'])
  $rep=1;
	
	
}


	echo json_encode($rep);
	
?>	

	
	


