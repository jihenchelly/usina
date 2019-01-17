<?php
	include ("php/crudPromotion.php");


$cc=new crudPromotion();
$res=$cc->envoyernewsletter();

if(isset($_POST['ok']))
{
	if($cc->envoyernewsletter())
	{
		copy($_FILES['pdf']['tmp_name'],'img/newsletter/'.$_FILES['pdf']['name']);
		
		
	}
	//echo $test=mail('jihen.chely@esprit.tn','ffffff','sssssssss');
		$to      = 'jihen.chely@esprit.tn';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: jihen.chely@esprit.tn' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

  @ $tes= mail($to, $subject, $message, $headers);
	
	
}

?>
<form method="post" enctype="multipart/form-data">
<input type="text" placeholder="email" name="usina">
<div class="control-group">
							
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput"  name="pdf" type="file">
							  </div>
							</div> 
<div class="control-group hidden-phone">
							
							  <div class="controls">
								<textarea class="cleditor" name="description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>		

<input type="submit" name="ok" value="Envoyer">


</form>