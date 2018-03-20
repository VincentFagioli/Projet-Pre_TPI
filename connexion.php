<?php 
//Description:
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
        //On obtient une table existe qui contient le nombre d'entrée correspondant au couple pseudo password
        $query = "SELECT COUNT(*) AS existe FROM user WHERE `username` LIKE '$username'";
        $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]); 
        $ident = $stmt->fetch();
        // Si y a une entrée ou plus cela veut dire que le pseudo et déjà utliser, on va alors afficher un message d'erreur, sinon on inscrit les données dans la database
        if($ident['existe']>0)
        {
              echo"<script language=\"javascript\"> alert('Ce pseudo existe') </script>";     
              $query = "SELECT password FROM `user` WHERE username LIKE '$username'";
              $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]); 
              $ident = $stmt->fetch();
              if (password_verify($password, $ident['password'])) 
              {
                    echo 'Le mot de passe est valide !';
              } 
              else 
              {
                    echo 'Le mot de passe est invalide.';
              }
        }
        else
        {
          echo"<script language=\"javascript\"> alert('Ce pseudo existe pas') </script>";     
        } 
}

//########################## Affichage du contenu de la page ##############################
?>
<html>
    <h3>Page de connexion</h3>
    <form method="post" action="connexion.php">
        Pseudo
        <input type="text" name="username" placeholder="Entrez un pseudo" required>
        Mot de passe
        <input type="password" name="password" placeholder="Entrez un mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</html>