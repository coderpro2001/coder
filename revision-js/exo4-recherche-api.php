<?php

// EN PHP, IL FAUT RECUPERER LE TEXTE SAISI
// AJAX OU FORMULAIRE, POUR PHP C'EST PAREIL ;-p
// INFO PROVENANT EXTERIEUR => DANGER ATTAQUE HACKER
// (INJECTION SQL)
$recherche = $_REQUEST["recherche"] ?? "";

// AVEC LIKE C'EST SQL QUI FAIT TOUT LE TRAVAIL ;-p
// https://sql.sh/cours/where/like
$tabAssoColVal = [ "titre" => "%$recherche%" ];

$requetePrepareeSQL =
<<<CODESQL

SELECT * FROM article
WHERE
titre LIKE :titre
OR
contenu LIKE :titre
OR
categorie LIKE :titre

CODESQL;

$pdo            = new PDO("mysql:host=localhost;dbname=revisionjs;charset=utf8", "root", "");
$pdoStatement   = $pdo->prepare($requetePrepareeSQL);
$pdoStatement->execute($tabAssoColVal);

$tabAssociatif = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

$codeJSON = json_encode($tabAssociatif, JSON_PRETTY_PRINT);

echo $codeJSON;
