<?php
include ("./config.php");
class Statistique{
	public $conn;
	function __construct()
	{
		$c=new Config();
		$this->conn=$c->getConnexion();
        }
        function Stat_Delivery($conn,$Month){
                $req1="SELECT COUNT(*) as D FROM Delivery WHERE MONTH( date )=".$Month;
                $liste=$conn->query($req1);
                var_dump($liste);
                return $liste->fetchAll(pdo::FETCH_OBJ);
                }

                
                
        }
        
        
     
        
        
        
        
        
        
        
        
        
        
        ?>
