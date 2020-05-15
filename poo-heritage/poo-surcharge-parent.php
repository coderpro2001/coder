<?php

class Employe
{
    function travailler ()
    {
        echo "<h4>JE FAIS MES 35 HEURES...</h4>";
    }
}


class Testeur
    extends Employe
{
    function travailler ()
    {
        // SI ON VEUT FAIRE APPEL A LA METHODE DANS LA CLASSE PARENTE
        parent::travailler();
        echo "<h4>JE FAIS MES TESTS...</h4>";
    }
    
}

$testeur = new Testeur;
$testeur->travailler();     // ON APPELLE LA METHODE DE LA CLASSE ENFANT Testeur
