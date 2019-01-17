<?php

include ("./Configure2.php");
class Stat_Clients{
	public $conn;
	function __construct()
	{
		$c=new Configure2();
		$this->conn=$c->getConnection();
}

function Stats($conn,$Gender)
        {
            $req="select COUNT(*) As N from clients where Sex='".$Gender."'";
		$rep=$conn->query($req);
		return $rep->fetchAll(pdo::FETCH_OBJ);
        }

        }

?>