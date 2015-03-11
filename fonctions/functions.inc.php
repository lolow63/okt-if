<?php
function exist_deja($x) 
	{	try {
			include 'cnx_db.php';
			$rs=$con->query("SELECT COUNT(*) FROM users WHERE email='$x'"); 
		//$rs->setFetchMode(PDO::FETCH_OBJ); // rs: objet resultat
			}
		catch(PDOException $e)
			{
				echo 'Server-Side Error : <br />';
			}
	if ($rs->fetchColumn() > 0)
		{ return true ;	}
	else {return false ;}
	}
	
	 function Ajout_resultat($r,$total){
      include 'cnx_db.php';
        try {
       $rs=$con->query("SELECT COUNT(*) FROM fiche WHERE numero_fiche='$r'");
        }
		catch(PDOException $e)
			{
				echo 'Server-Side Error : <br />';
			}
			if ($rs->fetchColumn() > 0)
				{ 	$con->exec("UPDATE fiche SET resultat_fiche='$total' WHERE numero_fiche='$r'");
			         echo'modifier';}
            else {$con->exec("INSERT INTO fiche VALUES('','$r','1','$total',NOW())");
                    echo'ajouter';}
	 }
	
	
	
	
	?>