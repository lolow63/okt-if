<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			 <h2>Cours en ligne Algerie</h2>
				
			
			</div> <!-- header_container -->
			
			<div id="sidebar_container">
			<div id="seul"><a href="index.php" >Acceuil</a></div>
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
				
				
				
				<div class="header_image">
					<img src="img/banner.png" height="145px" width="650px" alt="" />
				</div> <!-- header_image -->
			
				    <?php
//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['username']))
{
	//On le deconecte en supprimant simplement les sessions username et userid
	unset($_SESSION['username'], $_SESSION['userid']);
?>
<p>Vous avez bien &eacute;t&eacute; d&eacute;connect&eacute;.</p><br />
 <p><a href="<?php echo $url_home; ?>">Accueil</a></p>
<?php
}
else
{
	$ousername = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password']))
	{
		//On echappe les variables pour pouvoir les mettre dans des requetes SQL
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//On recupere le mot de passe de lutilisateur
		$req = mysql_query('select password,id from users where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['password']==$password and mysql_num_rows($req)>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
?>
<p>Vous avez bien &eacute;t&eacute; connect&eacute;.</p>
<p><a href="intro.php">Debuter la formation</a></p>
<?php
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//On affiche un message sil y a lieu
	if(isset($message))
	{
		echo '<p>'.$message.'</p>';
	}
	//On affiche le formulaire
?>

<form action="connexion.php" method="post">
             <p>Veuillez entrer vos identifiants pour vous connecter:</p><br />
        <div class="center">
            <p><label for="username">Nom d'utilisateur :</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /></p><br />
            <p><label for="password">Mot de passe : </label><input type="password" name="password" id="password" /></p><br />
            <p><input type="submit" value="Connection" /></p>
		</div>
    </form>
    <?php
	}
}
?>
                       
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