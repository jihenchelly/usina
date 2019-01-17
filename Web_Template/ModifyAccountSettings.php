<?php
include ("CrudClient.php");
$cc=new CrudClient();
session_start();
if (isset($_POST['SubmitChanges']))
    {  $temp2=$_SESSION['E'];
	$newClient=new Client($_POST['First_Name'],$_POST['Last_Name'],$_POST['Sex'],$_POST['Email'],$_POST['CIN'],$_POST['Street'],$_POST['Region'],$_POST['Birthdate'],$_POST['Phone']);
         var_dump($newClient);
        $cc->modifyClient($newClient,$temp2,$cc->conn);
        var_dump($_SESSION['E']);
        $_SESSION['E']=$_POST['Email'];
        var_dump($_SESSION['E']);
        header('location:indexLoggedIn.php');
}
else {
    $Email=$_SESSION['E'];
$client=$cc->backupClient($Email,$cc->conn);
//var_dump($client);
} ?> 