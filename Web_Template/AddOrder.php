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
include ("./Crud_Orders.php");

$cc=new crudOrders(); //cnx dÃ©jÃ  Ã©tablie dans le constructeur de la classe crudChauffeur
//2-rÃ©cupÃ©rer les informations depuis le formulaire et crÃ©er un objet chauffeur Ã  insÃ©rer
if (isset($_POST['ID_Client']) and isset($_POST['Total_Price']) and  isset($_POST['ID_Cart'] )) //and isset($_POST['jour'])and isset($_POST['nuit']) )
{	
$Order=new Orders($_POST['ID_Client'],$_POST['Total_Price'],$_POST['ID_Cart']);

$cc->insertOrder($Order,$cc->conn);

echo $_POST['ID_Client']; 
echo $_POST['Total_Price'];
$_POST['ID_Cart'];
        var_dump($Order->getOrder_Price());
        var_dump($Order->getID_Client());
        var_dump($Order->getID_Cart());
        header("Location: http://localhost/Web_Template/CurrentOrder.php");
       // exit;
}
Else
{
        echo 'Destoyed!';}
//header('location:interfaceAjout.html');

?>
</body>
</html>