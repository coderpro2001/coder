<?php

// DEV1
// CODE FOURNI PAR LE FRAMEWORK
abstract class Framework
{
    protected $h1 = "";

    abstract public function setH1 ($param);

    public function creerPageHtml ()
    {
        echo "(HEADER)";
        echo "<h1>";
        echo $this->h1;
        echo "</h1>";
        echo "(FOOTER)";

    }
}

// LE DEV A BLOQUE L'UTILISATION DE SON FRAMEWORK CAR IL SAIT QU'IL MANQUE DES INFOS...
// Fatal error: Uncaught Error: Cannot instantiate abstract class Framework
// $framework = new Framework;

// POUR UTILISER LE CODE DE FRAMEWORK
// DEV2
class MonProjet
    extends Framework
{
    // AJOUTER LE CODE MANQUANT
    public function setH1 ($param)
    {
        $this->h1 = $param;
    }
}


// MAINTENANT DEV2 PEUT UTILISER LE CODE DU FRAMEWORK
$monProjet = new MonProjet;
$monProjet->setH1("TITRE DE MON PROJET");
// UTILISATION DU CODE DU FRAMEWORK
$monProjet->creerPageHtml();