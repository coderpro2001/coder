<?php

// ATTENTION DIFFERENCE ENTRE Boucher ET Bucheron ;-p
// LE Bucheron COUPE LES ARBRES
// LE Boucher COUPE LA VIANDE
class Bucheron
{
    // PROPRIETES static
    static $outil = "Hache";

    // METHODES static
    static function couper ()
    {
        // LECTURE DE LA VALEUR DANS LA PROPRIETE
        echo "(couper avec " . Bucheron::$outil . ")";
    }

}
