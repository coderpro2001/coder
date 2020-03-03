<ol>
<?php

// JE MEMORISE LA VALEUR 1 DANS LA VARIABLE $compteur
$compteur = 0;  
// TANT QUE LA VALEUR DE LA VARIABLE $compteur 
//              EST PLUS PETIT OU EGAL QUE 60
while ($compteur < 60)     // resultat du test => true OU false
{
    echo "<li>($compteur)</li>";

    // SI LE TEST EST true
    // PHP EXECUTE LE BLOC D'ACCOLADES
    // echo "<li>($compteur)</li>";

    // GENERALEMENT, ON INCREMENTE AVANT L'ACCOLADE FERMANTE
    // JE CHANGE LA VALEUR DE $compteur AVEC LE RESULTAT DE L'ADDITION
    $compteur = $compteur + 1;
} // PHP RETOURNE A A LIGNE while POUR REFAIRE UN TEST => BOUCLE

echo "<h3>FINI</h3>";

?>
</ol>
