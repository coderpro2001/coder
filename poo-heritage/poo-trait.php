<?php

trait MetierParent
{
    public $nom;
    function getNom()
    {
        return $this->nom;
    }
}

trait MonTrait2
{
    public $poste;
    function getPoste()
    {
        return $this->poste;
    }

}

class Docteur
{
    // ATTENTION: ON EST L'INTERIEUR DU {}
    use MetierParent, MonTrait2;
}


class Astronaute
{
    // ATTENTION: ON EST L'INTERIEUR DU {}
    use MetierParent, MonTrait2;

}

echo "<hr>";
$docteur = new Docteur;
$docteur->nom = "WHO";
echo $docteur->getNom();

echo "<hr>";
$astronaute = new Astronaute;
$astronaute->nom = "BUCK ROGERS";
echo $astronaute->getNom();

