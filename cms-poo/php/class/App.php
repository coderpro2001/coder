<?php

class App 
{
    // METHODES STATIC (COLLECTIF)
    // ON CREE UNE PREMIERE METHODE DANS NOTRE CLASSE
    static function start ()
    {
        // DEBUG
        // echo "(start)";

        // INSTALLER LE CHARGEMENT AUTOMATIQUE DE CLASSE
        // https://www.php.net/manual/fr/function.spl-autoload-register.php
        spl_autoload_register("App::chargerCodeClass");


        // $test = new Test;   
                        // PHP A BESOIN DE CONNAITRE LA CLASSE Test
                        // PHP VA APPELER LA METHODE App::chargerCodeClass("Test");
                        // SI LA METHODE MAGIQUE __construct EXISTE DANS LA CLASSE Test
                        // ALORS PHP VA L'APPELER AUTOMATIQUEMENT

        // ICI DANS NOTRE PROJET CMS
        // ON VEUT AFFICHER UNE PAGE WEB
        // NORMALEMENT ON DEVRAIT FAIRE DU MVC
        // AFFICHAGE => VIEW
        App::afficherPage();
    }

    static function afficherPage ()
    {

        // EXEMPLE:
        // SI LE NAVIGATEUR DEMANDE COMME URL
        // http://localhost:81/simplon/coder/cms-poo/presentation.php?param1=valeur1

        // EN PHP, JE PEUX EXTRAIRE LES DIFFERENTES INFOS
        // $uri      = "/simplon/coder/cms-poo/presentation.php?param1=valeur1";
        // $path     = "/simplon/coder/cms-poo/presentation.php";
        // $filename = "presentation";

        // ROUTAGE/ROUTEUR
        // AVEC LE POINT D'ENTREE UNIQUE
        // IL FAUT QUE PHP DISTINGUE QUELLE PAGE LE NAVIGATEUR DEMANDE
        // COOL PHP ME DONNE CETTE INFO...
        $uri = $_SERVER["REQUEST_URI"];
        // ON VA EXTRAIRE SIMPLEMENT LE BOUT QUI NOUS INTERESSE
        // https://www.php.net/manual/fr/function.parse-url.php
        // https://www.php.net/manual/fr/function.pathinfo
        extract(parse_url($uri));
        // => EXTRAIRE LE CHEMIN DANS $path
        extract(pathinfo($path));
        // => EXTRAIRE LE NOM DU FICHIER SANS L'EXTENSION DANS $filename

        // PAR DEFAUT, ON UTILISE LE TEMPLATE defaut
        $templateActif = "defaut";
        
        // ON VA GARDER DES PAGES "SPECIALES" SANS LES AVOIR DANS LA TABLE SQL page
        // CA PERMET D'ASSOCIER UN $filename AVEC UN FICHIER TEMPLATE DIRECTEMENT...
        // (ON POURRAIT AJOUTER UNE COLONNE template DANS LA TABLE page POUR POUVOIR LE GERER DANS SQL...)

        if ($filename == "api")
        {
            // ON BASCULE SUR LE TEMPLATE api
            $templateActif = "api";
        }
        if ($filename == "admin")
        {
            // ON BASCULE SUR LE TEMPLATE admin
            $templateActif = "admin";
        }
        if ($filename == "logout")
        {
            // ON BASCULE SUR LE TEMPLATE logout
            $templateActif = "logout";
        }

        // SI JE GARDE LE CONTENU DE MON SITE DANS UNE TABLE SQL
        // IL FAUT AVOIR UNE LIGNE PAR PAGE A AFFICHER
        // TABLE SQL    page
        //      id          INT             INDEX=PRIMARY   A_I
        //      filename    VARCHAR(160)
        //      titre       VARCHAR(160)
        //      contenu     TEXT
        //      image       VARCHAR(160)

        // "page"       EST LE NOM DE LA TABLE
        // "filename"   EST LE NOM DE LA COLONNE
        // $filename    EST LA VALEUR CHERCHEE POUR SELECTIONNER LA BONNE LIGNE
        /*
            SELECT * FROM page WHERE filename = '$filename'
        */
        $tabResult = Model::read("page", "filename", $filename);    // (PHP CHARGE TOUT SEUL LE CODE DE Model...)

        foreach($tabResult as $tabLigne)
        {
            extract($tabLigne);
            // => VA CREER LES VARIABLES A PARTIR DES NOMS DE COLONNE
            // => $id, $filename, $titre, $contenu, $image
        }

        // ET SI ON AJOUTE UN CRUD SUR CETTE TABLE SQL
        // => CA Y'EST ON A CREE UN CMS ;-p

        // ON VA FAIRE SIMPLE
        // JE REFAIS DES require_once
        // LE DEVELOPPEUR SE RETROUVE AVEC DES FICHIERS TEMPLATES A DECOUPER...
        // PROCESSUS CLASSIQUE
        //  GRAPHISTE QUI TRAVAILLE AVEC DES OUTILS PHOTOSHOP, ILLUSTRATOR, AFFINITY, FIGMA, etc... 
        //  INTEGRATEUR QUI CREE LES TEMPLATES HTML, CSS, JS
        //  ENFIN LE DEV DECOUPE CES TEMPLATES EN FICHIERS PHP... 
        require_once "php/view/template-$templateActif.php";

    }

    // PHP VA APPELER CETTE METHODE QUAND PHP AURA BESOIN D'UNE CLASSE
    // ET PHP FOURNIRA LA VALEUR AU PARAMETRE
    // EXEMPLE: SI ON ECRIT CE CODE
    // $test = new Test
    //                  => PHP VA APPELER App::chargerCodeClass("Test");
    static function chargerCodeClass ($className)
    {
        // DEBUG
        // echo "(PHP A BESOIN DE $className)";
        
        // ASTUCE: POUR AUTOMATISER LE CHARGEMENT DE CODE
        //      ON PREND COMME CONVENTION QUE LA CLASSE Test 
        //      SERA DANS LE FICHIER php/class/Test.php

        // IL FAUT AJOUTER LE CODE QUI CHARGE LE FICHIER 
        // QUI CONTIENT LA DEFINITION DE LA CLASSE
        require_once "php/class/$className.php";
    }

}