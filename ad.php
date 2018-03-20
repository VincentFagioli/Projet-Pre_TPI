<!DOCTYPE html>
<html>
<head> <meta charset="utf-8" /> </head>

<body>
    <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>
        <h1>Création d'annonce</h1>
    <form>
        Marque
        <input type="text" id="mark" name="username" placeholder="Entrez une marque" required>
        Modele
        <input type="text" name="password" id="modele" placeholder="Entrez un modèle" required>
        <input type="submit" id="submit" value="Créer l'annonce" />
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>
 
<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'script.php', // Un script PHP que l'on va créer juste après
            {
                mark : $("#mark").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                modele : $("#modele").val()
            },
 
            function(data){
 
                if(data == 'Success'){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
 
                     $("#resultat").html("<p>Annonce créer avc succés !</p>");
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
 
                     $("#resultat").html("<p>Erreur lors de la création...</p>");
                }
         
            },
            'text'
         );
    });
});
 
</script>
