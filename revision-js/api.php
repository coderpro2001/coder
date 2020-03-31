<?php

// CE FICHIER PHP VA FOURNIR DES DONNEES AU FORMAT JSON

// https://www.php.net/manual/fr/function.json-encode.php
// EN PHP, ON A DES TABLEAUX ASSOCIATIFS
/*
[
    [ "titre" => "titre article1", "contenu" => "contenu1" ],
    [ "titre" => "titre article2", "contenu" => "contenu2" ],
    [ "titre" => "titre article3", "contenu" => "contenu3" ],
    [ "titre" => "titre article4", "contenu" => "contenu4" ],
    [ "titre" => "titre article5", "contenu" => "contenu5" ],
    [ "titre" => "titre article6", "contenu" => "contenu6" ],
]
*/

// ICI POUR FAIRE SIMPLE, JE CONSTRUIS EN DUR LE TABLEAU ASSOCIATIF
// MAIS EN REALITE, ON PASSERAIT PAR FetchAll QUI NOUS FOURNIRAIT
// LE TABLEAU ASSOCIATIF AVEC UNE TABLE SQL
// ...A FAIRE...
// ON VA CREER UNE DATABASE SQL revisionjs AVEC LE CHARSET utf8mb4_general_ci
// ET ON VA CREER UNE TABLE SQL article
// ET DANS LA TABLE ON AURA COMME COLONNES
//  id          INT             INDEX=PRIMARY   A_I
//  titre       VARCHAR(160)
//  contenu     TEXT
//  categorie   VARCHAR(160)
/*
$tabAssociatif = 
    [
        [ "titre" => "titre article1", "contenu" => "contenu1", "categorie" => "sport" ],
        [ "titre" => "titre article2", "contenu" => "contenu2", "categorie" => "sport" ],
        [ "titre" => "titre article3", "contenu" => "contenu3", "categorie" => "sport" ],
        [ "titre" => "titre article4", "contenu" => "contenu4", "categorie" => "cuisine" ],
        [ "titre" => "titre article5", "contenu" => "contenu5", "categorie" => "cuisine" ],
        [ "titre" => "titre article6", "contenu" => "contenu6", "categorie" => "cuisine" ],
        [ "titre" => "titre article7", "contenu" => "contenu7", "categorie" => "voyages" ],
    ];
*/

// AU LIEU DE CODER LE TABLEAU EN DUR EN PHP
// ON VA FAIRE UNE REQUETE SQL 
// POUR ALLER SELECTIONNER LES INFOS DANS LA TABLE SQL article

$requeteSQL =
<<<CODESQL

SELECT * FROM article

CODESQL;

// IL FAUT AJOUTER LE CODE POUR INTERAGIR ENTRE PHP ET SQL
$pdo            = new PDO("mysql:host=localhost;dbname=revisionjs;charset=utf8", "root", "");
$pdoStatement   = $pdo->prepare($requeteSQL);
$pdoStatement->execute();

// fetchAll : PHP VA CHERCHER LES INFOS DE SQL
// ON CONSTRUIT LE TABLEAU DE TABLEAUX ASSOCIATIFS AVEC fetchAll
// VERSION RAPIDE POUR OBTENIR DIRECTEMENT LE TABLEAU DE TABLEAU
$tabAssociatif = $pdoStatement->fetchAll();

// ON PASSE NOTRE TABLEAU ASSOCIATIF PHP EN PARAMETRE DE LA FONCTION json_encode
// ET ON OBTIENT COMME RESULTAT UN TEXTE CODE EN FORMAT JSON
$codeJSON = json_encode($tabAssociatif, JSON_PRETTY_PRINT);

// ON AFFICHE LE CODE JS 
// => TEXTE TRANSMIS SUR INTERNET VERS LE NAVIGATEUR
echo $codeJSON;

// EN JS, ON A DES OBJETS
/*
[
    { titre: 'titre article1', contenu : 'contenu1' },
    { titre: 'titre article2', contenu : 'contenu2' },
    { titre: 'titre article3', contenu : 'contenu3' },
    { titre: 'titre article4', contenu : 'contenu4' },
    { titre: 'titre article5', contenu : 'contenu5' },
    { titre: 'titre article6', contenu : 'contenu6' }
]
*/

