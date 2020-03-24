<?php

// PROGRAMMATION FONCTIONNELLE

// DECLARATION DE LA FONCTION
// CODE EN ATTENTE
function afficherCoucou ()
{
    echo "(COUCOU FONCTION)";
}

// ACTIVER LE CODE
// APPELER LA FONCTION
afficherCoucou();

// PROGRAMMATION ORIENTE OBJET

// ETAPE 1
// DECLARATION DE LA CLASSE
// CODE EN ATTENTE
class MaClasse
{
    // METHODE
    function afficherCoucou ()
    {
        echo "(COUCOU POO)";
    }
    
}

// ETAPE 2
// AVEC LA POO
// ON DOIT INSTANCIER UN OBJET DEPUIS LA CLASSE
// AVEC L'OPERATEUR new
// UN OBJET EST UNE VALEUR QU'ON PEUT MEMORISER DANS UNE VARIABLE
$objet = new MaClasse;

// ETAPE 3
// ET ENFIN, ON PEUT APPELER LA METHODE A TRAVERS L'OBJET
// -> OPERATEUR D'ACCES
$objet->afficherCoucou();

// IL FAUT AVOIR UNE FONCTION afficherCoucou 
// ET CETTE FONCTION N'UTILISE LE PARAMETRE $objet 
// afficherCoucou($objet);


// EXERCICE
// JE VEUX RANGER DANS UNE CLASSE Exercice UNE METHODE afficherTest1
// QUI VA AFFICHER (TEST1)

// ETAPE 1: DECLARATION
class Exercice
{
    // METHODE
    function afficherTest1 ()
    {
        echo "(TEST1)";
    }    

    function afficherTest2 ()
    {
        echo "(TEST2)";
    }
}

// ETAPE 2: INSTANCIATION OBJET
$objet  = new Exercice;

// ETAPE 3: APPELER LA METHODE
$objet->afficherTest1();
// ON PEUT GARDER LE MEME OBJET POUR APPELER D'AUTRES METHODES DE LA MEME CLASSE
$objet->afficherTest2();


// ON PEUT PLUSIEURS OBJETS
// ET APPELER LA METHODE DE CLASSE Exercice AVEC LE 2E OBJET
$objet2 = new Exercice;
$objet2->afficherTest1();


echo "<h1>PROGRAMMATION PAR CLASSE</h1>";

// ETAPE 1
// CODE ORIENTE OBJET
// MAIS SIMPLIFIE
class MaClasse2
{
    // static => PERMET DE FAIRE DE LA PROGRAMMATION PAR CLASSE ET PAS PAR OBJET
    static function afficherTest ()
    {
        echo "(TEST STATIC)";
    }

}

// ETAPE 2
// SI JE VEUX APPELER LA METHODE static
// => ON N'A PAS BESOIN DE CREER D'OBJET
// :: OPERATEUR DE RESOLUTION DE PORTEE
// https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php
// AUSSI CONNU SOUS LE NOM DE Paamayim Nekudotayim
MaClasse2::afficherTest();
