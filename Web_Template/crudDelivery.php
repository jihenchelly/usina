<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 
include ("config3.php");
include ("delivery.php");
class crudDelivery{
	public $conn;
	function __construct()
	{
		
		$c=new config3();
		$this->conn=$c->getConnexion();
	}
	function AddDelivery($delivery,$conn){
			
		$req="INSERT INTO `delivery`(`Destination`) VALUES ('".$delivery->getDestination()."')";
		$conn->query($req);
                var_dump($req);
        }
	function displayDelivery($conn){
	//	$req="SELECT D.id_delivery,D.state,D.cin_driver,CM.Order_Date,C.First_Name,C.Last_name,CM.ID_Order,D.destination from delivery D INNER join orders CM on D.id_delivery=CM.ID_Order INNER join clients C on CM.ID_Client=C.ID_Client WHERE D.STATE='pending' or D.STATE='in progress'";
		$req="SELECT D.id_delivery,D.state,D.cin_driver,CM.Order_Date,C.First_Name,C.Last_name,CM.ID_Order,D.destination from delivery D INNER join orders CM on D.id_delivery=CM.ID_Order INNER join clients C on CM.ID_Client=C.ID_Client ";

		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	function loadDelivery($id_delivery,$conn){
		
		$req="SELECT D.id_delivery,D.state,CM.Order_Date,C.First_Name,C.Last_name,CM.ID_Order,D.destination from delivery D INNER join orders CM on D.id_delivery=CM.ID_Order INNER join clients C on CM.ID_Client=C.ID_Client WHERE D.id_delivery=".$id_delivery;
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function loadDelivery_man($destination,$conn){
		
		$req='SELECT cin FROM delivery_man  WHERE availability="yes" and destination="'.$destination.'"' ;
		$chauf=$conn->query($req);
		return $chauf->fetchAll();
	}
	
		function startDelivery($driver,$id_delivery,$conn){
			
		$req="UPDATE delivery SET cin_driver='".$driver."', state='in progress' WHERE id_delivery=".$id_delivery;
		$conn->query($req);
		$req2="UPDATE delivery_man SET availability='no' WHERE cin=".$driver;
		$conn->query($req2);
	}
		function finishDelivery($driver,$id_delivery,$conn){
			
		$req="UPDATE delivery SET  state='finished' WHERE id_delivery=".$id_delivery;
		$conn->query($req);
		$req2="UPDATE delivery_man SET availability='yes' WHERE cin=".$driver;
		$conn->query($req2);
	}
	function recupDelivery($id_delivery,$conn) {
		echo $id_delivery;
	$req="SELECT C.email FROM clients C INNER JOIN orders O ON O.ID_Client=C.ID_Client INNER JOIN delivery D ON D.id_delivery=O.ID_Delivery WHERE D.id_delivery=".$id_delivery;
	$del=$conn->query($req);
	return $del->fetchAll();
	}
}

?>