<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include ("CrudClient.php");
include './Crud_Shopping_Cart.php';
$cc=new CrudClient();
$CS= new crudCart();
$client1=new Client($_POST['Email'],$_POST['Password']);
//var_dump($client1);
$client1=$cc->Log($cc->conn,$_POST['Email'],$_POST['Password']);

header($string);


	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['Email']) && !empty($_POST['Password'])){
    echo '111111S';
	foreach($client1 as $cl){
		$vide=true;
                echo '22222';
             // echo  $cl['Email'].'-----'.$_POST['Email'];
	if ($cl['Email']==$_POST['Email'] && $cl['Password']==$_POST['Password']){
            echo '333333';
		session_start();
                $ID=$CS->DisplayCart($CS->con, $cl['ID_Client']);
		$_SESSION['E']=$_POST['Email'];
		$_SESSION['P']=$_POST['Password'];
                $_SESSION['I']=$cl['ID_Client'];
                foreach ($ID as $D) {
                    $_SESSION['C']=$D->ID_Cart;
                }
echo $_SESSION['E'].'----'.$_SESSION['P'].'------'.$_SESSION['I'];		
//$_SESSION['r']=$t['role'];
		header("location:indexLoggedin.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> 	 <?php 
}  

?> 
</body>
</html>