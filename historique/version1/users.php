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
			
				Voici la liste des utilisateurs:
<table>
    <tr>
    	<th>Id</th>
    	<th>Nom d'utilisateur</th>
    	<th>Email</th>
    	<th>Date d'inscription</th>
    </tr>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs
$req = mysql_query('select * from users');
while($dnn = mysql_fetch_array($req))
{
?>
	<tr>
    	<td class="left"><?php echo $dnn['id']; ?></td>
    	<td class="left"><a href="profile.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    	<td class="left"><?php  echo date('d/m/Y',$dnn['signup_date']); ?></td>
    </tr>
<?php
}
?>
</table>

				
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