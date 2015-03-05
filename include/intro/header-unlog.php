<!--INCLUDE HEADER UNLOG-->
<!--MODAL ModalLogin-->
<form class="form-horizontal" method="post" action="test-connexion.php">
	<div id="ModalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				  <h4 class="modal-title" id="LoginLabel">Connexion</h4>
				</div>

					<div class="modal-body">
						<!-- Email input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="login-mail">Adresse électronique</label>  
							  <div class="controls col-md-6">
							  <input id="login-mail" name="login-mail" placeholder="exemple@domaine.com" class="form-control input-md" required="" type="email">
								<p class="help-block"></p>
							</div>
							</div>
						</div>					
						<!-- Password input-->
						<div class="form-group">
							<div class="control-group">
							  <label class="col-md-6 control-label" for="login-password">Mot de passe</label>
							  <div class="col-md-6 controls">
								<input id="login-password" name="login-password" class="form-control input-md" required="" type="password">
								<p class="help-block"></p>
							  </div>
							</div>
						</div>
						<!-- Multiple Checkboxes (inline) -->
						<div class="form-group">
						  <div class="col-md-offset-6 col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<input type="checkbox" id="keeplog" name="keeplog" />
									</span>
									<label for="keeplog" class="form-control">Se souvenir de moi</label>
								</div>
							</div>	
						</div>
					</div>
					<div class="modal-footer">
						<!--Submit button-->
						<div class="col-md-2">
							<button id="login-valid" name="login-valid" class="btn btn-success" type="submit">Confirmer</button>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</form>

<!--FIN DE ModalLogin-->
 <div class="header">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 topheader">
            <img src="img/logoifa.jpg" alt="" class="toplogo">
            <h2 class="toptitle">FORMATION DE FRANÇAIS EN LIGNE</h2>
        </div>
    </div>
    	<div class="container">
			<div class="col-xs-12 visible-xs">
							<ul class="nav navbar-nav navbar-default">
								<li>
									<noscript><a href="user/connexion.php">CONNEXION</a></noscript>
									<a class="modal-title" data-toggle="modal" data-target="#ModalLogin"><i class="fa fa-2x fa-lock"></i>CONNEXION</a>
								</li>
							</ul>
			</div>
    	    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 mainnav">
				<nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
        
				<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">ACCUEIL</a></li>
							<li><a href="intro.php">INTRODUCTION</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="construction.php">AIDE</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>   
			</div>
           <div class="col-sm-4 col-md-4 col-lg-4 hidden-xs">
				<ul class="nav navbar-nav navbar-default navbar-right">
                    <li>
					<noscript><a href="user/connexion.php">CONNEXION</a></noscript>
					<a class="modal-title" data-toggle="modal" data-target="#ModalLogin"><i class="fa fa-lock"></i> CONNEXION</a>
					</li>
				</ul>
           </div>
        </div>
</div>