<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
(CODE DU HEADER)
(CODE DE LA SECTION1)
(CODE DE LA SECTION2)
(CODE DU FOOTER)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// ETAPE1: AJOUTER LE CODE POUR NE PLUS AVOIR D'ERREURS PHP
// Fatal error: Uncaught Error: Class 'PageV2' not found
// => IL FAUT CREER LA CLASSE PageV2
// Fatal error: Uncaught Error: Call to undefined method PageV2::ajouter()
// => IL FAUT AJOUTER LA METHODE D'OBJET ajouter DANS LA CLASSE PageV2
// Fatal error: Uncaught Error: Call to undefined method PageV2::afficherTab()
// => IL FAUT AJOUTER LA METHODE D'OBJET afficherTab DANS LA CLASSE PageV2

// ETAPE2: ANALYSER LE CODE DU DEV2 POUR COMPRENDRE LA STRUCTURE DES INFOS FOURNIES
// ON A DES PAIRES CLE/VALEUR
// => TABLEAU ASSOCIATIF
// ASTUCE: ON UTILISE UNE PROPRIETE COLLECTIVE (static)
//          => PERMET DE PARTAGER DES INFOS ENTRE DIFFERENTS OBJETS


class PageV2
{
    // PROPRIETES COLLECTIVES (static)
    // => PERMET DE STOCKER DES INFOS POUR LES REUTILISER A TRAVERS DIFFERENTES METHODES
    public static $tabAsso = [];

    // METHODES D'OBJET
    function ajouter ($cle, $valeur)
    {
        // ON VA MEMORISER LES PARAMETRES DANS UN TABLEAU ASSOCIATIF
        // ON UTILISE UNE PROPRIETE COLLECTIVE DE CLASSE (static)
        PageV2::$tabAsso[$cle] = $valeur;
        // echo "<hr>";
        // var_dump(PageV2::$tabAsso);
    }

    function afficherTab ($tabCle)
    {
        // ON A 2 TABLEAUX 
        // $tabCle EST UN TABLEAU ORDONNE AVEC LES CLES
        // PageV2::$tabAsso EST UN TABLEAU ASSOCIATIF
        // ON VEUT ACCEDER AUX VALEURS DU TABLEAU ASSOCIATIF
        // => ON VA FAIRE UNE BOUCLE SUR $tabCle POUR AVOIR LES ELEMENTS DANS LE BON ORDRE
        foreach($tabCle as $cle)
        {
            // echo "($cle)";
            // A PARTIR DE LA CLE
            // JE DOIS RETROUVER LA VALEUR ASSOCIEE
            $valeur = PageV2::$tabAsso[$cle];
            echo $valeur;
        }
    }
}




// CODE NON MODIFIABLE
// PHASE1:ON CREE LE TEMPLATE header ET footer => IDENTITE VISUELLE
$objet1 = new PageV2;
$objet1->ajouter("header", "(CODE DU HEADER)");

$objet2 = new PageV2;
$objet2->ajouter("footer", "(CODE DU FOOTER)");

// PHASE2: POUR CHAQUE PAGE, ON VA RAJOUTER LE CONTENU DE LA PAGE
// => ON REMPLIT LE TEMPLATE AVEC LE CONTENU DE LA PAGE
$objet3 = new PageV2;
$objet3->ajouter("section1", "(CODE DE LA SECTION1)");

$objet4 = new PageV2;
$objet4->ajouter("section2", "(CODE DE LA SECTION2)");

// PHASE3: ON CREE LE CODE FINAL AVEC LES ELEMENTS DANS LE BON ORDRE
$objet5 = new PageV2;
$objet5->afficherTab(["header", "section1", "section2", "footer"]);

