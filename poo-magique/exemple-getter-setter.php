<?php

class User
{
    // propriété => protected OU private
    protected $login = "valeur par défaut";

    // méthodes GETTER et SETTER
    // GETTER => LECTURE
    function getLogin()
    {
        return $this->login;
    }

    // SETTER => ECRITURE
    function setLogin ($param)
    {
        $this->login = $param;
    }
}


$user1 = new User;
// blocage de l'accès direct car protected
// echo $user1->login;
// ok car la méthode est public
echo $user1->getLogin();

echo "<hr>";

$user1->setLogin("une nouvelle valeur");
echo $user1->getLogin();

