<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>INstitut Français</title>

		<link href="inc/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="inc/css/style.css" rel="stylesheet" type="text/css" />
		<link href="inc/css/menu.css" rel="stylesheet" type="text/css" />
		<!-- les js pour le menu adroite-->
		<script type="text/javascript" async="" src="js/ga.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" async="" src="js/gt.js"></script>
		<!-- fin du js menu adroite-->

	</head>
	
	<body>

		<div id="container">
		
			<div id="header_container">
			 <img src="img/logo.png" alt="text descriptive" />
			 <h2>Formation de français  en ligne</h2>
				
			
			</div> <!-- header_container -->
			
			<div id="sidebar_container">
			<div id="seul"><a href="index.php" >Acueil</a></div>
				<div class="main">
                    
			<ul class="menu">
				<li class="item1"><a href="fiche1.php" class="">Debuter la formation</a>
					<ul style="display: none;">
						<li class="subitem1"><a href="intro.php">Introduction</a></li>						
						<li class="subitem3"><a href="fiche1.php">Fiche1</a></li>
						<li class="subitem3"><a href="#">Fiche3</a></li>
						<li class="subitem3"><a href="#">Fiche4</a></li>
						<li class="subitem3"><a href="#">Fiche5</a></li>
						<li class="subitem3"><a href="#">Fiche6</a></li>
						<li class="subitem3"><a href="#">Fiche7</a></li>
						<li class="subitem3"><a href="#">Fiche8</a></li>
						<li class="subitem3"><a href="#">Fiche9</a></li>
						<li class="subitem3"><a href="#">Fiche10</a></li>
						<li class="subitem3"><a href="#">Fiche11</a></li>
						<li class="subitem3"><a href="#">Fiche12</a></li>
						<li class="subitem3"><a href="#">Fiche13</a></li>
						<li class="subitem3"><a href="#">Fiche14</a></li>
						<li class="subitem3"><a href="#">Fiche15</a></li>
						<li class="subitem3"><a href="#">Fiche16</a></li>
						<li class="subitem3"><a href="#">Fiche17</a></li>
						<li class="subitem3"><a href="#">Fiche18</a></li>
						<li class="subitem3"><a href="#">Fiche19</a></li>
						<li class="subitem3"><a href="#">Fiche20</a></li>
						<li class="subitem3"><a href="#">Fiche21</a></li>
						<li class="subitem3"><a href="#">Fiche22</a></li>
						<li class="subitem3"><a href="#">Fiche23</a></li>
						<li class="subitem3"><a href="#">Fiche24</a></li>

					</ul>
				</li>
			</ul>
			<div id="seul"><a href="index.php" >Lien1</a></div>
			<div id="seul"><a href="index.php" >Lien2</a></div>
			<div id="seul"><a href="index.php" >Lien3</a></div>
			<div id="seul"><a href="index.php" >Lien4</a></div>
		</div>
		      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet elit vitae arcu interdum ullamcorper. Nullam ultrices</p>
			<img src="img/marianne.png" alt="la marianne"/>
			  <p>Lorem ipsum dolor sit amet</p>
			  <p>Lorem ipsum dolor sit amet</p>
			</div> <!-- sidebar_container -->
			
			<div id="content_container">
			
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°1</h2></br>
					 <p>Félicitation <?php if(isset($_SESSION['username'])){echo ''.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?> ! Vous avez terminé votre première série d'activités.</p>
					 <p>Voici votre score :</p>	
				
				
				
				<?php
                        
                       if ($_POST){
                       	  $exped=($_POST['exped']);
                       	  $propos=($_POST['propos']);
                       	  $formap=($_POST['formap']);
                       	  $rapel=($_POST['rapel']);
                       	  $exprim=($_POST['exprim']);
                       	  $cordialement=($_POST['cordialement']);
                       	  $avocat=($_POST['avocat']);
                       	  $medcin=($_POST['medcin']);
                       	  $sentim=($_POST['sentim']);
                       	  $cord=($_POST['cord']);
                       	  $alap=($_POST['alap']);
                       	  $cors=($_POST['cors']);
                       	  $resp=($_POST['resp']);
                       	  $ss=($_POST['ss']);
                       	  $sd=($_POST['sd']);
                       	  $bs=($_POST['bs']);
                       	  $a=($_POST['a']);
                       	  $rapp=($_POST['rapp']);
                          $notrap=0;$repp='faux';
                       	  $note1=0;$rep1='faux';
                       	  $note2=0;$rep2='faux';
                       	  $note3=0;$rep3='faux'; $note4=0;$rep4='faux'; $note5=0;$rep5='faux'; $note6=0;$rep6='faux';
                       	  $note7=0;$note8=0; $rep7='faux'; $rep8='faux';
                       	  $tab1=0;$tab2=0;$tab3=0;$tab4=0;$tab5=0;$tab6=0;$tab7=0;$tab8=0;$tab9=0;
                       	  $reptab1='faux';$reptab2='faux';$reptab3='faux';$reptab4='faux';$reptab5='faux';$reptab6='faux';$reptab7='faux';$reptab8='faux';$reptab9='faux';
                       	  if ($exped=='On ne sait pas'){$note1=$note1+50; $rep1='vrai';}else{ $note1; $rep1;}
                       	  if ($propos=='on lui fait une proposition commerciale'){$note2=$note2+50; $rep2='vrai';}else{ $note2; $rep2;}
                       	 $notea=$note1+$note2;

                       	 if ($formap=='Madame, Monsieur'){$note3=$note3+20; $rep3='vrai';}else{ $note3; $rep3;}
                       	 if ($rapel=='Je vous remercie par avance pour votre réponse'){$note4=$note4+20; $rep4='vrai';}else{ $note4; $rep4;}
                       	 if ($rapp=='Je vous remercie pour votre message'){$notrap=$notrap+20; $repp='vrai';}else{ $notrap; $repp;}
                       	 

                       	 if ($exprim=='Je serais, en effet, intéressé'){$note5=$note5+20; $rep5='vrai';}else{ $note5; $rep5;}
                         if ($cordialement=='Cordialement'){$note6=$note6+20; $rep6='vrai';}else{ $note6; $rep6;}
                       	 $noteb=$note3+$note4+$note5+$note6+$notrap;

                       	 if ($avocat=='Maître'){$note7=$note7+50; $rep7='vrai';}else{ $note7; $rep7;}
                       	 if ($medcin=='Docteur'){$note8=$note8+50; $rep8='vrai';}else{ $note8; $rep8;}
                           $notemed=$note7+$note8;

                         if ($sentim=='À une personnalité'){$tab1=$tab1+11; $reptab1='vrai';}else{ $tab1; $reptab1;}
                         if ($cord=='À des professionnels'){$tab2=$tab2+11; $reptab2='vrai';}else{ $tab2; $reptab2;}
                         if ($alap=='À un proche'){$tab3=$tab3+11; $reptab3='vrai';}else{ $tab3; $reptab3;}
                         if ($cors=='À une personnalité'){$tab4=$tab4+12; $reptab4='vrai';}else{ $tab4; $reptab4;}
                         if ($resp=='À une personnalité'){$tab5=$tab5+11; $reptab5='vrai';}else{ $tab5; $reptab5;}  
                         if ($ss=='À des professionnels'){$tab6=$tab6+11; $reptab6='vrai';}else{ $tab6; $reptab6;}
                         if ($sd=='À des professionnels'){$tab7=$tab7+11; $reptab7='vrai';}else{ $tab7; $reptab7;}
                         if ($bs=='À un proche'){$tab8=$tab8+11; $reptab8='vrai';}else{ $tab8; $reptab8;}
                         if ($a=='À un proche'){$tab9=$tab9+11; $reptab9='vrai';}else{ $tab9; $reptab9;}
                         $notetab=$tab1+$tab2+$tab3+$tab4+$tab5+$tab6+$tab7+$tab8+$tab9;
                         $total=($notetab+$notea+$noteb+$notemed)/4;

                         
						  echo'<table>';
						         echo'<tr>
						            <td>Activité 1</td>
						            <td>'.$notea.'%</td>
						         </tr>

						         <tr>
                                    <td>Activité 2</td>
						            <td>Non disponible pour le momment</td>
						         </tr>

						         <tr>
                                    <td>Activité 3</td>
						            <td>'.$noteb.'%</td>
						         </tr>

						         <tr>
						            <td>Activité 4</td>
						            <td>'.$notemed.'%</td>
						         </tr>

						         <tr>
						           <td>Activité 5</td>
						            <td>'.$notetab.'%</td>
						         </tr>

						         <tr>
						           <td>Total Fiche N°1</td>
						            <td> '.$total.'%</td>
						         </tr>
                                 </table></br>';

						  echo'<p>Voyons maintenant vos réponses plus en détail :</p>
                             <h3 class="activite">Activité 1</h3>
                             <h3>Question 1</h3>
                            <p>À la question « Qui est l\'expéditeur de ce courrier électronique aussi appelé courriel?»,vous avez répondu :</p>';
                           
                           if($rep1=='vrai'){echo '<p><strong class="bonrep">'.$exped.': </strong>C\'est la bonne réponse !</p>';} else{echo'<p><strong class="mauvrep">'.$exped.':</strong></p> <p>La bonne réponse était : « On ne sait pas »';}
                            echo'</p>';
                            echo'<p class="remarque">En effet, le courriel est signé « Service commercial VEH ». Il s\'agit d\'une entité et non d\'une personne particulière. Nous verrons par la suite comment répondre à ce type d\'expéditeur.</p>';

                           echo'<h3> Question 2</h3>
                           <p>À la question « Que propose-t-on à Mohammed RAÏS ? », vous avez répondu :</p>';
                           
                           if($rep2=='vrai'){echo ' <p> <strong class="bonrep">'.$propos.' </strong> : C\'est la bonne réponse !';} else{echo' <p> <strong class="mauvrep">'.$propos.'</strong></p><p>La bonne réponse était : « on lui fait une proposition commerciale »';}
                          echo'</p>';
                         echo'<p class="remarque"> Il s\'agit ici de remises dans le cadre d\'une opération promotionnelle à durée limitée (le mois). La condition pour en bénéficier étant de répondre à l\'offre avant le 30 mars.</p>';

                          echo'<h3 class="activite">Activité 2</h3>
                                 <p>non disponible pour le moment</p>';
                             
                          
                          echo'<p>Mohammed Rais répond</p>';
                          echo'<h3 class="activite">Activité 3</h3>';
                          echo' <p>La formule d\'appel :</p>
                                <p>Pour vous adresser à votre destinataire, vous avez utilisé cette formule : </p>';
                                
                          if($rep3=='vrai'){echo '<p><strong class="bonrep">'.$formap.' : </strong>C\'est bien cela ! </p>';} else{echo'  <p><strong class="mauvrep">'.$formap.' </p></strong>   <p> Il fallait plutôt écrire : « Madame, Monsieur ».</p> ';}
                          echo'<p class="remarque">Comme nous l\'avons dit plus haut, nous nous adressons au service commercial, nous ne traitons  pas directement avec un individu. Dans ce genre de situation, il faut utiliser une formule d\'appel neutre.</p>
                          <p class="remarque">Si nous avions eu en signature du courriel :</br> « Cordialement </br>M. AYADI Hicham</br> Service commercial VEH »</p>
                          <p class="remarque">alors nous aurions été en présence d\'un interlocuteur précis. Nous aurions répondu par la formule « Monsieur ».</p>
                          <p class="remarque">À noter : il est fréquent de passer au cours d\'un échange de courriels d\'un destinataire indéfini à un interlocuteur privilégié. Il s\'agira donc d\'adapter les formules d\'appel durant ces échanges.</p></br>';

                          echo'<p>Rappel du contexte :</p>
                          <p class="remarque">La première phrase d\'un courriel sert à se replacer dans l\'historique des échanges. Ici, Mohammed exprime une double idée : il a bien reçu le courriel de son interlocuteur et il l\'en remercie.Vous avez répondu ;</p>';

                          

                          if($repp=='vrai'){echo ' <p><strong class="bonrep">'.$rapp.' : </strong> <strong>Parfait !</strong>  </p>';}else{echo'  <p><strong class="mauvrep">'.$rapp.'</strong></p><p>La formule la plus correcte était « Je vous remercie pour votre message » </p> ';}

                          echo'<p class="remarque">Nous verrons dans la prochaine fiche une manière plus élégante de rappeler le contexte.</p>';
                          echo'<p>Développement :</p>
                          <p class="remarque">Mohammed exprime SON intérêt. Il répond donc positivement à la sollicitation de son interlocuteur.</p>
                          <p>Vous avez répondu : </p>';

                         
                         if($rep5=='vrai'){echo ' <p><strong class="bonrep">'.$exprim.' : </strong> C\'est la bonne réponse !</p>';}else{echo'<p><strong class="mauvrep">'.$exprim.'</strong></p><p> La formule la plus correcte était « Je serais, en effet, intéressé » </p> ';}

                         echo'<p>Remerciements :</p>
                         <p class="remarque">On signale ici que l\'on souhaite obtenir une réponse. On l\'exprime alors de façon courtoise :</p>
                         <p>Vous avez répondu :</p>';
                        

                         if($rapel=='Merci beaucoup de me répondre'){echo '<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas approprié à cet échange. </p>
                         <p class="remarque">De plus il serait plus correct d\'écrire « Merci de me répondre ». On exprime par une formule sèche une pointe d\'agacement, par exemple dans le cas où un premier échange n\'aurait pas donné de suite.</p>
                         <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule :<strong class="bonrep" Je vous remercie par avance pour votre réponse .</strong></p>';} 

                          elseif($rapel=='C\'est possible ? Merci'){echo'<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct !</p>
                          <p class="remarque">Cette formulation est plus de l\'ordre de l\'oral, et ne dois pas être utilisée à l\'écrit lors d\'change professionnel.</p>
                          <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule :<strong class="bonrep">Je vous remercie par avance pour votre réponse .</strong></p>';}

                          elseif($rapel=='Répondez moi vite s\'il vous plaît'){echo'<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct ! </p>
                           <p class="remarque">Ici, cette formule donne un ton suppliant à votre demande. Il faut garder une attitude raisonnée sinon gare aux négociations !</p>
                           <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : Je vous remercie par avance pour votre réponse .</p>';}
                           elseif($rapel=='Je vous remercie par avance pour votre réponse'){echo'<p><strong class="bonrep">'.$rapel.'. </strong> parfais !</p>';}

                           else{echo'<p><strong class="mauvrep">vous n\'avez pas répondu</strong></p>
                          <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : Je vous remercie par avance pour votre réponse .</p>';}

                          echo'<p>Salutations :</p>
                               <p>Vous avez répondu :</p>';
                               
                               if($cordialement=='Aimablement'){echo'<p><strong class="mauvrep">'.$cordialement.' . </strong> Ce n\'est pas correct !</p>
                             <p class="remarque">Utiliser cette formule implique que vous entretenez déjà des rapports amicaux avec cette personne.</p>
                             <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : <strong class="bonrep">« Cordialement »</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport équivalent.</p>';}

                             elseif($cordialement=='A bientôt'){echo' <p><strong class="mauvrep">'.$cordialement.' . </strong>Ce n\'est pas approprié !</p>
                             <p class="remarque">Nous utiliserons cette formule dans le cadre de relation privée ou dans l\'échange de courriels avec un collègue de travail avec lequel on entretient des rapports de sympathie.</p>
                              <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : <strongclass="bonrep">« Cordialement »</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport équivalent</p>';}

                             elseif($cordialement=='Cordialement'){echo'<p><strong class="bonrep">'.$cordialement.' . </strong><p>Parfait!</p>';}
                             else{echo'<p><strong class="mauvrep">vous n\'avez pas répondu</strong></p>
                             <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : « Cordialement »</p></p>
                              <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport équivalent</p>';}
                              echo'<p>Aller plus loin</p>

                                   <h3 class="activite">Activité 4</h3>

                                   <p>À la question « Comment vous adressez-vous à un avocat ? », vous avez répondu : </p>';
                                   
                             if($avocat=='Bonjour Maître'){echo'<p><strong class="mauvrep">'.$avocat.' </stron> Ce n\'est pas correct de s\'adresser à son avocat en ces termes. Bonjour sera utilisé avec des personnes plus familières.</p>
                            <p>Préférez cette formulation : <strong class="bonrep">« Maître»</strong></p>
                            <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                             elseif($avocat=='Cher avocat'){echo'<p><strong class="mauvrep">'.$avocat. ' </stron> Ce n\'est pas correct !</p>
                              <p class="remarque">« Cher » implique une relation affective avec le correspondant. On l\'utilisera plutôt avec des relations amicales ou dans le cas d\'une entreprise s\'adressant à ses clients.</p> 
                              <p class="remarque">Exemple : « Cher client, </p>
                              <p class="remarque">Vous avez renouvelé votre abonnement à notre offre « Tranquillité » auprès de nos services. Nous vous remercions pour la confiance que vous portez à notre compagnie, et vous informons que nous sommes à votre écoute pour toutes informations supplémentaires. Vous trouverez sur votre espace personnel en ligne le résumé de votre abonnement ainsi qu\'une boite de dialogue pour joindre votre conseiller.</p>
                              <p class="remarque">Cordialement</p>
                              <p class="remarque">Le service clientèle de la compagnie d\'assurance ZEN</p>
                              <p>Préférez cette formulation : <strong class="bonrep">« Maître, »</strong></p> 
                          <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                             elseif ($avocat=='Monsieur l\'avocat'){echo'<p><strong class="mauvrep">'.$avocat. ' </stron> Ce n\'est pas correct !</p>
                              <p class="remarque">On ne s\'adresse pas à un avocat par le nom de sa profession. C\'est un cas particulier pour lequel on emploiera le terme de « Maître ».</p>
                            <p>La bonne réponse était donc :</p>
                            <p><strong class="bonrep">« Maître »</strong></p> 
                            <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p class="remarque">Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »';}
                             elseif ($avocat=='Maître'){echo'<p><strong class="bonrep">'.$avocat.  ' </stron>C\'est la bonne réponse !</p>
                             <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}
                             else{echo '<p><strong class="mauvrep">vous n\'avez répondu</strong> il falait répendre par « Maître » 
                             <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                              echo'<p>À la question « Comment vous adressez-vous à un médecin ? », vous avez répondu : </p>';
                                   
                            if ($medcin=='Professeur'){echo'<p><strong class="mauvrep">'.$medcin. ' </stron> Réponse acceptée</p> <p class="remarque"> mais attention ! Tout les médecins ne sont pas professeur. Il faut pour cela qu\'il soit chef de service et/ou enseignant à la faculté de médecine. Si vous ignorez cette information,utilisez plutôt le terme « Docteur ».</p>
                              <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p><p><i>Réponse acceptée<i></p>';}

                          elseif($medcin=='Maître'){echo'<p><strong class="mauvrep">'.$medcin. ' </stron> Cette formule n\'est pas appropriée lorsque l\'on s\'adresse à un médecin.</p>
                       <p class="remarque">Utilisez plutôt « Docteur » si vous ne connaissez pas la formation de ce dernier.</p>
                           <p class="remarque">Utilisez« Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant àla faculté de médecine.</p> 
                          <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

                          elseif($medcin=='Docteur'){echo'<p><strong class="bonrep">'.$medcin. ' </stron> C\'est la bonne réponse !</p>
	                      <p class="remarque">Utilisez « Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant à la faculté de médecine.</p>
	                      <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

	                      else{echo'<p><strong class="mauvrep">vous n\'avez pas répondu</strong>, il falait répendre par« Docteur »</p>
	                      <p class="remarque">Utilisez « Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant à la faculté de médecine.</p>
	                      <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}


	                      echo'<h3 class="activite">Activité 5</h3>';
	                      echo'<p>Revoyons votre tableau :<p>';
                                echo' <table>
                                 <tr>
                                    <td class="col">Formule</td>
                                    <td class="col">À un proche</th>
                                    <td class="col">À des professionnels</td>
                                    <td class="col">À une personnalité</td>
                                 </tr>

                                 <tr>
                                 <td>Sentiments respectueux</td>';
                                 if($sentim=='À un proche'){

                                echo' 
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="sentim"  value="À un proche" /></td>
                                 <td></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';} elseif($sentim=='À des professionnels'){
                                 	echo' 
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="sentim" value="À des professionnels" /></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($sentim=='À une personnalité'){echo' 
                                 <td></td>
                                 <td></td>
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="sentim" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{ echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 
                                   


                               echo' <tr>
                                <td class="col">Cordialement</td>';
                                 if($cord=='À un proche'){                                
                                echo' <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cord" value="À un proche" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>                                
                                 </tr>';} 
                                 elseif($cord=='À des professionnels'){
                                 	echo' <td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="cord" value="À des professionnels" /></td>
                                 <td class="col"></td>                                
                                 </tr>';}
                                 elseif($cord=='À une personnalité'){
                                 	echo' <td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cord" value="À une personnalité" /></td>                                
                                 </tr>';}
                                 else {echo'
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>                                
                                 </tr>';}



                                 echo'<tr>
                                 <td>À la prochaine !</td>';
                                 if($alap=='À un proche'){
	                             echo'                                 
                                 <td style="background:#BAC900"><input type="radio" checked="checked"name="alap" value="À un proche" /></td>
                                 <td></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($alap=='À des professionnels'){
                                 echo'<td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="alap" value="À des professionnels" /></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($alap=='À une personnalité'){
                                 echo'<td style="background:#BAC900"></td>
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="alap" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{
                                 echo'<td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}

                                 echo'<tr>
                                 <td class="col">cordiales salutations</td>';
                                 if($cors=='À un proche'){
                                 echo'
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cors" value="À un proche" /></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($cors=='À des professionnels'){
                                 echo'
                                 <td class="col"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cors" value="À des professionnels" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($cors=='À une personnalité'){
                                 echo'
                               	<td class="col"></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="cors" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                               	<td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 echo'<tr>';
                                 echo'<td >Respectueuse considération</td>';

                                 if($resp=='À un proche'){
                                 echo'
                                 <td style="background:#D2204C"><input type="radio" checked="checked"name="resp" value="À un proche" /></td>
                                 <td ></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($resp=='À des professionnels'){
                                 echo'
                                 <td ></td>
                                 <td style="background:#D2204C"><input type="radio" name="resp"checked="checked" value="À des professionnels" /></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($resp=='À une personnalité'){
                                 echo'
                                 <td ></td>
                                 <td ></td>
                                 <td style="background:#BAC900"><input type="radio" name="resp "checked="checked" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}



                                 echo'<tr>
                                 <td class="col">Sincères salutations</td>';
                                 if($ss=='À un proche'){
                                 echo'<td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="ss" value="À un proche" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($ss=='À des professionnels'){
                                 echo'<td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="ss" value="À des professionnels" /></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($ss=='À une personnalité'){
                                 echo'<td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="ss" value="À une personnalité" /></td>
                                 </tr>';}

                                 else{
                                 echo'<td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 </tr>';}


                                 echo'<tr>
                                 <td >Salutations distinguées</td>';

                                 if($sd=='À un proche'){
                                 	echo'
                                 <td style="background:#D2204C"><input type="radio" name="sd" checked="checked" value="À un proche" /></td>
                                 <td style="background:#BAC900"><input type="radio" name="sd" value="À des professionnels" /></td>
                                 <td ></td>
                                 </tr>';}
                                 elseif($sd=='À des professionnels'){
                                 	echo'
                                 <td ></td>
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="sd" value="À des professionnels" /></td>
                                 <td ></td>
                                 </tr>';}
                                 elseif($sd=='À une personnalité'){
                                 	echo'
                                 <td ></td>
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" name="sd" checked="checked" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{
                                 	echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}



                                 echo'<tr>
                                 <td class="col">Bises</td>';

                                 if($bs=='À un proche'){
                                 echo'<td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="bs" value="À un proche" /></td>
                                 <td class="col"></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($bs=='À des professionnels'){
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="bs" value="À des professionnels" /></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($bs=='À une personnalité'){
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="bs" value="À une personnalité" /></td>
                                 </tr>';}

                                 else{
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 </tr>';}


                                 echo'<tr>
                                 <td>À +</td>';

                                 if($a=='À un proche'){
                                 echo'
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="a" value="À un proche" /></td>
                                 <td></td>
                                 <td></td>
                                 </tr>';}
                                 
                                 elseif($a=='À des professionnels'){
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="a" value="À des professionnels" /></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($a=='À une personnalité'){
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="a" value="À une personnalité" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}



                               echo'</table></br>';

                  if($notetab==100){echo'<p><strong class="bonrep">C\'est bien cela !</strong></p>';}
                  elseif($notetab==0){echo'<p><strong class="mauvrep">Vous n\'avez pas répondu.</strong></p>';} 
                  else{echo'<p><strong class="mauvrep">Ce n\'est pas tout à fait correct.</strong></p>
                            ';}
                




	                      



	                      echo'<p class="remarque">Il est important de choisir le bon vocabulaire en fonction du statut du destinataire. Ces mots de vocabulaire sont classés dans différents registres de langue : familier, courant ou soutenu. On dit également que l\'on s\'adresse à l\'interlocuteur de manière informelle ( c\'est le langage familier),formelle (c\'est le langage courant) ou très formelle (ou encore de manière protocolaire,   c\'est le langage soutenu).</p>';
                          echo '<h2>EN RÉSUMÉ :</h2>';
                          echo'<div id="res">';
	                      echo'<p class="resume">- Lors de la réception d\'un courriel, la première étape est de repérer l\'expéditeur et l\'objet du message.</p>
	                      <p class="resume">- Il est important de respecter une organisation dans la rédaction d\'un courriel : Objet, formule d\'appel, rappel du contexte, développement, remerciements, salutations, signature.</p>
	                       <p class="resume">-Les formules utilisées dans le courriel doivent tenir compte de la nature de l\'expéditeur ( un service, un homme, une femme, une catégorie de professionnels) ainsi que du type de relation qui vous lie avec ce dernier ( ami, collègue, client, subalterne, supérieur hiérarchique...)</p></div></br>';

	                       }
	                       ?>
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						  <a href="fiche1.php" class="continue"> Retour à la fiche | </a>
						  <a href="intro.php" class="continue"> Sommaire | </a>
						  <a href="fiche2.php" class="continue"> Continuer la suite de la formation</a></br>
				</div> <!-- content_container -->
			
			<div id="footer_container">
			  <img src="img/marianne.png" alt="la marianne" id="lleft"/>
			  <img src="img/logo1.jpg" alt="text descriptive" id="lright" />
				<ul>
					<li class="copyright">Copyright Institut Français &copy; 2014</li>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="">lien 1</a></li>
					<li><a href="">lien 2</a></li>
					<li><a href="www.okt-s.com">Developers</a></li>
					<li><a href="www.institutfrançais.com">institutfrançais</a></li>
				</ul>
			
			</div> <!-- footer_container -->
		
		</div> <!-- container -->
		<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
	
	</body>
	
</html>