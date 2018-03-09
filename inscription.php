<?php
//Description: Page d'inscription
// Date:09.03.2018
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

//########################## Traitement (POST) ############################################

//########################## Affichage du contenu de la page ##############################
?>
<html>
    <h3>Page d'inscription</h3>
    <form>
        Pseudo
        <input type="text">
        Mot de passe
        <input type="password">
        <button type="submit">S'inscrire</button>
    </form>
</html>