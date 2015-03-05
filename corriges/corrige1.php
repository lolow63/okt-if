<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/dinot.css">
		<link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/fa/font-awesome.css">
        <script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <div class="header">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 topheader">
                  <img src="../img/logoifa.jpg" alt="" class="toplogo">
                  <h2 class="toptitle">FORMATION DE FRANÇAIS EN LIGNE</h2>
                </div>
            </div>
    	<div class="container">
    	   <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mainnav">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="intro.php">INTRODUCTION</a></li>
                    <li><a href="construction.php">LIEN</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="construction.php">AIDE</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FICHES<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="fiche1.php">Fiche 1</a></li>
                            <li><a href="construction.php">Fiche 2</a></li>
                            <li><a href="construction.php">Fiche 3</a></li>
                            <li><a href="construction.php">Fiche 4</a></li>
							<li><a href="construction.php">Fiche 5</a></li>
							<li><a href="construction.php">Fiche 6</a></li>
							<li><a href="construction.php">Fiche 7</a></li>
							<li><a href="construction.php">Fiche 8</a></li>
							<li><a href="construction.php">Fiche 9</a></li>
							<li><a href="construction.php">Fiche 10</a></li>
							<li><a href="construction.php">Fiche 11</a></li>
							<li><a href="construction.php">Fiche 12</a></li>
							<li><a href="construction.php">Fiche 13</a></li>
							<li><a href="construction.php">Fiche 14</a></li>
							<li><a href="construction.php">Fiche 15</a></li>
							<li><a href="construction.php">Fiche 16</a></li>
							<li><a href="construction.php">Fiche 17</a></li>
							<li><a href="construction.php">Fiche 18</a></li>
							<li><a href="construction.php">Fiche 19</a></li>
							<li><a href="construction.php">Fiche 20</a></li>
							<li><a href="construction.php">Fiche 21</a></li>
							<li><a href="construction.php">Fiche 22</a></li>
							<li><a href="construction.php">Fiche 23</a></li>
							<li><a href="construction.php">Fiche 24</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            </nav>   
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
               <ul class="nav navbar-nav navbar-default navbar-right">
                           <li><a href="construction.php"><i class="fa fa-unlock-alt"></i> MON COMPTE</a></li>                     
                       </ul>
           </div>
        </div>
    </div>
   
     <div class="container">
	         <div class="well">
			  <h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°1</h2><br/>
					 <p>Félicitation ! Vous avez terminé votre première série d'activités.</p>
					 <p>Voici votre score :</p>	
					 
					 <div class="list-group-item">
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
						  if(isset($_POST['reponse'])){$repAZ = str_replace(',', '', $_POST['reponse']);} else{$repAZ='vous n\'avez pas repondu';}
						 
                          $notrap=0;$repp='faux';
						  
                       	  $note1=0;$rep1='faux';
                       	  $note2=0;$rep2='faux';
                       	  $note3=0;$rep3='faux'; $note4=0;$rep4='faux'; $note5=0;$rep5='faux'; $note6=0;$rep6='faux';
                       	  $note7=0;$note8=0; $rep7='faux'; $rep8='faux';
                       	  $tab1=0;$tab2=0;$tab3=0;$tab4=0;$tab5=0;$tab6=0;$tab7=0;$tab8=0;$tab9=0;
                       	  $reptab1='faux';$reptab2='faux';$reptab3='faux';$reptab4='faux';$reptab5='faux';$reptab6='faux';$reptab7='faux';$reptab8='faux';$reptab9='faux';
                       	   //activité1
						 if ($exped=='On ne sait pas'){$note1=$note1+50; $rep1='vrai';}else{ $note1; $rep1;}
                       	  if ($propos=='On lui fait une proposition commerciale'){$note2=$note2+50; $rep2='vrai';}else{ $note2; $rep2;}
                       	 $notea=$note1+$note2;
						 //activité2
						 $ok='false';
                        if($repAZ=='1234567'){$ok ='true' ;} else {$ok;}
                       	  $notea2=0; 
                       	  $noteex0=0;
						  $noteex1=0;
						  $noteex2=0;
						  $noteex3=0;
						  $noteex4=0;
						  $noteex5=0;
						  $noteex6=0;
						  
						  if($repAZ==''){$noteex0=16;}
						          if($repAZ[0]=='1'){$noteex0=16;}
								  if($repAZ[1]==($repAZ[0]+1)){$noteex1=14;}
								  if($repAZ[2]==($repAZ[1]+1)){$noteex2=14;}
								  if($repAZ[3]==($repAZ[2]+1)){$noteex3=14;}
								  if($repAZ[4]==($repAZ[3]+1)){$noteex4=14;}
								  if($repAZ[5]==($repAZ[4]+1)){$noteex5=14;}
								  if($repAZ[6]==($repAZ[5]+1)){$noteex6=14;}
								  $notegenerale=$noteex1+$noteex2+$noteex3+$noteex4+$noteex5+$noteex6+$noteex0;
						 
						 
						 
						 
						 
						 
						 //activité3
						 if ($formap=='Madame, Monsieur'){$note3=$note3+20; $rep3='vrai';}else{ $note3; $rep3;}
                       	 if ($rapel=='Je vous remercie par avance pour votre réponse'){$note4=$note4+20; $rep4='vrai';}else{ $note4; $rep4;}
                       	 if ($rapp=='Je vous remercie pour votre message'){$notrap=$notrap+20; $repp='vrai';}else{ $notrap; $repp;}
                       	 

                       	 if ($exprim=='Je serais, en effet, intéressé'){$note5=$note5+20; $rep5='vrai';}else{ $note5; $rep5;}
                         if ($cordialement=='Cordialement'){$note6=$note6+20; $rep6='vrai';}else{ $note6; $rep6;}
                       	 $noteb=$note3+$note4+$note5+$note6+$notrap;
                          //activité4
                       	 if ($avocat=='Maître'){$note7=$note7+50; $rep7='vrai';}else{ $note7; $rep7;}
                       	 if ($medcin=='Docteur'){$note8=$note8+50; $rep8='vrai';}else{ $note8; $rep8;}
						
                           $notemed=$note7+$note8;
						   //activité5

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
                         //$total=($notetab+$notea+$noteb+$notemed+$notea2)/5;
                           $total=($notea+$notegenerale+$noteb+$notemed+$notetab)/5;
                         
	echo'<table class="text-center table table-bordered table-striped table-condensed">';
	 echo'<tr>
	        <td class="activite" style="vertical-align:middle">Activité 1</td>
			<td>'.$notea.'%';
		        if(($notea >0) and ($notea<25)){
				echo'<div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notea.'%"></div>
                     </div>';}
				elseif(($notea >= 25) and ($notea<50)){
				echo'<div class="progress">
                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notea.'%"></div>
                     </div>';}	
                elseif(($notea >= 50) ){
				echo'<div class="progress">
                       <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notea.'%"></div>
                    </div>';}	  
	            else{
		        echo'<div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                      </div>';}	
	   echo'</td>
	    </tr>
		<tr>
            <td class="activite" style="vertical-align:middle">Activité 2</td>
				<td>'.$notegenerale.'%';
				    if(($notegenerale >0) and ($notegenerale<25)){
					echo'<div class="progress">
                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notegenerale.'%"></div>
                        </div>';}
				    elseif(($notegenerale >= 25) and ($notegenerale<50)){
					echo'<div class="progress">
                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notegenerale.'%"></div>
                         </div>';}	
                     elseif(($notegenerale >= 50) ){
					echo'<div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notegenerale.'%"></div>
                         </div>';}	  
	                else{
				    echo'<div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                       </div>';}
		echo'</td>
	    </tr>
		<tr>
		    <td class="activite" style="vertical-align:middle">Activité 3</td>
		    <td>'.$noteb.'%';
				  if(($noteb >0) and ($noteb<25)){
				echo'<div class="progress">
                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$noteb.'%"></div>
                     </div>';}
				elseif(($noteb >= 25) and ($noteb<50)){
				echo'<div class="progress">
                         <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$noteb.'%"></div>
                     </div>';}	
                 elseif(($noteb >= 50) ){
				 echo'<div class="progress">
                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$noteb.'%"></div>
                      </div>';}	  
	             else{
		         echo'<div class="progress">
                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                      </div>';}
	  echo'</td>
		</tr>
		<tr>
			<td class="activite" style="vertical-align:middle">Activité 4</td>
			<td>'.$notemed.'%';
			     if(($notemed >0) and ($notemed<25)){
				echo'<div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notemed.'%"></div>
      </div>';}
				elseif(($notemed >= 25) and ($notemed<50)){
				echo'<div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notemed.'%"></div>
                    </div>';}	
                elseif(($notemed >= 50) ){
				echo'<div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notemed.'%"></div>
                    </div>';}	  
	            else{
				echo'<div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    </div>';}
	echo'</td>
	</tr>
	<tr>
	    <td class="activite" style="vertical-align:middle">Activité 5</td>
			<td>'.$notetab.'%';
			    if(($notetab >0) and ($notetab<25)){
				echo'<div class="progress">
                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notetab.'%"></div>
                     </div>';}
				elseif(($notetab >= 25) and ($notetab<50)){
				echo'<div class="progress">
                         <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notetab.'%"></div>
                     </div>';}	
                 elseif(($notetab >= 50) and ($notetab<=100)){
				echo'<div class="progress">
                           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '.$notetab.'%"></div>
                     </div>';}	  
	             else{
				echo'<div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    </div>';}
	echo'</td>
    </tr>
<tfoot>
	 <tr>
	 <td class="activite" style="vertical-align:middle"><strong>Total Fiche N°1</strong></td>
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
								 //activité1

						  echo'<p>Voyons maintenant vos réponses plus en détail :</p>
                             <h3 class="activite">Activité 1 ('.$notea.'%)</h3>
							 <div class="list-group-item">
                             <h3>Question 1</h3>
							 
                            <p>À la question « Qui est l\'expéditeur de ce courrier électronique aussi appelé courriel?»,vous avez répondu :</p>';
                           
                           if($rep1=='vrai'){echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$exped.': </strong>C\'est la bonne réponse !</p>';} else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$exped.':</strong></p> <p>La bonne réponse est : « On ne sait pas »';}
                            echo'</p>';
                            echo'<p class="remarque">En effet, le courriel est signé « Service commercial VEH ». Il s\'agit d\'une entité et non d\'une personne particulière. Nous verrons par la suite comment répondre à ce type d\'expéditeur.</p>';

                           echo'<h3> Question 2</h3>
                           <p>À la question « Que propose-t-on à Mohammed RAÏS ? », vous avez répondu :</p>';
                           
                           if($rep2=='vrai'){echo ' <p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$propos.' </strong> : C\'est la bonne réponse !';} else{echo' <p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$propos.'</strong></p><p>La bonne réponse est : « on lui fait une proposition commerciale »';}
                          echo'</p>';
                         echo'<p class="remarque"> Il s\'agit ici de remises dans le cadre d\'une opération promotionnelle à durée limitée (le mois). La condition pour en bénéficier étant de répondre à l\'offre avant le 30 mars.</p>';
						 echo'</div>';
						 
                           //activité2
						   //on declare les lignes:
						          $ligne1='<ol class="phrases vertical encours"><li value="1"><strong>Objet</strong> : Offre commerciale</li></ol>';
								  $ligne2='<ol class="phrases vertical encours"><li value="2"><strong>Formule d’appel</strong> : Bonjour</li></ol>';
								  $ligne3='<ol class="phrases vertical encours"><li value="3"><strong>Rappel du contexte</strong> : Faisant suite à...</li></ol>';
								  $ligne4='<ol class="phrases vertical encours"><li value="4"><strong>Développement</strong> : Votre conseiller commercial aura le privilège de...</li></ol>';
								  $ligne5='<ol class="phrases vertical encours"><li value="5"><strong>Remerciement</strong> : Nous vous remercions pour...</li></ol>';
                                  $ligne6='<ol class="phrases vertical encours"><li value="6"><strong>Salutations</strong> : Cordialement</li></ol>';
					              $ligne7='<ol class="phrases vertical encours"><li value="7"><strong>Signature</strong> : Service commercial</li></ol>'; 
						   ?>
						   <?php echo' <h3 class="activite">Activité 2 ('.$notegenerale.'%)</h3>';
							if($ok =='true'){
							     echo'<div class="col-md-12 list-group-item ">';
								  echo $ligne1;
								  echo $ligne2;
								  echo $ligne3;
								  echo $ligne4;
								  echo $ligne5;
								  echo $ligne6;
								  echo $ligne7;
							  echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">C\'est correct !</strong></p>';
							  echo' <p class="remarque">Retenez bien cet ordre d\'étapes, dans la plupart des cas les courriels sont organisés de cette façon.</p></div><br/>';
							  }
					elseif($repAZ=='pas de reponse') {
					echo'<div class="col-md-12 list-group-item ">';
					echo '<span class="fa fa-2x fa-close"></span><strong class="mauvrep">pas de reponse</strong>';
					echo '<p>Voici le bon ordre</p>';
					echo $ligne1;
								  echo $ligne2;
								  echo $ligne3;
								  echo $ligne4;
								  echo $ligne5;
								  echo $ligne6;
								  echo $ligne7;		
                    echo' <p class="remarque">Retenez bien cet ordre d\'étapes, dans la plupart des cas les courriels sont organisés de cette façon.</p></div><br/>';								  
					}	else{
					 echo'<div class="col-md-12 list-group-item">';
                     echo'<div class="col-md-6">';
					 echo'<p>Vous avez répondu :</p>';
                     //ligne1 
                                  if($repAZ[0]==1) {echo $ligne1;}
								  elseif($repAZ[0]==2) {echo $ligne2;}
								  elseif($repAZ[0]==3) {echo $ligne3;}
								  elseif($repAZ[0]==4) {echo $ligne4;}
								  elseif($repAZ[0]==5) {echo $ligne5;}
								  elseif($repAZ[0]==6) {echo $ligne6;}
								  elseif($repAZ[0]==7) {echo $ligne7;}
								  //ligne2
								   if($repAZ[1]==1) {echo $ligne1;}
								  elseif($repAZ[1]==2) {echo $ligne2;}
								  elseif($repAZ[1]==3) {echo $ligne3;}
								  elseif($repAZ[1]==4) {echo $ligne4;}
								  elseif($repAZ[1]==5) {echo $ligne5;}
								  elseif($repAZ[1]==6) {echo $ligne6;}
								  elseif($repAZ[1]==7) {echo $ligne7;}
								   //ligne3
								   if($repAZ[2]==1) {echo $ligne1;}
								  elseif($repAZ[2]==2) {echo $ligne2;}
								  elseif($repAZ[2]==3) {echo $ligne3;}
								  elseif($repAZ[2]==4) {echo $ligne4;}
								  elseif($repAZ[2]==5) {echo $ligne5;}
								  elseif($repAZ[2]==6) {echo $ligne6;}
								  elseif($repAZ[2]==7) {echo $ligne7;}
								  //ligne4
								   if($repAZ[3]==1) {echo $ligne1;}
								  elseif($repAZ[3]==2) {echo $ligne2;}
								  elseif($repAZ[3]==3) {echo $ligne3;}
								  elseif($repAZ[3]==4) {echo $ligne4;}
								  elseif($repAZ[3]==5) {echo $ligne5;}
								  elseif($repAZ[3]==6) {echo $ligne6;}
								  elseif($repAZ[3]==7) {echo $ligne7;}
								  //ligne5
								   if($repAZ[4]==1) {echo $ligne1;}
								  elseif($repAZ[4]==2) {echo $ligne2;}
								  elseif($repAZ[4]==3) {echo $ligne3;}
								  elseif($repAZ[4]==4) {echo $ligne4;}
								  elseif($repAZ[4]==5) {echo $ligne5;}
								  elseif($repAZ[4]==6) {echo $ligne6;}
								  elseif($repAZ[4]==7) {echo $ligne7;}
								  //ligne6
								   if($repAZ[5]==1) {echo $ligne1;}
								  elseif($repAZ[5]==2) {echo $ligne2;}
								  elseif($repAZ[5]==3) {echo $ligne3;}
								  elseif($repAZ[5]==4) {echo $ligne4;}
								  elseif($repAZ[5]==5) {echo $ligne5;}
								  elseif($repAZ[5]==6) {echo $ligne6;}
								  elseif($repAZ[5]==7) {echo $ligne7;}
								  //ligne7
								   if($repAZ[6]==1) {echo $ligne1;}
								  elseif($repAZ[6]==2) {echo $ligne2;}
								  elseif($repAZ[6]==3) {echo $ligne3;}
								  elseif($repAZ[6]==4) {echo $ligne4;}
								  elseif($repAZ[6]==5) {echo $ligne5;}
								  elseif($repAZ[6]==6) {echo $ligne6;}
								  elseif($repAZ[6]==7) {echo $ligne7;}					 
                                 echo'</div>';
								 echo'<div class="col-md-6">';
								echo' <p><span class="fa fa-close"></span> <strong class="mauvrep">Hum, ce n\'est pas tout à fait ça...</strong></p>';
								 echo $ligne1;
								  echo $ligne2;
								  echo $ligne3;
								  echo $ligne4;
								  echo $ligne5;
								  echo $ligne6;
								  echo $ligne7;
								  
								  echo'</div>';
								  echo'<p class="remarque">Retenez bien cet ordre d\'étapes, dans la plupart des cas les courriels sont organisés de cette façon.</p></div><br/>';
								  }
						   
							
						  
                         
                             
                          ?>
						  <!--activité3-->
						  
                          <?php
                          echo'<h3 class="activite">Activité 3('.$noteb.'%)</h3>
						  <div class="list-group-item">';
                          echo' <p>La formule d\'appel :</p>
                                <p>Pour vous adresser à votre destinataire, vous avez utilisé cette formule : </p>';
						
                                
                          if($rep3=='vrai'){echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$formap.' : </strong>C\'est bien cela ! </p>';} else{echo'  <p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$formap.' </strong></p>   <p> Il fallait plutôt écrire : « Madame, Monsieur ».</p> ';}
                          echo'<p class="remarque">Comme nous l\'avons dit plus haut, nous nous adressons au service commercial, nous ne traitons  pas directement avec un individu. Dans ce genre de situation, il faut utiliser une formule d\'appel neutre.</p>
                          <p class="remarque">Si nous avions eu en signature du courriel :<br/> « Cordialement <br/>M. AYADI Hicham<br/> Service commercial VEH »</p>
                          <p class="remarque">alors nous aurions été en présence d\'un interlocuteur précis. Nous aurions répondu par la formule « Monsieur ».</p>
                          <p class="remarque">À noter : il est fréquent de passer au cours d\'un échange de courriels d\'un destinataire indéfini à un interlocuteur privilégié. Il s\'agira donc d\'adapter les formules d\'appel durant ces échanges.</p><br/>';

                          echo'<p>Rappel du contexte :</p>
                          <p class="remarque">La première phrase d\'un courriel sert à se replacer dans l\'historique des échanges. Ici, Mohammed exprime une double idée : il a bien reçu le courriel de son interlocuteur et il l\'en remercie.</p>';

                          

                          if($repp=='vrai'){echo ' <p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$rapp.' : </strong> <strong>Parfait !</strong>  </p>';}else{echo'  <p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rapp.'</strong></p><p>La formule la plus correcte est « Je vous remercie pour votre message » </p> ';}

                          echo'<p class="remarque">Nous verrons dans la prochaine fiche une manière plus élégante de rappeler le contexte.</p>';
                          echo'<p>Développement :</p>
                          <p class="remarque">Mohammed exprime SON intérêt. Il répond donc positivement à la sollicitation de son interlocuteur.</p>
                          <p>Vous avez répondu : </p>';

                         
                         if($rep5=='vrai'){echo ' <p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$exprim.' : </strong> C\'est la bonne réponse !</p>';}else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$exprim.'</strong></p><p> La formule la plus correcte est « Je serais, en effet, intéressé » </p> ';}

                         echo'<p>Remerciements :</p>
                         <p class="remarque">On signale ici que l\'on souhaite obtenir une réponse. On l\'exprime alors de façon courtoise.</p>
                         <p>Vous avez répondu :</p>';
                        

                         if($rapel=='Merci beaucoup de me répondre'){echo '<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas approprié à cet échange. </p>
                         <p class="remarque">De plus il serait plus correct d\'écrire « Merci de me répondre ». On exprime par une formule sèche une pointe d\'agacement, par exemple dans le cas où un premier échange n\'aurait pas donné de suite.</p>
                         <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule :<strong class="bonrep" Je vous remercie par avance pour votre réponse .</strong></p>';} 

                          elseif($rapel=='C\'est possible ? Merci'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct !</p>
                          <p class="remarque">Cette formulation est de l\'ordre de l\'oral, et ne doit pas être utilisée à l\'écrit lors d\'un échange professionnel.</p>
                          <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule :<strong class="bonrep">Je vous remercie par avance pour votre réponse .</strong></p>';}

                          elseif($rapel=='Répondez moi vite s\'il vous plaît'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$rapel.'. </strong> Ce n\'est pas correct ! </p>
                           <p class="remarque">Ici, cette formule donne un ton suppliant à votre demande. Il faut garder une attitude raisonnée sinon gare aux négociations !</p>
                           <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : Je vous remercie par avance pour votre réponse .</p>';}
                           elseif($rapel=='Je vous remercie par avance pour votre réponse'){echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$rapel.'. </strong> parfait !</p>';}

                           else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas répondu</strong></p>
                          <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : Je vous remercie par avance pour votre réponse .</p>';}

                          echo'<p>Salutations :</p>
                               <p>Vous avez répondu :</p>';
                               
                               if($cordialement=='Aimablement'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$cordialement.' . </strong> Ce n\'est pas correct !</p>
                             <p class="remarque">Utiliser cette formule implique que vous entretenez déjà des rapports amicaux avec cette personne.</p>
                             <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : <strong class="bonrep">« Cordialement »</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport d\'égalité.</p>';}

                             elseif($cordialement=='A bientôt'){echo' <p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$cordialement.' . </strong>Ce n\'est pas approprié !</p>
                             <p class="remarque">Nous utiliserons cette formule dans le cadre de relations privées ou dans l\'échange de courriels avec un collègue de travail avec lequel on entretient des rapports de sympathie.</p>
                              <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : <strongclass="bonrep">« Cordialement »</strong></p>
                             <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport équivalent</p>';}

                             elseif($cordialement=='Cordialement'){echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$cordialement.' . </strong><p>Parfait!</p>';}
                             else{echo'<p><strong class="mauvrep">vous n\'avez pas répondu</strong></p>
                             <p class="remarque">Ici, il serait plus à propos d\'utiliser cette formule : « Cordialement »</p>
                              <p class="remarque">En effet, c\'est la formule utilisée initialement par votre correspondant, cela vous place dans un rapport équivalent</p>';}
                              ?>
							  </div>
							  
							  
                                 <!--activité4--><?php
								 
                                 echo'<h3 class="activite">Activité 4('.$notemed.'%)</h3>
								 
							<div class="list-group-item col-lg-12">

                                   <p>À la question « Comment vous adressez-vous à un avocat ? », vous avez répondu : </p>';
                                   
                             if($avocat=='Bonjour Maître'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$avocat.' </strong> Ce n\'est pas correct de s\'adresser à son avocat en ces termes. "Bonjour" sera utilisé avec des personnes plus familières.</p>
                            <p>Préférez cette formulation : <strong class="bonrep">« Maître»</strong></p>
                            <p class="remarque">En effet, ce terme sera utilisé pour toutes correspondances avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soi-même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                             elseif($avocat=='Cher avocat'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$avocat. ' </strong> Ce n\'est pas correct !</p>
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
                             <p class="remarque">Si l\'on est soi-même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                             elseif ($avocat=='Monsieur l\'avocat'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$avocat. ' </strong> Ce n\'est pas correct !</p>
                              <p class="remarque">On ne s\'adresse pas à un avocat par le nom de sa profession. C\'est un cas particulier pour lequel on emploiera le terme de « Maître ».</p>
                            <p>La bonne réponse est donc :</p>
                            <p><strong class="bonrep">« Maître »</strong></p> 
                            <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p class="remarque">Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soi-même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »';}
                             elseif ($avocat=='Maître'){echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$avocat.  ' </strong>C\'est la bonne réponse !</p>
                             <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soit même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}
                             else{echo '<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez répondu</strong> il fallait répondre par « Maître » 
                             <p class="remarque">En effet, ce terme sera utilisé pour toute correspondance avec un auxiliaire de justice ( avocat, huissier, avoué, notaire...).</p>
                            <p>Quelques remarques :</p>
                            <p class="remarque">Lorsqu\'il s\'agit d\'une avocate, on utilise le masculin soit « Maître », et non « Maîtresse ».</p>
                            <p class="remarque">Lorsqu\'on s\'adresse à plusieurs avocats, on utilisera « Messieurs les avocats ».</p>
                             <p class="remarque">Si l\'on est soi-même avocat, on utilisera le terme de « Confrère ».</p>
                             <p class="remarque">Si l\'on s\'adresse à un avocat en dehors de l\'exercice de ses fonctions, on utilisera « Monsieur » ou « Madame »</p>';}

                              echo'<p>À la question « Comment vous adressez-vous à un médecin ? », vous avez répondu : </p>';
                                   
                            if ($medcin=='Professeur'){echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$medcin. ' </strong> Réponse acceptée</p> <p class="remarque"> Mais attention ! Tout les médecins ne sont pas professeurs. Il faut pour cela qu\'il soit chef de service et/ou enseignant à la faculté de médecine. Si vous ignorez cette information,utilisez plutôt le terme « Docteur ».</p>
                              <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p><p></p>';}

                          elseif($medcin=='Maître'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$medcin. ' </strong> Cette formule n\'est pas appropriée lorsque l\'on s\'adresse à un médecin.</p>
                       <p class="remarque">Utilisez plutôt « Docteur » si vous ne connaissez pas la formation de ce dernier.</p>
                           <p class="remarque">Utilisez« Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant àla faculté de médecine.</p> 
                          <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

                          elseif($medcin=='Docteur'){echo'<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$medcin. ' </strong> C\'est la bonne réponse !</p>
	                      <p class="remarque">Utilisez « Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant à la faculté de médecine.</p>
	                      <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}

	                      else{echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas répondu</strong>, il fallait répondre par« Docteur »</p>
	                      <p class="remarque">Utilisez « Professeur » si celui-ci est professeur de médecine, c\'est à dire chef de service et/ou enseignant à la faculté de médecine.</p>
	                      <p class="remarque">A noter : on confond souvent deux « docteurs ». Celui qui soigne les malades, et celui qui a obtenu un doctorat lors de ses études. On peut ainsi être docteur (es lettres, en informatique...) et ne pas savoir faire de points de suture !</p>';}
							?></div>
                              <!--activité5-->
							  
						<?php
							  
	                      echo'<h3 class="activite">Activité 5('.$notetab.'%)</h3>';
	                      echo'<p>Revoyons votre tableau :<p>
						   <div class="well well-lg"><!--debut-->';
						  
						       if($sentim=='À un proche'){
								echo'
								     <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Salutations respectueuses</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sentim1" class="form-control" style="background:#D2204C">À un ami </label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="sentim2" class=" form-control">À un profes<wbr>sionnel</label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                   <span class="input-group-addon">
                                        
                                    </span><label for="sentim3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								   elseif($sentim=='À des professionnels'){
								echo'
								     <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Salutations respectueuses</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sentim1" class="form-control" >À un ami </label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="sentim2" class=" form-control" style="background:#D2204C">À un profes<wbr>sionnel</label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                   <span class="input-group-addon">
                                        
                                    </span><label for="sentim3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								 elseif($sentim=='À une personnalité'){
								echo'
								     <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Salutations respectueuses</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sentim1" class="form-control" >À un ami </label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="sentim2" class=" form-control">À un profes<wbr>sionnel</label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                   <span class="input-group-addon">
                                        
                                    </span><label for="sentim3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								else {echo'
								     <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Salutations respectueuses</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sentim1" class="form-control" >À un ami </label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="sentim2" class=" form-control">À un profes<wbr>sionnel</label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                   <span class="input-group-addon">
                                        
                                    </span><label for="sentim3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}							
								//fin de premeir teste				   
						          if($cord=='À un proche'){
								  echo'
								  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordialement</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cord1" class="form-control" style="background:#D2204C" >À un ami </label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="cord2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                    <span class="input-group-addon"></span>          
                                    <label for="cord3" class=" form-control">À un supérieur hiérarchique </label></div></div>
								    </div><br/>';}
									elseif($cord=='À des professionnels'){
								  echo'
								  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordialement</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cord1" class="form-control">À un ami </label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="cord2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                    <span class="input-group-addon"></span>          
                                    <label for="cord3" class=" form-control">À un supérieur hiérarchique </label></div></div>
								    </div><br/>';}
									elseif($cord=='À une personnalité'){
								  echo'
								  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordialement</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cord1" class="form-control">À un ami </label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="cord2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                    <span class="input-group-addon"></span>          
                                    <label for="cord3" class=" form-control"style="background:#D2204C" >À un supérieur hiérarchique </label></div></div>
								    </div><br/>';}
									else{
								  echo'
								  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordialement</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cord1" class="form-control" >À un ami </label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="cord2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                    <span class="input-group-addon"></span>          
                                    <label for="cord3" class=" form-control">À un supérieur hiérarchique </label></div></div>
								    </div><br/>';}
									//fin desieme teste
									if($alap=='À un proche'){
									echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À la prochaine !</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="alap1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="alap2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="alap3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								elseif($alap=='À des professionnels'){
									echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À la prochaine !</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="alap1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="alap2" class=" form-control" style="background:#D2204C">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="alap3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								elseif($alap=='À une personnalité'){
									echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À la prochaine !</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="alap1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="alap2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="alap3" class=" form-control" style="background:#D2204C">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								else{
									echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À la prochaine !</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="alap1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="alap2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="alap3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
						     //fin troisieme teste
							 if($cors=='À un proche'){
							 echo'
							  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordiales salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cors1" class="form-control" style="background:#D2204C">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								 elseif($cors=='À des professionnels'){
							 echo'
							  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordiales salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cors1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors2" class=" form-control"  style="background:#D2204C">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								 elseif($cors=='À une personnalité'){
							 echo'
							  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordiales salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cors1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								 else{
							 echo'
							  <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordiales salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="cors1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="cors3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}// fin du quatriem teste
								if($resp=='À un proche'){
							        echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Respectueuse considération</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="resp1" class="form-control" style="background:#D2204C">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="resp2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="resp3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								if($resp=='À des professionnels'){
							        echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Respectueuse considération</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="resp1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="resp2" class=" form-control" style="background:#D2204C">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="resp3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								else{
							        echo'
									<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Respectueuse considération</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="resp1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="resp2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="resp3" class=" form-control" style="background:#BAC900">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}// fin sisieme teste
								if($ss=='À un proche'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Sincères salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										 
                                    </span><label for="ss1" class="form-control" style="background:#D2204C">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss3" class=" form-control" >À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								elseif($ss=='À des professionnels'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Sincères salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										 
                                    </span><label for="ss1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss3" class=" form-control" >À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
							 elseif($ss=='À une personnalité'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Sincères salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										 
                                    </span><label for="ss1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss3" class=" form-control" style="background:#D2204C" >À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
							else{
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Sincères salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										 
                                    </span><label for="ss1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="ss3" class=" form-control" >À un supérieur hiérarchique</label></div></div>
								</div><br/>';}//fin 7eme teste
								 if($sd=='À un proche'){
								 echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Salutations distinguées</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sd1" class="form-control" style="background:#D2204C">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								elseif($sd=='À des professionnels'){
								 echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Salutations distinguées</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sd1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								elseif($sd=='À une personnalité'){
								 echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Salutations distinguées</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sd1" class="form-control" >À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd3" class=" form-control" style="background:#D2204C">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}
								else{
								 echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Salutations distinguées</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="sd1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd2" class=" form-control" style="background:#BAC900">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                       
                                    </span><label for="sd3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/>';}//7eme
								if($bs=='À un proche'){
								echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Bises</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="bs1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								elseif($bs=='À une personnalité'){
								echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Bises</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="bs1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs2" class=" form-control" style="background:#D2204C">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								elseif($bs=='À une personnalité'){
								echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Bises</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="bs1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs3" class=" form-control" style="background:#D2204C">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								else{
								echo'
								 <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Bises</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="bs1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="bs3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}//8eme
								if($a=='À un proche'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À +</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="a1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								elseif($a=='À des professionnels'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À +</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="a1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a2" class=" form-control" style="background:#D2204C">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								elseif($a=='À une personnalité'){
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À +</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="a1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a3" class=" form-control" style="background:#D2204C">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								else{
								echo'
								<div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À +</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										
                                    </span><label for="a1" class="form-control" style="background:#BAC900">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        
                                    </span><label for="a3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div><br/> ';}
								
						  echo' </div><!--fin exo-->';
						  
                               
                                 



                               
                               	
                                
							   

                  if($notetab==100){echo'<p><strong class="bonrep">C\'est bien cela !</strong></p>';}
                  elseif($notetab==0){echo'<p><strong class="mauvrep">Vous n\'avez pas répondu.</strong></p>';} 
                  else{echo'<p><strong class="mauvrep">Ce n\'est pas tout à fait correct.</strong></p>
                            ';}
				
				echo'<p class="remarque">Il est important de choisir le bon vocabulaire en fonction du statut du destinataire. Ces mots de vocabulaire sont classés dans différents registres de langue : familier, courant ou soutenu. On dit également que l\'on s\'adresse à l\'interlocuteur de manière informelle ( c\'est le langage familier),formelle (c\'est le langage courant) ou très formelle (ou encore de manière protocolaire,   c\'est le langage soutenu).</p>';
					}	  
                ?>
				</div>
				<!--SNIPET MODAL JAVASCRIPT-->
	 
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
							<p class="resume">- Lors de la réception d'un courriel, la première étape est de repérer l'expéditeur et l'objet du message.</p>
							<p class="resume">- Il est important de respecter une organisation dans la rédaction d'un courriel : objet, formule d'appel,
							rappel du contexte, développement, remerciements, salutations, signature.</p>
							<p class="resume">-Les formules utilisées dans le courriel doivent tenir compte de la nature de l'expéditeur
							( un service, un homme, une femme, une catégorie de professionnels) ainsi que du type de relation qui vous lie 
							avec ce dernier ( ami, collègue, client, subalterne, supérieur hiérarchique...)</p>
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
					 
					 
             </div><!-- fin de container courigé -->
                
                
     </div><!--fin de container-->
     <hr>
     <footer>
        <div class="container bottombar">
            <div class="col-xs-12 col-sm2 col-md-1 col-lg-1 marianne">
                <img src="../img/marianne.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
                <span class="copyrights"><strong>© Institut Français 2014 - Tous droits réservés 2014.</strong> L'Institut Français est l'opérateur du ministère des Affaires étrangères et européennes pour l'action culturelle extérieure de la France.
                </span><br>
                <span><a href="index.php">ACCUEIL</a>
                    <a href="http://www.if-algerie.com" target="blank">SITE OFFICIEL DE L'INSTITUT FRANÇAIS ALGÉRIE</a>
                    <a href="construction.php">TERMES ET CONDITIONS D'UTILISATION</a>
                    <a href="construction.php">PLAN DU SITE</a>
                    <a href="construction.php">AUTRE</a>
                </span>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                <img src="../img/logoifa2.jpg" alt="" class="logobott">
            </div>
        </div>
    </footer>
    </body>
</html>