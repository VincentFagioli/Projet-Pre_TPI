<?php
//Description:index du site
// Date: 09.03.2018
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
session_start();
extract($_SESSION); // $UsernameC
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
if(isset($UsernameC))
{
    //echo"<script language=\"javascript\"> alert('Connexion réussie') </script>";    
    echo "<html><h4>Bienvenue:$UsernameC</h4><form method='post' action='index.php'> <button name='deco' value='deco' type='submit'>deconnexion</button></form><br><br><br><a href='ad.php'>Ajouter une annonce</a></html>";
}
else
{
   echo '<html> <h3>Bienvenue, pour vous inscrire ou vous connecter utliser les 2 liens ci-dessous</h3><a href="connexion.php">connexion</a>
<a href="inscription.php">inscription</a><br><br></html>'; 
}


  $query = "SELECT * FROM ad INNER JOIN user ON FK_user = user.ID_user";
                $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]);  

                echo"<table> <tr>
                    <th>ID_Annonce</th>
                    <th>Créateur</th>
                    <th>Marque</th>
                    <th>Modele</th>
            </tr>";
        
            
                while($ident = $stmt->fetch())
                {
                    extract ($ident); // $FK_user $username $make $model
                    echo"<tr><td><a href='adInDetail.php?id_ad=$ID_ad'>$ID_ad</a></td><td>$username</td><td>$make</td><td>$model</td></tr>";
                } 
                echo"</table>"

?>


