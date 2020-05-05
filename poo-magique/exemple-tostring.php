<?php


// EN DEV WEB
// ON CONSTRUIT LES MORCEAUX DE HTML A PART
// ET ENSUITE ON LES CONCATENE POUR OBTENIR LA PAGE COMPLETE

$header = "(HEADER)";
// $main   = "(MAIN)";
$footer = "(FOOTER)";


// TRAVAIL DU DEV1:
// AU LIEU DE CREER UN TEXTE POUR LA VARIABLE $main
// IL PEUT CODER EN POO ET AJOUTER UNE CONVERSION OBJET => TEXTE

// ET SI ON POUVAIT UTLISER UN OBJET DANS LA CONCATENATION ?
class Main
{
    // PROPRIETE
    public $contenu = "";

    // METHODE __construct
    function __construct($param1)
    {
        // JE MEMORISE LA VALEUR DE $param1 DANS LA PROPRIETE contenu
        $this->contenu = $param1;
    }

    function __toString()
    {
        // SI ON VEUT UTILISER L'OBJET COMME UN TEXTE
        // JE DONNE LE TEXTE QUI VA REMPLACER L'OBJET
        return $this->contenu;
    }
}

$main = new Main("contenu de la page");
// => SANS LA METHODE MAGIQUE __toString
// => ERREUR 
// => Recoverable fatal error: Object of class Main could not be converted to string




// TRAVAIL EN EQUIPE: DEV2 VEUT CONCATENER DES TEXTES

$pageComplete =
<<<CODEHTML

$header
$main
$footer

CODEHTML;

echo $pageComplete;
