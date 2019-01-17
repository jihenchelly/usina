<?PHP
include ("crudPromotion.php");
$cc=new crudPromotion();
/*if (isset($_POST['enregistrerModif'])){
	$newChauffeur=new Chauffeur($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_GET['cin'],$_POST['matricule'],$_POST['vehicule'],$_POST['horaire']);
	$cc->modifierChauffeur($newChauffeur,$cc->conn);
	header('location:afficheChauffeur.php');*/
}else{
$nom=$_GET['nom'];
$promotion=$cc->recupererChauffeur($cin,$cc->conn);
//var_dump($chauffeur);

?>
<form method="POST">
<table>
<?PHP foreach ($chauffeur as $ch){ ?>
<tr>
<td>Nom <input type="text" name="nom" value="<?PHP echo $ch['nom'];  ?>"></td>
<td>Preom <input type="text" name="prenom" value="<?PHP echo $ch['prenom'];  ?>"></td>
<td>Matricule <input type="text" name="matricule" value="<?PHP echo $ch['matricule'];  ?>"></td>
<td>Sexe <input type="text" name="sexe" value="<?PHP echo $ch['sexe'];  ?>"></td>
<td>Vehicule <input type="text" name="vehicule" value="<?PHP echo $ch['vehicule'];  ?>"></td>
<td>Horaire <input type="text" name="horaire" value="<?PHP echo $ch['horaire'];  ?>"></td>
</tr>
<tr>
<td><input type="submit" value="enregistrer" name="enregistrerModif"> </td>
</tr>
<?PHP } ?>
</table>
</form>
<?PHP } ?>