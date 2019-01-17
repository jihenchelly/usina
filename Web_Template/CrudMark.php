<?php
include ("Connection2.php");
include ("Marks.php");

class CrudMark{
	public $conn;
	function __construct()
	{
		$c=new config2();
		$this->conn=$c->getConnexion2();
	}
        
	function insertMarks($marks,$conn){
            $req="INSERT INTO marks (Value,Ref_Model,ID_Client) 
		VALUES ('".$marks->getValue()."','".$marks->getRef_Model()."','".$marks->getID_Client()."')";
		$conn->exec($req);
                               		}
         
	function averageMarks($conn){
		$req="SELECT ROUND(AVG(Value)/5) as avg FROM marks";
		$liste=$conn->query($req);
		return $liste->fetchAll();
                var_dump($liste);
		
	}
	
	
}

?>