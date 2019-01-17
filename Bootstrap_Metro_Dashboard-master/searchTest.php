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
	
		
	
		$car=$_GET['search'];
		$req=$conn->query("SELECT * FROM delivery_man");
		$result=$req->fetchAll();
	
		

		echo "this car registration number is used";
	
   /*elseif(count($result2)!=0)
	{echo "yes";}
	
	elseif(count($result2)==0)
	{echo "mchyes";}


	/*
	}

*/


?>