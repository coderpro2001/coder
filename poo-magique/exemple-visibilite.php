<?php

class User
{
    // propriétés
    public      $login       = "";
    public      $motdepasse  = "";

    // CA PERMET DE GARDER DES PROPRIETES POUR UN USAGE INTERNE A LA CLASSE
    // CA PERMET QUAND ON TRAVAILLE EN EQUIPE DE NE PAS LAISSER 
    // N'IMPORTE QUEL AUTRE DEVELOPPEUR CHANGER LES VALEURS DU CODE
    protected   $proprieteProtected = "une valeur protégée";
    private     $proprietePrivate   = "une valeur private";

    // méthodes

    function changerPropriete ($param1)
    {
        // ICI JE SUIS DANS UNE METHODE DE LA CLASSE
        // JE PEUX CHANGER LA VALEUR DE LA PROPRIETE protected OU private
        $this->proprieteProtected = $param1;
        echo "|";
        $this->proprietePrivate   = $param1;
    }

    function faireTravail ()
    {
        // ICI JE SUIS DANS UNE METHODE DE LA CLASSE
        // JE PEUX UTLISER LES PROPRIETES protected OU private (LECTURE ET ECRITURE)
        echo $this->proprieteProtected;
        echo "|";
        echo $this->proprietePrivate;

    }
}


// SI UNE PROPRIETE EST public, 
// ALORS JE PEUX LIRE ET ECRIRE 
// DANS CETTE PROPRIETE EN DEHORS DES METHODES DE LA CLASSE

$user1 = new User;
// ICI ON EST A L'EXTERIEUR DES METHODES DE LA CLASSE User
// ON PEUT LIRE ET ECRIRE LES VALEURS DES PROPRIETES public
$user1->login = "paul";     // ECRITURE: JE STOCKE UNE VALEUR DANS LA PROPRIETE

echo $user1->login;         // LECTURE: JE PEUX ACCEDER A LA VALEUR DANS LA PROPRIETE

// ERREUR PHP: PHP BLOQUE L'ECRITURE DE LA PROPRIETE protected
// Fatal error: Uncaught Error: Cannot access protected property User::$proprieteProtected
// $user1->proprieteProtected = "NOUVELLE VALEUR";
// Fatal error: Uncaught Error: Cannot access private property User::$proprietePrivate
// $user1->proprietePrivate = "NOUVELLE VALEUR";

// Fatal error: Uncaught Error: Cannot access protected property User::$proprieteProtected
// echo $user1->proprieteProtected;
// Fatal error: Uncaught Error: Cannot access private property User::$proprietePrivate
// echo $user1->proprietePrivate;


echo "<h4>step1</h4>";
$user1->faireTravail();
echo "<h4>step2</h4>";
$user1->changerPropriete("UNE NOUVELLE VALEUR");
echo "<h4>step3</h4>";
$user1->faireTravail();
