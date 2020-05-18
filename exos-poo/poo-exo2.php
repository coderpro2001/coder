<?php

// AJOUTER LE CODE POO POUR AFFICHER
/*
(header)
(section)
(footer)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...
class Header
{
    public function __construct()
    {
        echo '(header)';
    }
}

 class Section
 {
     public function __construct()
     {
         echo '(section)';
     }
 }

class Footer
{
    public function __construct()
    {
        echo '(footer)';
    }
}

// CODE NON MODIFIABLE
// (LAISSER CE CODE TEL QUEL SINON TU PAIES UNE AMENDE...)
// CODE NON MODIFIABLE
$objetHeader = new Header();
$objetSection = new Section();
$objetFooter = new Footer();
