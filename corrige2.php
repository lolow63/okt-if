<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
        <link rel="stylesheet" href="css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
		<!-- JavaScript Includes -->
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>  
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
			<?php include("include/navbar-topfix-cor1.php");
			include("include/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°2</h2><br/>
					<p>Félicitation ! Vous avez terminé votre deuxième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                <?php
                       if ($_POST){
						   //varibale activite1
					   if(isset($_POST['f2a1q1'])){$f2a1q1 = ($_POST['f2a1q1']);} 
					   if(isset($_POST['f2a1q2'])){$f2a1q2 = ($_POST['f2a1q2']);} 
					   if(isset($_POST['f2a1q3'])){$f2a1q3 = ($_POST['f2a1q3']);} 
					   if(isset($_POST['f2a1q4'])){$f2a1q4 = ($_POST['f2a1q4']);} 
		               $nf2a1q1= 0;$nf2a1q2= 0;$nf2a1q3= 0;$nf2a1q4= 0;
					   $rf2a1q1='faux';$rf2a1q2='faux';$rf2a1q3='faux';$rf2a1q4='faux';
					   //varibale activite2
					   if(isset($_POST['f2a2qa'])){$f2a2qa = ($_POST['f2a2qa']);} 
					   if(isset($_POST['f2a2qb'])){$f2a2qb = ($_POST['f2a2qb']);} 
					   if(isset($_POST['f2a2qc'])){$f2a2qc = ($_POST['f2a2qc']);} 
					   if(isset($_POST['f2a2qd'])){$f2a2qd = ($_POST['f2a2qd']);} 
					   if(isset($_POST['f2a2qe'])){$f2a2qe = ($_POST['f2a2qe']);} 
						$nf2a2qa=0;$nf2a2qb=0;$nf2a2qc=0;$nf2a2qd=0;$nf2a2qe=0;
						$rf2a2qa='faux';$rf2a2qb='faux';$rf2a2qc='faux';$rf2a2qd='faux';$rf2a2qe='faux';
						 //varibale activite3
						 if(isset($_POST['reponse'])){$rf2a3 = str_replace(',', '', $_POST['reponse']);} else{$rf2a3='vous n\'avez pas repondu';}
		                 $nf2a3=0; $ok='faux';$nf2a3q1=0;$nf2a3q2=0;$nf2a3q3=0;$nf2a3q4=0;$nf2a3q5=0;
					   //activité 1 notes
		 if ($f2a1q1=='Demande d\'obtention d\'un crédit'){$nf2a1q1=$nf2a1q1+25; $rf2a1q1='vrai';}else{ $nf2a1q1; $rf2a1q1;}
		 if ($f2a1q2=='À la suite de'){$nf2a1q2=$nf2a1q2+25; $rf2a1q2='vrai';}else{ $nf2a1q2; $rf2a1q2;}
		 if ($f2a1q3=='Toutefois'){$nf2a1q3=$nf2a1q3+25; $rf2a1q3='vrai';}else{ $nf2a1q3; $rf2a1q3;}
		 if ($f2a1q4=='En conséquence'){$nf2a1q4=$nf2a1q4+25; $rf2a1q4='vrai';}else{ $nf2a1q3; $rf2a1q4;}
		 $nf2a1=$nf2a1q1+$nf2a1q2+$nf2a1q3+$nf2a1q4;
		
		 //note activite2
		 if ($f2a2qa=='Recrutement'){$nf2a2qa=$nf2a2qa+20; $rf2a2qa='vrai';}else{ $nf2a2qa; $rf2a2qa;}
		 if ($f2a2qb=='Révision'){$nf2a2qb=$nf2a2qb+20; $rf2a2qb='vrai';}else{ $nf2a2qb; $rf2a2qb;}
		 if ($f2a2qc=='Réception'){$nf2a2qc=$nf2a2qc+20; $rf2a2qc='vrai';}else{ $nf2a2qc; $rf2a2qc;}
		 if ($f2a2qd=='Interruption'){$nf2a2qd=$nf2a2qd+20; $rf2a2qd='vrai';}else{ $nf2a2qd; $rf2a2qd;}
	     if ($f2a2qe=='Report'){$nf2a2qe=$nf2a2qe+20; $rf2a2qe='vrai';}else{ $nf2a2qe; $rf2a2qe;}
		 $nf2a2=$nf2a2qa+$nf2a2qb+$nf2a2qc+$nf2a2qd+$nf2a2qe;
		
		 //note activité3
		 if($rf2a3=='12345'){$ok ='true' ;} else {$ok;}
		 if($rf2a3[0]=='1'){$nf2a3q1=20;}
		 if($rf2a3[1]=='2'){$nf2a3q2=20;}
		 if($rf2a3[2]=='3'){$nf2a3q3=20;}
		 if($rf2a3[3]=='4'){$nf2a3q4=20;}
		 if($rf2a3[4]=='5'){$nf2a3q5=20;}
		 $nf2a3=$nf2a3q1+$nf2a3q2+$nf2a3q3+$nf2a3q4+$nf2a3q5;
		 
		 $total=($nf2a1+$nf2a2+$nf2a3)/3;
		 // tableaux de note
		  echo'<table class="text-center table table-bordered table-striped table-condensed">';
						         echo'<tr>
						            <td class="activite" style="vertical-align:middle">Activité 1</td>
						            <td>'.$nf2a1.'%';
									 if(($nf2a1 >0) and ($nf2a1<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a1.'%"></div>
      </div>';}
						elseif(($nf2a1 >= 25) and ($nf2a1<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a1.'%"></div>
      </div>';}	
                        elseif(($nf2a1 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a1.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}	  
									
									
									
									
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 2</td>
									
						            <td>'.$nf2a2.'%';
									
									 if(($nf2a2 >0) and ($nf2a2<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a2.'%"></div>
      </div>';}
						elseif(($nf2a2 >= 25) and ($nf2a2<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a2.'%"></div>
      </div>';}	
                        elseif(($nf2a2 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a2.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 3</td>
						            <td>'.$nf2a3.'%';
									 if(($nf2a3 >0) and ($nf2a3<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a3.'%"></div>
      </div>';}
						elseif(($nf2a3 >= 25) and ($nf2a3<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a3.'%"></div>
      </div>';}	
                        elseif(($nf2a3 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf2a3.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									echo'</td>
						         </tr>

						         

						         

								<tfoot>
						         <tr>
						           <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°2</strong></td>
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
		  // correction activité 1
		  echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf2a1.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question 1</h3>';
						//q1
						if($rf2a1q1=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a1q1.': </strong>C\'est la bonne réponse !</p>';} 
		                 elseif(($f2a1q1=='Souhait d\'obtenir un crédit')or($f2a1q1=='Volonté d\'obtenir un crédit bancaire')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q1.':</strong></p> <p>La bonne réponse est : « Demande d\'obtention d\'un crédit »
						                                                  <p class="remarque"> On ne formule pas une demande avec un nom abstrait comme souhait, désir, volonté, etc.</p>';}
					   elseif($f2a1q1=='Possibilité d\'obtention d\'un crédit'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q1.':</strong></p> <p>La bonne réponse est : « Demande d\'obtention d\'un crédit »
				                                                <p class="remarque">Objet formulé de façon ambiguë car on sait pas si Mohammed offre ou demande un crédit bancaire</p>';}
						elseif($f2a1q2=='vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q1.':</strong></p>';}										
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q1.':</strong></p> <p>La bonne réponse est : « Demande d\'obtention d\'un crédit »';}
					   
					   echo'<h3>Question 2</h3>';
					   if($rf2a1q2=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a1q2.': </strong>C\'est la bonne réponse !</p><p class="remarque">Il s\'agit du rappel du contexte</p>';} 
		                 
						 elseif($f2a1q2=='vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q2.':</strong></p>';}
						
						
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q2.':</strong></p> <p>La bonne réponse est : « Demande d\'obtention d\'un crédit »
						
						<p class="remarque">Ce connecteur sert à exprimer un rapport de cause, ce qui n\'est pas le cas ici </p>';}
					
					echo'<h3>Question 3</h3>';
					if($rf2a1q3=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a1q3.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a1q2=='vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q3.':</strong></p>';}
						else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q3.':</strong></p> <p>La bonne réponse est : « Toutefois »';}
						 
					echo'<h3>Question 4</h3>';
					if($rf2a1q4=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a1q4.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a1q2=='vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q4.':</strong></p>';}
						else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a1q4.':</strong></p> <p>La bonne réponse est : « En conséquence »</p>';}
						 echo'</div>
						 <h3 class="activite">Activité 2 ('.$nf2a2.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question a</h3>';
						 //qa
						 if($rf2a2qa=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a2qa.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a2qa=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qa.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qa.':</strong></p> <p>La bonne réponse est : « Recrutement »';}
					 //ab
					 echo'<h3>Question b</h3>';
					 if($rf2a2qb=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a2qb.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a2qb=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qb.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qb.':</strong></p> <p>La bonne réponse est : « Révision »';}
					//qc
					 echo'<h3>Question c</h3>';
					 if($rf2a2qa=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a2qc.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a2qc=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qc.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qc.':</strong></p> <p>La bonne réponse est : « Réception »';}
					//qd
					 echo'<h3>Question d</h3>';
					 if($rf2a2qd=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a2qd.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a2qd=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qd.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qd.':</strong></p> <p>La bonne réponse est : « Interruption »';}
					//qe
					 echo'<h3>Question e</h3>';
					 if($rf2a2qe=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f2a2qe.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f2a2qe=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qe.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f2a2qe.':</strong></p> <p>La bonne réponse est : « Report »';}
					echo'</div>';
					//activité3
						 echo'<h3 class="activite">Activité 3 ('.$nf2a3.'%)</h3>
					   <div class="list-group-item">';
					//declaration des ligne
					        $ligne3='<li value="3"><i class="fa fa-arrows-v"></i> Demande de documentation</li>';
							$ligne5='<li value="5"><i class="fa fa-arrows-v"></i> Demande de prolongation de paiement</li>';
							$ligne1='<li value="1"><i class="fa fa-arrows-v"></i> Expédition de marchandises</li>';
							$ligne4='<li value="4"><i class="fa fa-arrows-v"></i> Confirmation de commande</li>';
							$ligne2='<li value="2"><i class="fa fa-arrows-v"></i> Annulation en partie de la commande passée précédemment</li>';
						if($ok=='true'){
						echo'<div class="row">
							<div class="col-md-6">
								<ol class="vertical">
									<li><span class="label label-info">1</span> Vous informez votre correspondant que vous expédiez des marchandises.</li>
									<li><span class="label label-info">2</span> Vous annoncez que vous annulez en partie la commande passée précédemment.</li>
									<li><span class="label label-info">3</span> Vous écrivez pour demander une documentation.</li>
									<li><span class="label label-info">4</span> Vous écrivez pour confirmer votre commande.</li>
									<li><span class="label label-info">5</span> Vous écrivez à votre banque pour demander une prolongation de paiement.</li>
								</ol>
								
							</div>
							<div class="col-md-6">
								<ol class="phrases vertical encours">
								<li value="1"><i class="fa fa-arrows-v"></i> Expédition de marchandises</li>
								<li value="2"><i class="fa fa-arrows-v"></i> Annulation en partie de la commande passée précédemment</li>
								<li value="3"><i class="fa fa-arrows-v"></i> Demande de documentation</li>
								<li value="4"><i class="fa fa-arrows-v"></i> Confirmation de commande</li>
								<li value="5"><i class="fa fa-arrows-v"></i> Demande de prolongation de paiement</li>
								</ol>
								
							</div>
						</div>
					</div>
					<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">C\'est correct !</strong></p>';}
					elseif($rf2a3=='pas de reponse')
						{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu:</strong></p>';} 
					else{
					echo'<div class="row">
							<div class="col-md-6">
								<ol class="vertical">
									<li><span class="label label-info">1</span> Vous informez votre correspondant que vous expédiez des marchandises.</li>
									<li><span class="label label-info">2</span> Vous annoncez que vous annulez en partie la commande passée précédemment.</li>
									<li><span class="label label-info">3</span> Vous écrivez pour demander une documentation.</li>
									<li><span class="label label-info">4</span> Vous écrivez pour confirmer votre commande.</li>
									<li><span class="label label-info">5</span> Vous écrivez à votre banque pour demander une prolongation de paiement.</li>
								</ol>
								
							</div>
							<div class="col-md-6">
								<ol class="phrases vertical encours">';
								//ligne1
								if($rf2a3[0]==1) {echo $ligne1;}
								elseif($rf2a3[0]==2) {echo $ligne2;}
								elseif($rf2a3[0]==3) {echo $ligne3;}
								elseif($rf2a3[0]==4) {echo $ligne4;}
								elseif($rf2a3[0]==5) {echo $ligne5;}
								//ligne2
								if($rf2a3[1]==1) {echo $ligne1;}
								elseif($rf2a3[1]==2) {echo $ligne2;}
								elseif($rf2a3[1]==3) {echo $ligne3;}
								elseif($rf2a3[1]==4) {echo $ligne4;}
								elseif($rf2a3[1]==5) {echo $ligne5;}
								
								//ligne3
								if($rf2a3[2]==1) {echo $ligne1;}
								elseif($rf2a3[2]==2) {echo $ligne2;}
								elseif($rf2a3[2]==3) {echo $ligne3;}
								elseif($rf2a3[2]==4) {echo $ligne4;}
								elseif($rf2a3[2]==5) {echo $ligne5;}
								//ligne4
								if($rf2a3[3]==1) {echo $ligne1;}
								elseif($rf2a3[3]==2) {echo $ligne2;}
								elseif($rf2a3[3]==3) {echo $ligne3;}
								elseif($rf2a3[3]==4) {echo $ligne4;}
								elseif($rf2a3[3]==5) {echo $ligne5;}
								//ligne5
								if($rf2a3[4]==1) {echo $ligne1;}
								elseif($rf2a3[4]==2) {echo $ligne2;}
								elseif($rf2a3[4]==3) {echo $ligne3;}
								elseif($rf2a3[4]==4) {echo $ligne4;}
								elseif($rf2a3[4]==5) {echo $ligne5;}
								echo'</ol></br>
							</div>';
							echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Hum, ce n\'est pas tout à fait ça...</strong></p> <p>La bonne réponse est :
							<div class="col-md-6">
								<ol class="vertical">
									<li><span class="label label-info">1</span> Vous informez votre correspondant que vous expédiez des marchandises.</li>
									<li><span class="label label-info">2</span> Vous annoncez que vous annulez en partie la commande passée précédemment.</li>
									<li><span class="label label-info">3</span> Vous écrivez pour demander une documentation.</li>
									<li><span class="label label-info">4</span> Vous écrivez pour confirmer votre commande.</li>
									<li><span class="label label-info">5</span> Vous écrivez à votre banque pour demander une prolongation de paiement.</li>
								</ol>
								
							</div>
							<div class="col-md-6">
								<ol class="phrases vertical encours">
								<li value="1"><i class="fa fa-arrows-v"></i> Expédition de marchandises</li>
								<li value="2"><i class="fa fa-arrows-v"></i> Annulation en partie de la commande passée précédemment</li>
								<li value="3"><i class="fa fa-arrows-v"></i> Demande de documentation</li>
								<li value="4"><i class="fa fa-arrows-v"></i> Confirmation de commande</li>
								<li value="5"><i class="fa fa-arrows-v"></i> Demande de prolongation de paiement</li>
								</ol>
								
							';
						}
						
						
						
						echo'</div>';}?>
					</div><!--fin row-->
					
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							  <h4 class="modal-title resume text-center" id="myModalLabel"><img src="img/le-saviez-vous.png" alt="" class="img-responsive"></h4>
							</div>
							<div class="modal-body body-saviez-vous">
								<h2 class="resume">EN RÉSUMÉ :</h2>
								<div>
										<p class="resume">L’objet d’un mail commence très souvent par un nom dérivé d’un verbe. Le nom est toujours suivi du mot « de » ou « des » : Je vous envoie les documents = envoi de documents</p>
										
								</div>
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
				 <img src="img/le-saviez-vous.png" alt="" class="img-responsive">
				 </div>
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer><!--ANCRE NAVBAR-TOPFIX--><div id="bottom"></div>
			<?php include("include/footer.php"); ?> 
		</footer>
		<!-- JavaScript Includes -->
		<script type="text/javascript">
			$(document).ready(function(){
				var group = $("ol.phrases").sortable({
					group: 'phrases',

				onDrop: function (item, container, _super) {
					$('#ordre').val(group.sortable("serialize").get().join())
					_super(item, container)
					},
				serialize: function (parent, children, isContainer) {
					return isContainer ? children.join() : parent.val()
					},
				})
			})
		</script>
	</body>
</html>
		  