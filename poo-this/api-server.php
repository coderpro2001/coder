<?php

$tabAssoJSON = [
    "cle"       => "valeur",
    "date"      => date("Y-m-d H:i:s"),
    "request"   => $_REQUEST,
];

// ON PEUT CREER DIRECTEMENT UN TABLEAU AVEC UN ELEMENT
$tabAssoJSON["codeVue"] =
<<<CODEVUE

<h2>TITRE DE MA SECTION {{ message }}</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi veniam, consequuntur quae quas quam voluptatibus molestias aut corrupti excepturi aspernatur totam nemo impedit culpa ipsam, eligendi cumque dolorum alias voluptatum.</p>
<input type="text" v-model="message">
{{ message.length }}

CODEVUE;

echo json_encode($tabAssoJSON, JSON_PRETTY_PRINT);

/*
// \r => RETURN CARRIAGE (RETOUR CHARIOT A LA PREMIERE COLONNE)
// \n => NEWLINE (AVANCER SUR LA LIGNE SUIVANTE POUR NE PAS ECRIRE SUR LE TEXTE DEJA LA...)
// ligne1\r\nligne2
// PERMET D'OBTENIR L'AFFICHAGE SUR 2 LIGNES

ligne1
ligne2

*/
