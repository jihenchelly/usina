<?php
class config3{
	function getConnexion(){
		$servername="localhost";
		$dbname="usina";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		return $conn;
	}
}

?>