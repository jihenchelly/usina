<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php

include ("./Crud_Model_Cart.php");

$cc=new crudMCart(); 
if (isset($_POST['Ref_Model'])and isset($_POST['quantity']) )
{	


$cc->EditMCart($_POST['quantity'],$_POST['Ref_Model'],$cc->conn);

echo $_POST['Ref_Model']; 
echo $_POST['quantity'];
echo 'Edited !';
        header("Location: http://localhost/Web_Template/Cart.php");
        }
Else
{
        echo 'Destoyed!';}
//header('location:interfaceAjout.html');

?>
</body>
</html>