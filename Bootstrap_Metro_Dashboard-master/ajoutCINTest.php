<?php
    $servername="localhost";
		$dbname="usina";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",
		$username,$password);
/*********************************************************************************************************************/
//1- établir la cnx avec la base de données
//2- récupérer les informations depuis le formulaire
//3- créer un objet chauffeur et l'insérer dans la base [méthode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
/*

	if(empty($_POST['login']) || empty($_POST['Password']))
	{
		if(empty($_POST['login']))
		{
			echo "ERREUR : champ login non remplit ! \n";
		}
		if(empty($_POST['Password']))
		{
			echo "ERREUR : champ Password non remplit !";
		}
	}
	else
	{
		*/
		$cin=$_GET['cin'];
		$req=$conn->query('SELECT  cin from delivery_man where cin="'.$cin.'"');
		$result=$req->fetchAll();
		/*$car=$_GET['car'];
		$req2=$conn->query('SELECT car_registration_number from delivery_man where car_registration_number="'.$car.'"');
		$result2=$req2->fetchAll();
		*/
		
		if(count($result)!=0)
		{echo "this cin is used";}
	elseif(count($result)==0)
	{echo "ok";}
   /*elseif(count($result2)!=0)
	{echo "yes";}
	
	elseif(count($result2)==0)
	{echo "mchyes";}


	/*
	}

*/


?>