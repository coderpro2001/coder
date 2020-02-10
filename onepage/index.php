<?php
// ENTRE LES BALISES PHP
// JE PEUX ECRIRE DU CODE PHP

// JE CREE DES VARIABLES AVEC DES VALEURS
$titrePage  = "BIENVENUE SUR MON SITE";
$classeBody = "index";
$age        = 20;
$nomAuteur  = "pauline";
$licence    = "tous droits réservés";
$title      = "MON CV EN LIGNE";
$titre2     = "MES COMPETENCES EN DEV FULLSTACK";

$testFront  = false;
$testBack   = true;
$villeResidence = "Marseille";

// JE POURRAI CONTINER A UTILISER MES VARIABLES 
// DANS LES AUTRES FICHIERS PHP ASSEMBLES AVEC require_once
// JE RECOMPOSE LE CODE HTML AVEC LES TRANCHES DE FICHIERS PHP
require_once "php/view/header.php";
require_once "php/view/section-cv.php";
require_once "php/view/footer.php";

?>
