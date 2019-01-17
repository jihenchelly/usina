<?php

include './Configure.php'; 
include './Shopping_Cart.php';
class crudCart{
	public $con;
	function __construct()
	{
		$o=new Configure();
		$this->con=$o->getConnection();
	}
        function AddCart($ID_Cart,$Total_Price,$ID_Client,$conn){
	
		$req2="INSERT INTO cart(`ID_Cart`, `Total_Price`, `ID_Client`) 
		VALUES (".$ID_Cart.",".$Total_Price.",".$ID_Client.")";
		
                $conn->query($req2);
                //var_dump($Model_Cart);
		}
function insertCart($Model_Cart,$conn){
		echo 'hhhgggu';
		$req2="INSERT INTO `model_cart`(`ID_Cart`, `Ref_Model`, `Qty`) 
		VALUES (".$Model_Cart->getID_Cart().",".$Model_Cart->getRef_Model().",".$Model_Cart->getQty().")";
		
                $conn->query($req2);
                //var_dump($Model_Cart);
		}
        function DisplayCart($con,$ID_Cart){
		$req="SELECT * FROM Cart inner join Clients on Cart.ID_Client=Clients.ID_Client where Clients.ID_Client=".$ID_Cart;
                $Cart=$con->query($req);
		return $Cart->fetchAll(PDO::FETCH_OBJ);
        }
        function EditCart($PriceT,$ID_Cart,$con){
		$req1="UPDATE Cart SET Total_Price=".$PriceT." WHERE ID_Cart=".$ID_Cart;
		//$conn->exec($req1);
                $Cart=$con->query($req1);
		return $Cart->fetchAll(PDO::FETCH_OBJ);
	}
	function DeleteCart($ID_Cart,$conn){
		$req1="DELETE FROM Cart where ID_Cart=".$ID_Cart;
		$conn->exec($req1);
        }
         
}
                ?>                
