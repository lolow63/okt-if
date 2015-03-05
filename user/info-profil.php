<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
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
	</head>
	<body>
		<!--DEBUT DU FORMULAIRE DE MODIFICATION PROFIL-->
		<!--AVERTISSEMENT JAVASCRIPT DÉSACTIVÉ-->
		<noscript>
			<div class="jumbotron">
				<div class="activite text-center" style="font-size:1em">AVERTISSEMENT: Le Javascript est désactivé sur cette page! Modifiez les paramètres de votre navigateur pour profiter pleinement de toutes les fonctionnalités. 
				</div>
			</div>
		</noscript>
		<form class="form-horizontal" method="post" action="test-profil.php">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h2>NOM Prénom</h2>
					 <h5>Adresse électronique: exemple@gmail.com</h5>
				<fieldset>
					<!-- Form Name -->
					<legend>Modifier vos informations</legend>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="actual-password">Votre mot de passe actuel</label>
					  <div class="col-md-6">
						<input id="actual-password" name="actual-password" placeholder="" class="form-control input-md" required="" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
					
					<div id="accordion1">
						<div class="alinea">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
							  Modifiez votre mot de passe 
							</a>
						</div>
					  <div id="collapseOne" class="collapse">
						  <ul class="list-unstyled text-center">
							<!-- New Password input-->
							<li class="form-group">
								<div class="control-group">
								  <label class="col-md-6 control-label" for="new-password">Votre nouveau mot de passe</label>
								  <div class="col-md-6 controls">
									<input id="new-password" name="new-password" class="form-control input-md" type="password">
									<p class="help-block"></p>
								  </div>
								</div>
							</li>
							<!-- Confirm Password input-->
							<li class="form-group">
								<div class="control-group">
								  <label class="col-md-6 control-label" for="confirm-password">Confirmez le mot de passe</label>
								  <div class="col-md-6 controls">
									<input id="confirm-password" data-validation-match-match="new-password" data-validation-match-message="Les champs doivent correspondre!" name="confirm-password" class="form-control input-md" type="password">
									<p class="help-block"></p>
								  </div>
								</div>
							</li>
						  </ul>
					  </div>
					</div>
					
					<div id="accordion2">
					  <div>
						<div class="alinea">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						  Modifier votre adresse électronique
						</a>
						</div>
					  </div>
						<div id="collapseTwo" class="collapse">
						  <ul class="list-unstyled text-center">
							<!-- Email input-->
							<li class="form-group">
								<div class="control-group">
							  <label class="col-md-6 control-label" for="modif-mail">Modifier votre adresse électronique</label>  
							  <div class="controls col-md-6">
							  <input id="modif-mail" name="modif-mail" placeholder="exemple@domaine.com" class="form-control input-md" type="email">
								<p class="help-block"></p>
								</div>
							</div>
							</li>
						  </ul>
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="pays">Pays</label>
					  <div class="col-md-6">
						<select id="pays" name="pays" class="form-control"> 
						  <option value="Afghanistan">Afghanistan</option>
						  <option value="Afrique du Sud">Afrique du Sud</option>
						  <option value="Albanie">Albanie</option>
						  <option value="Algérie" selected="selected">Algérie</option>
						  <option value="Allemagne">Allemagne</option>
						  <option value="Angola">Angola</option>
						  <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
						  <option value="Arabie saoudite">Arabie saoudite</option>
						  <option value="Argentine">Argentine</option>
						  <option value="Arménie">Arménie</option>
						  <option value="Australie">Australie</option>
						  <option value="Autriche">Autriche</option>
						  <option value="Azerbaïdjan">Azerbaïdjan</option>
						  <option value="Bahamas">Bahamas</option>
						  <option value="Bahreïn">Bahreïn</option>
						  <option value="Bangladesh">Bangladesh</option>
						  <option value="Barbade">Barbade</option>
						  <option value="Belau">Belau</option>
						  <option value="Belgique">Belgique</option>
						  <option value="Belize">Belize</option>
						  <option value="Bénin">Bénin</option>
						  <option value="Bhoutan">Bhoutan</option>
						  <option value="Biélorussie">Biélorussie</option>
						  <option value="Birmanie">Birmanie</option>
						  <option value="Bolivie">Bolivie</option>
						  <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
						  <option value="Botswana">Botswana</option>
						  <option value="Brésil">Brésil</option>
						  <option value="Brunei">Brunei</option>
						  <option value="Bulgarie">Bulgarie</option>
						  <option value="Burkina">Burkina</option>
						  <option value="Burundi">Burundi</option>
						  <option value="Cambodge">Cambodge</option>
						  <option value="Cameroun">Cameroun</option>
						  <option value="Canada">Canada</option>
						  <option value="Cap-Vert">Cap-Vert</option>
						  <option value="Chili">Chili</option>
						  <option value="Chine">Chine</option>
						  <option value="Chypre">Chypre</option>
						  <option value="Colombie">Colombie</option>
						  <option value="Comores">Comores</option>
						  <option value="Congo">Congo</option>
						  <option value="Cook">Cook</option>
						  <option value="Corée du Nord">Corée du Nord</option>
						  <option value="Corée du Sud">Corée du Sud</option>
						  <option value="Costa Rica">Costa Rica</option>
						  <option value="Côte d'Ivoire">Côte d'Ivoire</option>
						  <option value="Croatie">Croatie</option>
						  <option value="Cuba">Cuba</option>
						  <option value="Danemark">Danemark</option>
						  <option value="Djibouti">Djibouti</option>
						  <option value="Dominique">Dominique</option>
						  <option value="Écosse">Écosse</option>
						  <option value="Égypte">Égypte</option>
						  <option value="Émirats arabes unis">Émirats arabes unis</option>
						  <option value="Équateur">Équateur</option>
						  <option value="Érythrée">Érythrée</option>
						  <option value="Espagne">Espagne</option>
						  <option value="Estonie">Estonie</option>
						  <option value="États-Unis">États-Unis</option>
						  <option value="Éthiopie">Éthiopie</option>
						  <option value="Fidji">Fidji</option>
						  <option value="Finlande">Finlande</option>
						  <option value="France">France</option>
						  <option value="Gabon">Gabon</option>
						  <option value="Gambie">Gambie</option>
						  <option value="Géorgie">Géorgie</option>
						  <option value="Ghana">Ghana</option>
						  <option value="Grèce">Grèce</option>
						  <option value="Grenade">Grenade</option>
						  <option value="Guatemala">Guatemala</option>
						  <option value="Guinée">Guinée</option>
						  <option value="Guinée-Bissao">Guinée-Bissao</option>
						  <option value="Guinée équatoriale">Guinée équatoriale</option>
						  <option value="Guyana">Guyana</option>
						  <option value="Haïti">Haïti</option>
						  <option value="Honduras">Honduras</option>
						  <option value="Hongrie">Hongrie</option>
						  <option value="Inde">Inde</option>
						  <option value="Indonésie">Indonésie</option>
						  <option value="Iran">Iran</option>
						  <option value="Irak">Irak</option>
						  <option value="Irlande">Irlande</option>
						  <option value="Islande">Islande</option>
						  <option value="Israël">Israël</option>
						  <option value="Italie">Italie</option>
						  <option value="Jamaïque">Jamaïque</option>
						  <option value="Japon">Japon</option>
						  <option value="Jordanie">Jordanie</option>
						  <option value="Kazakhstan">Kazakhstan</option>
						  <option value="Kenya">Kenya</option>
						  <option value="Kirghizistan">Kirghizistan</option>
						  <option value="Kiribati">Kiribati</option>
						  <option value="Koweït">Koweït</option>
						  <option value="Laos">Laos</option>
						  <option value="Lesotho">Lesotho</option>
						  <option value="Lettonie">Lettonie</option>
						  <option value="Liban">Liban</option>
						  <option value="Liberia">Liberia</option>
						  <option value="Libye">Libye</option>
						  <option value="Liechtenstein">Liechtenstein</option>
						  <option value="Lituanie">Lituanie</option>
						  <option value="Luxembourg">Luxembourg</option>
						  <option value="Macédoine">Macédoine</option>
						  <option value="Madagascar">Madagascar</option>
						  <option value="Malaisie">Malaisie</option>
						  <option value="Malawi">Malawi</option>
						  <option value="Maldives">Maldives</option>
						  <option value="Mali">Mali</option>
						  <option value="Malte">Malte</option>
						  <option value="Maroc">Maroc</option>
						  <option value="Marshall">Marshall</option>
						  <option value="Maurice">Maurice</option>
						  <option value="Mauritanie">Mauritanie</option>
						  <option value="Mexique">Mexique</option>
						  <option value="Micronésie">Micronésie</option>
						  <option value="Moldavie">Moldavie</option>
						  <option value="Monaco">Monaco</option>
						  <option value="Monténégro">Monténégro</option>
						  <option value="Mongolie">Mongolie</option>
						  <option value="Mozambique">Mozambique</option>
						  <option value="Namibie">Namibie</option>
						  <option value="Nauru">Nauru</option>
						  <option value="Népal">Népal</option>
						  <option value="Nicaragua">Nicaragua</option>
						  <option value="Niger">Niger</option>
						  <option value="Nigeria">Nigeria</option>
						  <option value="Niue">Niue</option>
						  <option value="Norvège">Norvège</option>
						  <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
						  <option value="Oman">Oman</option>
						  <option value="Ouganda">Ouganda</option>
						  <option value="Ouzbékistan">Ouzbékistan</option>
						  <option value="Pakistan">Pakistan</option>
						  <option value="Palestine">Palestine</option>
						  <option value="Panama">Panama</option>
						  <option value="Papouasie-Nouvelle Guinée">Papouasie-Nouvelle Guinée</option>
						  <option value="Paraguay">Paraguay</option>
						  <option value="Pays-Bas">Pays-Bas</option>
						  <option value="Pérou">Pérou</option>
						  <option value="Philippines">Philippines</option>
						  <option value="Pologne">Pologne</option>
						  <option value="Portugal">Portugal</option>
						  <option value="Qatar">Qatar</option>
						  <option value="République centrafricaine">République centrafricaine</option>
						  <option value="République démocratique du Con">République démocratique du Con</option>
						  <option value="République dominicaine">République dominicaine</option>
						  <option value="République tchèque">République tchèque</option>
						  <option value="Roumanie">Roumanie</option>
						  <option value="Royaume-Uni">Royaume-Uni</option>
						  <option value="Russie">Russie</option>
						  <option value="Rwanda">Rwanda</option>
						  <option value="Saint-Christophe-et-Niévès">Saint-Christophe-et-Niévès</option>
						  <option value="Sainte-Lucie">Sainte-Lucie</option>
						  <option value="Saint-Marin">Saint-Marin</option>
						  <option value="Saint-Siège">Saint-Siège</option>
						  <option value="Saint-Vincent-et-les-Grenadine">Saint-Vincent-et-les-Grenadine</option>
						  <option value="Salomon">Salomon</option>
						  <option value="Salvador">Salvador</option>
						  <option value="Samoa occidentales">Samoa occidentales</option>
						  <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
						  <option value="Sénégal">Sénégal</option>
						  <option value="Seychelles">Seychelles</option>
						  <option value="Sierra Leone">Sierra Leone</option>
						  <option value="Singapour">Singapour</option>
						  <option value="Slovaquie">Slovaquie</option>
						  <option value="Slovénie">Slovénie</option>
						  <option value="Somalie">Somalie</option>
						  <option value="Soudan">Soudan</option>
						  <option value="Sri Lanka">Sri Lanka</option>
						  <option value="Suède">Suède</option>
						  <option value="Suisse">Suisse</option>
						  <option value="Suriname">Suriname</option>
						  <option value="Swaziland">Swaziland</option>
						  <option value="Syrie">Syrie</option>
						  <option value="Tadjikistan">Tadjikistan</option>
						  <option value="Tanzanie">Tanzanie</option>
						  <option value="Tchad">Tchad</option>
						  <option value="Thaïlande">Thaïlande</option>
						  <option value="Tibet">Tibet</option>
						  <option value="Togo">Togo</option>
						  <option value="Tonga">Tonga</option>
						  <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
						  <option value="Tunisie">Tunisie</option>
						  <option value="Turkménistan">Turkménistan</option>
						  <option value="Turquie">Turquie</option>
						  <option value="Tuvalu">Tuvalu</option>
						  <option value="Ukraine">Ukraine</option>
						  <option value="Uruguay">Uruguay</option>
						  <option value="Vanuatu">Vanuatu</option>
						  <option value="Venezuela">Venezuela</option>
						  <option value="Viêt Nam">Viêt Nam</option>
						  <option value="Yémen">Yémen</option>
						  <option value="Zambie">Zambie</option>
						  <option value="Zimbabwe">Zimbabwe</option>
						</select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div id="Wilaya" class="form-group">
					  <label class="col-md-6 control-label" for="wilaya">Wilaya</label>
					  <div class="col-md-6">
						<select id="wilaya" name="wilaya" class="form-control">
						  <option value="non renseignée">Voir la liste</option>      
						  <option value="Adrar">Adrar</option>
						  <option value="Chlef">Chlef</option>
						  <option value="Laghouat">Laghouat</option>
						  <option value="Oum El Bouaghi">Oum El Bouaghi</option>
						  <option value="Batna">Batna</option>
						  <option value="Béjaïa">Béjaïa</option>
						  <option value="Biskra">Biskra</option>
						  <option value="Béchar">Béchar</option>
						  <option value="Blida">Blida</option>
						  <option value="Bouira">Bouira</option>
						  <option value="Tamanrasset">Tamanrasset</option>
						  <option value="Tébessa">Tébessa</option>
						  <option value="Tlemcen">Tlemcen</option>
						  <option value="Tiaret">Tiaret</option>
						  <option value="Tizi Ouzou">Tizi Ouzou</option>
						  <option value="Alger">Alger</option>
						  <option value="Djelfa">Djelfa</option>
						  <option value="Jijel">Jijel</option>
						  <option value="Sétif">Sétif</option>
						  <option value="Saïda">Saïda</option>
						  <option value="Skikda">Skikda</option>
						  <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
						  <option value="Annaba">Annaba</option>
						  <option value="Guelma">Guelma</option>
						  <option value="Constantine">Constantine</option>
						  <option value="Médéa">Médéa</option>
						  <option value="Mostaganem">Mostaganem</option>
						  <option value="M'Sila">M'Sila</option>
						  <option value="Mascara">Mascara</option>
						  <option value="Ouargla">Ouargla</option>
						  <option value="Oran">Oran</option>
						  <option value="El Bayadh">El Bayadh</option>
						  <option value="Illizi">Illizi</option>
						  <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
						  <option value="Boumerdès">Boumerdès</option>
						  <option value="El Tarf">El Tarf</option>
						  <option value="Tindouf">Tindouf</option>
						  <option value="Tissemsilt">Tissemsilt</option>
						  <option value="El Oued">El Oued</option>
						  <option value="Khenchela">Khenchela</option>
						  <option value="Souk Ahras">Souk Ahras</option>
						  <option value="Tipaza">Tipaza</option>
						  <option value="Mila">Mila</option>
						  <option value="Aïn Defla">Aïn Defla</option>
						  <option value="Naâma">Naâma</option>
						  <option value="Relizane">Relizane</option>
						  <option value="Aïn Témouchent">Aïn Témouchent</option>
						  <option value="Ghardaïa">Ghardaïa</option>
						</select>
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="profession">Catégorie socio-professionnelle</label>
					  <div class="col-md-6">
						<select id="profession" name="profession" class="form-control">
						  <option value="Non renseignée">Voir la liste</option>      						
							<option value="Agriculteur">Agriculteur</option>
							<option value="Artisan">Artisan</option>
							<option value="Commerçant">Commerçant</option>
							<option value="Chef d'entreprise">Chef d'entreprise</option>
							<option value="Profession libérale">Profession libérale</option>
							<option value="Cadre de la fonction publique">Cadre de la fonction publique</option>
							<option value="Cadre d'entreprise">Cadre d'entreprise</option>
							<option value="Professionnel de l'enseignement">Professionnel de l'enseignement</option>
							<option value="Professionnel de la santé">Professionnel de la santé</option>
							<option value="Employé administratifs d'entreprise">Employé administratifs d'entreprise</option>
							<option value="Commercial">Commercial</option>
							<option value="Techniciens">Techniciens</option>
							<option value="Contremaître, agent de maîtrise">Contremaître, agent de maîtrise</option>
							<option value="Employé de la fonction publique">Employé de la fonction publique</option>
							<option value="Employé de commerce">Employé de commerce</option>
							<option value="Personnel des services aux particuliers">Personnel des services aux particuliers</option>
							<option value="Artiste">Artiste</option>
							<option value="Ouvriers">Ouvriers</option>
							<option value="Retraité">Retraité</option>
							<option value="Étudiant">Étudiant</option>
							<option value="Chômeurs">Chômeurs</option>
						</select>
					  </div>
					</div>
					
					<!-- Regex Date de naissance-->
					<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="date-naissance">Date de naissance</label>
					  <div class="col-md-6 controls">
						<input id="date-naissance" name="date-naissance" class="form-control input-md" 
						data-validation-regex-regex="^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$"
							data-validation-regex-message="Format: JJ/MM/AAAA" type="text">
						<p class="help-block"></p>
					  </div>
					</div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="newsletter">Prochaines formations disponibles</label>
					  <div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon">
									<input type="checkbox" id="newsletter" name="newsletter" />
								</span>
								<label for="newsletter" class="form-control">Me prévenir par courriel</label>
							</div>
						</div>	
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<!-- Button Double) -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="valid">Enregistrer les modifications</label>
				   <div class="col-md-2">
					<button id="cancel" name="cancel" class="btn btn-danger" data-dismiss="modal">Annuler</button>
				  </div>
				  <div class="col-md-2">
					<button id="valid" name="valid" class="btn btn-success" type="submit">Confirmer</button>
				  </div>
				 
				</div>
			</div>
			<!--FIN DU FORMULAIRE DE MODIFICATION PROFIL-->	
		</form>
	
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