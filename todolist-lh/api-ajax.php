<?php


// ICI ON VA RECEVOIR LES INFOS DU NAVIGATEUR
// ENVOYEES PAR AJAX

// EN PHP
// ON DES TABLEAUX ASSOCIATIFS (CLE/VALEUR)
// EN JS
// ON A DES OBJETS (PROPRIETE/VALEUR)
// COOL: LA FONCTION json_encode VA FAIRE LA CONVERSION DE PHP VERS JS
// https://www.php.net/manual/fr/function.json-encode.php

$tabAssoReponse = [];
// DEBUG
// ON VA RENVOYER CE QU'ON RECOIT...
$tabAssoReponse["request"] = $_REQUEST;

// ON VA MAINTENANT RECUPERER CHAQUE INFO DU FORMULAIRE
// ET ENSUITE LES STOCKER DANS LA TABLE SQL todo
$tabAssoColonneValeur = [
    // COLONNE SQL      HTML
    // "titre"          name="titre"
    "titre"         =>  $_REQUEST["titre"],
    "description"   =>  $_REQUEST["description"],
    "statut"        =>  $_REQUEST["statut"],
    "photo"         =>  $_REQUEST["photo"],
];

$requetePrepareeSQL = 
<<<CODESQL

INSERT INTO `todo` 
(`id`, `titre`, `description`, `statut`, `photo`) 
VALUES 
(NULL, :titre, :description, :statut, :photo );

CODESQL;


// POUR AJOUTER LA LIGNE DANS LA TABALE SQL
// ETAPE1: SE CONNECTER A LA BASE DE DONNEES
// https://www.php.net/manual/fr/pdo.construct.php
$pdo = new PDO("mysql:host=localhost;dbname=todolist-lh;charset=utf8", "root", "");

// SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
// POUR ENVOYER LA REQUETE
// ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
$pdoStatement = $pdo->prepare($requetePrepareeSQL);
$pdoStatement->execute($tabAssoColonneValeur);

// DEBUG: A ACTIVER SEULEMENT EN CAS DE PROBLEME
// https://www.php.net/manual/fr/pdostatement.debugdumpparams.php
// $pdoStatement->debugDumpParams();

// ON VA FOURNIR DU JSON
echo json_encode($tabAssoReponse, JSON_PRETTY_PRINT);
