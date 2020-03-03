## LEVEL 3: BLOG


    UN BLOG EST UN SITE 
    OU UN AUTEUR VA POUVOIR PUBLIER DES ARTICLES REGULIEREMENT.
    SUR QUELLE THEME ?

    PERSONA CLIENT:
    BLOG D'ACTUS

    PAGES DU SITE

    * PARTIE PUBLIQUE (POUR LES VISITEURS)
    accueil     index.php
    news        news.php        (LISTE)
    article     article.php     (UN ARTICLE => TEMPLATE * CONTENU)
        => ICI ON PEUT SE RETROUVER AVEC DES CENTAINES D'ARTICLES
    contact     contact.php

    * PARTIE ADMINISTRATEUR
    admin       admin.php
        => LA PAGE QUI PERMET DE PUBLIER DE NOUVEAUX ARTICLES

    MODELISATION
    => ACTUS
        titre
        contenu article
        image
        date
        categorie
        ...
        url
        chapeau (résumé sous le titre)

    ON VA STOCKER LES INFORMATIONS DANS UNE BASE DE DONNEES
    NOM DE LA BASE DE DONNEES : blog
    ET DANS LA BASE DE DONNEES, JE VAIS CREER UNE TABLE POUR LES ARTICLES: 
    NOM DE LA TABLE:      articles
    ET ENSUITE DANS LA TABLE, ON VA DEFINIR LES COLONNES
    => COMME CHAQUE COLONNE STOCKE UNE INFORMATION
    => LE NOM DES COLONNES VIENT DE LA MODELISATION

    id                  INT             INDEX=PRIMARY   Auto_Increment
    titre               VARCHAR(160)
    contenu             TEXT
    image               VARCHAR(160)
    datePublication     DATETIME        EXEMPLE: 2019-03-03 10:42:23
    categorie           VARCHAR(160)

    => ATTENTION A BIEN CHOISIR LE TYPE DE CHAQUE COLONNE
    => C'EST VOTRE BOULOT DE DEV...

    => BIEN PREPARER LE TERRAIN POUR LE NOM DES COLONNES
    => CAR ON VA RETROUVER CES NOMS DANS PHP ET DANS HTML

    => SI ON EST PRET
    => ON PEUT COMMENCER A CREER LA DATABASE AVEC PHPMYADMIN


## ON PEUT ALLER CODER EN HTML, CSS, JS, PHP, SQL...







