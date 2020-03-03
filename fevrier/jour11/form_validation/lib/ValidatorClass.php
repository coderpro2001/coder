<?php

// A titre d'exemple seulement et pour introduction au concept de Programmation Orientée Objet (POO)
// On peut transformer le fichier validator.php et créer une classe PHP qu'on appelle ValidatorClass
// Cette classe contiendra les propriétés et les méthodes (ou fonctions) nécessaires à la validation des différents inputs du formulaire

class ValidatorClass
{
    public function validateInput($str)
    {
        return stripslashes(htmlspecialchars(trim($str)));
    }

    public function comparePwd($pwd1, $pwd2)
    {
        if ($pwd1 === $pwd2) {
            return true;
        }

        return false;
    }
}
