<?php

// CODE TEMPORAIRE (A AMELIORER...)
// ON FAIT DE L'AJAX
// ON DONC VA RENVOYER DU JSON
$tabAssoJson = [];
$tabAssoJson["request"] = $_REQUEST;

// EN FAIT C'EST QUOI UNE API ???
// Application Programming Interface
// => C'EST UN MOYEN POUR NOTRE PROGRAMME SERVEUR 
//      D'ETRE ACTIVE DEPUIS L'EXTERIEUR (PAR UN NAVIGATEUR)
// SI DANS PHP, ON FAIT DE LA POO
// => TOUT NOTRE CODE EST RANGE DANS DES METHODES DANS DES CLASSES
// => UNE API CONSISTE DANS CE CAS A APPELER UNE METHODE DANS UNE CLASSE PHP

// ON DONNE LA POSSIBILITE DE CHOISIR LA CLASSE Api ET LA METHODE A ACTIVER
$classeApi  = $_REQUEST["classeApi"] ?? "User";
$methodeApi = $_REQUEST["methodeApi"] ?? "";

// ON VA VERIFIER SI CETTE METHODE EXISTE DANS MON ApiUser
// ASSEZ SPECIAL EN PHP
// https://www.php.net/manual/fr/function.is-callable
$codeApi = "Api$classeApi::$methodeApi";
if (is_callable($codeApi))
{
    // SI PHP A TROUVE LA METHODE
    // ALORS, ON PEUT L'ACTIVER...
    $codeApi();
}

// ON VA RECUPERER LA REPONSE DANS LA PROPRIETE
$tabAssoJson["confirmation"] = ApiUser::$confirmation;
$tabAssoJson["cleApi"]       = ApiUser::$cleApi;

// CONVERTIR LE TABLEAU ASSOCIATIF EN TEXTE FORMATTE EN JSON
// https://www.php.net/manual/fr/function.json-encode.php
$texteJSON = json_encode($tabAssoJson, JSON_PRETTY_PRINT);

echo $texteJSON;

/*

*/





