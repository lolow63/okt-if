
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
		     
			<img src="img/marianne.png" alt="la marianne"/>
			  <p>Lorem ipsum dolor sit amet</p>
			  <p>Lorem ipsum dolor sit amet</p>
			</div> <!-- sidebar_container -->
			
			<div id="content_container">
			
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				
				
				
				<div class="header_image">
					<img src="img/banner.png" height="145px" width="650px" alt="" />
				</div> <!-- header_image -->
			             <p>Bonjour <?php if(isset($_SESSION['username'])){echo ''.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>. Voici l'introduction à la formation :</p>
				         <p>Sujet :</p>
				         <p> Notre personnage principal s'appelle Mohammed RAÏS. Il est employé dans une entreprise de « à définir ». Pour faciliter ses déplacements, il souhaiterait acheter un véhicule. Il s'adresse donc à une société afin d'obtenir des renseignements sur leurs véhicules.</p>
                       
                       <p><a href="fiche1.php">« FICHE N°1 »</a>
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