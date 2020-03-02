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

POUR STOCKER DES INFORMATIONS, ON VA VA CREER UNE BASE DE DONNEES
vitrine 
AVEC LE CHARSET utf8mb4_general_ci




