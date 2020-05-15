<?php

// LE CODE DE DEV1 EST UTILISE PAR DEV2
require_once "exemple-public-dev1.php";



$dev1 = new Dev1;

// LE DEV2 CROIT QUE LA PROPRIETE INFO IMPORTANTE PEUT ETRE MODIFIEE
// (car public)
$dev1->infoImportante = "une autre valeur";
// EN FAIT C'EST DEV2 QUI MET LE BOXON
// MAIS C'EST DEV1 QUI SE FAIT VIRER...

$dev1->faireTravail();
