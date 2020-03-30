<?php


// ETAPE1: DECLARATION DE LA CLASSE ET DES METHODES
class Enseignant
{
    // PROPRIETES DE CLASSE => static
    // VOCABULAIRE: UNE PROPRIETE EST UNE VARIABLE RANGEE DANS UNE CLASSE
    static $cours = "PHP";
    // ...

    // PROGRAMMATION PAR CLASSE => METHODE static
    static function faireGreve ()
    {
        echo "(ON FAIT GREVE)";
        // SI JE VEUX UTILISER LA PROPRIETE static
        echo Enseignant::$cours;
    }

    static function corrigerExamen ()
    {

    }

    static function expliquer ()
    {

    }
}
