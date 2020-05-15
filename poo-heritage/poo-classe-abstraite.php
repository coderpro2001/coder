<?php

// DEV1: NE PEUT TOUT CODER (INFOS MANQUANTES...)
// ATTENTION: IL FAUT AJOUTER abstract AVANT class
abstract class MaClasseAbstraite
{
    // METHODES ABSTRAITES
    // ATTENTION: IL FAUT AJOUTER abstract AVANT CHAQUE METHODE ABSTRAITE...
    abstract public function faireTravailAbstract ($param1, $param2);   // ; ET PAS {}

    // METHODES
    public function faireTravailParent ()
    {
        // NORMALEMENT ON ECRIT LE CODE ICI...
        echo "(...CODE DE LA METHODE...faireTravailParent)";
    }

}

// JE NE PEUX PAS CREER D'OBJET DEPUIS CETTE CLASSE ABSTRAITE
// Fatal error: Uncaught Error: Cannot instantiate abstract class MaClasseAbstraite
// $objet = new MaClasseAbstraite;


// PROBLEMATIQUE: 
// SI JE VEUX APPELER LA METHODE faireTravail
// COMMENT ON FAIT ???

// SOLUTION: HERITAGE ENTRE CLASSES
// DEV2: COMPLETE LE TRAVAIL DE DEV1 EN RAJOUTANT LE CODE MANQUANT
class MaClasseEnfant
    extends MaClasseAbstraite       // ON CREE UNE CLASSE ENFANT QUI HERITE DE CLASSE PARENT MaClasseAbstraite
{
    // DANS LA CLASSE ENFANT
    // ON VA FOURNIR LE CODE MANQUANT (SANS LE MOT abstract)
    public function faireTravailAbstract ($param1, $param2)
    {
        // ICI IL FAUT RAJOUTER LE CODE MANQUANT
        echo "(...VOICI LE CODE MANQUANT...faireTravailAbstract)";
    }

}


// ON PEUT CREER UN OBJET DEPUIS LA CLASSE MaClasseEnfant
$objet = new MaClasseEnfant;
$objet->faireTravailParent();

$objet->faireTravailAbstract("valeur1", "valeur2");



