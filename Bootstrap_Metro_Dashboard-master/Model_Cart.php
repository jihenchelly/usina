
<?php
class Model_Cart{
	//attributs
	public $ID_Cart;
	public $Ref_Model;
	public $Qty;
	
	//constructeur
	function __construct($ID_Cart,$Ref_Model,$Qty){
		$this->ID_Cart=$ID_Cart;
		$this->Ref_Model=$Ref_Model;
		$this->Qty=$Qty;
		
		
	}
	function getID_Cart(){
		return $this->ID_Cart;
	}
	function getRef_Model(){
		return $this->Ref_Model;
	}
	function getQty(){
		return $this->Qty;
	}
	
	
}
?>
