<?php
include ("CrudClient.php");
$cc=new CrudClient();

if (isset($_POST['delete']))
 { 

$cc->deleteClient($_POST["ID_Client"],$cc->conn);
header('location:../ClientsInterface.php');
}
else 
{ echo 'FAIL ';}


?>