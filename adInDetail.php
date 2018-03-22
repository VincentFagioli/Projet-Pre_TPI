<?php
//Description:
// Date:
// Auteur:Vincent Fagioli
 
//########################## Connexion DB ############################################
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=tpi;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
//########################## Traitement (SESSION) ############################################

//########################## Traitement (GET) ############################################
extract($_GET); // $id_Ad

$query = "SELECT * FROM `ad` WHERE ID_ad =$id_ad";
$stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]); 
$ident = $stmt->fetch();
extract($ident); // $ID_ad FK_user make model
//########################## Traitement (POST) ############################################

//########################## Affichage du contenu de la page ##############################
echo"<html><h1>Annonce numéro: $ID_ad</h1><br><table><tr><th>Marque</th><th>Modele</th></tr><td>$make</td><td>$model</td></table></html>";
?>

