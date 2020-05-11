<?php

// AU FINAL: php/class/MetierParent.php
// CLASSE COMMUNE => CLASSE PARENTE
// DEV1 OU DEV2 OU DEV3 ???
class MetierParent
{
    protected $nom              = "";

    // SI ON NE VEUT PAS QUE LA CLASSE ENFANT PUISSE UTILISER DU CODE DE CLASSE PARENT
    // => IL FAUT DONNER COMME VISIBILITE private
    private $pasPourLesEnfants  = "interdit aux enfants";

    private function FaireParentPrivate ()
    {
        echo $this->pasPourLesEnfants;
    }

    public function getNom ()
    {
        return $this->nom;
    }

    public function setNom ($param)
    {
        $this->nom = $param;
    }

}

// AU FINAL: php/class/Docteur.php
// DEV 1
class Docteur                       // CLASSE ENFANT Docteur VA HERITER D'UNE CLASSE PARENTE
    extends MetierParent            // HERITAGE AVEC LA CLASSE PARENTE MetierParent
{
    protected $adresseCabinet   = "";

    public function getAdresseCabinet ()
    {
        return $this->adresseCabinet;
    }

    public function setAdresseCabinet ($param)
    {
        $this->adresseCabinet = $param;
    }

}

// AU FINAL: php/class/Astronaute.php
// DEV 2
class Astronaute                    // CLASSE ENFANT Astronaute VA HERITER D'UNE CLASSE PARENTE
    extends MetierParent            // HERITAGE AVEC LA CLASSE PARENTE MetierParent
{
    protected $dateMiseOrbite   = "";

    public function getDateMiseOrbite ()
    {
        return $this->dateMiseOrbite;
    }

    public function setDateMiseOrbite ($param)
    {
        $this->dateMiseOrbite = $param;
    }

}


// MAINTENANT JE PEUX CREER DES OBJETS DES CLASSES ENFANTS
$docteur    = new Docteur;
$astronaute = new Astronaute;


// UN DONNE UN NOM A $docteur
// ON PEUT UTILISER LES METHODES DE LA CLASSE PARENTE MetierParent 
// COMME SI C'ETAIT DES METHODES DE LA CLASSE ENFANT
$docteur->setNom("francis");

$astronaute->setNom("patrick");

echo "<h3>PUBLIC ET PROTECTED</h3>";

echo $docteur->getNom();

// PAR CONTRE LE CODE EN VISIBILITE private
// N'EST PAS ACCESSIBLE AUX CLASSES ENFANTS


echo "<h3>PRIVATE</h3>";
// Notice: Undefined property: Docteur::$pasPourLesEnfants
// echo $docteur->pasPourLesEnfants;

// Fatal error: Uncaught Error: Call to private method MetierParent::FaireParentPrivate()
// echo $docteur->FaireParentPrivate();

