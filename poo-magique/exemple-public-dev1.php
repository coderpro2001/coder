<?php

class Dev1
{
    // CETTE PROPRIETE EST TROP IMPORTANTE POUR ETRE LAISSEE EN public
    public $infoImportante = "code secret";

    function faireTravail ()
    {
        if ($this->infoImportante == "code secret")
        {
            echo "LA DEMO DE STEVE JOBS MARCHE NICKEL ;-p";
        }
        else
        {
            echo "LA DEMO FOIRE LAMENTABLEMENT DEVANT DES MILLIERS DE PERSONNES";
        }
    }
}


