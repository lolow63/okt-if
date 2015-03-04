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
        <script src="js/sortable.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/collapse.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="js/scrollspy.js"></script>  
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
				 <h2>Corrigé de la fiche N°7</h2><br/>
					<p>Félicitation ! Vous avez terminé votre septième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                <?php 
						if ($_POST){
						//variable activité3
		                $chek1='false';
                        $chek2='false';
                        $chek3='false'; 
					    $chek4='false';
						$chek5='false';
						$checked1='checked="checked"';
						$checked2='checked="checked"';
						$checked3='checked="checked"';
						$checked4='checked="checked"';
						$checked5='checked="checked"';
						if(isset($_POST['f7a1p1'])){$p1 = ($_POST['f7a1p1']); $chek1='true';$checked1;} else { $p1='';$chek1;$checked1='';}
						if(isset($_POST['f7a1p2'])){$p2 = ($_POST['f7a1p2']); $chek2='true';$checked2;} else { $p2='';$chek2;$checked2='';}
						if(isset($_POST['f7a1p3'])){$p3 = ($_POST['f7a1p3']); $chek3='true';$checked3;} else { $p3='';$chek3;$checked3='';}
						if(isset($_POST['f7a1p4'])){$p4 = ($_POST['f7a1p4']); $chek4='true';$checked4;} else { $p4='';$chek4;$checked4='';}
						if(isset($_POST['f7a1p5'])){$p5 = ($_POST['f7a1p5']); $chek5='true';$checked5;} else { $p5='';$chek5;$checked5='';}
		                 $nf7a1=0;
						 //variable activité2
						 if(isset($_POST['f7a2q1'])){$f7a2q1 = ($_POST['f7a2q1']);}
						 if(isset($_POST['f7a2q2'])){$f7a2q2 = ($_POST['f7a2q2']);}
						 if(isset($_POST['f7a2q3'])){$f7a2q3 = ($_POST['f7a2q3']);}
						 if(isset($_POST['f7a2q4'])){$f7a2q4 = ($_POST['f7a2q4']);}
						 $nf7a2q1=0;$nf7a2q2=0;$nf7a2q3=0;$nf7a2q4=0;
						 //variable activité3
						 if(isset($_POST['f7a3q1'])){$f7a3q1 = ($_POST['f7a3q1']);}
                         if(isset($_POST['f7a3q2'])){$f7a3q2 = ($_POST['f7a3q2']);}
                         if(isset($_POST['f7a3q3'])){$f7a3q3 = ($_POST['f7a3q3']);} 
                         if(isset($_POST['f7a3q4'])){$f7a3q4 = ($_POST['f7a3q4']);}  						 
		                 $nf7a3q1=0;$nf7a3q2=0;$nf7a3q3=0;$nf7a3q4=0;
                          //variable activité4
						  if(isset($_POST['f7a4q1'])){$f7a4q1 = ($_POST['f7a4q1']);}
                          if(isset($_POST['f7a4q2'])){$f7a4q2 = ($_POST['f7a4q2']);}
                          if(isset($_POST['f7a4q3'])){$f7a4q3 = ($_POST['f7a4q3']);} 
                          if(isset($_POST['f7a4q4'])){$f7a4q4 = ($_POST['f7a4q4']);} 
                          if(isset($_POST['f7a4q5'])){$f7a4q5 = ($_POST['f7a4q5']);} 						  
                           $nf7a4q1=0;$nf7a4q2=0;$nf7a4q3=0;$nf7a4q4=0;$nf7a4q5=0;
					   //note activité1
		                if(($chek1=='false')&&($chek2=='true') &&($chek3=='false') &&($chek4=='true') &&($chek5=='false')){$nf7a1=$nf7a1+100;} 
					      //note activité2
						if ($f7a2q1=='reçus'){$nf7a2q1=$nf7a2q1+25;}else{ $nf7a2q1;}
						if ($f7a2q2=='confirmé'){$nf7a2q2=$nf7a2q2+25;}else{ $nf7a2q2;}
						if ($f7a2q3=='programmée'){$nf7a2q3=$nf7a2q3+25;}else{ $nf7a2q3;}
						if ($f7a2q4=='envoyées'){$nf7a2q4=$nf7a2q4+25;}else{ $nf7a2q4;}
                         $nf7a2=$nf7a2q1+$nf7a2q2+$nf7a2q3+$nf7a2q4;
						//note activité3
                        if ($f7a3q1=='recevrez'){$nf7a3q1=$nf7a3q1+25;}else{ $nf7a3q1;}	
						if ($f7a3q2=='se réunira'){$nf7a3q2=$nf7a3q2+25;}else{ $nf7a3q2;}
						if ($f7a3q3=='souhaitez'){$nf7a3q3=$nf7a3q3+25;}else{ $nf7a3q3;}
						if ($f7a3q4=='restons'){$nf7a3q4=$nf7a3q4+25;}else{ $nf7a3q4;}
						$nf7a3=$nf7a3q1+$nf7a3q2+$nf7a3q3+$nf7a3q4;
						 //note activité4
						 if ($f7a4q1=='Ø')   {$nf7a4q1=$nf7a4q1+20; }else{ $nf7a4q1;}
						 if ($f7a4q2=='Ø')   {$nf7a4q2=$nf7a4q2+20; }else{ $nf7a4q2;}
						 if ($f7a4q3=='Ø')    {$nf7a4q3=$nf7a4q3+20; }else{ $nf7a4q3;}
						 if ($f7a4q4=='avant'){$nf7a4q4=$nf7a4q4+20; }else{ $nf7a4q4;}
						 if ($f7a4q5=='sous') {$nf7a4q5=$nf7a4q5+20; }else{ $nf7a4q5;}
						 
						 $nf7a4=$nf7a4q1+$nf7a4q2+$nf7a4q3+$nf7a4q4+$nf7a4q5;
						 $total=($nf7a1+$nf7a2+$nf7a3+$nf7a4)/4;
						 
						 //tableaux de note
						 // tableaux de note
		  echo'<table class="text-center table table-bordered table-striped table-condensed">';
						         echo'<tr>
						            <td class="activite" style="vertical-align:middle">Activité 1</td>
						            <td>'.$nf7a1.'%';
									 if(($nf7a1 >0) and ($nf7a1<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a1.'%"></div>
      </div>';}
						elseif(($nf7a1 >= 25) and ($nf7a1<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a1.'%"></div>
      </div>';}	
                        elseif(($nf7a1 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a1.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}	  
									
									
									
									
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 2</td>
									
						            <td>'.$nf7a2.'%';
									
									 if(($nf7a2 >0) and ($nf7a2<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a2.'%"></div>
      </div>';}
						elseif(($nf7a2 >= 25) and ($nf7a2<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a2.'%"></div>
      </div>';}	
                        elseif(($nf7a2 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a2.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									
									
									
									echo'</td>
						         </tr>

						         <tr>
                                    <td class="activite" style="vertical-align:middle">Activité 3</td>
						            <td>'.$nf7a3.'%';
									 if(($nf7a3 >0) and ($nf7a3<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a3.'%"></div>
      </div>';}
						elseif(($nf7a3 >= 25) and ($nf7a3<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a3.'%"></div>
      </div>';}	
                        elseif(($nf7a3 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a3.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									echo'</td>
						         </tr>
<tr>
                                    <td class="activite" style="vertical-align:middle">Activité 4</td>
						            <td>'.$nf7a4.'%';
									 if(($nf7a4 >0) and ($nf7a4<25)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a4.'%"></div>
      </div>';}
						elseif(($nf7a4 >= 25) and ($nf7a4<50)){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a4.'%"></div>
      </div>';}	
                        elseif(($nf7a4 >= 50) ){
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf7a4.'%"></div>
      </div>';}	  
	                  else{
									   echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
      </div>';}
									echo'</td>
						         </tr>

						         

						         

								<tfoot>
						         <tr>
						           <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°7</strong></td>
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
						  //corrigé activité1
						   $f7a1r='
					1.<span class="a-surligner"><input type="checkbox" value="p1" name="f7a1p1" '.$checked1.'id="f7a1p1">
					<label for="f7a1p1"> Nous vous accusons réception de votre message. Cordialement.</label></span>
					<p class="remarque"> « vous » est en trop dans cette phrase. Attention à ne pas confondre : on dit « accuser réception » de quelque chose et pas de quelqu’un. Exemple : prière d’accuser réception est correct. Prière de m’accuser réception est incorrect.</p></span><br/>
					
					2.<span class="a-surligner"><input type="checkbox" value="p2" name="f7a1p2" '.$checked2.' id="f7a1p2">
					<label for="f7a1p2"> Nous avons bien reçu votre message. Cordialement.</label></span><br/><br/>
					
					3.<span class="a-surligner"><input type="checkbox" value="p3" name="f7a1p3" '.$checked3.'id="f7a1p3">
					<label for="f7a1p3"> Votre message est bien reçu.</label>
					<p class="remarque">Il convient de préciser la personne qui reçoit le message : nous (le comité) avons bien reçu votre message.</p></span><br/>
					
					4.<span class="a-surligner"><input type="checkbox" value="p4" name="f7a1p4" '.$checked4.'id="f7a1p4">
					<label for="f7a1p4"> Nous accusons réception de votre message. Cordialement.</label></span><br/>
					
					5.<span class="a-surligner"><input type="checkbox" value="p5" name="f7a1p5" '.$checked5.'id="f7a1p5">
					<label for="f7a1p5"> Nous venons de recevoir votre message. Merci par avance de votre retour.</label>
					<p class="remarque">Cette phrase est utilisée à l’oral.</p></span>
					<br/>';
				
						     echo'<p>Voyons maintenant vos réponses plus en détail :</p>
					   <h3 class="activite">Activité 1 ('.$nf7a1.'%)</h3>
					   <div class="list-group-item">';
			 if(($chek1=='false')&&($chek2=='false') &&($chek3=='false') &&($chek4=='false') &&($chek5=='false')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
			  elseif(($chek1=='false')&&($chek2=='true') &&($chek3=='false') &&($chek4=='true') &&($chek5=='false')){
			  echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a1r.' </strong>C\'est la bonne réponse !</p>';} 	   
			else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a1r.'</strong></p> <p>La bonne réponse est : 
			                 <div class="well">
					1.<span class="a-surligner"><input type="checkbox" value="p1" name="f7a1p1" id="f7a1p1">
					<label for="f7a1p1"> Nous vous accusons réception de votre message. Cordialement.</label></span><br/><br/>
					
					2.<span class="a-surligner"><input type="checkbox" value="p2" name="f7a1p2" checked="checked" id="f7a1p2">
					<label for="f7a1p2"> Nous avons bien reçu votre message. Cordialement.</label></span><br/><br/>
					
					3.<span class="a-surligner"><input type="checkbox" value="p3" name="f7a1p3" id="f7a1p3">
					<label for="f7a1p3"> Votre message est bien reçu.</label></span><br/><br/>
					
					4.<span class="a-surligner"><input type="checkbox" value="p4" name="f7a1p4" checked="checked" id="f7a1p4">
					<label for="f7a1p4"> Nous accusons réception de votre message. Cordialement.</label></span><br/><br/>
					
					5.<span class="a-surligner"><input type="checkbox" value="p5" name="f7a1p5" id="f7a1p5">
					<label for="f7a1p5"> Nous venons de recevoir votre message. Merci par avance de votre retour.</label></span>
					<br/>
				</div>';}
					    
					    echo'</div>';	   
					   
					//corrigé activité2 
                      	echo'<h3 class="activite">Activité 2 ('.$nf7a2.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';					
					   if($f7a2q1=='reçus'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a2q1.': </strong>C\'est la bonne réponse !</p>';} 
					   elseif($f7a2q1=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q1.':</strong></p>';}
					   else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q1.':</strong></p><p>La bonne réponse est : « reçus »</p>';}
					   
					   echo'<h3>Question 2</h3>';					
					   if($f7a2q2=='confirmé'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a2q2.': </strong>C\'est la bonne réponse !</p>';} 
					   elseif($f7a2q2=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q2.':</strong></p>';}
					   else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q2.':</strong></p><p>La bonne réponse est : « confirmé »</p>';}
					   
					    echo'<h3>Question 3</h3>';					
					   if($f7a2q3=='programmée'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a2q3.': </strong>C\'est la bonne réponse !</p>';} 
					   elseif($f7a2q3=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q3.':</strong></p>';}
					   else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q3.':</strong></p><p>La bonne réponse est : « programmée »</p>';}
					   
					    echo'<h3>Question 4</h3>';					
					   if($f7a2q4=='envoyées'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a2q4.': </strong>C\'est la bonne réponse !</p>';} 
					   elseif($f7a2q4=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q4.':</strong></p>';}
					   else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a2q4.':</strong></p><p>La bonne réponse est : « envoyées »</p>';}
					   echo'</div>';
					   //corrigé3 
					   echo'<h3 class="activite">Activité 3 ('.$nf7a3.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
                         if($f7a3q1=='recevrez'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a3q1.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f7a3q1=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q1.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q1.':</strong></p> <p>La bonne réponse est : « recevrez »';}						
					
					    echo'<h3>Question 2</h3>';
                         if($f7a3q2=='se réunira'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a3q2.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f7a3q2=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q2.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q2.':</strong></p> <p>La bonne réponse est : « se réunira »';}						
					 
					    echo'<h3>Question 3</h3>';
                         if($f7a3q3=='souhaitez'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a3q3.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f7a3q3=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q3.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q3.':</strong></p> <p>La bonne réponse est : « souhaitez »';}						
					    
						echo'<h3>Question 4</h3>';
                         if($f7a3q4=='restons'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f7a3q4.': </strong>C\'est la bonne réponse !</p>';} 
		                elseif($f7a3q4=='Vous n\'avez pas répondu') {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q4.':</strong></p>';} 
					    else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f7a3q4.':</strong></p> <p>La bonne réponse est : « restons »';}						
					   echo'</div>';
					//corrigé activité4
					echo'<h3 class="activite">Activité 4 ('.$nf7a4.'%)</h3>
					   <div class="list-group-item">';
					    echo'<h3>Question 1</h3>';
					if(($f7a4q1=='')&&($f7a4q2=='')){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif(($f7a4q1=='Ø')&&($f7a4q2=='Ø')){
					  echo '<p><span class="fa fa-2x fa-check"></span>1. Le séminaire commence  <strong class="bonrep">'.$f7a4q1.'</strong> samedi <strong class="bonrep">'.$f7a4q2.' </strong>après midi. C\'est la bonne réponse !</p>';} 
					else{echo'<p><span class="fa fa-2x fa-close"></span> 1. Le séminaire commence <strong class="mauvrep">'.$f7a4q1.'</strong> samedi <strong class="mauvrep">'.$f7a4q2.' </strong> après midi</p> <p>La bonne réponse est : « le et Ø»';}
					
					echo'<h3>Question 2</h3>';
					if($f7a4q3==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f7a4q3=='Ø'){
					  echo '<p><span class="fa fa-2x fa-check"></span>2. Le directeur organisera la réunion au plus tard <strong class="bonrep">'.$f7a4q3.'</strong> mercredi prochain.C\'est la bonne réponse !</p>';} 
					else{echo'<p><span class="fa fa-2x fa-close"></span>2. Le directeur organisera la réunion au plus tard <strong class="mauvrep">'.$f7a4q3.' </strong> mercredi prochain</p> <p>La bonne réponse est : « Ø »';}
					
					echo'<h3>Question 3</h3>';
					if($f7a4q4==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f7a4q4=='avant'){
					  echo '<p><span class="fa fa-2x fa-check"></span>3. Vous devez rendre votre réponse <strong class="bonrep">'.$f7a4q4.' </strong> 48 heures. C\'est la bonne réponse !</p>';} 
					else{echo'<p><span class="fa fa-2x fa-close"></span>3. Vous devez rendre votre réponse  <strong class="mauvrep">'.$f7a4q4.' </strong> 48 heures.</p> <p>La bonne réponse est : « avant »';}
					
					echo'<h3>Question 4</h3>';
					if($f7a4q5==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					elseif($f7a4q5=='sous'){
					  echo '<p><span class="fa fa-2x fa-check"></span>4. Nous vous octroyons le crédit <strong class="bonrep">'.$f7a4q5.' </strong>deux jours. C\'est la bonne réponse !</p>';} 
					else{echo'<p><span class="fa fa-2x fa-close"></span>4. Nous vous octroyons le crédit <strong class="mauvrep">'.$f7a4q5.'</strong> deux jours.</p> <p>La bonne réponse est : « sous »';}
					echo'</div>';
					
					;}?></div><!--fin list-group-item-->
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
		  