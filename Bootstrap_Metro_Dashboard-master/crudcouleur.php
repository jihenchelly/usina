<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 

include ("couleur.php");
class crudcouleur{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	function insertcouleur($couleur,$conn){
		
		
		
		
		
		$req1="INSERT INTO colors (ID_Color,Hex,Blue,Green,Red)VALUES('".$couleur->getid()."','".$couleur->getHex()."','".$couleur->getBlue()."','".$couleur->getGreen()."','".$couleur->getRed()."')";
		$conn->query($req1);
		var_dump($req1);
		
	}
	function affichecouleur($conn,$ref){
		$req="SELECT * FROM model_colors where Ref_Model= '".$ref."'";
		$liste=$conn->query($req);
		
		return $liste->fetchAll();	
		
	}
	
	function affichecouleurprod($conn,$clr,$ref){
		$req="SELECT * FROM model_colors where Ref_Model= '".$ref."' AND ID_Color='".$clr."'";
		$liste=$conn->query($req);
		
		return $liste->fetchAll();	
		
	}
	
	
	
	
	function affichecategories($conn){
		$req="SELECT * FROM categories ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	function afficheproduitseloncategory($conn,$category){
		
		$req="SELECT Name FROM models where Category_Name='".$category."'";
		
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	function recupererChauffeur($cin,$conn){
		
		$req="SELECT nom,prenom,cin,sexe,matricule,vehicule,horaire FROM personnel inner join chauffeur on personnel.cin=chauffeur.cin_personnel WHERE cin=".$cin;
		$chauf=$conn->query($req);
		return $chauf->fetchAll();
	}
	function modifierproduit($prod,$conn){
		$req1="UPDATE product SET color='".$prod->getcolor()."',type='".$prod->getype()."',quantity='".$prod->getquantity()."',heigh='".$prod->getheigh()."',length='".$prod->getlength()."',width='".$prod->getwidth()."',price='".$prod->getprice()."',photo='".$prod->getphoto()."',description='".$prod->getdescription()."' WHERE name='".$prod->getname()."'";
		var_dump($req1);
		$conn->exec($req1);
		
	}
	function supprimerproduit($name,$conn){
		$req1="DELETE FROM product where name='".$name."'";
		
		$conn->exec($req1);
		var_dump($req1);
	}
		function rechercheChauffeur($cin,$conn){
		$req="SELECT nom,prenom,sexe,matricule,vehicule,horaire FROM personnel inner join chauffeur on personnel.cin=chauffeur.cin_personnel where personnel.cin=".$cin;
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
}

?>