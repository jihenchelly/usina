<?php
include './Configure.php';
class Stat_Orders{
	public $conn;
	function __construct()
	{
		$c=new Configure();
		$this->conn=$c->getConnection();
        }

        
        
         function Stat_Orders($conn){
                $req1="SELECT SUM(  `Order_Price` ) as Stat FROM Orders GROUP BY MONTH( Order_Date ),YEAR( Order_Date ) ORDER BY MONTH( Order_Date ) ,YEAR( Order_Date )";
                $liste=$conn->query($req1);
                return $liste->fetchAll(pdo::FETCH_ASSOC);
                }
                
        }
?>