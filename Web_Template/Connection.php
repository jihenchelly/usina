<?php
class Config{
	function getConnexion(){
		$servername="localhost";
		$dbname="test";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		return $conn;
	}
}

?>
