<?php
class Promos
{
    public function __construct()
	{
	   $servername="localhost";
		$dbname="usina";
		$username="root";
		$password="";
		$this->conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	
	}
	
 


}