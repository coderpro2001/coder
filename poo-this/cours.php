<?php

// DECLARATION
class User
{
    // COLLECTIF
    // PROPRIETES static
    static $nbPied = 2;

    // METHODES STATIC DE CLASSE
    static function getNbPied ()
    {
        return User::$nbPied;
    }

    // INDIVIDUEL 
    // PROPRIETES D'OBJET
    public $login = "";

    // METHODES D'OBJET
    function getLogin ()
    {
        // https://www.php.net/manual/fr/function.var-dump.php
        var_dump($this);
        // $this REPRESENTE L'OBJET (DE LA CLASSE User) PAR LEQUEL J'AI APPELE LA METHODE

        // DANS LES METHODES D'OBJET, SI J'AI BESOIN D'UTILISER UNE PROPRIETE DE L'OBJET
        // JE PASSE PAR $this
        return $this->login;    // ATTENTION: PIEGE CLASSIQUE PAS DE $ A login
    }

}

echo "<h3>PAR CLASSE (static)</h3>";
// UTILISATION
// POUR CE QUI EST static JE PASSE PAR LA CLASSE...
// PROGRAMMATION PAR CLASSE => ASSEZ SIMILAIRE A LA PROGRAMMATION FONCTIONNELLE
echo User::getNbPied();

echo "<h3>PAR OBJET</h3>";
// POO
// JE CREE D'ABORD UN OBJET A PARTIR DE LA CLASSE (INSTANCIATION)
$user = new User;

// ET ENSUITE JE PASSE PAR L'OBJET POUR ACCEDER AUX PROPRIETES ET AUX METHODES D'OBJET
$user->login = "login13";
echo $user->getLogin();

// JE PEUX CREER UN AUTRE User
$user2 = new User;
$user2->login = "marseille13";

echo "<h3>premier user</h3>";
echo $user->getLogin();     // JE PASSE PAR L'OBJET $user POUR APPELER LA METHODE getLogin
                            // ET PHP FAIT $this = $user
echo "<h3>deuxième user</h3>";
echo $user2->getLogin();    // JE PASSE PAR L'OBJET $user2 POUR APPELER LA METHODE getLogin
                            // PHP FAIT $this = $user2










