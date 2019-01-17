<?php
    include ("php/crudOffre.php");


$cc=new crudOffre(); 
$off=$cc->rechercheOffre();
$row=count($off);

?> 
 <div  id="resultat_offre">
						
						
						
						 <div  id="resultat_offre">
						<table border=1 width=100% style="margin-bottom:50px">
						<tr>
							<td>Id</td><td>Type of offers</td><td>Date begin</td>	<td>Date End</td>	<td>Product</td>	<td>Picture</td> <td>Description</td> <td>Modify Offer</td>	<td>Delete Offer</td>
							</tr>
							
							<?php 
							if($row>0)
							{
								$i=0;
							foreach($resultas as $res)
							{
								$i=$i+1;
								?>
								<tr>
								
								<td><?php echo $i?></td>
								<td><?php echo $res['Type']?></td>
								<td><?php echo $res['Offer_Start_Date']?></td>	
								<td><?php echo $res['Offer_End_Date']?></td>	<td><?php echo $res['Name_Category']?></td>
								<td><img src="img/images_offre/<?php echo $res['photo_offre']?>" width="75" height=75/></td>
								<td><?php echo $res['description_offre']?></td>
								<td><a href="?modif=<?php echo $res['ID_offer']?>">Modify</a></td>	
								<td><a onclick="if(!confirm('do you want to delete this Offer')) return false" href="?param=<?php echo $res['ID_offer']?>">Delete</a></td>
								</tr>
							<?php
							
							}
							}
							if($row==0){?>
								
								<tr height=80></td></tr>
								
							<?php
							}
							
							?>
							</table>
							</div>
							</div>
		
						
						
						
						
						
						
						
						
						<!--<table border=1 width=100% style="margin-bottom:50px">
						<tr>
							<td>Id</td><td>Date begin</td>	<td>Date End</td>	<td>Promotion</td>	<td>Product</td>	<td>Modify promotion</td>	<td>Delete Promotion</td>
							</tr>
							
							<?php 
							/*if($row>0)
							//{
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
							