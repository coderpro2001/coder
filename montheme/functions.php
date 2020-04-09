<?php

// LE FICHIER functions.php EST CHARGE 
// AVANT LES AUTRES FICHIERS DU THEME PAR WORDPRESS

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

// SHORTCODE
// https://codex.wordpress.org/Shortcode_API
// LE CLIENT PEUT REDIGER DU TEXTE, 
// MAIS IL PEUT AVOIR BESOIN D’INSERER UN CONTENU PLUS COMPLEXE 
// (PAR EXEMPLE UNE CARTE GOOGLE MAP, OU UN FORMULAIRE, etc…)
// => LE CLIENT NE SERA PAS ASSEZ COMPETENT POUR LE FAIRE

// ON VA AJOUTER LE SHORTCODE [carte]
// [carte]
function carte_func( $atts )
{
    return
<<<CODEHTML
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5807.890850530489!2d5.360126598076349!3d43.294464566131154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0c6a1843729%3A0x7d3f3acf189dc3b1!2sVieux-Port%20de%20Marseille!5e0!3m2!1sfr!2sfr!4v1586246172170!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
CODEHTML;

}
// QUAND LE CLIENT VA ECRIRE DANS LE CONTENU [carte], 
// ALORS WORDPRESS VA APPELER LA FONCTION carte_func
// ET REMPLACER LE SHORTCODE PAR LE TEXTE RENVOYE PAR LA FONCTION
add_shortcode( 'carte', 'carte_func' );
