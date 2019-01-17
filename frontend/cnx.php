	 <?php
	 session_start();
			 include '../222/php/crudPromotion.php';
        $cc=new crudPromotion();
		
		$cnx=$cc->connexion();
		$row=count($cnx); 
		if($row==1)
		{
		foreach($cnx as $res);
		{
			$_SESSION['cliet']=$res['ID_Client'];
			$_SESSION['email']=$res['Email'];
			echo 
			$_SESSION['cliet'].'<br>'.$_SESSION['email'];
			header("location:index.php?promotion");
			
		}
		}
		else print 'erreur';
			
			
	
			 ?>