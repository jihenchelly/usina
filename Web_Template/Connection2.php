<?php
class config2 {
function getConnexion2(){
$servername = "localhost";
$username = "root";
$dbname="usina";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    return $conn;
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}
}
?>