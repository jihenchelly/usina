<?php
class Client{
	//attributs
	private $First_Name;
	private $Last_Name;
	private $Sex;
	private $Email;
        private $Password;
        private $CIN;
        private $Street;
        private $Region;
        private $Birthdate;
        private $Phone;
        
       
     
         function __construct() {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    function __construct5($First_Name,$Last_Name,$Sex,$Email,$Password) {
                $this->First_Name=$First_Name;
		$this->Last_Name=$Last_Name;
		$this->Sex=$Sex;
		$this->Email=$Email;
                $this->Password=$Password;
    }
    function __construct9($First_Name,$Last_Name,$Sex,$Email,$CIN,$Street,$Region,$Birthdate,$Phone) {
                $this->First_Name=$First_Name;
		$this->Last_Name=$Last_Name;
		$this->Sex=$Sex;
		$this->Email=$Email;
                $this->CIN=$CIN;
		$this->Street=$Street;
		$this->Region=$Region;
                $this->Birthdate=$Birthdate;
                $this->Phone=$Phone;
    }
    function __construct4($First_Name,$Last_Name,$Sex,$Email) {
                $this->First_Name=$First_Name;
		$this->Last_Name=$Last_Name;
		$this->Sex=$Sex;
		$this->Email=$Email;
             
    }
    

    function __construct2($Email,$Password) {
        $this->Email=$Email;
        $this->Password=$Password;
    }  
    function __construct1($Password) {
        $this->Password=$Password;
    }
        function getCIN(){
		return $this->CIN;
	}
	function getFirstName(){
		return $this->First_Name;
	}
	function getLastName(){
		return $this->Last_Name;
	}
	function getSex(){
		return $this->Sex;
	}
	function getEmail(){
		return $this->Email;
	}
	function getPassword(){
		return $this->Password;
	}
        function getStreet(){
		return $this->Street;
	}
        function getRegion(){
		return $this->Region;
	}
        function getBirthdate(){
		return $this->Birthdate;
	}
        function getPhone(){
		return $this->Phone;
	}
}
?>