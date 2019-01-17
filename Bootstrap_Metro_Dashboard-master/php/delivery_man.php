<?php

class delivery_man 
{
	private $cin;
	private $name;
	private $first_name;
	private $car_registration_number;
	private $destination;
	private $telephone;
	//private $availability;
	
	
	function __construct($cin,$name,$first_name,$car_registration_number,$destination,$telephone){

		$this->cin=$cin;
		$this->name=$name;
		$this->first_name=$first_name;
		$this->car_registration_number=$car_registration_number;
		$this->destination=$destination;
		$this->telephone=$telephone;
		//$this->name=$availability;
		
		
	}
	
	function getCin(){
		return $this->cin;
		
	}
	function getName(){
		return $this->name;
	}
		
		function getFirst_name(){
		return $this->first_name;
		}
		
		function getCar_registration_number(){
		return $this->car_registration_number;
		}
		
	function getDestination(){
		return $this->destination;
	}
		
		function getTelephone(){
		return $this->telephone;
		
		
		
	}
		
		
	
	
}

?>