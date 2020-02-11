<?php

$panier = [ "chaussures", "casquettes", "chaussettes" ];
// JE VEUX PARCOURIR CHAQUE ELEMENT DU TABLEAU 
// DU PREMIER AU DERNIER
// PHP VA DONNER COMME VALEUR A LA VARIABLE $produit
// LES VALEURS DU TABLEAU A CHAQUE BOUCLE
foreach($panier as $produit)
{
    echo "<h4>$produit</h4>";
}

// POUR DEBUGGUER (DEVELOPPEUR)
// POUR SAVOIR LE CONTENU D'UN TABLEAU
print_r($panier);
// POUR AFFICHER LA VALEUR D'UNE VARIABLE
// AIDE POUR COMPRENDRE LES VALEURS DANS LES VARIABLES
var_dump($panier);



// SI JE VEUX OBTENIR LA MEME CHOSE QUE foreach AVEC for
// QUEL SERAIT LE CODE A ECRIRE ?
// BUT: AFFICHER CHAQUE ELEMENT DU TABLEAU

for ($i=0; $i < count($panier); $i = $i+1)
{
    echo "<h4>$panier[$i]</h4>";
}


// AVEC UN WHILE
$i=0;
while ($i < count($panier))
{
    echo "<h4>$panier[$i]</h4>";
    $i = $i+1;
}
?>
