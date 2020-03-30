<?php

// JE VAIS DECLARER LES NOMBRE DE ZONES D'AFFICHAGE POUR LES MENUS
$locations = [
    "primary"       => "MENU PRINCIPAL DE MON THEME",
    "secondary"     => "MENU SECONDAIRE DE MON THEME",
];
// FONCTION DE WORDPRESS QUI ENREGISTRE LES DECLARATION DES MENUS
// https://developer.wordpress.org/reference/functions/register_nav_menus/
register_nav_menus( $locations );


// DECLARE A WORDPRESS QUE NOTRE THEME VEUT UTILISER LES IMAGES A LA UNE
// https://developer.wordpress.org/reference/functions/add_theme_support/
add_theme_support( 'post-thumbnails' );

