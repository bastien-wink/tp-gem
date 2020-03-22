#Précisions

Ce projet n'utilise pas l'ORM, mais une génération aléatoire d'objets.
Vous n'avez pas à travailler dans generateRandomOrders() du OrderController (il remplace ici un appel en base de donnée pour les besoins du TP).

Le projet inclu toutes les dépendances, il suffit de le télécharger, puis éxécuter la commande suivante dans le dossier

`php -S localhost:8000 public/index.php`

#Besoin

##(A) Améliorer l'interface de factures
1. Passer le nom du client en majuscule
2. Afficher l'heure d'achat en plus de la date d'achat
3. Afficher le total du chiffre d'affaire au dessus du tableau
4. Ajouter au tableau une colonne Prix TTC qui affiche le prix +20%

##(B) Ajouter une section Produits
1. Ajouter une page "Voir les produits" accessible depuis le menu. Cette page doit afficher tout les produits du magasin et leur prix. Cette liste se trouve dans une constante GemService::GEM_PRICES.
2. Afficher en rouge les lignes dont le prix est suppérieur à 80€