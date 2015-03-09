<!doctype html>
<html lang="fr">
    <head>
		<title>Fiche 11: corrigé | Formation de l'Institut Français Algérie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<![endif]-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/dinot.css">
        <link rel="stylesheet" href="../css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="http://www.if-algerie.com/favicon.ico">
		<link rel="apple-touch-icon" href="http://www.if-algerie.com/touch_icon.png">
		<style> body { padding-top: 50px; } </style>
		 <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
			<!--BARRE DE NAVIGATION TOP-FIXE-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
				  <div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-scrollspy">
					  <span class="sr-only">Navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FICHE 11: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche12.php">FICHE SUIVANTE</a></li>
					</ul>
				  </div>
				</div>
			</nav>
			<!--FIN BARRE DE NAVIGATION TOP-FIXE-->
			<?php include("../include/corriges/header-login.php");?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°11</h2><br/>
					<p>Félicitation ! Vous avez terminé votre onzième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                  
		                 <?php
                       if ($_POST){
						   //varibale activite1
					     if(isset($_POST['f11a1'])){$f11a1 = ($_POST['f11a1']);} 
		                 $nf11a1=0;
						  //variable activité2
						  if(isset($_POST['f11a2q1'])){$f11a2q1 = ($_POST['f11a2q1']);}
                          if(isset($_POST['f11a2q2'])){$f11a2q2 = ($_POST['f11a2q2']);}
                          if(isset($_POST['f11a2q3'])){$f11a2q3 = ($_POST['f11a2q3']);}
                          if(isset($_POST['f11a2q4'])){$f11a2q4 = ($_POST['f11a2q4']);}	
                            $nf11a2q1=0;$nf11a2q2=0;$nf11a2q3=0;$nf11a2q4=0;   						  
						 //variable activité3
						  if(isset($_POST['f11a3q1'])){$f11a3q1 = ($_POST['f11a3q1']);}	
						  if(isset($_POST['f11a3q2'])){$f11a3q2 = ($_POST['f11a3q2']);}
						  if(isset($_POST['f11a3q3'])){$f11a3q3 = ($_POST['f11a3q3']);}
						  if(isset($_POST['f11a3q4'])){$f11a3q4 = ($_POST['f11a3q4']);}
						  if(isset($_POST['f11a3q5'])){$f11a3q5 = ($_POST['f11a3q5']);}
						  if(isset($_POST['f11a3q6'])){$f11a3q6 = ($_POST['f11a3q6']);}
						   $bmr1 ='<strong class="mauvrep">';
						   $bmr2 ='<strong class="mauvrep">';
						   $bmr3 ='<strong class="mauvrep">';
						   $bmr4 ='<strong class="mauvrep">';
						   $bmr5 ='<strong class="mauvrep">';
						   $bmr6 ='<strong class="mauvrep">';
						  $nf11a3q1=0;$nf11a3q2=0;$nf11a3q3=0;$nf11a3q4=0;$nf11a3q5=0;$nf11a3q6=0;
						 //note activité2
					   if ($f11a2q1=='accordé'){$nf11a2q1=$nf11a2q1+25;}else{ $nf11a2q1;}
					   if ($f11a2q2=='accompli'){$nf11a2q2=$nf11a2q2+25;}else{ $nf11a2q2;}
					   if ($f11a2q3=='réalisées'){$nf11a2q3=$nf11a2q3+25;}else{ $nf11a2q3;}
					   if ($f11a2q4=='prise'){$nf11a2q4=$nf11a2q4+25;}else{ $nf11a2q4;}
					   $nf11a2=$nf11a2q1+$nf11a2q2+$nf11a2q3+$nf11a2q4;
					     //note activité1
						if ($f11a1=='De demander de l’information'){$nf11a1=$nf11a1+100;}else{ $nf11a1;}
                       //note activité3
                        if ($f11a3q1=='Faisant suite'){$nf11a3q1=$nf11a3q1+17;$bmr1='<strong class="bonrep">';}else{ $nf11a3q1;$bmr1;}
						if ($f11a3q2=='En effet')     {$nf11a3q2=$nf11a3q2+17;$bmr2='<strong class="bonrep">';}else{ $nf11a3q2;$bmr2;} 
						if ($f11a3q3=='Ensuite')      {$nf11a3q3=$nf11a3q3+17;$bmr3='<strong class="bonrep">';}else{ $nf11a3q3;$bmr3;} 
					if ($f11a3q4=='Passé ce délai')   {$nf11a3q4=$nf11a3q4+17;$bmr4='<strong class="bonrep">';}else{ $nf11a3q4;$bmr4;} 
					if ($f11a3q5=='Nous nous mettons'){$nf11a3q5=$nf11a3q5+17;$bmr5='<strong class="bonrep">';}else{ $nf11a3q5;$bmr5;} 
				if ($f11a3q6=='Nous vous remercions') {$nf11a3q6=$nf11a3q6+15;$bmr6='<strong class="bonrep">';}else{ $nf11a3q6;$bmr6;} 
						$nf11a3=$nf11a3q1+$nf11a3q2+$nf11a3q3+$nf11a3q4+$nf11a3q5+$nf11a3q6;
						 $total=($nf11a1+$nf11a2+$nf11a3)/3;
						  // tableaux de note
		       echo'<table class="text-center table table-bordered table-striped table-condensed">';
			    echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						    <td>'.$nf11a1.'%';
								 if(($nf11a1 >0) and ($nf11a1<25)){
								 echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a1.'%"></div>
					                  </div>';}
						        elseif(($nf11a1 >= 25) and ($nf11a1<50)){
									   echo'<div class="progress">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a1.'%"></div>
                                            </div>';}	
                                elseif(($nf11a1 >= 50) ){
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a1.'%"></div>
                                            </div>';}	  
	                            else{
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>';}	  
					    echo'</td>
					</tr>			
				    <tr>
                            <td class="activite" style="vertical-align:middle">Activité 2</td>
					        <td>'.$nf11a2.'%';
									
							   if(($nf11a2 >0) and ($nf11a2<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a2.'%"></div>
                                     </div>';}
						       elseif(($nf11a2 >= 25) and ($nf11a2<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a2.'%"></div>
                                     </div>';}	
                                elseif(($nf11a2 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a2.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
                   <tr>
						      <td class="activite" style="vertical-align:middle">Activité 3</td>
						      <td>'.$nf11a3.'%';
						        if(($nf11a3 >0) and ($nf11a3<25)){
							     echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a3.'%"></div>
                                      </div>';}
						        elseif(($nf11a3 >= 25) and ($nf11a3<50)){
							     echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a3.'%"></div>
                                      </div>';}	
                                elseif(($nf11a3 >= 50) ){
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf11a3.'%"></div>
                                     </div>';}	  
	                            else{
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
							echo'</td>
				   </tr>
				   
				<tfoot>
					<tr>
						       <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°11</strong></td>
						       <td> '.$total.'%';
								if(($total >0) and ($total<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$total.'%"></div>
                                     </div>';}
						        elseif(($total >= 25) and ($total<50)){
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$total.'%"></div>
                                      </div>';}	
                                 elseif(($total >= 50) ){
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$total.'%"></div>
                                      </div>';}	  
	                            else{
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
						  echo'</td>
				    </tr>
			    </tfoot>
      </table><br/>
								 </div><br/>';
						
						
						
						
						//courigé activité1
						 echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf11a1.'%)</h3>
					   <div class="list-group-item">
					   <p>L’objectif principal du message est :</p>';
		               if($f11a1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		               elseif($f11a1=='De demander de l’information'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f11a1.' :</strong> C\'est la bonne réponse !</p>';}   
		               else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f11a1.'</strong></p> <p>La bonne réponse est : « De demander de l’information »';}
		               echo'</div>';
					   echo'<h3 class="activite">Activité 2 ('.$nf11a2.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
						if($f11a2q1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                elseif($f11a2q1=='accordé'){
						echo '<p><span class="fa fa-2x fa-check"></span>1. Les membres du comité ont <strong class="bonrep">'.$f11a2q1.'  </strong>le crédit.  C\'est la bonne réponse !</p>';}   
		               else{echo'<p><span class="fa fa-2x fa-close"></span>1. Les membres du comité ont <strong class="mauvrep">'.$f11a2q1.' </strong> le crédit.</p> <p>La bonne réponse est : « accordé »</p><p class="remarque">Après l’auxiliaire « avoir » le verbe qui suit reste invariable</p>';}
					     
						 echo'<h3>Question 2</h3>';
						if($f11a2q2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                elseif($f11a2q2=='accompli'){
						echo '<p><span class="fa fa-2x fa-check"></span>2. L’assistante a <strong class="bonrep">'.$f11a2q2.'  </strong>ses missions avec beaucoup de professionnalisme.  C\'est la bonne réponse !</p>';}   
		               else{echo'<p><span class="fa fa-2x fa-close"></span>2. L’assistante a <strong class="mauvrep">'.$f11a2q2.' </strong> ses missions avec beaucoup de professionnalisme.</p> <p>La bonne réponse est : « a accompli »</p>';}
					   
					    echo'<h3>Question 3</h3>';
						if($f11a2q3=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                elseif($f11a2q3=='réalisées'){
						echo '<p><span class="fa fa-2x fa-check"></span>3. Les livraisons que nous avons <strong class="bonrep">'.$f11a2q3.'  </strong>ont satisfait les clients.  C\'est la bonne réponse !</p>';}   
		               else{echo'<p><span class="fa fa-2x fa-close"></span>3. Les livraisons que nous avons <strong class="mauvrep">'.$f11a2q3.' </strong> ont satisfait les clients.</p> <p>La bonne réponse est : « réalisées »</p>';}
					   
					    echo'<h3>Question 4</h3>';
						if($f11a2q4=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                elseif($f11a2q4=='prise'){
						echo '<p><span class="fa fa-2x fa-check"></span>4. La décision que notre directeur a <strong class="bonrep">'.$f11a2q4.'  </strong>était très courageuse.  C\'est la bonne réponse !</p>';}   
		               else{echo'<p><span class="fa fa-2x fa-close"></span>4. La décision que notre directeur a <strong class="mauvrep">'.$f11a2q4.' </strong> était très courageuse.</p> <p>La bonne réponse est : « prise »</p>';}
					   echo'</div>';
					   //corrigé activité3
					    echo'<h3 class="activite">Activité 3 ('.$nf11a3.'%)</h3>
					   <div class="list-group-item">';
					  if(($f11a3q1=='')&&($f11a3q2=='')&&($f11a3q3=='')&&($f11a3q4=='')&&($f11a3q5=='')&&($f11a3q6==''))
					{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					  elseif(($f11a3q1=='Faisant suite')&&($f11a3q2=='En effet')&&($f11a3q3=='Ensuite')&&($f11a3q4=='Passé ce délai')&&($f11a3q5=='Nous nous mettons')&&($f11a3q6=='Nous vous remercions'))
					{echo'<span class="fa fa-2x fa-check">Vous avez répondu:</span>
					 <p>Bonjour, <br/>					
					'.$bmr1.$f11a3q1.'</strong> à votre demande d’informations concernant les procédures à engager pour l’acquisition d’un véhicule Veh Motors du type CLS 2000, 
					nous sommes heureux de vous adresser les conditions de vente.<br/>					
					'.$bmr2.$f11a3q2.'</strong> , vous êtes d’abord prié de remplir un formulaire signifiant que votre commande est réellement passée.<br/>					
					'.$bmr3.$f11a3q3.'</strong> , vous devriez vous acquitter d’un acompte qui représente 10% du prix total du véhicule.<br/>										
					Votre commande sera satisfaite dans un délai de 20 jours.'.$bmr4.$f11a3q4.'</strong>, vous pourriez soit réclamer un remboursement total, 
					soit bénéficier d’un rabais de 15% du prix total du produit.<br/>					
					Nous serions ravis si vous pouviez vous rapprocher de l’une de nos agences commerciales.<br/>					
					'.$bmr5.$f11a3q5.'</strong>	à votre entière disposition pour tout complément d’informations.<br/>					
					'.$bmr6.$f11a3q6.'</strong>	par avance pour votre intérêt.<br/>
					Cordialement.<br/>
					Service commercial VEH</p>';}
					  else{echo'<span class="fa fa-2x fa-close">Vous avez répondu:</span>
					        <p>Bonjour, <br/>					
					'.$bmr1.$f11a3q1.'</strong> à votre demande d’informations concernant les procédures à engager pour l’acquisition d’un véhicule Veh Motors du type CLS 2000, 
					nous sommes heureux de vous adresser les conditions de vente.<br/>					
					'.$bmr2.$f11a3q2.'</strong> , vous êtes d’abord prié de remplir un formulaire signifiant que votre commande est réellement passée.<br/>					
					'.$bmr3.$f11a3q3.'</strong> , vous devriez vous acquitter d’un acompte qui représente 10% du prix total du véhicule.<br/>										
					Votre commande sera satisfaite dans un délai de 20 jours.'.$bmr4.$f11a3q4.'</strong>, vous pourriez soit réclamer un remboursement total, 
					soit bénéficier d’un rabais de 15% du prix total du produit.<br/>					
					Nous serions ravis si vous pouviez vous rapprocher de l’une de nos agences commerciales.<br/>					
					'.$bmr5.$f11a3q5.'</strong>	à votre entière disposition pour tout complément d’informations.<br/>					
					'.$bmr6.$f11a3q6.'</strong>	par avance pour votre intérêt.<br/>
					Cordialement.<br/>
					Service commercial VEH.</p>
					<p>la bonne réponse est:</p>
					<p>Bonjour, <br/>					
					<strong class="bonrep">Faisant suite</strong> à votre demande d’informations concernant les procédures à engager pour l’acquisition d’un véhicule Veh Motors du type CLS 2000, 
					nous sommes heureux de vous adresser les conditions de vente.<br/>					
					<strong class="bonrep">En effet</strong> , vous êtes d’abord prié de remplir un formulaire signifiant que votre commande est réellement passée.<br/>					
					<strong class="bonrep">Ensuite</strong> , vous devriez vous acquitter d’un acompte qui représente 10% du prix total du véhicule.<br/>										
					Votre commande sera satisfaite dans un délai de 20 jours.<strong class="bonrep">Passé ce délai</strong>, vous pourriez soit réclamer un remboursement total, 
					soit bénéficier d’un rabais de 15% du prix total du produit.<br/>					
					Nous serions ravis si vous pouviez vous rapprocher de l’une de nos agences commerciales.<br/>					
					<strong class="bonrep">Nous nous mettons</strong>	à votre entière disposition pour tout complément d’informations.<br/>					
					<strong class="bonrep">Nous vous remercions</strong>	par avance pour votre intérêt.<br/>
					Cordialement.<br/>
					Service commercial VEH.</p>';}
					
					echo'</div>';
					;}?>
					<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title resume text-center" id="myModalLabel"><img src="../img/le-saviez-vous.png" alt="" class="img-responsive"></h4>
						</div>
						<div class="modal-body body-saviez-vous">
							<p class="resume">Pour que votre message soit facilement compréhensible, il est préférable d'utiliser des structures simples: sujet + verbe + complément.<br/>
							Exemple: Dans un délai de 20 jours, votre commande sera satisfaite.<br/>
							Préférez: Votre commande sera satisfaite dans un délai de 20 jours.<br/>
							Exemple: Pour que les conditions de vente vous soient adressées, il vous sera nécessaire de confirmer votre commande.<br/>
							Préférez: Nous vous adresserons les conditions de vente après confirmation de votre commande.</p>
						</div>
						<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
			
			<!--FIN DE MODAL JAVASCRIPT-->

				 <div class="modal-title" data-toggle="modal" data-target="#myModal">
				 <br/>
				 <img src="../img/le-saviez-vous.png" alt="" class="img-responsive">
				 </div>
					</div><!--fin list-group-item-->
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer><!--ANCRE NAVBAR-TOPFIX--><div id="bottom"></div>
			<?php include("../include/corriges/footer.php"); ?> 
		</footer>
		<!-- JavaScript Includes -->
		<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script> 
	</body>
</html>
		  