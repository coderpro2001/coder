<?php

// ETAPE1: DECLARATION DE LA FONCTION
function renvoyerMin ($tabNombre)
{
    // QUEL SERAIT LE CODE POUR OBTENIR CE RESULTAT ?
    // SI JE VEUX PRENDRE CHAQUE ELEMENT D'UN TABLEAU
    // => BOUCLE
    // IL FAUT DONNER UNE VALEUR A $plusPetit
    $plusPetit = $tabNombre[0]; // ON PREND LA PREMIERE VALEUR
    foreach($tabNombre as $nombre)
    {
        // SI JE COMPARE DES VALEURS => CONDITION
        if ($nombre < $plusPetit)
        {
            // $nombre EST PLUS PLUS PETIT QUE $plusPetit
            // DONC LE PLUS PETIT EST LE NOMBRE
            $plusPetit = $nombre;
        }
    } 

    return $plusPetit;
}

// ETAPE2: APPELER LA FONCTION AVEC DES VALEURS
// CONSEIL: COMMENT VOUS FAITES AVEC VOTRE CERVEAU HUMAIN ?
$min = renvoyerMin([ 20, 6, 50, 8, 47, 0 ]);
// ON LIT DE GAUCHE A DROITE
// ET ON COMPARE LE PLUS PETIT AVEC LE NOUVEAU NOMBRE
// => ALGORITHMIQUE
// => ENSEMBLE DES ETAPES POUR RESOUDRE UN PROBLEME
// =>TRAVAIL DU DEVELOPPEUR: TRADUIRE CES ETAPES EN CODE

echo "<h1>LE PLUS PETIT EST $min</h1>";


$min = renvoyerMin([ 20, 6, -5, 50, 8, 47, 0 ]);
echo "<h1>LE PLUS PETIT EST $min</h1>";



// https://www.isograd.com/FR/solutionconcours.php



// CREER UNE FONCTION 
// QUI CALCULE LA SURFACE DES 4 MURS D'UNE PIECE
// EN PARAMETRE, ON DONNERA LA LONGUEUR, LA LARGEUR ET LA HAUTEUR
function calculerSurface ($longueur, $largeur, $hauteur)
{
    // $surfaceMurs = $longueur * $hauteur * 2 + $largeur * $hauteur * 2;
    // facorisation
    $surfaceMurs = 2 * $hauteur * ($longueur + $largeur);

    return $surfaceMurs;
}


// ETAPE 2
$surfaceMurs = calculerSurface(5, 4, 3);
// => RESULTAT = 54

echo "<h1>LA SURFACE DES 4 MURS EST $surfaceMurs m2</h1>";


