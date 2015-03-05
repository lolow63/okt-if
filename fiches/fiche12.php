<!doctype html>
<html>
    <head>
		<title>Fiche 12 | Formation de l'Institut Français Algérie</title>
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
					<a class="navbar-brand" href="#">FICHE 12</a>
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
				<h2>FICHE N°12</h2>
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
		
		
				<p id="sujet" class="recoi">M. RAÏS conteste les délais de livraison.</p>
				
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
					<p><strong>Objet:</strong> Je réclame la livraison immédiate de mon véhicule.</p>
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

					Après avoir passé commande du véhicule CLS 2000 et signé le contrat d’achat, je constate que mon véhicule n’est pas encore livré.
					Or, il était prévu sur le bon de commande, en date du 16 avril 2015, que la livraison s’effectuerait après 20 jours, soit le 6 mai 2015.<br/>
					
					Conformément aux clauses de notre contrat, je vous remercie de bien vouloir me faire bénéficier des 15% de rabais prévus.<br/>
					
					Je vous prie de prendre les mesures nécessaires afin que mon acquisition se fasse dans les meilleurs délais.<br/>
										
					Cordialement.<br/>
					
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
				
				<form method="post" action="../corriges/corrige12.php">
				
				<div class="well">
				
					<div class="row">
						<div class="col-lg-12 col-xs-12">
							<p class="label-info label_activite">Pourquoi M.RAÏS réclame-t-il un rabais de 15% ?</p>
						</div>
						<div class="col-sm-4 col-xs-12">
							<input type="radio" class="hidden" value="vous n'avez pas répondu" name="f12a1"checked="checked" />
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a1p1" name="f12a1" value="Parce qu’il souhaite un dédommagement du retard de livraison du véhicule." /></span>
							<label for="f12a1p1" class="form-control">Parce qu’il souhaite un dédommagement du retard de livraison du véhicule.</label></div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a1p2" name="f12a1" value="Parce que les clauses du contrat n’ont pas été respectées." /></span>
							<label for="f12a1p2" class="form-control">Parce que les clauses du contrat n’ont pas été respectées.</label></div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a1p3" name="f12a1" value="Parce que le contrat prévoit un rabais de 15% qui n’a pas été appliqué." /></span>
							<label for="f12a1p3" class="form-control">Parce que le contrat prévoit un rabais de 15% qui n’a pas été appliqué.</label></div>
						</div>
					</div> 
				</div>
				
				<h3 id="act2" class="activite">Activité 2</h3>
				
				<div class="well">
				
					<div class="row">
						<div class="col-lg-12 col-xs-12">
							<p class="label-info label_activite">Le message de M.RAIS comporte une erreur. S’agit-il :</p>
						</div>
						<div class="col-sm-4 col-xs-12">
							<input type="radio" class="hidden" value="vous n'avez pas répondu" name="f12a2" checked="checked" />
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a2p1" name="f12a2" value="d’un manque de politesse." /></span>
							<label for="f12a2p1" class="form-control">d’un manque de politesse.</label></div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a2p2" name="f12a2" value="d’un manque du rappel du contexte." /></span>
							<label for="f12a2p2" class="form-control">d’un manque du rappel du contexte.</label></div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="input-group"><span class="input-group-addon"><input type="radio" id="f12a2p3" name="f12a2" value="d’une mauvaise formulation de l’objet." /></span>
							<label for="f12a2p3" class="form-control">d’une mauvaise formulation de l’objet.</label></div>
						</div>
					</div> 
				</div>
		
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Complétez le message suivant en choisissant la forme verbale appropriée.</i></p>
		
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
					<p><strong>Objet:</strong> J'ai besoin de ton aide.</p>
					<div class="list-group-item">
						<p><strong>De :</strong>
						<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							<strong>À : </strong> Karim (karim.kh@gmail.com)
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Salut Karim,<br/>

					Comment ça va ? J’espère que tout va bien pour toi.<br/>
					
					En fait, je voulais te parler de mes problèmes.<br/>
					
					Je t’ai déjà dit que je
					<select name="f12a3q1" id="f12a3q1" class="form-control inline-form-control">
						<option value="" id="f12a3q1p0"></option>
						<option value="voudrai" id="f12a3q1p1">voudrai</option>
						<option value="voudrais" id="f12a3q1p2">voudrais</option>
					</select>
					acheter un véhicule. J’ai passé commande et c’était prévu que la livraison
					<select name="f12a3q2" id="f12a3q2" class="form-control inline-form-control">
						<option value="" id="f12a3q2p0"></option>
						<option value="se ferait" id="f12a3q2p1">se ferait</option>
						<option value="se fera" id="f12a3q2p2">se fera</option>
					</select>
					la semaine passée. Mais, on m’a informé qu’on ne
					<select name="f12a3q3" id="f12a3q3" class="form-control inline-form-control">
						<option value="" id="f12a3q3p0"></option>
						<option value="pourra" id="f12a3q3p1">pourra</option>
						<option value="pourrait" id="f12a3q3p2">pourrait</option>
					</select>
					pas me livrer le véhicule comme prévu.<br/>
					
					En fait, normalement je dois bénéficier d’une réduction à cause de ce retard. Mais un collègue m’a prévenu qu’il ne
					<select name="f12a3q4" id="f12a3q4" class="form-control inline-form-control">
						<option value="" id="f12a3q4p0"></option>
						<option value="faudra" id="f12a3q4p1">faudra</option>
						<option value="faudrait" id="f12a3q4p2">faudrait</option>
					</select>
					pas trop y compter. Selon lui, plusieurs clients comme moi ont reçu la garantie qu’ils
					<select name="f12a3q5" id="f12a3q5" class="form-control inline-form-control">
						<option value="" id="f12a3q5p0"></option>
						<option value="bénéficient" id="f12a3q5p1">bénéficient</option>
						<option value="bénéficieraient" id="f12a3q5p2">bénéficieraient</option>
					</select>
					d’une réduction en cas de problème. Cela ne s’est jamais fait.<br/>
					
					Tu vois dans quel état je suis. J’espère que tu pourras me donner quelques idées pour m’en sortir.<br/>
										
					Je te souhaite une bonne journée.<br/>
					
					Bien à toi.<br/>
					
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
		  