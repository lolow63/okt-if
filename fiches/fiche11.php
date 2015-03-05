<!doctype html>
<html>
    <head>
		<title>Fiche 11 | Formation de l'Institut Français Algérie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<![endif]-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/dinot.css">
        <link rel="stylesheet" href="../css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
		<style> body { padding-top: 50px; } </style>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
			<!--BARRE DE NAVIGATION TOP-FIXE-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
				  <div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-scrollspy">
					  <span class="sr-only">Navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FICHE 11</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li class=""><a href="#sujet">SUJET</a></li>
					  <li class=""><a href="#act1">ACTIVITÉ 1</a></li>
					  <li class=""><a href="#act2">ACTIVITÉ 2</a></li>
					  <li class=""><a href="#act3">ACTIVITÉ 3</a></li>
					</ul>
				  </div>
				</div>
			</nav>
			<!--FIN BARRE DE NAVIGATION TOP-FIXE-->
			<?php include("../include/fiches/header-login.php");?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX-->
		<div class="container">
			<div class="well">
				<h2>FICHE N°11</h2>
				<div class="row">
					<div class="text-center well encadre col-xs-12 col-sm-offset-4 col-sm-4 col-sm-offset-4">
						<h3 class="activite">Thème</h3>
						<h3 class="remarque">@</h3>
					</div>
					<div class="text-center well encadre col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1">
						<h3 class="activite">Objectifs</h3>
						<ul class="list-unstyled">
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
						</ul>
					</div>
				</div>
		
				<p id="sujet" class="recoi">M. RAÏS remercie le service commercial.</p>
				
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
					<p><strong>Objet:</strong> Re: re: Commande du véhicule CLS 2000</p>
					<div class="list-group-item">
						<p><strong>De :</strong>
						<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							<strong>À : </strong> VEH Motors(service.commercial@veh.dz)
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>

					J’ai bien reçu les fiches techniques que vous avez envoyées. Je vous remercie pour votre retour rapide.<br/>
					
					En effet, je suis très intéressé pour le modèle CLS 2000 figurant sur la fiche technique n°4.<br/>
					
					Je souhaiterais savoir quelles sont les démarches à suivre pour l’acquérir.<br/>
										
					Je vous remercie par avance pour votre attention.<br/>
			
					Salutations distinguées.<br/>
					
					Mohammed RAÏS </p>
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
		
		
				<h3 id="act1" class="activite">Activité 1</h3>
				
				<!-- FORMULAIRE A TRANSMETTRE -->
				
				<form method="post" action="../corriges/corrige11.php">
				
				<div class="well">
				
				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<p class="label-info label_activite">L’objectif principal de ce message est :</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<input type="radio" class="hidden" name="f11a1" value="vous n'avez pas répondu" checked="checked" />
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="f11a1p1" name="f11a1" value="De demander de l’information" /></span><label for="f11a1p1" class="form-control">De demander de l’information</label></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="f11a1p2" name="f11a1" value="De passer une commande" /></span><label for="f11a1p2" class="form-control">De passer une commande</label></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="input-group"><span class="input-group-addon"><input type="radio" id="f11a1p3" name="f11a1" value="De fournir une information" /></span><label for="f11a1p3" class="form-control">De fournir une information</label></div>
					</div>
				</div> 
				
				</div>
			
				<h3 id="act2" class="activite">Activité 2</h3>
				<p><i>Choisissez la terminaison adéquate pour le participe passé dans les phrases suivantes :</i></p>
				
				<div class="well">
					
					1. Les membres du comité ont
					<span class="inline-form-control btn-group" data-toggle="buttons">
						<input type="radio" class="hidden" id="f11a2q1p0" value="vous n'avez pas répondu" name="f11a2q1" checked="checked" />
						<label for="f11a2q1p1" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q1p1" value="accordé" name="f11a2q1" />accordé</label>
						<label for="f11a2q1p2" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q1p2" value="accordés" name="f11a2q1" />accordés</label>
					</span>
					le crédit.<br/>
					
					2. L’assistante a
					<span class="inline-form-control btn-group" data-toggle="buttons">
						<input type="radio" class="hidden" id="f11a2q2p0" value="vous n'avez pas répondu" name="f11a2q2" checked="checked" />
						<label for="f11a2q2p1" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q2p1" value="accompli" name="f11a2q2" />accompli</label>
						<label for="f11a2q2p2" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q2p2" value="accomplie" name="f11a2q2" />accomplie</label>
					</span>
					ses missions avec beaucoup de professionnalisme.<br/>
					
					3. Les livraisons que nous avons
					<span class="inline-form-control btn-group" data-toggle="buttons">
						<input type="radio" class="hidden" id="f11a2q3p0" value="vous n'avez pas répondu" name="f11a2q3" checked="checked" />
						<label for="f11a2q3p1" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q3p1" value="réalisé" name="f11a2q3" />réalisé</label>
						<label for="f11a2q3p2" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q3p2" value="réalisées" name="f11a2q3" />réalisées</label>
					</span>
					ont satisfait les clients.<br/>
					
					4. La décision que notre directeur a
					<span class="inline-form-control btn-group" data-toggle="buttons">
						<input type="radio" class="hidden" id="f11a2q4p0" value="vous n'avez pas répondu" name="f11a2q4" checked="checked" />
						<label for="f11a2q4p1" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q4p1" value="prise" name="f11a2q4" />prise</label>
						<label for="f11a2q4p2" class="btn btn-primary btn-sm"><input type="radio" id="f11a2q4p2" value="pris" name="f11a2q4" />pris</label>
					</span>
					était très courageuse.
					
				</div>
				
				
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Complétez ce message avec les mots suivants :</i><br/><br/>
				
				<span class="label label-info">En effet</span>
				<span class="label label-info">Passé ce délai</span>
				<span class="label label-info">Nous nous mettons</span>
				<span class="label label-info">Ensuite</span>
				<span class="label label-info">Faisant suite</span>
				<span class="label label-info">Nous vous remercions</span>
				</p>
				
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
					<p><strong>Objet:</strong> Procédures à engager</p>
					<div class="list-group-item">
						<p><strong>De :</strong> VEH Motors (service.commercial@veh.dz)
							<span><strong>À : </strong>
							<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							</span><br/>
							<strong>Envoyé :</strong> jeu. 13/04/15 08:14
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>
					
					<input type="text" id="f11a3q1" class="form-control inline-form-control" name="f11a3q1" size="10" maxlength="25" />
					à votre demande d’informations concernant les procédures à engager pour l’acquisition d’un véhicule Veh Motors du type CLS 2000, 
					nous sommes heureux de vous adresser les conditions de vente.<br/>
					
					<input type="text" id="f11a3q2" class="form-control inline-form-control" name="f11a3q2" size="5" maxlength="22" />
					, vous êtes d’abord prié de remplir un formulaire signifiant que votre commande est réellement passée.<br/>
					
					<input type="text" id="f11a3q3" class="form-control inline-form-control" name="f11a3q3" size="5" maxlength="22" />
					, vous devriez vous acquitter d’un acompte qui représente 10% du prix total du véhicule.<br/>
										
					Votre commande sera satisfaite dans un délai de 20 jours.
					<input type="text" id="f11a3q4" class="form-control inline-form-control" name="f11a3q4" size="12" maxlength="22" />
					, vous pourriez soit réclamer un remboursement total, soit bénéficier d’un rabais de 15% du prix total du produit.<br/>
					
					Nous serions ravis si vous pouviez vous rapprocher de l’une de nos agences commerciales.<br/>
					
					<input type="text" id="f11a3q5" class="form-control inline-form-control" name="f11a3q5" size="18" maxlength="22" />
					à votre entière disposition pour tout complément d’informations.<br/>
					
					<input type="text" id="f11a3q6" class="form-control inline-form-control" name="f11a3q6" size="20" maxlength="22" />
					par avance pour votre intérêt.<br/>


					Cordialement.<br/>
					Service commercial VEH</p>
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
			
				<button class="btn btn-success btn-md pull-right" type="submit" hidden="hidden">
				<i class="fa fa-check-circle"> </i> Voir le corrigé</button><br/><br/>
								
				   </form><!-- FIN FORMULAIRE -->
		
					
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer>
			<?php include("../include/fiches/footer.php"); ?> 
		</footer>
		<!-- JavaScript Includes -->
		<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script> 
	</body>
</html>
		  