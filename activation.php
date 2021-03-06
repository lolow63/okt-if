<!doctype html>
<html lang="fr">
    <head>
	    <title>Institut Français | Algérie</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<![endif]-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
        <link rel="stylesheet" href="css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="http://www.if-algerie.com/favicon.ico">
		<link rel="apple-touch-icon" href="http://www.if-algerie.com/touch_icon.png">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<header>
			<?php include("include/index/header-unlog.php");?>
	</header>
<?php

 $x=$y=FALSE;
 
 if(isset($_GET['x'])){$x=$_GET['x'];}

 
 if (isset($_GET['y'])&& (strlen($_GET['y'])== 32 )){
	$y = $_GET['y'];}
   
      if($x && $y){

try{
        include 'fonctions/cnx_db.php';
	$con->exec("UPDATE users SET active= NULL  WHERE email='$x'" ) ;
	echo '<div class="container"><h3 class="text-center alert alert-success">Votre compte est désormais actif. Vous pouvez dès à présent vous connecter:</h3>
	<hr/>
				<!--AVERTISSEMENT JAVASCRIPT DÉSACTIVÉ-->
		<noscript>
			<div class="alert alert-danger">
				<div class="activite text-center" style="font-size:1em">AVERTISSEMENT: Le Javascript est désactivé sur cette page! Modifiez les paramètres de votre navigateur pour profiter pleinement de toutes les fonctionnalités du site. 
				</div>
			</div>
		</noscript>
	
		<form class="form-horizontal" method="post" action="user/test-connexion.php">
				<!-- Email input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="login-mail">Adresse électronique</label>  
					  <div class="controls col-md-6">
					  <input id="login-mail" name="login-mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
						<p class="help-block"></p>
					</div>
					</div>
				</div>
		
				
				<!-- Password input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="login-password">Votre mot de passe</label>
					  <div class="col-md-6 controls">
						<input id="login-password" name="login-password" class="form-control input-md" required="" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
				</div>
				
				<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <div class="col-md-offset-6 col-md-6">
							<div class="input-group">
								<span class="input-group-addon">
									<input type="checkbox" id="keeplog" name="keeplog" />
								</span>
								<label for="keeplog" class="form-control">Se souvenir de moi</label>
							</div>
						</div>	
					</div>
				
				<!--Submit button-->
				<div class="pull-right">
					<button id="valid" name="valid" class="btn btn-success" type="submit">Confirmer</button>
				</div>
		</form>
		</div>
		<hr/>';
				}
				catch(PDOExeption $ee)
					{
					echo "erreure</br>";
					}
		} else 
		{//redirection
		   
		  $url=BASE_URL .'user/inscription.php'; 
		  ob_end_clean(); //suprimer le tompon.
		  header("Location : $url");
		  exit(); //pour quitter le script
		  }
		  

?>		
		<footer>
			<?php include("include/index/footer.php"); ?>
		</footer>
		<!-- JavaScript Includes -->
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		</body>
		</html>