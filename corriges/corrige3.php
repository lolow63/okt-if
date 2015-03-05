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
		<!-- JavaScript Includes -->
		<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
        <script src="../js/sortable.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
		<script src="../js/transition.js"></script>
		<script src="../js/collapse.js"></script>
		<script src="../js/dropdown.js"></script>
		<script src="../js/scrollspy.js"></script>  
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
					<a class="navbar-brand" href="#">FICHE 3: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche4.php">FICHE SUIVANTE</a></li>
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
				 <h2>Corrigé de la fiche N°3</h2><br/>
					<p>Félicitation ! Vous avez terminé votre troisième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		               <?php
                       if ($_POST){
					   if(isset($_POST['f3a1q1'])){$f3a1q1 = ($_POST['f3a1q1']);} 
					   if(isset($_POST['f3a1q2'])){$f3a1q2 = ($_POST['f3a1q2']);} 
					   if(isset($_POST['f3a1q3'])){$f3a1q3 = ($_POST['f3a1q3']);}
					   if(isset($_POST['f3a1q4'])){$f3a1q4 = ($_POST['f3a1q4']);} 
					   if(isset($_POST['f3a1q5'])){$f3a1q5 = ($_POST['f3a1q5']);} 
					   if(isset($_POST['f3a1q6'])){$f3a1q6 = ($_POST['f3a1q6']);} ;
					    
					   $nf3a1q1= 0;$nf3a1q2= 0;$nf3a1q3= 0;$nf3a1q4= 0;$nf3a1q5= 0;$nf3a1q6= 0;
					   $rf3a1q1='faux';$rf3a1q2='faux';$rf3a1q3='faux';$rf3a1q4='faux';$rf3a1q5='faux';$rf3a1q6='faux';
					   if(isset($_POST['f3a2qa'])){$f3a2qa = ($_POST['f3a2qa']);}
					   if(isset($_POST['f3a2qb'])){$f3a2qb = ($_POST['f3a2qb']);}
					   if(isset($_POST['f3a2qc'])){$f3a2qc = ($_POST['f3a2qc']);}
					   if(isset($_POST['f3a2qd'])){$f3a2qd = ($_POST['f3a2qd']);}
					   if(isset($_POST['f3a2qe'])){$f3a2qe = ($_POST['f3a2qe']);}
					   if(isset($_POST['f3a2qf'])){$f3a2qf = ($_POST['f3a2qf']);}
					   $nf3a2qa=0;$nf3a2qb=0;$nf3a2qc=0;$nf3a2qd=0;$nf3a2qe=0;$nf3a2qf=0;
					   $rf3a2qa='faux';$rf3a2qb='faux';$rf3a2qc='faux';$rf3a2qd='faux';$rf3a2qe='faux';$rf3a2qf='faux';
					   //variable activité3
					   //question a
					  $chek='false';
                      $chek1='false';
                      $chek2='false';
                      $nf3a3q1=0;
                      $checked='checked="checked"';
                      $checked2='checked="checked"';
                      $checked3='checked="checked"';
                     if(isset($_POST['f3a3qa1'])){$f3a3qa1 = ($_POST['f3a3qa1']); $chek='true';$checked;} else { $f3a3qa1='';$chek;$checked='';}
                     if(isset($_POST['f3a3qa2'])){$f3a3qa2 = ($_POST['f3a3qa2']); $chek1='true';$checked2;} else {$f3a3qa2='';$chek1;$checked2='';}
                     if(isset($_POST['f3a3qa3'])){$f3a3qa3 = ($_POST['f3a3qa3']); $chek2='true';$checked3;} else {$f3a3qa3='';$chek2;$checked3='';}
					  //question b
					  $chekb='false';
                      $chekb1='false';
                      $chekb2='false';
                      $nf3a3q2=0;
                      $checkedb='checked="checked"';
                      $checkedb2='checked="checked"';
                      $checkedb3='checked="checked"';
                     if(isset($_POST['f3a3qb1'])){$f3a3qb1 = ($_POST['f3a3qb1']); $chekb='true';$checkedb;} else { $f3a3qb1='';$chekb;$checkedb='';}
                     if(isset($_POST['f3a3qb2'])){$f3a3qb2 = ($_POST['f3a3qb2']); $chekb1='true';$checkedb2;} else {$f3a3qb2='';$chekb1;$checkedb2='';}
                     if(isset($_POST['f3a3qb3'])){$f3a3qb3 = ($_POST['f3a3qb3']); $chekb2='true';$checkedb3;} else {$f3a3qb3='';$chekb2;$checkedb3='';} 
					    //question c
					  $chekc='false';
                      $chekc1='false';
                      $chekc2='false';
                      $nf3a3q3=0;
                      $checkedc='checked="checked"';
                      $checkedc2='checked="checked"';
                      $checkedc3='checked="checked"';
                     if(isset($_POST['f3a3qc1'])){$f3a3qc1 = ($_POST['f3a3qc1']); $chekc='true';$checkedc;} else { $f3a3qc1='';$chekc;$checkedc='';}
                     if(isset($_POST['f3a3qc2'])){$f3a3qc2 = ($_POST['f3a3qc2']); $chekc1='true';$checkedc2;} else {$f3a3qc2='';$chekc1;$checkedc2='';}
                     if(isset($_POST['f3a3qc3'])){$f3a3qc3 = ($_POST['f3a3qc3']); $chekc2='true';$checkedc3;} else {$f3a3qc3='';$chekc2;$checkedc3='';} 
					   
					   //question c
					  $chekd='false';
                      $chekd1='false';
                      $chekd2='false';
                      $nf3a3q4=0;
                      $checkedd='checked="checked"';
                      $checkedd2='checked="checked"';
                      $checkedd3='checked="checked"';
                     if(isset($_POST['f3a3qd1'])){$f3a3qd1 = ($_POST['f3a3qd1']); $chekd='true';$checkedd;} else { $f3a3qd1='';$chekd;$checkedd='';}
                     if(isset($_POST['f3a3qd2'])){$f3a3qd2 = ($_POST['f3a3qd2']); $chekd1='true';$checkedd2;} else {$f3a3qd2='';$chekd1;$checkedd2='';}
                     if(isset($_POST['f3a3qd3'])){$f3a3qd3 = ($_POST['f3a3qd3']); $chekd2='true';$checkedd3;} else {$f3a3qd3='';$chekd2;$checkedd3='';} 




					  //activité 1 note
					   if ($f3a1q1=='a travaillé')   {$nf3a1q1=$nf3a1q1+16; $rf3a1q1='vrai';}else{ $nf3a1q1; $rf3a1q1;}
					   if ($f3a1q2=='avez écrit')    {$nf3a1q2=$nf3a1q2+16; $rf3a1q2='vrai';}else{ $nf3a1q2; $rf3a1q2;}
					   if ($f3a1q3=='est arrivée')   {$nf3a1q3=$nf3a1q3+17; $rf3a1q3='vrai';}else{ $nf3a1q3; $rf3a1q3;}
					   if ($f3a1q4=='avons répondu'){$nf3a1q4=$nf3a1q4+17; $rf3a1q4='vrai';}else{ $nf3a1q4; $rf3a1q4;}
					   if ($f3a1q5=='sont restés')   {$nf3a1q5=$nf3a1q5+17; $rf3a1q5='vrai';}else{ $nf3a1q5; $rf3a1q5;}
					   if ($f3a1q6=='est devenu')        {$nf3a1q6=$nf3a1q6+17; $rf3a1q6='vrai';}else{ $nf3a1q6; $rf3a1q6;}
					   $nf3a1=$nf3a1q1+$nf3a1q2+$nf3a1q3+$nf3a1q4+$nf3a1q5+$nf3a1q6;
					   //activité 2 note
					 if ($f3a2qa=='informel')   {$nf3a2qa=$nf3a2qa+16; $rf3a2qa='vrai';}else{ $nf3a2qa; $rf3a2qa;}
					   if ($f3a2qb=='informel')   {$nf3a2qb=$nf3a2qb+16; $rf3a2qb='vrai';}else{ $nf3a2qb; $rf3a2qb;}
					   if ($f3a2qc=='informel')   {$nf3a2qc=$nf3a2qc+17; $rf3a2qc='vrai';}else{ $nf3a2qc; $rf3a2qc;}
					   if ($f3a2qd=='informel')   {$nf3a2qd=$nf3a2qd+17; $rf3a2qd='vrai';}else{ $nf3a2qd; $rf3a2qd;}
					   if ($f3a2qe=='informel')   {$nf3a2qe=$nf3a2qe+17; $rf3a2qe='vrai';}else{ $nf3a2qe; $rf3a2qe;}
					   if ($f3a2qf=='formel')   {$nf3a2qf=$nf3a2qf+17; $rf3a2qf='vrai';}else{ $nf3a2qf; $rf3a2qf;}
					   $nf3a2=$nf3a2qa+$nf3a2qb+$nf3a2qc+$nf3a2qd+$nf3a2qe+$nf3a2qf;
					  
					   //activité 3 note
					   if(($chek=='true')&&($chek1=='true') &&($chek2=='false')){$nf3a3q1=$nf3a3q1+25;} 
					   if(($chekb=='true')&&($chekb1=='false') &&($chekb2=='true')){$nf3a3q2=$nf3a3q2+25;}
					   if(($chekc=='false')&&($chekc1=='true') &&($chekc2=='true')){$nf3a3q3=$nf3a3q3+25;}
					    if(($chekd=='false')&&($chekd1=='true') &&($chekd2=='true')){$nf3a3q4=$nf3a3q4+25;}
					   
					   $nf3a3=$nf3a3q1+$nf3a3q2+$nf3a3q3+$nf3a3q4;
					   
					   
					   $total=($nf3a1+$nf3a2+$nf3a3)/3;
					   
					   
					    // tableaux de note
		  echo'<table class="text-center table table-bordered table-striped table-condensed">';
			echo'<tr>
	              <td class="activite" style="vertical-align:middle">Activité 1</td>
				  <td>'.$nf3a1.'%';
	                if(($nf3a1 >0) and ($nf3a1<25)){
					echo'<div class="progress">
                             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a1.'%"></div>
                         </div>';}
				    elseif(($nf3a1 >= 25) and ($nf3a1<50)){
					echo'<div class="progress">
                             <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a1.'%"></div>
                        </div>';}	
                    elseif(($nf3a1 >= 50) ){
					echo'<div class="progress">
                             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a1.'%"></div>
                       </div>';}	  
	                else{
				    echo'<div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                         </div>';}	  
				echo'</td>
			</tr>
			<tr>
                  <td class="activite" style="vertical-align:middle">Activité 2</td>
				  <td>'.$nf3a2.'%';
				    if(($nf3a2 >0) and ($nf3a2<25)){
				    echo'<div class="progress">
                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a2.'%"></div>
                         </div>';}
					elseif(($nf3a2 >= 25) and ($nf3a2<50)){
				    echo'<div class="progress">
                             <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a2.'%"></div>
                         </div>';}	
                    elseif(($nf3a2 >= 50) ){
			        echo'<div class="progress">
                           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a2.'%"></div>
                         </div>';}	  
	                else{
			        echo'<div class="progress">
                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                         </div>';}
			     echo'</td>
		    </tr>
			
			<tr>
                 <td class="activite" style="vertical-align:middle">Activité 3</td>
			     <td>'.$nf3a3.'%';
				    if(($nf3a3 >0) and ($nf3a3<25)){
				    echo'<div class="progress">
                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a3.'%"></div>
                         </div>';}
				    elseif(($nf3a3 >= 25) and ($nf3a3<50)){
					echo'<div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a3.'%"></div>
                         </div>';}	
                    elseif(($nf3a3 >= 50) ){
					echo'<div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf3a3.'%"></div>
                         </div>';}	  
	                else{
					echo'<div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                         </div>';}
				echo'</td>
			</tr>
			
		<tfoot>
			<tr>
				<td class="activite" style="vertical-align:middle"><strong>Total Fiche N°3</strong></td>
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
					   
					   
					   
					   
					  echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf3a1.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question 1</h3>';
						
						if($f3a1q1==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($rf3a1q1=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q1.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q1.':</strong></p> <p>La bonne réponse est : « a travaillé »';}
					    
					   echo' <h3>Question 2</h3>';
					   if($f3a1q2==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif($rf3a1q2=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q2.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q2.':</strong></p> <p>La bonne réponse est : « aver écrit »';}
					   
					   echo' <h3>Question 3</h3>';
					   if($f3a1q3==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif($rf3a1q3=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q3.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q3.':</strong></p> <p>La bonne réponse est : « est arrivée »';}
					   echo' <h3>Question 4</h3>';
					   if($f3a1q4==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif($rf3a1q4=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q3.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q3.':</strong></p> <p>La bonne réponse est : « avons répondu »';}
					   echo' <h3>Question 5</h3>';
					   if($f3a1q5==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   
					   elseif($rf3a1q5=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q5.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q5.':</strong></p> <p>La bonne réponse est : « sont restés »';}
					   echo' <h3>Question 6</h3>';
					   if($f3a1q6==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « est nu »';}
					   
					   elseif($rf3a1q6=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a1q6.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a1q6.':</strong></p> <p>La bonne réponse est : « est devenu »';}
					   
					   echo'</div>';
					   //activite2					   
				        echo'<h3 class="activite">Activité 2 ('.$nf3a2.'%)</h3>
						<div class="list-group-item">
					     <h3>Question a</h3>';
						
						if($f3a2qa==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
						elseif($rf3a2qa=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qa.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qa.':</strong></p> <p>La bonne réponse est : « Informel »';}
					    
					   echo' <h3>Question b</h3>';
					   if($f3a2qb==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
					   elseif($rf3a2qb=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qb.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qb.':</strong></p> <p>La bonne réponse est : « Informel »';}
					   
					   echo' <h3>Question c</h3>';
					   if($f3a2qc==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
					   elseif($rf3a2qc=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qc.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qc.':</strong></p> <p>La bonne réponse est : « est arrivée »';}
					   
					   echo' <h3>Question d</h3>';
					   if($f3a2qd==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
					   elseif($rf3a2qd=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qd.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qd.':</strong></p> <p>La bonne réponse est : « avons répondu »';}
					   
					   echo' <h3>Question e</h3>';
					   if($f3a2qe==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
					   
					   elseif($rf3a2qe=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qe.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qe.':</strong></p> <p>La bonne réponse est : « sont restés »';}
					   
					   echo' <h3>Question f</h3>';
					   if($f3a2qf==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p> <p>La bonne réponse est : « Informel »';}
					   
					   elseif($rf3a2qf=='vrai'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a2qf.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a2qf.':</strong></p> <p>La bonne réponse est : « Formel »';}
					   
					   echo'</div>
				        <h3 class="activite">Activité 3 ('.$nf3a3.'%)</h3>';
						$f3a3r1='<ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qa1" '.$checked.' id="f3a3qap1"/>
								<label for="f3a3qap1">Je représente l’association Tadhamon.</label></li>
								<li><input type="checkbox" name="f3a3qa2" '.$checked2.'id="f3a3qap2"/>
								<label for="f3a3qap2">L’association Tadhamon m’a chargé de la représenter.</label><p class="remarque">approche trop impersonnelle.</p></li>
								<li><input type="checkbox" name="f3a3qa3" '.$checked3.'id="f3a3qap3"/>
								<label for="f3a3qap3">Je vous écris au nom de l’association Tadhamon.</label><p class="remarque">Approche polie et professionnelle, ce n’est pas Karim qui écrit mais l’association.</p></li>
							</ul>';
						$f3a3r2='<ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qb1" '.$checkedb.'id="f3a3qbp1"/>
								<label for="f3a3qbp1">Excusez-moi ce grand retard.</label><p class="remarque">Style à n’employer qu’à l’oral</p></li>
								<li><input type="checkbox" name="f3a3qb2" '.$checkedb2.'id="f3a3qbp2"/>
								<label for="f3a3qbp2">Je vous prie de m’excuser de ce grand retard.</label><p class="remarque">La demande d’excuse est polie.</p></li>
								<li><input type="checkbox" name="f3a3qb3" '.$checkedb3.'id="f3a3qbp3"/>
								<label for="f3a3qbp3">Veuillez agréer mes sincères excuses pour ce grand retard.</label><p class="remarque">Veuillez agréer ne s’utilise que pour saluer à la fin du message</p></li>
							</ul>';
							$f3a3r3='<ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qc1" '.$checkedc.'id="f3a3qcp1"/>
								<label for="f3a3qcp1">Ma mère est tombée malade et cela m’a empêché de venir.</label><p class="remarque">Approche professionnelle.</p></li>
								<li><input type="checkbox" name="f3a3qc2" '.$checkedc2.' id="f3a3qcp2"/>
								<label for="f3a3qcp2">Maman est malade et je n’ai donc pas pu venir.</label><p class="remarque">Maman est réservé cadre familial.</p></li>
								<li><input type="checkbox" name="f3a3qc3" '.$checkedc3.'id="f3a3qcp3"/>
								<label for="f3a3qcp3">J’ai pas pu venir à cause de ma mère qui est malade.</label><p class="remarque">Style à n’employer qu’à l’oral.</p></li>
							</ul>';
						
						$f3a3r4='<ul class="well list-unstyled a-rayer">
								<ul class="well a-rayer list-unstyled">
								<li><input type="checkbox" name="f3a3qd1" '.$checkedd.'id="f3a3qdp1"/>
								<label for="f3a3qdp1">Je vous prie de trouver ci-joint la fiche technique de notre association</label><p class="remarque">Formule très correct avec ce qu’il faut de politesse.</p></li>
								<li><input type="checkbox" name="f3a3qd2" '.$checkedd2.'id="f3a3qdp2"/>
								<label for="f3a3qdp2">J’ai mis la fiche technique de notre association dans le mail</label><p class="remarque">Formulation trop informelle.</p></li>
								<li><input type="checkbox" name="f3a3qd3" '.$checkedd3.'id="f3a3qdp3"/>
								<label for="f3a3qdp3">La fiche technique de notre association est en pièces jointes.</label><p class="remarque">Formulation trop directe.</p></li>
							</ul>';
						echo '<div class="list-group-item">
					     <h3>Question a</h3>';
						
						if(($chek=='false')&&($chek1=='false') &&($chek2=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif(($chek=='true')&&($chek1=='true') &&($chek2=='false')){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a3r1.' </strong>C\'est la bonne réponse !</p>';} 
						
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a3r1.'</strong></p> <p>La bonne réponse est : <ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qa1" checked="checked" id="f3a3qap1"/>
								<label for="f3a3qap1">Je représente l’association Tadhamon.</label></li>
								<li><input type="checkbox" name="f3a3qa2" checked="checked"id="f3a3qap2"/>
								<label for="f3a3qap2">L’association Tadhamon m’a chargé de la représenter.</label></li>
								<li><input type="checkbox" name="f3a3qa3" id="f3a3qap3"/>
								<label for="f3a3qap3">Je vous écris au nom de l’association Tadhamon.</label></li>
							</ul>';}
					    
					    echo'</div>';
						echo '<div class="list-group-item">
					     <h3>Question b</h3>';
						
						if(($chekb=='false')&&($chekb1=='false') &&($chekb2=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif(($chekb=='true')&&($chekb1=='false') &&($chekb2=='true')){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a3r2.' </strong>C\'est la bonne réponse !</p>';} 
						
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a3r2.'</strong></p> <p>La bonne réponse est :
						    <ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qb1" checked="checked" id="f3a3qbp1"/>
								<label for="f3a3qbp1">Excusez-moi ce grand retard.</label></li>
								<li><input type="checkbox" name="f3a3qb2" id="f3a3qbp2"/>
								<label for="f3a3qbp2">Je vous prie de m’excuser de ce grand retard.</label></li>
								<li><input type="checkbox" name="f3a3qb3" checked="checked" id="f3a3qbp3"/>
								<label for="f3a3qbp3">Veuillez agréer mes sincères excuses pour ce grand retard.</label></li>
							</ul>';}
					    
					    echo'</div>';
							echo '<div class="list-group-item">
					     <h3>Question c</h3>';
						
						if(($chekc=='false')&&($chekc1=='false') &&($chekc2=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif(($chekc=='false')&&($chekc1=='true') &&($chekc2=='true')){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a3r3.' </strong>C\'est la bonne réponse !</p>';} 
						
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a3r3.'</strong></p> <p>La bonne réponse est :
						    <ul class="well list-unstyled a-rayer">
								<li><input type="checkbox" name="f3a3qc1" id="f3a3qcp1"/>
								<label for="f3a3qcp1">Ma mère est tombée malade et cela m’a empêché de venir.</label></li>
								<li><input type="checkbox" name="f3a3qc2" checked="checked" id="f3a3qcp2"/>
								<label for="f3a3qcp2">Maman est malade et je n’ai donc pas pu venir.</label></li>
								<li><input type="checkbox" name="f3a3qc3" checked="checked" id="f3a3qcp3"/>
								<label for="f3a3qcp3">J’ai pas pu venir à cause de ma mère qui est malade.</label></li>
							</ul>';}
					    
					    echo'</div>';
						echo '<div class="list-group-item">
					     <h3>Question d</h3>';
						
						if(($chekd=='false')&&($chekd1=='false') &&($chekd2=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif(($chekd=='false')&&($chekd1=='true') &&($chekd2=='true')){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f3a3r4.' </strong>C\'est la bonne réponse !</p>';} 
						
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f3a3r4.'</strong></p> <p>La bonne réponse est :
						    <ul class="well a-rayer list-unstyled">
								<li><input type="checkbox" name="f3a3qd1" id="f3a3qdp1"/>
								<label for="f3a3qdp1">Je vous prie de trouver ci-joint la fiche technique de notre association</label></li>
								<li><input type="checkbox" name="f3a3qd2" checked="checked" id="f3a3qdp2"/>
								<label for="f3a3qdp2">J’ai mis la fiche technique de notre association dans le mail</label></li>
								<li><input type="checkbox" name="f3a3qd3" checked="checked" id="f3a3qdp3"/>
								<label for="f3a3qdp3">La fiche technique de notre association est en pièces jointes.</label></li>
							</ul>';}
							 echo'</div>
				        
						
					   ';}
					   
					  
		
					
						
		
		
		
		
					?>
					</div><!--fin list-group-item-->
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer><!--ANCRE NAVBAR-TOPFIX--><div id="bottom"></div>
			<?php include("../include/corriges/footer.php"); ?> 
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
		  