<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
	</head>
	<body>
		<!--DEBUT DU FORMULAIRE DE MODIFICATION PROFIL-->
		<form class="form-horizontal" method="post" action="construction.php">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h2>NOM Prénom</h2>
					 <h5>Adresse électronique: exemple@gmail.com</h5>
				<fieldset>
					<!-- Form Name -->
					<legend>Modifier vos informations</legend>

					<!-- Email input-->
					<div class="form-group">
						<div class="control-group">
					  <label class="col-md-6 control-label" for="modif-mail">Modifier votre adresse électronique</label>  
					  <div class="controls col-md-6">
					  <input id="modif-mail" name="modif-mail" placeholder="exemple@gmail.com" class="form-control input-md" type="email">
						<p class="help-block"></p>
						</div>
					</div>
					</div>
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="actual-password">Votre mot de passe actuel</label>
					  <div class="col-md-6">
						<input id="actual-password" name="actual-password" placeholder="" class="form-control input-md" required="" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
					<!-- New Password input-->
					<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="new-password">Votre nouveau mot de passe</label>
					  <div class="col-md-6 controls">
						<input id="new-password" name="new-password" class="form-control input-md" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
					</div>
					<!-- Confirm Password input-->
					<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="confirm-password">Confirmez le mot de passe</label>
					  <div class="col-md-6 controls">
						<input id="confirm-password" data-validation-match-match="new-password" data-validation-match-message="Les champs doivent correspondre!" name="confirm-password" class="form-control input-md" type="password">
						<p class="help-block"></p>
					  </div>
					</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="pays">Pays</label>
					  <div class="col-md-6">
						<select id="pays" name="pays" class="form-control"> 
						  <option value="2">Afghanistan</option>
						  <option value="3">Afrique du Sud</option>
						  <option value="">Albanie</option>
						  <option value="" selected="selected">Algérie</option>
						  <option value="">Allemagne</option>
						  <option value="">Angola</option>
						  <option value="">Antigua-et-Barbuda</option>
						  <option value="">Arabie saoudite</option>
						  <option value="">Argentine</option>
						  <option value="">Arménie</option>
						  <option value="">Australie</option>
						  <option value="">Autriche</option>
						  <option value="">Azerbaïdjan</option>
						  <option value="">Bahamas</option>
						  <option value="">Bahreïn</option>
						  <option value="">Bangladesh</option>
						  <option value="">Barbade</option>
						  <option value="">Belau</option>
						  <option value="">Belgique</option>
						  <option value="">Belize</option>
						  <option value="">Bénin</option>
						  <option value="">Bhoutan</option>
						  <option value="">Biélorussie</option>
						  <option value="">Birmanie</option>
						  <option value="">Bolivie</option>
						  <option value="">Bosnie-Herzégovine</option>
						  <option value="">Botswana</option>
						  <option value="">Brésil</option>
						  <option value="">Brunei</option>
						  <option value="">Bulgarie</option>
						  <option value="">Burkina</option>
						  <option value="">Burundi</option>
						  <option value="">Cambodge</option>
						  <option value="">Cameroun</option>
						  <option value="">Canada</option>
						  <option value="">Cap-Vert</option>
						  <option value="">Chili</option>
						  <option value="">Chine</option>
						  <option value="">Chypre</option>
						  <option value="">Colombie</option>
						  <option value="">Comores</option>
						  <option value="">Congo</option>
						  <option value="">Cook</option>
						  <option value="">Corée du Nord</option>
						  <option value="">Corée du Sud</option>
						  <option value="">Costa Rica</option>
						  <option value="">Côte d'Ivoire</option>
						  <option value="">Croatie</option>
						  <option value="">Cuba</option>
						  <option value="">Danemark</option>
						  <option value="">Djibouti</option>
						  <option value="">Dominique</option>
						  <option value="">Écosse</option>
						  <option value="">Égypte</option>
						  <option value="">Émirats arabes unis</option>
						  <option value="">Équateur</option>
						  <option value="">Érythrée</option>
						  <option value="">Espagne</option>
						  <option value="">Estonie</option>
						  <option value="">États-Unis</option>
						  <option value="">Éthiopie</option>
						  <option value="">Fidji</option>
						  <option value="">Finlande</option>
						  <option value="">France</option>
						  <option value="">Gabon</option>
						  <option value="">Gambie</option>
						  <option value="">Géorgie</option>
						  <option value="">Ghana</option>
						  <option value="">Grèce</option>
						  <option value="">Grenade</option>
						  <option value="">Guatemala</option>
						  <option value="">Guinée</option>
						  <option value="">Guinée-Bissao</option>
						  <option value="">Guinée équatoriale</option>
						  <option value="">Guyana</option>
						  <option value="">Haïti</option>
						  <option value="">Honduras</option>
						  <option value="">Hongrie</option>
						  <option value="">Inde</option>
						  <option value="">Indonésie</option>
						  <option value="">Iran</option>
						  <option value="">Irak</option>
						  <option value="">Irlande</option>
						  <option value="">Islande</option>
						  <option value="">Israël</option>
						  <option value="">Italie</option>
						  <option value="">Jamaïque</option>
						  <option value="">Japon</option>
						  <option value="">Jordanie</option>
						  <option value="">Kazakhstan</option>
						  <option value="">Kenya</option>
						  <option value="">Kirghizistan</option>
						  <option value="">Kiribati</option>
						  <option value="">Koweït</option>
						  <option value="">Laos</option>
						  <option value="">Lesotho</option>
						  <option value="">Lettonie</option>
						  <option value="">Liban</option>
						  <option value="">Liberia</option>
						  <option value="">Libye</option>
						  <option value="">Liechtenstein</option>
						  <option value="">Lituanie</option>
						  <option value="">Luxembourg</option>
						  <option value="">Macédoine</option>
						  <option value="">Madagascar</option>
						  <option value="">Malaisie</option>
						  <option value="">Malawi</option>
						  <option value="">Maldives</option>
						  <option value="">Mali</option>
						  <option value="">Malte</option>
						  <option value="">Maroc</option>
						  <option value="">Marshall</option>
						  <option value="">Maurice</option>
						  <option value="">Mauritanie</option>
						  <option value="">Mexique</option>
						  <option value="">Micronésie</option>
						  <option value="">Moldavie</option>
						  <option value="">Monaco</option>
						  <option value="">Monténégro</option>
						  <option value="">Mongolie</option>
						  <option value="">Mozambique</option>
						  <option value="">Namibie</option>
						  <option value="">Nauru</option>
						  <option value="">Népal</option>
						  <option value="">Nicaragua</option>
						  <option value="">Niger</option>
						  <option value="">Nigeria</option>
						  <option value="">Niue</option>
						  <option value="">Norvège</option>
						  <option value="">Nouvelle-Zélande</option>
						  <option value="">Oman</option>
						  <option value="">Ouganda</option>
						  <option value="">Ouzbékistan</option>
						  <option value="">Pakistan</option>
						  <option value="">Palestine</option>
						  <option value="">Panama</option>
						  <option value="">Papouasie - Nouvelle Guinée</option>
						  <option value="">Paraguay</option>
						  <option value="">Pays-Bas</option>
						  <option value="">Pérou</option>
						  <option value="">Philippines</option>
						  <option value="">Pologne</option>
						  <option value="">Portugal</option>
						  <option value="">Qatar</option>
						  <option value="">République centrafricaine</option>
						  <option value="">République démocratique du Con</option>
						  <option value="">République dominicaine</option>
						  <option value="">République tchèque</option>
						  <option value="">Roumanie</option>
						  <option value="">Royaume-Uni</option>
						  <option value="">Russie</option>
						  <option value="">Rwanda</option>
						  <option value="">Saint-Christophe-et-Niévès</option>
						  <option value="">Sainte-Lucie</option>
						  <option value="">Saint-Marin</option>
						  <option value="">Saint-Siège</option>
						  <option value="">Saint-Vincent-et-les-Grenadine</option>
						  <option value="">Salomon</option>
						  <option value="">Salvador</option>
						  <option value="">Samoa occidentales</option>
						  <option value="">Sao Tomé-et-Principe</option>
						  <option value="">Sénégal</option>
						  <option value="">Seychelles</option>
						  <option value="">Sierra Leone</option>
						  <option value="">Singapour</option>
						  <option value="">Slovaquie</option>
						  <option value="">Slovénie</option>
						  <option value="">Somalie</option>
						  <option value="">Soudan</option>
						  <option value="">Sri Lanka</option>
						  <option value="">Suède</option>
						  <option value="">Suisse</option>
						  <option value="">Suriname</option>
						  <option value="">Swaziland</option>
						  <option value="">Syrie</option>
						  <option value="">Tadjikistan</option>
						  <option value="">Tanzanie</option>
						  <option value="">Tchad</option>
						  <option value="">Thaïlande</option>
						  <option value="">Togo</option>
						  <option value="">Tonga</option>
						  <option value="">Trinité-et-Tobago</option>
						  <option value="">Tunisie</option>
						  <option value="">Turkménistan</option>
						  <option value="">Turquie</option>
						  <option value="">Tuvalu</option>
						  <option value="">Ukraine</option>
						  <option value="">Uruguay</option>
						  <option value="">Vanuatu</option>
						  <option value="">Venezuela</option>
						  <option value="">Viêt Nam</option>
						  <option value="">Yémen</option>
						  <option value="">Zambie</option>
						  <option value="">Zimbabwe</option>
						</select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="wilaya">Wilaya</label>
					  <div class="col-md-6">
						<select id="wilaya" name="wilaya" class="form-control">
						  <option value="1">Voir la liste</option>      
						  <option value="2">Adrar</option>
						  <option value="3">Chlef</option>
						  <option value="">Laghouat</option>
						  <option value="">Oum El Bouaghi</option>
						  <option value="">Batna</option>
						  <option value="">Béjaïa</option>
						  <option value="">Biskra</option>
						  <option value="">Béchar</option>
						  <option value="">Blida</option>
						  <option value="">Bouira</option>
						  <option value="">Tamanrasset</option>
						  <option value="">Tébessa</option>
						  <option value="">Tlemcen</option>
						  <option value="">Tiaret</option>
						  <option value="">Tizi Ouzou</option>
						  <option value="">Alger</option>
						  <option value="">Djelfa</option>
						  <option value="">Jijel</option>
						  <option value="">Sétif</option>
						  <option value="">Saïda</option>
						  <option value="">Skikda</option>
						  <option value="">Sidi Bel Abbès</option>
						  <option value="">Annaba</option>
						  <option value="">Guelma</option>
						  <option value="">Constantine</option>
						  <option value="">Médéa</option>
						  <option value="">Mostaganem</option>
						  <option value="">M'Sila</option>
						  <option value="">Mascara</option>
						  <option value="">Ouargla</option>
						  <option value="">Oran</option>
						  <option value="">El Bayadh</option>
						  <option value="">Illizi</option>
						  <option value="">Bordj Bou Arreridj</option>
						  <option value="">Boumerdès</option>
						  <option value="">El Tarf</option>
						  <option value="">Tindouf</option>
						  <option value="">Tissemsilt</option>
						  <option value="">El Oued</option>
						  <option value="">Khenchela</option>
						  <option value="">Souk Ahras</option>
						  <option value="">Tipaza</option>
						  <option value="">Mila</option>
						  <option value="">Aïn Defla</option>
						  <option value="">Naâma</option>
						  <option value="">Relizane</option>
						  <option value="">Aïn Témouchent</option>
						  <option value="">Ghardaïa</option>
						</select>
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-6 control-label" for="profession">Profession</label>
					  <div class="col-md-6">
						<select id="profession" name="profession" class="form-control">
						  <option value="">Voir la liste</option>      						
							<option value="">Agriculteurs exploitants</option>
							<option value="">Artisans</option>
							<option value="">Commerçants et assimilés</option>
							<option value="">Chefs d'entreprise de 10 salariés ou plus</option>
							<option value="">Professions libérales et assimilés</option>
							<option value="">Cadres de la fonction publique, professions intellectuelles et  artistiques</option>
							<option value="">Cadres d'entreprise</option>
							<option value="">Professions intermédiaires de l'enseignement, de la santé, de la fonction publique et assimilés</option>
							<option value="">Professions intermédiaires administratives et commerciales des entreprises</option>
							<option value="">Techniciens</option>
							<option value="">Contremaîtres, agents de maîtrise</option>
							<option value="">Employés de la fonction publique</option>
							<option value="">Employés administratifs d'entreprise</option>
							<option value="">Employés de commerce</option>
							<option value="">Personnels des services directs aux particuliers</option>
							<option value="">Ouvriers qualifiés</option>
							<option value="">Ouvriers non qualifiés</option>
							<option value="">Ouvriers agricoles</option>
							<option value="">Anciens agriculteurs exploitants</option>
							<option value="">Anciens artisans, commerçants, chefs d'entreprise</option>
							<option value="">Anciens cadres et professions intermédiaires</option>
							<option value="">Anciens employés et ouvriers</option>
							<option value="">Chômeurs n'ayant jamais travaillé</option>
							<option value="">Inactifs divers (autres que retraités)</option>
						</select>
					  </div>
					</div>
					
					<!-- Regex Date de naissance-->
					<div class="form-group">
					<div class="control-group">
					  <label class="col-md-6 control-label" for="date-naissance">Date de naissance</label>
					  <div class="col-md-6 controls">
						<input id="date-naissance" class="form-control input-md" 
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
									<input type="checkbox" id="newsletter" name="newsletter" value="" />
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
					<button id="valid" name="valid" class="btn btn-success" type="submit">Confirmer</button>
				  </div>
				  <div class="col-md-2">
					<button id="cancel" name="cancel" class="btn btn-danger" data-dismiss="modal">Annuler</button>
				  </div>
				</div>
			</div>
			<!--FIN DU FORMULAIRE DE MODIFICATION PROFIL-->	
		</form>
	
		<!--Script JqBootstrapValidation-->
		<script>
		  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
		</script>
	</body>
</html>