<?php

/**
 * Plugin Name: MON SUPER PLUGIN DE LA MORT QUI TUE
 */

 // SHORTCODE
// https://codex.wordpress.org/Shortcode_API
// LE CLIENT PEUT REDIGER DU TEXTE, 
// MAIS IL PEUT AVOIR BESOIN D’INSERER UN CONTENU PLUS COMPLEXE 
// (PAR EXEMPLE UNE CARTE GOOGLE MAP, OU UN FORMULAIRE, etc…)
// => LE CLIENT NE SERA PAS ASSEZ COMPETENT POUR LE FAIRE

// ON VA AJOUTER LE SHORTCODE [visite]
// [visite]
function visite_func()
{
    // ON VA STOCKER LE NOMBRE DE VISITE DANS UN CHAMP PERSONNALISE (CUSTOM FIELDS)
    // https://developer.wordpress.org/reference/functions/post_custom/
    $nbVisite = intval(post_custom("nbVisite"));

    // ON VA AJOUTER UN AU NOMBRE DE VISITE (INCREMENTATION)
    $nbVisite++;

    // IL FAUT ENREGISTRER LA NOUVELLE VALEUR DANS LE CHAMP PERSONNALISE
    // JE VAIS PASSER PAR ACF ;-p
    // https://www.advancedcustomfields.com/resources/update_field/
    update_field("nbVisite", $nbVisite);

    // ADRESSE IP DU NAVIGATEUR
    $adresseIp = $_SERVER["REMOTE_ADDR"];

    return
<<<CODEHTML
    <h4>cette page a été visitée $nbVisite fois</h4>
    <h5>ton adresse ip est: $adresseIp</h5>
CODEHTML;

}
// QUAND LE CLIENT VA ECRIRE DANS LE CONTENU [visite], 
// ALORS WORDPRESS VA APPELER LA FONCTION carte_func
// ET REMPLACER LE SHORTCODE PAR LE TEXTE RENVOYE PAR LA FONCTION
add_shortcode( 'visite', 'visite_func' );
