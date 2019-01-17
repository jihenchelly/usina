<?php

class delivery
{
	private $id_delivery;
	private $state;
	private $datee;
	private $id_driver;
	private $destination;
	
	
	
	function __construct($destination){
            
            	$this->destination=$destination;
	}
	
	function getDatee(){
		return $this->state;
		
	}
	function getName(){
		return $this->datee;
	}
		
		function getID_driver(){
		return $this->id_driver;
		}
		
		function getCar_registration_number(){
		return $this->car_registration_number;
		}
		
	function getDestination(){
		return $this->destination;
	}
		
	
		
		
	
	
}

?>