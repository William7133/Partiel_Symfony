# Partiel_Symfony

Question 1 : Un conteneur de service (ou conteneur d'injection de dépendance ) est simplement un objet PHP qui gère l'instanciation de services (c'est-à-dire des objets).

Rôle : C'est assez simple. L'imaginaire Mailerclasse vous permet de configurer la méthode utilisée pour délivrer les messages électroniques (par exemple sendmail, smtpetc.). Et si vous vouliez utiliser le service de messagerie ailleurs? Vous ne voulez certainement pas répéter la configuration de l'expéditeur à chaque fois que vous devez utiliser l' Mailerobjet. Que faire si vous avez besoin de changer transportde sendmailde smtppartout dans l'application? Vous devez rechercher chaque endroit où vous créez un Mailerservice et le modifier.

Question 2 : Make:entity sert à créer une entité dans doctrine. 
             Make:user sert à créer une classe user qui servira pour la partie sécurité de symfony.
             
Question 3 : Nous devons utiliser la commande doctrine:fixture:load

Question 4 : Semver est une librairie qui offre des services ainsi qu'une résolution des problèmes de versions.

Question 5 : Un repository est un patron de conception qui sert à maintenir une bonne architecture logicielle.

Le patron de conception repository permet d'encapsuler les requêtes lancées à la base de données. Grâce au repository, la règle « Thin controllers, fat models » est renforcée. De plus, les méthodes développées pour un repository pourront facilement être réutilisées dans votre application. Finalement, il est plus facile de tester un repository qu'un contrôleur puisque moins de dépendances sont en jeu.

Question 6 : il faut utiliser cette commande :  "php bin/console debug:router"

Question 7 : 

Question 8 : on peut utiliser "doctrine:schema:update --force"

Question 9 : Il faut utiliser la commande :  "php bin/console make:controller BrandNewController"

Question 10 : Flex est un outil Symfony qui permet d'ajouter des nouvelles briques en déployant le moins d'effort possible. En effet, l'ajout d'une brique dans une application nécessite souvent d'ajouter un minimum de configuration, d'enregistrer des nouvelles routes, etc. 


