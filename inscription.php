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
extract($_POST); // $username $password

if(isset($username) && isset($password))
{
    $stmt = $bdd->prepare("INSERT INTO `user` (`ID_user`, `title`, `firstname`, `lastname`, `username`, `password`, `email`, `phonenumber`, `adress`, `npa`, `locality`) VALUES (NULL, '', '', '', ?, ?, '', NULL, '', NULL, '')");  
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    print_r($stmt);
    echo"<script language=\"javascript\"> alert('inscription réussie') </script>";
}
//########################## Affichage du contenu de la page ##############################
?>
<html>
    <h3>Page d'inscription</h3>
    <form method="post" action="inscription.php">
        Pseudo
        <input type="text" name="username">
        Mot de passe
        <input type="password" name="password">
        <button type="submit">S'inscrire</button>
    </form>
</html>