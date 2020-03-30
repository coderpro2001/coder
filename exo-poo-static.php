<?php


// SI ON DOIT CHARGER NOUS MEMES CHAQUE CLASSE
// IL FAUT RAJOUTER UNE LIGNE SUPPLEMENTAIRE A CHAQUE NOUVELLE CLASSE
// ...
// require_once "php/class/Enseignant.php";
// require_once "php/class/Bucheron.php";
// require_once "php/class/Coiffeuse.php";

// ON VA POUVOIR METTRE EN PLACE UN CHARGEMENT AUTOMATIQUE DE CLASSE
// https://www.php.net/manual/fr/function.spl-autoload-register.php
// UN PEU COMME LES addEventListener EN JS...
function chargerCodeClasse ($parametre)
{
    // DEBUG 
    echo "<h4>(PHP A BESOIN DE CHARGER $parametre)</h4>";
    // ???
    // SI ON VEUT FAIRE PLAISIR A PHP, IL FAUT CHARGER LE CODE DE LA CLASSE ATTENDUE
    // ON A ETE MALIN
    // LE FICHIER A LE MEME NOM QUE LA CLASSE
    require_once "php/class/$parametre.php";

}

// CE SERA PHP QUI VA APPELER LA FONCTION chargerCodeClasse
spl_autoload_register("chargerCodeClasse");


// ETAPE2: APPEL A LA METHODE STATIC EN PASSANT PAR LA CLASSE
Enseignant::faireGreve();
// QUAND PHP LIT CETTE LIGNE: IL DOIT CONNAITRE LA CLASSE Enseignant
// MAIS IL NE CONNAIT PAS LA CLASSE CAR ON A DESACTIVE LES require_once
// => DANS CETTE SITUATION, PHP ACTIVE UN MECANISME AUTOMATIQUE
// => PHP APPELLE LA FONCTION FOURNIE AVEC spl_autoload_register
//              ET DONNE EN PARAMETRE $parametre = Enseignant

// SI JE VEUX APPELER LA METHODE couper
Bucheron::couper();

// ECRIRE UNE VALEUR DANS LA PROPRIETE
// SI JE VEUX DONNER UNE VALEUR A LA PROPRIETE static
Bucheron::$outil = "Scie";

// SI JE VEUX APPELER LA METHODE couper
Bucheron::couper();

echo "<h3>(STEP A)</h3>";

Coiffeuse::faireShampoing();

