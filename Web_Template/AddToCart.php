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
if (isset($_POST['Ref']) and isset($_POST['Qty']) ) //and isset($_POST['jour'])and isset($_POST['nuit']) )
{    session_start();
$Model_Cart=new Model_Cart($_SESSION['C'],$_POST['Ref'],$_POST['Qty']);

$cc->insertMCart($Model_Cart,$cc->conn);

echo $_POST['Ref']; 
        echo $_POST['Qty'];
        var_dump($Model_Cart->getID_Cart());
        var_dump($Model_Cart->getQty());
        var_dump($Model_Cart->getRef_Model());
        header("Location: http://localhost/Web_Template/products.php");
        exit;
}
Else
{
        echo 'Destoyed!';}
//header('location:interfaceAjout.html');

?>
</body>
</html>