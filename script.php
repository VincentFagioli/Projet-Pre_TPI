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

    
    session_start();
    extract($_SESSION); // $UsernameC
    
    $query = "SELECT ID_user FROM `user` WHERE username LIKE '$UsernameC'";
    $stmt = $bdd->query($query) or die ("<br>SQL Error in: <br> $query<br>Error message:".$bdd->errorInfo()[2]); 
    $ident = $stmt->fetch();
    $idusr = $ident['ID_user'];
    
    extract($_POST); //$mark $modele
    if(isset($mark) && isset($modele))
    {           
                $stmt = $bdd->prepare("INSERT INTO `ad` (`ID_ad`, `FK_user`, `make`, `model`, `type`, `seat`, `price`, `commissioning`, `fuel`, `power`, `mileage`, `consumption`, `location`) VALUES (NULL, ?, ?, ?, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '')");  
                $stmt->bindParam(1, $idusr);
                $stmt->bindParam(2, $mark);
                $stmt->bindParam(3, $modele);
                $stmt->execute();
                echo "Success";  
    }
        else{ // Sinon
            echo "Failed";
        
    }
?>
