<!doctype html>
<html lang="fr">
    <head>
		<title>Institut Français Algérie | Accueil</title>
        <meta charset="utf-8">
		<meta name="robots" content="all">
        <meta name="description" content="Accueil L'institut Français d'Algérie vous propose d'améliorer votre rédaction de courriels professionnels.">
		<meta name="keywords" content="Institut Français d'Algérie, cours, informatique, boite mail, formation gratuite, certification, français, professionnels, apprendre, rédiger, mail"> 
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
			<?php include("include/index/header-login.php");
			include("include/index/subheader-login.php");
			?>
		</header>
		<!--SNIPET MODAL JAVASCRIPT-->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title" id="myModalLabel">Exemple de certification</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
						<img src="img/Certification.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL JAVASCRIPT-->
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h4 class="hometitle"><i class="fa fa-lightbulb-o"></i> POURQUOI CETTE FORMATION?</h4>
				<p class=" alinea justif">Pour un professionnel, il est essentiel d'avoir une communication claire et respectueuse des conventions d'usage. Nous 
				allons vous guider, séance après séance, pas à pas, vers une méthode qui facilitera vos échanges au quotidien et améliorera vos rédactions de 
				courriels. Si vous obtenez la moyenne à l'issue de cette formation, 
				vous recevrez une certification.<a class="modal-title" data-toggle="modal" data-target="#myModal"><strong>Voir un exemple de certification.
				</strong></a></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h4 class="hometitle"><i class="fa fa-cogs"></i> COMMENT SE DÉROULE-T-ELLE?</h4>
				<p class="alinea justif">La formation est divisée en vingt-quatre fiches, afin de vous proposer des séances de courte durée,d'environ une 
				vingtaine de minutes. Ainsi, vous pourrez suivre cet enseignement à chaque temps libre de votre journée de travail. Depuis votre bureau, chez 
				vous, vous accéderez au site et améliorerez progressivement vos performances, et ceci, à votre rythme.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h4 class="hometitle"><i class="fa fa-gift"></i> C'EST LIBRE ET GRATUIT!</h4>
				<p class="alinea justif">Vous pouvez dès à présent commencer la formation. Inscrivez-vous gratuitement, en renseignant les informations de la 
				fiche d'inscription. Ce n'est pas obligatoire mais c'est un plus ! Vos informations nous permettront d'améliorer les prochaines formations grâce 
				à votre retour d'expérience et vous informer quand celles-ci seront disponibles.</p>
			</div>
		</div>
		<hr>
		<footer>
			<?php include("include/index/footer.php"); ?>
		</footer>
		<!-- JavaScript Includes -->
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<!-- JavaScript Test -->
		<script>
		$(function () {
		  $('.js-popover').popover()
		  $('.js-tooltip').tooltip()
		})
		</script>
    </body>
</html>