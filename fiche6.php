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
        <script src="js/sortable.js"></script>
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
			<?php include("include/navbar-topfix-2.php");
			include("include/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h2>FICHE N°6</h2>
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
		
				<p class="recoi">Le directeur, M. Meftah, répond au chef du comité.</p>
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
					<p><strong>Objet:</strong> Re: Demande de crédit de Mohammed RAÏS</p>
					<div class="list-group-item">
						<p><strong>De :</strong> Karim MEFTAH (km.meftah@fargo.dz)
							<span><strong>À : </strong>Salah KHADRAOUI (sal.khadraoui@fargo.dz)
							</span><br/>
							<strong>Envoyé :</strong> mer. 05/04/15 09:05
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>

					Faisant suite à votre message, vous pouvez donner, à priori, 
					une réponse favorable à la demande de Mohammed RAÏS.
					<br/>Néanmoins, je vous demanderais de faire vérifier par la commission si son dossier est recevable.<br/>
					Cordialement.<br/>
					K.M</p>
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
				</div><br/>
				<!--FIN BOITE MAIL -->
				
				<!-- FORMULAIRE A TRANSMETTRE -->
				
				<form method="post" action="construction.php">
				
				<h3 id="act1" class="activite">Activité 1</h3>
				<p><i>Réécrivez les phrases suivantes en utilisant l'adjectif verbal approprié.</i></p>
				<p class="alinea"><i>Exemple:</i><strong> Puisqu’il travaille</strong> depuis longtemps en France, Karim parle bien français.</p>
				<p class="alinea"><strong>Travaillant</strong> depuis longtemps en France, Karim parle bien français.</p>
				
				<div class="well">
					<p>1.Les employés de TMS Company ont fait grève hier <strong>pour demander</strong> une revalorisation de leurs salaires.</p>
					<p><input class="form-control inline-form-control" type="text"  name="f6a1q1" id="f6a1q1" size="10" maxlength="20"/>
					une revalorisation de leurs salaires, les employés de TMS ont fait grève hier.</p>
					<hr>
					<p>2. Les dossiers n’ont pas été traités <strong>à cause de l’absence</strong> du chef de service..</p>
					<p>Le chef de service<input class="form-control inline-form-control" type="text" name="f6a1q2" id="f6a1q2" size="10" maxlength="20"/>
					, les dossiers n’ont pas été traités.</p>
					<hr>
					<p>3.<strong>Puisque</strong> les commandes <strong>ne sont pas arrivées </strong>à temps, la clientèle a changé de fournisseurs.</p>
					<p>Les commandes<input class="form-control inline-form-control" type="text" name="f6a1q3" id="f6a1q3" size="10" maxlength="20"/>
					 à temps, la clientèle a changé de fournisseurs.</p>
				</div>
				
				<p class="recoi">M. KHADRAOUI écrit aux membres du comité des oeuvres sociales.</p>
		
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
					<p><strong>Objet:</strong> Demande de réunion</p>
					<div class="list-group-item">
						<p><strong>De :</strong>Salim KHADRAOUI (sal.khadraoui@fargo.dz)
							<strong>À : </strong>Comité (comité.social@fargo.dz)
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Chers collègues, <br/>

					Il serait nécessaire de nous réunir d’ici la fin de la semaine pour examiner
					la demande de crédit d’un employé de notre entreprise, conformément à l’avis du directeur.<br/>
					
					Je vous remercie par avance de bien vouloir vous libérer jeudi à 14h dans la salle de réunion habituelle.<br/>
					
					Dans le cas où vous ne pourriez pas assister à la réunion, je vous remercierais de bien vouloir m’en aviser suffisamment à l’avance.<br/>
					
					Bien à vous<br/>
					
					KHADRAOUI Salah <br/>
					Chef du comité des oeuvres sociales</p>
				</div>
				<div class="list-group-item">
					<a class="btn btn-success" href="#this" title="Envoyer">
					  <i class="fa fa-send fa-lg"></i> Envoyer</a>
					<a class="hidden-xs btn btn-info" href="#this" title="Enregister dans Brouillons">
					  <i class="fa fa-save fa-lg"></i>  Enregister dans Brouillons</a>
					<a class="hidden-xs btn btn-danger" href="#this" title="Annuler">
					  <i class="fa fa-trash-o fa-lg"></i> Annuler</a>
				</div><br/>
				
				<!--FIN BOITE MAIL -->
				
				<h3 id="act2" class="activite">Activité 2</h3>
				<p><i>D’après ce message, la présence à cette réunion est :</i></p>
				
				<div class="well">
					<div class="row">  
						<div class="label col-md-4 col-xs-12">
						<input type="radio" style='visibility:hidden;display:none' name="f6a2q1" value="Vous n'avez pas répondu"  checked="checked"/>
							   <div class="input-group">
								<span class="input-group-addon">                                     
								<input type="radio" name="f6a2q1" id="f6a2q1p1" value="Obligatoire" />
							</span><label for="f6a2q1p1" class="form-control">
							Obligatoire.
							</label></div></div>
						<div class="label col-md-4 col-xs-12"><div class=" input-group">
								<span class="input-group-addon">
								<input type="radio" name="f6a2q1" id="f6a2q1p2" value="Fortement souhaitable" />
							</span><label for="f6a2q1p2" class="2 form-control">
							Fortement souhaitable.
							</label></div></div>
						<div class="label col-md-4 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="radio" name="f6a2q1" id="f6a2q1p3" value="Facultative" />
							</span><label for="f6a2q1p3" class="2 form-control">
							Facultative.
							</label></div></div>
					</div> 
				</div>
				
				<p><i>Vous ne pouvez pas assister à la réunion, sélectionnez deux excuses correctes parmi les phrases suivantes :</i></p>
				
				<div class="well">
					<div class="row">  
						<div class="label col-md-6 col-xs-12">
						<input type="checkbox" style='visibility:hidden;display:none' name="f6a2q2" value="Vous n'avez pas répondu"  checked="checked"/>
							   <div class="input-group">
								<span class="input-group-addon">                                     
								<input type="checkbox" name="f6a2q2" id="f6a2q2p1" value="Je serai en mission ce jour-là à Ghardaia." />
							</span><label for="f6a2q2p1" class="form-control">
							Je serai en mission ce jour-là à Ghardaia.
							</label></div></div>
						<div class="label col-md-6 col-xs-12"><div class=" input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2" id="f6a2q2p2" value="Je suis débordé ces derniers temps." />
							</span><label for="f6a2q2p2" class="2 form-control">
							Je suis débordé ces derniers temps.
							</label></div></div>
						<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2" id="f6a2q2p3" value="Je serai en déplacement à l’étranger." />
							</span><label for="f6a2q2p3" class="2 form-control">
							Je serai en déplacement à l’étranger.
							</label></div></div>
							<div class="label col-md-6 col-xs-12"><div class="input-group">
								<span class="input-group-addon">
								<input type="checkbox" name="f6a2q2" id="f6a2q2p4" value="Je n’ai pas le moral." />
							</span><label for="f6a2q2p4" class="2 form-control">
							Je n’ai pas le moral.
							</label></div></div>
					</div> 
				</div>
				
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Complétez le message en sélectionnant la forme verbale appropriée :</i></p>
				
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
					<p><strong>Objet :</strong>Re: Demande de crédit de M.RAÏS</p>
								
					<div class="list-group-item">
						<p><strong>De :</strong>Karim MEFTAH (km.meftah@fargo.dz)
							<strong>À : </strong>Comité (comité.social@fargo.dz)
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>
					
					Je vous prie de  bien vouloir accepter la demande de Mohammed RAÏS. <br/>
					Cependant, au cas où elle ne
								<select name="formap" class="form-control inline-form-control">
									<option value="Vous n'avez pas répondu" id="f6a3q1p0"> </option>
									<option value="répondait" id="f6a3q1p1">répondait </option>
									<option value="répond" id="f6a3q1p2">répond </option>     	                                            
									<option value="répondrait" id="f6a3q1p3">répondrait </option>
								</select>
					pas aux normes, je vous prie de prendre les mesures nécessaires.<br/>

					Dans l’hypothèse où vous
								<select name="formap" class="form-control inline-form-control">
									<option VALUE="Vous n'avez pas répondu" id="f6a3q2p0"> </option>
									<option VALUE="accepteriez" id="f6a3q2p1">accepteriez</option>
									<option VALUE="acceptiez" id="f6a3q2p2">acceptiez </option>     	                                            
									<option VALUE="acceptez" id="f6a3q2p3">acceptez </option>
								</select>
					son dossier, faites en sorte d’informer Monsieur Raïs dans les meilleurs délais.<br/>
					
					A moins que le dossier ne
								<select name="formap" class="form-control inline-form-control">
									<option VALUE="Vous n'avez pas répondu" id="f6a3q3p0"> </option>
									<option VALUE="contient" id="f6a3q3p1">contient</option>
									<option VALUE="contienne" id="f6a3q3p2">contienne</option>     	                                            
									<option VALUE="contenait" id="f6a3q3p3">contenait</option>
								</select>
						
					toutes les conditions requises, dans ce cas-là, je vous prie d’accorder à l’intéressé sa demande dans les meilleurs délais.<br/>
					Je vous remercie par avance.<br/>
					Le directeur.<br/> 
					</p>
				</div>
					<div class="list-group-item">
					<a class="btn btn-success" href="#this" title="Envoyer">
					  <i class="fa fa-send fa-lg"></i> Envoyer</a>
					<a class="hidden-xs btn btn-info" href="#this" title="Enregister dans Brouillons">
					  <i class="fa fa-save fa-lg"></i>  Enregister dans Brouillons</a>
					<a class="hidden-xs btn btn-danger" href="#this" title="Annuler">
					  <i class="fa fa-trash-o fa-lg"></i> Annuler</a>
				</div><br/>
				
				<!--FIN BOITE MAIL -->
		
		
		
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
		  