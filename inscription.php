<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
        <link rel="stylesheet" href="css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--AVERTISSEMENT JAVASCRIPT DÉSACTIVÉ-->
		<noscript>
			<div class="jumbotron">
				<div class="activite text-center" style="font-size:1em">AVERTISSEMENT: Le Javascript est désactivé sur cette page! Modifiez les paramètres de votre navigateur pour profiter pleinement de toutes les fonctionnalités du site. 
				</div>
			</div>
		</noscript>
		
		<div class="jumbotron">
			<div class="activite text-center">Inscription</div>
		</div>
		<div class="container">
		<form class="form-horizontal" method="post" action="test-inscription.php">			
				<!-- Name input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="nom">Nom</label>
				  <div class="col-md-6">
					<input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text">
					<p class="help-block"></p>
				  </div>
				</div>
				
				<!-- First-name input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="prenom">Prénom</label>
				  <div class="col-md-6">
					<input id="prenom" name="prenom" placeholder="" class="form-control input-md" required="" type="text">
					<p class="help-block"></p>
				  </div>
				</div>
			
				<!-- Email input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="mail">Adresse électronique</label>  
					  <div class="controls col-md-6">
					  <input id="mail" name="mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
						<p class="help-block"></p>
					</div>
					</div>
				</div>
				
				<!-- Email input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="confirm-mail">Confirmez votre adresse électronique</label>  
					  <div class="controls col-md-6">
					  <input id="confirm-mail" data-validation-match-match="mail" data-validation-match-message="Les champs doivent correspondre!" name="confirm-mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
						<p class="help-block"></p>
					</div>
					</div>
				</div>
				
				<!-- Password input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="password">Choisissez votre mot de passe</label>
					  <div class="col-md-6 controls">
						<input id="password" name="password" class="form-control input-md" required="" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
				</div>
				<!-- Confirm Password input-->
				<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="confirm-password">Confirmez votre mot de passe</label>
					  <div class="col-md-6 controls">
						<input id="confirm-password" data-validation-match-match="password" data-validation-match-message="Les champs doivent correspondre!" name="confirm-password" class="form-control input-md" required="" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
				</div>
				
				<!--Submit button-->
				<div class="pull-right">
					<button id="valid" name="valid" class="btn btn-success" type="submit">Confirmer</button>
				</div>
		</form>	
		</div>
				
				
				
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>	
        <script src="js/jqBootstrapValidation.js"></script>
		<!--Script JqBootstrapValidation-->
		<script>
		  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
		</script>
    </body>
</html>