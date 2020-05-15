<?php

// DEV1
// CAS GENERAL
class Employe
{
    protected $poste = "";

    function travailler ()
    {
        echo "<h4>JE FAIS MES 35 HEURES...</h4>";
    }
}

// DEV2
// CAS SPECIFIQUES
class Developpeur
    extends Employe
{
    function travailler ()
    {
        echo "<h4>JE VAIS CODER MON PROJET...</h4>";
    }

}

// DEV3
// CAS SPECIFIQUES
class Graphiste
    extends Employe
{
    function travailler ()
    {
        echo "<h4>JE VAIS CREER UNE MAQUETTE...</h4>";
    }

}

$listeEmploye = [
    new Graphiste,
    new Developpeur,
    new Employe,
    new Employe,
    new Employe,
];

// CETTE PARTIE DU CODE NE CHANGE PAS
foreach($listeEmploye as $employe)
{
    $employe->travailler();
}
