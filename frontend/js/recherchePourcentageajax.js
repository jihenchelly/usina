// JavaScript Document
$(function(){
	//"Surveillance du champ "Recherche" avec la méthode jQuery "keyup"
	$(".checkbox input").click(function(){
		//on efface le champ résultat
		
		var data='recherche='+$(".checkbox input").val();
		//Si le champ "Recherche" contient plus d'un caractère, l'appel Ajax est déclenché
		
			$.ajax({
				type:'GET',
				url:'resultat_ajax_pourcentage.php',
				//on envoi ici des informations au script php "rechercheajaxphp.php", 
				//le script php va recevoir l'info (data) sous la forme $_POST['recherche']
				//comme si la variable avait été envoyée par le formulaire directement 
				//(utile en l'absence de JavaScript)
				data: data,
				//Avant d'envoyer les infos, on fait apparaître le loader
				//beforeSend:function(){$("img[alt='loader']").css("display","inline");},
				//Le script php nous a renvoyé du HTML (paramètre "code_html" 
				//contenant le fruit de la recherche dans la base de données)
				success:function(code_html){
					//on fait disparaître le loader
					//$("img[alt='loader']").css("display","none");
					//on fait apparaître le résultat dans la div d'id "resultat"
					$("#resultat").html(data);
				}
			});			
		/* }
		else {
			$.ajax({
				type:'GET',
				url:'afficher_promo.php',
				//on envoi ici des informations au script php "rechercheajaxphp.php", 
				//le script php va recevoir l'info (data) sous la forme $_POST['recherche']
				//comme si la variable avait été envoyée par le formulaire directement 
				//(utile en l'absence de JavaScript)
				data: data,
				//Avant d'envoyer les infos, on fait apparaître le loader
				//beforeSend:function(){$("img[alt='loader']").css("display","inline");},
				//Le script php nous a renvoyé du HTML (paramètre "code_html" 
				//contenant le fruit de la recherche dans la base de données)
				success:function(code_html){
					//on fait disparaître le loader
					//$("img[alt='loader']").css("display","none");
					//on fait apparaître le résultat dans la div d'id "resultat"
					$("#resultat").html(code_html);
				}
			});			
		} */
	});	
});