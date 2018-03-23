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
extract($_GET); // $ID_ad
$query = "SELECT * FROM `ad` WHERE ID_ad =$ID_ad";
$stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]); 
$ident = $stmt->fetch();
extract($ident); // $ID_ad FK_user make model
echo"<h1>Création d'annonce</h1>
        <form action='modifyad.php' method='post'>
            Marque
            <input type='text' id='mark' name='username' value='$make' required>
            Modele
            <input type='text' name='password' id='modele' value='$model' required>
            <input type='submit' id='submit' value='Enregistrer'/>
        </form>";
//########################## Traitement (POST) ############################################

//########################## Affichage du contenu de la page ##############################

//########################## Traitement (POST) ############################################

//########################## Affichage du contenu de la page ##############################

?>

<form ></form>