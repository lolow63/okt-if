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
		<script src="js/transition.js"></script>
		<script src="js/modal.js"></script>
		<script src="js/tooltip.js"></script>
		<script src="js/popover.js"></script>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<header>
			<?php include("include/header-login.php");
			include("include/subheader-mail.php");
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
			<?php include("include/footer.php"); ?>
		</footer>
		
		<!-- JavaScript Test -->
		<script>
		$(function () {
		  $('.js-popover').popover()
		  $('.js-tooltip').tooltip()
		})
		</script>
    </body>
</html>