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
include ("crudproduit.php");



$id=FILTER_INPUT(INPUT_GET,'refproduit');
$cc=new crudproduit(); //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer

	














$cc->supprimerproduit($id,$cc->conn);



 
   
 

   








//header('location:interfaceAjout.html');

?>

</body>
</html>