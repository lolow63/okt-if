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
			<?php include("../include/corriges/navbar-topfix-cor1.php");
			include("../include/corriges/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°8</h2><br/>
					<p>Félicitation ! Vous avez terminé votre huitième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                  <?php
                       if ($_POST){
						   //varibale activite1
					      if(isset($_POST['f8a1'])){$f8a1 = ($_POST['f8a1']);} 
		                 $nf8a1=0;
						 $bonrep='M.RAÏS doit contacter le bureau des oeuvres sociales.';
						 $rep1='Le comité des oeuvres sociales va accorder un crédit à M. RAÏS.';
						 $rep2='Le comité des oeuvres sociales n’a pas encore pris de décision.';
						 //variable activité2
						$chek1='false';
                        $chek2='false';
                        $chek3='false'; 
					    $chek4='false';
						$chek5='false';
						$chek6='false';
						$chek7='false';
						$chek8='false';
						$checked1='checked="checked"';
						$checked2='checked="checked"';
						$checked3='checked="checked"';
						$checked4='checked="checked"';
						$checked5='checked="checked"';
						$checked6='checked="checked"';
						$checked7='checked="checked"';
						$checked8='checked="checked"';
						
						 if(isset($_POST['f8a2q1'])){$f8a2q1=($_POST['f8a2q1']);$chek1='true';$checked1;}else { $f8a2q1='';$chek1;$checked1='';}
						 if(isset($_POST['f8a2q2'])){$f8a2q2=($_POST['f8a2q2']);$chek2='true';$checked2;}else { $f8a2q2='';$chek2;$checked2='';}
						 if(isset($_POST['f8a2q3'])){$f8a2q3=($_POST['f8a2q3']);$chek3='true';$checked3;}else { $f8a2q3='';$chek3;$checked3='';}
						 if(isset($_POST['f8a2q4'])){$f8a2q4=($_POST['f8a2q4']);$chek4='true';$checked4;}else { $f8a2q4='';$chek4;$checked4='';}
						 if(isset($_POST['f8a2q5'])){$f8a2q5=($_POST['f8a2q5']);$chek5='true';$checked5;}else { $f8a2q5='';$chek5;$checked5='';}
						 if(isset($_POST['f8a2q6'])){$f8a2q6=($_POST['f8a2q6']);$chek6='true';$checked6;}else { $f8a2q6='';$chek6;$checked6='';}
						 if(isset($_POST['f8a2q7'])){$f8a2q7=($_POST['f8a2q7']);$chek7='true';$checked7;}else { $f8a2q7='';$chek7;$checked7='';}
						 if(isset($_POST['f8a2q8'])){$f8a2q8=($_POST['f8a2q8']);$chek8='true';$checked8;}else { $f8a2q8='';$chek8;$checked8='';}
						 $nf8a2=0;
						 //variable activité3
						 if(isset($_POST['f8a3q1'])){$f8a3q1=($_POST['f8a3q1']);}
                         if(isset($_POST['f8a3q2'])){$f8a3q2=($_POST['f8a3q2']);}
                         if(isset($_POST['f8a3q3'])){$f8a3q3=($_POST['f8a3q3']);} 
                         if(isset($_POST['f8a3q4'])){$f8a3q4=($_POST['f8a3q4']);}
                         $nf8a3q1=0;$nf8a3q2=0;$nf8a3q3=0;$nf8a3q4=0;   
                         //variable activité4
						 if(isset($_POST['f8a4q1'])){$f8a4q1=($_POST['f8a4q1']);}
						 if(isset($_POST['f8a4q2'])){$f8a4q2=($_POST['f8a4q2']);}
						 if(isset($_POST['f8a4q3'])){$f8a4q3=($_POST['f8a4q3']);}
						 if(isset($_POST['f8a4q4'])){$f8a4q4=($_POST['f8a4q4']);}
						  $nf8a4q1=0;$nf8a4q2=0;$nf8a4q3=0;$nf8a4q4=0;
						 //note activité1
						 if ($f8a1=='f8p3'){$nf8a1=$nf8a1+100;}else{ $nf8a1;}
						 //note activité2
						 if(($chek1=='false')&&($chek2=='false') &&($chek3=='true') &&($chek4=='true') &&($chek5=='false')&&($chek6=='false')&&($chek7=='true')&&($chek8=='false')){$nf8a2=$nf8a2+100;}  
					      //note activité3
                         if ($f8a3q1=='ouvert depuis'){$nf8a3q1=$nf8a3q1+25;}else{ $nf8a3q1;}
						 if ($f8a3q2=='sollicité par M. Raïs'){$nf8a3q2=$nf8a3q2+25;}else{ $nf8a3q2;}
						 if ($f8a3q3=='contraint de partir en déplacement'){$nf8a3q3=$nf8a3q3+25;}else{ $nf8a3q3;}
						 if ($f8a3q4=='envoyé par le secrétariat'){$nf8a3q4=$nf8a3q4+25;}else{ $nf8a3q4;}
						 $nf8a3=$nf8a3q1+$nf8a3q2+$nf8a3q3+$nf8a3q4;
						 //note activité4
						 if ($f8a4q1=='session'){$nf8a4q1=$nf8a4q1+25;}else{ $nf8a4q1;}
						 if ($f8a4q2=='exception'){$nf8a4q2=$nf8a4q2+25;}else{ $nf8a4q2;}
						 if ($f8a4q3=='latitude'){$nf8a4q3=$nf8a4q3+25;}else{ $nf8a4q3;}
						 if ($f8a4q4=='insister'){$nf8a4q4=$nf8a4q4+25;}else{ $nf8a4q4;}
						 $nf8a4=$nf8a4q1+$nf8a4q2+$nf8a4q3+$nf8a4q4;
						 
						 $total=($nf8a1+$nf8a2+$nf8a3+$nf8a3)/4;
		 // tableaux de note
		       echo'<table class="text-center table table-bordered table-striped table-condensed">';
			    echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						    <td>'.$nf8a1.'%';
								 if(($nf8a1 >0) and ($nf8a1<25)){
								 echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a1.'%"></div>
					                  </div>';}
						        elseif(($nf8a1 >= 25) and ($nf8a1<50)){
									   echo'<div class="progress">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a1.'%"></div>
                                            </div>';}	
                                elseif(($nf8a1 >= 50) ){
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a1.'%"></div>
                                            </div>';}	  
	                            else{
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>';}	  
					    echo'</td>
					</tr>			
				    <tr>
                            <td class="activite" style="vertical-align:middle">Activité 2</td>
					        <td>'.$nf8a2.'%';
									
							   if(($nf8a2 >0) and ($nf8a2<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a2.'%"></div>
                                     </div>';}
						       elseif(($nf8a2 >= 25) and ($nf8a2<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a2.'%"></div>
                                     </div>';}	
                                elseif(($nf8a2 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a2.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
                   <tr>
						      <td class="activite" style="vertical-align:middle">Activité 3</td>
						      <td>'.$nf8a3.'%';
						        if(($nf8a3 >0) and ($nf8a3<25)){
							     echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a3.'%"></div>
                                      </div>';}
						        elseif(($nf8a3 >= 25) and ($nf8a3<50)){
							     echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a3.'%"></div>
                                      </div>';}	
                                elseif(($nf8a3 >= 50) ){
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a3.'%"></div>
                                     </div>';}	  
	                            else{
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
							echo'</td>
				   </tr>
				   <tr>
                            <td class="activite" style="vertical-align:middle">Activité 4</td>
					        <td>'.$nf8a4.'%';
									
							   if(($nf8a4 >0) and ($nf8a4<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a4.'%"></div>
                                     </div>';}
						       elseif(($nf8a4 >= 25) and ($nf8a4<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a4.'%"></div>
                                     </div>';}	
                                elseif(($nf8a4 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf8a4.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
				<tfoot>
					<tr>
						       <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°8</strong></td>
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
					   <h3 class="activite">Activité 1 ('.$nf8a1.'%)</h3>
					   <div class="list-group-item">';
						if($f8a1=='f8p3'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$bonrep.' :</strong> C\'est la bonne réponse !</p>';}   
		                
					    elseif($f8a1=='f8p1'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rep1.'</strong></p> <p>La bonne réponse est : « '.$bonrep.' »';}
				                                                
		                elseif($f8a1=='f8p2'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rep2.'</strong></p> <p>La bonne réponse est : « '.$bonrep.' »';}
				                                                
		                else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">Vous n\'avez pas répondu</strong></p> ';}
		                   
		              echo'</div>';//fin activité1
					  //activité2
					   echo' <h3 class="activite">Activité 2 ('.$nf8a2.'%)</h3>
					   <div class="list-group-item">';
					   $f8a2rep=' <div class="well">
	                                  <span class="a-surligner"><input type="checkbox" id="f8a2p1" '.$checked1.' name="f8a2q1" value="" /><label for="f8a2p1">Je souhaiterais vous informer que ...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p2" '.$checked2.' name="f8a2q2" value="" /><label for="f8a2p2">En réponse à votre message ...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p3" '.$checked3.' name="f8a2q3" value="" /><label for="f8a2p3">Je vous prie de bien vouloir préciser...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p4" '.$checked4.' name="f8a2q4" value="" /><label for="f8a2p4">Je vous serais reconnaissant si vous pouviez...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p5" '.$checked5.' name="f8a2q5" value="" /><label for="f8a2p5">Ci-joint les détails sur...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p6" '.$checked6.' name="f8a2q6" value="" /><label for="f8a2p6">Je souhaite vous apporter quelques éclairages sur les éléments mentionnés dans votre message ...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p7" '.$checked7.' name="f8a2q7" value="" /><label for="f8a2p7">Je vous remercie par avance de me faire un retour dès que possible ...</label></span><br/>
				                      <span class="a-surligner"><input type="checkbox" id="f8a2p8" '.$checked8.' name="f8a2q8" value="" /><label for="f8a2p8">Je me permets de faire quelques commentaires sur ...</label></span><br/> 
				                    </div>';
						if(($chek1=='false')&&($chek2=='false') &&($chek3=='false') &&($chek4=='false') &&($chek5=='false')&&($chek6=='false')&&($chek7=='false')&&($chek8=='false'))			
		                 {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					  elseif(($chek1=='false')&&($chek2=='false') &&($chek3=='true') &&($chek4=='true') &&($chek5=='false')&&($chek6=='false')&&($chek7=='true')&&($chek8=='false'))			
					  {echo '<p><span class="fa fa-2x fa-check"></span> '.$f8a2rep.' C\'est la bonne réponse !</p>';} 	     
					  else{echo'<p><span class="fa fa-2x fa-close"></span> '.$f8a2rep.'</p><p>La bonne réponse est : 
					        <div class="well">
	                             <span class="a-surligner"><input type="checkbox" id="f8a2p1" name="f8a2q1" value="" /><label for="f8a2p1">Je souhaiterais vous informer que ...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p2" name="f8a2q2" value="" /><label for="f8a2p2">En réponse à votre message ...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p3" checked="checked" name="f8a2q3" value="" /><label for="f8a2p3">Je vous prie de bien vouloir préciser...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p4" checked="checked" name="f8a2q4" value="" /><label for="f8a2p4">Je vous serais reconnaissant si vous pouviez...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p5"  name="f8a2q5" value="" /><label for="f8a2p5">Ci-joint les détails sur...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p6"  name="f8a2q6" value="" /><label for="f8a2p6">Je souhaite vous apporter quelques éclairages sur les éléments mentionnés dans votre message ...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p7" checked="checked" name="f8a2q7" value="" /><label for="f8a2p7">Je vous remercie par avance de me faire un retour dès que possible ...</label></span><br/>
				                 <span class="a-surligner"><input type="checkbox" id="f8a2p8"  name="f8a2q8" value="" /><label for="f8a2p8">Je me permets de faire quelques commentaires sur ...</label></span><br/> 
		                    </div>';}
							echo'</div>';
					  //corrigé activité3
					  echo' <h3 class="activite">Activité 3 ('.$nf8a3.'%)</h3>
					   <div class="list-group-item">';
					   echo'<h3>Question 1</h3>';
					    if($f8a3q1==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a3q1=='ouvert depuis'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a3q1.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a3q1.':</strong></p> <p>La bonne réponse est : « ouvert depuis »';}
					    
						echo'<h3>Question 2</h3>';
					    if($f8a3q2==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a3q2=='sollicité par M. Raïs'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a3q2.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a3q2.':</strong></p> <p>La bonne réponse est : « sollicité par M. Raïs »';}
					    
					   echo'<h3>Question 3</h3>';
					    if($f8a3q3==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a3q3=='contraint de partir en déplacement'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a3q3.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a3q3.':</strong></p> <p>La bonne réponse est : « contraint de partir en déplacement »';}
					    
						echo'<h3>Question 4</h3>';
					    if($f8a3q4==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a3q4=='envoyé par le secrétariat'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a3q4.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a3q4.':</strong></p> <p>La bonne réponse est : « envoyé par le secrétariat »
						';}
					    
					   
		               echo'</div>';//fin activité3
					    //corrigé activité4
					  echo' <h3 class="activite">Activité 3 ('.$nf8a4.'%)</h3>
					   <div class="list-group-item">';
					   echo'<h3>Question 1</h3>';
					   if($f8a4q1=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a4q1=='session'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a4q1.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a4q1.':</strong></p>
						<p class="remarque">cession vient du verbe « céder » qui veut dire donner ; la bonne réponse est « session », qui veut dire séance.</p>';}
					    
						echo'<h3>Question 2</h3>';
					   if($f8a4q2=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a4q2=='exception'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a4q2.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a4q2.':</strong></p>
						<p class="remarque">exception vient du verbe « excepter » qui signifie « ne pas inclure », « exclure ». C’est la bonne réponse. « acception » veut dire « sens d’un mot » ; c’est une réponse fausse.</p>';}
					    
						echo'<h3>Question 3</h3>';
					   if($f8a4q3=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a4q3=='latitude'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a4q3.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a4q3.':</strong></p>
						<p class="remarque">la bonne réponse est « latitude » qui veut dire « largeur », « liberté » ; l’attitude est un comportement. Ce n’est pas ici la bonne réponse.</p>';}
					    
						echo'<h3>Question 4</h3>';
					   if($f8a4q4=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
						elseif($f8a4q4=='insister'){
						echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f8a4q4.': </strong>C\'est la bonne réponse !</p>';} 
						else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f8a4q4.':</strong></p>
						<p class="remarque">« inciter » signifie « encourager » ou « pousser à faire quelque chose ». Ce n’est pas la bonne réponse.</p>';}
					    
					   echo'</div>';//fin activité4
					;}?></div><!--fin list-group-item-->
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
		  