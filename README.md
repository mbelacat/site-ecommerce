# site-ecommerce

Compétences acquises :

- Comprendre la notion de framework
- Positionner ses éléments sur la grille bootstrap
- Intégrer des composants bootstrap à son projet
- Utiliser les styles bootstrap
- Traiter les données d’un formulaire en PHP
- Transmettre des données via l’url
- Gérer une session utilisateur simple
- Rediriger un utilisateur en PHP
- Créer des messages d’erreur
- Créer un template simple en PHP
- Afficher des données
- Utiliser des fonctions de récupération de données
- Créer une base de données
- Créer une table
- Connaître les types de données
- Lire des données
- Supprimer des données
- Enregistrer des données
- Modifier des données
- Se connecter à une base données en PHP
- Requêter une base de données en PHP
- Exploiter les données de la base via une application PHP


Un site e-commerce avec un compte utilisateur

Pour ce premier projet vous allez créer un petit site e-commerce dont l’accès est restreint aux utilisateurs ayant un compte. Pour l’instant, nous n’avons pas encore vu l’usage des bases de données, vos données seront donc stockées et retournées par des fonctions qui vous sont déjà données.

Globalement le principe du site est très simple, la page d’accueil est composée d’un formulaire de connexion. L’utilisateur rentre ses identifiants :

	•	Si ceux-ci correspondent à un des utilisateurs retournés par la fonction d’accès aux utilisateurs du site, alors il est redirigé vers une page produits qui affiche tous les produits retournés par la fonction d’accès aux produits et dans un aside les informations relatives à son profil utilisateur. Les informations de l’utilisateur sont stockées dans une session
	•
	•	Si les identifiants rentrés ne correspondent à rien ou que le formulaire n’est pas rempli, l’utilisateur est renvoyé sur la page d’accueil (celle du formulaire) avec un message d’erreur adéquat.  Les message d’erreur sont transmis par l’url
	•
	•	Attention la page des produits est inaccessible si l’utilisateur n’est pas authentifié ! 
	•	N’oubliez pas de sécuriser les données transmises par le formulaire et l’url
Phase 1:
Concrètement vous aurez  3 pages sur votre site :
- Une page index.php qui affiche le formulaire et qui envoie les données vers la page login.php
- Une page login.php qui récupère les données du formulaire et les traite
- Une page products.php qui affiche les produits à l’utilisateur et ses informations personnelles

Dans votre projet, il y aura un dossier Model, contenant un fichier function.php, dans ce fichiers vous trouverez les fonctions d’accès aux données.

Dans votre projet, il y aura un dossier Template, contenant les fichiers header, footer et aside.php en effet il faut maintenant commencer à gérer votre template grâce au includes.

Phase 2:
Vous continuez de perfectionner votre site de la semaine précédente. Vous allez maintenant intégrer une vraie base de données à votre projet, fini les données écrites à la main dans des fonctions !

Pour cela, vous devrez créer dans votre base les tables suivantes : 
- User
- Product

Je vous laisse établir vous même la conception de ces tables, vous produirez donc obligatoirement un schéma de base de données.

Attention les mots de passe stockés en base de données le sont de manière cryptée. Il ne doivent pas être lisibles en clair dans vos tables. 

De même un utilisateur qui souhaite s’inscrire ne peut pas choisir un nom déjà utilisé dans la base de données. A vous donc de vérifier que ce n’est pas le cas.

Pour l’instant nous laissons le panier tel quel c’est à dire avec un stockage en session simplement.

Phase 2bis:
Vous pouvez si vous le souhaitez réaliser un espace d’administration qui permet la réalisation des opérations du CRUD sur les produits. Votre espace est composé de :
	•	Une page admin qui sert d’accueil et liste les produits sous forme de tableau
	•	Une page ajout qui via un formulaire permet l’ajout d’un produit en BDD
	•	Une page de mise à jour qui permet la modification des informations d’un produit déjà existant via un formulaire
	•	Un bouton placé quelque part permettant la suppression d’un produits
	•	Ces page ne sont accessible qu’aux utilisateurs qui ont le statut ADMIN
    vous affichez des messages d’erreur ou de succès selon les cas de figures
