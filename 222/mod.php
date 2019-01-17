<?php 
							include ("php/crudPromotion.php");
							$cc=new crudPromotion();
							$pro=$cc->selectnom($_GET['nomPromotion'],$cc->conn);					
							//echo $_GET['nomPromotion']	;
							
							foreach ($pro as $p){}
							
							?>