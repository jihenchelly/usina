
<?php
/*********************************************************************************************************************/
//1- établir la cnx avec la base de données
//2- récupérer les informations depuis le formulaire
//3- créer un objet chauffeur et l'insérer dans la base [méthode d'insertion dans la base dans la classe chauffeur ]
/*********************************************************************************************************************/
include ("crudproduit.php");
include ("crudcouleur.php");
$cc=new crudproduit();
$cc1=new crudcouleur();
 //cnx déjà établie dans le constructeur de la classe crudChauffeur
//2-récupérer les informations depuis le formulaire et créer un objet chauffeur à insérer

$path="imagesproduits/"; 
$path=$path.basename($_FILES["pic"]["name"]);
if($_POST['diametre01']=="")		
$prod=new produit($_POST['Model_Name_add'],$_POST['Model_reference_add'],$_POST['value01'],$_POST['Category_Name'],$_POST['height01'],$_POST['length01'],$_POST['width01'],$_POST['Price01'],$_POST['Desc01'],$path,0);	
else
$prod=new produit($_POST['Model_Name_add'],$_POST['Model_reference_add'],$_POST['value01'],$_POST['Category_Name'],$_POST['height01'],0,0,$_POST['Price01'],$_POST['Desc01'],$path,$_POST['diametre01']);		

$cc->insertproduit($prod,$cc->conn);


$ch1=substr($_POST['Color01'],1,1);
$ch2=substr($_POST['Color01'],2,1);
$ch3=substr($_POST['Color01'],3,1);
$ch4=substr($_POST['Color01'],4,1);
$ch5=substr($_POST['Color01'],5,1);
$ch6=substr($_POST['Color01'],6,1);





if(substr($_POST['Color01'],1,1)=="a")
$ch1=10;
if(substr($_POST['Color01'],1,1)=="b")
$ch1=11;
if(substr($_POST['Color01'],1,1)=="c")
$ch1=12;
if(substr($_POST['Color01'],1,1)=="d")
$ch1=13;
if(substr($_POST['Color01'],1,1)=="e")
$ch1=14;
if(substr($_POST['Color01'],1,1)=="f")
$ch1=15;


if(substr($_POST['Color01'],2,1)=="a")
$ch2=10;
if(substr($_POST['Color01'],2,1)=="b")
$ch2=11;
if(substr($_POST['Color01'],2,1)=="c")
$ch2=12;
if(substr($_POST['Color01'],2,1)=="d")
$ch2=13;
if(substr($_POST['Color01'],2,1)=="e")
$ch2=14;
if(substr($_POST['Color01'],2,1)=="f")
$ch2=15;

if(substr($_POST['Color01'],3,1)=="a")
$ch3=10;
if(substr($_POST['Color01'],3,1)=="b")
$ch3=11;
if(substr($_POST['Color01'],3,1)=="c")
$ch3=12;
if(substr($_POST['Color01'],3,1)=="d")
$ch3=13;
if(substr($_POST['Color01'],3,1)=="e")
$ch3=14;
if(substr($_POST['Color01'],3,1)=="f")
$ch3=15;

if(substr($_POST['Color01'],4,1)=="a")
$ch4=10;
if(substr($_POST['Color01'],4,1)=="b")
$ch4=11;
if(substr($_POST['Color01'],4,1)=="c")
$ch4=12;
if(substr($_POST['Color01'],4,1)=="d")
$ch4=13;
if(substr($_POST['Color01'],4,1)=="e")
$ch4=14;
if(substr($_POST['Color01'],4,1)=="f")
$ch4=15;

if(substr($_POST['Color01'],5,1)=="a")
$ch5=10;
if(substr($_POST['Color01'],5,1)=="b")
$ch5=11;
if(substr($_POST['Color01'],5,1)=="c")
$ch5=12;
if(substr($_POST['Color01'],5,1)=="d")
$ch5=13;
if(substr($_POST['Color01'],5,1)=="e")
$ch5=14;
if(substr($_POST['Color01'],5,1)=="f")
$ch5=15;

if(substr($_POST['Color01'],6,1)=="a")
$ch6=10;
if(substr($_POST['Color01'],6,1)=="b")
$ch6=11;
if(substr($_POST['Color01'],6,1)=="c")
$ch6=12;
if(substr($_POST['Color01'],6,1)=="d")
$ch6=13;
if(substr($_POST['Color01'],6,1)=="e")
$ch6=14;
if(substr($_POST['Color01'],6,1)=="f")
$ch6=15;








$r=$ch1*16+$ch2;
$g=$ch3*16+$ch4;
$b=$ch5*16+$ch6;
$color=new couleur($_POST['colorname'],$_POST['Color01'],$r,$g,$b);	
$cc1->insertcouleur($color,$cc->conn);

$cc->insertcolor($cc->conn,$_POST['colorname'],$_POST['Model_reference_add'],$_POST['Qty01']);
 
   
 

   




echo "Insertion effectuée avec succès";



//header('location:interfaceAjout.html');

?>
