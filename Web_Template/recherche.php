<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php

$q=$_GET['q'];


	
include ("crudproduit.php");
$cc=new crudproduit();




	$list=$cc->recherche($cc->conn,$q);	

   
		
	
if($list!=NULL)	
{
	
	foreach ($list as $l)
	
	{
		
		
    ?>
	 <a href="single.html"><div class="product-grid love-grid">
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
								<h4><?php echo $l['Name'] ?></h4>
								<p>Reference: <?php echo $l['Ref_Model'] ?></p>
								<span class="item_price"><?php echo $l['Price'] ?></span>								
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add items" value="ADD">
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>	
					
					
					
	
	
	
	
	
	</tr>
	
	
	
	
	
	<?php
	}
	
}

else
	echo "No element found";
	
?>	
</body>
</html>	
	
	
	


