<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 
include ("config.php");
include ("delivery_man.php");
class crudDelivery_man{
	public $conn;
	function __construct()
	{
		
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	function insertDelivery_man($chauf,$conn){
	
		$req="INSERT INTO delivery_man (cin,name,first_name,car_registration_number,destination,telephone) 
		VALUES (".$chauf->getCin().",'".$chauf->getName()."','".$chauf->getFirst_name().
		"','".$chauf->getCar_registration_number()."','".$chauf->getDestination()."','".$chauf->getTelephone()."')";
		$conn->query($req);
		
	}
	function displayDelivery_man($conn){
		$req="SELECT * FROM delivery_man";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function modifyDelivery_man($chauf,$conn){
		$req="UPDATE delivery_man SET name='".$chauf->getName()."',first_name='".$chauf->getFirst_name()."',car_registration_number='".$chauf->getCar_registration_number()."',destination='".$chauf->getDestination()."',telephone='".$chauf->getTelephone()."' WHERE cin=".$chauf->getCin();
		$conn->exec($req);
		
	}
	
	function recupDelivery_man($cin,$conn){
		
		$req="SELECT name,first_name,car_registration_number,destination,telephone FROM delivery_man  WHERE cin=".$cin;
		$chauf=$conn->query($req);
		return $chauf->fetchAll();
		
		
	}
	
	
	function deleteDelivery_man($cin,$conn){
		
		$req="DELETE FROM delivery_man where cin=".$cin;
		$conn->exec($req);
		
	}
	
}

?>