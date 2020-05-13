<?php


// ATTENTION: CES METHODES SONT PUBLIQUES
// ELLES PEUVENT ETRE ACTIVEES DEPUIS l'EXTERIEUR... 
// DANGER POTENTIEL... BIEN SECURISER CETTE PARTIE...
class ApiUser
{
    // PROPRIETE COLLECTIVE
    static $confirmation    = "";
    static $cleApi          = "";

    // METHODES
    // METHODES
    static function create ()
    {
        // ICI, ON VA TRAITER LE FORMULAIRE DE create
        // RECUPERER LES INFOS DU FORMULAIRE
        // TODO: SECURITE ET VALIDATION...
        // ET ON VA LES INSERER DANS LA TABLE Page

        $tabAssoColonneValeur = [
            "email"         => $_REQUEST["email"] ?? "",
            "login"         => $_REQUEST["login"] ?? "",
            "password"      => $_REQUEST["password"] ?? "",
            "level"         => 10,       // PHP EST SYMPA ON PEUT LAISSER LA VIRGULE
        ];

        // ETAPE SUPPLEMENTAIRE
        // HASHER LE MOT DE PASSE
        $tabAssoColonneValeur["password"] = password_hash($tabAssoColonneValeur["password"], PASSWORD_DEFAULT);

        // ON VA INSERER DANS LA TABLE SQL Page
        $requetePrepareeSQL = 
<<<CODESQL

INSERT INTO user
( email, login, password, level )
VALUES
( :email, :login, :password, :level )

CODESQL;

        Model::envoyerRequeteSQL($requetePrepareeSQL, $tabAssoColonneValeur);

    }

    static function login ()
    {
        // LES INFOS DE FORMULAIRES SONT RECUPEREES DANS $_REQUEST
        $emailForm      = $_REQUEST["email"] ?? "";
        $passwordForm   = $_REQUEST["password"] ?? "";

        $tabResult = Model::read("user", "email", $emailForm);

        // DEV
        // NORMALEMENT DANS LE CREATE (INSCRIPTION D'UN NOUVEL UTILISATEUR...)
        $passwordHash = password_hash($passwordForm, PASSWORD_DEFAULT);

        foreach($tabResult as $tabLigne)
        {
            extract($tabLigne);
            // => CREE LES VARIABLES A PARTIR DES COLONNES
            // $id, $login, $email, $password, $level
            // ATTENTION: $password EST LE MOT DE PASSE HASHE
        }
        // => CREE UNE VARIABLE PAR COLONNE $id, $login, $password, $level
        // ATTENTION, ON A DEJA $password

        if (!empty($tabLigne))  // ON A TROUVE UNE LIGNE
        {
            // https://www.php.net/manual/fr/function.password-verify.php
            // ATTENTION: $passwordForm EST LE MOT DE PASSE EN CLAIR (DU FORMULAIRE)
            //              ET $password EST LE MOT DE PASSE HASHE (DE SQL)
            if (password_verify($passwordForm, $password))
            {
                // OK
                // AJOUTER ICI LE CODE QUI GERE LE LOGIN...
                ApiUser::$confirmation = "BIENVENUE $login, VOUS AVEZ LE LEVEL $level";

                // POUR COMPLETER
                // ON DOIT RENVOYER AU NAVIGATEUR UN BADGE D'ACCES
                // => TOKEN D'IDENTIFICATION
                // ET ENSUITE LE VISITEUR POURRA UTILISER CE BADGE DANS LA PARTIE ADMIN...
                // (LA PARTIE ADMIN POURRA VERIFIER SI LE BADGE EST VALIDE...)
                if ($level >= 100)
                {
                    // ON VA RENVOYER LA CLE API
                    ApiUser::$cleApi = "TEXTE-SECRET-FOURNI-PAR-LE-LOGIN";
                }
            }
            else
            {
                // KO
                // AJOUTER ICI LE CODE QUI GERE LE LOGIN...
                ApiUser::$confirmation = "DESOLE, LE MOT DE PASSE EST INCORRECT ($passwordHash)";
            }
        }
        else
        {
            // KO email NON TROUVE
            ApiUser::$confirmation = "DESOLE, L'EMAIL EST INCORRECT ($passwordHash)";
        }

    }


    static function update ()
    {
        // ...
    }

    static function delete ()
    {
        // ...
    }
}