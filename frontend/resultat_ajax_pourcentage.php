<?php
include '../222/php/crudPromotion.php';
$cc=new crudPromotion();
$res=$cc->RecherchePourcentage();
foreach($res as $values) 
{
?>
<img src="images/<?php echo $values['photo']?>"	/>
<?php
}
?>