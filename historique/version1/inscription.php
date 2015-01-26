<?php
include('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>INstitut Français</title>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				
			<?php
//On verifie que le formulaire a ete envoye
if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email']) and $_POST['username']!='')
{
	//On enleve lechappement si get_magic_quotes_gpc est active
	if(get_magic_quotes_gpc())
	{
		$_POST['username'] = stripslashes($_POST['username']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['email'] = stripslashes($_POST['email']);
		
	}
	//On verifie si le mot de passe et celui de la verification sont identiques
	if($_POST['password']==$_POST['passverif'])
	{
		//On verifie si le mot de passe a 6 caracteres ou plus
		if(strlen($_POST['password'])>=6)
		{
			//On verifie si lemail est valide
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
			{
				//On echape les variables pour pouvoir les mettre dans une requette SQL
				$username = mysql_real_escape_string($_POST['username']);
				$password = mysql_real_escape_string($_POST['password']);
				$email = mysql_real_escape_string($_POST['email']);
				
				//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
				$dn = mysql_num_rows(mysql_query('select id from users where username="'.$username.'"'));
				if($dn==0)
				{
					//On recupere le nombre dutilisateurs pour donner un identifiant a lutilisateur actuel
					$dn2 = mysql_num_rows(mysql_query('select id from users'));
					$id = $dn2+1;
					//On enregistre les informations dans la base de donnee
					if(mysql_query('insert into users(id, username, password, email, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.time().'")'))
					{
						//Si ca a fonctionne, on naffiche pas le formulaire
						$form = false;
?>
                 <p>Vous avez bien &eacute;t&eacute; inscrit. Vous pouvez dor&eacute;navant vous connecter.</p><br />
                       <p><a href="connexion.php">Se connecter</a></P>
<?php
					}
					else
					{
						//Sinon on dit quil y a eu une erreur
						$form = true;
						$message = 'Une erreur est survenue lors de l\'inscription.';
					}
				}
				else
				{
					//Sinon, on dit que le pseudo voulu est deja pris
					$form = true;
					$message = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
				}
			}
			else
			{
				//Sinon, on dit que lemail nest pas valide
				$form = true;
				$message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
			}
		}
		else
		{
			//Sinon, on dit que le mot de passe nest pas assez long
			$form = true;
			$message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caract&egrave;res.';
		}
	}
	else
	{
		//Sinon, on dit que les mots de passes ne sont pas identiques
		$form = true;
		$message = 'Les mots de passe que vous avez entr&eacute; ne sont pas identiques.';
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
		echo '<h3>'.$message.'</h3>';
	}
	//On affiche le formulaire
?>
			
				
				 <form action="inscription.php" method="post">
                 <p>Veuillez remplir ce formulaire pour vous inscrire:</p><br />
        
            <label for="username">Nom d'utilisateur :</label><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Mot de passe (6 caract&egrave;res min.) :</span></label><input type="password" name="password" /><br />
            <label for="passverif">Mot de passe(v&eacute;rification) :</span></label><input type="password" name="passverif" /><br />
            <label for="email">Email :</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            
            <input type="submit" value="Envoyer" />
		
    </form>
				
				<?php
}
?>
				<div class="header_image">
					<img src="img/banner.png" height="145px" width="650px" alt="" />
				</div> <!-- header_image -->
			
				
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