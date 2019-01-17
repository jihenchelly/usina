<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
include ("CrudClient.php");
include ("CrudMark.php");

//include ("Authentication.php");
$cc=new CrudClient(); 
session_start();
$cc1=new CrudMark();
$mark="";
$Email=$_SESSION['E'];
echo $Email;
echo 'rate here';
echo $_POST['stars-rating'];
$ID_Cl=$cc->clients_ID($cc->conn,$Email);
var_dump($ID_Cl);
echo $_POST['Ref_Model'];
foreach ($ID_Cl as $Cl)
if (isset($_POST['stars-rating']) and isset($_POST['Ref_Model'])) 
{
    echo $Cl['ID_Client'];
$mark=new Mark($_POST['stars-rating'],$_POST['Ref_Model'],$Cl['ID_Client']);
$cc1->insertMarks($mark, $cc1->conn);
var_dump($mark);

}
/*foreach($list as $l)
{if($l->TEST==0)
{$cc->insertClient($client, $cc->conn);
header('location:MyAccountSettings.php');
}
else {echo'FAIL';
header('location:index.php');
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
}*/

 
?>
</body>
</html>