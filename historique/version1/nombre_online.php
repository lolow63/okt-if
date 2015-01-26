<?php
$tps_max_connex = 180;
$temps_actuel = date("U");
$sql = 'SELECT count(*) FROM nb_online WHERE ip= "'.$_SERVER['REMOTE_ADDR'].'"';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$data = mysql_fetch_array($req);
mysql_free_result($req);
if ($data[0]) {
	$sql = 'UPDATE nb_online SET time = "'.$temps_actuel.'" WHERE ip = "'.$_SERVER['REMOTE_ADDR'].'"';
	$req = mysql_query($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	}
 else {
 	$sql = 'INSERT INTO nb_online VALUES("'.$_SERVER['REMOTE_ADDR']. '", "'.$temps_actuel.'")';
 	$req = mysql_query($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
 	$heure_max = $temps_actuel - $tps_max_connex;
 	$sql2 = 'DELETE FROM nb_online where time < "'.$heure_max.'"';
 	$req2 = mysql_query($sql2) or die ('Erreur SQL !<br/>'.$sql2.'<br/>'.mysql_error()); }
 	?>




