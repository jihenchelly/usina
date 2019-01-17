<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include ("CrudClient.php");
$cc=new CrudClient();
$client1=new Client($_POST['Email'],$_POST['Password']);
//var_dump($client1);
$client1=$cc->Log($cc->conn,$_POST['Email'],$_POST['Password']);



	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['Email']) && !empty($_POST['Password'])){
	
	foreach($client1 as $cl){
		$vide=true;
	if ($cl['Email']==$_POST['Email'] && $cl['Password']==$_POST['Password']){
		
		session_start();
		$_SESSION['E']=$_POST['Email'];
		$_SESSION['P']=$_POST['Password'];
		//$_SESSION['r']=$t['role'];
		header("location:indexLoggedIn.php");
		
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