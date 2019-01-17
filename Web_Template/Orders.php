<?php
class Orders{
	//attributs
	private $ID_Order;
	private $Order_Date;
	private $Order_Price;
	private $ID_Client;
        private $ID_Delivery;
        private $ID_Cart;
        //constructeur
	function __construct($ID_Client,$Order_Price,$ID_Cart){
		
                $this->Order_Price=$Order_Price;
		$this->ID_Client=$ID_Client;
                $this->ID_Cart=$ID_Cart;
		
		
	}
	function getID_Order(){
		return $this->ID_Order;
	}
	function getOrder_Date(){
		return $this->Order_Date;
	}
	function getOrder_Price(){
		return $this->Order_Price;
	}
        function getID_Client(){
		return $this->ID_Client;
	}
        function getID_Delivery(){
		return $this->ID_Delivery;
	}
        function getID_Cart(){
		return $this->ID_Cart;
	}
	
}
?>
