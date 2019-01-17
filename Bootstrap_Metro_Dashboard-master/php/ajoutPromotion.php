<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
/*********************************************************************************************************************/
//1- établir la cnx avec la base de données
//2- récupérer les informations depuis le formulaire
//3- créer un objet chauffeur et l'insérer dans la base [méthode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
include ("crudPromotion.php");


$cc=new crudPromotion(); //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer



if ( isset($_POST['dateD_promo_add'])and isset($_POST['dateF_promo_add']) and isset($_POST['idProduit_promo_add']) and isset($_POST['pourcentage_promo_add']) ) 
{
	$now = $_POST['dateD_promo_add']; 

								$expire = $_POST['dateF_promo_add'];

								// format the 2 dates using DateTime
								$now = new DateTime( $now );
								$now = $now->format("Ymd");
								$expire = new DateTime( $expire );
								$expire = $expire->format("Ymd");
								//echo $now.'<br>';
								//echo $expire.'<br>';
								if($expire>$now) 
								{	
							
$prom=new promotion($_POST['dateD_promo_add'],$_POST['dateF_promo_add'],$_POST['idProduit_promo_add'],$_POST['pourcentage_promo_add']);	

if($cc->insertPromotion($prom,$cc->conn))
header("location:../afficher_promos.php");
else 
								{
							     //redirection avec javascript
								 echo "<script>document.location.href='../ajout promo offr1.php?erreur'</script>";
								}

}
								
								else 
								{print "<script>alert('Date End lower then Date Begin')</script>";
							     //redirection avec javascript
								 echo "<script>document.location.href='../ajout promo offr1.php'</script>";
								}
							  
}


?>
</body>
</html>