<?php
//Description:index du site
// Date: 09.03.2018
// Auteur:Vincent Fagioli
 
//########################## Connexion DB ############################################

//########################## Traitement (SESSION) ############################################
session_start();
extract($_SESSION); // $UsernameC
if(isset($UsernameC))
{
    //echo"<script language=\"javascript\"> alert('Connexion réussie') </script>";    
    echo "<html><h4>Bienvenue:$UsernameC</h4></html>";
}
//########################## Traitement (GET) ############################################

//########################## Traitement (POST) ############################################

extract($_POST); //$deco
if(isset($deco))
{
    $_SESSION = array ();
    session_destroy();
    header('Refresh: 0');
}
//########################## Affichage du contenu de la page ##############################
echo '<html> <h3>Bienvenue, pour vous inscrire ou vous connecter utliser les 2 liens ci-dessous</h3><a href="connexion.php">connexion</a>
<a href="inscription.php">inscription</a><br><br><form method="post" action="index.php"> <button name="deco" value="deco" type="submit">deconnexion</button></form></html>';
?>
