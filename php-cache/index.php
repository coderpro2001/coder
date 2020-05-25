<?php

$extension = "";
$uri = $_SERVER["REQUEST_URI"];
extract(pathinfo($uri));
// => CREE $filename ET $extension

// echo "LE NAVIGATEUR DEMANDE LA PAGE $uri";

// buffer => EN FRANCAIS tampon / cache
// https://www.php.net/manual/fr/function.ob-start.php

// ON VA DETOURNER L'AFFICHAGE VERS UN BUFFER/TAMPON
// (ON ABSORBE LE FLUX DE SORTIE...)
ob_start();

// ON COMPOSE LA PAGE AVEC LES 3 FICHIERS
require_once "php/view/header.php";
require_once "php/view/section.php";
require_once "php/view/footer.php";

// ON VA COLLECTER LE TEXTE DANS UNE VARIABLE PHP
// https://www.php.net/manual/fr/function.ob-get-clean.php
$codeHTML = ob_get_clean();

// ON POURRAIT CHANGER LE CODE HTML 
// $codeHTML = str_replace("h1", "h6", $codeHTML);
$codeHTML = str_replace("titre1", "LE TITRE DU SITE", $codeHTML);

// PROTECTION POUR NE PAS ECRASER LES FICHIERS .php
if ($extension == "html")
{
    // JE PEUX SAUVEGARDER LE CODE HTML DE LA PAGE DANS UN FICHIER
    file_put_contents("$filename.$extension", $codeHTML);
}

// SI JE VEUX AFFICHER LE RESULTAT
echo $codeHTML;
