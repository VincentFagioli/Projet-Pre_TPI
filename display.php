<?php    

            
              
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
            



                $query = "SELECT * FROM ad INNER JOIN user ON FK_user = user.ID_user";
                $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]);  

                echo" <tr>
                    <th>ID_Annonce</th>
                    <th>Créateur</th>
                    <th>Marque</th>
                    <th>Modele</th>
            </tr>";
        
            
                while($ident = $stmt->fetch())
                {
                    extract ($ident); // $FK_user $username $make $model
                    echo"<tr><td>$ID_ad</td><td>$username</td><td>$make</td><td>$model</td></tr>";
                } 
          

  ?>