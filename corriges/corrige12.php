<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/dinot.css">
        <link rel="stylesheet" href="../css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
		<style>
		body { padding-top: 50px; }
		</style>
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
					<a class="navbar-brand" href="#">FICHE 12: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../construction.php">FICHE SUIVANTE</a></li>
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
				 <h2>Corrigé de la fiche N°12</h2><br/>
					<p>Félicitation ! Vous avez terminé votre douzième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                 <?php
						 if ($_POST){
						   //varibale activite1
					     if(isset($_POST['f12a1'])){$f12a1 = ($_POST['f12a1']);} 
		                 $nf12a1=0;
						 //variable activité2
						 if(isset($_POST['f12a2'])){$f12a2 = ($_POST['f12a2']);} 
		                 $nf12a2=0;
						 //variable activité3
						  if(isset($_POST['f12a3q1'])){$f12a3q1 = ($_POST['f12a3q1']);} 
						  if(isset($_POST['f12a3q2'])){$f12a3q2 = ($_POST['f12a3q2']);} 
						  if(isset($_POST['f12a3q3'])){$f12a3q3 = ($_POST['f12a3q3']);} 
						  if(isset($_POST['f12a3q4'])){$f12a3q4 = ($_POST['f12a3q4']);} 
						  if(isset($_POST['f12a3q5'])){$f12a3q5 = ($_POST['f12a3q5']);} 
						   $bmr1 ='<strong class="mauvrep">';
						   $bmr2 ='<strong class="mauvrep">';
						   $bmr3 ='<strong class="mauvrep">';
						   $bmr4 ='<strong class="mauvrep">';
						   $bmr5 ='<strong class="mauvrep">';
						  $nf12a3q1=0;$nf12a3q2=0;$nf12a3q3=0;$nf12a3q4=0;$nf12a3q5=0;
						 //note activité1
						if ($f12a1=='Parce que les clauses du contrat n’ont pas été respectées.'){$nf12a1=$nf12a1+100;}else{ $nf12a1;}
						 //note activité2
						if ($f12a2=='d’une mauvaise formulation de l’objet.'){$nf12a2=$nf12a2+100;}else{ $nf12a2;}
						//note activité3
						  if ($f12a3q1=='voudrais')     {$nf12a3q1=$nf12a3q1+20;$bmr1='<strong class="bonrep">';}else{ $nf12a3q1;$bmr1;}
						  if ($f12a3q2=='se ferait')   {$nf12a3q2=$nf12a3q2+20;$bmr2='<strong class="bonrep">';}else{ $nf12a3q2;$bmr2;}
						  if ($f12a3q3=='pourrait')    {$nf12a3q3=$nf12a3q3+20;$bmr3='<strong class="bonrep">';}else{ $nf12a3q3;$bmr3;}
						  if ($f12a3q4=='faudrait')    {$nf12a3q4=$nf12a3q4+20;$bmr4='<strong class="bonrep">';}else{ $nf12a3q4;$bmr4;}
					if ($f12a3q5=='bénéficieraient')   {$nf12a3q5=$nf12a3q5+20;$bmr5='<strong class="bonrep">';}else{ $nf12a3q5;$bmr5;}
						  $nf12a3=$f12a3q1+$f12a3q2+$f12a3q3+$f12a3q4+$f12a3q5;  
                         $total=($nf12a1+$nf12a2+$nf12a3)/3;
						  // tableaux de note
		       echo'<table class="text-center table table-bordered table-striped table-condensed">';
			    echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						    <td>'.$nf12a1.'%';
								 if(($nf12a1 >0) and ($nf12a1<25)){
								 echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a1.'%"></div>
					                  </div>';}
						        elseif(($nf12a1 >= 25) and ($nf12a1<50)){
									   echo'<div class="progress">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a1.'%"></div>
                                            </div>';}	
                                elseif(($nf12a1 >= 50) ){
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a1.'%"></div>
                                            </div>';}	  
	                            else{
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>';}	  
					    echo'</td>
					</tr>			
				    <tr>
                            <td class="activite" style="vertical-align:middle">Activité 2</td>
					        <td>'.$nf12a2.'%';
									
							   if(($nf12a2 >0) and ($nf12a2<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a2.'%"></div>
                                     </div>';}
						       elseif(($nf12a2 >= 25) and ($nf12a2<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a2.'%"></div>
                                     </div>';}	
                                elseif(($nf12a2 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a2.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
                   <tr>
						      <td class="activite" style="vertical-align:middle">Activité 3</td>
						      <td>'.$nf12a3.'%';
						        if(($nf12a3 >0) and ($nf12a3<25)){
							     echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a3.'%"></div>
                                      </div>';}
						        elseif(($nf12a3 >= 25) and ($nf12a3<50)){
							     echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a3.'%"></div>
                                      </div>';}	
                                elseif(($nf12a3 >= 50) ){
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf12a3.'%"></div>
                                     </div>';}	  
	                            else{
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
							echo'</td>
				   </tr>
				   
				<tfoot>
					<tr>
						       <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°12</strong></td>
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
					   <h3 class="activite">Activité 1 ('.$nf12a1.'%)</h3>
					   <div class="list-group-item">
		                <p>M.RAÏS réclame un rabais de 15%:</p>';
						if($f12a1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		               elseif($f12a1=='Parce que les clauses du contrat n’ont pas été respectées.'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f12a1.' :</strong> C\'est la bonne réponse !</p>';}
                       
					   elseif($f12a1=='Parce qu’il souhaite un dédommagement du retard de livraison du véhicule.'){
						echo '<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f12a1.' :</strong> <p>La bonne réponse est : « Parce que les clauses du contrat n’ont pas été respectées. »</p><p class="remarque">M.RAÏS ne réclame pas un dédommagement mais souhaite qu’on applique les conditions du contrat de vente, qui n’ont pas été respectées ici.</p>';}   						
		               else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f12a1.'</strong></p> <p>La bonne réponse est : « Parce que les clauses du contrat n’ont pas été respectées. »<p class="remarque">Ce n’est pas tant de rabais que veut bénéficier M.RAÏS que de demander que les clauses du contrat soient respectées, dont un rabais de 15% en cas de retard de livraison.</p>';}
		               echo'</div>';
					   
					   //corrigé activité2
					    echo'<h3 class="activite">Activité 2 ('.$nf12a2.'%)</h3>
					   <div class="list-group-item">
		                <p>M.RAÏS réclame un rabais de 15%:</p>';
						if($f12a2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		               elseif($f12a2=='d’une mauvaise formulation de l’objet.'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f12a2.' :</strong> C\'est la bonne réponse !</p>';}   
		               else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f12a2.'</strong></p> <p>La bonne réponse est : « d’une mauvaise formulation de l’objet. »';}
		               echo'</div>';
					   //corrigé activité3
					 echo'<h3 class="activite">Activité 3 ('.$nf12a3.'%)</h3>
					   <div class="list-group-item">';
		               if(($f12a3q1=='')&&($f12a3q2=='')&&($f12a3q3=='')&&($f12a3q4=='')&&($f12a3q5==''))
		                   {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					  elseif(($f12a3q1=='voudrai')&&($f12a3q2=='se ferait')&&($f12a3q3=='pourrait')&&($f12a3q4=='faudrait')&&($f12a3q5=='bénéficieraient'))
		               {echo'<span class="fa fa-2x fa-check">Vous avez répondu:</span>
					         <p>Salut Karim,<br/>
				   Comment ça va ? J’espère que tout va bien pour toi.<br/>					
					En fait, je voulais te parler de mes problèmes.<br/>					
					Je t’ai déjà dit que je '.$bmr1.$f12a3q1.'</strong>					
					acheter un véhicule. J’ai passé commande et c’était prévu que la livraison '.$bmr2.$f12a3q2.'</strong>	
					la semaine passée. Mais, on m’a informé qu’on ne '.$bmr3.$f12a3q3.'</strong>	
                     pas me livrer le véhicule comme prévu.<br/>					
					En fait, normalement je dois bénéficier d’une réduction à cause de ce retard. Mais un collègue m’a prévenu qu’il ne
				   '.$bmr4.$f12a3q4.'</strong>						
					pas trop y compter. Selon lui, plusieurs clients comme moi ont reçu la garantie qu’ils
					'.$bmr5.$f12a3q5.'</strong>	
					d’une réduction en cas de problème. Cela ne s’est jamais fait.<br/>
					Tu vois dans quel état je suis. J’espère que tu pourras me donner quelques idées pour m’en sortir.<br/>
					Je te souhaite une bonne journée.<br/>
					Bien à toi.<br/>
					Mohammed RAÏS </p>';}
					 else{echo'<span class="fa fa-2x fa-close">Vous avez répondu:</span>
					  <p>Salut Karim,<br/>
				   Comment ça va ? J’espère que tout va bien pour toi.<br/>					
					En fait, je voulais te parler de mes problèmes.<br/>					
					Je t’ai déjà dit que je '.$bmr1.$f12a3q1.'</strong>					
					acheter un véhicule. J’ai passé commande et c’était prévu que la livraison '.$bmr2.$f12a3q2.'</strong>	
					la semaine passée. Mais, on m’a informé qu’on ne '.$bmr3.$f12a3q3.'</strong>	
                     pas me livrer le véhicule comme prévu.<br/>					
					En fait, normalement je dois bénéficier d’une réduction à cause de ce retard. Mais un collègue m’a prévenu qu’il ne
				   '.$bmr4.$f12a3q4.'</strong>						
					pas trop y compter. Selon lui, plusieurs clients comme moi ont reçu la garantie qu’ils
					'.$bmr5.$f12a3q5.'</strong>	
					d’une réduction en cas de problème. Cela ne s’est jamais fait.<br/>
					Tu vois dans quel état je suis. J’espère que tu pourras me donner quelques idées pour m’en sortir.<br/>
					Je te souhaite une bonne journée.<br/>
					Bien à toi.<br/>
					Mohammed RAÏS </p>
					<p>la bonne réponse est:</p>
					 <p>Salut Karim,<br/>
				   Comment ça va ? J’espère que tout va bien pour toi.<br/>					
					En fait, je voulais te parler de mes problèmes.<br/>					
					Je t’ai déjà dit que je <strong class="bonrep"> voudrais</strong>					
					acheter un véhicule. J’ai passé commande et c’était prévu que la livraison <strong class="bonrep">se ferait</strong>
					la semaine passée. Mais, on m’a informé qu’on ne <strong class="bonrep">pourrait</strong>
                     pas me livrer le véhicule comme prévu.<br/>					
					En fait, normalement je dois bénéficier d’une réduction à cause de ce retard. Mais un collègue m’a prévenu qu’il ne
				    <strong class="bonrep"> faudrait</strong>				
					pas trop y compter. Selon lui, plusieurs clients comme moi ont reçu la garantie qu’ils 
					<strong class="bonrep">bénéficieraient</strong>
					d’une réduction en cas de problème. Cela ne s’est jamais fait.<br/>
					Tu vois dans quel état je suis. J’espère que tu pourras me donner quelques idées pour m’en sortir.<br/>
					Je te souhaite une bonne journée.<br/>
					Bien à toi.<br/>
					Mohammed RAÏS </p>';}
					echo'</div>';
		
					;}?></div><!--fin list-group-item-->
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
		  