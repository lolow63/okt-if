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
		<!-- JavaScript Includes -->
		<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
        <script src="../js/sortable.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
		<script src="../js/transition.js"></script>
		<script src="../js/collapse.js"></script>
		<script src="../js/dropdown.js"></script>
		<script src="../js/scrollspy.js"></script>  
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
			<!--BARRE DE NAVIGATION TOP-FIXE-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
				  <div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-scrollspy">
					  <span class="sr-only">Navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FICHE 5: CORRIGÉ</a>
				  </div>
				  <div class="collapse navbar-collapse js-navbar-scrollspy">
					<ul class="nav navbar-nav">
					  <li><a href="#bottom">LE SAVIEZ-VOUS?</a></li>
					  <li><a href="../fiches/fiche6.php">FICHE SUIVANTE</a></li>
					</ul>
				  </div>
				</div>
			</nav>
			<!--FIN BARRE DE NAVIGATION TOP-FIXE-->
			<?php include("../include/corriges/header-login.php");
			?>
		</header>
		<hr>
		<!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
		<div class="container">
			<div class="well">
				<h1>Fiches d'aide à la réalisation de courriels professionnels</h1>
				 <h2>Corrigé de la fiche N°5</h2><br/>
					<p>Félicitation ! Vous avez terminé votre @ série d'activités.</p>
					<p>Voici votre score :</p>	
					<div class="list-group-item">
		             <?php 
					 if ($_POST){
					 //variable activité 1
					 if(isset($_POST['f5a1p1'])){$f5a1p1 = ($_POST['f5a1p1']);}
					 if(isset($_POST['f5a1p2'])){$f5a1p2 = ($_POST['f5a1p2']);}
					 if(isset($_POST['f5a1p3'])){$f5a1p3 = ($_POST['f5a1p3']);}
					 if(isset($_POST['f5a1p4'])){$f5a1p4 = ($_POST['f5a1p4']);}
					 if(isset($_POST['f5a1p5'])){$f5a1p5 = ($_POST['f5a1p5']);}
					 if(isset($_POST['f5a1p6'])){$f5a1p6 = ($_POST['f5a1p6']);}
					 $chek1='false';
					 $chek2='false';
					 $chek3='false';
					 $chek4='false';
					 $chek5='false';
					 $chek6='false';
					 $checked1='checked="checked"';
					 $checked2='checked="checked"';
					 $checked3='checked="checked"';
					 $checked4='checked="checked"';
					 $checked5='checked="checked"';
					 $checked6='checked="checked"';
					//variable activité2	 
		             if(isset($_POST['f5a2q1'])){$f5a2q1 = ($_POST['f5a2q1']);}
					 if(isset($_POST['f5a2q2'])){$f5a2q2 = ($_POST['f5a2q2']);}
					 if(isset($_POST['f5a2q3'])){$f5a2q3 = ($_POST['f5a2q3']);}
					 if(isset($_POST['f5a2q4'])){$f5a2q4 = ($_POST['f5a2q4']);}
					 $nf5a2q1=0;$nf5a2q2=0;$nf5a2q3=0;$nf5a2q4=0;
				     //variable activité3 
					 if(isset($_POST['f5a3q1'])){$f5a3q1 = ($_POST['f5a3q1']);}
					 if(isset($_POST['f5a3q2'])){$f5a3q2 = ($_POST['f5a3q2']);}
					 if(isset($_POST['f5a3q3'])){$f5a3q3 = ($_POST['f5a3q3']);}
					 if(isset($_POST['f5a3q4'])){$f5a3q4 = ($_POST['f5a3q4']);}
					 if(isset($_POST['f5a3q5'])){$f5a3q5 = ($_POST['f5a3q5']);}
					 if(isset($_POST['f5a3q6'])){$f5a3q6 = ($_POST['f5a3q6']);}
					 $nf5a3q1=0;$nf5a3q2=0;$nf5a3q3=0;$nf5a3q4=0;$nf5a3q5=0;$nf5a3q6=0;
					 //variable activité4
					  if(isset($_POST['f5a4q1'])){$f5a4q1 = ($_POST['f5a4q1']);}
					  if(isset($_POST['f5a4q2'])){$f5a4q2 = ($_POST['f5a4q2']);}
					  if(isset($_POST['f5a4q3'])){$f5a4q3 = ($_POST['f5a4q3']);}
					  if(isset($_POST['f5a4q4'])){$f5a4q4 = ($_POST['f5a4q4']);}
					  if(isset($_POST['f5a4q5'])){$f5a4q5 = ($_POST['f5a4q5']);}
					  $nf5a4q1=0; $nf5a4q2=0; $nf5a4q3=0; $nf5a4q4=0; $nf5a4q5=0;
		            //note activité2
					if ($f5a2q1=='Pourrais-je'){$nf5a2q1=$nf5a2q1+25; }else{ $nf5a2q1;}
					if ($f5a2q2=='Je voudrais savoir'){$nf5a2q2=$nf5a2q2+25; }else{ $nf5a2q2;}
					if ($f5a2q3=='Pourrait-il'){$nf5a2q3=$nf5a2q3+25; }else{ $nf5a2q3;}
					if ($f5a2q4=='souhaiterait'){$nf5a2q4=$nf5a2q4+25; }else{ $nf5a2q4;}
		            $nf5a2=$nf5a2q1+$nf5a2q2+$nf5a2q3+$nf5a2q4;
					//note activité3
					if ($f5a3q1=='si'){$nf5a3q1=$nf5a3q1+17; }else{ $nf5a3q1;}
					if ($f5a3q2=='ce qui'){$nf5a3q2=$nf5a3q2+17; }else{ $nf5a3q2;}
					if ($f5a3q3=='si'){$nf5a3q3=$nf5a3q3+15; }else{ $nf5a3q3;}
					if ($f5a3q4=='pourquoi'){$nf5a3q4=$nf5a3q4+17; }else{ $nf5a3q4;}
					if ($f5a3q5=='comment'){$nf5a3q5=$nf5a3q5+17; }else{ $nf5a3q5;}
					if ($f5a3q6=='quand'){$nf5a3q6=$nf5a3q6+17; }else{ $nf5a3q6;}
					$nf5a3=$nf5a3q1+$nf5a3q2+$nf5a3q3+$nf5a3q4+$nf5a3q5+$nf5a3q6;
					//note activité4
					if ($f5a4q1=='contentieuse'){$nf5a4q1=$nf5a4q1+20; }else{ $nf5a4q1;}
					if ($f5a4q2=='anonyme'){$nf5a4q2=$nf5a4q2+20; }else{ $nf5a4q2;}
					if ($f5a4q3=='concordants'){$nf5a4q3=$nf5a4q3+20; }else{ $nf5a4q3;}
					if ($f5a4q4=='forfaitaire'){$nf5a4q4=$nf5a4q4+20; }else{ $nf5a4q4;}
					if ($f5a4q5=='infructueux'){$nf5a4q5=$nf5a4q5+20; }else{ $nf5a4q5;}
					$nf5a4=$nf5a4q1+$nf5a4q2+$nf5a4q3+$nf5a4q4+$nf5a4q5;
		              //debut corrigé
					  echo'<p>Voyons maintenant vos réponses plus en détail :</p>';
					  
		             //corrigéactivité2
					 
					 echo' <h3 class="activite">Activité 2 ('.$nf5a2.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question 1</h3>';
					 if($f5a2q1==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a2q1=='Pourrais-je'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a2q1.': </strong>C\'est la bonne réponse !</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a2q1.':</strong></p> <p>La bonne réponse est : « Pourrais-je »';}
					 
					echo' <h3>Question 2</h3>';
					 if($f5a2q2==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a2q2=='Je voudrais savoir'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a2q2.': </strong>C\'est la bonne réponse !</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a2q2.':</strong></p> <p>La bonne réponse est : « Je voudrais savoir »';}
					 
					 echo'<h3>Question 3</h3>';
					 if($f5a2q3==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a2q3=='Pourrait-il'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a2q3.': </strong>C\'est la bonne réponse !</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a2q3.':</strong></p> <p>La bonne réponse est : « Pourrait-il »';}
					 
					 echo'<h3>Question 4</h3>';
					 if($f5a2q4==''){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a2q4=='souhaiterait'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a2q4.': </strong>C\'est la bonne réponse !</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a2q4.':</strong></p> <p>La bonne réponse est : « souhaiterait »';}
					echo'</div>';
					//corrigé3
					 echo' <h3 class="activite">Activité 3 ('.$nf5a3.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question 1</h3>';
					 if($f5a3q1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q1=='si'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q1.': </strong>C\'est la bonne réponse !</p><p class="remarque"> « si » introduit une phrase interrogative indirecte.</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q1.':</strong></p> <p>La bonne réponse est : « si »<p class="remarque">« si » introduit une phrase interrogative indirecte.</p>';}
					 
					  echo'<h3>Question 2</h3>';
					 if($f5a3q2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q2=='ce qui'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q2.': </strong>C\'est la bonne réponse !</p><p class="remarque">« ce qui » introduit une phrase complément d’objet direct.</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q2.':</strong></p> <p>La bonne réponse est : « ce qui »<p class="remarque">« ce qui » introduit une phrase complément d’objet direct.</p>';}
					 
					 echo'<h3>Question 3</h3>';
					 if($f5a3q3=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q3=='si'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q3.': </strong>C\'est la bonne réponse !</p><p class="remarque"> « si » introduit une phrase interrogative indirecte.</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q3.':</strong></p> <p>La bonne réponse est : « si »<p class="remarque">« si » introduit une phrase interrogative indirecte.</p>';}
					 
					  echo'<h3>Question 4</h3>';
					 if($f5a3q4=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q4=='pourquoi'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q4.': </strong>C\'est la bonne réponse !</p><p class="remarque"> « pourquoi » indique la raison/cause de laction.</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q4.':</strong></p> <p>La bonne réponse est : « pourquoi »<p class="remarque">« pourquoi » indique la raison/cause de laction.</p>';}
					 
					  echo'<h3>Question 5</h3>';
					 if($f5a3q5=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q5=='comment'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q5.': </strong>C\'est la bonne réponse !</p><p class="remarque">« comment » indique la manière dont se déroule l’action.</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q5.':</strong></p> <p>La bonne réponse est : « comment »<p class="remarque">« comment » indique la manière dont se déroule l’action.</p>';}
					 
					 echo'<h3>Question 6</h3>';
					 if($f5a3q6=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a3q6=='quand'){
				     echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a3q6.': </strong>C\'est la bonne réponse !</p><p class="remarque">« quand » indique le temps (date, jour, moment, etc).</p>';} 					
					 else {echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a3q6.':</strong></p> <p>La bonne réponse est : « quand »<p class="remarque">« quand » indique le temps (date, jour, moment, etc).</p>';}
					 echo'</div>';
					 //corrigé4
					  echo' <h3 class="activite">Activité 4 ('.$nf5a4.'%)</h3>
					   <div class="list-group-item">
					     <h3>Question 1</h3>';
					  if($f5a4q1=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a4q1=='contentieuse'){
				           echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a4q1.': </strong>C\'est la bonne réponse !</p>';} 
					 elseif($f5a4q1=='litigieuse'){
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q1.':</strong></p> <p>La bonne réponse est : « contentieuse »<p class="remarque">Un litige est un conflit entre personnes ou entreprises et qui peut ou pas conduire à une procédure devant les tribunaux.</p>';}
					
					 else{
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q1.':</strong></p> <p>La bonne réponse est : « contentieuse »<p class="remarque">Qui relève de la justice, qui doit répondre de ses actes.</p>';}
					
					echo'<h3>Question 2</h3>';
					  if($f5a4q2=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a4q2=='anonyme'){
				           echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a4q2.': </strong>C\'est la bonne réponse !</p>';} 
					 elseif($f5a4q2=='inconnu'){
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q2.':</strong></p> <p>La bonne réponse est : « anonyme »<p class="remarque">On parle de quelqu’un ou de quelque chose que ne connaissait pas jusqu’à alors.</p>';}
					
					 else{
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q2.':</strong></p> <p>La bonne réponse est : « anonyme »<p class="remarque">Qu’on doit garder pour soi.</p>';}
					
					echo'<h3>Question 3</h3>';
					  if($f5a4q3=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a4q3=='concordants'){
				           echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a4q3.': </strong>C\'est la bonne réponse !</p>';} 
					 elseif($f5a4q3=='correspondants'){
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q3.':</strong></p> <p>La bonne réponse est : « concordants »<p class="remarque">Se dit de personnes avec qui l’on correspond par lettres, etc.</p>';}
					
					 else{
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q3.':</strong></p> <p>La bonne réponse est : « concordants »<p class="remarque">Qui correspond à quelque chose d’autre tout en ayant le même rôle et le même caractère (exemple : amiral est le grade homologue de Général).</p>';}
					
					echo'<h3>Question 4</h3>';
					  if($f5a4q4=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a4q4=='forfaitaire'){
				           echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a4q4.': </strong>C\'est la bonne réponse !</p>';} 
					 elseif($f5a4q4=='tarifaire'){
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q4.':</strong></p> <p>La bonne réponse est : « forfaitaire »<p class="remarque">Adjectif qui concerne « tarif ».</p>';}
					
					 else{
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q4.':</strong></p> <p>La bonne réponse est : « forfaitaire »<p class="remarque">Se dit d’un produit chargé d’une surtaxe.</p>';}
					
					echo'<h3>Question 5</h3>';
					  if($f5a4q5=='vous n\'avez pas répondu'){echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">vous n\'avez pas repondu:</strong></p>';}
					 elseif($f5a4q5=='infructueux'){
				           echo '<p><span class="fa fa-2x fa-check"></span> <strong class="bonrep">'.$f5a4q5.': </strong>C\'est la bonne réponse !</p>';} 
					 elseif($f5a4q5=='vain'){
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q5.':</strong></p> <p>La bonne réponse est : « infructueux »<p class="remarque">Se dit de quelque chose sans valeur.</p>';}
					
					 else{
					       echo'<p><span class="fa fa-2x fa-close"></span> <strong class="mauvrep">'.$f5a4q5.':</strong></p> <p>La bonne réponse est : « infructueux »<p class="remarque">Se dit d’une mesure ou dispositif.</p>';}
					
					echo'</div>';
					
					;}?></div><!--fin list-group-item-->
			</div><!--fin well principal-->
		</div><!--fin container principal-->
		<hr>
		<footer><!--ANCRE NAVBAR-TOPFIX--><div id="bottom"></div>
			<?php include("../include/corriges/footer.php"); ?> 
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
	</body>
</html>
		  