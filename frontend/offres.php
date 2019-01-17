
<div class="new">
	 <div class="container">
		
		 <!----debut bloc-->
		 
		 <div >
		 <table> <div class="new-items">
		
		 <?php
		foreach($resultat_offres as $cle)
						{
							?>
							
				
		<td><td><td>		<div class="item1">	
				 <a href="products.html"><img src="../222/img/images_offre/<?php echo $cle['photo_offre']?> " alt="" height="200" width="200"/></a>
				 <div class="item-info">
					 <h4><a href="products.html"><?php echo $cle['Type']?></a></h4>
					 <span><!--ID: SR5421--></span>
					 <a href="?detail=<?php echo $cle['ID_offer']?>">see offre</a>
				 </div>
			 </div></td></td></td>
			
			 
			 <br><br>
						<?php } ?>  
		  
		 <!--Fin bloc------>
			   
		 
			 
		
<!---->

<!---->

</div>			 
	 </div></table>
	 </div>
</div>
<!---->
