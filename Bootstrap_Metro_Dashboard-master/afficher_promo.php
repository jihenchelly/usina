<?php
    include ("php/crudPromotion.php");


$cc=new crudPromotion(); 
$promos=$cc->getPromotion();
$row=count($promos);

?>
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