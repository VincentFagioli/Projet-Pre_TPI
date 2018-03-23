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
session_start();
extract($_SESSION); // $UsernameC
//########################## Traitement (GET) ############################################

//########################## Traitement (POST) ############################################

//########################## Affichage du contenu de la page ##############################
 $query = "SELECT * FROM ad INNER JOIN user ON FK_user = user.ID_user WHERE user.username LIKE '$UsernameC'";
                $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]);  

              
                while($ident = $stmt->fetch())
                {
                    extract ($ident); // $FK_user $username $make $model
                    echo"<table> <tr>
                    <th>ID_Annonce</th>
                    <th>Créateur</th>
                    <th>Marque</th>
                    <th>Modele</th>
            </tr><tr><td>$ID_ad</td><td>$username</td><td>$make</td><td>$model</td></tr></table><br><form method=get' action='myad.php'><button  id='$ID_ad'>Aperçu</button> </form>    <form method=get' action='modifyad.php'><button name='ID_ad' value='$ID_ad' id='$ID_ad'>Modifier</button></form>  <form method=get' action='myad.php'> <button id='$ID_ad'>Supprimer</button> </form>";       
                } 
               

?>
