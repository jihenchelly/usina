<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php

$q=$_GET['q'];
$p1=$_GET['p1'];


	
include ("crudproduit.php");
$cc=new crudproduit();


$list1=$cc->affichagepagination($cc->conn,$q,$p1+1);

	$list=$cc->affichagepagination($cc->conn,$q,$p1);	

   
	$nmbr=0;
if($list1==NULL)
$nmbr=1;

	
	
if($list!=NULL)	
{
	?>
	
	
<div class="control-group">
										<table>
                                       <tr>
	<td>Reference</td><td>Category_Name</td><td>Name</td><td>Price</td><td>Photo</td><td>mark</td><td>review number</td><td>fidelity value</td><td>description</td><td>dimensions</td>
	</tr>
	<?php
}

else
	echo "No element found";
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
</body>
</html>	
	
	
	


