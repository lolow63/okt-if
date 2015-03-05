<!doctype html>
<html lang="fr">
    <head>
		<title>Fiche 4: corrigé | Formation de l'Institut Français Algérie</title>
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
					<a class="navbar-brand" href="#">FICHE 4: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche5.php">FICHE SUIVANTE</a></li>
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
				 <h2>Corrigé de la fiche N°4</h2><br/>
					<p>Félicitation ! Vous avez terminé votre quatrième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		               
					   <?php
                       if ($_POST){
						   //varibale activite1
					   if(isset($_POST['f4a1'])){$f4a1 = ($_POST['f4a1']);} 
					  
					  
					  $nf4a1=0;$rf4a1='faux';
					  $rep1='Bonjour,<br/> 
							Pouvez-vous, Monsieur Khadraoui, m’informer sur les possibilités d’avoir un crédit. <br/> 
							En fait, je veux acheter une auto et je n’ai pas les moyens nécessaires.<br/> 
							Merci	';
					  $rep2='Salut Khadraoui,<br/> 
							Est-ce qu’il y a une possibilité de crédit bancaire dans notre société ? <br/> 
							On m’a dit que le comité en a déjà donné, pourquoi pas moi ? <br/> 
							J’ai aussi droit puisque je travaille depuis 5 ans dans cette entreprise ?<br/> 
							Je vous remercie.';	
					  $bonrep='Bonjour,<br/> 
							Avant de m’engager dans l’achat d’un véhicule, je me permets de vous demander de bien vouloir m’informer sur les possibilités 
							d’obtenir un crédit auprès de votre comité.<br/> 
							Je vous remercie par avance de votre retour.<br/> 
							Meilleures salutations.
							Mohammed RAÏS';
					  //variable activite2
					  if(isset($_POST['f4a2q1'])){$f4a2q1 = ($_POST['f4a2q1']);}
                      if(isset($_POST['f4a2q2'])){$f4a2q2 = ($_POST['f4a2q2']);} 					  
					  if(isset($_POST['f4a2q3'])){$f4a2q3 = ($_POST['f4a2q3']);} 
					  if(isset($_POST['f4a2q4'])){$f4a2q4 = ($_POST['f4a2q4']);}
					  $nf4a2q1=0; $nf4a2q2=0; $nf4a2q3=0; $nf4a2q4=0; $nf4a2=0;
					  $rf4a2q1='faux';$rf4a2q2='faux';$rf4a2q3='faux';$rf4a2q4='faux';
					  // varibale activité3
					  if(isset($_POST['f4a3q1'])){$f4a3q1 = ($_POST['f4a3q1']);}
					  if(isset($_POST['f4a3q2'])){$f4a3q2 = ($_POST['f4a3q2']);}
					  if(isset($_POST['f4a3q3'])){$f4a3q3 = ($_POST['f4a3q3']);}
					  if(isset($_POST['f4a3q4'])){$f4a3q4 = ($_POST['f4a3q4']);}
					  if(isset($_POST['f4a3q5'])){$f4a3q5 = ($_POST['f4a3q5']);}
					  if(isset($_POST['f4a3q6'])){$f4a3q6 = ($_POST['f4a3q6']);}
					  if(isset($_POST['f4a3q7'])){$f4a3q7 = ($_POST['f4a3q7']);}
					  if(isset($_POST['f4a3q8'])){$f4a3q8 = ($_POST['f4a3q8']);}
					  if(isset($_POST['f4a3q9'])){$f4a3q9 = ($_POST['f4a3q9']);}
					  if(isset($_POST['f4a3q10'])){$f4a3q10 = ($_POST['f4a3q10']);}
					  if(isset($_POST['f4a3q11'])){$f4a3q11 = ($_POST['f4a3q11']);}
					  if(isset($_POST['f4a3q12'])){$f4a3q12 = ($_POST['f4a3q12']);}
					  $nf4a3q1=0;$nf4a3q2=0;$nf4a3q3=0;$nf4a3q4=0;$nf4a3q5=0;$nf4a3q6=0;$nf4a3q7=0;$nf4a3q8=0;$nf4a3q9=0;$nf4a3q10=0;$nf4a3q11=0;$nf4a3q12=0;
					  $nf4a3=0;
					  //activité1 note
					   if ($f4a1=='p3'){$nf4a1=$nf4a1+100; $rf4a1='vrai';}else{ $nf4a1; $rf4a1;}
		              //activité2 note
					  if($f4a2q1=='que'){$nf4a2q1=$nf4a2q1+25; $rf4a2q1='vrai';}else{ $nf4a2q1; $rf4a2q1;}
					  if($f4a2q2=='dont'){$nf4a2q2=$nf4a2q2+25; $rf4a2q2='vrai';}else{ $nf4a2q2; $rf4a2q2;}
					  if($f4a2q3=='qui'){$nf4a2q3=$nf4a2q3+25; $rf4a2q3='vrai';}else{ $nf4a2q3; $rf4a2q3;}
					  if($f4a2q4=='où'){$nf4a2q4=$nf4a2q4+25; $rf4a2q4='vrai';}else{ $nf4a2q4; $rf4a2q4;}
					   $nf4a2=$nf4a2q1+$nf4a2q2+$nf4a2q3+$nf4a2q4;
					//activité3 note
					if($f4a3q1=='prie'){$nf4a3q1=$nf4a3q1+6.5;}else{ $nf4a3q1;}
					if($f4a3q2=='informer'){$nf4a3q2=$nf4a3q2+8.5;}else{ $nf4a3q2;}
					if($f4a3q3=='possibilités'){$nf4a3q3=$nf4a3q3+8.5;}else{ $nf4a3q3;}
					if($f4a3q4=='auprès'){$nf4a3q4=$nf4a3q4+8.5;}else{ $nf4a3q4;}
					if($f4a3q5=='retour'){$nf4a3q5=$nf4a3q5+8.5;}else{ $nf4a3q5;}
					if($f4a3q6=='remercie'){$nf4a3q6=$nf4a3q6+8.5;}else{ $nf4a3q6;}
					if($f4a3q7=='En effet'){$nf4a3q7=$nf4a3q7+8.5;}else{ $nf4a3q7;}
					if($f4a3q8=='accorder'){$nf4a3q8=$nf4a3q8+8.5;}else{ $nf4a3q8;}
					if($f4a3q9=='Toutefois'){$nf4a3q9=$nf4a3q9+8.5;}else{ $nf4a3q9;}
					if($f4a3q10=='étudier'){$nf4a3q10=$nf4a3q10+8.5;}else{ $nf4a3q10;}
					if($f4a3q11=='entière'){$nf4a3q11=$nf4a3q11+8.5;}else{ $nf4a3q11;}
					if($f4a3q12=='tout'){$nf4a3q12=$nf4a3q12+8.5;}else{ $nf4a3q12;}
					$nf4a3=$nf4a3q1+$nf4a3q2+$nf4a3q3+$nf4a3q4+$nf4a3q5+$nf4a3q6+$nf4a3q7+$nf4a3q8+$nf4a3q9+$nf4a3q10+$nf4a3q11+$nf4a3q12;
		              //note total
					  $total=($nf4a1+$nf4a2+$nf4a3)/3;
					  //tableaux de note
		    echo'<table class="text-center table table-bordered table-striped table-condensed">';
				echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						<td>'.$nf4a1.'%';
							if(($nf4a1 >0) and ($nf4a1<25)){
							echo'<div class="progress">
                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a1.'%"></div>
                                 </div>';}
						    elseif(($nf4a1 >= 25) and ($nf4a1<50)){
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a1.'%"></div>
                                 </div>';}	
                            elseif(($nf4a1 >= 50) ){
						    echo'<div class="progress">
                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a1.'%"></div>
                                 </div>';}	  
	                        else{
							echo'<div class="progress">
                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                 </div>';}
				   echo'</td>
				    </tr>
					
					<tr>
                        <td class="activite" style="vertical-align:middle">Activité 2</td>
						<td>'.$nf4a2.'%';
						    if(($nf4a2 >0) and ($nf4a2<25)){
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a2.'%"></div>
                                 </div>';}
						    elseif(($nf4a2 >= 25) and ($nf4a2<50)){
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a2.'%"></div>
                                 </div>';}	
                            elseif(($nf4a2 >= 50) ){
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a2.'%"></div>
                            </div>';}	  
	                        else{
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                 </div>';}
				   echo'</td>
				    </tr>
					
					<tr>
                        <td class="activite" style="vertical-align:middle">Activité 3</td>
						<td>'.$nf4a3.'%';
							if(($nf4a3 >0) and ($nf4a3<25)){
							echo'<div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a3.'%"></div>
                                 </div>';}
						    elseif(($nf4a3 >= 25) and ($nf4a3<50)){
						    echo'<div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a3.'%"></div>
                                 </div>';}	
                            elseif(($nf4a3 >= 50) ){
							echo'<div class="progress">
                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf4a3.'%"></div>
                                 </div>';}	  
	                        else{
							echo'<div class="progress">
                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                  </div>';}
				   echo'</td>
				    </tr>
					
			<tfoot>
					<tr>
						<td class="activite" style="vertical-align:middle"><strong>Total Fiche N°4</strong></td>
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
					  // corrigé activité1
					    echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf4a1.'%)</h3>
					   <div class="list-group-item">';
					     
						 if($rf4a1=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$bonrep.' :</strong> C\'est la bonne réponse !</p>
							<p class="remarque"> Le message est poli car il respecte les étapes d’un mail professionnel (voir le cours n°1) : la formule d’appel est adéquate et respecte le statut du destinataire. En plus, le style est formel et contient des expressions polies (je me permets, je vous remercie par avance). Le message se termine par un remerciement et des salutations.</p>
							';} 
							elseif($f4a1=='p1'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rep1.':</strong></p> <p>La bonne réponse est : « '.$bonrep.' »
				                                                <p class="remarque">Le message est trop direct, il commence directement par une question sans aucune formule de politesse ni signature.</p>';}
		                    elseif($f4a1=='p2'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rep2.':</strong></p> <p>La bonne réponse est : « '.$bonrep.' »
				                                                <p class="remarque">message peu courtois voire informel car la formule d’appel n’est pas adéquate (salut + un nom de famille). En plus, comme le message1, la demande est très directe, formulée avec une question directe et avec des phrases du langage informel « pourquoi pas moi ».</p>';}
		                    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                     echo'</div>';
					//activité2
						 echo'<h3 class="activite">Activité 2 ('.$nf4a2.'%)</h3>
					   <div class="list-group-item">';
					       echo'<h3>Question 1</h3>';
					      if($rf4a2q1=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a2q1.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a2q1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a2q1.':</strong></p> <p>La bonne réponse est : « que »';}
					      
						  echo'<h3>Question 2</h3>';
					      if($rf4a2q2=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a2q2.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a2q2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a2q2.':</strong></p> <p>La bonne réponse est : « dont »';}
					     
						 echo'<h3>Question 3</h3>';
					      if($rf4a2q3=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a2q3.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a2q3=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a2q3.':</strong></p> <p>La bonne réponse est : « qui »';}
					    
						echo'<h3>Question 4</h3>';
					      if($rf4a2q4=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a2q4.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a2q4=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a2q4.':</strong></p> <p>La bonne réponse est : « qui »';}
					   
					   
					   echo'</div>';
					   //activité3
						 echo'<h3 class="activite">Activité 3 ('.$nf4a3.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
					      if($f4a3q1=='prie'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q1.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q1.':</strong></p> <p>La bonne réponse est : « prie »';}
					     
                         echo'<h3>Question 2</h3>';
					      if($f4a3q2=='informer'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q2.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q2.':</strong></p> <p>La bonne réponse est : « informer »';}
                           
						   echo'<h3>Question 3</h3>';
					      if($f4a3q3=='possibilités'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q3.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q3=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q3.':</strong></p> <p>La bonne réponse est : « possibilités »';}
                         
						 echo'<h3>Question 4</h3>';
					      if($f4a3q4=='auprès'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q4.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q4=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q4.':</strong></p> <p>La bonne réponse est : « auprès »';}
                         
						 echo'<h3>Question 5</h3>';
					      if($f4a3q5=='retour'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q5.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q5=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q5.':</strong></p> <p>La bonne réponse est : « retour »';}
                         
						 echo'<h3>Question 6</h3>';
					      if($f4a3q6=='remercie'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q6.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q6=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q6.':</strong></p> <p>La bonne réponse est : « remercie »';}
                        
						 echo'<h3>Question 7</h3>';
					      if($f4a3q7=='En effet'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q7.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q7=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q7.':</strong></p> <p>La bonne réponse est : « En effet »';}
                        
						echo'<h3>Question 8</h3>';
					      if($f4a3q8=='accorder'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q8.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q8=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q8.':</strong></p> <p>La bonne réponse est : « accorder »';}
                        
						echo'<h3>Question 9</h3>';
					      if($f4a3q9=='Toutefois'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q9.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q9=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q9.':</strong></p> <p>La bonne réponse est : « Toutefois »';}
                        
						echo'<h3>Question 10</h3>';
					      if($f4a3q10=='étudier'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q10.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q10=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q10.':</strong></p> <p>La bonne réponse est : « étudier »';}
                        
						echo'<h3>Question 11</h3>';
					      if($f4a3q11=='entière'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q11.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q11=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q11.':</strong></p> <p>La bonne réponse est : « entière »';}
                        
						echo'<h3>Question 12</h3>';
					      if($f4a3q12=='tout'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f4a3q12.' :</strong> C\'est la bonne réponse !</p>';}
						elseif($f4a3q12=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f4a3q12.':</strong></p> <p>La bonne réponse est : « tout »';}
                        
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
		  