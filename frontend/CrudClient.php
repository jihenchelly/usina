<?php
include ("Connection.php");
include ("Client.php");

class CrudClient{
	public $conn;
	function __construct()
	{
		$c=new Config();
		$this->conn=$c->getConnexion();
	}
        function check($client,$conn){
            $temp= $client->getEmail();
		$req2="SELECT COUNT(*) as TEST FROM clients WHERE Email='$temp'";
                $test=$conn->query($req2);
                echo $req2;
                return $test->fetchAll(PDO::FETCH_OBJ);
               		}
	function insertClient($client,$conn){
            $req="INSERT INTO clients (First_Name,Last_Name,Sex,Email,Password) 
		VALUES ('".$client->getFirstName()."','".$client->getLastName()."','".$client->getSex()."','".$client->getEmail()."','".$client->getPassword()."')";
		$conn->exec($req);
                               		}
	function displayClient($conn){
		$req="SELECT Email FROM clients";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function backupClient($Email,$conn){
		
		$req="SELECT First_Name,Last_Name,Sex,Email,Password FROM clients WHERE Email='$Email'";
            	$liste=$conn->query($req);
		return $liste->fetchAll();
	}
	function modifyClient($client,$temp,$conn){
            //$temp= $client->getEmail();
		$req1="UPDATE clients SET First_Name='".$client->getFirstName()."',Last_Name='".$client->getLastName()."',Sex='".$client->getSex()."',Email='".$client->getEmail()."' WHERE Email='$temp'";
		$conn->exec($req1);
                echo $req1;
	
	}
        function modifyPassword($client,$conn){
            $temp= $client->getEmail();
		$req1="UPDATE clients SET Password='".$client->getPassword()."'WHERE Email='$temp'";
		$conn->exec($req1);
                //echo $req1;
	
	}
        function Log($conn,$Email,$Password)
	{
		$req="select * from clients where Email='$Email' and Password='$Password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
                
	}
        function clients_ID($conn,$Email)
	{
		$req="select ID_Client from clients where Email='$Email'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
                
	}
        

	/*function supprimerChauffeur($cin,$conn){
		$req1="DELETE FROM chauffeur where cin_personnel=".$cin;
		$req2="DELETE FROM personnel where cin=".$cin;
		$conn->exec($req1);
		$conn->exec($req2);
	}
		function rechercheChauffeur($cin,$conn){
		$req="SELECT nom,prenom,sexe,matricule,vehicule,horaire FROM personnel inner join chauffeur on personnel.cin=chauffeur.cin_personnel where personnel.cin=".$cin;
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}*/
}

?>