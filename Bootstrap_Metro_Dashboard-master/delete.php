<?php
include ("php/crudDelivery_man.php");
$cin=FILTER_INPUT(INPUT_GET,'cin');
$cc=new crudDelivery_man();
$cc->deleteDelivery_man($cin,$cc->conn);
?>
<script type="text/javascript">
window.location= "submenu2.php" ;
</script>

