<?php

// DEV1
// CODE FOURNI PAR LE FRAMEWORK
class Framework
{
    protected $h1 = "";

    public function setH1 ($param)
    {
        $this->h1 = $param;
    }

    public function creerPageHtml ()
    {
        echo "(HEADER)";
        echo "<h1>";
        echo $this->h1;
        echo "</h1>";
        echo "(FOOTER)";

    }
}

// PAS DE BLOCAGE DU FRAMEWORK
// $framework = new Framework;


// POUR UTILISER LE CODE DE FRAMEWORK
// DEV2
class MonProjet
    extends Framework
{
    public function setH1 ($param)
    {
        $this->h1 = "(avant)$param(apres)";
    }
}


// MAINTENANT DEV2 PEUT UTILISER LE CODE DU FRAMEWORK
$monProjet = new MonProjet;
$monProjet->setH1("TITRE DE MON PROJET");
// UTILISATION DU CODE DU FRAMEWORK
$monProjet->creerPageHtml();
