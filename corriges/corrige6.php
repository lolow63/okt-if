<!doctype html>
<html lang="fr">
    <head>
		<title>Fiche 6: corrigé | Formation de l'Institut Français Algérie</title>
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
					<a class="navbar-brand" href="#">FICHE 6: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche7.php">FICHE SUIVANTE</a></li>
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
				 <h2>Corrigé de la fiche N°6</h2><br/>
					<p>Félicitation ! Vous avez terminé votre sixième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                <?php
						if ($_POST){
						   //varibale activité1
					   if(isset($_POST['f6a1q1'])){$f6a1q1 = ($_POST['f6a1q1']);} 
					   if(isset($_POST['f6a1q2'])){$f6a1q2 = ($_POST['f6a1q2']);}
					   if(isset($_POST['f6a1q3'])){$f6a1q3 = ($_POST['f6a1q3']);}
		               $nf6a1q1=0;$nf6a1q2=0;$nf6a1q3=0;
					   //variable activité2
					   if(isset($_POST['f6a2q1'])){$f6a2q1 = ($_POST['f6a2q1']);} 
					   $nf6a2q1=0;
					   $chek1='false';
                       $chek2='false';
                       $chek3='false';
					   $chek4='false';
                       $checked1='checked="checked"';
					   $checked2='checked="checked"';
					   $checked3='checked="checked"';
					   $checked4='checked="checked"';
					   if(isset($_POST['f6a2q2a'])){$f6a2q2a = ($_POST['f6a2q2a']); $chek1='true';$checked1;} else { $f6a2q2a='';$chek1;$checked1='';}
					   if(isset($_POST['f6a2q2b'])){$f6a2q2b = ($_POST['f6a2q2b']); $chek2='true';$checked2;} else { $f6a2q2b='';$chek2;$checked2='';}
					   if(isset($_POST['f6a2q2c'])){$f6a2q2c = ($_POST['f6a2q2c']); $chek3='true';$checked3;} else { $f6a2q2c='';$chek2;$checked3='';}
					   if(isset($_POST['f6a2q2d'])){$f6a2q2d = ($_POST['f6a2q2d']); $chek4='true';$checked4;} else { $f6a2q2d='';$chek2;$checked4='';}
                       //variable activité3
					   if(isset($_POST['f6a3q1'])){$f6a3q1 = ($_POST['f6a3q1']);}
                       if(isset($_POST['f6a3q2'])){$f6a3q2 = ($_POST['f6a3q2']);}
                       if(isset($_POST['f6a3q3'])){$f6a3q3 = ($_POST['f6a3q3']);} 
                        $nf6a3q1=0; $nf6a3q2=0;$nf6a3q3=0;					   
					   //note avtivité1
                        
					  if ($f6a1q1=='Demandant')   {$nf6a1q1=$nf6a1q1+35;}else{ $nf6a1q1;}
                      if ($f6a1q2=='étant absent')   {$nf6a1q2=$nf6a1q2+35;}else{ $nf6a1q2;}	
					  if ($f6a1q3=='ne sont pas arrivées')   {$nf6a1q3=$nf6a1q3+30;}else{ $nf6a1q3;}	
					  $nf6a1=$nf6a1q1+$nf6a1q2+$nf6a1q3;
					  //note activité2
					  if ($f6a2q1=='Fortement souhaitable'){$nf6a2q1=$nf6a2q1+50;}else{ $nf6a2q1;}
					   $nf6a2q2=0;
					  if(($chek1=='true')&&($chek2=='false') &&($chek3=='true')&&($chek4=='false')){$nf6a2q2=$nf6a2q2+50;} 
					   $nf6a2=$nf6a2q1+$nf6a2q2;
					   //note activité 3
					   if ($f6a3q1=='répondrait'){$nf6a3q1=$nf6a1q1+35;}else{ $nf6a3q1;}
					   if ($f6a3q2=='accepteriez'){$nf6a3q2=$nf6a3q2+35;}else{ $nf6a3q2;}
					   if ($f6a3q3=='contienne'){$nf6a3q3=$nf6a3q3+30;}else{ $nf6a3q3;}
					   $nf6a3=$nf6a3q1+$nf6a3q2+$nf6a3q3;
					   $total=($nf6a1+$nf6a2+$nf6a3)/3;
					   
					   // tableaux de note
		  echo'<table class="text-center table table-bordered table-striped table-condensed">';
						         echo'<tr>
						            <td class="activite" style="vertical-align:middle">Activité 1</td>
						            <td>'.$nf6a1.'%';
									 if(($nf6a1 >0) and ($nf6a1<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a1.'%"></div>
      </div>';}
						elseif(($nf6a1 >= 25) and ($nf6a1<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a1.'%"></div>
      </div>';}	
                        elseif(($nf6a1 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a1.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}	  
									
									
									
									
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 2</td>
									
						            <td>'.$nf6a2.'%';
									
									 if(($nf6a2 >0) and ($nf6a2<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a2.'%"></div>
      </div>';}
						elseif(($nf6a2 >= 25) and ($nf6a2<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a2.'%"></div>
      </div>';}	
                        elseif(($nf6a2 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a2.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 3</td>
						            <td>'.$nf6a3.'%';
									 if(($nf6a3 >0) and ($nf6a3<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a3.'%"></div>
      </div>';}
						elseif(($nf6a3 >= 25) and ($nf6a3<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a3.'%"></div>
      </div>';}	
                        elseif(($nf6a3 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf6a3.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									echo'</td>
						         </tr>

						         

						         

								<tfoot>
						         <tr>
						           <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°6</strong></td>
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
						         </tr></tfoot>
                                 </table><br/>
								 </div><br/>';
					   
					   
					//courigé avtivité1
					 echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf6a1.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
					if($f6a1q1==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f6a1q1=='Demandant'){
					echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a1q1.': </strong>C\'est la bonne réponse !</p>
					<p class="remarque">On exprime ici un rapport de but</p>';} 	
		             else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a1q1.':</strong></p> <p>La bonne réponse est : « demandant »
					 <p class="remarque">On exprime ici un rapport de but</p>';}
		              echo'<h3>Question 2</h3>';
					 if($f6a1q2==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f6a1q2=='étant absent'){
					echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a1q2.': </strong>C\'est la bonne réponse !</p>
					<p class="remarque">Il s\'agit d\'une cause</p>';} 	
		             else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a1q2.':</strong></p> <p>La bonne réponse est : « étant absent »
					 <p class="remarque">Il s\'agit d\'une cause</p>';}
		             echo'<h3>Question 3</h3>';
					if($f6a1q3==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f6a1q3=='ne sont pas arrivées'){
					echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a1q3.': </strong>C\'est la bonne réponse !</p>
					<p class="remarque">On exprime ici un rapport de cause</p>';} 	
		             else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a1q3.':</strong></p> <p>La bonne réponse est : « ne sont pas arrivées »
					 <p class="remarque">On exprime ici un rapport de cause</p>';}
		                  echo'</div>';
		                 //corrigé activité2
						 echo'<h3 class="activite">Activité 2 ('.$nf6a2.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
						if($f6a2q1=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f6a2q1=='Fortement souhaitable'){
					echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a2q1.': </strong>C\'est la bonne réponse !</p>
					<p class="remarque">M. Khadraoui recommande aux membres du comité d’assister pour examiner le dossier de Mohammed RAÏS</p>';} 	
		             else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a2q1.':</strong></p> <p>La bonne réponse est : « Fortement souhaitable »
					 <p class="remarque">M. Khadraoui recommande aux membres du comité d’assister pour examiner le dossier de Mohammed RAÏS</p>';}
		               echo'<h3>Question 2</h3>';
                       $f6a2r1=	'<div class="row">  
						<div class="label col-md-6 col-xs-12">
						
							   <div class="input-group">
								<span class="input-group-addon">                                     
								<input type="checkbox" name="f6a2q2a" '.$checked1.'id="f6a2q2p1" value="Je serai en mission ce jour-là à Ghardaia" />
							</span><label for="f6a2q2p1" class="form-control">
							Je serai en mission ce jour-là à Ghardaia.
							</label><p class="remarque">Motif professionnellement acceptable.</p></div></div>
						<div class="label col-md-6 col-xs-12"><div class=" input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2b" '.$checked2.'id="f6a2q2p2" value="Je suis débordé ces derniers temps" />
							</span><label for="f6a2q2p2" class="2 form-control">
							Je suis débordé ces derniers temps.
							</label><p class="remarque">Ce n’est pas un motif acceptable.</p></div></div>
						<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2c" '.$checked3.'id="f6a2q2p3" value="Je serai en déplacement à l\'étranger" />
							</span><label for="f6a2q2p3" class="2 form-control">
							Je serai en déplacement à l’étranger.
							</label><p class="remarque">Motif qui sera accepté sans problème.</p></div></div>
							<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2d"'.$checked4.' id="f6a2q2p4" value="Je n’ai pas le moral" />
							</span><label for="f6a2q2p4" class="2 form-control">
							Je n’ai pas le moral.
							</label><p class="remarque">On ne devrait mêler vie privé (psychologique ou sociale) et vie professionnelle.</p></div></div>
					</div> ';			   
					   if(($chek1=='false')&&($chek2=='false') &&($chek3=='false')&&($chek4=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';} 
                       elseif(($chek1=='true')&&($chek2=='false') &&($chek3=='true')&&($chek4=='false')){
						   
						   echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a2r1.' </strong>C\'est la bonne réponse !</p>';} 					   
					   else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a2r1.'</strong></p> <p>La bonne réponse est
					   <div class="label col-md-6 col-xs-12">
						
							   <div class="input-group">
								<span class="input-group-addon">                                     
								<input type="checkbox" name="f6a2q2a" checked="checked" id="f6a2q2p1" value="Je serai en mission ce jour-là à Ghardaia" />
							</span><label for="f6a2q2p1" class="form-control">
							Je serai en mission ce jour-là à Ghardaia.
							</label></div></div>
						<div class="label col-md-6 col-xs-12"><div class=" input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2b" id="f6a2q2p2" value="Je suis débordé ces derniers temps" />
							</span><label for="f6a2q2p2" class="2 form-control">
							Je suis débordé ces derniers temps.
							</label></div></div>
						<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2c" checked="checked" id="f6a2q2p3" value="Je serai en déplacement à l\'étranger" />
							</span><label for="f6a2q2p3" class="2 form-control">
							Je serai en déplacement à l’étranger.
							</label></div></div>
							<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2d" id="f6a2q2p4" value="Je n’ai pas le moral" />
							</span><label for="f6a2q2p4" class="2 form-control">
							Je n’ai pas le moral.
							</label></div></div>
					</div>';} echo'</div>';
					//corrigé activité3
					echo'<h3 class="activite">Activité 3 ('.$nf6a3.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
						if($f6a3q1=='répondrait'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a3q1.': </strong>C\'est la bonne réponse !</p><p class="remarque">Après « au cas où » le conditionnel est le seul temps qui convient.</p>';} 
					    
						elseif($f6a3q1=='répondait'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q1.':</strong></p><p>La bonne réponse est : « répondrait »</p><p class="remarque">L’imparfait ne convient pas ici.</p>';}
					    elseif($f6a3q1=='répond'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q1.':</strong></p><p>La bonne réponse est : « répondrait »</p><p class="remarque">Le présent ne convient.</p>';}
					    else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q1.':</strong></p>';}
						
						 echo'<h3>Question 2</h3>';
						if($f6a3q2=='accepteriez'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a3q2.': </strong>C\'est la bonne réponse !</p><p class="remarque">Après « dans l’hypothèse où », on doit utiliser uniquement le conditionnel).</p>';} 
					    
						elseif($f6a3q2=='acceptiez'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q2.':</strong></p><p>La bonne réponse est : « accepteriez »</p><p class="remarque">L’imparfait ne convient pas ici.</p>';}
					    elseif($f6a3q2=='acceptez'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q2.':</strong></p><p>La bonne réponse est : « accepteriez »</p><p class="remarque">Le présent ne convient.</p>';}
					    else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q2.':</strong></p>';}
						
						echo'<h3>Question 3</h3>';
						if($f6a3q3=='contienne'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f6a3q3.': </strong>C\'est la bonne réponse !</p><p class="remarque">Après « à moins que » on doit utiliser le subjonctif. Il s’agit d’un fait envisagé et non pas réel.</p>';} 
					    
						elseif($f6a3q2=='contient'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q3.':</strong></p><p>La bonne réponse est : « contienne »</p><p class="remarque">Le présent l’indicatif exprime un fait réel qui ne convient pas à cette situation..</p>';}
					    elseif($f6a3q3=='contenait'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q3.':</strong></p><p>La bonne réponse est : « contienne »</p><p class="remarque">L’imparfait de l’indicatif exprime un fait réel qui ne convient pas à cette situation.</p>';}
					    else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f6a3q3.':</strong></p>';}
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
							<p class="resume">Pour réussir l’organisation d’une réunion, il convient d’insérer dans l’invitation l’ensemble des éléments suivants :<br/>
							- date / lieu / heure. Il serait idéal de proposer trois dates possibles.<br/>
							- rappeler aux participants de confirmer / infirmer leur présence.</p>
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
		  