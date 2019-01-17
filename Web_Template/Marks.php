<?php
class Mark{
	//attributs
	//private $ID_Mark;
	private $Value;
	private $Ref_Model;
        private $ID_Client;
	
	
	function __construct($Value,$Ref_Model,$ID_Client){
		
		//$this->ID_Mark=$ID_Mark;
		$this->Value=$Value;
		$this->Ref_Model=$Ref_Model;
		$this->ID_Client=$ID_Client;
             	}
         
        function getID_Mark(){
		return $this->ID_Mark;
	}
	function getValue(){
		return $this->Value;
	}
	function getRef_Model(){
		return $this->Ref_Model;
	}
	function getID_Client(){
		return $this->ID_Client;
	}
	
	
}
?>