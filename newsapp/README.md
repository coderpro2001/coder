# NewsFeed App

## Le concept

L'application n'est composée que d'une seule page.

Au chargement du site elle doit afficher un titre, une courte description de l'application, un input et un bouton permettant à l'utilisateur quand il clique d'afficher les derniers gros titres pour le mot clé choisi.

Les données proviendront de l'API News API et seront affichées dans la page sous la forme d'éléments HTML.

## Utilisation de l'API

Lien vers l'API : https://newsapi.org/
L'API News API que vous utiliserez pour ce projet est gratuire mais nécessite de créer un compte utilisateur afin de récupérer la clé d'API qui sera obligatoire pour accéder aux données.

Vous avez accès à la doc et à des exemples d'utilisation ici :
https://newsapi.org/docs/endpoints/top-headlines

Le point d'accès de base (ou endpoint) sera "Top headlines" qui vous propose plusieurs paramètres de recherches (pays, mot clé, etc...). Pour ce projet vous vous limiterez à la recherche par mot clé.

En cas de succès, l'API renverra une liste d'articles, sinon un message d'erreur qui permettra d'informer l'utilisateur.

## Le design

Vous avez toute liberté en ce qui concerne le design de votre application.

Cela dit elle doit présenter la liste des articles obtenus de manière lisible et agréable pour l'utilisateur (choix des couleurs, polices de caractères, etc).

## Bonus

    Rendez votre application responsive ;)
    Ajoutez la possibilité de filtrer par catégorie
