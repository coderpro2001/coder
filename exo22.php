<?php

// LES VALEURS PAR DEFAUT 
// PERMETTENT DE CREER DES PARAMETRES OPTIONNELS
function additionner3 ($nombre1, $nombre2, $nombre3=10)
{
    echo "(DANS LA FONCTION: $nombre1 + $nombre2 + $nombre3)";
    $resultat = $nombre1 + $nombre2 + $nombre3;

    return $resultat;
}

// AU MOMENT DE L'APPEL, JE PEUX ALLEGER MON CODE
// EN NE FOURNISSANT PAS LA VALEUR PAR DEFAUT
$somme = additionner3(2, 3);
// $nombre1 = 2
// $nombre2 = 3
// $nombre3 = 10

echo "<h1>LA SOMME EST $somme</h1>";


$somme = additionner3(2, 3, 4);
// $nombre1 = 2
// $nombre2 = 3
// $nombre3 = 4

echo "<h1>LA SOMME EST $somme</h1>";

echo "<h1>LA SOMME EST " . additionner3(2,3,4) . "</h1>";

// ATTENTION: LE TAUX DE TVA EST DEJA EN POURCENTAGE
function calculerPrixTTC ($prixHT, $tauxTVA=1.2)
{
    $resultat = $prixHT * $tauxTVA;
    return $resultat;
}

$prixTTC = calculerPrixTTC(100);

echo "<h1>LE PRIX TTC EST DE $prixTTC euros</h1>";

$prixTTC = calculerPrixTTC(100, 1.1);

echo "<h1>LE PRIX TTC EST DE $prixTTC euros</h1>";



// DEFINITION DE LA FONCTION
function additionner ($tabNombre)
{
    // DEBUG
    var_dump($tabNombre);

    // ICI IL FAUT AJOUTER VOTRE CODE POUR REALISER LE TRAVAIL...
    $resultat = 0;  
    // AU DEPART, COMME ON N'A PAS ADDITIONNE ALORS LA SOMME EST EGALE A ZERO

    // ON PARCOURT CHAQUE NOMBRE DANS LE TABLEAU
    foreach($tabNombre as $indice => $nombre)
    {
        // DEBUG
        // var_dump($nombre);
        echo "($indice, $nombre)";

        $resultat += $nombre;
        // $resultat = $resultat + $nombre;
    }

    return $resultat;
}

// APPEL DE LA FONCTION
$somme = additionner([ 3, 6, 7, 8 ]);   // 24
// $tabNombre = [ 3, 6, 7, 8 ]

echo "<h1>LE RESULTAT EST $somme</h1>";

