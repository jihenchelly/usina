<?php
include ("config3.php");
include ("promotion.php");
class crudPromotion
	{
	function __construct()
	{
		$c=new config3();
		$this->conn=$c->getConnexion();
	}
	function insertPromotion($prom,$conn)
	{
		 $req="INSERT INTO promotion (Reductions_start_date,Reduction_end_date,percentage,Ref_Model) 
		VALUES ('".$prom->getDate_debut()."','".$prom->getDate_fin()."','".$prom->getPourcentage()."','".$prom->getProduit()."')";
		$test=$conn->query($req);
		if($test)
			return true;
		else return false;
		
	}
	function selectnom($nom,$conn)
	{
		$req="select * from promotion where Id_reduction='".$nom."'";
		$liste=$conn->query($req);
		return $liste;
	}
	function recherche()
	{
		 $req="select * from promotion where Ref_Model Like'%".$_GET['recherche']."%' or percentage Like'%".$_GET['recherche']."%' ";
		$liste=$this->conn->query($req);
		return $liste;
	}

function supprimerPromotion($id,$conn){
		echo $req1="DELETE FROM promotion where Id_reduction='".$id."'";
		$test=$conn->exec($req1);
		if($test) return true;
		else return false;
		
	}
	
	function modifierPromotion($conn){
		echo $req1="UPDATE promotion SET Reductions_start_date='".$_POST['dateD_promo_add']."',Reduction_end_date='".$_POST['dateF_promo_add']."',
		percentage=".$_POST['pourcentage_promo_add']." WHERE Id_reduction='".$_GET['modif']."'";
		$test=$conn->exec($req1);
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
	function getPromotion()
	{
		 $req="select * from promotion";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	function getPromotions()
	{
		 $req="select * from promotion as prm,models as mdl where mdl.Ref_Model=prm.Ref_Model";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	
	function RecherchePourcentage()
	{
	@$test=$_POST['checkbox'];
		if($test==0)
		{$x=5;$y=10;}
	else if($test==1)
		{$x=10;$y=30;}
	else if($test==2)
		{$x=30;$y=45;}
	else if($test==3)
		{$x=45;$y=81;}
	
	      
	 $req="select * from promotion as pr,models as mds where pr.percentage between $x and $y and pr.Ref_Model=mds.Ref_Model";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	
	function connexion()
	{
		 $req="select * from clients  where Email='".$_POST['email']."' and Password='".$_POST['mdp']."'";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	function newsletter()
	{
		 @ $req="select * from newsletter  where client='".$_SESSION['cliet']."'";
		$liste=$this->conn->query($req);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	function addnewsletter()
	{
		  echo $sql="INSERT INTO `newsletter`(`client`, `email`) VALUES ('".$_SESSION['cliet']."','".$_POST['email']."')";
		$test=$this->conn->exec($sql);
		if($test) return true;
		else return false;
	}
	function getewsletter()
	{
		  echo $sql="select * from `newsletter`";
		$liste=$this->conn->query($sql);
		while($tab=$liste->fetch(PDO::FETCH_ASSOC))
		{
			$res[]=$tab;
		}
		return @$res;
	}
	public function envoyernewsletter()
	{
	
		@$sql="UPDATE `newsletter` SET `usina`='".$_POST['usina']."',`pdf`='".$_FILES['pdf']['name']."',`description_email_offre`='".$_POST['description']."'";
		$test=$this->conn->exec($sql);
		if($test) return true;
		else return false;
		
		
	}
	
}
?>