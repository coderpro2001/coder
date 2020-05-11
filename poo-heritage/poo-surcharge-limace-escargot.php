<?php

// DEV1
class Limace
{

    public function afficherComposition ()
    {
        echo "<h3>J'ai juste un corps</h3>";
    }
}

class Escargot
    extends Limace
{
    public function afficherComposition ()
    {
        echo "<h3>J'ai un corps et aussi une coquille</h3>";
    }
}




// DEV2
$tabLimace = [
   new Limace,
   new Limace,
   new Escargot,
   new Limace,
];








// DEV3: PLUS SIMPLE TOUS LES ELEMENTS PEUVENT CONSIDERES COMME AYANT LA METHODE afficherComposition
// POUR NOUS, IL N'Y A QUE DES LIMACES...
foreach($tabLimace as $limace)
{
    // POUR TOUS LES ELEMENTS ON FAIT APPEL A LA MEME METHODE
    // MAIS SUIVANT L'OBJET ON PEUT OBTENIR UN RESULTAT DIFFERENT
    $limace->afficherComposition();
}


