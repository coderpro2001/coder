<?php

/**
 * supprime les espaces vides avant et après la chaîne de caractères
 * convertit les caractères spéciaux en entités HTML (éviter les injections SQL)
 * supprime les antishahes.
 *
 * @param string $str
 *
 * @return string
 */
function validateInput($str)
{
    return stripslashes(htmlspecialchars(trim($str)));
}

/**
 * vérifie si les 2 chaînes de caractères passées en paramètres sont identiques (===).
 *
 * @param string $pwd1
 * @param string $pwd2
 *
 * @return bool
 */
function comparePwd($pwd1, $pwd2)
{
    if ($pwd1 === $pwd2) {
        return true;
    }

    return false;
}
