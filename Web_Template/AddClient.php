<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php

include ("CrudClient.php");
include './Crud_Shopping_Cart.php';
//include ("Authentication.php");
$cc=new CrudClient();
$Shop= new crudCart();
$sex="";
if (isset($_POST['Choice'])){$sex=$_POST['Choice'];} else {$sex="";};
if (isset($_POST['First_Name']) and isset($_POST['Last_Name'])and isset($_POST['Email']) and isset($_POST['Password'])) 
{
$client=new Client($_POST['First_Name'],$_POST['Last_Name'],$_POST['Choice'],$_POST['Email'],$_POST['Password']);
$list=$cc->check($client,$cc->conn);

foreach($list as $l)
{if($l->TEST==0)
{$cc->insertClient($client, $cc->conn);
$M=$cc->clients_ID($cc->conn, $_POST['Email']);
//var_dump($list);
var_dump($M);
foreach ($M as $Med){
$ID= intval($Med['ID_Client']);
$ID_Cart=$ID +100;
//$C= new Cart($ID_Cart, 0, $ID);
$Shop->AddCart($ID_Cart, 0, $ID, $Shop->con);
//var_dump($C);
var_dump($Med);}
var_dump($client);
//header('location:MyAccountSettings.php');
}
else {echo'FAIL';
//header('location:index.php');
}
}


//var_dump($client);
session_start();
		$_SESSION['E']=$_POST['Email'];
		$_SESSION['P']=$_POST['Password'];

//header('location:MyAccountSettings.php?Email='.$var);




}
else{
	echo "FAIL!!!";
}

 
?>
</body>
</html>