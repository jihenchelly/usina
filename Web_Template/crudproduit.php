<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 
include ("config.php");
include ("produit.php");
class crudproduit{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	function insertproduit($prod,$conn){
		
		
		
		
		
		$req1="INSERT INTO models (Ref_Model,pt_value,Name,height,length,width,price,photo,description,diametre,Category_Name)VALUES('".$prod->getref()."','".$prod->getvalue()."','".$prod->getname()."','".$prod->getheigh()."','".$prod->getlength()."','".$prod->getwidth()."','".$prod->getprice()."','".$prod->getphoto()."','".$prod->getdescription()."','".$prod->getdiametre()."','".$prod->getcategory()."')";
		$conn->query($req1);
		var_dump($req1);
		
	}
	function afficheproduit($conn){
		$req="SELECT * FROM models ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function filtreselonprix($conn,$p1,$p2){
		
		$req="SELECT * FROM models where Price>='".$p1."' and Price <='".$p2."'";
		
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	function maxprix($conn){
		$req="SELECT MAX(Price) FROM models ";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();		
		
	}
	
	function minprix($conn){
		$req="SELECT MIN(Price) FROM models ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	
	
	function recherche($conn,$q){
		$req="SELECT * FROM models where Name LIKE'%".$q."%' OR Ref_Model LIKE'%".$q."%'";
		//$req="SELECT * FROM models where Name LIKE'%".$q."%' OR Ref_Model LIKE'%".$q."%' OR Category_Name LIKE'%".$q."%'";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	
	
	function affichecategories($conn){
		$req="SELECT * FROM categories ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	function afficheproduitseloncategory($conn,$category){
		
		$req="SELECT Name,Ref_Model FROM models where Category_Name='".$category."'";
		
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	function filtreseloncategory($conn,$category){
		
		$req="SELECT * FROM models where Category_Name='".$category."'";
		
		$liste=$conn->query($req);
			
		return $liste->fetchAll();	
		
	
	}
	
	
	function afficheproduitselonid($conn,$id){
		
		$req="SELECT * FROM models where Ref_Model='".$id."'";
		
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	
	
	
	
	function filtreselonprixcategorie($conn,$category,$p1,$p2){
		
		$req="SELECT * FROM models where Category_Name='".$category."' and Price >='".$p1."' and Price <='".$p2."'";
		
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
	
	function affichecouleur($conn,$ref){
		$req="SELECT * FROM model_colors where Ref_Model= '".$ref."'";
		$liste=$conn->query($req);
		
		return $liste->fetchAll();	
		
	}
	
	function supprimerproduit($ref,$conn){
		$req1="DELETE FROM models where Ref_Model='".$ref."'";
		
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