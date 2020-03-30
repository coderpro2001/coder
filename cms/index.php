<?php

// EN FONCTIONNEL
// COMPOSER LA PAGE AVEC 3 MORCEAUX
// require_once "php/view/header.php";
// require_once "php/view/section-index.php";
// require_once "php/view/footer.php";

// EN POO
// CHARGEMENT AUTOMATIQUE DE CLASSE
// ON VA POUVOIR METTRE EN PLACE UN CHARGEMENT AUTOMATIQUE DE CLASSE
// https://www.php.net/manual/fr/function.spl-autoload-register.php
// UN PEU COMME LES addEventListener EN JS...
function chargerCodeClasse ($parametre)
{
    // DEBUG 
    // echo "<h4>(PHP A BESOIN DE CHARGER $parametre)</h4>";
    // ???
    // SI ON VEUT FAIRE PLAISIR A PHP, IL FAUT CHARGER LE CODE DE LA CLASSE ATTENDUE
    // ON A ETE MALIN
    // LE FICHIER A LE MEME NOM QUE LA CLASSE
    require_once "php/class/$parametre.php";

}

// CE SERA PHP QUI VA APPELER LA FONCTION chargerCodeClasse
spl_autoload_register("chargerCodeClasse");

// ON FAIT DE LA POO
// ON APPELLE UNE METHODE RANGEE DANS UNE CLASSE
Site::afficherPage("index");

