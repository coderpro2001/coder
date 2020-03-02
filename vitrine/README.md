## CREER UN SITE VITRINE AVEC LES 5 LANGAGES


## PROJET DE SITE VITRINE

    CONCESSIONNAIRE DE VOITURES

    SITE INTERNET POUR PROPOSER UN CATALOGUE DE VOITURE
    (PAS DE E-COMMERCE...)

    index.php       PAGE D'ACCUEIL                  
    catalogue.php   PAGE CATALOGUE
    contact.php     PAGE CONTACT / PRISE DE RDV

    ON COMMENCVE PAR CREER 
    index.php
    catalogue.php
    contact.php

    ET ENSUITE JE COMMENCE A TRAVAILLER DANS index.php

    CODER LA PAGE HTML 
    AVEC UN FICHIER IMAGE
    AVEC UN FICHIER CSS
    AVEC UN FICHIER JS


    vitrine
    ├── README.md
    ├── assets
    │   ├── css
    │   │   └── style.css
    │   ├── img
    │   │   └── voiture.jpg
    │   └── js
    │       └── app.js
    ├── catalogue.php
    ├── contact.php
    └── index.php

## ENSUITE SI ON TRAVAILLE SUR LES AUTRES PAGES

    COMME LE HEADER ET LE FOOTER SONT COMMUNS,
    ON VA UTILISER PHP POUR DECOUPER NOTRE CODE HTML

    ON DECOUPE NOTRE CODE DANS index.php
    EN 3 MORCEAUX 
    php/view/header.php
    php/view/section-index.php
    php/view/footer.php

## ENSUITE, JE PEUX RAJOUTER LES SECTIONS POUR LES AUTRES PAGES

    php/view/section-catalogue.php
    php/view/section-contact.php

    ET ON CREE LES PAGES catalogue.php ET contact.php
    AVEC LES SECTIONS CORRESPONDANTES

    ET ON PEUT RAJOUTER UN MENU DANS header.php POUR NAVIGUER ENTRE CES PAGES

## SQL POUR AVOIR LES 5 LANGAGES

    ON VA UTILISER phpmyadmin
    (LA PLUPART DES HEBERGEMENTS PROPOSENT PHPMYADMIN...)

    POUR STOCKER DES INFORMATIONS, 
    ON VA VA CREER UNE BASE DE DONNEES
    vitrine 
    AVEC LE CHARSET utf8mb4_general_ci


## LIEN ENTRE HTML ET CSS

    SELECTEURS CSS POUR AGIR SUR LE HTML

## LIEN ENTRE HTML ET JS


    DANS LE CODE JS, COMMENT J'AGIS SUR LE HTML

    document.getElementById     => ATTRIBUT HTLK id="titre1"
    document.querySelector      => SELECTEURS CSS
    document.querySelectorAll   => SELECTEURS CSS

    ATTENTION: LES 3 LANGAGES FONCTIONNENT ENSEMBLE

    => FRONT: HTML ET CSS ET JS

    * ROLE DE JS DANS UNE PAGE WEB

    ANIMATION
    INTERACTION


    EN PRATIQUE, ON NE CODE PAS DE ZERO EN JS
    ON VA S'APPUYER SUR DES BIBLIOTHEQUES

    POUR DES ANIMATIONS

    https://animejs.com/

    https://greensock.com/


    POUR LA 2D
    https://phaser.io/

    POUR LA 3D 
    https://www.babylonjs.com/

    OBJECTIF EN JS: MAITRISER LES BASES DU LANGAGE POUR POUVOIR AJOUTER VOTRE CODE SUR LE CODE DES BIBLIOTHEQUES


## AJOUT DE SQL


    SUR LA PAGE contact.php
    ON VA AJOUTER UN FORMULAIRE DE CONTACT
    ET LES MESSAGES LAISSES PAR LES VISITEURS SERONT ENRGEISTRES DANS UNE TABLE SQL

    ON DOIT EN PREMIER CREER UNE BASE DE DONNEES (DATABASE)
    vitrine
    AVEC LE CHARSET utf8mb4_general_ci

    (PRINCIPE: UN PROJET => UNE BASE DE DONNEES)

    ENSUITE, DANS LA BASE DE DONNEES ON PEUT CREER DES TABLES SQL

    ON VA CREER UNE TABLE POUR MEMORISER LES INFOS DU FORMULAIRE DE CONTACT

    => CREER UNE TABLE SQL contact
    => DANS UNE TABLE SQL, ON VA DEFINIR DES COLONNES

    nom     type      
    id      INT              INDEX=PRIMARY     Auto_Increment
    nom     VARCHAR(160)
    email   VARCHAR(160)
    message TEXT


## CODE SQL POUR INSERER UNE NOUVELLE LIGNE

    INSERT INTO `contact` 
    (`id`, `nom`, `email`, `message`) 
    VALUES 
    (NULL, 'nom1403', 'email1403@mail.me', 'message1403');

    ON PEUT ECRIRE UNE VERSION SIMPLIFIEE
    (SANS ESPACE OU CARACTERE SPECIAL DANS LES NOMS DE TABLES ET DE COLONNES)

    INSERT INTO contact 
    (nom, email, message) 
    VALUES 
    ('nom1403', 'email1403@mail.me', 'message1403');


    CE CODE SQL DOIT ETRE ENVOYE PAR PHP POUR INSERER UNE NOUVELLE LIGNE


## EXERCICE POUR CET APRES-MIDI

    CREER UN SITE VITRINE QUI MET EN OEUVRE LES 5 LANGAGES
    HTML, CSS, JS, PHP, SQL





