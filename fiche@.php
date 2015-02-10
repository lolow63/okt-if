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

		</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
		<!--NAVBAR-TOPFIX-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-scrollspy">
          <span class="sr-only">Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">FICHE @</a>
      </div>
      <div class="collapse navbar-collapse js-navbar-scrollspy">
        <ul class="nav navbar-nav">
          <li class=""><a href="#sujet">SUJET</a></li>
          <li class=""><a href="#act1">ACTIVITÉ 1</a></li>
		  <li class=""><a href="#act2">ACTIVITÉ 2</a></li>
          <li class=""><a href="#act3">ACTIVITÉ 3</a></li>
		  <li class=""><a href="#act4">ACTIVITÉ 4</a></li>
		  <li class=""><a href="#act5">ACTIVITÉ 5</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap fa-lg"></i><b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
							
				
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
									  <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Partie 1
										  </a>
										</h4>
									  </div>
									  <div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
							<li><a href="fiche1.php">Fiche 1</a></li>
                            <li><a href="construction.php">Fiche 2</a></li>
                            <li><a href="construction.php">Fiche 3</a></li>
                            <li><a href="construction.php">Fiche 4</a></li>
							<li><a href="construction.php">Fiche 5</a></li>
							<li><a href="construction.php">Fiche 6</a></li>
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Partie 2
										  </a>
										</h4>
									  </div>
									<div id="collapseTwo" class="panel-collapse collapse in">
										<div class="panel-body">
							<li><a href="construction.php">Fiche 7</a></li>
                            <li><a href="construction.php">Fiche 8</a></li>
                            <li><a href="construction.php">Fiche 9</a></li>
                            <li><a href="construction.php">Fiche 10</a></li>
							<li><a href="construction.php">Fiche 11</a></li>
							<li><a href="construction.php">Fiche 12</a></li>
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Partie 3
										  </a>
										</h4>
									  </div>
									<div id="collapseThree" class="panel-collapse collapse in">
										<div class="panel-body">
							<li><a href="construction.php">Fiche 13</a></li>
                            <li><a href="construction.php">Fiche 14</a></li>
                            <li><a href="construction.php">Fiche 15</a></li>
                            <li><a href="construction.php">Fiche 16</a></li>
							<li><a href="construction.php">Fiche 17</a></li>
							<li><a href="construction.php">Fiche 18</a></li>
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											Partie 4
										  </a>
										</h4>
									  </div>
									<div id="collapseFour" class="panel-collapse collapse in">
										<div class="panel-body">
							<li><a href="#">construction.php</a></li>
                            <li><a href="#">construction.php</a></li>
                            <li><a href="#">construction.php</a></li>
                            <li><a href="#">construction.php</a></li>
							<li><a href="#">construction.php</a></li>
							<li><a href="#">construction.php</a></li>
										</div>
									</div>
								</div>
							</div>
							
            </ul>
          </li>
							<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home fa-lg"></i><b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
							<li><a href="index.php">Accueil</a></li>
							<li class="divider"></li>
							<li><a href="construction.php">Mon compte</a></li>
							<li class="divider"></li>
							<li><a href="construction.php">Mes notes</a></li>
			</ul>
							</li>
        </ul>
      </div>
    </div>
  </nav>
<!--FIN BARRE DE NAVIGATION TOP-FIXE-->
			<?php include("include/header-login.php");?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h2>FICHE N°@</h2>
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
		
		
		
		
		
		
		
		
					
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer>
			<?php include("include/footer.php"); ?> 
		</footer>
			<!-- JavaScript Includes -->
		<!-- JavaScript Sortable -->
		<script type="text/javascript">
			$(document).ready(function(){
				var group = $("ol.phrases").sortable({
					group: 'phrases',

				onDrop: function (item, container, _super) {
					$('#ordre').val(group.sortable("serialize").get().join())
					_super(item, container)
					},
				serialize: function (parent, children, isContainer) {
					return isContainer ? children.join() : parent.val()
					},
				})
			})
		</script type="text/javascript">
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
		  