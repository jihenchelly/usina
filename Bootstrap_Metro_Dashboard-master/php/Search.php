<?php 
include ("CrudClient.php");
$q=$_GET['q'];
$cc=new CrudClient();
if (isset($_POST['delete'])){

$cc->deleteClient($_POST["ID_Client"],$cc->conn);

}
$list=$cc->searchClient($q,$cc->conn);
	?> 
	<table>
	<tr>
	<td>ID</td><td>First Name</td><td>Last name</td><td>Sex</td><td>Email</td><td></td><td></td>
	</tr>
	<?php
	foreach ($list as $l){
    ?>
	<tr>
	<td><?php echo $l['ID_Client'] ?></td>
	<td><?php echo $l['First_Name']?></td>
	<td><?php echo $l['Last_Name']?></td>
	<td><?php echo $l['Sex'] ?></td>
	<td><?php echo $l['Email']?></td>
        <td><form  action="" method='POST'>
        <td><input type="submit" value="delete" name="delete"></td>
	<input type="text" value="<?PHP echo $l['ID_Client'] ?>" name="ID_Client" style="display: none;">

	
	</form> </td>
	</tr>
	<?php
	}
	?>
	</table>