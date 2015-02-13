<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
        <link rel="stylesheet" href="css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
		<!-- JavaScript Includes -->
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/collapse.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="js/scrollspy.js"></script>  
		<style>
		body { padding-top: 50px; }
		</style>
		 <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
			<?php include("include/navbar-topfix-1.php");
			include("include/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h2>FICHE N°7</h2>
				<div class="row">
					<div class="text-center well encadre col-xs-12 col-sm-offset-4 col-sm-4 col-sm-offset-4">
						<h3 class="activite">Thème</h3>
						<h3 class="remarque">@</h3>
					</div>
					<div class="text-center well encadre col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1">
						<h3 class="activite">Objectifs</h3>
						<ul class="list-unstyled">
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
						</ul>
					</div>
				</div>
				
				<p class="recoi">Le secrétariat du comité accuse réception.</p>
				<h3 id="act1" class="activite">Activité 1</h3>
				<p><i>Choisissez les deux messages qui vous semblent corrects :</i></p>
				
				<!-- FORMULAIRE A TRANSMETTRE -->
				
				<form method="post" action="construction.php">
		
				<div class="well">
					1.<span class="a-surligner"><input type="checkbox" value="1. Nous vous accusons réception de votre message. Cordialement." name="f7a1" id="f7a1p1">
					<label for="f7a1p1"> Nous vous accusons réception de votre message. Cordialement.</label></span><br/><br/>
					
					2.<span class="a-surligner"><input type="checkbox" value="2. Nous avons bien reçu votre message. Cordialement." name="f7a1" id="f7a1p2">
					<label for="f7a1p2"> Nous avons bien reçu votre message. Cordialement.</label></span><br/><br/>
					
					3.<span class="a-surligner"><input type="checkbox" value="3. Votre message est bien reçu." name="f7a1" id="f7a1p3">
					<label for="f7a1p3"> Votre message est bien reçu.</label></span><br/><br/>
					
					4.<span class="a-surligner"><input type="checkbox" value="4. Nous accusons réception de votre message. Cordialement." name="f7a1" id="f7a1p4">
					<label for="f7a1p4"> Nous accusons réception de votre message. Cordialement.</label></span><br/><br/>
					
					5.<span class="a-surligner"><input type="checkbox" value="5. Nous venons de recevoir votre message." name="f7a1" id="f7a1p5">
					<label for="f7a1p5"> Nous venons de recevoir votre message. Merci par avance de votre retour.</label></span>
					<br/>
				</div>
		
				<h3 id="act2" class="activite">Activité 2</h3>
				<p><i>Choisissez la bonne terminaison pour chacun de ces participes passés :</i></p>
				
				<div class="well">
					1. Tous les messages que j’ai
						<select name="formap" class="form-control inline-form-control">
							<option value="Vous n'avez pas répondu" id="f7a2q1p0"> </option>
							<option value="reçu" id="f7a2q1p1">reçu </option>
							<option value="reçues" id="f7a2q1p2">reçues </option>     	                                            
							<option value="reçus" id="f7a2q1p3">reçus </option>
						</select>
					sont des spams.<br/>

					2. Les membres du comité ont
						<select name="formap" class="form-control inline-form-control">
							<option VALUE="Vous n'avez pas répondu" id="f7a2q2p0"> </option>
							<option VALUE="confirmé" id="f7a2q2p1">confirmé</option>
							<option VALUE="confirmés" id="f7a2q2p2">confirmés</option>     	                                            
							<option VALUE="confirmer" id="f7a2q2p3">confirmer </option>
						</select>
					leur présence.<br/>
					
					3. La réunion avec le directeur a été
						<select name="formap" class="form-control inline-form-control">
							<option VALUE="Vous n'avez pas répondu" id="f7a2q3p0"> </option>
							<option VALUE="programmé" id="f7a2q3p1">programmé</option>
							<option VALUE="programmée" id="f7a2q3p2">programmée</option>     	                                            
							<option VALUE="programmer" id="f7a2q3p3">programmer</option>
						</select>
					à 10h.<br/>
								
					4. Les convocations seront
						<select name="formap" class="form-control inline-form-control">
							<option VALUE="Vous n'avez pas répondu" id="f7a2q4p0"> </option>
							<option VALUE="envoyé" id="f7a2q4p1">envoyé</option>
							<option VALUE="envoyés" id="f7a2q4p2">envoyés</option>     	                                            
							<option VALUE="envoyées" id="f7a2q4p3">envoyées</option>
						</select>
					dans les plus brefs délais.
				</div>
				
				
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Dans ce message, choisissez le temps verbal qui convient :</i></p>
				
				 <!--BOITE MAIL-->
				<div class="list-group-item">
					<div style="float:right"> 
						<a class="btn btn-info" href="#this" title="Accès à votre boite de réception">
						<i class="fa fa-envelope-o fa-lg"></i> Boite de réception</a>

						<a class="hidden-xs btn btn-primary" href="#this" title="Afficher les messages non lus">
						<i class="fa fa-envelope fa-lg"></i> Non lus </a>

						<a href="#this" title="Répondre">
						<i class="hidden-xs fa fa-reply fa-lg"></i></a>

						<a href="#this" title="Répondre à tous">
						<i class="hidden-xs fa fa-reply-all fa-lg"></i></a>

						<a href="#this" title="Faire suivre à vos contacts">
						<i class="hidden-xs fa fa-share fa-lg"></i></a>

						<a href="#this" title="Imprimer">
						<i class="hidden-xs fa fa-print fa-lg"></i></a>
					</div>
					<p><strong>Objet:</strong> Concernant votre demande de prêt.</p>
					<div class="list-group-item">
						<p><strong>De :</strong> Comité (comité.social@fargo.dz)
							<strong>À : </strong>
								<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							<br/>
							<strong>Envoyé :</strong> jeu. 06/04/15 16:53
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Cher Monsieur,<br/>

					Nous vous informons que vous 
						<span class="inline-form-control btn-group" data-toggle="buttons">
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="recevrez" name="f7a3q1" id="f7a3q1p1"> recevrez
							</label>
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="recevez" name="f7a3q1" id="f7a3q1p2"> recevez
							</label>
						</span>
					une réponse à votre demande de prêt mardi prochain.<br/>
					
					Pour votre information, le comité des oeuvres sociales
						<span class="inline-form-control btn-group" data-toggle="buttons">
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="se réunira" name="f7a3q2" id="f7a3q2p1"> se réunira
							</label>
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="se réunit" name="f7a3q2" id="f7a3q2p2"> se réunit
							</label>
						</span>
					jeudi pour étudier votre dossier.<br/>
					
					Si vous
						<span class="inline-form-control btn-group" data-toggle="buttons">
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="souhaiterez" name="f7a3q3" id="f7a3q3p1"> souhaiterez
							</label>
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="souhaitez" name="f7a3q3" id="f7a3q3p2"> souhaitez
							</label>
						</span>
					obtenir de plus amples informations, nous
					
						<span class= "inline-form-control btn-group" data-toggle="buttons">
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="restons" name="f7a3q4" id="f7a3q4p1"> restons
							</label>
							<label class="btn btn-primary btn-sm">
								<input type="radio" value="resterons" name="f7a3q4" id="f7a3q4p2"> resterons
							</label>
						</span>
					 à votre disposition.<br/>
					
					Cordialement.<br/> 
					Le comité des oeuvres sociales</p>
				</div>
				<div class="list-group-item">
					<a class="btn btn-primary" href="#this" title="Répondre">
					  <i class="fa fa-reply fa-lg"></i> Répondre</a>
					<a class="hidden-xs btn btn-info" href="#this" title="Répondre à tous">
					  <i class="fa fa-reply-all fa-lg"></i> Répondre à tous</a>
					<a class="hidden-xs btn btn-info" href="#this" title="Transférer">
					  <i class="fa fa-share fa-lg"></i> Transférer</a>
					<a class="hidden-xs btn btn-danger" href="#this" title="Supprimer">
					  <i class="fa fa-trash-o fa-lg"></i> Supprimer</a>
				</div>
				
				<!--FIN DE BOITE MAIL-->
				
				<h3 id="act4" class="activite">Activité 4</h3>
				<p><i>Sélectionnez la forme adéquate :<br/>
				Ø signifie que vous ne mettez rien à cette position.</i></p>
				
				<div class="well">
					<p>1. Le séminaire commence 
					<select name="f7a4q1" id="f7a4q1" class="form-control inline-form-control">
						<option value="Vous n'avez pas répondu" id="f7a4q1p0"></option>
						<option value="le" id="f7a4q1p1">le</option>
						<option value="Ø" id="f7a4q1p2">Ø</option>
					</select>
					samedi 
					<select name="f7a4q2" id="f7a4q2" class="form-control inline-form-control">
						<option value="Vous n'avez pas répondu" id="f7a4q2p0"></option>
						<option value="Ø" id="f7a4q2p1">Ø</option>
						<option value="en" id="f7a4q2p2">en</option>
					</select>
					après midi.</p>
					<hr>
					<p>2. Le directeur organisera la réunion au plus tard
					<select name="f7a4q3" id="f7a4q3" class="form-control inline-form-control">
						<option value="Vous n'avez pas répondu" id="f7a4q3p0"></option>
						<option value="Ø" id="f7a4q3p1">Ø</option>
						<option value="le" id="f7a4q3p2">le</option>
					</select>
					mercredi prochain.</p>
					<hr>
					<p>3. Vous devez rendre votre réponse
					<select name="f7a4q4" id="f7a4q4" class="form-control inline-form-control">
						<option value="Vous n'avez pas répondu" id="f7a4q4p0"></option>
						<option value="après" id="f7a4q4p1">après</option>
						<option value="dans" id="f7a4q4p2">dans</option>
						<option value="avant" id="f7a4q4p3">avant</option>
					</select>
					 48 heures.</p>
					 <hr>
					 <p>4. Nous vous octroyons le crédit
					<select name="f7a4q5" id="f7a4q5" class="form-control inline-form-control">
						<option value="Vous n'avez pas répondu" id="f7a4q5p0"></option>
						<option value="sous" id="f7a4q5p1">sous</option>
						<option value="avant" id="f7a4q5p2">avant</option>
					</select>
					deux jours.</p>
					
					
				</div>
				
		
		
					<button class="btn btn-success btn-md pull-right" type="submit" hidden="hidden">
				<i class="fa fa-check-circle"> </i> Voir le corrigé</button><br/><br/>
								
				   </form><!-- FIN FORMULAIRE -->
				   
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer>
			<?php include("include/footer.php"); ?> 
		</footer>
		<!-- JavaScript Includes -->

		<!--Script pour Scrollspy fluide-->
		<script>
			$(function () {
			$('li>a').on('click', function(e) {
			e.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
			  scrollTop: $(this.hash).offset().top
				}, 1000, function(){
				window.location.hash = hash;
				});
			});
		});
		</Script>
	</body>
</html>
		  