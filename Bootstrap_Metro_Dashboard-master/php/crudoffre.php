<?php
include ("config.php");
include ("offre.php");
class crudOffres{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertOffre($conn)
	{
		echo $req="INSERT INTO offers (Offer_Start_Date	,Offer_End_Date,Name_Category,Type,photo_offre,description_offre) 
		VALUES ('".$_POST['Offer_Start_Date']."','".$_POST['Offer_End_Date']."','".$_POST['Name_Category']."','".$_POST['type']."',
		'".$_FILES['photo_offre']['name']."', '".$_POST['description']."')";
		$test=$conn->query($req);
		if($test) return true;
		else return false;
		
	}
	
	function getRefModels()
	{
		 $req="select * from models";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return $res;
	}
	function getOffres()
	{
		 $req="select * from offers";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return $res;
	}
	
	function getDetailOffre()
	{
		@ $req="select * from offers as off,models as mds where off.ID_offer='".$_GET['detail']."' and off.Name_Category=mds.Category_Name";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return $res;
	}
	
	function supprimerOffre(){
		echo $req1="DELETE FROM offers where ID_offer='".$_GET['param']."'";
		$test=$this->conn->exec($req1);
		if($test) return true;
		else return false;
		
	}
	
	function modifierOffre(){

		echo $req1="UPDATE offers SET Offer_Start_Date='".$_POST['dateD_promo_add']."',Offer_End_Date='".$_POST['dateF_promo_add']."',
		Name_Category='".$_POST['idProduit_promo_add']."',Type='".$_POST['type']."',photo_offre='".$_FILES['photo_offre']['name']."',
		description_offre='".$_POST['description']."' WHERE ID_offer='".$_GET['modif']."'";
		$test=$this->conn->exec($req1);
		if($test) return true;
		else return false;
	}
	function detailOffre()
	{
		 $req="select * from offers  where ID_offer='".$_GET['modif']."'";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	
	function rechercheOffre()
	{
		 $req="select * from offers where Name_Category Like'%".$_GET['rechercheOffre']."%' or 	Type Like'%".$_GET['rechercheOffre']."%' ";
		$liste=$this->conn->query($req);
		return $liste;
	}
	
	
	
	
}