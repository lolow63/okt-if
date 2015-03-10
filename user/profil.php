<!doctype html>
<html lang="fr">
    <head>
		<title>Institut Français | Algérie</title>
        <meta charset="utf-8">
		<meta name="robots" content="all">
        <meta name="description" content="Profil">
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
		<link rel="shortcut icon" type="image/x-icon" href="http://www.if-algerie.com/favicon.ico">
		<link rel="apple-touch-icon" href="http://www.if-algerie.com/touch_icon.png">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>/* Styles Affix */.affixed-element-top.affix {top: 0px;z-index:1000;width:100%;} </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header class="visible-xs">
			<div class="header js-page-header">
				<div class="container">
					<div class="topheader col-xs-12">
					  <img src="../img/logoifa.jpg" alt="" class="toplogo-xs">
					  <h2 class="toptitle-xs">FORMATION DE FRANÇAIS EN LIGNE</h2>
					</div>
				  </div>
			</div>
			<!--BARRE DE NAVIGATION TOP-FIXE-->
			<nav class="affixed-element-top" data-spy="affix" data-offset-top="190" data-offset-bottom="200">
				<div class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-scrollspy"> 
							<span class="sr-only">Navigation</span> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span></button>
							<a class="navbar-brand" href="#">MON PROFIL</a>
						</div>
						<div class="collapse navbar-collapse js-navbar-scrollspy">
							<ul class="nav navbar-nav">
							  <li><a href="#notes">MES NOTES</a></li>
							  <li><a href="#info">MES INFOS</a></li>
							  <li><a href="../index.php">ACCUEIL</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		    <!--FIN BARRE DE NAVIGATION TOP-FIXE-->
		</header>
		<header class="hidden-xs">
			<?php include("../include/user/header-profil.php");?>
		</header>
		<div class="container js-content">
			<hr/>
			<section id="notes" class="well col-xs-12 col-md-6">
				<h2 class="activite">MES NOTES <span class="pull-right fa fa-bar-chart"></span></h2>
				<hr/>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#partie1">
							  Partie 1
							</a>
						  </h4>
						</div>
						<div id="partie1" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="list-group-item">
									<p class="text-success">Fiche 1<span class="label label-success pull-right">100 %</span></p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
									</div>
									<div class="text-right">
										<a href="../fiches/fiche1.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
									</div>
								</div>
								<div class="list-group-item">
									<p class="text-success">Fiche 2<span class="label label-success pull-right">80 %</span></p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
									</div>
									<div class="text-right">
										<a href="../fiches/fiche2.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
									</div>
								</div>
								<div class="list-group-item">
								<p class="text-warning">Fiche 3<span class="label label-warning pull-right">45 %</span></p>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:45%"></div>
									</div>
									<div class="text-right">
										<a href="../fiches/fiche3.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
									</div>
								</div>
								<div class="list-group-item">
								<p class="text-success">Fiche 4<span class="label label-success pull-right">55 %</span></p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:55%"></div>
									</div>
									<div class="text-right">
										<a href="../fiches/fiche4.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
									</div>
								</div>
								<div class="list-group-item">
								<p class="text-danger">Fiche 5<span class="label label-danger pull-right">15 %</span></p>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:15%"></div>
									</div>
									<div class="text-right">
										<a href="../fiches/fiche5.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
									</div>
								</div>
								<div class="list-group-item">
									<p>Fiche 6 
									<div class="text-right">
										<a class="btn btn-success" href="../fiches/fiche6.php">Commencer la fiche</a></li></p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#partie2">
								  Partie 2
								</a>
							</h4>
						</div>
						<div id="partie2" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="list-group-item"><p>Fiche 7</p></div>
								<div class="list-group-item"><p>Fiche 8</p></div>
								<div class="list-group-item"><p>Fiche 9</p></div>
								<div class="list-group-item"><p>Fiche 10</p></div>
								<div class="list-group-item"><p>Fiche 11</p></div>
								<div class="list-group-item"><p>Fiche 12</p></div>
							</div>
						</div>
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#partie3">
								  Partie 3
								</a>
							</h4>
						</div>
						<div id="partie3" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="list-group-item"><p>Fiche 13</p></div>
								<div class="list-group-item"><p>Fiche 14</p></div>
								<div class="list-group-item"><p>Fiche 15</p></div>
								<div class="list-group-item"><p>Fiche 16</p></div>
								<div class="list-group-item"><p>Fiche 17</p></div>
								<div class="list-group-item"><p>Fiche 18</p></div>
							</div>
						</div>
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#partie4">
								  Partie 4
								</a>
							</h4>
						</div>
						<div id="partie4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="list-group-item"><p>Fiche 19</p></div>
								<div class="list-group-item"><p>Fiche 20</p></div>
								<div class="list-group-item"><p>Fiche 21</p></div>
								<div class="list-group-item"><p>Fiche 22</p></div>
								<div class="list-group-item"><p>Fiche 23</p></div>
								<div class="list-group-item"><p>Fiche 24</p></div>
							</div>
						 </div>
					</div>
				</div>
				<hr/>
				<a class="btn btn-success btn-md pull-right">
				<i class="fa fa-mortar-board"> </i> Obtenir mon certificat</a><br/><br/>
			</section>
			<section id="info" class="well col-xs-12 col-md-offset-1 col-md-5">
				<h2 class="activite">MES INFOS<span class="pull-right fa fa-list"></span></h2>
				<hr/>
				<div class="list-group-item">
					<h3 class="remarque">NOM Prénom</h3>
				</div>	
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-6">
							Adresse électronique:
						</div>	
						<div class="col-xs-6">
							<div class="text-right"><strong>exemple@gmail.com</strong></div>
						</div>	
					</div>
				</div>
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-6">
							Pays:
						</div>	
						<div class="col-xs-6">
							<div class="text-right"><strong>Algérie</strong></div>
						</div>	
					</div>
				</div>
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-6">
							Wilaya:
						</div>	
						<div class="col-xs-6">
							<div class="text-right"><strong>Tiaret</strong></div>
						</div>	
					</div>
				</div>
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-6">
							Catégorie socio-professionnelle:
						</div>	
						<div class="col-xs-6">
							<div class="text-right"><strong>Employé administratifs d'entreprise</strong></div>
						</div>	
					</div>
				</div>
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-6">
							Date de naissance
						</div>	
						<div class="col-xs-6">
							<div class="text-right"><strong>14/12/1979</strong></div>
						</div>	
					</div>
				</div>						
				<hr/>
				<!--Insertion de la page info-profi.php-->
				<a class="btn btn-primary btn-md pull-right" href="info-profil.php" data-toggle="modal" data-backdrop="static" data-target="#ModalFormProfil">
				<i class="fa fa-spin fa-gear"> </i> Modifier</a><br/><br/>
				<div class="modal fade" id="ModalFormProfil">
					<div class="modal-dialog">
						<div class="modal-content"></div>
					</div>
				</div>
			</section>			
		</div>
		<footer class="js-footer">
		  <?php include("../include/user/footer.php"); ?>
		</footer>
		<!-- JavaScript Includes -->
		<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jqBootstrapValidation.js"></script>	
		<!--Script JqBootstrapValidation-->
		<script>
		  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
		</script>
		<!--script pour cacher le champs wilaya pour autre pays qu'Algérie-->
		<script>
		$(document).ready(function() {
			

			$("#pays").change(function() {
				if ( $("#pays").val() == "Algérie"){
				$("#Wilaya").show();
				}
				else{
				$("#Wilaya").hide();
				}
				});
				
			if ( $("#pays").val() == "Algérie"){
			$("#Wilaya").show();
			}
		});
		</script>
    </body>
</html>
       		