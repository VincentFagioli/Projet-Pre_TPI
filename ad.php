<!DOCTYPE html>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <head> 
        <meta charset="utf-8" /> 
    </head>

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
        <br><br><br><br>
        <table>
            <div id="display_info" >
        </table>
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
                                  $.ajax({
      type: 'post',
      url: 'display.php',
      data: {
       user_name:name,
      },
      success: function (response) {
       // We get the element having id of display_info and put the response inside it
       $( '#display_info' ).html(response);
      }
      });
                     $("#resultat").html("<p>Annonce créer avec succés !</p>");
                        
                
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
