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
				 <h2>Corrigé de la fiche N°10</h2><br/>
					<p>Félicitation ! Vous avez terminé votre dixième série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		                   <?php 
						if ($_POST){
		                  //variable activité1 
						  if(isset($_POST['f10a1q1'])){$f10a1q1 = ($_POST['f10a1q1']);}
					      if(isset($_POST['f10a1q2'])){$f10a1q2 = ($_POST['f10a1q2']);}
						  if(isset($_POST['f10a1q3'])){$f10a1q3 = ($_POST['f10a1q3']);}
						  if(isset($_POST['f10a1q4'])){$f10a1q4 = ($_POST['f10a1q4']);}
						  $nf10a1q1=0;$nf10a1q2=0;$nf10a1q3=0;$nf10a1q4=0;
						  //variable activité2
						  if(isset($_POST['f10a2q1'])){$f10a2q1 = ($_POST['f10a2q1']);} else{$f10a2q1 = '';}
						  if(isset($_POST['f10a2q2'])){$f10a2q2 = ($_POST['f10a2q2']);} else{$f10a2q2 = '';}
						  if(isset($_POST['f10a2q3'])){$f10a2q3 = ($_POST['f10a2q3']);} else{$f10a2q3 = '';}
						  if(isset($_POST['f10a2q4'])){$f10a2q4 = ($_POST['f10a2q4']);} else{$f10a2q4 = '';}
						  $nf10a2q1=0;$nf10a2q2=0;$nf10a2q3=0;$nf10a2q4=0;
						  //variable activité3
						  
						  if(isset($_POST['f10a3q1'])){$f10a3q1 = ($_POST['f10a3q1']);}
                          if(isset($_POST['f10a3q2'])){$f10a3q2 = ($_POST['f10a3q2']);}
                          if(isset($_POST['f10a3q3'])){$f10a3q3 = ($_POST['f10a3q3']);} 
                          if(isset($_POST['f10a3q4'])){$f10a3q4 = ($_POST['f10a3q4']);}  						  
                           $nf10a3q1=0;$nf10a3q2=0;$nf10a3q3=0;$nf10a3q4=0;
						   $bmr1 ='<strong class="mauvrep">';
						   $bmr2 ='<strong class="mauvrep">';
						   $bmr3 ='<strong class="mauvrep">';
						   $bmr4 ='<strong class="mauvrep">';
						  //note activité1
						  if ($f10a1q1=='à laquelle'){$nf10a1q1=$nf10a1q1+25;}else{ $nf10a1q1;}
						  if ($f10a1q2=='auxquelles'){$nf10a1q2=$nf10a1q2+25;}else{ $nf10a1q2;}
						  if ($f10a1q3=='lequel'){$nf10a1q3=$nf10a1q3+25;}else{ $nf10a1q3;}
						  if ($f10a1q4=='laquelle'){$nf10a1q4=$nf10a1q4+25;}else{ $nf10a1q4;}
						  $nf10a1=$nf10a1q1+$nf10a1q2+$nf10a1q3+$nf10a1q4;
						   //note activité2
						  if ($f10a2q1=='préalable'){$nf10a2q1=$nf10a2q1+25;}else{ $nf10a2q1;}
						  if ($f10a2q2=='par exemple'){$nf10a2q2=$nf10a2q2+25;}else{ $nf10a2q2;}
						  if ($f10a2q3=='involontaire')    {$nf10a2q3=$nf10a2q3+25;}else{ $nf10a2q3;}
						  if ($f10a2q4=='exclusif')  {$nf10a2q4=$nf10a2q4+25;}else{ $nf10a2q4;}
						  $nf10a2=$nf10a2q1+$nf10a2q2+$nf10a2q3+$nf10a2q4;
						  //note activité3
						 if ($f10a3q1=='nous avons le plaisir'){$nf10a3q1=$nf10a3q1+25; $bmr1='<strong class="bonrep">'; } else{ $nf10a3q1;$bmr1;}
						 if ($f10a3q2=='bien vouloir')         {$nf10a3q2=$nf10a3q2+25; $bmr2='<strong class="bonrep">'; } else{ $nf10a3q2;$bmr2;}
						 if ($f10a3q3=='nous nous réjouissons'){$nf10a3q3=$nf10a3q3+25; $bmr3='<strong class="bonrep">';}  else{ $nf10a3q3;$bmr3;}
						 if ($f10a3q4=='pour votre intérêt')   {$nf10a3q4=$nf10a3q4+25; $bmr4='<strong class="bonrep">';}  else{ $nf10a3q4;$bmr4;}
						 $nf10a3=$nf10a3q1+$nf10a3q2+$nf10a3q3+$nf10a3q4;
						 $total=($nf10a1+$nf10a2+$nf10a3)/3;
						  // tableaux de note
		       echo'<table class="text-center table table-bordered table-striped table-condensed">';
			    echo'<tr>
						<td class="activite" style="vertical-align:middle">Activité 1</td>
						    <td>'.$nf10a1.'%';
								 if(($nf10a1 >0) and ($nf10a1<25)){
								 echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a1.'%"></div>
					                  </div>';}
						        elseif(($nf10a1 >= 25) and ($nf10a1<50)){
									   echo'<div class="progress">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a1.'%"></div>
                                            </div>';}	
                                elseif(($nf10a1 >= 50) ){
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a1.'%"></div>
                                            </div>';}	  
	                            else{
									   echo'<div class="progress">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>';}	  
					    echo'</td>
					</tr>			
				    <tr>
                            <td class="activite" style="vertical-align:middle">Activité 2</td>
					        <td>'.$nf10a2.'%';
									
							   if(($nf10a2 >0) and ($nf10a2<25)){
								echo'<div class="progress">
                                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a2.'%"></div>
                                     </div>';}
						       elseif(($nf10a2 >= 25) and ($nf10a2<50)){
							     echo'<div class="progress">
                                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a2.'%"></div>
                                     </div>';}	
                                elseif(($nf10a2 >= 50) ){
								 echo'<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a2.'%"></div>
									</div>';}	  
	                            else{
								 echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                      </div>';}
						  echo'</td>
				   </tr>
                   <tr>
						      <td class="activite" style="vertical-align:middle">Activité 3</td>
						      <td>'.$nf10a3.'%';
						        if(($nf10a3 >0) and ($nf10a3<25)){
							     echo'<div class="progress">
                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a3.'%"></div>
                                      </div>';}
						        elseif(($nf10a3 >= 25) and ($nf10a3<50)){
							     echo'<div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a3.'%"></div>
                                      </div>';}	
                                elseif(($nf10a3 >= 50) ){
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$nf10a3.'%"></div>
                                     </div>';}	  
	                            else{
								echo'<div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                     </div>';}
							echo'</td>
				   </tr>
				   
				<tfoot>
					<tr>
						       <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°10</strong></td>
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
		            <h3 class="activite">Activité 1 ('.$nf10a1.'%)</h3>
					<div class="list-group-item">';
					  echo'<h3>Question 1</h3>';	
					if($f10a1q1=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f10a1q1.'</strong></p>';}
					elseif($f10a1q1=='à laquelle'){echo'<p><span class="fa fa-2x fa-check"></span> 1. Notre société a opté pour cette solution grâce<strong class="bonrep">'.$f10a1q1.'</strong> Mohammed RAÏS pourra acheter son véhicule.</p>';}
					else{echo'<p><span class="fa fa-2x fa-close"></span> 1. Notre société a opté pour cette solution grâce<strong class="mauvrep">'.$f10a1q1.'</strong> Mohammed RAÏS pourra acheter son véhicule.</p><p>La bonne réponse est : « à laquelle » </p>';}
					    echo'<h3>Question 2</h3>';	
					if($f10a1q2=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f10a1q2.':</strong></p>';}
					elseif($f10a1q2=='auxquelles'){echo'<p><span class="fa fa-2x fa-check"></span> 2. L’assistante a fait un compte-rendu des réunions <strong class="bonrep">'.$f10a1q2.'</strong> j’ai participé.</p>';}
					else{echo'<p><span class="fa fa-2x fa-close"></span> 2. L’assistante a fait un compte-rendu des réunions <strong class="mauvrep">'.$f10a1q2.'</strong> j’ai participé.</p><p>La bonne réponse est : « auxquelles » </p>';}
					  
                      echo'<h3>Question 3</h3>';	
					if($f10a1q3=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f10a1q3.':</strong></p>';}
					elseif($f10a1q3=='lequel'){echo'<p><span class="fa fa-2x fa-check"></span> 3. Je souhaiterais que nous discutions du délai de livraison sur <strong class="bonrep">'.$f10a1q3.'</strong> nous n’arrivons pas à nous entendre.</p>';}
					else{echo'<p><span class="fa fa-2x fa-close"></span>3. Je souhaiterais que nous discutions du délai de livraison sur <strong class="mauvrep">'.$f10a1q3.'</strong> nous n’arrivons pas à nous entendre.</p><p>La bonne réponse est : « laquel » </p>';}
					 	
                       echo'<h3>Question 4</h3>';	
					if($f10a1q4=='Vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f10a1q4.':</strong></p>';}
					elseif($f10a1q4=='laquelle'){echo'<p><span class="fa fa-2x fa-check"></span> 4. Le comité des œuvres sociales organise une réunion le mois prochain durant <strong class="bonrep">'.$f10a1q4.'</strong> cette question sera traitée.</p>';}
					else{echo'<p><span class="fa fa-2x fa-close"></span>4. Le comité des œuvres sociales organise une réunion le mois prochain durant <strong class="mauvrep">'.$f10a1q4.'</strong> cette question sera traitée.</p><p>La bonne réponse est : « laquelle » </p>';}
					 echo'</div>';
					 //courigé activité2
		             echo'<h3 class="activite">Activité 2 ('.$nf10a2.'%)</h3>
					<div class="list-group-item">';
					  echo'<h3>Question 1</h3>';
					   if($f10a2q1==''){echo'<p><span class="fa fa-2x fa-close"></span></p><p>La bonne réponse est :<br/> 1. Après autorisation
					<span class="erreur"><input type="checkbox" id="f10a2p1" name="f10a2q1" checked="checked"value="préalable" /><label for="f10a2p1">préalable</label></span>
					du comité des œuvres sociales, le crédit a été accepté.<br/> </p>';}  
                      else 	{echo'<p><span class="fa fa-2x fa-check"></span>1. Après autorisation
					<span class="erreur"><input type="checkbox" id="f10a2p1" name="f10a2q1" checked="checked"value="préalable" /><label for="f10a2p1">préalable</label></span>
					du comité des œuvres sociales, le crédit a été accepté.<br/> </p>';} 

                     echo'<h3>Question 2</h3>';
					   if($f10a2q2==''){echo'<p><span class="fa fa-2x fa-close"></span></p><p>La bonne réponse est :<br/> 2. Beaucoup de sociétés proposent des réductions sur les véhicules comme
					<span class="erreur"><input type="checkbox" id="f10a2p2" name="f10a2q2" checked="checked" value="par exemple" /><label for="f10a2p2">par exemple</label></span>
					veh.<br/> </p>';}  
                      else 	{echo'<p><span class="fa fa-2x fa-check"></span>2. Beaucoup de sociétés proposent des réductions sur les véhicules comme
					<span class="erreur"><input type="checkbox" id="f10a2p2" name="f10a2q2" checked="checked" value="par exemple" /><label for="f10a2p2">par exemple</label></span>
					veh.<br/></p>';} 	

                    echo'<h3>Question 3</h3>';
					   if($f10a2q3==''){echo'<p><span class="fa fa-2x fa-close"></span></p><p>La bonne réponse est :<br/> 
					   3. Suite à une erreur
					<span class="erreur"><input type="checkbox" id="f10a2p3" name="f10a2q3" checked="checked" value="involontaire" /><label for="f10a2p3">involontaire</label></span>
					de notre part, nous vous remboursons la somme de 20.000 da.<br/></p>';}  
                      else 	{echo'<p><span class="fa fa-2x fa-check"></span>
					  3. Suite à une erreur
					<span class="erreur"><input type="checkbox" id="f10a2p3" name="f10a2q3" checked="checked" value="involontaire" /><label for="f10a2p3">involontaire</label></span>
					de notre part, nous vous remboursons la somme de 20.000 da.<br/></p>';}	

                      echo'<h3>Question 4</h3>';
					   if($f10a2q4==''){echo'<p><span class="fa fa-2x fa-close"></span></p><p>La bonne réponse est :<br/> 
					   4. La société jouit d’un monopole
					<span class="erreur"><input type="checkbox" id="f10a2p4" name="f10a2q4" checked="checked" value="exclusif" /><label for="f10a2p4">exclusif</label></span></p>';}  
                      else 	{echo'<p><span class="fa fa-2x fa-check"></span>
					  4. La société jouit d’un monopole
					<span class="erreur"><input type="checkbox" id="f10a2p4" name="f10a2q4" checked="checked" value="exclusif" /><label for="f10a2p4">exclusif</label></span></p>';}						
					echo'</div>';
					//activité3
					 echo'<h3 class="activite">Activité 3 ('.$nf10a3.'%)</h3>
					<div class="list-group-item">';
					
					 if(($f10a3q1=='')&&($f10a3q2=='')&&($f10a3q3=='')&&($f10a3q4==''))
					{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 
					 elseif(($f10a3q1=='nous avons le plaisir')&&($f10a3q2=='bien vouloir')&&($f10a3q3=='nous nous réjouissons')&&($f10a3q4=='pour votre intérêt'))
					{echo'<span class="fa fa-2x fa-check">Vous avez répondu:</span>
					        <p>Bonjour, <br/>					
					En réponse à votre message en date du 17 juin 2014,'.$bmr1.$f10a3q1.'</strong>	de vous informer que votre véhicule CLS 2000 est actuellement disponible dans nos stocks.<br/>
					Nous vous prions de '.$bmr2.$f10a3q2.'</strong> trouver en pièces jointes les fiches techniques des différents modèles CLS 2000.<br/>
					Par ailleurs,'.$bmr3.$f10a3q3.'</strong> également de vous faire savoir que vous pourriez bénéficier d’un escompte de 5% de tout achat effectué avant la fin du mois en cours.<br/>
					Nous vous remercions par avance '.$bmr4.$f10a3q4.'</strong>.<br/>
					Cordialement.<br/>
					Service commercial VEH</p>';}
					else{echo'<span class="fa fa-2x fa-close">Vous avez répondu:</span><p>Bonjour, <br/>
					     En réponse à votre message en date du 17 juin 2014,'.$bmr1.$f10a3q1.'</strong>	de vous informer que votre véhicule CLS 2000 est actuellement disponible dans nos stocks.<br/>
					Nous vous prions de '.$bmr2.$f10a3q2.'</strong> trouver en pièces jointes les fiches techniques des différents modèles CLS 2000.<br/>
					Par ailleurs,'.$bmr3.$f10a3q3.'</strong> également de vous faire savoir que vous pourriez bénéficier d’un escompte de 5% de tout achat effectué avant la fin du mois en cours.<br/>
					Nous vous remercions par avance '.$bmr4.$f10a3q4.'</strong>.<br/>
					Cordialement.<br/>
					Service commercial VEH</p>
					 <p>la bonne réponse est:</p>
					  <p>Bonjour, <br/>
					     En réponse à votre message en date du 17 juin 2014,<strong class="bonrep">nous avons le plaisir</strong>	de vous informer que votre véhicule CLS 2000 est actuellement disponible dans nos stocks.<br/>
					Nous vous prions de <strong class="bonrep"> bien vouloir</strong> trouver en pièces jointes les fiches techniques des différents modèles CLS 2000.<br/>
					Par ailleurs,<strong class="bonrep">nous nous réjouissons</strong> également de vous faire savoir que vous pourriez bénéficier d’un escompte de 5% de tout achat effectué avant la fin du mois en cours.<br/>
					Nous vous remercions par avance <strong class="bonrep"> pour votre intérêt</strong>.<br/>
					Cordialement.<br/>
					Service commercial VEH</p>';}
					echo'</div>';
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
		  