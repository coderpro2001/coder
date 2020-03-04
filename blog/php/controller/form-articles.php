<?php

// TRAITEMENT DU FORMULAIRE DE CREATION D'ARTICLE
if (count($_REQUEST) > 0)
{
    // DEBUG
    // echo "JE DOIS TRAITER LE FORMULAIRE";

    // $_REQUEST EST UN TABLEAU ASSOCIATIF

    /*
    // ETAPE1: RECUPERER LES INFOS DU FORMULAIRE
    $titre           = $_REQUEST["titre"];
    $contenu         = $_REQUEST["contenu"];
    $image           = $_REQUEST["image"];
    $datePublication = $_REQUEST["datePublication"];
    $categorie       = $_REQUEST["categorie"];


        // ON PASSE PAR UN TABLEAU SUPPLEMENTAIRE
    // OU ON VA DONNER LES VALEURS EXTERIEURES A MEMORISER
    // SIMPLIFICATION: JE PEUX ENLEVER LES :
    $tabAssoColonneValeur = [
        "titre"            => $titre,
        "contenu"          => $contenu,
        "image"            => $image,
        "datePublication"  => $datePublication,
        "categorie"        => $categorie,
    ];
    */

    // CONSEIL: UTILISER LES MEMES NOMS PARTOUT
    // "nom de la colonne SQL" => $_REQUEST["attribut name HTML"]
    
    $tabAssoColonneValeur = [
        "titre"            => $_REQUEST["titre"],
        "contenu"          => $_REQUEST["contenu"],
        "image"            => $_REQUEST["image"],
        "datePublication"  => $_REQUEST["datePublication"],
        "categorie"        => $_REQUEST["categorie"],
    ];

    // ETAPE2: ON VA CONSTRUIRE LA REQUETE SQL INSERT
    // POUR SE PROTEGER, ON NE VA PAS CONCATENER AVEC DES ELEMENTS EXTERIEURS
    $requeteSQL   =
<<<CODESQL

INSERT INTO articles
( titre, contenu, image, datePublication, categorie)
VALUES
( :titre, :contenu, :image, :datePublication, :categorie) 

CODESQL;


    // ETAPE3: ON VA ENVOYER LA REQUETE SQL 
    // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
    require_once "php/model/envoyer-sql.php";

    // MESSAGE DE CONFRFIRMATION
    echo "VOTRE ARTICLE A ETE PUBLIE ($requeteSQL)";
}


