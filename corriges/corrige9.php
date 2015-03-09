<!doctype html>
<html lang="fr">
    <head>
		<title>Fiche 9: corrigé | Formation de l'Institut Français Algérie</title>
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
					<a class="navbar-brand" href="#">FICHE 9: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche10.php">FICHE SUIVANTE</a></li>
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
				 <h2>Corrigé de la fiche N°9</h2><br/>
					<p>Félicitation ! Vous avez terminé votre neuvième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                <?php
                       if ($_POST){
						   //varibale activite1
					   if(isset($_POST['f9a1q1'])){$f9a1q1 = ($_POST['f9a1q1']);}
                       if(isset($_POST['f9a1q2'])){$f9a1q2 = ($_POST['f9a1q2']);} 					   
		               if(isset($_POST['f9a1q3'])){$f9a1q3 = ($_POST['f9a1q3']);} 
					   if(isset($_POST['f9a1q4'])){$f9a1q4 = ($_POST['f9a1q4']);} 
						$nf9a1q1=0;$nf9a1q2=0;$nf9a1q3=0;$nf9a1q4=0;
						
						//variable activité2
						if(isset($_POST['f9a2q1'])){$f9a2q1 = ($_POST['f9a2q1']);}
						if(isset($_POST['f9a2q2'])){$f9a2q2 = ($_POST['f9a2q2']);}
						if(isset($_POST['f9a2q3'])){$f9a2q3 = ($_POST['f9a2q3']);}
						if(isset($_POST['f9a2q4'])){$f9a2q4 = ($_POST['f9a2q4']);}
						if(isset($_POST['f9a2q5'])){$f9a2q5 = ($_POST['f9a2q5']);}
						if(isset($_POST['f9a2q6'])){$f9a2q6 = ($_POST['f9a2q6']);}
						if(isset($_POST['f9a2q7'])){$f9a2q7 = ($_POST['f9a2q7']);}
						if(isset($_POST['f9a2q8'])){$f9a2q8 = ($_POST['f9a2q8']);}
						if(isset($_POST['f9a2q9'])){$f9a2q9 = ($_POST['f9a2q9']);}
						if(isset($_POST['f9a2q10'])){$f9a2q10 = ($_POST['f9a2q10']);}
						if(isset($_POST['f9a2q11'])){$f9a2q11 = ($_POST['f9a2q11']);}
						$nf9a2q1=0;$nf9a2q2=0;$nf9a2q3=0;$nf9a2q4=0;$nf9a2q5=0;$nf9a2q6=0;
						$nf9a2q7=0;$nf9a2q8=0;$nf9a2q9=0;$nf9a2q10=0;$nf9a2q11=0;
		                 //variable activité3
						if(isset($_POST['f9a3q1'])){$f9a3q1 = ($_POST['f9a3q1']);}
						if(isset($_POST['f9a3q2'])){$f9a3q2 = ($_POST['f9a3q2']);}
						if(isset($_POST['f9a3q3'])){$f9a3q3 = ($_POST['f9a3q3']);}
						if(isset($_POST['f9a3q4'])){$f9a3q4 = ($_POST['f9a3q4']);}
						if(isset($_POST['f9a3q5'])){$f9a3q5 = ($_POST['f9a3q5']);}
						if(isset($_POST['f9a3q6'])){$f9a3q6 = ($_POST['f9a3q6']);}
						if(isset($_POST['f9a3q7'])){$f9a3q7 = ($_POST['f9a3q7']);}
						if(isset($_POST['f9a3q8'])){$f9a3q8 = ($_POST['f9a3q8']);}
						if(isset($_POST['f9a3q9'])){$f9a3q9 = ($_POST['f9a3q9']);}
						if(isset($_POST['f9a3q10'])){$f9a3q10 =($_POST['f9a3q10']);}
						if(isset($_POST['f9a3q11'])){$f9a3q11 =($_POST['f9a3q11']);}
						if(isset($_POST['f9a3q12'])){$f9a3q12 =($_POST['f9a3q12']);}
						if(isset($_POST['f9a3q13'])){$f9a3q13 =($_POST['f9a3q13']);}
						if(isset($_POST['f9a3q14'])){$f9a3q14 =($_POST['f9a3q14']);}
						if(isset($_POST['f9a3q15'])){$f9a3q15 =($_POST['f9a3q15']);}
                        $nf9a3q1=0;$nf9a3q2=0;$nf9a3q3=0;$nf9a3q4=0;$nf9a3q5=0;
						$nf9a3q6=0;$nf9a3q7=0;$nf9a3q8=0;$nf9a3q9=0;$nf9a3q10=0;
						$nf9a3q11=0;$nf9a3q12=0;$nf9a3q13=0;$nf9a3q14=0;$nf9a3q15=0;
						$bmr1 ='<strong class="mauvrep">';
						$bmr2 ='<strong class="mauvrep">';
						$bmr3 ='<strong class="mauvrep">';
						$bmr4 ='<strong class="mauvrep">';
						$bmr5 ='<strong class="mauvrep">';
						$bmr6 ='<strong class="mauvrep">';
						$bmr7 ='<strong class="mauvrep">';
						$bmr8 ='<strong class="mauvrep">';
						$bmr9 ='<strong class="mauvrep">';
						$bmr10='<strong class="mauvrep">';
						$bmr11='<strong class="mauvrep">';
						$bmr12='<strong class="mauvrep">';
						$bmr13='<strong class="mauvrep">';
						$bmr14='<strong class="mauvrep">';
						$bmr15='<strong class="mauvrep">';
						//variable activité4
						if(isset($_POST['f9a4q1'])){$f9a4q1 = ($_POST['f9a4q1']);}
						if(isset($_POST['f9a4q2'])){$f9a4q2 = ($_POST['f9a4q2']);}
						if(isset($_POST['f9a4q3'])){$f9a4q3 = ($_POST['f9a4q3']);}
						$nf9a4q1=0;$nf9a4q2=0;$nf9a4q3=0;
					   //note activité1
					 if ($f9a1q1=='serve'){$nf9a1q1=$nf9a1q1+25;}else{$nf9a1q1;}
					 if ($f9a1q2=='formuliez'){$nf9a1q2=$nf9a1q2+25;}else{$nf9a1q2;}
					 if ($f9a1q3=='puissiez'){$nf9a1q3=$nf9a1q3+25;}else{$nf9a1q3;}
					 if ($f9a1q4=='demande'){$nf9a1q4=$nf9a1q4+25;}else{$nf9a1q4;}
		             $nf9a1=$nf9a1q1+$nf9a1q2+$nf9a1q3+$nf9a1q4;
					 //note activité2
					 if ($f9a2q1=='À'){$nf9a2q1=$nf9a2q1+9;}else{$nf9a2q1;} 
					 if ($f9a2q2=='en'){$nf9a2q2=$nf9a2q2+9;}else{$nf9a2q2;}
					 if ($f9a2q3=='de'){$nf9a2q3=$nf9a2q3+9;}else{$nf9a2q3;}
					 if ($f9a2q4=='à'){$nf9a2q4=$nf9a2q4+9;}else{$nf9a2q4;}
					 if ($f9a2q5=='à'){$nf9a2q5=$nf9a2q5+9;}else{$nf9a2q5;}
					 if ($f9a2q6=='de'){$nf9a2q6=$nf9a2q6+9;}else{$nf9a2q6;}
					 if ($f9a2q7=='du'){$nf9a2q7=$nf9a2q7+9;}else{$nf9a2q7;}
					 if ($f9a2q8=='au'){$nf9a2q8=$nf9a2q8+9;}else{$nf9a2q8;}
					 if ($f9a2q9=='en'){$nf9a2q9=$nf9a2q9+9;}else{$nf9a2q9;}
					 if ($f9a2q10=='De'){$nf9a2q10=$nf9a2q10+9;}else{$nf9a2q10;}
					 if ($f9a2q11=='à'){$nf9a2q11=$nf9a2q11+10;}else{$nf9a2q11;}
					 $nf9a2=$nf9a2q1+$nf9a2q2+$nf9a2q3+$nf9a2q4+$nf9a2q5+$nf9a2q6+$nf9a2q7+$nf9a2q8+$nf9a2q9+$nf9a2q10+$nf9a2q11;
		             //note activité3
					 if ($f9a3q1=='Faisant suite à'){$nf9a3q1=$nf9a3q1+6.7;$bmr1='<strong class="bonrep">';}else{$nf9a3q1;$bmr1;} 
					 if ($f9a3q2=='dernier')  {$nf9a3q2=$nf9a3q2+6.7;$bmr2='<strong class="bonrep">';}else{$nf9a3q2;$bmr2;} 
					 if ($f9a3q3=='au regret'){$nf9a3q3=$nf9a3q3+6.7;$bmr3='<strong class="bonrep">';}else{$nf9a3q3;$bmr3;} 
					 if ($f9a3q4=='informer') {$nf9a3q4=$nf9a3q4+6.7;$bmr4='<strong class="bonrep">';}else{$nf9a3q4;$bmr4;} 
					 if ($f9a3q5=='fermé')    {$nf9a3q5=$nf9a3q5+6.7;$bmr5='<strong class="bonrep">';}else{$nf9a3q5;$bmr5;} 
					 if ($f9a3q6=='du')       {$nf9a3q6=$nf9a3q6+6.7;$bmr6='<strong class="bonrep">';}else{$nf9a3q6;$bmr6;} 
					 if ($f9a3q7=='au')       {$nf9a3q7=$nf9a3q7+6.7;$bmr7='<strong class="bonrep">';}else{$nf9a3q7;$bmr7;} 
					 if ($f9a3q8=='En effet') {$nf9a3q8=$nf9a3q8+6.7;$bmr8='<strong class="bonrep">';}else{$nf9a3q8;$bmr8;} 
					 if ($f9a3q9=='en congé') {$nf9a3q9=$nf9a3q9+6.7;$bmr9='<strong class="bonrep">';}else{$nf9a3q9;$bmr9;} 
			         if ($f9a3q10=='vous rapprocher') {$nf9a3q10=$nf9a3q10+6.7;$bmr10='<strong class="bonrep">';}else{$nf9a3q10;$bmr10;} 
				     if ($f9a3q11=='à partir du')  {$nf9a3q11=$nf9a3q11+6.7;$bmr11='<strong class="bonrep">';}else{$nf9a3q11;$bmr11;} 
					 if ($f9a3q12=='ouvert')  {$nf9a3q12=$nf9a3q12+6.7;$bmr12='<strong class="bonrep">';}else{$nf9a3q12;$bmr12;} 
					 if ($f9a3q13=='de')      {$nf9a3q13=$nf9a3q13+6.7;$bmr13='<strong class="bonrep">';}else{$nf9a3q13;$bmr13;} 
					 if ($f9a3q14=='à')       {$nf9a3q14=$nf9a3q14+6.7;$bmr14='<strong class="bonrep">';}else{$nf9a3q14;$bmr14;} 
				     if ($f9a3q15=='par avance')  {$nf9a3q15=$nf9a3q15+6.2;$bmr15='<strong class="bonrep">';}else{$nf9a3q15;$bmr15;} 
					$nf9a3=$nf9a3q1+$nf9a3q2+$nf9a3q3+$nf9a3q4+$nf9a3q5+$nf9a3q6+$nf9a3q7+$nf9a3q8+$nf9a3q9+$nf9a3q10+$nf9a3q11+$nf9a3q12+$nf9a3q13+$nf9a3q14+$nf9a3q15;
					//note activité 4
					if ($f9a4q1=='Faisant suite à'){$nf9a4q1=$nf9a4q1+34;}else{$nf9a4q1;} 
					if ($f9a4q2=='En effet'){$nf9a4q2=$nf9a4q2+34;}else{$nf9a4q2;}
					if ($f9a4q3=='Donc'){$nf9a4q3=$nf9a4q3+32;}else{$nf9a4q3;}
					$nf9a4=$nf9a4q1+$nf9a4q2+$nf9a4q3;
					//tableaux de note
                      $total=($nf9a1+$nf9a2+$nf9a3+$nf9a3)/4;
		 // tableaux de note
		       echo'<table class="text-center table table-bordered table-striped table-condensed">';
			    echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						    <td>'.$nf9a1.'%';
								 if(($nf9a1 >0) and ($nf9a1<25)){
								 echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a1.'%"></div>
					                  </div>';}
						        elseif(($nf9a1 >= 25) and ($nf9a1<50)){
									   echo'<div class="progress">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a1.'%"></div>
                                            </div>';}	
                                elseif(($nf9a1 >= 50) ){
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a1.'%"></div>
                                            </div>';}	  
	                            else{
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>';}	  
					    echo'</td>
					</tr>			
				    <tr>
                            <td class="activite" style="vertical-align:middle">Activité 2</td>
					        <td>'.$nf9a2.'%';
									
							   if(($nf9a2 >0) and ($nf9a2<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a2.'%"></div>
                                     </div>';}
						       elseif(($nf9a2 >= 25) and ($nf9a2<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a2.'%"></div>
                                     </div>';}	
                                elseif(($nf9a2 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a2.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
                   <tr>
						      <td class="activite" style="vertical-align:middle">Activité 3</td>
						      <td>'.$nf9a3.'%';
						        if(($nf9a3 >0) and ($nf9a3<25)){
							     echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a3.'%"></div>
                                      </div>';}
						        elseif(($nf9a3 >= 25) and ($nf9a3<50)){
							     echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a3.'%"></div>
                                      </div>';}	
                                elseif(($nf9a3 >= 50) ){
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a3.'%"></div>
                                     </div>';}	  
	                            else{
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
							echo'</td>
				   </tr>
				   <tr>
                            <td class="activite" style="vertical-align:middle">Activité 4</td>
					        <td>'.$nf9a4.'%';
									
							   if(($nf9a4 >0) and ($nf9a4<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a4.'%"></div>
                                     </div>';}
						       elseif(($nf9a4 >= 25) and ($nf9a4<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a4.'%"></div>
                                     </div>';}	
                                elseif(($nf9a4 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf9a4.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
				<tfoot>
					<tr>
						       <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°9</strong></td>
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
					//corrigé activité1
					 echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf9a1.'%)</h3>
					   <div class="list-group-item">';
					   echo'<h3>Question 1</h3>';
					   if($f9a1q1=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f9a1q1=='serve'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f9a1q1.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f9a1q1.':</strong></p><p>la bonne réponse est « session »</p>';}
						 
						  echo'<h3>Question 2</h3>';
					   if($f9a1q2=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f9a1q2=='formuliez'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f9a1q2.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f9a1q2.':</strong></p><p>la bonne réponse est « formuliez »</p>';}
						 
						  echo'<h3>Question 3</h3>';
					   if($f9a1q3=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f9a1q3=='puissiez'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f9a1q3.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f9a1q3.':</strong></p><p>la bonne réponse est « puissiez »</p>';}
						 
						 echo'<h3>Question 4</h3>';
					   if($f9a1q4=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f9a1q4=='demande'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f9a1q4.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f9a1q4.':</strong></p><p>la bonne réponse est « demande »</p>';}
						 
					    
		               echo'</div>';//fin activité1
					   //activité2
					    echo'<h3 class="activite">Activité 2 ('.$nf9a2.'%)</h3>
					   <div class="list-group-item">';
					   echo'<h3>Question 1</h3>
					   <p>vous avez répondu :</p>';
					   if(($f9a2q1=='+')&&($f9a2q2=='+')&&($f9a2q3=='+')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif(($f9a2q1=='À')&&($f9a2q2=='en')&&($f9a2q3=='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="bonrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="bonrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="bonrep">'.$f9a2q3.'</strong>18h00.</p>';}
					   elseif(($f9a2q1=='À')&&($f9a2q2!='en')&&($f9a2q3!='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="bonrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="mauvrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="mauvrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   elseif(($f9a2q1!='À')&&($f9a2q2=='en')&&($f9a2q3!='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="mauvrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="bonrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="mauvrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   elseif(($f9a2q1!='À')&&($f9a2q2!='en')&&($f9a2q3=='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="mauvrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="mauvrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="bonrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   elseif(($f9a2q1=='À')&&($f9a2q2=='en')&&($f9a2q3!='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="bonrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="bonrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="mauvrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   elseif(($f9a2q1=='À')&&($f9a2q2!='en')&&($f9a2q3=='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="bonrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="mauvrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="bonrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   elseif(($f9a2q1!='À')&&($f9a2q2!='en')&&($f9a2q3=='de')){echo'<p><span class="fa fa-2x fa-check"></span> 1.<strong class="mauvrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="bonrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="bonrep">'.$f9a2q3.'</strong>18h00.</p><p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					   
					   else{echo'<p><span class="fa fa-2x fa-close"></span> 1.<strong class="mauvrep">'.$f9a2q1.'</strong> 07h10, Mohammed prend le bus pour Alger-centre.Il revient <strong class="mauvrep">'.$f9a2q2.'</strong> fin d’après midi par le bus <strong class="mauvrep">'.$f9a2q3.'</strong>18h00.</p>
					   <p>la bonne réponse est:</p><p><strong class="bonrep">À</strong> 07h10, Mohammed prend le bus pour Alger-centre. Il revient <strong class="bonrep">en</strong> fin d’après midi par le bus <strong class="bonrep">de</strong>18h00.</p>';}
					echo'<h3>Question 2</h3>';
					    $rep2='<p>2. La réunion commence <strong class="bonrep">à </strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="bonrep">à</strong> l’aéroport <strong class="bonrep">de</strong> Constantine pour régler un problème de logistique.</p>';
					   echo'<p>vous avez répondu :</p>';
					   if(($f9a2q4=='+')&&($f9a2q5=='+')&&($f9a2q6=='+')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif(($f9a2q4=='à')&&($f9a2q5=='à')&&($f9a2q6=='de')){echo'<p><span class="fa fa-2x fa-check"></span> 2. La réunion commence <strong class="bonrep">'.$f9a2q4.'</strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="bonrep">'.$f9a2q5.'</strong>  l’aéroport <strong class="bonrep">'.$f9a2q6.'</strong>  Constantine pour régler un problème de logistique.</p>';}
					   elseif(($f9a2q4=='à')&&($f9a2q5!='à')&&($f9a2q6!='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="bonrep">'.$f9a2q4.'</strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="mauvrep">'.$f9a2q5.'</strong> l’aéroport <strong class="mauvrep">'.$f9a2q6.'</strong> Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   elseif(($f9a2q4!='à')&&($f9a2q5=='à')&&($f9a2q6!='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="mauvrep">'.$f9a2q4.'</strong>9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="bonrep">'.$f9a2q5.'</strong>  l’aéroport <strong class="mauvrep">'.$f9a2q6.'</strong> Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   elseif(($f9a2q4!='à')&&($f9a2q5!='à')&&($f9a2q6=='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="mauvrep">'.$f9a2q4.'</strong>9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="mauvrep">'.$f9a2q5.'</strong> l’aéroport <strong class="bonrep">'.$f9a2q6.'</strong>  Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   elseif(($f9a2q4=='à')&&($f9a2q5=='à')&&($f9a2q6!='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="bonrep">'.$f9a2q4.'</strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="bonrep">'.$f9a2q5.'</strong>  l’aéroport <strong class="mauvrep">'.$f9a2q6.'</strong> Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   elseif(($f9a2q4=='à')&&($f9a2q5!='à')&&($f9a2q6=='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="bonrep">'.$f9a2q4.'</strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="mauvrep">'.$f9a2q5.'</strong> l’aéroport <strong class="bonrep">'.$f9a2q6.'</strong>  Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   elseif(($f9a2q4!='à')&&($f9a2q5!='à')&&($f9a2q6=='de')){echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="mauvrep">'.$f9a2q4.'</strong>9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="bonrep">'.$f9a2q5.'</strong>  l’aéroport <strong class="bonrep">'.$f9a2q6.'</strong>  Constantine pour régler un problème de logistique.</p><p>la bonne réponse est:'.$rep2;}
					   
					   else{echo'<p><span class="fa fa-2x fa-close"></span> 2. La réunion commence <strong class="mauvrep">'.$f9a2q4.'</strong> 9h20 et dure jusqu’à 11h30. Par la suite, le directeur prend l’avion pour Paris. Il fait une escale <strong class="mauvrep">'.$f9a2q5.'</strong> l’aéroport <strong class="mauvrep">'.$f9a2q6.'</strong>Constantine pour régler un problème de logistique.</p>
					   <p>la bonne réponse est:</p>'.$rep2;}
					   
					   echo'<h3>Question 3</h3>';
					    $rep3='<p>3. Le directeur sera absent <strong class="bonrep">du </strong> mardi matin <strong class="bonrep">au</strong> jeudi <strong class="bonrep">en</strong> fin d’après midi.</p>';
					   echo'<p>vous avez répondu :</p>';
					   if(($f9a2q7=='+')&&($f9a2q8=='+')&&($f9a2q9=='+')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif(($f9a2q7=='du')&&($f9a2q8=='au')&&($f9a2q9=='en')){echo'<p><span class="fa fa-2x fa-check"></span> 3. Le directeur sera absent <strong class="bonrep"> '.$f9a2q7.'</strong> mardi matin <strong class="bonrep"> '.$f9a2q8.'</strong>  jeudi <strong class="bonrep"> '.$f9a2q9.'</strong>  fin d’après midi.</p>';}
					   elseif(($f9a2q7=='du')&&($f9a2q8!='au')&&($f9a2q9!='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="bonrep"> '.$f9a2q7.'</strong> mardi matin <strong class="mauvrep">'.$f9a2q8.'</strong>  jeudi <strong class="mauvrep">'.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   elseif(($f9a2q7!='du')&&($f9a2q8=='au')&&($f9a2q9!='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="mauvrep">'.$f9a2q7.'</strong> mardi matin <strong class="bonrep"> '.$f9a2q8.'</strong>  jeudi <strong class="mauvrep">'.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   elseif(($f9a2q7!='du')&&($f9a2q8!='au')&&($f9a2q9=='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="mauvrep">'.$f9a2q7.'</strong> mardi matin <strong class="mauvrep">'.$f9a2q8.'</strong>  jeudi <strong class="bonrep"> '.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   elseif(($f9a2q7=='du')&&($f9a2q8=='au')&&($f9a2q9!='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="bonrep"> '.$f9a2q7.'</strong> mardi matin <strong class="bonrep"> '.$f9a2q8.'</strong>  jeudi <strong class="mauvrep">'.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   elseif(($f9a2q7=='du')&&($f9a2q8!='au')&&($f9a2q9=='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="bonrep"> '.$f9a2q7.'</strong> mardi matin <strong class="mauvrep">'.$f9a2q8.'</strong>  jeudi <strong class="bonrep"> '.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   elseif(($f9a2q7!='du')&&($f9a2q8!='au')&&($f9a2q9=='en')){echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="mauvrep">'.$f9a2q7.'</strong> mardi matin <strong class="bonrep"> '.$f9a2q8.'</strong>  jeudi <strong class="bonrep"> '.$f9a2q9.'</strong>  fin d’après midi.</p><p>la bonne réponse est:'.$rep3;}
					   
					   else{echo'<p><span class="fa fa-2x fa-close"></span> 3. Le directeur sera absent <strong class="mauvrep">'.$f9a2q7.'</strong> mardi matin <strong class="mauvrep">'.$f9a2q8.'</strong> jeudi <strong class="mauvrep">'.$f9a2q9.'</strong> fin d’après midi.</p>
					   <p>la bonne réponse est:</p>'.$rep3;}
					
					    echo'<h3>Question 4</h3>';
					    $rep4='<p>4.<strong class="bonrep">De</strong> janvier <strong class="bonrep">à </strong> mars, il sera à Sétif .</p>';
					     echo'<p>vous avez répondu :</p>';
					   if(($f9a2q10=='+')&&($f9a2q11=='+')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					   elseif(($f9a2q10=='De')&&($f9a2q11=='à')){echo'<p><span class="fa fa-2x fa-check"></span> 4. <strong class="bonrep"> '.$f9a2q10.'</strong> janvier <strong class="bonrep"> '.$f9a2q11.'</strong> mars, il sera à Sétif. </p>';}
					   elseif(($f9a2q10=='De')&&($f9a2q11!='à')){echo'<p><span class="fa fa-2x fa-close"></span> 4. <strong class="bonrep"> '.$f9a2q10.'</strong> janvier <strong class="mauvrep">'.$f9a2q11.'</strong> mars, il sera à Sétif. </p><p>la bonne réponse est:'.$rep4;}
					   elseif(($f9a2q10!='De')&&($f9a2q11=='à')){echo'<p><span class="fa fa-2x fa-close"></span> 4. <strong class="mauvrep">'.$f9a2q10.'</strong> janvier <strong class="bonrep"> '.$f9a2q11.'</strong> mars, il sera à Sétif. </p><p>la bonne réponse est:'.$rep4;}
					   
					   else{echo'<p><span class="fa fa-2x fa-close"></span> 4.<strong class="mauvrep">'.$f9a2q10.'</strong> janvier <strong class="mauvrep">'.$f9a2q11.'</strong>  mars, il sera à Sétif.</p>
					   <p>la bonne réponse est:</p>'.$rep4;}
					 echo'</div>';//fin activité2
					 echo'<h3 class="activite">Activité 3 ('.$nf9a3.'%)</h3>
					   <div class="list-group-item">';
					   echo'<p>Vous avez répondu:</p>';
					   if(($f9a3q1=='')&&($f9a3q2=='')&&($f9a3q3=='')&&($f9a3q4=='')&&($f9a3q5=='')&&($f9a3q6=='')&&($f9a3q7=='')&&($f9a3q8=='')&&($f9a3q9=='')&&($f9a3q10=='')&&($f9a3q11=='')&&($f9a3q12=='')&&($f9a3q13=='')&&($f9a3q14=='')&&($f9a3q15==''))
					{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif(($f9a3q1=='Faisant suite à')&&($f9a3q2=='dernier')&&($f9a3q3=='au regret')&&($f9a3q4=='informer')&&($f9a3q5=='fermé')&&($f9a3q6=='du')&&($f9a3q7=='au')&&($f9a3q8=='En effet')&&($f9a3q9=='en congé')&&($f9a3q10=='vous rapprocher')&&($f9a3q11=='à partir du')&&($f9a3q12=='ouvert')&&($f9a3q13=='de')&&($f9a3q14=='à')&&($f9a3q15=='par avance'))
					{echo'<span class="fa fa-2x fa-check"></span><p>Bonjour, <br/>

			    '.$bmr1.$f9a3q1.'</strong>  votre '.$bmr2.$f9a3q2.'</strong> message, je suis '.$bmr3.$f9a3q3.'</strong> de vous '.$bmr4.$f9a3q4.'</strong>	que le bureau sera '.$bmr5.$f9a3q5.'</strong> 
				'.$bmr6.$f9a3q6.' </strong> mardi 11 '.$bmr7.$f9a3q7.'</strong> jeudi 13 avril.<br/> 
				'.$bmr8.$f9a3q8.'</strong>, je serai '.$bmr9.$f9a3q9.'</strong>.<br/>
				 Je vous prie donc de '.$bmr10.$f9a3q10.'</strong> de notre bureau '.$bmr11.$f9a3q11.'</strong> dimanche 16 avril 2015. <br/>
				 Le bureau du comité des oeuvres sociales est '.$bmr12.$f9a3q12.'</strong> '.$bmr13.$f9a3q13.'</strong> 9h '.$bmr14.$f9a3q14.'</strong>15h.<br/>
				 Je vous remercie '.$bmr15.$f9a3q15.'</strong> de votre compréhension. </br>
				Bien cordialement.<br/>
				Salah KHADRAOUI<br/>
				Chef du comité des oeuvres sociales.</p><p>C\'est la bonne reponse</p>';}
					else {echo'<span class="fa fa-2x fa-close"></span><p>Bonjour, <br/>

			    '.$bmr1.$f9a3q1.'</strong>  votre '.$bmr2.$f9a3q2.'</strong> message, je suis '.$bmr3.$f9a3q3.'</strong> de vous '.$bmr4.$f9a3q4.'</strong>	que le bureau sera '.$bmr5.$f9a3q5.'</strong> 
				'.$bmr6.$f9a3q6.' </strong> mardi 11 '.$bmr7.$f9a3q7.'</strong> jeudi 13 avril.<br/> 
				'.$bmr8.$f9a3q8.'</strong>, je serai '.$bmr9.$f9a3q9.'</strong>.<br/>
				 Je vous prie donc de '.$bmr10.$f9a3q10.'</strong> de notre bureau '.$bmr11.$f9a3q11.'</strong> dimanche 16 avril 2015. <br/>
				 Le bureau du comité des oeuvres sociales est '.$bmr12.$f9a3q12.'</strong> '.$bmr13.$f9a3q13.'</strong> 9h '.$bmr14.$f9a3q14.'</strong>15h.<br/>
				 Je vous remercie '.$bmr15.$f9a3q15.'</strong> de votre compréhension. </br>
				Bien cordialement.<br/>
				Salah KHADRAOUI<br/>
				Chef du comité des oeuvres sociales.</p>
				<p>la bonne réponse est:</p>
				<p>Bonjour, <br/>

			    <strong class="bonrep">Faisant suite à</strong>  votre <strong class="bonrep">dernier</strong> message, je suis <strong class="bonrep">au regret</strong> de vous <strong class="bonrep">informer</strong>	que le bureau sera <strong class="bonrep">fermé</strong> 
				<strong class="bonrep">du</strong> mardi 11 <strong class="bonrep">au</strong> jeudi 13 avril.<br/> 
				<strong class="bonrep">En effet</strong>, je serai <strong class="bonrep">en congé</strong>.<br/>
				 Je vous prie donc de <strong class="bonrep">vous rapprocher</strong> de notre bureau <strong class="bonrep">à partir du</strong> dimanche 16 avril 2015. <br/>
				 Le bureau du comité des oeuvres sociales est <strong class="bonrep">ouvert</strong> <strong class="bonrep">de</strong> 9h <strong class="bonrep">à</strong>15h.<br/>
				 Je vous remercie <strong class="bonrep">par avance</strong> de votre compréhension. </br>
				Bien cordialement.<br/>
				Salah KHADRAOUI<br/>
				Chef du comité des oeuvres sociales.</p>';}
				echo'</div>';//fin activité3
				//corrigé activité4
				 echo'<h3 class="activite">Activité 4 ('.$nf9a4.'%)</h3>
					   <div class="list-group-item">';
					  
					  echo' <p>vous avez répondu :</p>';
					  if($f9a4q1=='') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p>';} 
				      elseif($f9a4q1=='Faisant suite à'){echo'<p><span class="fa fa-2x fa-check"></span> En réponse à : <strong class="bonrep">'.$f9a4q1.'</strong> C\'est la bonne réponse</p>';} 
					  else {echo'<p><span class="fa fa-2x fa-close"></span> En réponse à : <strong class="mauvrep">'.$f9a4q1.'</strong></p><p> la bonne réponse est:« Faisant suite à »</p>';} 
					  
					  if($f9a4q2=='') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p>';} 
				      elseif($f9a4q2=='En effet'){echo'<p><span class="fa fa-2x fa-check"></span>En fait : <strong class="bonrep">'.$f9a4q2.'</strong> C\'est la bonne réponse</p>';} 
					  else {echo'<p><span class="fa fa-2x fa-close"></span> En fait :<strong class="mauvrep">'.$f9a4q2.'</strong> </p><p>la bonne réponse est:« En effet »</p>';} 
					
					  if($f9a4q3=='') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p>';} 
				      elseif($f9a4q3=='Donc'){echo'<p><span class="fa fa-2x fa-check"></span> Par conséquent : <strong class="bonrep">'.$f9a4q3.'</strong> C\'est la bonne réponse</p>';} 
					  else {echo'<p><span class="fa fa-2x fa-close"></span> Par conséquent : <strong class="mauvrep">'.$f9a4q3.'</strong></p> <p>la bonne réponse est:« Donc »</p>';} 
					echo'</div>';//fin activité4
					
					;}?>
					<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title resume text-center" id="myModalLabel"><img src="../img/le-saviez-vous.png" alt="" class="img-responsive"></h4>
						</div>
						<div class="modal-body body-saviez-vous">
							<p class="resume">Un courriel professionnel est d’autant plus efficace qu’il est formé avec des phrases simples et courtes. En moyenne, une phrase contient jusqu’à 15 mots (55 caractères à peu près). Car au-delà, le lecteur perd le fil de la phrase. A cet effet, certaines entreprises utilisent des logiciels de formatage de courriels spécifiques.<br/>
							Exemple : Nous avons bien reçu votre message en date du 12 janvier, y compris les références en objet, et nous vous informons que nous y répondons ci-dessous. Phrase longue (+ 25 mots).<br/>
							En réponse à votre message en date du 12 janvier, nous vous informons que... (14 mots)</p>
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
		  