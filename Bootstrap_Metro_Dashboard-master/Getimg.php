<?php
//include database connection
include ("config.php");
include ("typography.php");
//select the image
$conn= new config();
$conn->getConnexion();
$query = "select Test4 from test WHERE Test1 = ?";
$stmt = $conn->prepare( $query );

//bind the id of the image you want to select
$stmt->bindParam(2, $_GET['Test1']);
$stmt->execute();
echo '<h1> Mounir </h1>';
//to verify if a record is found
$num = $stmt->rowCount();
if( $num ){
	//if found
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	//specify header with content type, 
	//you can do header("Content-type: image/jpg"); for jpg, 
	//header("Content-type: image/gif"); for gif, etc.
	header("Content-type: image/png");
	
	//display the image data
	print $row['data'];
	exit;
}else{
	//if no image found with the given id,
	
        //load/query your default image here
}
?>