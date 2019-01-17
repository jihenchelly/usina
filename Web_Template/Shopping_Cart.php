<?php


class Cart{
	//attributs
	private $ID_Cart;
	private $Total_Price;
	private $ID_Client;
	//constructeur
	function __construct($ID_Cart,$Total_Price,$ID_Client){
		$this->ID_Cart=$ID_Cart;
		$this->Total_Price=$Total_Price;
                $this->ID_Client=$ID_Client;
		
	}
	function getID_Cart(){
		return $this->ID_Cart;
	}
	function getTotal_Price(){
		return $this->Total_Price;
	}
	function getID_Client(){
                return $this->ID_Client;
        }
	
}
?>

