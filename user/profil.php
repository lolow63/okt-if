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
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>/* Styles Affix */.affixed-element-top.affix {top: 0px;z-index:1000;width:100%;} </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header class="visible-xs">
		
		 <div class="header js-page-header">
				<div class=container>
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
				  <li><a href="#info">MES INFOS</a></li>
				  <li><a href="#notes">MES NOTES</a></li>
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
		
			
			<section id="info" class="well col-xs-12 col-md-7">
				<div class="form-horizontal">
					<h1 class="activite">MES INFOS<span class="pull-right fa fa-list"></span></h1>
					<fieldset>
						<div class="list-group-item">
							<legend class="">NOM Prénom</legend>
							
							<div class="list-group-item active">
								<div class="row">
									<div class="label col-xs-12 col-sm-4">
										Adresse électronique:
									</div>	
									<div class="col-xs-12 col-sm-8">
										<div class="badge">exemple@gmail.com</div>
									</div>	
                                </div>
							</div>
							
							<div class="list-group-item active">
								<div class="row">
									<div class="label col-xs-12 col-sm-4">
										Pays:
									</div>	
									<div class="col-xs-12 col-sm-8">
										<div class="badge">Algérie</div>
									</div>	
                                </div>
							</div>

							<div class="list-group-item active">
								<div class="row">
									<div class="label col-xs-12 col-sm-4">
										Wilaya:
									</div>	
									<div class="col-xs-12 col-sm-8">
										<div class="badge">Tiaret</div>
									</div>	
                                </div>
							</div>
							
							<div class="list-group-item active">
								<div class="row">
									<div class="label col-xs-12 col-sm-4">
										Catégorie socio-professionnelle
									</div>	
									<div class="col-xs-12 col-sm-8">
										<div class="badge">Personnel des services aux particuliers</div>
									</div>	
                                </div>
							</div>
							
							<div class="list-group-item active">
								<div class="row">
									<div class="label col-xs-12 col-sm-4">
										Date de naissance
									</div>	
									<div class="col-xs-12 col-sm-8">
										<div class="badge">14/12/1979</div>
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
						</div>
					</fieldset>
				</div>
				
			</section>
			<section id="notes" class="well col-xs-12 col-md-offset-1 col-md-4">
			  <h1 class="activite">MES NOTES <span class="pull-right fa fa-bar-chart"></span></h1>
				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						  Partie 1
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
					  <ul class="panel-body vertical text-center">
						<li>Fiche 1:100 %<br/>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
							</div>
							<a href="fiche1.php" class="btn btn-xs btn-info"><span class="fa fa-pencil"></span> Refaire la fiche</a>
					    </li>
						<li>Fiche 2: 80 %<br/>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
							</div>
							<div class="btn btn-xs btn-primary">Refaire la fiche</div>
						</li>
						<li>Fiche 3: 45 %
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:45%"></div>
							</div>
							<div class="btn btn-xs btn-primary">Refaire la fiche</div>
						</li>
						<li>Fiche 4: 55 %
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:55%"></div>
							</div>
							<div class="btn btn-xs btn-primary">Refaire la fiche</div>
						</li>
						<li>Fiche 5 : 15 %
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:15%"></div>
							</div>
							<div class="btn btn-xs btn-primary">Refaire la fiche</div>
						</li>
						<li>Fiche 6 : <a class="btn btn-default" href="">Commencer la fiche</a></li>
					  </ul>
					</div>
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						  Partie 2
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
					  <ul class="panel-body vertical">
						<li>Fiche 7</li>
						<li>Fiche 8</li>
						<li>Fiche 9</li>
						<li>Fiche 10</li>
						<li>Fiche 11</li>
						<li>Fiche 12</li>
					   </ul>
					 </div>
					 <div class="panel-heading">
					   <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						  Partie 3
						</a>
					   </h4>
					  </div>
					  <div id="collapseThree" class="panel-collapse collapse">
						<ul class="panel-body vertical">
						  <li>Fiche 13</li>
						  <li>Fiche 14</li>
						  <li>Fiche 15</li>
						  <li>Fiche 16</li>
						  <li>Fiche 17</li>
						  <li>Fiche 18</li>
						 </ul>
					   </div>
					  <div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							  Partie 4
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
						  <ul class="panel-body vertical">
							<li>Fiche 19</li>
							<li>Fiche 20</li>
							<li>Fiche 21</li>
							<li>Fiche 22</li>
							<li>Fiche 23</li>
							<li>Fiche 24</li>
						   </ul>
						 </div>
					   </div>
					</div>
					
					<a class="btn btn-success btn-md pull-right">
					<i class="fa fa-mortar-board"> </i> Obtenir mon certificat</a><br/><br/>
									
			</section>
		</div>
		<footer class="js-footer">
		  <?php include("../include/user/footer.php"); ?>
		</footer>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
        <script src="../js/jqBootstrapValidation.js"></script>	
    </body>
</html>
       		