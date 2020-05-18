<?php

// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*

(header)
(SECTION1)
(SECTION2)
(SECTION3)
(footer)

*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

// version $string

// class Page
// {
//     public $content = '';

//     public function ajouterContenu($string)
//     {
//         $this->content .= $string."\n";
//     }

//     public function afficherListe()
//     {
//         echo "
//         (header)<br />
//         {$this->content}
//         (footer)<br />
//         ";
//     }
// }

// version array

class Page
{
    public $content = [];

    public function ajouterContenu($string)
    {
        array_push($this->content, $string);
    }

    public function afficherListe()
    {
        echo '(header)<br />';

        // ici je peux utiliser une boucle
        foreach ($this->content as $elem) {
            // code...
            echo "{$elem}<br />";
        }

        echo '(footer)<br />';
    }
}

// CODE NON MODIFIABLE
$objetPage = new Page();
$objetPage->ajouterContenu('SECTION1');
$objetPage->ajouterContenu('SECTION2');
$objetPage->ajouterContenu('SECTION3');
$objetPage->ajouterContenu('SECTION4');

$objetPage->afficherListe();
