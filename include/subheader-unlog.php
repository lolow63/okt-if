<!--SUBHEADER-UNLOG-->
<!--SNIPET ModalIncription-->
	<div id="ModalInscription" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="InscriptionLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="InscriptionLabel">Formulaire d'inscription</h4>
				</div>
				<form class="form-horizontal" method="post" action="test-inscription.php">	
					<div class="modal-body">						
						<!-- Name input-->
						<div class="form-group">
						  <label class="col-md-6 control-label" for="nom">Nom</label>
						  <div class="col-md-6">
							<input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text">
							<p class="help-block"></p>
						  </div>
						</div>
						
						<!-- First-name input-->
						<div class="form-group">
						  <label class="col-md-6 control-label" for="prenom">Prénom</label>
						  <div class="col-md-6">
							<input id="prenom" name="prenom" placeholder="" class="form-control input-md" required="" type="text">
							<p class="help-block"></p>
						  </div>
						</div>
					
						<!-- Email input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="mail">Adresse électronique</label>  
							  <div class="controls col-md-6">
							  <input id="mail" name="mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
								<p class="help-block"></p>
							</div>
							</div>
						</div>
						
						<!-- Email input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="confirm-mail">Confirmez votre adresse électronique</label>  
							  <div class="controls col-md-6">
							  <input id="confirm-mail" data-validation-match-match="mail" data-validation-match-message="Les champs doivent correspondre!" name="confirm-mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
								<p class="help-block"></p>
							</div>
							</div>
						</div>
						
						<!-- Password input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="password">Choisissez votre mot de passe</label>
							  <div class="col-md-6 controls">
								<input id="password" name="password" class="form-control input-md" required="" type="password">
								<p class="help-block"></p>
							  </div>
							</div>
						</div>
						<!-- Confirm Password input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="confirm-password">Confirmez votre mot de passe</label>
							  <div class="col-md-6 controls">
								<input id="confirm-password" data-validation-match-match="password" data-validation-match-message="Les champs doivent correspondre!" name="confirm-password" class="form-control input-md" required="" type="password">
								<p class="help-block"></p>
							  </div>
							</div>
						</div>							
					</div>
					<div class="modal-footer">
						<!--Submit button-->
						<button id="valid" name="valid" class="btn btn-success" type="submit">Confirmer</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
<!--FIN DE ModalInscription-->
<div class="content">
    <div class="subheader">
        <div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
                <h4>Une formation inédite au service des professionnels algériens!</h4>
                <p class="alinea">Bienvenue sur ce nouvel espace du site de l'Institut Français Algérie consacré 
				à l'apprentissage en ligne du français. Ici vous trouverez notre première formation, 
				se proposant d'améliorer vos rédactions de courriers électroniques, appelés plus simplement courriels.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 col-lg-offset-1 col-lg-5">
                <img src="img/mail.png" alt="" class="mailimg">
            </div>
        </div>
        <div class="container"><br>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="buttons">
					<noscript><a href="inscription.php" class="btn btn-inscription">M'inscrire gratuitement</a></noscript>
					<a class="btn btn-inscription modal-title" data-toggle="modal" data-target="#ModalInscription">M'inscrire gratuitement</a>
                    <a href="intro.php" class="btn btn-formation">Débuter la formation</a>
                </div>         
            </div>
        </div>         
    </div>
</div>
<!--FIN SUBHEADER-MAIL-->
