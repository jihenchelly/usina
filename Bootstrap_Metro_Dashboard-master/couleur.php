<?php
class couleur{
	//attributs
	protected $id;
	protected $hex;
	protected $blue;
	protected $green;
	protected $red;
	

	
	
	function __construct($id,$hex,$blue,$green,$red){
		$this->id=$id;
		$this->hex=$hex;
		$this->blue=$blue;
		$this->green=$green;
		$this->red=$red;
		
	}
	function getid(){
		return $this->id;
	}
	function getHex(){
		return $this->hex;
	}
	function getblue(){
		return $this->blue;
	}
	function getgreen(){
		return $this->green;
	}
	function getred(){
		return $this->red;
	}
	
}


?>