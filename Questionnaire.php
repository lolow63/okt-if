<!doctype html>
<html lang="fr">
    <head>
		<title>Questionnaire | Institut Français Algérie</title>
        <meta charset="utf-8">
        <meta name="description" content="Questionnaire L'institut Français d'Algérie vous propose d'améliorer votre rédaction de courriels professionnels.">
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
			<?php include("include/index/header-login.php");?>
		</header>
		<div class="container">
			<br/>
			<div class="well">
			<h1 class="text-center">Votre avis nous intéresse! <br/><small>Aidez-nous à améliorer nos formations en ligne.</small></h1></div>
			<form class="form-horizontal" method="post" action="test-questionnaire.php">
				<h3 class="text-center bg-info">1. L’organisation de la formation:</h3>
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">La formation respecte-t-elle une progression logique ?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1ar1" name="1a" value="Tout
à fait" /></span><label for="1ar1" class="form-control">Tout
à fait</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1ar2" name="1a" value="Plutôt
oui" /></span><label for="1ar2" class="form-control">Plutôt
oui</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1ar3" name="1a" value="Plutôt
non" /></span><label for="1ar3" class="form-control">Plutôt
non</label></div>
					</div>					
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1ar4" name="1a" value="Pas du tout" /></span><label for="1ar4" class="form-control">Pas du tout</label></div>
					</div>
				</div><br/>
				
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Pour vous, quel est le niveau de difficulté de cette formation?</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1br1" name="1b" value="Facile" /></span><label for="1br1" class="form-control">Facile</label></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1br2" name="1b" value="Moyen" /></span><label for="1br2" class="form-control">Moyen</label></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1br3" name="1b" value="Difficile" /></span><label for="1br3" class="form-control">Difficile</label></div>
					</div>					
				</div><br/> 
				
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Le scénario de cette mise en situation vous a semblé:</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1cr1" name="1c" value="Réaliste" /></span><label for="1cr1" class="form-control">Réaliste</label></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1cr2" name="1c" value="Crédible" /></span><label for="1cr2" class="form-control">Crédible</label></div>
					</div>					
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="1cr3" name="1c" value="Peu crédible" /></span><label for="1cr3" class="form-control">Peu crédible</label></div>
					</div>
				</div>
				
				<h3 class="text-center bg-info">2. Le contenu de la formation:</h3>
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Cette formation répond-t-elle à vos besoins
professionnels ?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2ar1" name="2a" value="Tout
à fait" /></span><label for="2ar1" class="form-control">Tout
à fait</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2ar2" name="2a" value="Plutôt
oui" /></span><label for="2ar2" class="form-control">Plutôt
oui</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2ar3" name="2a" value="Plutôt
non" /></span><label for="2ar3" class="form-control">Plutôt
non</label></div>
					</div>					
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2ar4" name="2a" value="Pas du tout" /></span><label for="2ar4" class="form-control">Pas du tout</label></div>
					</div>
				</div><br/>
				
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">La méthode pédagogique utilisée favorise-t-elle
votre apprentissage ?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2br1" name="2b" value="Tout
à fait" /></span><label for="2br1" class="form-control">Tout
à fait</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2br2" name="2b" value="Plutôt
oui" /></span><label for="2br2" class="form-control">Plutôt
oui</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2br3" name="2b" value="Plutôt
non" /></span><label for="2br3" class="form-control">Plutôt
non</label></div>
					</div>					
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="2br4" name="2b" value="Pas du tout" /></span><label for="2br4" class="form-control">Pas du tout</label></div>
					</div>		
				</div> 
		<h3 class="text-center bg-info">3. La mise en forme de la formation:</h3>
		
			<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Comment trouvez-vous le site?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="3ar1" name="3a" value="Très
esthétique" /></span><label for="3ar1" class="form-control">Très
esthétique</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="3ar2" name="3a" value="Plutôt
agréable" /></span><label for="3ar2" class="form-control">Plutôt
agréable</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="3ar3" name="3a" value="Plutôt
désagréable" /></span><label for="3ar3" class="form-control">Plutôt
désagréable</label></div>
					</div>					
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="3ar4" name="3a" value="Pas esthétique" /></span><label for="3ar4" class="form-control">Pas esthétique</label></div>
					</div>
				</div><br/>
			
			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<p class="label-info label_activite">Avez-vous rencontré des difficultés pour réaliser certaines activités?</p>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="input-group"><span class="input-group-addon"><input type="radio" id="3br1" name="3b" value="Non" /></span><label for="3br1" class="form-control">Non</label></div>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="input-group">
						<span class="input-group-addon"><input type="radio" id="3br2" name="3b" value="Oui" /></span>
						<label for="3br2" class="form-control">Oui</label>
						<span class="input-group-addon"><label for="3br3" class="">Précisez:</label></span>
						<input class="form-control" type="text" id="3br3" name="3br3" value="" /></div>
				</div>				
			</div>
			
		<h3 class="text-center bg-info">4. Le site internet:</h3>
		
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<p class="label-info label_activite">Comment avez-vous découvert cette formation?</p>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
				<div class="input-group"><span class="input-group-addon"><input type="radio" id="4ar1" name="4a" value="Via le site de l'institut français" /></span><label for="4ar1" class="form-control">Via le site de l'institut français</label></div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="input-group"><span class="input-group-addon"><input type="radio" id="4ar2" name="4a" value="Communication papier" /></span><label for="4ar2" class="form-control">Communication papier</label></div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="input-group"><span class="input-group-addon"><input type="radio" id="4ar3" name="4a" value="On m'en a parlé" /></span><label for="4ar3" class="form-control">On m'en a parlé</label></div>
			</div>					
			<div class="col-sm-3 col-xs-12">
				<div class="input-group"><label for="4ar4" class="input-group-addon">Autre:</label><input class="form-control" type="text" id="" name="4acomment" value="" /><span class="input-group-addon"><input type="radio" id="4ar4" name="4a" value="Autre" /></span></div>
			</div>		
			</div><br/>
			
			<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Quel navigateur utilisez-vous?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4br1" name="4br4" value="Chrome" /></span><label for="4br1" class="form-control">Chrome</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4br2" name="4br4" value="Firefox" /></span><label for="4br2" class="form-control">Firefox</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4br3" name="4br4" value="Internet Explorer" /></span><label for="4br3" class="form-control">Internet Explorer</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4br4" name="4br4" value="Safari" /></span><label for="4br4" class="form-control">Safari </label></div>
					</div>	
					<div class="col-sm-12 col-xs-12">
						<div class="input-group"><label for="4br5" class="input-group-addon">Autre:</label><input class="form-control" type="text" id="4br5" name="4br5" value="" /></div>
					</div>		
				</div><br/>
				
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">Sur quels appareils suivez-vous la formation?</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4cr1" name="4cr1" value="Ordinateur de bureau" /></span><label for="4cr1" class="form-control">Ordinateur de bureau</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4cr2" name="4cr2" value="Ordinateur portable" /></span><label for="4cr2" class="form-control">Ordinateur portable</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4cr3" name="4cr3" value="Tablette" /></span><label for="4cr3" class="form-control">Tablette</label></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="checkbox" id="4cr4" name="4cr4" value="Smartphone" /></span><label for="4cr4" class="form-control">Smartphone </label></div>
					</div>		
				</div><br/>
				
			
			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<p class="label-info label_activite">Avez-vous rencontré des difficultés pour naviguer à l'intérieur du site?</p>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="input-group"><span class="input-group-addon"><input type="radio" id="4dr1" name="4d" value="Non" /></span><label for="4dr1" class="form-control">Non</label></div>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="input-group">
						<span class="input-group-addon"><input type="radio" id="4dr2" name="4d" value="Oui" /></span>
						<label for="4dr2" class="form-control">Oui</label>
						<span class="input-group-addon"><label for="4dr3" class="">Précisez:</label></span>
						<input class="form-control" type="text" id="4dr3" name="4dcomment" value="" /></div>
				</div>	
			</div><br/>

			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<p class="label-info label_activite">Avez-vous rencontré des difficultés pour vous inscrire?</p>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="input-group"><span class="input-group-addon"><input type="radio" id="4er1" name="4e" value="Non" /></span><label for="4er1" class="form-control">Non</label></div>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="input-group">
						<span class="input-group-addon"><input type="radio" id="4er2" name="4e" value="Oui" /></span>
						<label for="4er2" class="form-control">Oui</label>
						<span class="input-group-addon"><label for="4er3" class="">Précisez:</label></span>
						<input class="form-control" type="text" id="4er3" name="4ecomment" value="" /></div>
				</div>				
			</div>
			
			<h3 class="text-center bg-info">5. Pour finir:</h3>
			
			<div class="row">
				<div class="col-xs-12">
					<p class="label-info label_activite">Quelle note donneriez-vous à cette formation?</p>
				</div>
				<div class="col-xs-12">
					<select class="form-control text-center" id="5a" name="5a" value="">
						<option value="0">0/10</option>
						<option value="1">1/10</option>
						<option value="2">2/10</option>
						<option value="3">3/10</option>
						<option value="4">4/10</option>
						<option value="5">5/10</option>
						<option value="6">6/10</option>
						<option value="7">7/10</option>
						<option value="8">8/10</option>
						<option value="9">9/10</option>
						<option value="10">10/10</option>
					</select>
				</div>
			</div><br/>
			
			<div class="row">
				<div class="col-xs-12">
					<p class="label-info label_activite">Avez-vous des idées d'amélioration à nous suggérer?</p>
				</div>
				<div class="col-xs-12">
					<textarea name="suggestion" class="form-control" rows="3"></textarea>
				</div>
			</div> 
			<br/>			
				<button type="submit" class="btn btn-block btn-success"><span class="fa fa-check-circle"></span> Envoyer le formulaire</button>
			<hr>
			
			</form>
		</div><!--container-->
		<footer>
			<?php include("include/index/footer.php"); ?>
		</footer>
		<!-- JavaScript Includes -->
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<!-- JavaScript Test -->
	</body>
</html>

