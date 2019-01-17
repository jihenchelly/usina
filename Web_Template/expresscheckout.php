<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
/*********************************************************************************************************************/
//1- Ã©tablir la cnx avec la base de donnÃ©es
//2- rÃ©cupÃ©rer les informations depuis le formulaire
//3- crÃ©er un objet chauffeur et l'insÃ©rer dans la base [mÃ©thode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
include ("./Crud_Orders.php");
include './crudDelivery.php';
include './Crud_Model_Cart.php';
require  'paypalfunctions.php';
$cc=new crudOrders(); 
$cd=new crudDelivery();
$CM=new crudMCart();
if (isset($_POST['ID_Client']) and isset($_POST['Total_Price']) and  isset($_POST['ID_Cart'] ) and isset($_POST['Payment']) and isset($_POST['Delivery'])) //and isset($_POST['nuit']) )
{	
$Order=new Orders($_POST['ID_Client'],$_POST['Total_Price'],$_POST['ID_Cart']);
$Delivery=new delivery($_POST['Destination']);
var_dump($Delivery);
$cc->insertOrder($Order,$cc->conn);
$CM->EmptyMCart($_POST['ID_Cart'], $CM->conn);
if($_POST['Delivery']=="Yes")
{
    $cd->AddDelivery($Delivery, $cd->conn);


echo $_POST['ID_Client']; 
echo $_POST['Total_Price'];
echo $_POST['Payment'];
$_POST['ID_Cart'];
        var_dump($Order->getOrder_Price());
        var_dump($Order->getID_Client());
        var_dump($Order->getID_Cart());
$_SESSION["Payment_Amount"]=$_POST['Total_Price'];
$_SESSION["Payment_Option"]=$_POST['Payment'];

//// ==================================
//// PayPal Express Checkout Module
//// ==================================
//
////'------------------------------------
////' The paymentAmount is the total value of 
////' the shopping cart, that was set 
////' earlier in a session variable 
////' by the shopping cart page
////'------------------------------------
$paymentAmount = $_SESSION["Payment_Amount"];
echo $paymentAmount;
////'------------------------------------
////' The currencyCodeType and paymentType 
////' are set to the selections made on the Integration Assistant 
////'------------------------------------
$currencyCodeType = "EUR";
$paymentType = "Sale";
//
////'------------------------------------
////' The returnURL is the location where buyers return to when a
////' payment has been succesfully authorized.
////'
////' This is set to the value entered on the Integration Assistant 
////'------------------------------------
$returnURL = "http://localhost/Web_Template/CurrentOrder.php";
//
////'------------------------------------
////' The cancelURL is the location buyers are sent to when they hit the
////' cancel button during authorization of payment during the PayPal flow
////'
////' This is set to the value entered on the Integration Assistant 
////'------------------------------------
$cancelURL = "http://localhost/Web_Template/cart.php";
//
////'------------------------------------
////' Calls the SetExpressCheckout API call
////'
////' The CallShortcutExpressCheckout function is defined in the file PayPalFunctions.php,
////' it is included at the top of this file.
////'-------------------------------------------------
header("Location: http://localhost/Web_Template/Billing.php");
$resArray = CallShortcutExpressCheckout ($paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL);
$ack = strtoupper($resArray["ACK"]);
if($ack=="SUCCESS" || $ack=="SUCCESSWITHWARNING")
{
	RedirectToPayPal ( $resArray["TOKEN"] );
}
else  
{
	//Display a user friendly Error on the page using any of the following error information returned by PayPal
	$ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
	$ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
	$ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
	$ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);
	
	echo "SetExpressCheckout API call failed. ";
	echo "Detailed Error Message: " . $ErrorLongMsg;
	echo "Short Error Message: " . $ErrorShortMsg;
	echo "Error Code: " . $ErrorCode;
	echo "Error Severity Code: " . $ErrorSeverityCode;
}
       echo 'Location: http://localhost/Web_Template/CurrentOrder.php';
        exit;

}
}
Else
{
        echo 'Destoyed!';}




?>
</body>
</html>