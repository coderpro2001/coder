<?php

// VALABLE POUR N'IMPORTE QUELLE REQUETE SQL
// CREATE
// READ
// UPDATE
// DELETE

// ETAPE1: CONNECTER PHP A SQL
$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");
// https://www.php.net/manual/fr/pdo.query.php
// PDOStatement EST UN CONTAINER QUI ENGLOBE LES RESULTATS DE LA REQUETE SQL
$pdoStatement = $pdo->prepare($requeteSQL);
$pdoStatement->execute($tabAssoColonneValeur);


