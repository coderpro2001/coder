<?php

// AU DEBUT, LES 2 DEVS SE METTENT D'ACCORD SUR UNE INTERFACE
interface MonInterface1
{
    // METHODES QUI DOIVENT ETRE CREEES
    function afficherPage ();
    function envoyerEmail ();
}

// CHAQUE DEV PEUT TRAVAILLER DANS SON COIN

// DEV1
class MaClasse1
    implements MonInterface1        // LE DEV1 S'ENGAGE ICI A RESPECTER MonInterface1
{
    // PHP VA VERIFIER SI LES METHODES SONT BIEN DEFINIES
    // => SINON PHP VA PREVENIR AVEC UNE ERREUR
    // Fatal error: Class MaClasse1 contains 2 abstract methods and must therefore be declared abstract 
    // or implement the remaining methods 

    function afficherPage ()
    {
        // ATTENTION: PHP SE CONTENTE DE VERIFIER QUE LE BLOC D'ACCOLADE EST PRESENT
        // MAIS IL PEUT ETRE VIDE ;-p
    }

    function envoyerEmail ()
    {

    }

}


// DEV2
class MaClasse2
{

    function faireTravail()
    {
        // JE PEUX UTILISER LE CODE DE DEV1
        $objet = MaClasse1;
        $objet->afficherPage(); // GRACE A L'INTERFACE, LE DEV2 SAIT QUELLE METHODE IL PEUT APPELER
    }
}
