<?php
/**
 * 
 * Template Name: MON TEMPLATE SERVICES
 * 
 * (attention: pas d'espace avant:)
 * 
 * ANNOTATION: 
 *  COMMENTAIRE POUR LE LANGAGE
 *  MAIS C'EST DU CODE POUR LE FRAMEWORK
 */


// ON PEUT AUSSI RECOMPOSER LE TEMPLATE AVEC DES MORCEAUX

// EN PHP
// SI JE VEUX RECOMPOSER MON TEMPLATE
// ../ PERMET DE REMONTER AU DOSSIER PARENT
// __DIR__ DONNE LE DOSSIER ACTUEL (CELUI DANS LEQUEL LE FICHIER ACTUEL EST RANGE)

// require_once __DIR__ . "/../header.php";
// require_once __DIR__ . "/../template-parts/section-services.php";
// require_once __DIR__ . "/../footer.php";

// AVEC LE FRAMEWORK WORDPRESS
// ON A DES FONCTIONS POUR OBTENIR LE MEME RESULTAT
get_header();
get_template_part("template-parts/section-services"); // ATTENTION ON NE MET PAS .php
get_footer();
