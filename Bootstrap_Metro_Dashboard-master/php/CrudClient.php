<?php
include ("./config.php");
include ("Client.php");

class CrudClient{
	public $conn;
	function __construct()
	{
		$c=new Config();
		$this->conn=$c->getConnexion();
	}
	
	function displayClient($conn){
		$req="SELECT * FROM clients";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	function deleteClient($ID_Client,$conn){
		$req1="DELETE FROM clients where ID_Client=".$ID_Client;
		$conn->exec($req1);
	
	}
		function searchClient($x,$conn){
		$req="SELECT * FROM clients where First_Name LIKE '%".$x."%' OR Last_Name LIKE '%".$x."%' OR Email LIKE '%".$x."%'";
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
}

?>