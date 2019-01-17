<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
/*********************************************************************************************************************/
//1- Ã©tablir la cnx avec la base de donnÃ©es
//2- rÃ©cupÃ©rer les informations depuis le formulaire
//3- crÃ©er un objet chauffeur et l'insÃ©rer dans la base [mÃ©thode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
include ("./Crud_Model_Cart.php");

$cc=new crudMCart(); //cnx dÃ©jÃ  Ã©tablie dans le constructeur de la classe crudChauffeur
//2-rÃ©cupÃ©rer les informations depuis le formulaire et crÃ©er un objet chauffeur Ã  insÃ©rer
if (isset($_POST['Ref_Model']) )//and isset($_POST['jour'])and isset($_POST['nuit']) )
{	


$cc->DeleteMCart($_POST['Ref_Model'],$cc->conn);

echo $_POST['Ref_Model']; 
 echo 'Deleted !'; 
        header("Location: http://localhost/Web_Template/Cart.php");
        }
Else
{
        echo 'Destoyed!';}
        header("Location: http://localhost/Web_Template/cart.php");


?>
</body>
</html>