<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/dinot.css">
        <link rel="stylesheet" href="../css/fa/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
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
			<?php include("../include/fiches/navbar-topfix-2.php");
			include("../include/fiches/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h2>FICHE N°2</h2>
				<div class="row">
					<div class="text-center well encadre col-xs-12 col-sm-offset-4 col-sm-4 col-sm-offset-4">
						<h3 class="activite">Thème</h3>
						<h3 class="remarque">Mohammed souhaiterait bénéficier d’un crédit à la consommation.</h3>
					</div>
					<div class="text-center well encadre col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1">
						<h3 class="activite">Objectifs</h3>
						<ul class="list-unstyled">
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
							<li class=""><span class="fa fa-angle-double-right"></span>@</li>
						</ul>
					</div>
				</div>
				<p class="recoi">Mohammed rédige le message suivant :</p>
				<h3 id="act1" class="activite">Activité 1</h3>
				<p><i>Complétez son courriel avec les formules qui conviennent :</i></p>
				
				<!--BOITE MAIL-->
				 <!-- FORMULAIRE A TRANSMETTRE -->
				 <form method="post" action="../corriges/corrige2.php">
				 
				 
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
					<strong>Objet :</strong>
								<select name="f2a1q1" class="form-control inline-form-control">
									<option VALUE="vous n'avez pas répondu"> </option>
									<option VALUE="Souhait d'obtenir un crédit">Souhait d'obtenir un crédit</option>
									<option VALUE="Volonté d'obtenir un crédit bancaire">Volonté d'obtenir un crédit bancaire</option>     	                                            
									<option VALUE="Demande d'obtention d'un crédit">Demande d'obtention d'un crédit</option>
									<option VALUE="Possiblitité d'obtention d'un crédit">Possiblitité d'obtention d'un crédit</option>
								</select>
						
					<div class="list-group-item">
						<p><strong>De :</strong>
							<a class="btn btn-primary btn-xs" href="#this" title="Répondre">
								<i class="fa fa-user fa-lg"></i> Moi</a> 
							<span><strong>À : </strong>service.commercial@<wbr>veh.dz</span><br/>
						</p>
					</div>
				</div>
				<div class="list-group-item">
					<p>Bonjour, <br/>
					
								<select name="f2a1q2" class="form-control inline-form-control">
									<option VALUE="vous n'avez pas répondu"> </option>
									<option VALUE="En raison de">En raison de </option>
									<option VALUE="À la suite de">À la suite de </option>     	                                            
									<option VALUE="Après">Après </option>
								</select>
						

					votre offre reçue le 15 mars 2015, je me permets de vous demander de bien vouloir m’informer sur 
					la possibilité d’achat du modèle CLS 2000 par crédit bancaire.<br/>
					
					
								<select name="f2a1q3" class="form-control inline-form-control">
									<option VALUE="vous n'avez pas répondu"> </option>
									<option VALUE="Bien que">Bien que </option>
									<option VALUE="Toutefois">Toutefois </option>     	                                            
									<option VALUE="En effet">En effet </option>
								</select>
						

					ma situation financière actuelle ne me permet pas de régler comptant la somme totale du véhicule.<br/>
					
			
								<select name="f2a1q4" class="form-control inline-form-control">
									<option VALUE="vous n'avez pas répondu"> </option>
									<option VALUE="Par ailleurs">Par ailleurs </option>
									<option VALUE="À la fin">À la fin </option>     	                                            
									<option VALUE="En conséquence">En conséquence</option>
								</select>
						
					,je vous prie de bien vouloir prendre en considération ma demande.<br/>
					Je vous prie d’agréer, Monsieur, l’expression de mes salutations distinguées.<br/>
					Mohammed RAÏS<br/>
					</p>
				</div>
					<div class="list-group-item">
					<a class="btn btn-success" href="#this" title="Envoyer">
					  <i class="fa fa-send fa-lg"></i> Envoyer</a>
					<a class="hidden-xs btn btn-info" href="#this" title="Enregister dans Brouillons">
					  <i class="hidden-xs fa fa-save fa-lg"></i>  Enregister dans Brouillons</a>
					<a class="hidden-xs btn btn-danger" href="#this" title="Annuler">
					  <i class="hidden-xs fa fa-trash-o fa-lg"></i> Annuler</a>
				</div><br/>
				
				<!--FIN BOITE MAIL -->
				
				
				<h3 id="act2" class="activite">Activité 2</h3>
				<p class="recoi">Pour aller plus loin</p>
				<p><i>Quelle est la forme nominale du verbe en italique ?</i></p>
				
				<div class="well well-lg">
					<div class="row">
						<ol class="vertical col-md-6">
							<li>a. <i>Recruter</i> un agent de sécurité :</li>
						</ol>
						<div class="btn-group col-md-6" data-toggle="buttons">
							<label class="btn btn-primary">
							    <input type="radio" hidden="hidden" name="f2a2qa" value="Vous n'avez pas répondu" checked="checked"/>
								<input type="radio" name="f2a2qa" id="f2a2qap1" value="Recrue"> Recrue
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qa" id="f2a2qap2" value="Recrutement"> Recrutement
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qa" id="f2a2qap3" value="Recrutation"> Recrutation
							</label>
						</div>
					</div>
					<div class="row">
						<ol class="vertical col-md-6">
							<li>b. <i>Réviser</i> les comptes de la trésorerie :</li>
						</ol>
						<div class="btn-group col-md-6" data-toggle="buttons">
							<label class="btn btn-primary">
							    <input type="radio" hidden="hidden" name="f2a2qb" value="Vous n'avez pas répondu" checked="checked"/>
								<input type="radio" name="f2a2qb" id="f2a2qbp1" value="Révision"> Révision
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qb" id="f2a2qbp2" value="Revue"> Revue
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qb" id="f2a2qbp3" value="Révisionnement"> Révisionnement
							</label>
						</div>
					</div>	
					<div class="row">	
						<ol class="vertical col-md-6">
							<li>c. <i>Recevoir</i> les produits commandés :</li>
						</ol>
						<div class="btn-group col-md-6" data-toggle="buttons">
							<label class="btn btn-primary">
							<input type="radio" hidden="hidden" name="f2a2qc" value="Vous n'avez pas répondu" checked="checked"/>
								<input type="radio" name="f2a2qc" id="f2a2qcp1" value="Réception"> Réception
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qc" id="f2a2qcp2" value="Reçu"> Reçu
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qc" id="f2a2qcp3" value="Réceptive"> Réceptive
							</label>
						</div>
					</div>
					<div class="row">	
						<ol class="vertical col-md-6">
							<li>d. <i>Interrompre</i> l'approvisionnement d'une société en papier :</li>
						</ol>
						<div class="btn-group col-md-6" data-toggle="buttons">
							<label class="btn btn-primary">
							<input type="radio" hidden="hidden" name="f2a2qd" value="Vous n'avez pas répondu" checked="checked"/>
								<input type="radio" name="f2a2qd" id="f2a2qdp1" value="Interromption"> Interromption
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qd" id="f2a2qdp2"value="Interromption" > Interrupteur
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qd" id="f2a2qdp3" value="Interruption"> Interruption
							</label>
						</div>
					</div>
					<div class="row">	
						<ol class="vertical col-md-6">
							<li>e. <i>Reporter</i> un rendez-vous :</li>
						</ol>
						<div class="btn-group col-md-6" data-toggle="buttons">
							<label class="btn btn-primary">
							<input type="radio" hidden="hidden" name="f2a2qe" value="Vous n'avez pas répondu" checked="checked"/>
								<input type="radio" name="f2a2qe" id="f2a2qep1" value="Report"> Report
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qe" id="f2a2qep2" value="Reportage"> Reportage
							</label>
							<label class="btn btn-primary">
								<input type="radio" name="f2a2qe" id="f2a2qep3" value="Reportement"> Reportement
							</label>
						</div>
					</div>
					
				</div>
				
				
				
				
				<h3 id="act3" class="activite">Activité 3</h3>
				<p><i>Pour ces situations, comment formuleriez-vous l’objet du courriel ?</i></p>
		
				<div class="well well-lg">
					<div class="row">
						<div class="col-md-6">
							<ol class="vertical">
								<li><span class="label label-info">1</span> Vous informez votre correspondant que vous expédiez des marchandises.</li>
								<li><span class="label label-info">2</span> Vous annoncez que vous annulez en partie la commande passée précédemment.</li>
								<li><span class="label label-info">3</span> Vous écrivez pour demander une documentation.</li>
								<li><span class="label label-info">4</span> Vous écrivez pour confirmer votre commande.</li>
								<li><span class="label label-info">5</span> Vous écrivez à votre banque pour demander une prolongation de paiement.</li>
							</ol>
							
						</div>
						<div class="col-md-6">
							<ol class="phrases vertical encours">
							<li value="3"><i class="fa fa-arrows-v"></i> Demande de documentation</li>
							<li value="5"><i class="fa fa-arrows-v"></i> Demande de prolongation de paiement</li>
							<li value="1"><i class="fa fa-arrows-v"></i> Expédition de marchandises</li>
							<li value="4"><i class="fa fa-arrows-v"></i> Confirmation de commande</li>
							<li value="2"><i class="fa fa-arrows-v"></i> Annulation en partie de la commande passée précédemment</li>
							</ol>
							<input type="text" id="ordre" name="reponse" value="pas de reponse" /> 
						</div>
					</div>
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
        <script src="../js/sortable.js"></script>
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
		</script>
	</body>
</html>
		  