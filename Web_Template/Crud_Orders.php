<?php
include ("./Configure2.php");
include ("Orders.php");
class crudOrders{
	public $conn;
	function __construct()
	{
		$o=new Configure2();
		$this->conn=$o->getConnection();
	}
function insertOrder($Order,$conn){
		
		$req1="INSERT INTO Orders (ID_Client,Order_Price,ID_Cart) 
		VALUES (".$Order->getID_Client().",".$Order->getOrder_Price().",".$Order->getID_Cart().")";
		echo $req1;
                $conn->query($req1);
                
		}

        function DisplayOrder($conn){
		$req="SELECT * FROM Orders";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}
        function EditOrder($Order,$conn){
		$req1="UPDATE Orders SET Order_Price='".$Order->getOrder_Price()."',Order_Date='".$Order->getOrder_Date()."' WHERE ID_Order=".$Order->getID_Order();
		$conn->exec($req1);
	}
        function DisplayCurrentOrder($conn,$ID_Client){
		$req="select * from Orders where `Order_Date` = (select max(`Order_Date`) from Orders where `ID_Client`=".$ID_Client.")";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}
	function DeleteOrder($ID_Order,$conn){
		$req1="DELETE FROM Orders where ID_Order=".$ID_Order;
		$conn->exec($req1);
        }
        
         
}
                ?>                