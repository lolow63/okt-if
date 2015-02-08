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
			<?php include("include/navbar-topfix-1.php");
			include("include/header-login.php");
			?>
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
		</script>
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
		  