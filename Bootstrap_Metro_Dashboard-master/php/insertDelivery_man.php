<?php
/*********************************************************************************************************************/
//1- établir la cnx avec la base de données
//2- récupérer les informations depuis le formulaire
//3- créer un objet chauffeur et l'insérer dans la base [méthode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/

include 'crudDelivery_man.php';

$cc=new crudDelivery_man(); //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer
$destination="";



if (isset($_POST['delivery_man_Name_add']) and isset($_POST['delivery_man_First_name_add'])and isset($_POST['delivery_man_CIN_add']) and isset($_POST['delivery_man_Car_add']) and isset($_POST['delivery_man_Destination_add']) and isset($_POST['delivery_man_Tel_add']) ) //and isset($_POST['jour'])and isset($_POST['nuit']) )
{
	

$chauf=new delivery_man($_POST['delivery_man_CIN_add'],$_POST['delivery_man_Name_add'],$_POST['delivery_man_First_name_add'],$_POST['delivery_man_Car_add'],$_POST['delivery_man_Destination_add'],$_POST['delivery_man_Tel_add']);	

$cc->insertDelivery_man($chauf,$cc->conn);
header('location:../submenu2.php');

}
else{
	echo "nope";
}
?>
