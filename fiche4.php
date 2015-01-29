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
				<h2>FICHE N°4</h2>
				<div class="row">
					<div class="text-center well encadre col-xs-12 col-sm-offset-4 col-sm-4 col-sm-offset-4">
						<h3 class="activite">Thème</h3>
						<h3 class="remarque">@</h3>
					</div>
					<div class="text-center well encadre col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1">
						<ul class="list-unstyled"><h3 class="activite">Objectifs</h3>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
							<li class="remarque"><span class="fa fa-angle-double-right"></span>@</li>
						</ul>
					</div>
				</div>
		
				<p class="recoi" id="sujet">Mohammed RAÏS décide d’écrire à son chef de service :</p>
				
				<p>La société refuse la demande de Mohammed. Il écrit alors un mail à Rachid Hamdi, son collègue de travail, 
				pour lui demander conseil. Celui-ci lui suggère de s’adresser au responsable du comité des oeuvres sociales de l’entreprise :
				</p>
		
				<!--BOITE MAIL-->
				<div class="list-group-item">
					<div style="float:right"> 
						<a class="btn btn-info" href="#" title="Accès à votre boite de réception">
						<i class="fa fa-envelope-o fa-lg"></i> Boite de réception</a>

						<a class="btn btn-primary" href="#" title="Afficher les messages non lus">
						<i class="fa fa-envelope fa-lg"></i> Non lus </a>

						<a href="#" title="Répondre">
						<i class="fa fa-reply fa-lg"></i></a>

						<a href="#" title="Répondre à tous">
						<i class="fa fa-reply-all fa-lg"></i></a>

						<a href="#" title="Faire suivre à vos contacts">
						<i class="fa fa-share fa-lg"></i></a>

						<a href="#" title="Imprimer">
						<i class="fa fa-print fa-lg"></i></a>
					</div>
					<p><strong>Objet:</strong> Re : re : sollicitation pour crédit</p>
					<div class="list-group-item">
						<p><strong>De :</strong> Rachid HAMDI (rach.hamdi@fargo.dz)
							<span><strong>À : </strong>
								<a class="btn btn-primary btn-xs" href="#" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							</span></br>
							<strong>Envoyé :</strong> dim. 02/04/15 10:45
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour Mohammed, </br>

					Je te remercie pour ton message. En fait, je comprends parfaitement tes soucis de déplacement 
					et je t’encourage vivement à avancer dans ce projet.</br>
					Tu peux bien demander un crédit auprès du comité des oeuvres sociales de notre société. Pour cela,
					je te conseille d’écrire au chef du comité qui pourra te fournir tous les détails nécessaires concernant 
					ta demande de crédit.</br>
					Je te prie de m’informer de la réponse du comité.</br>
					Bien à toi</br>
					Rachid.</p>
				</div>
				<div class="list-group-item">
					<a class="btn btn-primary" href="#" title="Répondre">
					  <i class="fa fa-reply fa-lg"></i> Répondre</a>
					<a class="btn btn-info" href="#" title="Répondre à tous">
					  <i class="fa fa-reply-all fa-lg"></i> Répondre à tous</a>
					<a class="btn btn-info" href="#" title="Transférer">
					  <i class="fa fa-share fa-lg"></i> Transférer</a>
					<a class="btn btn-danger" href="#" title="Supprimer">
					  <i class="fa fa-trash-o fa-lg"></i> Supprimer</a>
				</div></br>
				<!--FIN BOITE MAIL -->
				
				 <!-- FORMULAIRE A TRANSMETTRE -->
				
				<form method="post" action="corrige4.php">
				
				<h3 id="act1" class="activite">Activité 1</h3>
				<p><i>Parmi les messages suivants, lequel vous semble le plus poli ?</i></p>
				
				<div class="row">  
					<div class="col-md-4 col-xs-12">
					<input type="radio" style='visibility:hidden;display:none' name="f4a1" value="Vous n'avez pas répondu"  checked="checked"/>
						   <div class="input-group">
							<span class="input-group-addon">                                     
							<input type="radio" name="f4a1" id="f4a1p1" value="On lui propose une brochure" />
						</span><label for="f4a1p1" class="form-control">
						Bonjour,</br> 
						Pouvez-vous, Monsieur Khadraoui, m’informer sur les possibilités d’avoir un crédit. </br> 
						En fait, je veux acheter une auto et je n’ai pas les moyens qu’il faut.</br> 
						Merci	
						</label></div></div>
					<div class="col-md-4 col-xs-12"><div class=" input-group">
							<span class="input-group-addon">
							<input type="radio" name="f4a1" id="f4a1p2" value="On lui fait une proposition commerciale" />
						</span><label for="f4a1p2" class="2 form-control">
						Salut Khadraoui,</br> 
						Est-ce qu’il y a une possibilité de crédit bancaire dans notre société ? </br> 
						On m’a dit que le comité en a déjà donné, pourquoi pas moi ? </br> 
						J’ai aussi droit puisque je travaille depuis 5 ans dans cette entreprise ?</br> 
						Je vous remercie.
						</label></div></div>
					<div class="col-md-4 col-xs-12"><div class="input-group">
							<span class="input-group-addon">
							<input type="radio" name="f4a1" id="f4a1p3" value="On lui indique qu'un conseiller commercial va le contacter" />
						</span><label for="f4a1p3" class="2 form-control">
						Bonjour,</br> 
						Avant de m’engager dans l’achat d’un véhicule, je me permets de vous demander de bien vouloir m’informer sur les possibilités 
						d’obtenir un crédit auprès de votre comité.</br> 
						Je vous remercie par avance de votre retour.</br> 
						Meilleures salutations.
						Mohammed RAÏS
						</label></div></div>
			</div> 
				
				
				
				
				<h3 id="act2" class="activite">Activité 2</h3>
				<p><i>Utilisez à bon escient « qui », « que », « dont », « où » :</i></p>
				
				<div>
					Suite au message
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="vous n'avez pas répondu"> </option>
						<option VALUE="f4a2q1qui">qui</option>
						<option VALUE="f4a2q1que">que</option>     	                                            
						<option VALUE="f4a2q1dont">dont</option>
						<option VALUE="f4a2q1ou">où</option>
					</select>
					vous nous avez adressé, je vous prie de trouver ci-joint le document demandé.
				</div>
				<div>
					Les produits
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="vous n'avez pas répondu"> </option>
						<option VALUE="f4a2q2qui">qui</option>
						<option VALUE="f4a2q2que">que</option>     	                                            
						<option VALUE="f4a2q2dont">dont</option>
						<option VALUE="f4a2q2ou">où</option>
					</select>
					vous avez fait la commande vont vous être livrés très prochainement.
				</div>
				<div>
					Mohammed RAÏS
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="vous n'avez pas répondu"> </option>
						<option VALUE="f4a2q3qui">qui</option>
						<option VALUE="f4a2q3que">que</option>     	                                            
						<option VALUE="f4a2q3dont">dont</option>
						<option VALUE="f4a2q3ou">où</option>
					</select>
					est employé chez FARGO. Mohammed RAÏS cherche à obtenir un crédit bancaire.
				</div>
				<div>
					FARGO
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="vous n'avez pas répondu"> </option>
						<option VALUE="f4a2q4qui">qui</option>
						<option VALUE="f4a2q4que">que</option>     	                                            
						<option VALUE="f4a2q4dont">dont</option>
						<option VALUE="f4a2q4ou">où</option>
					</select>
					travaille Mohammed RAÏS est une entreprise de maintenance et de commercialisation de produits frigorifiques.
				</div>
					
				
					
		
		
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Complétez ces deux messages :</i></p>
				
				<!--BOITE MAIL-->
				<div class="list-group-item">
					<div style="float:right"> 
						<a class="btn btn-info" href="#" title="Accès à votre boite de réception">
						<i class="fa fa-envelope-o fa-lg"></i> Boite de réception</a>

						<a class="btn btn-primary" href="#" title="Afficher les messages non lus">
						<i class="fa fa-envelope fa-lg"></i> Non lus </a>

						<a href="#" title="Répondre">
						<i class="fa fa-reply fa-lg"></i></a>

						<a href="#" title="Répondre à tous">
						<i class="fa fa-reply-all fa-lg"></i></a>

						<a href="#" title="Faire suivre à vos contacts">
						<i class="fa fa-share fa-lg"></i></a>

						<a href="#" title="Imprimer">
						<i class="fa fa-print fa-lg"></i></a>
					</div>
					<p><strong>Objet:</strong> Demande de renseignement</p>
					<div class="list-group-item">
						<p><strong>De :</strong>
							<span><a class="btn btn-primary btn-xs" href="#" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							</span>
							<strong>À : </strong>Salim KHADRAOUI (sal.khadraoui@fargo.dz)
								</br>
							<strong>Envoyé :</strong> dim. 02/04/15 14:17
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, </br>

					Je vous
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q1none"> </option>
						<option VALUE="f4a3q1p1">prie</option>
						<option VALUE="f4a3q1p2">sollicite </option>     	                                            
						<option VALUE="f4a3q1p3">demande</option>
					</select>
					de bien vouloir me
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q2none"> </option>
						<option VALUE="f4a3q2p1">renseigner</option>
						<option VALUE="f4a3q2p2">informer</option>     	                                            
						<option VALUE="f4a3q2p3">éclairer</option>
					</select>
					sur les
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q3none"> </option>
						<option VALUE="f4a3q3p1">possibilités</option>
						<option VALUE="f4a3q3p2">occasions</option>     	                                            
						<option VALUE="f4a3q3p3">capacités</option>
					</select>
					d’obtenir un crédit bancaire
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q4none"> </option>
						<option VALUE="f4a3q4p1">chez</option>
						<option VALUE="f4a3q4p2">auprès</option>     	                                            
						<option VALUE="f4a3q4p3">dans</option>
					</select>
					de votre comité.</br>
					Je vous remercie par avance de votre
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q5none"> </option>
						<option VALUE="f4a3q5p1">réplique</option>
						<option VALUE="f4a3q5p2">attention</option>     	                                            
						<option VALUE="f4a3q5p3">retour</option>
					</select>
					</br>
					
					Salutations distinguées</br>
					
					Mohammed RAÏS</p>
				</div>
				<div class="list-group-item">
					<a class="btn btn-success" href="#" title="Envoyer">
					  <i class="fa fa-send fa-lg"></i> Envoyer</a>
					<a class="btn btn-info" href="#" title="Enregister dans Brouillons">
					  <i class="fa fa-save fa-lg"></i>  Enregister dans Brouillons</a>
					<a class="btn btn-danger" href="#" title="Annuler">
					  <i class="fa fa-trash-o fa-lg"></i> Annuler</a>
				</div></br>
				
				<!--FIN BOITE MAIL -->
				
				<!--BOITE MAIL-->
				<div class="list-group-item">
					<div style="float:right"> 
						<a class="btn btn-info" href="#" title="Accès à votre boite de réception">
						<i class="fa fa-envelope-o fa-lg"></i> Boite de réception</a>

						<a class="btn btn-primary" href="#" title="Afficher les messages non lus">
						<i class="fa fa-envelope fa-lg"></i> Non lus </a>

						<a href="#" title="Répondre">
						<i class="fa fa-reply fa-lg"></i></a>

						<a href="#" title="Répondre à tous">
						<i class="fa fa-reply-all fa-lg"></i></a>

						<a href="#" title="Faire suivre à vos contacts">
						<i class="fa fa-share fa-lg"></i></a>

						<a href="#" title="Imprimer">
						<i class="fa fa-print fa-lg"></i></a>
					</div>
					<p><strong>Objet:</strong> Re: Demande de renseignement</p>
					<div class="list-group-item">
						<p><strong>De :</strong>Salim KHADRAOUI (sal.khadraoui@fargo.dz)
							<strong>À : </strong>
							<span><a class="btn btn-primary btn-xs" href="#" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a>
							</span>
								</br>
							<strong>Envoyé :</strong> dim. 02/04/15 17:25
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, </br>

					Je vous
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q6none"> </option>
						<option VALUE="f4a3q6p1">remercie</option>
						<option VALUE="f4a3q6p2">félicite</option>     	                                            
						<option VALUE="f4a3q6p3">congratule</option>
					</select>
					pour votre message.</br>
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q7none"> </option>
						<option VALUE="f4a3q7p1">En effet</option>
						<option VALUE="f4a3q7p2">Par contre/</option>     	                                            
						<option VALUE="f4a3q7p3">Alors</option>
					</select>
					nous pouvons vous
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q8none"> </option>
						<option VALUE="f4a3q8p1">accorder</option>
						<option VALUE="f4a3q8p2">allouer</option>     	                                            
						<option VALUE="f4a3q8p3">donner</option>
					</select>
					un crédit.</br>
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q9none"> </option>
						<option VALUE="f4a3q9p1">Par conséquent</option>
						<option VALUE="f4a3q9p2">Surtout</option>     	                                            
						<option VALUE="f4a3q9p3">Toutefois </option>
					</select>
					nous devons, avant cela,
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q10none"> </option>
						<option VALUE="f4a3q10p1">contrôler</option>
						<option VALUE="f4a3q10p2">étudier</option>     	                                            
						<option VALUE="f4a3q10p3">vérifier</option>
					</select>
					votre solvabilité.</br>
					
					Nous restons à votre
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q11none"> </option>
						<option VALUE="f4a3q11p1">complète</option>
						<option VALUE="f4a3q11p2">totale</option>     	                                            
						<option VALUE="f4a3q11p3">entière</option>
					</select>
					disposition pour
					<select name="formap" class="form-control inline-form-control">
						<option VALUE="f4a3q12none"> </option>
						<option VALUE="f4a3q12p1">tout</option>
						<option VALUE="f4a3q12p2">n’importe</option>     	                                            
						<option VALUE="f4a3q12p3">certain</option>
					</select>
					complément d’information.</br>
				
					Salutations cordiales</br>
					
					Salim KHADRAOUI</p>
				</div>
				<div class="list-group-item">
					<a class="btn btn-primary" href="#" title="Répondre">
					  <i class="fa fa-reply fa-lg"></i> Répondre</a>
					<a class="btn btn-info" href="#" title="Répondre à tous">
					  <i class="fa fa-reply-all fa-lg"></i> Répondre à tous</a>
					<a class="btn btn-info" href="#" title="Transférer">
					  <i class="fa fa-share fa-lg"></i> Transférer</a>
					<a class="btn btn-danger" href="#" title="Supprimer">
					  <i class="fa fa-trash-o fa-lg"></i> Supprimer</a>
				</div></br>
				
				<!--FIN BOITE MAIL -->
				
			<button class="btn btn-success btn-md pull-right" type="submit" hidden="hidden">
				<i class="fa fa-check-circle"> </i> Voir le corrigé</button></br></br>
								
				   </form><!-- FIN FORMULAIRE -->
					
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
		  