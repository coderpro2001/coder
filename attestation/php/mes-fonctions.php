<?php

// --------------------------------------------------------------
// DECLARATIONS DE NOS FONCTIONS
// --------------------------------------------------------------

// ON PEUT CREER DES FONCTIONS POUR NOUS FACILITER LE CODE
// AVANTAGE1: NE PAS DUPLIQUER DES BLOCS DE CODE IDENTIQUES
// AVANTAGE2: AJOUTER DU CODE DE SECURITE POUR FILTRER CHAQUE INFO EXTERIEURE
function filtrer ($name)
{
    // SECURITE: ?? "" => SI LE NAVIGATEUR N'ENVOIE PAS L'INFO, ON PREND COMME VALEUR PAR DEFAUT ""
    $info = $_REQUEST[$name] ?? "";
    // ON POURRA RAJOUTER PLUS DE SECURITE
    // ...

    return $info;
}

// ETAPE 1: DECLARATION DE LA FONCTION
// => CODE EN ATTENTE
// ICI $tabAssoColonneValeur EST UN PARAMETRE DE LA FONCTION
// => VARIABLE LOCALE A LA FONCTION
function insererLigneSQL($nomTable, $tabAsso)
{
    // MAINTENANT JE PEUX CONSTRUIRE LA REQUETE SQL PREPAREE
    $requeteSQL =
<<<CODESQL

INSERT INTO $nomTable
(nom, prenom, adresse, raison, numero, dateDeclaration) 
VALUES 
(:nom, :prenom, :adresse, :raison, :numero, :dateDeclaration) 

CODESQL;
    // ENSUITE, ON VA ENVOYER LA REQUETE SQL PREPAREE
    // CONNECTER A SQL
    
    // ETAPE1: CONNECTER PHP A SQL
    // ATTENTION: NE PAS OUBLIER DE CHANGER LA DATABASE...
    $pdo = new PDO("mysql:host=localhost;dbname=attestation;charset=utf8;", "root", "");

    // ETAPE2a: ON ENVOIE LA REQUETE PREPAREE
    // PDOStatement EST UN CONTAINER QUI ENGLOBE LES RESULTATS DE LA REQUETE SQL
    $pdoStatement = $pdo->prepare($requeteSQL);

    // ETAPE2b: ON FOURNIT LES DONNEES EXTERIEURES A PART
    $pdoStatement->execute($tabAsso);

    // POUR DEBUG SQL SI BESOIN
    // https://www.php.net/manual/fr/pdostatement.debugdumpparams.php
    // ON ACTIVE CETTE LIGNE SI ON A BESOIN DE DEBUG LES REQUETES SQL...
    // => AFFICHE PLUS D'INFORMATIONS SUR LA REQUETE SQL ENTRE PHP ET SQL
    // $pdoStatement->debugDumpParams();

}

// --------------------------------------------------------------
