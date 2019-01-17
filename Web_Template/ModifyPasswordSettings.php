<?php

include ("CrudClient.php");
$cc = new CrudClient();
session_start();

if (isset($_POST['Submit'])) 
{
    
    $Pass = $_POST['NewPassword'];
    $RePass = $_POST['NewPassword2'];
    if ($Pass == $RePass) {
        $Email = $_SESSION['E'];
        $newClient = new Client($Email, $_POST['NewPassword']);
        $cc->modifyPassword($newClient, $cc->conn);
        header('location:indexLoggedIn.php');
    } else {
        //echo 'Ma mchetech';
    }
} else {
    $Email = $_SESSION['E'];
    $client = $cc->backupClient($Email, $cc->conn);
    //echo "ERROR";
    
}
?> 