<!doctype html>
<html>
    <head>
		<title>Fiche 18 | Formation de l'Institut Français Algérie</title>
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
		<link rel="shortcut icon" type="image/x-icon" href="http://www.if-algerie.com/favicon.ico">
		<link rel="apple-touch-icon" href="http://www.if-algerie.com/touch_icon.png">
		<style> body { padding-top: 50px; } </style>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
        <a class="navbar-brand" href="#">FICHE 18</a>
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
				<h2>FICHE N°18</h2>
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
		
				<p id="sujet" class="recoi">M.RAÏS remercie le service commercial.</p>
                <h3 id="act1" class="activite">Activité 1</h3>
                <p><i>Le message ci-dessus de M.RAÏS comporte cinq erreurs. Identifiez-les en appuyant avec le curseur sur l’erreur.</i></p>
                
                <!-- FORMULAIRE A TRANSMETTRE -->
				 <form method="post" action="../corriges/corrige18.php">
                
                <!--BOITE MAIL-->

 			<div class="row">
			  <div class="col-md-9 col-md-offset-1">
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
					<p><strong>Objet:</strong> Re : re : excuses</p>
					<div class="list-group-item">
						<p><strong>De :</strong>
						<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							<strong>À : </strong> service.commercial@veh.dz
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>

										
					Je vous remercie <span class="erreur"><input type="checkbox" id="f18a1p1" name="f18a1p1" /><label for="f18a1p1">de</label></span> votre message. En effet, la commande a bien été <span class="erreur"><input type="checkbox" id="f18a1p2" name="f18a1p2" /><label for="f18a1p2">rectifiée</label></span> par vos services.<br/>
                    J’ai donc pu <span class="erreur"><input type="checkbox" id="f18a1p3" name="f18a1p3" /><label for="f18a1p3">récupéré</label></span> les clés de ma voiture CLS 2000 et j’en suis énormément <span class="erreur"><input type="checkbox" id="f18a1p4" name="f18a1p4" /><label for="f18a1p4">satisfais.</label></span><br/>
                    Je tiens encore une fois <span class="erreur"><input type="checkbox" id="f18a1p5" name="f18a1p5" /><label for="f18a1p5">de</label></span> vous remercier pour votre attention et votre suivi.<br/>
			
					Mes salutations distinguées.<br/>
					
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
				</div></div>
				<!--FIN BOITE MAIL -->
		
		 		<p class="recoi">Le service commercial Veh Motors propose à M.RAÏS une gamme d’offres Service après vente</p>
                
                
		<!--BOITE MAIL-->
 		<div class="row">
			  <div class="col-md-9 col-md-offset-1">
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
					<p><strong>Objet:</strong> offres SAV Veh Motors</p>
					<div class="list-group-item">
						<p><strong>De :</strong> service.commercial@veh.dz
							<span><strong>À : </strong>
							<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							</span><br/>
							<strong>Envoyé :</strong> jeu. 30/04/15 08:19
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Cher client, </p>
					
                    <p>Vous nous avez fait confiance par votre achat du véhicule CLS 2000.<br/>
                    Notre société vous récompensera en vous proposant toute une gamme d’offres de services après vente qui vous permettront d’entretenir à moindre coût votre voiture.<br/>
                    En effet, pour conserver les qualités d’origine de votre voiture, nous mettons à votre disposition toute une série de services :<br/>
                    <ul><li>Garantie</li>
                    <li>Entretien</li>
                    <li>Réparation</li></ul></p>
                    
                    <p>Nos experts vous garantissent un service de qualité et cela, dans n’importe quel garage Veh Motors.<br/>
                    A cet effet, nous vous informons qu’en tant que client de Veh, vous bénéficierez d’une réduction de 10% sur tous nos services après vente.<br/>
                    Par ailleurs, nous vous avisons qu’en cas d’accident, les textes de lois vous permettent de choisir librement votre réparateur, agréé ou non par votre agence d’assurance.</p>
                    <p>Nous restons à votre entière disposition pour tout complément d’informations.<br/>
                    Nous vous remercions par avance pour votre fidélité.</p>
					
					<p>Salutations distinguées.<br/>
					Service commercial Veh Motors.</p>
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
</div></div>
				<!--FIN BOITE MAIL -->
                
        <h3 id="act2" class="activite">Activité 2</h3>
		<p><i>Lisez le message ci-dessus et cochez la bonne réponse.</i></p>
        
        <div class="well">
        
        <div class="row">
	<div class="col-lg-12 col-xs-12">
		<p class="label-info label_activite">Veh Motors cherche essentiellement à:</p>
	</div>
	<div class="col-sm-4 col-xs-12">
		<input type="radio" class="hidden" value="vous n'avez pas répondu" checked="checked" />
		<div class="input-group">
        	<span class="input-group-addon">
            	<input type="radio" id="f18a2q1p1" name="f18a2q1" value="Remercier M.RAÏS d’avoir acheté le véhicule CLS 2000." />
            </span>
            <label for="f18a2q1p1" class="form-control">Remercier M.RAÏS d’avoir acheté le véhicule CLS 2000.</label>
        </div>
	</div>
	<div class="col-sm-4 col-xs-12">
		<div class="input-group">
        	<span class="input-group-addon">
            	<input type="radio" id="f18a2q1p2" name="f18a2q1" value="Proposer à M.RAÏS les services après vente (SAV)." />
           	</span>
            <label for="f18a2q1p2" class="form-control">Proposer à M.RAÏS les services après vente (SAV).</label>
     	</div>
	</div>
	<div class="col-sm-4 col-xs-12">
		<div class="input-group">
        	<span class="input-group-addon">
            	<input type="radio" id="f18a2q1p3" name="f18a2q1" value="Faire à M.RAÏS une réduction sur les offres SAV." />
          	</span>
            <label for="f18a2q1p3" class="form-control">Faire à M.RAÏS une réduction sur les offres SAV.</label>
     	</div>
	</div>
</div>
</div>
<h3 id="act3" class="activite">Activité 3</h3>

        <p><i>Observez l’exemple ci-dessus et complétez les phrases ci-dessous :</i></p>
        <p><i>Exemple :</i> Notre société vous récompensera et vous proposera toute une gamme d’offres de services après vente.<br/>
        Notre société vous récompensera <strong>en</strong> vous <strong>proposant</strong> toute une gamme d’offres de services après vente.</p>
        <p>La forme « en proposant » permet d’exprimer ici la manière avec laquelle la société Veh récompensera M.RAÏS. Cette forme est appelée « gérondif » en français.</p>
	
    <div class="well">
    <p>a. M.RAÏS a récupéré sa voiture et a salué le service commercial VEH.<br/>
    M.RAÏS a récupéré son voiture <strong>en <input type="text" id="f18a3qa" class="form-control inline-form-control" name="f18a3qa" size="10" maxlength="20" /></strong>le service commercial VEH.</p>
    
    <p>b. Veh Motors propose à M.RAÏS toute une gamme de services après vente et l’informe de la possibilité de choisir un autre réparateur.<br/>
    Veh Motors propose à M.RAÏS toute une gamme de services après vente <strong>en</strong> l’<strong><input type="text" id="f18a3qb" class="form-control inline-form-control" name="f18a3qb" size="10" maxlength="20" /></strong>de la possibilité de choisir un autre réparateur.</p>
    
    <p>c. Le Service après vente garantit un entretien de la voiture et lui conserve sa qualité d’origine.<br/>
    Le Service après vente garantit un entretien de la voiture <strong>en</strong> lui<strong><input type="text" id="f18a3qc" class="form-control inline-form-control" name="f18a3qc" size="10" maxlength="20" /></strong>sa qualité d’origine.</p>
    
    <p>d. En cas d’accident, Veh réparera le véhicule de M.RAÏS et le laissera libre de choisir un autre réparateur.<br/>
   En cas d’accident, Veh réparera le véhicule de M.RAÏS <strong>en</strong> le <strong><input type="text" id="f18a3qd" class="form-control inline-form-control" name="f18a3qd" size="10" maxlength="20" /></strong>libre de choisir un autre réparateur.</p>
    
    </div>				
                    
                    
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
		  		  