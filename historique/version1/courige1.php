<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>INstitut Fran�ais</title>

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
			 <h2>Formation de fran�ais  en ligne</h2>
				
			
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
			
				<h1>Fiches d'aide � la r�alisation de courriels professionnels</h1>
				 <h2>Corrig� de la fiche N�1</h2></br>
					 <p>F�licitation <?php if(isset($_SESSION['username'])){echo ''.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?> ! Vous avez termin� votre premi�re s�rie d'activit�s.</p>
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
                       	 if ($rapel=='Je vous remercie par avance pour votre r�ponse'){$note4=$note4+20; $rep4='vrai';}else{ $note4; $rep4;}
                       	 if ($rapp=='Je vous remercie pour votre message'){$notrap=$notrap+20; $repp='vrai';}else{ $notrap; $repp;}
                       	 

                       	 if ($exprim=='Je serais, en effet, int�ress�'){$note5=$note5+20; $rep5='vrai';}else{ $note5; $rep5;}
                         if ($cordialement=='Cordialement'){$note6=$note6+20; $rep6='vrai';}else{ $note6; $rep6;}
                       	 $noteb=$note3+$note4+$note5+$note6+$notrap;

                       	 if ($avocat=='Ma�tre'){$note7=$note7+50; $rep7='vrai';}else{ $note7; $rep7;}
                       	 if ($medcin=='Docteur'){$note8=$note8+50; $rep8='vrai';}else{ $note8; $rep8;}
                           $notemed=$note7+$note8;

                         if ($sentim=='� une personnalit�'){$tab1=$tab1+11; $reptab1='vrai';}else{ $tab1; $reptab1;}
                         if ($cord=='� des professionnels'){$tab2=$tab2+11; $reptab2='vrai';}else{ $tab2; $reptab2;}
                         if ($alap=='� un proche'){$tab3=$tab3+11; $reptab3='vrai';}else{ $tab3; $reptab3;}
                         if ($cors=='� une personnalit�'){$tab4=$tab4+12; $reptab4='vrai';}else{ $tab4; $reptab4;}
                         if ($resp=='� une personnalit�'){$tab5=$tab5+11; $reptab5='vrai';}else{ $tab5; $reptab5;}  
                         if ($ss=='� des professionnels'){$tab6=$tab6+11; $reptab6='vrai';}else{ $tab6; $reptab6;}
                         if ($sd=='� des professionnels'){$tab7=$tab7+11; $reptab7='vrai';}else{ $tab7; $reptab7;}
                         if ($bs=='� un proche'){$tab8=$tab8+11; $reptab8='vrai';}else{ $tab8; $reptab8;}
                         if ($a=='� un proche'){$tab9=$tab9+11; $reptab9='vrai';}else{ $tab9; $reptab9;}
                         $notetab=$tab1+$tab2+$tab3+$tab4+$tab5+$tab6+$tab7+$tab8+$tab9;
                         $total=($notetab+$notea+$noteb+$notemed)/4;

                         
						  echo'<table>';
						         echo'<tr>
						            <td>Activit� 1</td>
						            <td>'.$notea.'%</td>
						         </tr>

						         <tr>
                                    <td>Activit� 2</td>
						            <td>Non disponible pour le momment</td>
						         </tr>

						         <tr>
                                    <td>Activit� 3</td>
						            <td>'.$noteb.'%</td>
						         </tr>

						         <tr>
						            <td>Activit� 4</td>
						            <td>'.$notemed.'%</td>
						         </tr>

						         <tr>
						           <td>Activit� 5</td>
						            <td>'.$notetab.'%</td>
						         </tr>

						         <tr>
						           <td>Total Fiche N�1</td>
						            <td> '.$total.'%</td>
						         </tr>
                                 </table></br>';

						  echo'<p>Voyons maintenant vos r�ponses plus en d�tail :</p>
                             <h3 class="activite">Activit� 1</h3>
                             <h3>Question 1</h3>
                            <p>� la question � Qui est l\'exp�diteur de ce courrier �lectronique aussi appel� courriel?�,vous avez r�pondu :</p>';
                           
                           if($rep1=='vrai'){echo '<p><strong class="bonrep">'.$exped.': </strong>C\'est la bonne r�ponse !</p>';} else{echo'<p><strong class="mauvrep">'.$exped.':</strong></p> <p>La bonne r�ponse �tait : � On ne sait pas �';}
                            echo'</p>';
                            echo'<p class="remarque">En effet, le courriel est sign� � Service commercial VEH �. Il s\'agit d\'une entit� et non d\'une personne particuli�re. Nous verrons par la suite comment r�pondre � ce type d\'exp�diteur.</p>';

                           echo'<h3> Question 2</h3>
                           <p>� la question � Que propose-t-on � Mohammed RA�S ? �, vous avez r�pondu :</p>';
                           
                           if($rep2=='vrai'){echo ' <p> <strong class="bonrep">'.$propos.' </strong> : C\'est la bonne r�ponse !';} else{echo' <p> <strong class="mauvrep">'.$propos.'</strong></p><p>La bonne r�ponse �tait : � on lui fait une proposition commerciale �';}
                          echo'</p>';
                         echo'<p class="remarque"> Il s\'agit ici de remises dans le cadre d\'une op�ration promotionnelle � dur�e limit�e (le mois). La condition pour en b�n�ficier �tant de r�pondre � l\'offre avant le 30 mars.</p>';

                          echo'<h3 class="activite">Activit� 2</h3>
                                 <p>non disponible pour le moment</p>';
                             
                          
                          echo'<p>Mohammed Rais r�pond</p>';
                          echo'<h3 class="activite">Activit� 3</h3>';
                          echo' <p>La formule d\'appel :</p>
                                <p>Pour vous adresser � votre destinataire, vous avez utilis� cette formule : </p>';
                                
                          if($rep3=='vrai'){echo '<p><strong class="bonrep">'.$formap.' : </strong>C\'est bien cela ! </p>';} else{echo'  <p><strong class="mauvrep">'.$formap.' </p></strong>   <p> Il fallait plut�t �crire : � Madame, Monsieur �.</p> ';}
                          echo'<p class="remarque">Comme nous l\'avons dit plus haut, nous nous adressons au service commercial, nous ne traitons  pas directement avec un individu. Dans ce genre de situation, il faut utiliser une formule d\'appel neutre.</p>
                          <p class="remarque">Si nous avions eu en signature du courriel :</br> � Cordialement </br>M. AYADI Hicham</br> Service commercial VEH �</p>
                          <p class="remarque">alors nous aurions �t� en pr�sence d\'un interlocuteur pr�cis. Nous aurions r�pondu par la formule � Monsieur �.</p>
                          <p class="remarque">� noter : il est fr�quent de passer au cours d\'un �change de courriels d\'un destinataire ind�fini � un interlocuteur privil�gi�. Il s\'agira donc d\'adapter les formules d\'appel durant ces �changes.</p></br>';

                          echo'<p>Rappel du contexte :</p>
                          <p class="remarque">La premi�re phrase d\'un courriel sert � se replacer dans l\'historique des �changes. Ici, Mohammed exprime une double id�e : il a bien re�u le courriel de son interlocuteur et il l\'en remercie.Vous avez r�pondu ;</p>';

                          

                          if($repp=='vrai'){echo ' <p><strong class="bonrep">'.$rapp.' : </strong> <strong>Parfait !</strong>  </p>';}else{echo'  <p><strong class="mauvrep">'.$rapp.'</strong></p><p>La formule la plus correcte �tait � Je vous remercie pour votre message � </p> ';}

                          echo'<p class="remarque">Nous verrons dans la prochaine fiche une mani�re plus �l�gante de rappeler le contexte.</p>';
                          echo'<p>D�veloppement :</p>
                          <p class="remarque">Mohammed exprime SON int�r�t. Il r�pond donc positivement � la sollicitation de son interlocuteur.</p>
                          <p>Vous avez r�pondu : </p>';

                         
                         if($rep5=='vrai'){echo ' <p><strong class="bonrep">'.$exprim.' : </strong> C\'est la bonne r�ponse !</p>';}else{echo'<p><strong class="mauvrep">'.$exprim.'</strong></p><p> La formule la plus correcte �tait � Je serais, en effet, int�ress� � </p> ';}

                         echo'<p>Remerciements :</p>
                         <p class="remarque">On signale ici que l\'on souhaite obtenir une r�ponse. On l\'exprime alors de fa�on courtoise :</p>
                         <p>Vous avez r�pondu :</p>';
                        

                         if($rapel=='Merci beaucoup de me r�pondre'){echo '<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas appropri� � cet �change. </p>
                         <p class="remarque">De plus il serait plus correct d\'�crire � Merci de me r�pondre �. On exprime par une formule s�che une pointe d\'agacement, par exemple dans le cas o� un premier �change n\'aurait pas donn� de suite.</p>
                         <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule :<strong class="bonrep" Je vous remercie par avance pour votre r�ponse .</strong></p>';} 

                          elseif($rapel=='C\'est possible ? Merci'){echo'<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct !</p>
                          <p class="remarque">Cette formulation est plus de l\'ordre de l\'oral, et ne dois pas �tre utilis�e � l\'�crit lors d\'change professionnel.</p>
                          <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule :<strong class="bonrep">Je vous remercie par avance pour votre r�ponse .</strong></p>';}

                          elseif($rapel=='R�pondez moi vite s\'il vous pla�t'){echo'<p><strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct ! </p>
                           <p class="remarque">Ici, cette formule donne un ton suppliant � votre demande. Il faut garder une attitude raisonn�e sinon gare aux n�gociations !</p>
                           <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule : Je vous remercie par avance pour votre r�ponse .</p>';}
                           elseif($rapel=='Je vous remercie par avance pour votre r�ponse'){echo'<p><strong class="bonrep">'.$rapel.'. </strong> parfais !</p>';}

                           else{echo'<p><strong class="mauvrep">vous n\'avez pas r�pondu</strong></p>
                          <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule : Je vous remercie par avance pour votre r�ponse .</p>';}

                          echo'<p>Salutations :</p>
                               <p>Vous avez r�pondu :</p>';
                               
                               if($cordialement=='Aimablement'){echo'<p><strong class="mauvrep">'.$cordialement.' . </strong> Ce n\'est pas correct !</p>
                             <p class="remarque">Utiliser cette formule implique que vous entretenez d�j� des rapports amicaux avec cette personne.</p>
                             <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule : <strong class="bonrep">� Cordialement �</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilis�e initialement par votre correspondant, cela vous place dans un rapport �quivalent.</p>';}

                             elseif($cordialement=='A bient�t'){echo' <p><strong class="mauvrep">'.$cordialement.' . </strong>Ce n\'est pas appropri� !</p>
                             <p class="remarque">Nous utiliserons cette formule dans le cadre de relation priv�e ou dans l\'�change de courriels avec un coll�gue de travail avec lequel on entretient des rapports de sympathie.</p>
                              <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule : <strongclass="bonrep">� Cordialement �</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilis�e initialement par votre correspondant, cela vous place dans un rapport �quivalent</p>';}

                             elseif($cordialement=='Cordialement'){echo'<p><strong class="bonrep">'.$cordialement.' . </strong><p>Parfait!</p>';}
                             else{echo'<p><strong class="mauvrep">vous n\'avez pas r�pondu</strong></p>
                             <p class="remarque">Ici, il serait plus � propos d\'utiliser cette formule : � Cordialement �</p></p>
                              <p class="remarque">En effet, c\'est la formule utilis�e initialement par votre correspondant, cela vous place dans un rapport �quivalent</p>';}
                              echo'<p>Aller plus loin</p>

                                   <h3 class="activite">Activit� 4</h3>

                                   <p>� la question � Comment vous adressez-vous � un avocat ? �, vous avez r�pondu : </p>';
                                   
                             if($avocat=='Bonjour Ma�tre'){echo'<p><strong class="mauvrep">'.$avocat.' </stron> Ce n\'est pas correct de s\'adresser � son avocat en ces termes. Bonjour sera utilis� avec des personnes plus famili�res.</p>
                            <p>Pr�f�rez cette formulation : <strong class="bonrep">� Ma�tre�</strong></p>
                            <p class="remarque">En effet, ce terme sera utilis� pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avou�, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit � Ma�tre �, et non � Ma�tresse �.</p>
                            <p class="remarque">Lorsqu\'on s\'adresse � plusieurs avocats, on utilisera � Messieurs les avocats �.</p>
                             <p class="remarque">Si l\'on est soit m�me avocat, on utilisera le terme de � Confr�re �.</p>
                             <p class="remarque">Si l\'on s\'adresse � un avocat en dehors de l\'exercice de ses fonctions, on utilisera � Monsieur � ou � Madame �</p>';}

                             elseif($avocat=='Cher avocat'){echo'<p><strong class="mauvrep">'.$avocat. ' </stron> Ce n\'est pas correct !</p>
                              <p class="remarque">� Cher � implique une relation affective avec le correspondant. On l\'utilisera plut�t avec des relations amicales ou dans le cas d\'une entreprise s\'adressant � ses clients.</p> 
                              <p class="remarque">Exemple : � Cher client, </p>
                              <p class="remarque">Vous avez renouvel� votre abonnement � notre offre � Tranquillit� � aupr�s de nos services. Nous vous remercions pour la confiance que vous portez � notre compagnie, et vous informons que nous sommes � votre �coute pour toutes informations suppl�mentaires. Vous trouverez sur votre espace personnel en ligne le r�sum� de votre abonnement ainsi qu\'une boite de dialogue pour joindre votre conseiller.</p>
                              <p class="remarque">Cordialement</p>
                              <p class="remarque">Le service client�le de la compagnie d\'assurance ZEN</p>
                              <p>Pr�f�rez cette formulation : <strong class="bonrep">� Ma�tre, �</strong></p> 
                          <p class="remarque">En effet, ce terme sera utilis� pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avou�, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit � Ma�tre �, et non � Ma�tresse �.</p>
                            <p class="remarque">Lorsqu\'on s\'adresse � plusieurs avocats, on utilisera � Messieurs les avocats �.</p>
                             <p class="remarque">Si l\'on est soit m�me avocat, on utilisera le terme de � Confr�re �.</p>
                             <p class="remarque">Si l\'on s\'adresse � un avocat en dehors de l\'exercice de ses fonctions, on utilisera � Monsieur � ou � Madame �</p>';}

                             elseif ($avocat=='Monsieur l\'avocat'){echo'<p><strong class="mauvrep">'.$avocat. ' </stron> Ce n\'est pas correct !</p>
                              <p class="remarque">On ne s\'adresse pas � un avocat par le nom de sa profession. C\'est un cas particulier pour lequel on emploiera le terme de � Ma�tre �.</p>
                            <p>La bonne r�ponse �tait donc :</p>
                            <p><strong class="bonrep">� Ma�tre �</strong></p> 
                            <p class="remarque">En effet, ce terme sera utilis� pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avou�, notaire...).</p>
                            <p class="remarque">Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit � Ma�tre �, et non � Ma�tresse �.</p>
                            <p class="remarque">Lorsqu\'on s\'adresse � plusieurs avocats, on utilisera � Messieurs les avocats �.</p>
                             <p class="remarque">Si l\'on est soit m�me avocat, on utilisera le terme de � Confr�re �.</p>
                             <p class="remarque">Si l\'on s\'adresse � un avocat en dehors de l\'exercice de ses fonctions, on utilisera � Monsieur � ou � Madame �';}
                             elseif ($avocat=='Ma�tre'){echo'<p><strong class="bonrep">'.$avocat.  ' </stron>C\'est la bonne r�ponse !</p>
                             <p class="remarque">En effet, ce terme sera utilis� pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avou�, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit � Ma�tre �, et non � Ma�tresse �.</p>
                            <p class="remarque">Lorsqu\'on s\'adresse � plusieurs avocats, on utilisera � Messieurs les avocats �.</p>
                             <p class="remarque">Si l\'on est soit m�me avocat, on utilisera le terme de � Confr�re �.</p>
                             <p class="remarque">Si l\'on s\'adresse � un avocat en dehors de l\'exercice de ses fonctions, on utilisera � Monsieur � ou � Madame �</p>';}
                             else{echo '<p><strong class="mauvrep">vous n\'avez r�pondu</strong> il falait r�pendre par � Ma�tre � 
                             <p class="remarque">En effet, ce terme sera utilis� pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avou�, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit � Ma�tre �, et non � Ma�tresse �.</p>
                            <p class="remarque">Lorsqu\'on s\'adresse � plusieurs avocats, on utilisera � Messieurs les avocats �.</p>
                             <p class="remarque">Si l\'on est soit m�me avocat, on utilisera le terme de � Confr�re �.</p>
                             <p class="remarque">Si l\'on s\'adresse � un avocat en dehors de l\'exercice de ses fonctions, on utilisera � Monsieur � ou � Madame �</p>';}

                              echo'<p>� la question � Comment vous adressez-vous � un m�decin ? �, vous avez r�pondu : </p>';
                                   
                            if ($medcin=='Professeur'){echo'<p><strong class="mauvrep">'.$medcin. ' </stron> R�ponse accept�e</p> <p class="remarque"> mais attention ! Tout les m�decins ne sont pas professeur. Il faut pour cela qu\'il soit chef de service et/ou enseignant � la facult� de m�decine. Si vous ignorez cette information,utilisez plut�t le terme � Docteur �.</p>
                              <p class="remarque">A noter : on confond souvent deux � docteurs �. Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses �tudes. On peut ainsi �tre docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p><p><i>R�ponse accept�e<i></p>';}

                          elseif($medcin=='Ma�tre'){echo'<p><strong class="mauvrep">'.$medcin. ' </stron> Cette formule n\'est pas appropri�e lorsque l\'on s\'adresse � un m�decin.</p>
                       <p class="remarque">Utilisez plut�t � Docteur � si vous ne connaissez pas la formation de ce dernier.</p>
                           <p class="remarque">Utilisez� Professeur � si celui-ci est professeur de m�decine, c\'est � dire chef de service et/ou enseignant �la facult� de m�decine.</p> 
                          <p class="remarque">A noter : on confond souvent deux � docteurs �. Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses �tudes. On peut ainsi �tre docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

                          elseif($medcin=='Docteur'){echo'<p><strong class="bonrep">'.$medcin. ' </stron> C\'est la bonne r�ponse !</p>
	                      <p class="remarque">Utilisez � Professeur � si celui-ci est professeur de m�decine, c\'est � dire chef de service et/ou enseignant � la facult� de m�decine.</p>
	                      <p class="remarque">A noter : on confond souvent deux � docteurs �. Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses �tudes. On peut ainsi �tre docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

	                      else{echo'<p><strong class="mauvrep">vous n\'avez pas r�pondu</strong>, il falait r�pendre par� Docteur �</p>
	                      <p class="remarque">Utilisez � Professeur � si celui-ci est professeur de m�decine, c\'est � dire chef de service et/ou enseignant � la facult� de m�decine.</p>
	                      <p class="remarque">A noter : on confond souvent deux � docteurs �. Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses �tudes. On peut ainsi �tre docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}


	                      echo'<h3 class="activite">Activit� 5</h3>';
	                      echo'<p>Revoyons votre tableau :<p>';
                                echo' <table>
                                 <tr>
                                    <td class="col">Formule</td>
                                    <td class="col">� un proche</th>
                                    <td class="col">� des professionnels</td>
                                    <td class="col">� une personnalit�</td>
                                 </tr>

                                 <tr>
                                 <td>Sentiments respectueux</td>';
                                 if($sentim=='� un proche'){

                                echo' 
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="sentim"  value="� un proche" /></td>
                                 <td></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';} elseif($sentim=='� des professionnels'){
                                 	echo' 
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="sentim" value="� des professionnels" /></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($sentim=='� une personnalit�'){echo' 
                                 <td></td>
                                 <td></td>
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="sentim" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{ echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 
                                   


                               echo' <tr>
                                <td class="col">Cordialement</td>';
                                 if($cord=='� un proche'){                                
                                echo' <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cord" value="� un proche" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>                                
                                 </tr>';} 
                                 elseif($cord=='� des professionnels'){
                                 	echo' <td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="cord" value="� des professionnels" /></td>
                                 <td class="col"></td>                                
                                 </tr>';}
                                 elseif($cord=='� une personnalit�'){
                                 	echo' <td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cord" value="� une personnalit�" /></td>                                
                                 </tr>';}
                                 else {echo'
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>                                
                                 </tr>';}



                                 echo'<tr>
                                 <td>� la prochaine !</td>';
                                 if($alap=='� un proche'){
	                             echo'                                 
                                 <td style="background:#BAC900"><input type="radio" checked="checked"name="alap" value="� un proche" /></td>
                                 <td></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($alap=='� des professionnels'){
                                 echo'<td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="alap" value="� des professionnels" /></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($alap=='� une personnalit�'){
                                 echo'<td style="background:#BAC900"></td>
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="alap" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{
                                 echo'<td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}

                                 echo'<tr>
                                 <td class="col">cordiales salutations</td>';
                                 if($cors=='� un proche'){
                                 echo'
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cors" value="� un proche" /></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($cors=='� des professionnels'){
                                 echo'
                                 <td class="col"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="cors" value="� des professionnels" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($cors=='� une personnalit�'){
                                 echo'
                               	<td class="col"></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="cors" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                               	<td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 </tr>';}
                                 echo'<tr>';
                                 echo'<td >Respectueuse consid�ration</td>';

                                 if($resp=='� un proche'){
                                 echo'
                                 <td style="background:#D2204C"><input type="radio" checked="checked"name="resp" value="� un proche" /></td>
                                 <td ></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($resp=='� des professionnels'){
                                 echo'
                                 <td ></td>
                                 <td style="background:#D2204C"><input type="radio" name="resp"checked="checked" value="� des professionnels" /></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}
                                 elseif($resp=='� une personnalit�'){
                                 echo'
                                 <td ></td>
                                 <td ></td>
                                 <td style="background:#BAC900"><input type="radio" name="resp "checked="checked" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 </tr>';}



                                 echo'<tr>
                                 <td class="col">Sinc�res salutations</td>';
                                 if($ss=='� un proche'){
                                 echo'<td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="ss" value="� un proche" /></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($ss=='� des professionnels'){
                                 echo'<td class="col"></td>
                                 <td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="ss" value="� des professionnels" /></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($ss=='� une personnalit�'){
                                 echo'<td class="col"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="ss" value="� une personnalit�" /></td>
                                 </tr>';}

                                 else{
                                 echo'<td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 </tr>';}


                                 echo'<tr>
                                 <td >Salutations distingu�es</td>';

                                 if($sd=='� un proche'){
                                 	echo'
                                 <td style="background:#D2204C"><input type="radio" name="sd" checked="checked" value="� un proche" /></td>
                                 <td style="background:#BAC900"><input type="radio" name="sd" value="� des professionnels" /></td>
                                 <td ></td>
                                 </tr>';}
                                 elseif($sd=='� des professionnels'){
                                 	echo'
                                 <td ></td>
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="sd" value="� des professionnels" /></td>
                                 <td ></td>
                                 </tr>';}
                                 elseif($sd=='� une personnalit�'){
                                 	echo'
                                 <td ></td>
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" name="sd" checked="checked" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{
                                 	echo'
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}



                                 echo'<tr>
                                 <td class="col">Bises</td>';

                                 if($bs=='� un proche'){
                                 echo'<td class="col" style="background:#BAC900"><input type="radio" checked="checked" name="bs" value="� un proche" /></td>
                                 <td class="col"></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($bs=='� des professionnels'){
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="bs" value="� des professionnels" /></td>
                                 <td class="col"></td>
                                 </tr>';}

                                 elseif($bs=='� une personnalit�'){
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col"></td>
                                 <td class="col" style="background:#D2204C"><input type="radio" checked="checked" name="bs" value="� une personnalit�" /></td>
                                 </tr>';}

                                 else{
                                 echo'<td class="col" style="background:#BAC900"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 <td class="col" style="background:#D2204C"></td>
                                 </tr>';}


                                 echo'<tr>
                                 <td>� +</td>';

                                 if($a=='� un proche'){
                                 echo'
                                 <td style="background:#BAC900"><input type="radio" checked="checked" name="a" value="� un proche" /></td>
                                 <td></td>
                                 <td></td>
                                 </tr>';}
                                 
                                 elseif($a=='� des professionnels'){
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="a" value="� des professionnels" /></td>
                                 <td></td>
                                 </tr>';}
                                 elseif($a=='� une personnalit�'){
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td></td>
                                 <td style="background:#D2204C"><input type="radio" checked="checked" name="a" value="� une personnalit�" /></td>
                                 </tr>';}
                                 else{
                                 echo'
                                 <td style="background:#BAC900"></td>
                                 <td style="background:#D2204C"></td>
                                 <td style="background:#D2204C"></td>
                                 </tr>';}



                               echo'</table></br>';

                  if($notetab==100){echo'<p><strong class="bonrep">C\'est bien cela !</strong></p>';}
                  elseif($notetab==0){echo'<p><strong class="mauvrep">Vous n\'avez pas r�pondu.</strong></p>';} 
                  else{echo'<p><strong class="mauvrep">Ce n\'est pas tout � fait correct.</strong></p>
                            ';}
                




	                      



	                      echo'<p class="remarque">Il est important de choisir le bon vocabulaire en fonction du statut du destinataire. Ces mots de vocabulaire sont class�s dans diff�rents registres de langue : familier, courant ou soutenu. On dit �galement que l\'on s\'adresse � l\'interlocuteur de mani�re informelle ( c\'est le langage familier),formelle (c\'est le langage courant) ou tr�s formelle (ou encore de mani�re protocolaire,   c\'est le langage soutenu).</p>';
                          echo '<h2>EN R�SUM� :</h2>';
                          echo'<div id="res">';
	                      echo'<p class="resume">- Lors de la r�ception d\'un courriel, la premi�re �tape est de rep�rer l\'exp�diteur et l\'objet du message.</p>
	                      <p class="resume">- Il est important de respecter une organisation dans la r�daction d\'un courriel : Objet, formule d\'appel, rappel du contexte, d�veloppement, remerciements, salutations, signature.</p>
	                       <p class="resume">-Les formules utilis�es dans le courriel doivent tenir compte de la nature de l\'exp�diteur ( un service, un homme, une femme, une cat�gorie de professionnels) ainsi que du type de relation qui vous lie avec ce dernier ( ami, coll�gue, client, subalterne, sup�rieur hi�rarchique...)</p></div></br>';

	                       }
	                       ?>
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						  <a href="fiche1.php" class="continue"> Retour � la fiche | </a>
						  <a href="intro.php" class="continue"> Sommaire | </a>
						  <a href="fiche2.php" class="continue"> Continuer la suite de la formation</a></br>
				</div> <!-- content_container -->
			
			<div id="footer_container">
			  <img src="img/marianne.png" alt="la marianne" id="lleft"/>
			  <img src="img/logo1.jpg" alt="text descriptive" id="lright" />
				<ul>
					<li class="copyright">Copyright Institut Fran�ais &copy; 2014</li>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="">lien 1</a></li>
					<li><a href="">lien 2</a></li>
					<li><a href="www.okt-s.com">Developers</a></li>
					<li><a href="www.institutfran�ais.com">institutfran�ais</a></li>
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