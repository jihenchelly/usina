<?php
include './config.php';
include ("./Model_Cart.php");

class crudMCart{
	public $conn;
	function __construct()
	{
		$o=new config();
		$this->conn=$o->getConnexion();
	}
        
function insertMCart($Model_Cart,$conn){	
		$req2="INSERT INTO `model_cart`(`ID_Cart`, `Ref_Model`, `Qty`) 
		VALUES (".$Model_Cart->getID_Cart().",".$Model_Cart->getRef_Model().",".$Model_Cart->getQty().")";
		echo $req2;
                $conn->query($req2);
                //var_dump($Model_Cart);
		}
        function DisplayMCart($conn,$ID_Cart){
		$req="SELECT * FROM Model_Cart inner join models on Model_Cart.Ref_Model=Models.Ref_Model join Cart on Model_Cart.ID_Cart=Cart.ID_Cart WHERE Cart.ID_Cart=".$ID_Cart;
                $liste=$conn->query($req);
                //var_dump($liste);
		return $liste->fetchAll(PDO::FETCH_OBJ);
	}
        function EditMCart($Qty,$Ref_Model,$conn){
		$req1="UPDATE Model_Cart SET Qty='".$Qty."' WHERE Ref_Model=".$Ref_Model;
		$conn->exec($req1);
	}
	function DeleteMCart($Ref_Model,$conn){
		$req1="DELETE FROM Model_Cart where Ref_Model=".$Ref_Model;
		$conn->exec($req1);
        }
        function CalculateSUM($ID_Cart,$conn)
        {
               $req1="SELECT SUM( Models.`Price` * Model_Cart.`Qty` ) as `Total` FROM Model_Cart INNER JOIN Models ON Model_Cart.Ref_Model = Models.Ref_Model JOIN Cart ON Model_Cart.ID_Cart = Cart.ID_Cart WHERE model_Cart.ID_Cart=".$ID_Cart;         
               $liste=$conn->query($req1);
               //var_dump($liste);
		return $liste->fetchAll(PDO::FETCH_OBJ);
               
        }
}
                ?>                
