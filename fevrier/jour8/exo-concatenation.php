<?php

$nom = "bernard";
$age = 50;

// SI JE VEUX CONSTRUIRE LA PHRASE 
// BONJOUR JE M'APPELLE bernard ET J'AI 50 ANS
// OPERATEUR POUR CONCATENER EST .
$phrase = "BONJOUR JE M'APPELLE " . $nom . " ET J'AI " . $age . ' ANS';
// ASTUCE: POUR MOI C'EST UN DETECTEUR DE VIEUX CODE PHP
// => SI VOUS TUTORIEL AVEC CE GENRE DE CODE, PEUT A EVITER...

echo $phrase;

echo "<hr>"; // hr => HORIZONTAL RULE 

// ON A UNE VERSION SIMPLIFIEE POUR REDUIRE LE CODE
// ON DOIT UTILISER DES GUILLEMETS DOUBLES ""
$phrase2 = "BONJOUR JE M'APPELLE $nom ET J'AI $age ANS";

echo $phrase2;

echo "<hr>"; // hr => HORIZONTAL RULE 


$titre3     = "MON TITRE3";
$contenu    = "LE CONTENU DE MON ARTICLE";
$contenu2   = "LE 2e CONTENU DE MON ARTICLE";

// ON REMPLACE "" PAR NOS BALISES BALISEOUVRANTE
$texte =
<<<CODEHTML

    <article>
        <h3>$titre3</h3>
        <p>$contenu</p>  
    </article>

CODEHTML;


$texte2 =
<<<CODEHTML

    <article>
        <h3>$titre3</h3>
        <p>$contenu2</p>  
    </article>

CODEHTML;

echo $texte;    // JE VEUX AFFICHER LA VALEUR DE LA VARIABLE $texte
echo $texte2;    // JE VEUX AFFICHER LA VALEUR DE LA VARIABLE $texte2


