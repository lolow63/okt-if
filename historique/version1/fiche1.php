<?php
include('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>INstitut Français</title>

		<link href="inc/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="inc/css/style.css" rel="stylesheet" type="text/css" />
		<link href="inc/css/menu.css" rel="stylesheet" type="text/css" />
		<!--! les js pour le menu adroite-->
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
			<div id="seul"><a href="index.php" >Acceuil</a></div>
				<div class="main">
                    
			<ul class="menu">
				<li class="item1"><a href="fiche1.php" class="">Débuter la formation</a>
					<ul style="display: none;">
						<li class="subitem1"><a href="intro.php">Introduction</a></li>						
						<li class="subitem3"><a href="fiche1.php">Fiche 1</a></li>
						<li class="subitem3"><a href="#">Fiche 2</a></li>
						<li class="subitem3"><a href="#">Fiche 3</a></li>
						<li class="subitem3"><a href="#">Fiche 4</a></li>
						<li class="subitem3"><a href="#">Fiche 5</a></li>
						<li class="subitem3"><a href="#">Fiche 6</a></li>
						<li class="subitem3"><a href="#">Fiche 7</a></li>
						<li class="subitem3"><a href="#">Fiche 8</a></li>
						<li class="subitem3"><a href="#">Fiche 9</a></li>
						<li class="subitem3"><a href="#">Fiche 10</a></li>
						<li class="subitem3"><a href="#">Fiche 11</a></li>
						<li class="subitem3"><a href="#">Fiche 12</a></li>
						<li class="subitem3"><a href="#">Fiche 13</a></li>
						<li class="subitem3"><a href="#">Fiche 14</a></li>
						<li class="subitem3"><a href="#">Fiche 15</a></li>
						<li class="subitem3"><a href="#">Fiche 16</a></li>
						<li class="subitem3"><a href="#">Fiche 17</a></li>
						<li class="subitem3"><a href="#">Fiche 18</a></li>
						<li class="subitem3"><a href="#">Fiche 19</a></li>
						<li class="subitem3"><a href="#">Fiche 20</a></li>
						<li class="subitem3"><a href="#">Fiche 21</a></li>
						<li class="subitem3"><a href="#">Fiche 22</a></li>
						<li class="subitem3"><a href="#">Fiche 23</a></li>
						<li class="subitem3"><a href="#">Fiche 24</a></li>

					</ul>
				</li>
			</ul>
			<div id="seul"><a href="index.php" >Lien1</a></div>
			<div id="seul"><a href="index.php" >Lien2</a></div>
			<div id="seul"><a href="index.php" >Lien3</a></div>
			<div id="seul"><a href="index.php" >Lien4</a></div>
		</div>
<?php
//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
if(isset($_SESSION['username']))
{
?>
 
<p><a href="connexion.php">Se d&eacute;connecter</a></p>
<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
<p><a href="sign_up.php">Inscription</a></p>
<p><a href="connexion.php">Se connecter</a></p>
<?php
}
?>
		      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet elit vitae arcu interdum ullamcorper. Nullam ultrices</p>
			<img src="img/marianne.png" alt="la marianne"/>
			  <p>Lorem ipsum dolor sit amet</p>
			  <p>Lorem ipsum dolor sit amet</p>
			</div> <!-- sidebar_container -->
			
			<div id="content_container">
			    
			
				<h1>RÉDIGER DES COURRIELS PROFESSIONNELS</h1>
				<h3><?php if(isset($_SESSION['username'])){echo 'BONJOUR '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?></h3>
                        <h2>FICHE N°1</h2>
                        <p class="recoi">Mohammed RAÏS reçoit le message suivant:</p>
                        <img src="img/Capture2.PNG" alt="message reçu" />
				   <form id="form" method="POST" action="courige1.php">
                        <h3 class="activite">Activité 1</h3>
                          <p><i>Cochez la bonne réponse</i></p>
                          <div id="exo">
                          <p>a. Qui est l'expéditeur de ce courrier électronique aussi appelé courriel ?</p>
                          
	                                
	                                <label><input type="radio" style='visibility:hidden;display:none' name="exped" value="Vous n'avez pas répondu"  checked="checked"/></label><br/>
	                                <label><input name="exped" value="Un homme" type='radio'/>Un homme</label><br/>
                                    <label><input type="radio" name="exped" value="Une femme" />Une femme</label><br/>
                                    <label><input type="radio" name="exped" value="On ne sait pas"/>On ne sait pas</label><br />
                                        
                                 </br>
                           <p>b. Que propose-t-on à Mohammed RAÏS ?</p>
                                    <label><input type="radio" style='visibility:hidden;display:none' name="propos" value="Vous n'avez pas répondu"  checked="checked"/></label><br/>
                                    <label><input type="radio" name="propos" value="on lui propose une brochure" />on lui propose une brochure</label><br/>
                                    <label><input type="radio" name="propos" value="on lui fait une proposition commerciale" />on lui fait une proposition commerciale</label><br/>
                                    <label><input type="radio" name="propos" value="on lui indique qu'un conseiller commercial va le contacter"/>on lui indique qu'un conseiller commercial va le contacter</label><br />
                                        
                                 </br>

                          </div><!--fin exo-->
                          <h3 class="activite">Activité 2</h3>
                          <p>De quoi est composé un courriel ?</p>
                         <div id="exo"> <i>Non disponible pour le momment</i></div></br><!--fin exo-->
                         <p class="recoi"> Mohammed RAÏS répond</p>
                         <h3 class="activite">Activité 3</h3>
                         <div id="exo"><p>De :Mohammed RAÏS (med.raïs@gmail.com)</p>
                                   <p>Envoyé :lun. 16/03/14 à 09h41</p>
                                   <p>A :service.commercial@veh.dz</p>
                                   <p>Objet : Re : offre commerciale</p>
                                   <p>Formule d’appel : <select name="formap">
								                        <option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Madame, Monsieur">Madame, Monsieur</option>
        	                                            <option VALUE="Salut">Salut</option>     	                                            
		                                                <option VALUE="Monsieur">Monsieur</option>
		                                                <option VALUE="Monsieur, Madame">Monsieur, Madame</option>
		                                              </select></p>
		                            <p><select name="rapp">
								                        <option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Je vous remercie pour votre message">Je vous remercie pour votre message</option>
        	                                            <option VALUE="Merci pour votre message">Merci pour votre message</option>     	                                            
		                                                <option VALUE="Merci beaucoup">Merci beaucoup</option>
		                                                <option VALUE="Bien reçu, merci">Bien reçu, merci</option>
		                                              </select></p>
		                           
		                           <p>Développement : Mohammed exprime son intérêt</p>
		                           <p> <select name="exprim">
								                        <option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Oui, c’est intéressant">Oui, c’est intéressant</option>
        	                                            <option VALUE="Ça m’intéresse">Ça m’intéresse</option>
		                                                <option VALUE="Je serais, en effet, intéressé">Je serais, en effet, intéressé</option>
		                                                <option VALUE="En effet, c’est intéressant">En effet, c’est intéressant</option>
		                                                <option VALUE="Cela a l’air très intéressant">Cela a l’air très intéressant</option>
		                                              </select> d’acquérir un véhicule de votre marque en bénéficiant des remises annoncées.</p>
													  <p>Cependant, je souhaiterais savoir dans quelle mesure je serais susceptible de pouvoir bénéficier d’un prêt bancaire auprès de votre compagnie.</p>
													  <P>Remerciment : <select name="rapel">
								                  <option VALUE="vous n'avez pas répondu"> </option>
		                                         <option VALUE="Je vous remercie par avance pour votre réponse">Je vous remercie par avance pour votre réponse</option>
        	                                     <option VALUE="Merci beaucoup de me répondre">Merci beaucoup de me répondre</option>
		                                                <option VALUE="C'est possible ? Merci">C'est possible ? Merci</option>
		                                                <option VALUE="Répondez moi vite s'il vous plaît">Répondez moi vite s'il vous plaît</option>
		                                              </select></p> 
		                                              <p><select name="cordialement">
		                                                <option VALUE="vous n'avez pas répondu"></option>
        	                                            <option VALUE="Cordialement">Cordialement</option>
		                                                <option VALUE="Aimablement">Aimablement</option>
		                                                <option VALUE="A bientôt"> A bientôt</option>
		                                                
		                                              </select></p>
													  <p> Mohammed Raïs   </p>
		                           </div><!--fin exo-->
                                 <h2>Aller plus loin</h2>
                                 <h3 class="activite">Activité 4</h3>
                                 <div id="exo">
                                 <p> Comment vous adressez-vous à :</p>
                                     <p>- un avocat :<select name="avocat">
                                                        <option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Bonjour Maître">Bonjour Maître</option>
        	                                            <option VALUE=" Cher avocat "> Cher avocat </option>
		                                                <option VALUE="Monsieur l'avocat">Monsieur l'avocat</option>
		                                                <option VALUE="Maître">Maître</option>
		                                              </select></p></br>
		                               <p>-un médecin :<select name="medcin">
		                                                <option VALUE="vous n'avez pas répondu"> </option>                                
        	                                            <option VALUE="Professeur">Professeur</option>
		                                                <option VALUE="Maître">Maître</option>
		                                                <option VALUE="Docteur">Docteur</option>
		                                              </select></p>               

                                 </div><!--fin exo-->
                                <h3 class="activite">Activité 5</h3>
                               
                                    <div id="exo">
                         
                                <p><i>cochez la bonne case dans le tableaux suivant</i></p>
                                        
                                 

                          

                                <table>
                                 <tr>
                                    <td class="col">Formule</td>
                                    <td class="col">À un proche</th>
                                    <td class="col">À des professionnels</td>
                                    <td class="col">À une personnalité</td>
                                 </tr>
                                 <tr>
                                 <td>Sentiments respectueux</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="sentim" value="Vous n'avez pas répondu" checked="checked"/></td>
                                 <td><input type="radio" name="sentim" value="À un proche" /></td>
                                 <td><input type="radio" name="sentim" value="À des professionnels" /></td>
                                 <td><input type="radio" name="sentim" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>
                                 <td class="col">Cordialement</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="cord" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td class="col"><input type="radio" name="cord" value="À un proche" /></td>
                                 <td class="col"><input type="radio" name="cord" value="À des professionnels" /></td>
                                 <td class="col"><input type="radio" name="cord" value="À une personnalité" /></td>                                
                                 </tr>
                                 <tr>
                                <td>À la prochaine !</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="alap" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td><input type="radio" name="alap" value="À un proche" /></td>
                                 <td><input type="radio" name="alap" value="À des professionnels" /></td>
                                 <td><input type="radio" name="alap" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>

                                 <td class="col">cordiales salutations</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="cors" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td class="col"><input type="radio" name="cors" value="À un proche" /></td>
                                 <td class="col"><input type="radio" name="cors" value="À des professionnels" /></td>
                                 <td class="col"><input type="radio" name="cors" value="À une personnalité" /></td>
                                 </tr>
                                 <td >Respectueuse considération</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="resp" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td ><input type="radio" name="resp" value="À un proche" /></td>
                                 <td ><input type="radio" name="resp" value="À des professionnels" /></td>
                                 <td ><input type="radio" name="resp" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>
                                 <td class="col">Sincères salutations</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="ss" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td class="col"><input type="radio" name="ss" value="À un proche" /></td>
                                 <td class="col"><input type="radio" name="ss" value="À des professionnels" /></td>
                                 <td class="col"><input type="radio" name="ss" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>
                                 <td >Salutations distinguées</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="sd" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td ><input type="radio" name="sd" value="À un proche" /></td>
                                 <td ><input type="radio" name="sd" value="À des professionnels" /></td>
                                 <td ><input type="radio" name="sd" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>
                                 <td class="col">Bises</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="bs" value="Vous n'avez pas répondu"checked="checked"/></td>
                                 <td class="col"><input type="radio" name="bs" value="À un proche" /></td>
                                 <td class="col"><input type="radio" name="bs" value="À des professionnels" /></td>
                                 <td class="col"><input type="radio" name="bs" value="À une personnalité" /></td>
                                 </tr>
                                 <tr>
                                 <td>À +</td>
                                 <td style='visibility:hidden;display:none'><input type="radio" style='visibility:hidden;display:none' name="a" value="Vous n'avez pas répondu" checked="checked"/></td>
                                 <td><input type="radio" name="a" value="À un proche" /></td>
                                 <td><input type="radio" name="a" value="À des professionnels" /></td>
                                 <td><input type="radio" name="a" value="À une personnalité" /></td>
                                 </tr>
                               </table></br>
                               </div><!--fin exo--></br>
                               <input type="submit" class="bouton" value="Voir le corrigé"></br>
                           </form>
				
				</div> <!-- content_container -->
				
			
			<div id="footer_container">
			  <img src="img/marianne.png" alt="la marianne" id="lleft"/>
			  <img src="img/logo1.jpg" alt="text descriptive" id="lright" />
				<ul>
					<li class="copyright">Copyright Institut Français &copy; 2014</li>
					<li><a href="">Terms &amp; Conditions</a></li>
					<li><a href="">Terms &amp; Conditions</a></li>
					<li><a href="">Terms &amp; Conditions</a></li>
					<li><a href="">Developers</a></li>
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