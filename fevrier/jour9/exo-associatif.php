<?php


$utilisateur = [
    "nom"           => "robert",
    "prenom"        => "david",
    "mot-de-passe"  => "1234",
    "age"           => 30,
    "payant"        => true,
];

// JE CREE UNE VARIABLE INTERMEDIAIRE
$nom = $utilisateur["nom"];

echo "<h3>LE NOM EST $nom</h3>";

echo "<h3>tableau initial</h3>";

// POUR DEBUGGER
print_r($utilisateur);

echo "<h3>tableau avec mot de passe modifié</h3>";

// JE PEUX CHANGER LA VALEUR ASSCOOCIEE A UNE CLE
$utilisateur["mot-de-passe"] = "abcd";

// POUR DEBUGGER 
// (POUR LE DEVELOPPEUR POUR MIEUX COMPRENDRE LE PROGRAMME)
// https://www.php.net/manual/fr/function.print-r.php
print_r($utilisateur);

echo "<h3>tableau avec information supplémentaire</h3>";

// ON PEUT AJOUTER DES INFORMATIONS SUPPLEMENTAIRES
$utilisateur["ville"] = "marseille";

// POUR DEBUGGER
print_r($utilisateur);

// ATTENTION SI ON NE MET PAS => ON RECUPERE LA VALEUR
// foreach($utilisateur as $valeur)
foreach($utilisateur as $cle => $valeur)
{
    echo "<h4>$cle EST ASSOCIEE AVEC $valeur</h4>";
}
