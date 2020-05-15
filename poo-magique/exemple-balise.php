<?php

class Balise
{
    // PROPRIETE 
    public $innerHTML = "";

    // METHODES
    function __construct($param1)
    {
        $this->innerHTML = $param1;

        echo "<section>";

        echo $this->innerHTML;
    }

    function __destruct()
    {
        echo "</section>";
    }

}

$balise = new Balise("le texte dans ma balise");
