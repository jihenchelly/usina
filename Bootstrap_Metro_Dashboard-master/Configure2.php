<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Configure2 {
    
	function getConnection(){
		$servername="localhost";
		$dbname="usina";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
              //  echo 'Connecting...';
		return $conn;
	
        }

}
?>