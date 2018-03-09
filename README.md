# Projet-Pre_TPI
Ce projet est réalisé dans le cadre du cours projet Pré_TPI. 
Le sujet est: Création d’un site Web facilitant l’achat et la vente de véhicules d’occasions. La recherche de véhicules sera particulièrement pratique et complète.   

Voici un descriptif des principales fonctionalités du site:

  -	Partie « administrateur » (avec authentification) :
 
 -	Modération du site :
  
-	L’administrateur seul, par l’intermédiaire d’une interface de gestion disponible sur son site, pourra supprimer des annonces sans qu’il en soit l’auteur.
-	L’administrateur seul devra approuver une annonce avant qu’elle ne paraisse, ceci pour éviter la pollution du site par des annonces indésirables. Pour lui simplifier la vie, une page spéciale avec les nouvelles annonces non encore approuvées lui apparaîtra dès qu’il sera authentifié.

-	Gestion des utilisateurs :

L’administrateur seul, par l’intermédiaire d’une interface d’administration, pourra supprimer un utilisateur.



-	Partie « utilisateur » (sans authentification) :

-	Le visiteur pourra effectuer des recherches sans s’être authentifié, le système affichant les 10 premiers véhicules trouvés (si possible avec une petite photo) et offrant la possibilité d’aller voir les suivants. Il pourra le faire avec au moins 12 critères dont :
-	La marque de véhicule
-	Le modèle de véhicule
-	Le type de véhicule (voiture, moto, …)
-	Le nombre de places min
-	Le prix min et/ou max
-	L’année min et/ou max de mise en service
-	Le type de carburant (essence, diesel, gaz, électrique)
-	La puissance (lisible en kW et CV)
-	Le kilométrage max
-	La consommation
-	La distance maxi à une ville de Suisse.
-	…

-	Par clic sur un véhicule dans la liste de recherche, le visiteur pourra voir tous les détails du véhicule, y compris des photos.

-	Le visiteur pourra envoyer un mail au vendeur pour lui poser une question ou lui demander de réserver la voiture.

-	Le visiteur pourra accéder à l’authentification ou à la création d’un nouvel utilisateur.
 


-	Partie « utilisateur » (avec authentification) :

-	L’utilisateur authentifié pourra insérer une nouvelle annonce en remplissant les champs nécessaires, certains champs étant indispensables et d’autres facultatifs. Il pourra ajouter des photos. La durée de validité d’une annonce est fixée à 2 semaines, après quoi l’annonce ne paraitra plus.

-	L’utilisateur authentifié peut repérer certains véhicules comme favoris et retrouver cette liste lors de sa prochaine connexion.

-	L’utilisateur authentifié peut retrouver ses annonces, les modifier ou les supprimer. Il peut aussi retrouver les anciennes annonces dont la validité est dépassée et choisir de les republier.
